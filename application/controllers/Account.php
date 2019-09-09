<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Account');
	}

	public function index()
	{
		$this->load->view('V_Login');
	}

	public function auth()
	{
		$username    = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$validate = $this->M_Account->validate($username, $password);
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$name  = $data['username'];
			$pass = $data['password'];
			$level = $data['level'];
			$sesdata = array(
				'username'  => $name,
				'password'     => $pass,
				'level'     => $level,
				'logged_in' => TRUE
			);

			$this->session->set_userdata($sesdata);
        // access login for admin
			if($level === '1'){
				redirect(base_url().'home');

        // access login for petugas
			}elseif($level === '2'){
				redirect(base_url().'home/user_petugas');

        // access login for warga
			}else{
				redirect(base_url().'home/user_warga');
			}
		}else{
			echo $this->session->set_flashdata('msg','Username or Password is Wrong');
			redirect(base_url().'account');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'account');
	}
}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */