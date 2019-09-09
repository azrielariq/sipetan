<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	public function get_user()
	{
		return $this->db->get('user')->result_array();
	}

	public function get_user_id($id)
	{
		$this->db->where(['id' => $id]);
		return $this->db->get('user')->row_array();
	}

	public function add($data)
	{
		$this->db->insert('user', $data);
	}

	public function update($data, $id){
		$this->db->set($data);
		$this->db->where('id',$id);
		$this->db->update('user');
	}

	public function delete($id)
	{
		$this->db->delete('user', ['id' => $id]);
	}

}

/* End of file M_User.php */
/* Location: ./application/models/M_User.php */