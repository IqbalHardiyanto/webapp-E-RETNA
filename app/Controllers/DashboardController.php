<?php

namespace App\Controllers;

use App\Models\PasienModel;
use CodeIgniter\Controller;

class DashboardController extends Controller
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
        session()->setFlashdata('success', 'Selamat datang di Dashboard!');

        $pasienModel = new PasienModel();

        // Menghitung total pasien
        $data['total_pasien'] = $pasienModel->countAll();

        // Menghitung total pasien aktif
        $data['total_active'] = $pasienModel->where('status', 'active')->countAllResults();

        // Menghitung total pasien inactive
        $data['total_inactive'] = $pasienModel->where('status', 'inactive')->countAllResults();

        // Menghitung total pasien dimusnahkan
        $data['total_dimusnahkan'] = $pasienModel->where('status', 'dimusnahkan')->countAllResults();

        // Menghitung total pasien dimusnahkan
        $data['pasien_diarsipkan'] = $pasienModel->where('status', 'diarsipkan')->countAllResults();
        

        return view('dashboard/index', $data);
    }
}
