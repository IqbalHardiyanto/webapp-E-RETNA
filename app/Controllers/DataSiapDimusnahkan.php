<?php

namespace App\Controllers;

use App\Models\BapModel;
use App\Models\NilaiGunaModel;
use App\Models\PasienModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

class DataSiapDimusnahkan extends Controller
{
    protected $session;
    public function __construct()
    {
        helper('url'); // Pastikan helper URL dimuat

        $this->session = session(); // Simpan session sebagai property

        if (!$this->session->get('isLoggedIn')) {
            header('Location: ' . base_url('/login'));
            exit();
        }
    }

    public function index()
    {
        $pasienModel = new PasienModel();

        // Mendapatkan daftar pasien yang statusnya 'dimusnahkan'
        $data['pasien_siapdimusnahkan'] = $pasienModel->where('status', 'siapmusnah')->findAll();

        return view('data_siapdimusnahkan/index', $data);
    }
    public function bapkerjasama()
    {
        $data = $this->request->getPost();

        // Model pasien
        $pasienModel = new PasienModel();
        $bapModel = new BapModel();
        $pasienSiapMusnah = $pasienModel->where('status', 'siapmusnah')->findAll();
        $jumlahPasienSiapMusnah = count($pasienSiapMusnah);

        // Jika tidak ada pasien siap musnah, hentikan proses
        if ($jumlahPasienSiapMusnah == 0) {
            return redirect()->to('/data-siapdimusnahkan')->with('error', 'Tidak ada pasien dengan status "siapmusnah".');
        }

        $data['jumlah_pasien_siap_musnah'] = $jumlahPasienSiapMusnah;

        // Path gambar
        $imgPath = FCPATH . 'assets/img/LOGO KABUPATEN PROBOLINGGO.png';

        // Cek apakah gambar ada
        if (!file_exists($imgPath)) {
            echo 'Gambar tidak ditemukan!';
            return;
        }

        // Konversi gambar ke base64
        $imgData = @file_get_contents($imgPath);
        if ($imgData === false) {
            echo 'Gagal membaca file gambar!';
            return;
        }
        $imgData = base64_encode($imgData);
        $imgSrc = 'data:image/png;base64,' . $imgData;
        $data['imgSrc'] = $imgSrc;

        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Times New Roman');
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        // Render HTML
        $html = view('data_siapdimusnahkan/bapkerjasama', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        try {
            $dompdf->render();
        } catch (\Exception $e) {
            echo 'Dompdf render exception: ' . $e->getMessage();
            log_message('error', 'Dompdf render exception: ' . $e->getMessage());
            return;
        }

        // Direktori penyimpanan PDF
        $uploadPath = WRITEPATH . 'uploads/bapkerjasama/';

        try {
            // Pastikan direktori ada
            if (!is_dir(WRITEPATH . 'uploads')) {
                mkdir(WRITEPATH . 'uploads', 0777, true);
            }
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $filename = 'bapkerjasama_' . time() . '.pdf';
            $filepath = $uploadPath . $filename;

            file_put_contents($filepath, $dompdf->output());

            // Simpan nama file (bukan path lengkap)
            $fileNameInDb = 'bapkerjasama/' . $filename;

            // Simpan ke database hanya nama file relatif
            $bapModel->insert([
                'judul' => 'BAP Kerjasama',
                'link_file' => $fileNameInDb, // Hanya simpan nama file relatif
                'keterangan' => 'Dokumen BAP Kerjasama',
                'id_pasien' => json_encode(array_column($pasienSiapMusnah, 'id')),
                'tanggal_dimusnahkan' => $this->request->getPost('hari_tanggal')
            ]);

            // Update status pasien
            foreach ($pasienSiapMusnah as $pasien) {
                $pasienModel->update($pasien['id'], ['status' => 'dimusnahkan']);
            }

            return redirect()->to('/data-siapdimusnahkan')->with('success', 'Data BAP kerjasama berhasil dibuat.');
        } catch (\Exception $e) {
            return redirect()->to('/data-siapdimusnahkan')->with('error', 'Data BAP kerjasama gagal dibuat.');
        }
    }


    public function bapnonkerjasama()
    {
        $data = $this->request->getPost();

        // Model pasien
        $pasienModel = new PasienModel();
        $bapModel = new BapModel();
        $pasienSiapMusnah = $pasienModel->where('status', 'siapmusnah')->findAll();
        $jumlahPasienSiapMusnah = count($pasienSiapMusnah);

        // Jika tidak ada pasien siap musnah, hentikan proses
        if ($jumlahPasienSiapMusnah == 0) {
            return redirect()->to('/data-siapdimusnahkan')->with('error', 'Tidak ada pasien dengan status "siapmusnah".');
        }

        $data['jumlah_pasien_siap_musnah'] = $jumlahPasienSiapMusnah;

        // Path gambar
        $imgPath = FCPATH . 'assets/img/LOGO KABUPATEN PROBOLINGGO.png';

        // Cek apakah gambar ada
        if (!file_exists($imgPath)) {
            echo 'Gambar tidak ditemukan!';
            return;
        }

        // Konversi gambar ke base64
        $imgData = @file_get_contents($imgPath);
        if ($imgData === false) {
            echo 'Gagal membaca file gambar!';
            return;
        }
        $imgData = base64_encode($imgData);
        $imgSrc = 'data:image/png;base64,' . $imgData;
        $data['imgSrc'] = $imgSrc;

        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Times New Roman');
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        // Render HTML
        $html = view('data_siapdimusnahkan/bapnonkerjasama', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        try {
            $dompdf->render();
        } catch (\Exception $e) {
            echo 'Dompdf render exception: ' . $e->getMessage();
            log_message('error', 'Dompdf render exception: ' . $e->getMessage());
            return;
        }

        // Direktori penyimpanan PDF
        $uploadPath = WRITEPATH . 'uploads/bapnonkerjasama/';

        try {
            if (!is_dir(WRITEPATH . 'uploads')) {
                mkdir(WRITEPATH . 'uploads', 0777, true);
            }
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $filename = 'bapnonkerjasama_' . time() . '.pdf';
            $filepath = $uploadPath . $filename;

            $fileNameInDb = 'bapnonkerjasama/' . $filename;
            file_put_contents($filepath, $dompdf->output());

            // Simpan ke database
            $bapModel->insert([
                'judul' => 'BAP Non Kerjasama',
                'link_file' => $fileNameInDb,
                'keterangan' => 'Dokumen BAP Non Kerjasama',
                'id_pasien' => json_encode(array_column($pasienSiapMusnah, 'id')),
                'tanggal_dimusnahkan' => $this->request->getPost('pelaksanaan_tanggal')
            ]);

            foreach ($pasienSiapMusnah as $pasien) {
                $pasienModel->update($pasien['id'], ['status' => 'dimusnahkan']);
            }

            return redirect()->to('/data-siapdimusnahkan')->with('success', 'Data BAP Non Kerjasama berhasil dibuat.');
        } catch (\Exception $e) {
            return redirect()->to('/data-siapdimusnahkan')->with('error', 'Data BAP Non Kerjasama gagal dibuat.');
        }
    }

    public function pemusnahan()
    {
        $pasienModel = new PasienModel();
        $nilaiGunaModel = new NilaiGunaModel();

        // Ambil pasien dengan status 'siapmusnah'
        $pasienList = $pasienModel->where('status', 'siapmusnah')->findAll();

        // Kumpulkan data pasien beserta dokumennya
        $patientsWithDocs = [];
        foreach ($pasienList as $pasien) {
            $docs = $nilaiGunaModel->where('id_pasien', $pasien['id'])->first();
            $patientsWithDocs[] = [
                'pasien' => $pasien,
                'docs' => $docs
            ];
        }

        // Handle logo
        $imgPath = FCPATH . 'assets/img/LOGO KABUPATEN PROBOLINGGO.png';
        if (!file_exists($imgPath)) {
            return redirect()->back()->with('error', 'Logo tidak ditemukan.');
        }
        $imgData = base64_encode(file_get_contents($imgPath));
        $imgSrc = 'data:image/png;base64,' . $imgData;

        // Siapkan data untuk view
        $data = [
            'patientsWithDocs' => $patientsWithDocs,
            'imgSrc' => $imgSrc,
            'tanggal' => date('d F Y'), // Tanggal saat ini
        ];

        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Times New Roman');
        $dompdf = new Dompdf($options);

        $html = view('data_siapdimusnahkan/pemusnahan', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Output PDF ke browser
        $dompdf->stream('Daftar_RM_Siap_Dimusnahkan.pdf', ['Attachment' => 1]);
    }
}
