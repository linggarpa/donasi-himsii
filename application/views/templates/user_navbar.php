<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark warna-navbar fixed-top  ">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?= base_url('user'); ?>"> <img src="<?= base_url('assets/img/'); ?>logo-donasi.png" width="60" height="60" alt="Donasi Himsi">DONASI HIMSI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 fs-5" style="margin-top: -5px;">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('user'); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('user/tentangKami'); ?>">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('user/donasi'); ?>">Bantu Mereka</a></li>
                <?php if (!empty($this->session->userdata('email'))) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="<?= base_url('user/profile'); ?>">
                                    <i class="fas fa-fw fa-user"></i>Profile Saya
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('user/riwayatDonasi'); ?>">
                                    <i class="fas fa-fw fa-clipboard-list"></i>Riwayat Donasi
                                </a>
                            </li>
                            <li>
                                <!-- <li>
                                <a class="dropdown-item" href="<?= base_url('user/transaksi'); ?>">
                                    <i class="fas fa-fw fa-clipboard-list"></i>transaksi
                                </a>
                            </li> -->
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                                    <i class="fas fa-fw fa-sign-out-alt"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('auth'); ?>">Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>