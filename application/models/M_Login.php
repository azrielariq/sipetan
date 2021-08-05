<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

	public function select_table_where($username)
	{
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->join('warga', 'warga.nik = pengguna.id_nik');
		$this->db->where('username', $username);
		$this->db->limit(1);
		return $this->db->get()->result_array();
	}
}

/* End of file M_Login.php */
/* Location: ./application/models/M_Login.php */