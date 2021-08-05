<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('session_data') == false){
			redirect(base_url());
		}

		$this->load->model('M_Admin');
	}

	public function index()
	{
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'Admin/Pengguna/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';

		$data = [
			'nav' => 'pengguna',
			'script' => $script,
			'data' => $this->M_Admin->select_table('pengguna')
		];

		$this->load->view('Admin/Template/V_Header', $data);
		$this->load->view('Admin/V_Pengguna', $data);
		$this->load->view('Admin/Template/V_Footer', $data);
	}

	public function tambah()
	{
		$nik = $this->input->post('nik');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'id_nik' => $nik,
			'username' => $username,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'level' => $level,
		);

		$this->M_Admin->insert_table('pengguna', $data);

		redirect(base_url().'Admin/Pengguna');
	}

	public function viewedit($id)
	{
		if ($id) {
			$data['data'] = $this->M_Admin->select_table_where('pengguna', $id);

			$this->load->view('Admin/V_Pengguna_Edit', $data);
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Pengguna";
				</script>';
		}
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'id_nik' => $nik,
			'username' => $username,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'level' => $level,
		);

		$this->M_Admin->update_table('pengguna', $data, $id);

		redirect(base_url().'Admin/Pengguna');
	}

	public function hapus($id)
	{
		if ($id) {
			$this->M_Admin->delete_table('pengguna', $id);

			redirect(base_url().'Admin/Pengguna');
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Pengguna";
				</script>';
		}
	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/Admin/Pengguna.php */