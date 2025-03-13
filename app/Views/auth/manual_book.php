<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual Book E-Retna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f0fdf4; /* Warna hijau lembut */
            font-family: 'Arial', sans-serif;
        }
        .manual-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background: white;
            padding: 20px;
            margin-top: 30px;
        }
        .manual-header {
            text-align: center;
        }
        .manual-header h3 {
            font-weight: bold;
            text-transform: uppercase;
            border-bottom: 3px solid #2d6a4f;
            padding-bottom: 10px;
            display: inline-block;
        }
        .manual-header img {
            width: 80px;
            display: block;
            margin: 0 auto 10px;
        }
        .carousel-item {
            text-align: center;
            padding: 20px;
        }
        .carousel-item img {
            width: 100px;
            margin-bottom: 20px;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: #2d6a4f;
            border-radius: 50%;
            padding: 10px;
        }
        .btn-success {
            background-color: #2d6a4f;
            border: none;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-success:hover {
            background-color: #1b4332;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card manual-card">
                    <div class="card-body">
                        <div class="manual-header">
                            <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png" alt="Manual Book Icon">
                            <h3 class="text-success">Manual Book E-Retna Sistem</h3>
                        </div>

                        <!-- Carousel -->
                        <div id="manualCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Login">
                                    <p><b>1. Login</b></p>
                                    <p>Login sebagai petugas dengan akun yang disediakan oleh rumah sakit.</p>
                                </div>
                                <div class="carousel-item">
                                <img src="https://cdn-icons-png.flaticon.com/512/1828/1828673.png" alt="Dashboard Icon" width="50">
                                    <p><b>2. Dashboard</b></p>
                                    <p>Setelah login, petugas akan diarahkan ke halaman Dashboard.</p>
                                </div>
                                <div class="carousel-item">
                                <img src="https://cdn-icons-png.flaticon.com/512/2099/2099058.png" alt="Input Icon" width="50">
                                    <p>Petugas dapat mengisi data pasien secara manual atau dengan import Excel.</p>
                                </div>
                                <div class="carousel-item">
                                <img src="https://cdn-icons-png.flaticon.com/512/732/732220.png" alt="Template Excel" width="50">
                                    <p><b>4. Template Excel</b></p>
                                    <p>Template Excel bisa diunduh dari sistem.</p>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3050/3050525.png" alt="Data Sorting">
                                    <p><b>5. Penyortiran Data</b></p>
                                    <p>Sistem akan menyortir antara Data Aktif dan Data Inaktif.</p>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3014/3014161.png" alt="Pelaporan">
                                    <p><b>6. Pelaporan</b></p>
                                    <p>Data Aktif dan Inaktif dapat dicetak dalam laporan.</p>
                                </div>
                                <div class="carousel-item">
                                <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="Berkas" width="50">
                                    <p><b>7. Pengarsipan</b></p>
                                    <p>Data Inaktif yang lebih dari 2 tahun perlu diarsipkan sebelum pemusnahan.</p>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828490.png" alt="Pemusnahan Data">
                                    <p><b>8. Pemusnahan Data</b></p>
                                    <p>Data yang dimusnahkan akan dibuatkan Berita Acara Pemusnahan (BAP).</p>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828778.png" alt="Tutup" width="50">

                                    <p><b>9. Logout</b></p>
                                    <p>Petugas bisa logout untuk keluar dari sistem.</p>
                                </div>
                            </div>

                            <!-- Tombol Navigasi -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#manualCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#manualCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <a href="<?= site_url('/login') ?>" class="btn btn-success w-100 mt-3">Kembali ke Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
