<?php $this->load->view('back-end/dashboard/header.php');?>
<?php $this->load->view('back-end/dashboard/sidebar.php');?>
	     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>INFORMASI SURAT ADMINISTRASI</h3>
            </div>

             <div class="row clearfix">
                <div class="body">
                        <ol class="breadcrumb breadcrumb-bg-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li class="active">Info Surat Administrasi </li>
                        </ol>
                    </div>
                </div>
            </div>


            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="text-center">
                                    INFORMASI SYARAT-SYARAT SURAT
                                </h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Syarat-Syarat</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php $no = 1; foreach ($data as $key):?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $key->syarat ?></td>
                                                <td>
                                                    <button  type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#defaultModal<?php echo $key->idsyarat?>" >edit</button>
                                                    <a href="<?= base_url('user/surat/syarat_surat/delete_syarat/')?><?php echo $key->idsyarat?>" class="btn btn-sm btn-danger">hapus</a>
                                                </td>
                                            </tr>
                                            <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                


                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="text-center">
                                    INFORMASI SYARAT-SYARAT SURAT
                                </h2>
                            </div>
                            <div class="body">
                                <form id="form_validation" method="POST" action="<?= base_url('user/sistem_informasi/wilayah/create')?>">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="kepaladusun" required>
                                            <label class="form-label">Nama Kepala Dusun</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namadusun" required>
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



                <div class="modal fade" id="defaultModal<?php echo $key->idsyarat?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <form id="form_validation" method="POST" action="<?= base_url('user/sistem_informasi/wilayah/create')?>">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="kepaladusun" required>
                                            <label class="form-label">Nama Kepala Dusun</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namadusun" required>
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
        </div>
      </section>
<?php $this->load->view('back-end/dashboard/footer.php');?>