<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

	public function select_table($table)
	{
		$this->db->order_by('id', 'desc');
		return $this->db->get($table)->result_array();
	}

	public function select_table_where($table, $id)
	{
		return $this->db->get_where($table, array('id' => $id))->row_array();
	}

	public function select_jimpitan_join($table)
	{
		$this->db->select('jimpitan.*, '.$table.'.nama');
		$this->db->from('jimpitan');
		$this->db->join($table, ''.$table.'.nik = jimpitan.nik_petugas');
		$this->db->order_by('jimpitan.tgl_setor', 'desc');
		return $this->db->get()->result_array();
	}

	public function select_jimpitan_latest()
	{
		$this->db->select('total_jimpitan');
		$this->db->from('jimpitan');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1);
		return $this->db->get()->result_array();
	}

	public function select_informasi_join($table)
	{
		$this->db->select('informasi.*, '.$table.'.nama');
		$this->db->from('informasi');
		$this->db->join($table, ''.$table.'.nik = informasi.nik_informan');
		$this->db->order_by('informasi.tgl', 'desc');
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

	public function update_table($table, $data, $id)
	{
		$this->db->update($table, $data, array('id' => $id));
	}

	public function delete_table($table, $id)
	{
		$this->db->delete($table, ['id' => $id]);
	}

}

/* End of file M_Admin.php */
/* Location: ./application/models/M_Admin.php */