<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pasien</title>

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

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
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

    <div class="judul-laporan">BERITA ACARA PEMUSNAHAN ARSIP</div>

    <div class="sub-judul">Nomor: 445/..../426.102.35/<?= date('Y'); ?></div>

    <p style="text-align: justify;">
        Dengan ini menerangkan terlebih dahulu
    </p>
    <p style="text-align: justify;">
        Bertindak atas dasar :
    </p>
    <ol>
        <li>
            <p style="text-align: justify;">
                Peraturan Bupati Probolinggo Nomor : 39 Tahun 2012 Tentang Jadwal Retensi Arsip Keuangan
                di Kabupaten Probolinggo
            </p>
        </li>
        <li>
            <p style="text-align: justify;">
                Surat Edaran Dirjen Pelayanan Medik NO.HK.00.1.5.01160 tanggal 21 Maret 1995 tentang
                petunjuk teknis pengadaan formulir Rekam Medis Dasar dan Pemusnahan Arsip Rekam Medis
                di Rumah Sakit
            </p>
        </li>
        <li>
            <p style="text-align: justify;">
                SK Dirjen Yanmed No. 78/Yanmed/RS.Umdik/YMU/I/91 tentang Penyelenggaraan Rekam Medis
                di Rumah Sakit
            </p>
        </li>
    </ol>
    <p style="text-align: justify;text-indent: 50px;">
        Atas dasar tersebut diatas, Tim Pemusnahan Berkas Rekam Medis RSUD Waluyo Jati
        melakukan pemusnahan berkas rekam medis in aktif tahun sebanyak <?= isset($jumlah_pasien_siap_musnah) ? esc($jumlah_pasien_siap_musnah) : ''; ?> berkas.
    </p>

    <div style="margin-top: 20px;">
        <p>1. PELAKSANAAN</p>
    </div>

    <table class="table">
        <tr>
            <td style="width: 20%;">Hari</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pelaksanaan_hari) ? esc($pelaksanaan_hari) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">Tanggal</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pelaksanaan_tanggal) ? esc($pelaksanaan_tanggal) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">Waktu</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pelaksanaan_waktu) ? esc($pelaksanaan_waktu) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">Lokasi</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pelaksanaan_lokasi) ? esc($pelaksanaan_lokasi) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">Ketua Tim</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pelaksanaan_ketua) ? esc($pelaksanaan_ketua) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">Sekretaris</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pelaksanaan_sekretaris) ? esc($pelaksanaan_sekretaris) : ''; ?></td>
        </tr>
    </table>

    <div style="margin-top: 20px;">
        <strong>Pelaksana</strong>
    </div>

    <table class="table">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <tr>
                <td><?= $i; ?>.</td>
                <td>
                    <?php if (isset($pelaksana['pelaksana_' . $i])) : ?>
                        <?= $pelaksana['pelaksana_' . $i]; ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
    <div style="page-break-before: always;"></div>
    <div style="margin-top: 20px;">
        <strong>PROSEDUR</strong>
    </div>
    <ol>
        <li>
            <p style="text-align: justify;">
                Memilih berkas rekam medis inaktif yang sudah memasuki masa simpan in
                aktif 2 tahun
            </p>
        </li>
        <li>
            <p style="text-align: justify;">
                Menilai rekam medis yang masih bernilai guna dan yang tidak bernilai guna
            </p>
        </li>
        <li>
            <p style="text-align: justify;">
                Melakukan pemindaian (scanning) semua rekam medis yang mempunyai nilai guna
            </p>
        </li>
        <li>
            <p style="text-align: justify;">
                Menyimpan lembaran penting dari berkas rekam medis yang tidak dimusnahkan di
                ruang penyimpanan rekam medis
            </p>
        </li>
        <li>
            <p style="text-align: justify;">
                Berkas rekam medis dikirim ke pihak kedua dengan menggunakan mobil box tertutup
            </p>
        </li>
        <li>
            <p style="text-align: justify;">
                Berkas rekam medis yang tidak bernilai guna dimusnahkan
            </p>
        </li>
        <li>
            <p style="text-align: justify;">
                Tim pemusnah berkas rekam medis mengawasi pembakaran sampai selesai
            </p>
        </li>
        <li>
            <p style="text-align: justify;">
                Daftar rekam medis yang dimusnahkan terlampir.
            </p>
        </li>
    </ol>

    <table style="width: 100%;" class="table mt-5">
        <tr>
            <td style="width: 50%; text-align: center; vertical-align: top;">
                <p>Sekretaris</p>
                <p style="margin-top: 8vh;"><?= isset($pelaksanaan_sekretaris) ? esc($pelaksanaan_sekretaris) : ''; ?></p>
            </td>
            <td style="width: 50%; text-align: center; vertical-align: top;">
                <p>Probolinggo,</p>
                <p>Ketua</p>
                <p style="margin-top: 6vh;"><?= isset($pelaksanaan_ketua) ? esc($pelaksanaan_ketua) : ''; ?></p>
            </td>
        </tr>
    </table>
    <div style="margin-top: 20px; text-align: center;">
        <p>Mengetahui</p>
        <p>Direktur RSUD Waluyo Jati Kraksaan</p>
        <p style="margin-top: 6vh;"><?= isset($pelaksanaan_direktur) ? esc($pelaksanaan_direktur) : ''; ?></p>
    </div>
</body>

</html>