<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        $session = session();
        if ($session->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
        return view('auth/login');
    }

    public function processLogin()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $sessionData = [
                'id' => $user['id'],
                'nama_lengkap' => $user['nama_lengkap'],
                'username' => $user['username'],
                'role' => $user['role'],
                'isLoggedIn' => true
            ];
            $session->set($sessionData);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function manualBook()
    {
        return view('auth/manual_book');
    }
}
