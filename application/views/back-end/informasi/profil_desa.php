<?php $this->load->view('back-end/dashboard/header.php');?>
<?php $this->load->view('back-end/dashboard/sidebar.php');?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>PROFIL KANTOR DESA MELAYU</h3>
            </div>

            <!-- Basic Card -->
            <div class="row clearfix">
                <div class="body">
                        <ol class="breadcrumb breadcrumb-bg-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li class="active">Info Profil Kantor Desa</li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h4>Profil Kantor Desa</h4>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">edit</i> Perbarui
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                            <table class=" table table-striped">
                                <tr>
                                    <td colspan="3" class="text-center"> <h4>PROFIL KANTOR DESA</h4></td>
                                </tr>

                                <tr>
                                    <td>Nama Kantor desa</td>
                                    <td>:</td>
                                    <td><?= $data->namadesa?></td>
                                </tr>

                                <tr>
                                    <td>Kode Desa</td>
                                    <td>:</td>
                                    <td><?= $data->kodedesa?></td>
                                </tr>

                                <tr>
                                    <td>Kode Pos</td>
                                    <td>:</td>
                                    <td><?= $data->kodepos?></td>
                                </tr>

                                <tr>
                                    <td>Nama Kepala Desa</td>
                                    <td>:</td>
                                    <td><?= $data->kepaladesa?></td>
                                </tr>

                                <tr>
                                    <td>Foto Kepala Desa</td>
                                    <td>:</td>
                                    <td>
                                        <img src="<?= base_url('asset/img/Kades/');?><?= $data->foto?>" alt="foto kepala desa" haight="75px" width="60px">
                                    </td>
                                </tr>

                                <tr>
                                    <td>NIP Kepala Desa</td>
                                    <td>:</td>
                                    <td><?= $data->nip?></td>
                                </tr>

                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?= $data->alamat?></td>
                                </tr>

                                <tr>
                                    <td>Email desa</td>
                                    <td>:</td>
                                    <td><?= $data->email?></td>
                                </tr>

                                <tr>
                                    <td>Telepon</td>
                                    <td>:</td>
                                    <td><?= $data->telepon?></td>
                                </tr>

                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>Lambu</td>
                                </tr>

                                <tr>
                                    <td>Kabupaten</td>
                                    <td>:</td>
                                    <td>Bima</td>
                                </tr>

                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td>Nusa Tenggara Barat</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $this->load->view('back-end/dashboard/footer.php');?>