<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-RETNA</title>
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for DataTables -->
    <link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


</head>

<body id="page-top">

    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="<?= base_url('assets/img/LOGO WALUYO.png') ?>" alt="Logo" style="max-width: 40px; margin-right: 10px;">
                <div class="sidebar-brand-text mx-3">E-RETNA</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-3">

            <!-- Nav Item -->
            <?php $segment1 = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); ?>

            <li class="nav-item <?= ($segment1 == 'dashboard') ? 'active' : '' ?>">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item <?= ($segment1 == 'pasien') ? 'active' : '' ?>">
                <a class="nav-link" href="/pasien">
                    <i class="fas fa-fw fa-user-injured"></i> <span>Data Pasien</span>
                </a>
            </li>

            <li class="nav-item <?= ($segment1 == 'data-active') ? 'active' : '' ?>">
                <a class="nav-link" href="/data-active">
                    <i class="fas fa-fw fa-heartbeat"></i> <span>Pasien Aktif</span>
                </a>
            </li>

            <li class="nav-item <?= ($segment1 == 'data-inactive') ? 'active' : '' ?>">
                <a class="nav-link" href="/data-inactive">
                    <i class="fas fa-fw fa-user-slash"></i> <span>Pasien Inactive</span>
                </a>
            </li>

            <li class="nav-item <?= ($segment1 == 'data-diarsipkan') ? 'active' : '' ?>">
                <a class="nav-link" href="/data-diarsipkan">
                    <i class="fas fa-fw fa-archive"></i> <span>Data Arsip</span>
                </a>
            </li>

            <li class="nav-item <?= ($segment1 == 'data-siapdimusnahkan') ? 'active' : '' ?>">
                <a class="nav-link" href="/data-siapdimusnahkan">
                    <i class="fas fa-fw fa-trash-alt"></i> <span>Data Siap Dimusnahkan</span>
                </a>
            </li>

            <li class="nav-item <?= ($segment1 == 'bap') ? 'active' : '' ?>">
                <a class="nav-link" href="/bap">
                    <i class="fas fa-fw fa-file-alt"></i> <span>Data Bap</span>
                </a>
            </li>
            <?php if (session()->get('role') === 'Kepala RM'): ?>
                <li class="nav-item <?= ($segment1 == 'users') ? 'active' : '' ?>">
                    <a class="nav-link" href="/users/">
                        <i class="fas fa-fw fa-users"></i> <span>Data Users</span>
                    </a>
                </li>
                <li class="nav-item <?= ($segment1 == 'log-activity') ? 'active' : '' ?>">
                    <a class="nav-link" href="/log-activity">
                        <i class="fas fa-fw fa-list-alt"></i> <span>Log Activity</span>
                    </a>
                </li>
            <?php endif; ?>


        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->