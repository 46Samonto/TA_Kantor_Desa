<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Organisasi extends CI_Controller {
	
		public function index()
		{
			$data = [
				'title' => 'SIKD | ORGANISASI'
			];

			$this->load->view('back-end/informasi/organisasi', $data, FALSE);
		}
	
	}
	
	/* End of file organisasi.php */
	/* Location: ./application/controllers/User/sistem_informasi/organisasi.php */
?>	