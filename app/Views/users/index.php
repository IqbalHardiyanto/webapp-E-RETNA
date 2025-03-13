<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <h1 class="h3 mb-2 text-gray-800">Manajemen Pengguna</h1>

    <a href="/users/create" class="btn btn-primary mb-3">Tambah User</a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tableUser" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($users as $user): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $user['nama_lengkap']; ?></td>
                                <td><?= $user['username']; ?></td>
                                <td><?= ucfirst(esc($user['role'] ?? 'kepala')); ?></td>
                                <td>
                                    <a href="/users/edit/<?= $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/users/delete/<?= $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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
        $('#tableUser').DataTable({
            "lengthMenu": [10, 25, 50, 100], // Opsi jumlah data per halaman
            "pageLength": 10, // Default 10 data per halaman
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
