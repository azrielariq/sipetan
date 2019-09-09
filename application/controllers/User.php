<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect(base_url().'account');
		}
	}

	public function index()
	{
		$user = $this->M_User->get_user();
		$data['user'] = $user;
		
		$data['nav'] = 'user';
		$this->load->view('template/V_Header', $data);
		$this->load->view('V_User', $data);

		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'user/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';

		$data['script'] = $script;
		$this->load->view('template/V_Footer', $data);
	}

	public function add()
	{
		$id_nik = $this->input->post('id_nik');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = [
			'id_nik' => $id_nik,
			'username' => $username,
			'password' => $password,
			'level' => $level
		];

		$this->M_User->add($data);

		redirect(base_url().'user');
	}

	public function viewedit($id = null){
		if($id == null){
			redirect(base_url().'user');
		}

		$data['user'] = $this->M_User->get_user_id($id);

		$this->load->view('V_User_Viewedit', $data);
		
	}

	public function update()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = [
        	'username' => $username,
            'password' => $password,
            'level' => $level
        ];

		$this->M_User->update($data, $id);
		redirect(base_url().'user');
	}

	public function delete($id = null)
	{
		if ($id == null) {
			redirect(base_url().'user');
		}

		if ($id == '1') {
			redirect(base_url().'user');
		}

		$this->M_User->delete($id);
		redirect(base_url().'user');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */