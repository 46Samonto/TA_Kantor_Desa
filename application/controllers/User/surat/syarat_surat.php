<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syarat_surat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_surat');

	}

	// List all your items
	public function index( )
	{
		$data = [
			'title' => 'INFO SYARAT-SYARAT SURAT',
			'data'	=> $this->m_surat->select()
		];
		$this->load->view('back-end/surat/syarat_surat',$data, FALSE);
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file syarat_surat.php */
/* Location: ./application/controllers/User/surat/syarat_surat.php */

?>