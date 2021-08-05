<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');
	}

	public function index()
	{
			$this->load->view('V_Login');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pwd');
		$data = $this->M_Login->select_table_where($username);

		if($data) {
			$pass = $data[0]['password'];
			if (password_verify($password, $pass) == true) {
				$ses_data = [
					'nik' => $data[0]['nik'],
					'username' => $data[0]['username'],
					'nama' => $data[0]['nama'],
					'level' => $data[0]['level']
                ];

                if ($data[0]['level'] == 'Admin') {
                    $this->session->set_userdata('session_data',$ses_data);
                    redirect(base_url().'Admin/Dashboard');
                } elseif ($data[0]['level'] == 'Petugas') {
                	$this->session->set_userdata('session_data',$ses_data);
                    redirect(base_url().'Petugas/Dashboard');
                } else {
                    $this->session->set_userdata('session_data',$ses_data);
                    redirect(base_url().'Warga/Dashboard');
                }
			} else{
				echo '<script language="javascript">
					window.alert("Login gagal! Password salah");
					window.location.href="'.base_url().'";
				</script>';
			}
		} else{
			echo '<script language="javascript">
				window.alert("Login gagal! Username tidak ditemukan");
				window.location.href="'.base_url().'";
			</script>';
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('session_data');
        redirect(base_url());
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */