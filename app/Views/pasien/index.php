<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <h1 class="h3 mb-2 text-gray-800">Pasien</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
            <a href="/pasien/create" class="btn btn-primary mt-3">Tambah Pasien</a>
            <a href="/pasien/import" class="btn btn-success mt-3">Import Data</a>
        </div>
        <div class="card-header py-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="pasienTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th> <!-- Tambahkan kolom ID -->
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
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $p): ?>
                                <tr>
                                    <td><?= $p['id']; ?></td> <!-- Menampilkan ID Pasien -->
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
                                    <td><?= $p['status']; ?></td>
                                    <td>
                                        <a href="/pasien/edit/<?= $p['id']; ?>" class="btn btn-warning btn-sm m-1">Edit</a>
                                        <a href="javascript:void(0);" onclick="confirmDelete(<?= $p['id']; ?>)" class="btn btn-danger btn-sm m-1">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('layoutspetugas/footer'); ?>

<script>
    function confirmDelete(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            window.location.href = "/pasien/delete/" + id;
        }
    }
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