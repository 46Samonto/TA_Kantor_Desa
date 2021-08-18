<?php

class M_wilayah extends CI_Model
{
	public function findAll()
	{
		// return $this->db->get('tbl_dusun')->result();
		$this->db->select('tbl_dusun.*,
				count(distinct tbl_penduduk.rt) as Rt,
				count(distinct tbl_penduduk.rw) as Rw,
				count(tbl_penduduk.jk = "Laki-Laki") as JMLK,
				count(tbl_penduduk.jk = "Perempuan") as JMLP,
			');
		$this->db->from('tbl_dusun');
		$this->db->join('tbl_penduduk', 'tbl_dusun.namadusun = tbl_penduduk.namadusun', 'left');
		$this->db->order_by('tbl_dusun.idwilayah', 'asc');
		$this->db->group_by('tbl_dusun.idwilayah');
		return $this->db->get()->result();
	}


	function insert($data)
	{
		return $this->db->insert('tbl_dusun',$data);
	}


	function get($id)
	{
		$this->db->where(['idwilayah' => $id]);
		return $this->db->get('tbl_dusun')->row();
	}

	function update($id,$data)
	{
		$this->db->where('idwilayah',$id);
		$this->db->update('tbl_dusun',$data);
		// return $this->db->get()->result();
	}


	function see($id)
	{
		return $this->db->get_where('tbl_dusun','idwilayah',$id)->num_row();
	}


	function delete($id)
	{
		return $this->db->delete('tbl_dusun',['idwilayah' => $id]);
	}


}