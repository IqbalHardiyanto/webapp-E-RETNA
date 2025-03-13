<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <h1 class="h3 mb-2 text-gray-800">Log Activity</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Log Activity</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="logActivity" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Activity</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($logs as $index => $log) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= esc($log['nama_lengkap']) ?></td>
                                <td><?= esc($log['actions']) ?></td>
                                <td><?= date('d M Y H:i', strtotime($log['created_at'])) ?></td>
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
        $('#logActivity').DataTable({
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

</script>