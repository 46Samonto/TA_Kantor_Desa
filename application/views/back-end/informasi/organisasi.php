<?php $this->load->view('back-end/dashboard/header.php');?>
<?php $this->load->view('back-end/dashboard/sidebar.php');?>
	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>STRUKTUR ORGANISASI PEMERINTAH KANTOR DESA MELAYU</h3>
            </div>

            <!-- Basic Card -->
            <div class="row clearfix">
                <div class="body">
                        <ol class="breadcrumb breadcrumb-bg-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li class="active">Info Struktur Organisasi</li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h4>STRUKTUR ORGANISASI PEMERINATHAN KANTOR DESA MELAYU</h4>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">edit</i> Perbarui
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                            <img src="<?= base_url('asset/beranda/img/slider/melayu1.jpg')?>" width=100%>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $this->load->view('back-end/dashboard/footer.php');?>