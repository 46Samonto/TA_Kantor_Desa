<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_surat extends CI_Model {

	public function select()
	{
		return $this->db->get('tbl_syarat')->result();
	}

	function edit($id,$data)
	{

	}

	function delete($id)
	{

	}

	function findAll()
	{
		return $this->db->get('tbl_surat')->result();
	}

}

/* End of file m_surat.php */
/* Location: ./application/models/m_surat.php */
?>