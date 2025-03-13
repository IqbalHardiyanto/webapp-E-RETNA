<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Edit Pasien</h2>
            <form action="/pasien/update/<?= $pasien['id']; ?>" method="post">
                <div class="form-group mb-2">
                    <label>No RM</label>
                    <input type="text" name="no_rm" value="<?= $pasien['no_rm']; ?>" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Nama Pasien</label>
                    <input type="text" name="nama_pasien" value="<?= $pasien['nama_pasien']; ?>" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="<?= $pasien['tempat_lahir']; ?>" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="<?= $pasien['tanggal_lahir']; ?>" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>NIK Pasien</label>
                    <input type="text" name="nik_pasien" value="<?= $pasien['nik_pasien']; ?>" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-Laki" <?= $pasien['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                        <option value="Perempuan" <?= $pasien['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat_lengkap" value="<?= $pasien['alamat_lengkap']; ?>" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Diagnosa</label>
                    <input type="text" name="diagnosa" value="<?= $pasien['diagnosa']; ?>" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>DPJP</label>
                    <input type="text" name="dpjp" value="<?= $pasien['dpjp']; ?>" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Tanggal Kunjungan Terakhir</label>
                    <input type="datetime-local" name="tanggal_kunjungan_terakhir" value="<?= $pasien['tanggal_kunjungan_terakhir']; ?>" required class="form-control">
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary mx-1">Update</button>
                    <a href="javascript:history.back()" class="btn btn-secondary mx-1">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= view('layoutspetugas/footer'); ?>