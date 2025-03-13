<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 20px;
        }

        /* Styling untuk kop surat */
        .kop-surat {
            position: relative;
            max-width: 800px;
            margin: 0 auto 20px auto;
            padding-left: 50px;
        }

        .logo {
            display: inline-block;
            width: 100px;
            height: auto;
            vertical-align: middle;
            margin-right: 20px;
        }

        .teks-kop {
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            align-items: center;
        }

        .kop-surat h2,
        .kop-surat h3,
        .kop-surat p {
            margin: 0;
            line-height: 1.5;
        }

        .kop-surat h2 {
            font-size: 18px;
            font-weight: bold;
        }

        .kop-surat h3 {
            font-size: 16px;
        }

        .kop-surat p {
            font-size: 14px;
        }

        /* Garis bawah kop surat */
        .garis-bawah {
            border-bottom: 2px solid #000;
            margin-bottom: 10px;
        }

        /* Judul laporan */
        .judul-laporan {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        /* Styling tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 9px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 5px;
            vertical-align: top;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .text-uppercase {
            text-transform: uppercase;
        }
    </style>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</head>

<body>
    <!-- Kop Surat -->
    <div class="kop-surat">
        <img src="<?= $imgSrc; ?>" alt="Logo Kabupaten Probolinggo" class="logo">
        <div class="teks-kop">
            <h2>PEMERINTAH KABUPATEN PROBOLINGGO</h2>
            <h3>DINAS KESEHATAN</h3>
            <h3>UOBK RSUD WALUYO JATI</h3>
            <p>Jl. Dr. Soetomo No.1 Telp. (0335) 841118, 841481, Fax (0335) 841160</p>
            <p>KRAKSAAN - PROBOLINGGO - 67282</p>
            <p>Website: www.rsudwaluyojati.Probolinggokab.go.id | E-mail: rsudwaluyojati@Probolinggokab.go.id</p>
        </div>
    </div>

    <div class="garis-bawah"></div>

    <div class="judul-laporan">
        DATA PASIEN AKTIF
    </div>

    <!-- Tabel Data Pasien -->
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>No RM</th>
                <th>Nama Pasien</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Diagnosa</th>
                <th>DPJP</th>
                <th>Terakhir Kunjung</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pasien as $i => $p) : ?>
                <tr>
                    <td class="text-center"><?= $i + 1 ?></td>
                    <td class="text-center"><?= $p['no_rm'] ?? '-' ?></td>
                    <td class="text-uppercase"><?= $p['nama_pasien'] ?? '-' ?></td>
                    <td><?= $p['tempat_lahir'] ?? '-' ?></td>
                    <td class="text-center"><?= date('d-m-Y', strtotime($p['tanggal_lahir'])) ?? '-' ?></td>
                    <td class="text-center">'<?= $p['nik_pasien'] ?? '-' ?></td>
                    <td class="text-center"><?= $p['jenis_kelamin'] ?? '-' ?></td>
                    <td><?= $p['alamat_lengkap'] ?? '-' ?></td>
                    <td><?= $p['diagnosa'] ?? '-' ?></td>
                    <td><?= $p['dpjp'] ?? '-' ?></td>
                    <td class="text-center"><?= date('d-m-Y', strtotime($p['tanggal_kunjungan_terakhir'])) ?? '-' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Footer -->
    <div style="margin-top: 20px; text-align: right; font-size: 9px;">
        Dicetak pada: <?= date('d-m-Y H:i:s') ?> WIB
    </div>
</body>

</html>