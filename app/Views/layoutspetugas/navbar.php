<?php 
    date_default_timezone_set('Asia/Jakarta'); // Set zona waktu Indonesia
    $hari = date('l'); // Ambil nama hari dalam bahasa Inggris

    // Konversi hari ke bahasa Indonesia
    $hariIndonesia = [
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    ];
    $hari = $hariIndonesia[$hari]; 
?>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Tombol Toggle Sidebar (Mobile) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Navbar (Right Side) -->
    <ul class="navbar-nav ml-auto">
        
        <!-- Hari dan Jam -->
        <li class="nav-item my-auto">
            <span class="nav-link">
                <strong><?= $hari; ?></strong>, <span id="clock"></span>
            </span>
        </li>

        <!-- Dropdown User -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session()->get('nama_lengkap'); ?></span>
                <i class="fas fa-user-circle fa-lg text-gray-600"></i>
            </a>
            
            <!-- Dropdown - Logout -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= site_url('/logout'); ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<!-- Script untuk Update Jam Real-Time -->
<script>
function updateClock() {
    let now = new Date();
    let hours = now.getHours().toString().padStart(2, '0');
    let minutes = now.getMinutes().toString().padStart(2, '0');
    let seconds = now.getSeconds().toString().padStart(2, '0');
    document.getElementById('clock').innerHTML = hours + ":" + minutes + ":" + seconds;
}

// Jalankan setiap 1 detik
setInterval(updateClock, 1000);
updateClock();
</script>
