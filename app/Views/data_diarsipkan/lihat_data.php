<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pasien - Lihat Data Upload</h1>
    </div>

    <!-- File Upload Table -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5 class="mb-3">File yang Diupload</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Ringkasan Masuk Keluar</th>
                        <th>Resume Medis</th>
                        <th>Lembar Operasi</th>
                        <th>Identifikasi Bayi Lahir</th>
                        <th>Informed Consent</th>
                        <th>Lembar Kematian</th>
                        <th>Dokumen Rekam Medis, sesuai dengan kepentingan pelayanan</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($files)): ?>
                        <?php foreach ($files as $file): ?>
                            <tr>
                                <td>
                                    <?php if ($file['ringkasan_masuk_dan_keluar']): ?>
                                        <a href="<?= base_url('uploads/nilai_guna/' . $file['id_pasien'] . '/' . basename($file['ringkasan_masuk_dan_keluar'])) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                                    <?php else: ?>
                                        <span>File Tidak Ada</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($file['resume_medis']): ?>
                                        <a href="<?= base_url('uploads/nilai_guna/' . $file['id_pasien'] . '/' . basename($file['resume_medis'])) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                                    <?php else: ?>
                                        <span>File Tidak Ada</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($file['lembar_operasi']): ?>
                                        <a href="<?= base_url('uploads/nilai_guna/' . $file['id_pasien'] . '/' . basename($file['lembar_operasi'])) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                                    <?php else: ?>
                                        <span>File Tidak Ada</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($file['identifikasi_bayi_lahir']): ?>
                                        <a href="<?= base_url('uploads/nilai_guna/' . $file['id_pasien'] . '/' . basename($file['identifikasi_bayi_lahir'])) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                                    <?php else: ?>
                                        <span>File Tidak Ada</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($file['informed_consent']): ?>
                                        <a href="<?= base_url('uploads/nilai_guna/' . $file['id_pasien'] . '/' . basename($file['informed_consent'])) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                                    <?php else: ?>
                                        <span>File Tidak Ada</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($file['lembar_kematian']): ?>
                                        <a href="<?= base_url('uploads/nilai_guna/' . $file['id_pasien'] . '/' . basename($file['lembar_kematian'])) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                                    <?php else: ?>
                                        <span>File Tidak Ada</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($file['dokumen_rekam_medis_sesuai_kepentingan_pelayanan']): ?>
                                        <a href="<?= base_url('uploads/nilai_guna/' . $file['id_pasien'] . '/' . basename($file['dokumen_rekam_medis_sesuai_dengan_kepentingan_pelayanan'])) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                                    <?php else: ?>
                                        <span>File Tidak Ada</span>
                                    <?php endif; ?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada file yang di-upload untuk pasien ini.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= view('layoutspetugas/footer'); ?>