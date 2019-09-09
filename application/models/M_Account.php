<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Account extends CI_Model {

	function validate($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('user',1);
		return $result;

	}
}

/* End of file M_Account.php */
/* Location: ./application/models/M_Account.php */