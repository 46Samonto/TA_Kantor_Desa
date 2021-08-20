<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_surat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_surat');
	}
	public function index()
	{
		$data = [
			'title' => 'INFORMASI SURAT',
			'data'	=> $this->m_surat->findAll()
		];
		$this->load->view('back-end/surat/informasi_surat',$data, FALSE);


	}

}

/* End of file info_surat.php */
/* Location: ./application/controllers/User/surat/info_surat.php */

?>