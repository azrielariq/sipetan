<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('session_data') == false){
			redirect(base_url());
		}

		$this->load->model('M_Petugas');
	}

	public function index()
	{
		$script = '';
		$data = [
			'nav' => 'dashboard',
			'script' => $script,
			'data' => $this->M_Petugas->select_table('informasi')
		];

		$this->load->view('Petugas/Template/V_Header', $data);
		$this->load->view('Petugas/V_Dashboard', $data);
		$this->load->view('Petugas/Template/V_Footer', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Petugas/Dashboard.php */