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
	
		//Update one item
		public function update()
		{
			$get = $this->input;

			$data = [
				'namadesa' 	 => $get->post('namadesa'),
				'kodedesa'   => $get->post('kodedesa'),
				'kodepos'  	 => $get->post('kodepos'),
				'kepaladesa' => $get->post('kepaladesa'),
				'email'		 => $get->post('email'),
				'telepon'	 => $get->post('telepon'),
				'foto'		 => $get->post()
			];

			$this->m_profil_desa->update($data);
			redirect('user/sistem_informasi/info_profil','refresh');
		}
	}
	
	/* End of file info_profil.php */
	/* Location: ./application/controllers/User/sistem_informasi/info_profil.php */
	
?>