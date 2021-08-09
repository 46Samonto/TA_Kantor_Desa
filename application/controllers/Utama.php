<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Beranda'
		];
		$this->load->view('front-end/navbar', $data, FALSE);
		$this->load->view('front-end/beranda', FALSE);
		$this->load->view('front-end/footer', FALSE);
	}

}

/* End of file Utama.php */
/* Location: ./application/controllers/Utama.php */