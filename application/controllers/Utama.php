<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_profil_desa');
	}
	public function index()
	{
		$data = [
			'title' => 'Beranda'
		];
		$this->load->view('front-end/navbar', $data, FALSE);
		$this->load->view('front-end/beranda', FALSE);
		$this->load->view('front-end/footer', FALSE);
	}

	function profil_desa()
	{
		$data = [
			'data' => $this->m_profil_desa->select(),
			'title'=> 'INFO PROFIL KANTOR DESA'
		];
		$this->load->view('front-end/profil_desa', $data, FALSE);
	}

	function layanan()
	{
		$data = [
			// 'data' => $this->m_profil_desa->select(),
			'title'=> 'INFO LAYANAN SURAT'
		];
		$this->load->view('front-end/layanan', $data, FALSE);
	}

	function dades()
	{
		$data = [
			// 'data' => $this->m_profil_desa->select(),
			'title'=> 'INFO DATA DESA'
		];
		$this->load->view('front-end/dades', $data, FALSE);
	}
}

/* End of file Utama.php */
/* Location: ./application/controllers/Utama.php */