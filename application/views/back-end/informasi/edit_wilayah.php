<?php $this->load->view('back-end/dashboard/header.php');?>
<?php $this->load->view('back-end/dashboard/sidebar.php');?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>
                    INFORMASI WILAYAH ADMINISTRASI
                </h3>
            </div>

            <div class="row clearfix">
                <div class="body">
                        <ol class="breadcrumb breadcrumb-bg-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li class="active">Info Wilayah Adminstrasi </li>
                            <li class="active">Tambah </li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Basic Validation -->
            <div class="row clearfix continer">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card text-center">
                        <div class="header">
                            <h2>FORM EDIT WILAYAH ADMINISTRASI</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?= base_url('user/sistem_informasi/wilayah/update/')?><?=$isi->idwilayah?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kepaladusun"  value="<?php echo $isi->kepaladusun?>" required>
                                        <label class="form-label">Nama Kepala Dusun</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namadusun" 
                                        value="<?php echo $isi->namadusun?>" required>
                                        <label class="form-label">Nama Dusun</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                                    <button type="button" class="btn btn-primary waves-effect" onclick="history.back(-1)">Kembali</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('back-end/dashboard/footer.php');?>