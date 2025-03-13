<?php

namespace App\Controllers;

use App\Models\PasienModel;
use App\Models\LogActivityModel; // Tambahkan Model Log Activity
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class PasienController extends Controller
{
    protected $session;
    protected $logModel;

    public function __construct()
    {
        helper(['url', 'form']);

        $this->session = session();
        $this->logModel = new LogActivityModel(); // Inisialisasi model log activity

        if (!$this->session->get('isLoggedIn')) {
            header('Location: ' . base_url('/login'));
            exit();
        }
    }

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta'); // Set timezone ke WIB
        $pasienModel = new PasienModel();
        $fiveYearsAgo = date('Y-m-d', strtotime('-5 years')); // Tanggal 5 tahun lalu

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
        $data['pasien'] = $pasienModel->findAll();
        return view('pasien/index', $data);
    }

    public function create()
    {
        return view('pasien/create');
    }

    public function store()
    {
        $model = new PasienModel();
        $data = $this->request->getPost();

        // Ubah input jenis_kelamin menjadi L atau P dan pastikan uppercase
        if (strtoupper($data['jenis_kelamin']) == 'LAKI-LAKI') {
            $data['jenis_kelamin'] = 'L';
        } elseif (strtoupper($data['jenis_kelamin']) == 'PEREMPUAN') {
            $data['jenis_kelamin'] = 'P';
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $model->save($data);

        // Tambahkan log aktivitas
        $this->logModel->insert([
            'id_user' => $this->session->get('id'),
            'actions' => 'Menambahkan data pasien dengan No RM: ' . $data['no_rm'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/pasien')->with('success', 'Data pasien berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $model = new PasienModel();
        $data['pasien'] = $model->find($id);
        return view('pasien/edit', $data);
    }
    public function update($id)
    {
        $model = new PasienModel();
        $data = $this->request->getPost();

        // Ubah input jenis_kelamin menjadi L atau P dan pastikan uppercase
        if (strtoupper($data['jenis_kelamin']) == 'LAKI-LAKI') {
            $data['jenis_kelamin'] = 'L';
        } elseif (strtoupper($data['jenis_kelamin']) == 'PEREMPUAN') {
            $data['jenis_kelamin'] = 'P';
        }

        $data['updated_at'] = date('Y-m-d H:i:s');
        $model->update($id, $data);

        // Tambahkan log aktivitas
        $this->logModel->insert([
            'id_user' => $this->session->get('id'),
            'actions' => 'Mengedit data pasien dengan No RM: ' . $data['no_rm'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/pasien')->with('success', 'Data pasien berhasil diperbarui.');
    }

    public function delete($id)
    {
        $model = new PasienModel();
        $pasien = $model->find($id);
        $model->delete($id);

        // Tambahkan log aktivitas
        $this->logModel->insert([
            'id_user' => $this->session->get('id'),
            'actions' => 'Menghapus data pasien dengan No RM: ' . $pasien['no_rm'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/pasien')->with('success', 'Data pasien berhasil dihapus.');
    }

    public function importForm()
    {
        return view('pasien/import');
    }

    public function importExcel()
    {
        $file = $this->request->getFile('file_excel');

        if ($file->isValid() && !$file->hasMoved()) {
            $reader = new Xlsx();
            $spreadsheet = $reader->load($file->getTempName());
            $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            $pasienModel = new PasienModel();
            $logEntries = [];
            $importedCount = 0;

            foreach ($sheet as $key => $row) {
                if ($key == 1) continue; // Lewati header

                $no_rm = trim($row['A'] ?? '');
                if (empty($no_rm)) continue;

                $tanggal_lahir = (!empty($row['D'])) ? date('Y-m-d', strtotime($row['D'])) : null;
                $tanggal_kunjungan = (!empty($row['J'])) ? date('Y-m-d H:i:s', strtotime($row['J'])) : null;

                // Ubah jenis_kelamin menjadi L atau P dan pastikan uppercase
                $jenis_kelamin = strtoupper($row['F'] ?? '');
                if ($jenis_kelamin == 'LAKI-LAKI') {
                    $jenis_kelamin = 'L';
                } elseif ($jenis_kelamin == 'PEREMPUAN') {
                    $jenis_kelamin = 'P';
                }

                $data = [
                    'no_rm' => $no_rm,
                    'nama_pasien' => $row['B'] ?? '',
                    'tempat_lahir' => $row['C'] ?? '',
                    'tanggal_lahir' => $tanggal_lahir,
                    'nik_pasien' => $row['E'] ?? '',
                    'jenis_kelamin' => $jenis_kelamin,
                    'alamat_lengkap' => $row['G'] ?? '',
                    'diagnosa' => $row['H'] ?? '',
                    'dpjp' => $row['I'] ?? '',
                    'tanggal_kunjungan_terakhir' => $tanggal_kunjungan,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];

                if (!$pasienModel->where('no_rm', $no_rm)->first()) {
                    $pasienModel->insert($data);
                    $logEntries[] = [
                        'id_user' => $this->session->get('id'),
                        'actions' => 'Mengimpor data pasien dengan No RM: ' . $no_rm,
                        'created_at' => date('Y-m-d H:i:s')
                    ];
                    $importedCount++;
                }
            }

            if (!empty($logEntries)) {
                $this->logModel->insertBatch($logEntries);
            }

            return redirect()->to('/pasien')->with('success', "$importedCount data pasien berhasil diimport.");
        }

        return redirect()->back()->with('error', 'Gagal mengupload file.');
    }


    public function downloadTemplate()
    {
        $filePath = WRITEPATH . 'templates/template_pasien.xlsx';

        if (file_exists($filePath)) {
            return $this->response->download($filePath, null);
        } else {
            return redirect()->back()->with('error', 'Template tidak ditemukan.');
        }
    }
}
