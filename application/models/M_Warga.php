<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Warga extends CI_Model {

	public function select_table($table)
	{
		$this->db->order_by('id', 'desc');
		return $this->db->get($table)->result_array();
	}

	public function select_jimpitan_join($table)
	{
		$this->db->select('jimpitan.*, '.$table.'.nama');
		$this->db->from('jimpitan');
		$this->db->join($table, ''.$table.'.nik = jimpitan.nik_petugas');
		$this->db->order_by('jimpitan.tgl_setor', 'desc');
		return $this->db->get()->result_array();
	}

	public function select_komplain_join($table)
	{
		$this->db->select('komplain.*, '.$table.'.nama');
		$this->db->from('komplain');
		$this->db->join($table, ''.$table.'.nik = komplain.nik_komplainer');
		$this->db->order_by('komplain.tgl', 'desc');
		return $this->db->get()->result_array();
	}

	public function insert_table($table, $data)
	{
		$this->db->insert($table, $data);
	}

}

/* End of file M_Warga.php */
/* Location: ./application/models/M_Warga.php */