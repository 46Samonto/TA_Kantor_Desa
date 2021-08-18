<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_wilayah');


	}

	// List all your items
	public function index()
	{
        $data = [
            'title' => 'SIKD | Wilayah Admnistrasi',
            'data'  => $this->m_wilayah->findAll()
        ];
		$this->load->view('back-end/informasi/wilayah',$data, FALSE);
	}

	public function add()
	{
         $data = [
            'title' => 'SIKD | Wilayah Admnistrasi'
        ];
        $this->load->view('back-end/informasi/add_wilayah',$data, FALSE);
	}

    public function create(){
        $get = $this->input;

        $data = [
            'namadusun'   => $get->post('namadusun'),
            'kepaladusun' => $get->post('kepaladusun')
        ];
        $this->m_wilayah->insert($data);
        redirect('User/sistem_informasi/wilayah','refresh');
    }

    function edit($id = NULL){
        $data = [
            'title' => 'SIKD | Wilayah Admnistrasi',
            'isi'   => $this->m_wilayah->get($id)
        ];
        $this->load->view('back-end/informasi/edit_wilayah',$data, FALSE);
    }

    public function update($id)
    {
         $get = $this->input;
        $data2 = [
            'namadusun'   => $get->post('namadusun'),
            'kepaladusun' => $get->post('kepaladusun')
        ];
        $this->m_wilayah->update($id,$data2);
       redirect('User/sistem_informasi/wilayah','refresh');
    }

	//Delete one item
	public function delete( $id = NULL )
	{
        $this->m_wilayah->delete($id);
        redirect('User/sistem_informasi/Wilayah','refresh');
	}
}

/* End of file wilayah.php */
/* Location: ./application/controllers/User/sistem_informasi/wilayah.php */
