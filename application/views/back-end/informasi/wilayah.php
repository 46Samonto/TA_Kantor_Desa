<?php $this->load->view('back-end/dashboard/header.php');?>
<?php $this->load->view('back-end/dashboard/sidebar.php');?>
	     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>INFORMASI WILAYAH ADMINISTRASI</h3>
            </div>

             <div class="row clearfix">
                <div class="body">
                        <ol class="breadcrumb breadcrumb-bg-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li class="active">Info Wilayah Adminstrasi </li>
                        </ol>
                    </div>
                </div>
            </div>


            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Wilayah Admnistrasi
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="<?= base_url('User/sistem_informasi/wilayah/add')?>" class="btn btn-danger"role="button">
                                        <i class="material-icons">add</i> Tambah
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Kepala Desa</th>
                                            <th class="text-center">Nama Dusun</th>
                                            <th class="text-center">Jumlah Rt / RW</th>
                                            <th class="text-center">Jumlah Penduduk (L/P)</th>
                                            <th class="text-center">Jumlah KK</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                     								<tbody class="text-center">
                     									<?php $no = 1; foreach ($data as $key):?>
                     									<tr>
                     										<td><?php echo $no++; ?></td>
                     										<td><?php echo $key->kepaladusun; ?></td>
                     										<td><?php echo $key->namadusun; ?></td>
                     										<td><?php echo $key->Rt; ?> / <?php echo $key->Rw; ?> </td>
                     										<td><?php echo $key->JMLK; ?> / <?php echo $key->JMLP; ?></td>
                     										<td>Jumlah KK</td>
                     										<td>
                     											<a href="<?= base_url('user/sistem_informasi/wilayah/edit/')?><?php echo $key->idwilayah?>" class="btn btn-success btn-sm">edit</a>
                     											<button type="button" data-toggle="modal" data-target="#defaultModal<?php echo $key->idwilayah?>" class="btn btn-sm bg-indigo ">Lihat</button>
                     											<a href="<?= base_url('user/sistem_informasi/wilayah/delete/')?><?php echo $key->idwilayah?>" class="btn btn-sm btn-danger">hapus</a>
                     										</td>
                     									</tr>
                     									<?php endforeach?>
                     								</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="modal fade" id="defaultModal<?php echo $key->idwilayah?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
      </section>
<?php $this->load->view('back-end/dashboard/footer.php');?>