<?php

namespace App\Controllers;

use App\Models\PasienModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

class DataActive extends Controller
{
    protected $session;
    protected $pasienModel;

    public function __construct()
    {
        helper('url');
        $this->session = session();
        $this->pasienModel = new PasienModel();

        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/login');
            exit();
        }
    }

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $fiveYearsAgo = date('Y-m-d', strtotime('-5 years'));

        // Update status aktif
        $this->pasienModel
            ->where('tanggal_kunjungan_terakhir >=', $fiveYearsAgo)
            ->where('status !=', 'dimusnahkan')
            ->where('status !=', 'siapmusnah')
            ->where('status !=', 'diarsipkan')
            ->set(['status' => 'active'])
            ->update();

        // Update status inactive
        $this->pasienModel
            ->where('tanggal_kunjungan_terakhir <', $fiveYearsAgo)
            ->where('status !=', 'dimusnahkan')
            ->where('status !=', 'siapmusnah')
            ->where('status !=', 'diarsipkan')
            ->set(['status' => 'inactive'])
            ->update();

        // Ambil data pasien aktif
        $data['pasien'] = $this->pasienModel
            ->where('status', 'active')
            ->findAll();

        return view('data_active/index', $data);
    }

    public function printActivePatients()
    {
        // Ambil data pasien aktif
        $dataPasien = $this->pasienModel
            ->where('status', 'active')
            ->orderBy('nama_pasien', 'ASC')
            ->findAll();

        // Validasi jika data kosong
        if (empty($dataPasien)) {
            return redirect()->to('/data-active')
                ->with('error', 'Tidak ada data pasien aktif');
        }

        // Path gambar
        $imgPath = FCPATH . 'assets/img/LOGO KABUPATEN PROBOLINGGO.png';

        // Cek apakah gambar ada
        if (!file_exists($imgPath)) {
            return redirect()->to('/data-active')
                ->with('error', 'Gambar logo tidak ditemukan');
        }

        // Konversi gambar ke base64
        $imgData = file_get_contents($imgPath);
        if ($imgData === false) {
            return redirect()->to('/data-active')
                ->with('error', 'Gagal membaca file gambar');
        }
        $imgSrc = 'data:image/png;base64,' . base64_encode($imgData);

        // Siapkan data untuk PDF
        $data = [
            'pasien' => $dataPasien,
            'title' => 'Laporan Pasien Aktif',
            'imgSrc' => $imgSrc
        ];

        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Times New Roman');
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        // Generate HTML
        $html = view('data_active/laporan', $data);

        // Load HTML ke Dompdf
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');

        try {
            $dompdf->render();
        } catch (\Exception $e) {
            log_message('error', 'Dompdf render exception: ' . $e->getMessage());
            return redirect()->to('/data-active')
                ->with('error', 'Gagal menghasilkan PDF: ' . $e->getMessage());
        }

        // Output ke browser
        $dompdf->stream(
            "laporan-pasien-aktif-" . date('Ymd-His') . ".pdf",
            ["Attachment" => false]
        );
    }
}
