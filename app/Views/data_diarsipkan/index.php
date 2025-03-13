<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pasien Diarsipkan</h1>
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
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No RM</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Lahir</th>
                            <th>Lihat Data</th>
                            <th>Keterangan</th>
                            <th>Lanjutan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pasien_diarsipkan as $pasien): ?>
                            <tr>
                                <td><?= $pasien['no_rm']; ?></td>
                                <td><?= $pasien['nama_pasien']; ?></td>
                                <td><?= $pasien['tanggal_lahir']; ?></td>
                                <td>
                                    <a href="/data-diarsipkan/lihat-data/<?= $pasien['id']; ?>" class="btn btn-info btn-sm m-1">Lihat Data Nilai Guna</a>
                                    <a href="/laporan/<?= $pasien['id']; ?>" class="btn btn-primary btn-sm m-1" target="_blank">Lihat Laporan</a>
                                </td>
                                <td>
                                    <span style="color: <?= $pasien['warna'] ?>;">
                                        <?= $pasien['keterangan'] ?>
                                    </span>
                                </td>
                                <td>
                                    <form action="/data-diarsipkan/tambah-ke-bap/<?= $pasien['id']; ?>" method="post">
                                        <button type="submit" class="btn btn-success btn-sm m-1">Tambah ke BAP</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="#" onclick="confirmDelete(<?= $pasien['id'] ?>)" class="text-danger ml-2">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDelete(id) {
        if (confirm("Yakin ingin menghapus permanen data pasien ini?")) {
            window.location.href = "<?= site_url('hapus-pasien/') ?>" + id;
        }
    }
</script>

<?= view('layoutspetugas/footer'); ?>