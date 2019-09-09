<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Warga extends CI_Model {

	public function get_warga()
	{
		return $this->db->get('warga')->result_array();
	}

	public function get_warga_nik($nik)
	{
		$this->db->where(['nik' => $nik]);
		return $this->db->get('warga')->row_array();
	}

	public function insert_import($data)
	{
		$this->db->insert_batch('warga', $data);
		return $this->db->insert_id();
	}

	public function add($data)
	{
		$this->db->insert('warga', $data);
	}

	public function update($data, $nik){
		$this->db->set($data);
		$this->db->where('nik',$nik);
		$this->db->update('warga');
	}

	public function delete($nik)
	{
		$this->db->delete('warga', ['nik' => $nik]);
	}
}

/* End of file M_Warga.php */
/* Location: ./application/models/M_Warga.php */