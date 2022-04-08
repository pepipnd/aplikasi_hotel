<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
            <a class="navbar-brand" href="<?= base_url('index.php/Home'); ?>">Sunrise Hotel</a>
                <a class="navbar-brand" href="#page-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Home'); ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Room'); ?>">Room</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Fasilitas'); ?>">Fasilitas</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Promo'); ?>">Promo</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Pesan_kamar'); ?>">Pesan Kamar</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Pesan_kamar/pesanan'); ?>">Pesanan Kamar</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Auth'); ?>">Login</a></li> -->
                        <?php
                        if($this->session->userdata('status') == "login"){
                            echo'<li class="nav-item"><a class="nav-link" href=" '.base_url('index.php/profile'). '">Profile</a></li>';
                            echo'<li class="nav-item"><a class="nav-link" href=" '.base_url('index.php/Pesan_kamar/pesanan'). '">Pesanan Kamar</a></li>';
                            echo'<li class="nav-item"><a class="nav-link" href=" '.base_url('index.php/auth/logout'). '">Logout</a></li>';
                        }else{
                            echo'<li class="nav-item"><a class="nav-link" href=" '.base_url('index.php/auth'). '">Login</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>