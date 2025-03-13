<?php

namespace App\Controllers;

use App\Models\NilaiGunaModel;
use App\Models\PasienModel;
use CodeIgniter\Controller;

class DataDiarsipkanController extends Controller
{
    protected $session;

    public function __construct()
    {
        helper('url'); // Pastikan helper URL dimuat

        $this->session = session(); // Simpan session sebagai property

        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    }

    public function index()
    {
        $pasienModel = new PasienModel();

        // Ambil data pasien dan tambahkan keterangan
        $pasienDiarsipkan = $pasienModel
            ->whereIn('status', ['diarsipkan', 'siapmusnah'])
            ->findAll();

        // Tambah properti keterangan dan warna
        foreach ($pasienDiarsipkan as &$pasien) {
            if ($pasien['status'] === 'siapmusnah') {
                $pasien['keterangan'] = 'sudah dimusnahkan';
                $pasien['warna'] = '#FF6666'; // Merah cerah
            } else {
                $pasien['keterangan'] = 'belum dimusnahkan';
                $pasien['warna'] = '#FFB366'; // Orange muda
            }
        }

        $data['pasien_diarsipkan'] = $pasienDiarsipkan;

        return view('data_diarsipkan/index', $data);
    }

    public function lihatData($id_pasien)
    {
        $nilaiGunaModel = new NilaiGunaModel();
        $data['files'] = $nilaiGunaModel->getFilesByPasienId($id_pasien);

        // Tampilkan tampilan yang menunjukkan file-file yang di-upload
        return view('data_diarsipkan/lihat_data', $data);
    }

    public function laporan($id_pasien)
    {
        $nilaiGunaModel = new NilaiGunaModel();
        $pasienModel = new PasienModel();

        // Ambil data pasien berdasarkan ID
        $data['pasien'] = $pasienModel->find($id_pasien);

        // Pastikan pasien ada
        if (!$data['pasien']) {
            return redirect()->to('/data-diarsipkan')->with('error', 'Pasien tidak ditemukan.');
        }

        // Ambil file nilai guna berdasarkan pasien
        $data['nilai_guna'] = $nilaiGunaModel->getFilesByPasienId($id_pasien);

        return view('data_diarsipkan/laporan', $data);
    }

    public function tambahKeBap($id_pasien)
    {
        $pasienModel = new PasienModel();

        // Cek apakah pasien ada
        $pasien = $pasienModel->find($id_pasien);
        if (!$pasien) {
            return redirect()->to('/data-diarsipkan')->with('error', 'Pasien tidak ditemukan.');
        }

        // Cek apakah status sudah "siap_musnah"
        if ($pasien['status'] === 'siapmusnah') {
            return redirect()->to('/data-diarsipkan')->with('warning', 'Pasien sudah ditambahkan ke BAP sebelumnya.');
        }

        // Update status pasien menjadi 'siap_musnah'
        $data = ['status' => 'siapmusnah'];
        $pasienModel->update($id_pasien, $data);

        // Redirect kembali ke halaman data diarsipkan dengan pesan sukses
        return redirect()->to('/data-diarsipkan')->with('success', 'Data pasien berhasil ditambahkan ke BAP.');
    }

    public function hapus($id_pasien)
    {
        $pasienModel = new PasienModel();
        $nilaiGunaModel = new NilaiGunaModel();

        // Cek apakah pasien ada
        $pasien = $pasienModel->find($id_pasien);
        if (!$pasien) {
            return redirect()->to('/data-diarsipkan')->with('error', 'Pasien tidak ditemukan.');
        }

        // Hapus semua data nilai guna terkait pasien
        $nilaiGunaModel->where('id_pasien', $id_pasien)->delete();

        // Hapus data pasien
        $pasienModel->delete($id_pasien);

        return redirect()->to('/data-diarsipkan')->with('success', 'Data pasien beserta arsip berhasil dihapus permanen.');
    }
}
