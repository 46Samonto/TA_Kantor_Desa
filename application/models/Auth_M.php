<?php
    class auth_M extends CI_Model
    {
       
        public function login($nik,$password,$role_id)
        {
            // $this->db->select('nik , password , role_id');
            // $this->db->from('tbl_penduduk');
            return $this->db->get('tbl_penduduk',['nik' => $nik,
                                                'password' => $password,
                                                'role_id'  => $role_id                                    
            ])->row();
        }

        public function get_jml_L()
        {
            $query = "SELECT count(jk) as Jml_L FROM tbl_penduduk WHERE jk ='Laki-Laki'";
            return $query;

            // $this->db->select('count('jk' as Jml_K)');
            // $this->db->from('tbl_penduduk');
            // $this->db->where('jk' == 'Laki-Laki');
            // return $this->db->get()->row();
        }

    }
?>