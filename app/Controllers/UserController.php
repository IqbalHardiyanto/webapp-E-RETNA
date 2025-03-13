<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BapModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    protected $session;
    public function __construct()
    {
        helper('url');
        $this->session = session();

        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    }

    // Method untuk manajemen user (hanya diakses oleh Kepala RM)
    public function index()
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        return view('users/index', $data);
    }

    public function create()
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        return view('users/create');
    }

    public function store()
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        $userModel = new UserModel();
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username'     => $this->request->getPost('username'),
            'password'     => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'         => $this->request->getPost('role'),
        ];

        $userModel->insert($data);
        return redirect()->to('/users')->with('success', 'User berhasil ditambahkan.');
    }

    // Fungsi BAP
    public function listBAP()
    {
        $role = $this->session->get('role');
        if (!in_array($role, ['Kepala RM', 'Petugas RM'])) {
            return redirect()->to('/dashboard');
        }

        $bapModel = new BapModel();
        $data['baps'] = $bapModel->findAll();
        return view('bap/list', $data);
    }

    public function createBAPKerjasama()
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        return view('bap/create_kerjasama');
    }

    public function createBAPNonKerjasama()
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        return view('bap/create_nonkerjasama');
    }

    public function storeBAP()
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        $bapModel = new BapModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'link_file' => $this->request->getPost('link_file'),
            'keterangan' => $this->request->getPost('keterangan'),
            'id_pasien' => $this->request->getPost('id_pasien'),
            'tanggal_dimusnahkan' => $this->request->getPost('tanggal_dimusnahkan')
        ];

        $bapModel->insert($data);
        return redirect()->to('/bap')->with('success', 'BAP berhasil dibuat.');
    }
}
