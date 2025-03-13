<?php
// app/Views/laporan.php
?>
<!DOCTYPE html>
<html>

<head>
    <title>Laporan Pasien Inactive</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 20px;
        }

        /* Styling untuk kop surat */
        .kop-surat {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            text-align: center;
        }

        .kop-surat img {
            width: 80px;
            height: auto;
            margin-right: 20px;
        }

        .teks-kop h2 {
            font-size: 14px;
            margin: 2px 0;
        }

        .teks-kop h3 {
            font-size: 12px;
            margin: 2px 0;
        }

        .teks-kop p {
            font-size: 10px;
            margin: 1px 0;
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
</head>

<body>
    <div class="kop-surat">
        <img src="<?= base_url('assets/img/LOGO KABUPATEN PROBOLINGGO.png'); ?>" alt="Logo Kabupaten Probolinggo">
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
        DATA PASIEN INACTIVE DENGAN RETENSI LEBIH DARI 2 TAHUN
    </div>

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
                <th>Terakhir Kunjungan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pasien as $i => $p) : ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= htmlspecialchars($p['no_rm']) ?></td>
                    <td><?= htmlspecialchars($p['nama_pasien']) ?></td>
                    <td><?= htmlspecialchars($p['tempat_lahir']) ?></td>
                    <td><?= date('d/m/Y', strtotime($p['tanggal_lahir'])) ?></td>
                    <td><?= htmlspecialchars($p['nik_pasien']) ?></td>
                    <td><?= $p['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                    <td><?= htmlspecialchars($p['alamat_lengkap']) ?></td>
                    <td><?= htmlspecialchars($p['diagnosa']) ?></td>
                    <td><?= htmlspecialchars($p['dpjp']) ?></td>
                    <td><?= date('d/m/Y', strtotime($p['tanggal_kunjungan_terakhir'])) ?></td>
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