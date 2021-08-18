<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Keluarga extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_kependudukan');
 	}

 	public function index()
 	{
 		$get = $this->m_kependudukan;
 		$data = [
 			'title' => 'SIKD | KK',
 			'data'	=> $get->findKK()
 		];
 		
 		$this->load->view('back-end/kependudukan/keluarga', $data, FALSE);
 	}
 
 }
 
 /* End of file keluarga.php */
 /* Location: ./application/controllers/User/kependudukan/keluarga.php */
?>
