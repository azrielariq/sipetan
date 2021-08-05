<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jimpitan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('session_data') == false){
			redirect(base_url());
		}

		$this->load->model('M_Warga');
	}

	public function index()
	{
		$script = '';

		$data = [
			'nav' => 'jimpitan',
			'script' => $script,
			'data' => $this->M_Warga->select_jimpitan_join('warga')
		];

		$this->load->view('Warga/Template/V_Header', $data);
		$this->load->view('Warga/V_Jimpitan', $data);
		$this->load->view('Warga/Template/V_Footer', $data);
	}

}

/* End of file Jimpitan.php */
/* Location: ./application/controllers/Warga/Jimpitan.php */