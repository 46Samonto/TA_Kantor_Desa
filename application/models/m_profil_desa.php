<?php

class M_profil_desa extends CI_Model
	{
	   
	    public function select()
	    {
	   		return $this->db->get('tbl_desa')->row_object();
	    }
	}
?>