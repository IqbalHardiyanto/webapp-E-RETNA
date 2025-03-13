<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data BAP</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="bap" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Link File</th>
                            <th>Keterangan</th>
                            <th>Tanggal Dimusnahkan</th>
                            <th>Lampiran RM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($baps as $row) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['judul'] ?></td>
                                <td><a href="<?= base_url('upload/viewBAPFile/' . dirname($row['link_file']) . '/' . basename($row['link_file'])) ?>" target="_blank">Lihat BAP</a></td>
                                <td><?= $row['keterangan'] ?></td>
                                <td><?= date('d-m-Y', strtotime($row['tanggal_dimusnahkan'])) ?></td>
                                <td>
                                    <?php if (!empty($row['lampiran'])) : ?>
                                        <a href="<?= site_url('upload/downloadLampiran/' . $row['lampiran']) ?>"
                                            class="btn btn-sm btn-primary"
                                            title="Download RM Dimusnahkan">
                                            <i class="fas fa-file-pdf"></i> Download
                                        </a>
                                    <?php else : ?>
                                        <span class="text-muted">Tidak ada lampiran</span>
                                    <?php endif; ?>
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
        $('#bap').DataTable({
            "lengthMenu": [10, 25, 50, 100],
            "pageLength": 10,
            "language": {
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya"
                }

            },
            "columnDefs": [{
                    "targets": 0, // Menentukan target kolom pertama (No)
                    "data": "no"
                },
                {
                    "targets": 1, // Menentukan target kolom kedua (Judul)
                    "data": "judul"
                },
                {
                    "targets": 2, // Menentukan target kolom ketiga (Link File)
                    "data": "link_file"
                },
                {
                    "targets": 3, // Menentukan target kolom keempat (Keterangan)
                    "data": "keterangan"
                },
                {
                    "targets": 4, // Menentukan target kolom kelima (Tanggal Dimusnahkan)
                    "data": "tanggal_dimusnahkan"
                }
            ]
        });
    });
</script>