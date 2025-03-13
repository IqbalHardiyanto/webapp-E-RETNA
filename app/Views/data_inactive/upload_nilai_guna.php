<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Upload Nilai Guna</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Upload Nilai Guna</h6>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pasien</h5>
                        <table class="table table-bordered">
                            <tr>
                                <th>No. Rekam Medis</th>
                                <td><?php echo $pasien['no_rm']; ?></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td><?php echo  $pasien['nama_pasien']; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td><?php echo $pasien['tanggal_lahir']; ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td><?php echo $pasien['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><?php echo $pasien['alamat_lengkap']; ?></td>
                            </tr>
                            <tr>
                                <th>Diagnosa</th>
                                <td><?php echo $pasien['diagnosa']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Formulir upload nilai guna -->
                <form action="<?php echo site_url('data-inactive/storeNilaiGuna'); ?>" method="post" class="m-2" enctype="multipart/form-data">
                    <input type="hidden" name="id_pasien" value="<?php echo $pasien['id']; ?>">
                    <div class="form-group">
                        <label>Jenis Formulir</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="jenis_formulir[]" value="Ringkasan Masuk dan Keluar" id="ringkasan">
                                    <label class="form-check-label" for="ringkasan">Ringkasan Masuk dan Keluar</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="jenis_formulir[]" value="Resume Medis" id="resume">
                                    <label class="form-check-label" for="resume">Resume Medis</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="jenis_formulir[]" value="Lembar Operasi" id="operasi">
                                    <label class="form-check-label" for="operasi">Lembar Operasi</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="jenis_formulir[]" value="Identifikasi Bayi Lahir" id="bayi">
                                    <label class="form-check-label" for="bayi">Identifikasi Bayi Lahir</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="jenis_formulir[]" value="Lembar Persetujuan Tindakan Medis" id="persetujuan">
                                    <label class="form-check-label" for="persetujuan">Lembar Persetujuan Tindakan Medis</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="jenis_formulir[]" value="Lembar Kematian" id="kematian">
                                    <label class="form-check-label" for="kematian">Lembar Kematian</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="jenis_formulir[]" value="Dokumen Rekam Medis Sesuai Kepentingan Pelayanan" id="dokumen">
                                    <label class="form-check-label" for="dokumen">Dokumen Rekam Medis Sesuai Dengan Kepentingan Pelayanan</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dokumen Rekam Medis -->
                    <div class="form-group">
                        <label>Upload File Nilai Guna (Maksimal 2MB per file)</label>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-light">
                                        <th>Jenis Dokumen</th>
                                        <th>Upload File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ringkasan Masuk dan Keluar</td>
                                        <td><input type="file" name="ringkasan_masuk_dan_keluar" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Resume Medis</td>
                                        <td><input type="file" name="resume_medis" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Lembar Operasi</td>
                                        <td><input type="file" name="lembar_operasi" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Identifikasi Bayi Lahir</td>
                                        <td><input type="file" name="identifikasi_bayi_lahir" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Informed Consent</td>
                                        <td><input type="file" name="informed_consent" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Lembar Kematian</td>
                                        <td><input type="file" name="lembar_kematian" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Dokumen Rekam Medis Sesuai Dengan Kepentingan Pelayanan</td>
                                        <td><input type="file" name="dokumen_rekam_medis_sesuai_dengan_kepentingan_pelayanan" class="form-control"></td>
                                    </tr>
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                                    <script>
                                        document.querySelector("form").addEventListener("submit", function(event) {
                                            let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
                                            let fileInputs = document.querySelectorAll('input[type="file"]');
                                            let hasFile = false;

                                            // Cek apakah setidaknya satu checkbox dipilih
                                            if (checkboxes.length === 0) {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: '⚠️ Pilihan Formulir Kosong!',
                                                    html: '<b>Harap pilih setidaknya satu jenis formulir sebelum mengunggah.</b>',
                                                    background: '#ffe6e6',
                                                    color: '#d9534f',
                                                    showConfirmButton: true,
                                                    confirmButtonColor: '#d9534f',
                                                    confirmButtonText: 'Pilih Formulir',
                                                    timer: 4000,
                                                    timerProgressBar: true
                                                });
                                                event.preventDefault();
                                                return;
                                            }

                                            // Cek apakah ada file yang diunggah
                                            fileInputs.forEach(input => {
                                                if (input.files.length > 0) {
                                                    hasFile = true;
                                                }
                                            });

                                            if (!hasFile) {
                                                Swal.fire({
                                                    icon: 'warning',
                                                    title: '📂 Tidak Ada File!',
                                                    html: '<b>Anda harus mengunggah setidaknya satu file.</b><br>Silakan pilih file yang sesuai sebelum mengirim.',
                                                    background: '#fff3cd',
                                                    color: '#856404',
                                                    showConfirmButton: true,
                                                    confirmButtonColor: '#ffc107',
                                                    confirmButtonText: 'Pilih File',
                                                    timer: 4000,
                                                    timerProgressBar: true
                                                });
                                                event.preventDefault();
                                            }
                                        });
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?= view('layoutspetugas/footer'); ?>