<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html">Sunrise Hotel</a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="<?= base_url('index.php/admin');?>" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="<?= base_url('index.php/kamar');?>" class='sidebar-link'>
                <i class="bi bi-door-closed-fill"></i>
                    <span>Kamar</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="<?= base_url('index.php/jenis_kamar');?>" class='sidebar-link'>
                <i class="bi bi-journal-album"></i>
                    <span>Jenis Kamar</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="<?= base_url('index.php/fasilitasA');?>" class='sidebar-link'>
                <i class="bi bi-phone-vibrate-fill"></i>
                    <span>Fasilitas</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="<?= base_url('index.php/User');?>" class='sidebar-link'>
                <i class="bi bi-person-fill"></i>
                <span>Data User</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="<?= base_url('index.php/Konsumen');?>" class='sidebar-link'>
                <i class="bi bi-people-fill"></i>
                <span>Data Konsumen</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="<?= base_url('index.php/Transaksi');?>" class='sidebar-link'>
                <i class="bi bi-cart-check-fill"></i>
                <span>Transaksi</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="<?= base_url('index.php/auth/logout');?>" class='sidebar-link'>
                <i class="bi bi-arrow-counterclockwise"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            