
    <!-- sidebar -->
<div class="app-container app-theme-gray">
        <div class="app-main">
            <div class="app-sidebar-wrapper">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template" class="logo-src"></a>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                    <div class="scrollbar-sidebar scrollbar-container">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu</li>
                                <li class="mm-active">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboards
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-show">
                                        <li><a href="<?= base_url('Admin') ?>">Analytics</a></li>
                                        <li><a href="<?= base_url('Admin/paket') ?>">Data Paket</a></li>
                                        <li><a href="<?= base_url('Admin/pelanggan') ?>">Data Pelanggan</a></li>
                                        <li><a href="<?= base_url('Admin/pemesanan') ?>">Data Pemesanan</a></li>
                                        <li><a href="<?= base_url('Admin/custom') ?>">Data Custom</a></li>
                                        <li><a href="<?= base_url('Admin/order') ?>">Data Order</a></li>
                                        <li><a href="<?= base_url('Admin/konfirmasi') ?>">Data Konfirmasi</a></li>
                                        <li><a href="<?= base_url('Admin/laporan') ?>">Laporan</a></li>
                                        <li><a href="<?= base_url('Admin/rating') ?>">Evaluasi Rating</a></li>
                                        <li><a href="<?= base_url('Admin/syarat') ?>">Syarat dan Ketentuan</a></li>
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">UI Components</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Page
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="<?= base_url('Auth/logout') ?>">
                                                <i class="metismenu-icon">
                                                </i>Logout
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Auth/registrasi') ?>">
                                                <i class="metismenu-icon">
                                                </i>Registrasi
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tutup sidebar -->
            <!-- sidebar mobile -->
            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template" class="logo-src"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <!-- tutup sidebar mobile -->