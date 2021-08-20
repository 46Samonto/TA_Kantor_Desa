<?php $this->load->view('back-end/dashboard/header.php');?>
<?php $this->load->view('back-end/dashboard/sidebar.php');?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h1>SISTEM INFORMASI KANTOR DESA MELAYU</h1>
        </div>

        <!-- Basic Card -->
            <div class="row clearfix">
                <div class="body">
                        <ol class="breadcrumb breadcrumb-bg-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>


        <div class="row clearfix">
            <!-- Widgets -->
            <div class="row  col-lg-6">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH LAKI-LAKI</div>
                            <div class="number count-to" data-from="0" data-to="" data-speed="15" data-fresh-interval="20"><?php echo $this->db->query("select jk from tbl_penduduk where jk ='Laki-Laki'")->num_rows(); ?></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">persone</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PEREMPUAN</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo $this->db->query("select jk from tbl_penduduk where jk ='Perempuan'")->num_rows(); ?></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">map</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH DUSUN</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo $this->db->query("select*from tbl_dusun")->num_rows(); ?></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PENDUDUK</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"><?php echo $this->db->query("select*from tbl_penduduk")->num_rows(); ?></div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH KK</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">
                                <?php echo $this->db->query("select*from tbl_kk")->num_rows(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-brown hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH AKUN</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">
                                <?php echo $this->db->query("select role_id from tbl_penduduk where role_id = 'Admin'")->num_rows(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">bookmark</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH SURAT LAYANAN</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">
                                <?php echo $this->db->query("select * from tbl_surat")->num_rows(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">library_books</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PEMOHON SURAT KET.USAHA</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">  <?php echo $this->db->query("select * from ket_usaha")->num_rows(); ?></div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">library_books</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PEMOHON SURAT KET.DOMISILI</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">1</div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">book</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH SURAT</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">0</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center"> SELAMAT DATANG ADMIN/OPERATOR </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <marquee>
                                        <p>Selamat Datang Di Website Sistem Informasi Kantor Desa Melayu. Jadikan Desa Melayu Yang AMAN, RAMAH DAN AMANAH</p>
                                    </marquee>
                                    <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingOne_1">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                                        Sejarah Desa Melayu #1
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                                <div class="panel-body">
                                                    <p style="margin:0px;">Dengan dasar hukum yang ada dan hasil musyawarah seluruh masyarakat pada saat itu maka semua dusun melayu akan merubah statusnya menjadi Desa Melayu yang di dirikan yaitu pada tanggal 9 november 2006 berdasarkan Surat Keputusan Bupati Bima Nomor : 711 Tahun 2006 maka di angkatlaah Abdul Gani sebagai pejabat kepala desa melayu sampai terpilihnya kepala desa difinitif yaitu Abd. Haris H. Husen, S.E selaku kepala desa pertama di Desa Melayu Kecamatan Lambu. Sejak itupula desa melayu menata diri dan memanfaatkan seluruh potensi wilayah yang ada serta penataan sistem administrasi pemerintah sebagai eksitensi dan sebuah desa yang mandiri sampai sekarang ini. Berikut urutan kepemimpinan Desa Melayu :</p> <br>
                                                    <p>Abd. Haris H. Husen, S.E</p>
                                                    <p>Muhide S.Ag</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingTwo_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                                       aria-controls="collapseTwo_1">
                                                        Visi Dan Misi Desa Melayu #2
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                                <div class="panel-body">
                                                   <div class="text-center">
                                                        <p class="text-center"><h5><u>VISI</u></h5></p>
                                                   </div>
                                                   <div class="text-center">
                                                        <p class="text-center"><h5><u>MISI</u></h5></p>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingThree_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                                       aria-controls="collapseThree_1">
                                                        Struktur Organisasi #3
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                                                <div class="panel-body">
                                                    <div class="text-center">
                                                        <p class="text-center"><h5><u>STRUKTUR ORGANISASI</u></h5></p>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
<?php $this->load->view('back-end/dashboard/footer.php');?>
