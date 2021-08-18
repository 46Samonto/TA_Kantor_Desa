<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kependudukan');

	}

	public function index()
	{
		$get = $this->m_kependudukan;
		$data = [
			'title' => 'SIKD | PENDUDUK',
			'data'	=> $get->findAll()
		];

		$this->load->view('back-end/kependudukan/penduduk', $data, FALSE);
	}

}

/* End of file penduduk.php */
/* Location: ./application/controllers/User/kependudukan/penduduk.php */
?>