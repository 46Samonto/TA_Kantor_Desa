<?php
    class auth_M extends CI_Model
    {
       
        public function login($nik,$password,$role_id)
        {
            $this->db->select('nik , password , role_id');
            $this->db->from('tbl_penduduk');
            return $this->db-get()->object_row();
        }

    }
?>