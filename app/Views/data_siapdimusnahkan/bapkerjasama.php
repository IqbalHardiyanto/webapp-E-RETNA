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

    <table class="table">
        <tr>
            <td style="width: 20%;">Hari dan tanggal</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($hari_tanggal) ? esc($hari_tanggal) : ''; ?></td>
        </tr>
    </table>
    <table class="table">
        <tr>
            <td style="width: 20%;font-weight:bold;">PIHAK KESATU</td>
        </tr>
        <tr>
            <td style="width: 20%;">Nama</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pihak_kesatu_nama) ? esc($pihak_kesatu_nama) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">NIP</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pihak_kesatu_nip) ? esc($pihak_kesatu_nip) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">Pangkat/Golongan</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pihak_kesatu_pangkat) ? esc($pihak_kesatu_pangkat) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">Jabatan</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pihak_kesatu_jabatan) ? esc($pihak_kesatu_jabatan) : ''; ?></td>
        </tr>
    </table>
    <table class="table">
        <tr>
            <td style="width: 20%;font-weight:bold;">PIHAK KEDUA</td>
        </tr>
        <tr>
            <td style="width: 20%;">Nama</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pihak_kedua_nama) ? esc($pihak_kedua_nama) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">Jabatan</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pihak_kedua_jabatan) ? esc($pihak_kedua_jabatan) : ''; ?></td>
        </tr>
        <tr>
            <td style="width: 20%;">Alamat</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pihak_kedua_alamat) ? esc($pihak_kedua_alamat) : ''; ?></td>
        </tr>
    </table>
    <p style="text-align: justify;text-indent: 50px;">
        Pihak Kesatu sebagai Ketua Tim Pemusnahan berkas rekam medis RSUD Waluyo Jati yang
        tercantum dalam daftar terlampir dengan cara : Peleburan dan Penghancuran.
    </p>
    <p style="text-align: justify;margin-top:-10px">
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
    <table style="width: 100%;" class="table">
        <tr>
            <td style="width: 50%; text-align: center; vertical-align: top;">
                <p>Yang Menerima</p>
                <p>Pihak Ke Dua</p>
                <p style="margin-top: 80px;"><?= isset($pihak_kedua_nama) ? esc($pihak_kedua_nama) : ''; ?></p>
                <p>Pemilik</p>
            </td>
            <td style="width: 50%; text-align: center; vertical-align: top;">
                <p>Probolinggo, </p>
                <p>Yang Menyerahkan</p>
                <p>Pihak Ke Satu</p>
                <p style="margin-top: 60px;"><?= isset($pihak_kesatu_nama) ? esc($pihak_kesatu_nama) : ''; ?></p>
                <p><?= isset($pihak_kesatu_nip) ? esc($pihak_kesatu_nip) : ''; ?></p>
            </td>
        </tr>
    </table>

    <div style="page-break-before: always;"></div>
    <p style="text-align: justify;text-indent: 50px;" class="mt-5">
        Atas dasar tersebut diatas, Tim Pemusnahan Berkas Rekam Medis RSUD Waluyo Jati
        melakukan pemusnahan berkas rekam medis sebanyak <?= isset($jumlah_pasien_siap_musnah) ? esc($jumlah_pasien_siap_musnah) : ''; ?> berkas.
    </p>

    <div style="margin-top: 20px;">
        <strong>PELAKSANAAN</strong>
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
    </table>

    <div style="margin-top: 20px;">
        <strong>Pelaksana</strong>
    </div>

    <table class="table">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <tr>
                <td style="width: 5%;"><?= $i; ?>.</td>
                <td style="width: 95%;">
                    <?= isset(${"pelaksana_" . $i}) ? esc(${"pelaksana_" . $i}) : ''; ?>
                </td>
            </tr>
        <?php endfor; ?>
    </table>

    <div style="margin-top: 20px;">
        <strong>Saksi Tim Pemusnahan Berkas Rekam Medis</strong>
    </div>

    <table class="table">
        <?php for ($i = 1; $i <= 7; $i++) : ?>
            <tr>
                <td style="width: 5%;"><?= $i; ?>.</td>
                <td style="width: 95%;">
                    <?= isset(${"saksi_" . $i}) ? esc(${"saksi_" . $i}) : ''; ?>
                </td>
            </tr>
        <?php endfor; ?>
    </table>

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
</body>

</html>