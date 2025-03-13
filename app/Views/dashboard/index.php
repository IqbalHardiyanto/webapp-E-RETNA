<?= view('layoutspetugas/head'); ?>
<?= view('layoutspetugas/navbar'); ?>

<div class="container-fluid mt-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Marquee dengan efek fade-in -->
    <div class="alert alert-success text-center shadow-sm py-2" style="font-size: 20px; font-weight: bold; color: #2d6a4f; animation: fadeIn 1.5s;">
        SELAMAT DATANG DI <strong>E-RETNA</strong> RSUD WALUYO JATI KRAKSAAN PROBOLINGGO
    </div>

    <!-- Content Row -->
    <div class="row">
        <?php 
        $data_card = [
            ["Total Data Pasien", $total_pasien, "primary", "fas fa-users"],
            ["Data Pasien Aktif", $total_active, "success", "fas fa-procedures"],
            ["Data Pasien Inaktif", $total_inactive, "danger", "fas fa-user-times"],
            ["Data Pasien Dimusnahkan", $total_dimusnahkan, "warning", "fas fa-skull-crossbones"],
            ["Data Pasien Diarsipkan", $pasien_diarsipkan, "info", "fas fa-archive"]
        ];
        ?>

        <?php foreach ($data_card as $card) : ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-<?= $card[2] ?> shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-<?= $card[2] ?> text-uppercase mb-1">
                                <?= $card[0]; ?>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $card[1]; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="<?= $card[3] ?> fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- 🚀 Grafik Data Pasien -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Data Pasien</h6>
                </div>
                <div class="card-body">
                    <canvas id="chartPasien"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan Script Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById("chartPasien").getContext('2d');
        var chartPasien = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Total", "Aktif", "Tidak Aktif", "Dimusnahkan", "Diarsipkan"],
                datasets: [{
                    label: 'Jumlah Pasien',
                    data: [<?= $total_pasien ?>, <?= $total_active ?>, <?= $total_inactive ?>, <?= $total_dimusnahkan ?>, <?= $pasien_diarsipkan ?>],
                    backgroundColor: ['#36A2EB', '#4BC0C0', '#FF6384', '#FFCE56', '#9966FF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                animation: {
                    duration: 2000, 
                    easing: 'easeInOutQuart'
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<?= view('layoutspetugas/footer'); ?>
