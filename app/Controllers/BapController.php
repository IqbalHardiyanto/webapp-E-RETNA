<?php

namespace App\Controllers;

use App\Models\BapModel;
use CodeIgniter\Controller;

class BapController extends Controller
{
    protected $session;
    protected $bapModel;

    public function __construct()
    {
        helper(['url', 'form']);
        $this->session = session();
        $this->bapModel = new BapModel();

        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    }

    // Tampilkan semua BAP (untuk kedua role)
    public function index()
    {
        $role = $this->session->get('role');
        if (!in_array($role, ['Kepala RM', 'Petugas RM'])) {
            return redirect()->to('/dashboard');
        }

        $data['baps'] = $this->bapModel->findAll();
        return view('bap/index', $data);
    }

    // Form create dengan parameter jenis
    public function create($jenis)
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        // Validasi jenis BAP
        $allowedTypes = ['kerjasama', 'nonkerjasama'];
        if (!in_array($jenis, $allowedTypes)) {
            return redirect()->to('/bap')->with('error', 'Jenis BAP tidak valid');
        }

        $data['jenis'] = $jenis;
        return view('bap/create', $data);
    }

    // Simpan BAP (untuk kedua jenis)
    public function store()
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        $jenis = $this->request->getPost('jenis');

        // Validasi input dasar
        $rules = [
            'judul' => 'required|min_length[5]',
            'tanggal_dimusnahkan' => 'required|valid_date',
            'jenis' => 'required|in_list[kerjasama,nonkerjasama]',
            'link_file' => 'required',
            'id_pasien' => 'required|numeric'
        ];

        // Tambahkan validasi spesifik berdasarkan jenis
        if ($jenis === 'kerjasama') {
            $rules['pihak_kesatu_nama'] = 'required';
            $rules['pihak_kedua_nama'] = 'required';
        } elseif ($jenis === 'nonkerjasama') {
            $rules['pelaksanaan_hari'] = 'required';
            $rules['pelaksanaan_tanggal'] = 'required|valid_date';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Simpan data
        $data = [
            'judul' => $this->request->getPost('judul'),
            'link_file' => $this->request->getPost('link_file'),
            'keterangan' => $this->request->getPost('keterangan'),
            'id_pasien' => $this->request->getPost('id_pasien'),
            'tanggal_dimusnahkan' => $this->request->getPost('tanggal_dimusnahkan'),
            'jenis' => $jenis,
            'pihak_kesatu_nama' => $this->request->getPost('pihak_kesatu_nama'),
            'pihak_kedua_nama' => $this->request->getPost('pihak_kedua_nama'),
            'pelaksanaan_hari' => $this->request->getPost('pelaksanaan_hari'),
            'pelaksanaan_tanggal' => $this->request->getPost('pelaksanaan_tanggal')
        ];

        $this->bapModel->insert($data);
        return redirect()->to('/bap')->with('success', 'BAP berhasil dibuat');
    }

    // Detail BAP
    public function show($id)
    {
        $role = $this->session->get('role');
        if (!in_array($role, ['Kepala RM', 'Petugas RM'])) {
            return redirect()->to('/dashboard');
        }

        $data['bap'] = $this->bapModel->find($id);
        return view('bap/show', $data);
    }

    // Form edit
    public function edit($id)
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        $data['bap'] = $this->bapModel->find($id);
        $data['jenis'] = $data['bap']['jenis'];
        return view('bap/edit', $data);
    }

    // Update BAP
    public function update($id)
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        $jenis = $this->request->getPost('jenis');

        // Validasi input dasar
        $rules = [
            'judul' => 'required|min_length[5]',
            'tanggal_dimusnahkan' => 'required|valid_date',
            'jenis' => 'required|in_list[kerjasama,nonkerjasama]',
            'link_file' => 'required',
            'id_pasien' => 'required|numeric'
        ];

        // Tambahkan validasi spesifik berdasarkan jenis
        if ($jenis === 'kerjasama') {
            $rules['pihak_kesatu_nama'] = 'required';
            $rules['pihak_kedua_nama'] = 'required';
        } elseif ($jenis === 'nonkerjasama') {
            $rules['pelaksanaan_hari'] = 'required';
            $rules['pelaksanaan_tanggal'] = 'required|valid_date';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Update data
        $data = [
            'judul' => $this->request->getPost('judul'),
            'link_file' => $this->request->getPost('link_file'),
            'keterangan' => $this->request->getPost('keterangan'),
            'id_pasien' => $this->request->getPost('id_pasien'),
            'tanggal_dimusnahkan' => $this->request->getPost('tanggal_dimusnahkan'),
            'jenis' => $jenis,
            'pihak_kesatu_nama' => $this->request->getPost('pihak_kesatu_nama'),
            'pihak_kedua_nama' => $this->request->getPost('pihak_kedua_nama'),
            'pelaksanaan_hari' => $this->request->getPost('pelaksanaan_hari'),
            'pelaksanaan_tanggal' => $this->request->getPost('pelaksanaan_tanggal')
        ];

        $this->bapModel->update($id, $data);
        return redirect()->to('/bap')->with('success', 'BAP berhasil diperbarui');
    }

    // Hapus BAP
    public function delete($id)
    {
        if ($this->session->get('role') !== 'Kepala RM') {
            return redirect()->to('/dashboard');
        }

        $this->bapModel->delete($id);
        return redirect()->to('/bap')->with('success', 'BAP berhasil dihapus');
    }
}
