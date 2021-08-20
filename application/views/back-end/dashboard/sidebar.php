<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url('asset/template/')?>images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?= base_url('User/dashboard/profil')?>"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header text-center"><h4>MENU NAVIGASI</h4></li>
                    <li class="active">
                        <a href="<?= base_url('user/dashboard/beranda')?>">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>SISTEM INFORMASI
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=base_url('user/sistem_informasi/info_profil');?>">
                                    <span>Info Profil Kantor Desa</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('user/sistem_informasi/Organisasi');?>">
                                    <span>Info Struktur Organisasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('user/sistem_informasi/wilayah')?>">
                                    <span>Info Wilayah Adminstrasi</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>KEPENDUDUKAN</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?= base_url('user/kependudukan/penduduk')?>">Informasi Penduduk</a>
                            </li>
                            <li>
                                <a href="<?= base_url('user/kependudukan/keluarga')?>">Informasi Kepala Keluarga</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>SURAT ADMINISTRASI</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?= base_url('user/surat/info_surat')?>">Informasi Surat</a>
                            </li>
                            <li>
                                <a href="<?= base_url('user/surat/pengaturan_surat')?>">Informasi Pengaturan Surat</a>
                            </li>
                            <li>
                                <a href="<?= base_url('user/surat/kategori_surat')?>">Informasi Surat Kategori</a>
                            </li>
                            <li>
                                <a href="<?= base_url('user/surat/syarat_surat')?>">Informasi Syarat Surat</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">view_list</i>
                            <span>ARSIP SURAT</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">account_box</i>
                            <span>USER MANEJEMEN</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 - 2022  <a href="javascript:void(0);">Admin - SIKD MELAYU</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
