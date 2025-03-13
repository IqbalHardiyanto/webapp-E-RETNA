<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <h1 class="h3 mb-2 text-gray-800">Pasien Aktif</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien Aktif (Kunjungan < 5 Tahun)</h6>
        </div>
        <div class="card-header py-3">
            <a href="<?= site_url('data-active/cetak-laporan') ?>"
                class="btn btn-success mt-3"
                target="_blank"
                onclick="return confirm('Cetak laporan pasien aktif?')">
                <i class="fas fa-print"></i> Cetak Laporan
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="pasienTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No RM</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Diagnosa</th>
                            <th>DPJP</th>
                            <th>Tgl Kunjungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pasien as $p): ?>
                            <tr>
                                <td><?= $p['no_rm']; ?></td>
                                <td><?= $p['nama_pasien']; ?></td>
                                <td><?= $p['tempat_lahir']; ?></td>
                                <td><?= $p['tanggal_lahir']; ?></td>
                                <td><?= $p['nik_pasien']; ?></td>
                                <td><?= $p['jenis_kelamin']; ?></td>
                                <td><?= $p['alamat_lengkap']; ?></td>
                                <td><?= $p['diagnosa']; ?></td>
                                <td><?= $p['dpjp']; ?></td>
                                <td><?= $p['tanggal_kunjungan_terakhir']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= view('layoutspetugas/footer'); ?>
<script>
    $(document).ready(function() {
        $('#pasienTable').DataTable({
            "lengthMenu": [10, 25, 50, 100],
            "pageLength": 10,
            "language": {
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya"
                }
            }
        });
    });
</script>