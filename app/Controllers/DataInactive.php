<?php

namespace App\Controllers;

use App\Models\LogActivityModel;
use App\Models\NilaiGunaModel;
use App\Models\PasienModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class DataInactive extends Controller
{
    protected $session;
    protected $logModel;
    public function __construct()
    {
        helper('url'); // Pastikan helper URL dimuat

        $this->logModel = new LogActivityModel();
        $this->session = session(); // Simpan session sebagai property

        if (!$this->session->get('isLoggedIn')) {
            header('Location: ' . base_url('/login'));
            exit();
        }
    }
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta'); // Set timezone ke WIB
        $pasienModel = new PasienModel();
        $sevenYearsAgo = date('Y-m-d', strtotime('-7 years')); // Tanggal 7 tahun lalu
        $fiveYearsAgo = date('Y-m-d', strtotime('-5 years')); // Tanggal 5 tahun lalu

        // Update status menjadi "active" jika tanggal kunjungan kurang dari 5 tahun dan bukan "dimusnahkan", "siap_musnah", atau "diarsipkan"
        $pasienModel->where('tanggal_kunjungan_terakhir >=', $fiveYearsAgo)
            ->where('status !=', 'dimusnahkan')
            ->where('status !=', 'siapmusnah')
            ->where('status !=', 'diarsipkan')
            ->set(['status' => 'active'])
            ->update();

        // Update status menjadi "inactive" jika tanggal kunjungan lebih dari 5 tahun dan bukan "dimusnahkan", "siap_musnah", atau "diarsipkan"
        $pasienModel->where('tanggal_kunjungan_terakhir <', $fiveYearsAgo)
            ->where('status !=', 'dimusnahkan')
            ->where('status !=', 'siapmusnah')
            ->where('status !=', 'diarsipkan')
            ->set(['status' => 'inactive'])
            ->update();

        // Default filter: tampilkan semua pasien inactive
        $filter = $this->request->getGet('filter');

        if ($filter == 'lebih7') {
            // Pasien dengan kunjungan terakhir lebih dari 7 tahun
            $pasien = $pasienModel->where('status', 'inactive')
                ->where('tanggal_kunjungan_terakhir <', $sevenYearsAgo)
                ->findAll();
        } elseif ($filter == 'kurang7') {
            // Pasien dengan kunjungan terakhir kurang dari 7 tahun
            $pasien = $pasienModel->where('status', 'inactive')
                ->where('tanggal_kunjungan_terakhir >=', $sevenYearsAgo)
                ->findAll();
        } else {
            // Semua pasien inactive
            $pasien = $pasienModel->where('status', 'inactive')
                ->where('tanggal_kunjungan_terakhir >=', $sevenYearsAgo)
                ->findAll();
        }

        return view('data_inactive/index', ['pasien' => $pasien, 'filter' => $filter]);
    }
    public function uploadnilaiguna($id)
    {
        $pasienModel = new PasienModel();
        $pasien = $pasienModel->where('id', $id)->first();

        // Kirim data pasien ke view
        return view('data_inactive/upload_nilai_guna', [
            'pasien' => $pasien
        ]);
    }

    public function storeNilaiGuna()
    {
        $model = new PasienModel();
        // Mendapatkan id_pasien dari input
        $id_pasien = $this->request->getPost('id_pasien');
        $upload_path = WRITEPATH . 'uploads/nilai_guna/' . $id_pasien . '/'; // Path berdasarkan id_pasien

        // Membuat folder jika belum ada
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true); // Membuat folder berdasarkan id_pasien
        }

        // Menyimpan jenis formulir
        $jenis_formulir = $this->request->getPost('jenis_formulir');
        $jenis_formulir_string = is_array($jenis_formulir) ? implode(", ", $jenis_formulir) : '';

        $fields = ['dokumen_rekam_medis_sesuai_kepentingan_pelayanan', 'ringkasan_masuk_dan_keluar', 'resume_medis', 'lembar_operasi', 'identifikasi_bayi_lahir', 'informed_consent', 'lembar_kematian'];
        $data = [
            'id_pasien' => $id_pasien,
            'doc_rekam_medis' => $jenis_formulir_string
        ];

        // Iterate over each file field
        foreach ($fields as $field) {
            $file = $this->request->getFile($field); // Get the uploaded file

            // Check if the file is valid
            if ($file && $file->isValid()) {

                $file_extension = $file->getExtension();
                $file_name = $id_pasien . '_' . time() . '_' . $field . '.' . $file_extension;
                $file->move($upload_path, $file_name); // Move the file to the upload directory

                // Save the file path to the data array
                $data[$field] = 'uploads/nilai_guna/' . $id_pasien . '/' . $file_name; // Save the path
            }
        }

        // Insert ke tabel nilai_guna_files menggunakan model CI4
        $nilaiGunaModel = new NilaiGunaModel();
        $nilaiGunaModel->insertFile($data);

        // Update status pasien menjadi "sudah di musnahkan"
        $pasienModel = new PasienModel();
        $pasienModel->update($id_pasien, [
            'status' => 'diarsipkan',
            'updated_at' => date('Y-m-d H:i:s') // Menambahkan updated_at
        ]);

        // Menambahkan log tindakan
        $this->logModel->insert([
            'id_user' => $this->session->get('id'),  // Mengambil id user dari session
            'actions' => 'Mengupload nilai guna pasien dengan ID Pasien: ' . $id_pasien . ' dan status telah diperbarui.',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // Menampilkan pesan sukses
        session()->setFlashdata('success', 'File berhasil diupload dan status pasien telah diperbarui.');

        // Redirect ke halaman yang sesuai
        return redirect()->to('/data-diarsipkan');
    }

    public function exportPDF()
    {
        $pasienModel = new PasienModel();
        $sevenYearsAgo = date('Y-m-d', strtotime('-7 years')); // 5+2 tahun

        $pasien = $pasienModel->where('status', 'inactive')
            ->where('tanggal_kunjungan_terakhir <', $sevenYearsAgo)
            ->findAll();

        $dompdf = new \Dompdf\Dompdf();

        // Load view dengan data
        $html = view('data_inactive/laporan', ['pasien' => $pasien]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $dompdf->stream('pasien_inactive_retensi.pdf', ['Attachment' => 0]);
    }
}
