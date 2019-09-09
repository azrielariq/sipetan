<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

	public function get_count_table($table)
	{
		return $this->db->count_all($table);
	}

}

/* End of file M_Home.php */
/* Location: ./application/models/M_Home.php */