<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Jimpitan extends CI_Model {

	public function get_jimpitan()
	{
		$this->db->select('jimpitan.id, jimpitan.id_nik, jimpitan.tgl_setor, jimpitan.jml_setor, warga.nama');
		$this->db->from('jimpitan');
		$this->db->join('warga', 'jimpitan.id_nik = warga.nik');
		return $this->db->get()->result_array();
	}

	public function get_nik_jimpitan()
	{
		$this->db->select('nik');
		$this->db->from('warga');
		return $this->db->get()->row_array();
	}

	public function get_jimpitan_id($id)
	{
		$this->db->select('jimpitan.id, jimpitan.id_nik, jimpitan.tgl_setor, jimpitan.jml_setor, warga.nama');
		$this->db->from('jimpitan');
		$this->db->join('warga', 'jimpitan.id_nik = warga.nik');
		$this->db->where(['jimpitan.id' => $id]);
		return $this->db->get()->row_array();
	}

	public function add($data)
	{
		$this->db->insert('jimpitan', $data);
	}

	public function update($data, $id){
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('jimpitan');
	}

	public function delete($id)
	{
		$this->db->delete('jimpitan', ['id' => $id]);
	}

}

/* End of file M_Jimpitan.php */
/* Location: ./application/models/M_Jimpitan.php */