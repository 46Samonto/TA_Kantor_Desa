<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_kependudukan extends CI_Model {
	
		public function findAll()
		{
			return $this->db->get('tbl_penduduk')->result();
		}	

		function findKK()
		{
			return $this->db->get('tbl_kk')->result();
		}
	
	}
	
	/* End of file m_kependudukan.php */
	/* Location: ./application/models/m_kependudukan.php */
?>