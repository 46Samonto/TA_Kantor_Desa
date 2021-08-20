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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                <th class="text-center">Nama Surat</th>
                                                <th class="text-center">Kategori Surat</th>
                                                <th class="text-center">Syarat Surat</th>
                                                  <th class="text-center">Tanggal Buat
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php $no = 1; foreach ($data as $key):?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $key->namasurat ?></td>
                                                <td><?php echo $key->kode ?></td>
                                                <td> 3 Syarat</td>
                                                <td><?php echo $key->tgl_upload?></td>
                                                <td>
                                                    <button  type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#defaultModal<?php echo $key->idsurat?>" >edit</button>
                                                    <a href="<?= base_url('user/surat/syarat_surat/delete_syarat/')?><?php echo $key->idsurat?>" class="btn btn-sm btn-danger">hapus</a>
                                                </td>
                                            </tr>
                                            <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
<?php $this->load->view('back-end/dashboard/footer.php');?>