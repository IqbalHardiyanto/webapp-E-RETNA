<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Import Data Pasien</h2>
            <form action="/pasien/import" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="file_excel" class="form-label">Pilih File Excel:</label>
                    <input type="file" name="file_excel" class="form-control" required>
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary m-1">Import</button>
                    <a href="/pasien/download-template" class="btn btn-success m-1">Download Template</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= view('layoutspetugas/footer'); ?>
