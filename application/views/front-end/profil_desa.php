<?php $this->load->view('front-end/navbar.php');?>
		<section class="content">
            <div class="row clearfix">
            	<div class="container">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="body">
                            <table class=" table table-striped">
                                <tr>
                                    <td colspan="3" class="center"> <h4>PROFIL KANTOR DESA</h4></td>
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
        </section>
<?php $this->load->view('front-end/footer.php');?>