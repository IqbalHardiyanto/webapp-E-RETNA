<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <h1 class="h3 mb-2 text-gray-800">Pasien Tidak Aktif</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien Tidak Aktif</h6>
            <a href="<?= base_url('/data-inactive/export-pdf') ?>"
                class="btn btn-success mt-3"
                target="_blank"
                onclick="return confirm('Cetak laporan pasien inactive?')">
                <i class="fas fa-print"></i> Cetak Laporan
            </a>
            <form method="get" action="">
                <label for="filter">Filter:</label>
                <select name="filter" id="filter" class="form-control" onchange="this.form.submit()">
                    <option value="kurang7" <?= ($filter == 'kurang7') ? 'selected' : ''; ?>>Masa Retensi</option>
                    <option value="lebih7" <?= ($filter == 'lebih7') ? 'selected' : ''; ?>>Lebih dari 2 Tahun Masa Retensi</option>
                </select>
            </form>
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
                            <th>Actions</th>
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
                                <td class="text-center">
                                    <?php
                                    // Ambil tanggal kunjungan terakhir
                                    $tanggal_kunjungan_terakhir = new DateTime($p['tanggal_kunjungan_terakhir']);

                                    // Ambil waktu sekarang di Indonesia (WIB)
                                    $timezone = new DateTimeZone('Asia/Jakarta');
                                    $sekarang = new DateTime('now', $timezone);

                                    // Hitung selisih tanggal
                                    $selisih = $sekarang->diff($tanggal_kunjungan_terakhir);

                                    // Cek apakah selisih lebih dari 7 tahun
                                    if ($selisih->y >= 7) {
                                        // Tampilkan tombol "Upload Nilai Guna"
                                        echo '<a href="' . site_url('data-inactive/uploadnilaiguna/' . $p['id']) . '" class="btn btn-primary btn-sm">Upload Nilai Guna</a>';
                                    } else {
                                        // Tidak tampilkan tombol jika kurang dari 7 tahun
                                        echo '-';
                                    }
                                    ?>
                                </td>
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