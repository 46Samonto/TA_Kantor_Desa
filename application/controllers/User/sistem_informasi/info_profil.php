<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Info_profil extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			//Load Dependencies
			$this->load->model('m_profil_desa');
	
		}
	
		// List all your items
		public function index()
		{
			$data =[
				'title' => 'SIKD | PROFIL DESA',
				'data'	=> $this->m_profil_desa->select()
			];
			$this->load->view('back-end/informasi/profil_desa',$data , FALSE);
		}
	
		// edit a new item
		public function edit()
		{
	
		}
	
		//Update one item
		public function update( $id = NULL )
		{
	
		}
	}
	
	/* End of file info_profil.php */
	/* Location: ./application/controllers/User/sistem_informasi/info_profil.php */
	
?>