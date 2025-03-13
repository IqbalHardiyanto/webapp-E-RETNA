<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class UploadController extends Controller
{
    public function viewFile($id_pasien, $file_name)
    {
        // Tentukan path folder tempat file disimpan untuk nilai_guna
        $uploadPath = WRITEPATH . 'uploads/nilai_guna/' . $id_pasien . '/';

        // Tentukan path lengkap ke file yang diminta
        $filePath = $uploadPath . $file_name;

        // Cek apakah file ada
        if (is_file($filePath)) {
            // Menentukan tipe konten untuk file yang ditampilkan
            $mimeType = mime_content_type($filePath);

            // Mengirimkan file untuk ditampilkan di browser
            return $this->response->setHeader('Content-Type', $mimeType)
                ->setHeader('Content-Disposition', 'inline; filename="' . basename($filePath) . '"')
                ->setBody(file_get_contents($filePath));
        } else {
            // Menangani jika file tidak ditemukan
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('File tidak ditemukan');
        }
    }

    // Fungsi baru untuk melihat file BAP
    public function viewBAPFile($folder, $file_name)
    {
        // Tentukan path folder tempat file BAP disimpan
        $uploadPath = WRITEPATH . 'uploads/' . $folder . '/';

        // Tentukan path lengkap ke file yang diminta
        $filePath = $uploadPath . $file_name;

        // Debug untuk memastikan file path sudah benar
        // dd($filePath);

        // Cek apakah file ada
        if (is_file($filePath)) {
            // Menentukan tipe konten untuk file yang ditampilkan
            $mimeType = mime_content_type($filePath);

            // Mengirimkan file untuk ditampilkan di browser
            return $this->response->setHeader('Content-Type', $mimeType)
                ->setHeader('Content-Disposition', 'inline; filename="' . basename($filePath) . '"')
                ->setBody(file_get_contents($filePath));
        } else {
            // Menangani jika file tidak ditemukan
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('File BAP tidak ditemukan');
        }
    }

    public function lampiran()
    {
        // Tentukan direktori tempat lampiran disimpan
        $directory = WRITEPATH . 'uploads/lampiran_dimusnahkan/';

        // Dapatkan daftar file PDF
        $files = [];
        if (is_dir($directory)) {
            $allFiles = scandir($directory);
            foreach ($allFiles as $file) {
                if (pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                    $files[] = $file;
                }
            }
        }

        // Kirim data ke view
        return view('lampiran', ['files' => $files]);
    }

    // Fungsi untuk mengunduh lampiran
    public function downloadLampiran($filename)
    {
        $filePath = WRITEPATH . 'uploads/lampiran_dimusnahkan/' . $filename;

        if (!is_file($filePath)) {
            throw PageNotFoundException::forPageNotFound();
        }

        return $this->response->download($filePath, null);
    }
}
