<?php

namespace App\Controllers;

use App\Models\LogActivityModel;

class LogActivity extends BaseController
{
    protected $logModel;
    protected $session;

    public function __construct()
    {
        helper('url');

        $this->logModel = new LogActivityModel();
        $this->session = session();

        // Cek apakah pengguna sudah login
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('/login'))->send();
        }

        // Hanya "kepala" yang bisa mengakses
        if ($this->session->get('role') !== 'kepala') {
            return redirect()->to(base_url('/dashboard'))->send();
        }
    }

    public function index()
    {
        $data['logs'] = $this->logModel->getAllLogs();
        return view('log_activity/index', $data);
    }
}
