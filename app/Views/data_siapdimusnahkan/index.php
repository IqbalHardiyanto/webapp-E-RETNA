<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pasien Siap Dimusnahkan</h1>
    </div>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
    <?php endif; ?>

    <!-- Table -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-end mb-4">
                <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#exampleModalbapkerjasama">
                    BAP Kerjasama
                </button>
                <button type="button" class="btn btn-success btn-sm  m-1" data-bs-toggle="modal" data-bs-target="#exampleModalbapnonkerjasama">
                    BAP Non Kerja Sama
                </button>
                <a href="<?= base_url('data-siapdimusnahkan/pemusnahan') ?>" class="btn btn-warning btn-sm m-1">
                    Daftar Pemusnahan
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No RM</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pasien_siapdimusnahkan as $pasien): ?>
                            <tr>
                                <td><?= $pasien['no_rm']; ?></td>
                                <td><?= $pasien['nama_pasien']; ?></td>
                                <td><?= $pasien['tanggal_lahir']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="exampleModalbapnonkerjasama" tabindex="-1" aria-labelledby="exampleModalbapnonkerjasama" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalbapnonkerjasama">Form Data BAP Non Kerjasama</h5>
                        </div>
                        <div class="modal-body">
                            <form action="/data-siapdimusnahkan/bapnonkerjasama" method="post">
                                <div class="mb-3">
                                    <label for="pelaksanaan_hari" class="form-label">Hari:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_hari" name="pelaksanaan_hari">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_tanggal" class="form-label">Tanggal:</label>
                                    <input type="date" class="form-control" id="pelaksanaan_tanggal" name="pelaksanaan_tanggal">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_waktu" class="form-label">Waktu:</label>
                                    <input type="time" class="form-control" id="pelaksanaan_waktu" name="pelaksanaan_waktu">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_lokasi" class="form-label">Lokasi:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_lokasi" name="pelaksanaan_lokasi">
                                </div>

                                <div class="mb-3">
                                    <label for="pelaksanaan_ketua" class="form-label">Ketua Tim:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_ketua" name="pelaksanaan_ketua">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_ketua_nip" class="form-label">NIP Ketua Tim:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_ketua_nip" name="pelaksanaan_ketua_nip">
                                </div>

                                <div class="mb-3">
                                    <label for="pelaksanaan_sekretaris" class="form-label">Sekretaris:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_sekretaris" name="pelaksanaan_sekretaris">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_sekretaris_nip" class="form-label">NIP Sekretaris:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_sekretaris_nip" name="pelaksanaan_sekretaris_nip">
                                </div>

                                <div class="mb-3">
                                    <label for="pelaksanaan_direktur" class="form-label">Nama Direktur:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_direktur" name="pelaksanaan_direktur">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_direktur_nip" class="form-label">NIP Direktur:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_direktur_nip" name="pelaksanaan_direktur_nip">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Pelaksana:</label>
                                    <?php for ($i = 1; $i <= 4; $i++) : ?>
                                        <div class="mb-2">
                                            <label for="pelaksana_<?= $i ?>" class="form-label">Pelaksana <?= $i ?>:</label>
                                            <input type="text" class="form-control" id="pelaksana_<?= $i ?>" name="pelaksana_<?= $i ?>">
                                        </div>
                                    <?php endfor; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModalbapkerjasama" tabindex="-1" aria-labelledby="exampleModalbapkerjasamaLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalbapkerjasamaLabel">Form Data BAP Kerjasama</h5>
                        </div>
                        <div class="modal-body">
                            <form action="/data-siapdimusnahkan/bapkerjasama" method="post">

                                <div class="mb-3">
                                    <label for="hari_tanggal" class="form-label">Hari dan Tanggal:</label>
                                    <input type="date" class="form-control" id="hari_tanggal" name="hari_tanggal">
                                </div>

                                <fieldset class="border p-2 mb-3">
                                    <legend class="float-none w-auto p-2">Pihak Kesatu</legend>
                                    <div class="mb-3">
                                        <label for="pihak_kesatu_nama" class="form-label">Nama:</label>
                                        <input type="text" class="form-control" id="pihak_kesatu_nama" name="pihak_kesatu_nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pihak_kesatu_nip" class="form-label">NIP:</label>
                                        <input type="number" class="form-control" id="pihak_kesatu_nip" name="pihak_kesatu_nip">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pihak_kesatu_pangkat" class="form-label">Pangkat/Golongan:</label>
                                        <input type="text" class="form-control" id="pihak_kesatu_pangkat" name="pihak_kesatu_pangkat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pihak_kesatu_jabatan" class="form-label">Jabatan:</label>
                                        <input type="text" class="form-control" id="pihak_kesatu_jabatan" name="pihak_kesatu_jabatan">
                                    </div>
                                </fieldset>

                                <fieldset class="border p-2 mb-3">
                                    <legend class="float-none w-auto p-2">Pihak Kedua</legend>
                                    <div class="mb-3">
                                        <label for="pihak_kedua_nama" class="form-label">Nama:</label>
                                        <input type="text" class="form-control" id="pihak_kedua_nama" name="pihak_kedua_nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pihak_kedua_jabatan" class="form-label">Jabatan:</label>
                                        <input type="text" class="form-control" id="pihak_kedua_jabatan" name="pihak_kedua_jabatan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pihak_kedua_alamat" class="form-label">Alamat:</label>
                                        <textarea class="form-control" id="pihak_kedua_alamat" name="pihak_kedua_alamat" rows="2"></textarea>
                                    </div>
                                </fieldset>

                                <div class="mb-3">
                                    <label for="pelaksanaan_hari" class="form-label">Pelaksanaan Hari:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_hari" name="pelaksanaan_hari">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_tanggal" class="form-label">Pelaksanaan Tanggal:</label>
                                    <input type="date" class="form-control" id="pelaksanaan_tanggal" name="pelaksanaan_tanggal">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_waktu" class="form-label">Pelaksanaan Waktu:</label>
                                    <input type="time" class="form-control" id="pelaksanaan_waktu" name="pelaksanaan_waktu">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_lokasi" class="form-label">Pelaksanaan Lokasi:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_lokasi" name="pelaksanaan_lokasi">
                                </div>
                                <div class="mb-3">
                                    <label for="pelaksanaan_ketua" class="form-label">Pelaksanaan Ketua Tim:</label>
                                    <input type="text" class="form-control" id="pelaksanaan_ketua" name="pelaksanaan_ketua">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Pelaksana:</label>
                                    <?php for ($i = 1; $i <= 4; $i++) : ?>
                                        <div class="mb-2">
                                            <label for="pelaksana_<?= $i ?>" class="form-label">Pelaksana <?= $i ?>:</label>
                                            <input type="text" class="form-control" id="pelaksana_<?= $i ?>" name="pelaksana_<?= $i ?>">
                                        </div>
                                    <?php endfor; ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Saksi Tim Pemusnahan Berkas Rekam Medis:</label>
                                    <?php for ($i = 1; $i <= 7; $i++) : ?>
                                        <div class="mb-2">
                                            <label for="saksi_<?= $i ?>" class="form-label">Saksi <?= $i ?>:</label>
                                            <input type="text" class="form-control" id="saksi_<?= $i ?>" name="saksi_<?= $i ?>">
                                        </div>
                                    <?php endfor; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('layoutspetugas/footer'); ?>