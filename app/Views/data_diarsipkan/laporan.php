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

        .kop-surat {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .kop-surat img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }

        .kop-surat .teks-kop {
            flex: 1;
            text-align: center;
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
            font-weight: bold;
        }

        .kop-surat p {
            font-size: 14px;
        }

        .garis-bawah {
            border-bottom: 3px solid black;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .judul-laporan {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .table {
            /* width: 100%; */
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: transparent;
            text-align: left;
            font-size: 14px;
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

    <div class="judul-laporan">LAPORAN DATA PASIEN</div>

    <table class="table">
        <tr>
            <td style="width: 15%;">No. RM</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pasien['no_rm']) ? $pasien['no_rm'] : '-'; ?></td>
        </tr>
        <tr>
            <td style="width: 15%;">Nama Pasien</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pasien['nama_pasien']) ? $pasien['nama_pasien'] : '-'; ?></td>
        </tr>
        <tr>
            <td style="width: 15%;">Jenis Kelamin</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pasien['jenis_kelamin']) ? $pasien['jenis_kelamin'] : '-'; ?></td>
        </tr>
        <tr>
            <td style="width: 15%;">Tanggal Lahir</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pasien['tanggal_lahir']) ? $pasien['tanggal_lahir'] : '-'; ?></td>
        </tr>
        <tr>
            <td style="width: 15%;">Alamat</td>
            <td style="width: 1%; text-align: right;">:</td>
            <td><?= isset($pasien['alamat_lengkap']) ? $pasien['alamat_lengkap'] : '-'; ?></td>
        </tr>
    </table>

    <div class="daftar-file">
        <h4>Daftar File Nilai Guna</h4>
        <?php if (!empty($nilai_guna)): ?>
            <?php
            $labelDokumen = [
                'dokumen_rekam_medis_sesuai_kepentingan_pelayanan' => 'Dokumen Rekam Medis Sesuai Kepentingan Pelayanan',
                'ringkasan_masuk_dan_keluar' => 'Ringkasan Masuk dan Keluar',
                'resume_medis' => 'Resume Medis',
                'lembar_operasi' => 'Lembar Operasi',
                'identifikasi_bayi_lahir' => 'Identifikasi Bayi Lahir',
                'informed_consent' => 'Persetujuan Tindakan Medis',
                'lembar_kematian' => 'Lembar Kematian'
            ];

            $no = 1;
            ?>

            <ol>
                <?php foreach ($nilai_guna as $dokumen): ?>
                    <?php foreach ($labelDokumen as $field => $label): ?>
                        <?php if (!empty($dokumen[$field])): ?>
                            <li>
                                <strong><?= $label ?>: </strong>
                                <?=
                                // Ambil nama file saja menggunakan basename()
                                basename($dokumen[$field])
                                ?>
                            </li>
                            <?php $no++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ol>
        <?php else: ?>
            <p class="text-danger">Belum ada file yang diunggah.</p>
        <?php endif; ?>
    </div>

</body>

</html>