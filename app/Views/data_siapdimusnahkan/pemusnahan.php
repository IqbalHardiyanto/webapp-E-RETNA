<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar RM Siap Dimusnahkan</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 20px;
        }

        .kop-surat {
            display: inline-block;
            width: 100%;
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
            /* Jika teks ingin tetap di tengah */
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

        .garis-bawah {
            border-bottom: 3px solid black;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .judul-laporan {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .sub-judul {
            text-align: center;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: transparent;
            text-align: left;
            font-size: 14px;
            padding: 1px;
        }

        p {
            margin: 6px 0;
        }

        .table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .daftar-file h4 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .daftar-file ul {
            list-style-type: none;
            padding-left: 0;
        }

        .daftar-file ul li {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .text-danger {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <table class="kop=surat">
        <tr>
            <td style="padding: 10px;">
                <img src="<?= $imgSrc; ?>" alt="Logo Kabupaten Probolinggo" class="logo">
            </td>
            <td style="padding: 10px;">
                <div class="teks-kop">
                    <h3 style="margin: 0; line-height: 1.2;">PEMERINTAH KABUPATEN PROBOLINGGO</h3>
                    <h3 style="margin: 0; line-height: 1.2;">DINAS KESEHATAN</h3>
                    <h3 style="margin: 0; line-height: 1.2;">UOBK RSUD WALUYO JATI</h3>
                    <p style="margin: 0; line-height: 1.2;">Jl. Dr. Soetomo No.1 Telp. (0335) 841118, 841481, Fax (0335) 841160</p>
                    <p style="margin: 0; line-height: 1.2;">KRAKSAAN - PROBOLINGGO - 67282</p>
                    <p style="margin: 0; line-height: 1.2;">Website: www.rsudwaluyojati.Probolinggokab.go.id | E-mail: rsudwaluyojati@Probolinggokab.go.id</p>
                </div>
            </td>
        </tr>
    </table>

    <div class="garis-bawah"></div>

    <div class="judul-laporan">DAFTAR PEMUSNAHAN PASIEN</div>

    <?php foreach ($patientsWithDocs as $item): ?>
        <?php
        $pasien = $item['pasien'];
        $docs = $item['docs'];
        ?>
        <h3>No. RM: <?= $pasien['no_rm'] ?> - Nama: <?= $pasien['nama_pasien'] ?></h3>
        <table class="table">
            <tr>
                <th>Jenis Dokumen</th>
                <th>Ada</th>
            </tr>
            <tr>
                <td>Dokumen Rekam Medis</td>
                <td><?= $docs ? ($docs['dokumen_rekam_medis_sesuai_kepentingan_pelayanan'] ? 'Ya' : 'Tidak') : 'Tidak' ?></td>
            </tr>
            <tr>
                <td>Ringkasan Masuk/Keluar</td>
                <td><?= $docs ? ($docs['ringkasan_masuk_dan_keluar'] ? 'Ya' : 'Tidak') : 'Tidak' ?></td>
            </tr>
            <tr>
                <td>Resume Medis</td>
                <td><?= $docs ? ($docs['resume_medis'] ? 'Ya' : 'Tidak') : 'Tidak' ?></td>
            </tr>
            <tr>
                <td>Lembar Operasi</td>
                <td><?= $docs ? ($docs['lembar_operasi'] ? 'Ya' : 'Tidak') : 'Tidak' ?></td>
            </tr>
            <tr>
                <td>Identifikasi Bayi Lahir</td>
                <td><?= $docs ? ($docs['identifikasi_bayi_lahir'] ? 'Ya' : 'Tidak') : 'Tidak' ?></td>
            </tr>
            <tr>
                <td>Informed Consent</td>
                <td><?= $docs ? ($docs['informed_consent'] ? 'Ya' : 'Tidak') : 'Tidak' ?></td>
            </tr>
            <tr>
                <td>Lembar Kematian</td>
                <td><?= $docs ? ($docs['lembar_kematian'] ? 'Ya' : 'Tidak') : 'Tidak' ?></td>
            </tr>
        </table>
        <br>
    <?php endforeach; ?>

</body>

</html>