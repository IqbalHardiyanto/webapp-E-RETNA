<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Tambah Pasien</h2>
            <form action="/pasien/store" method="post">
                <div class="form-group mb-2">
                    <label>No RM</label>
                    <input type="text" name="no_rm" required class="form-control" pattern="\d{6}" title="No RM harus terdiri dari 6 angka">
                </div>
                <div class="form-group mb-2">
                    <label>Nama Pasien</label>
                    <input type="text" name="nama_pasien" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>NIK Pasien</label>
                    <input type="text" name="nik_pasien" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat_lengkap" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Diagnosa</label>
                    <input type="text" name="diagnosa" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>DPJP</label>
                    <input type="text" name="dpjp" required class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label>Tanggal Kunjungan Terakhir</label>
                    <input type="datetime-local" name="tanggal_kunjungan_terakhir" required class="form-control">
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary mx-1">Simpan</button>
                    <a href="javascript:history.back()" class="btn btn-secondary mx-1">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= view('layoutspetugas/footer'); ?>
