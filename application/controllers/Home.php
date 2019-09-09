<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Home');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect(base_url().'account');
		}
	}

	public function index()
	{
		$data['warga'] = $this->M_Home->get_count_table('warga');
		$data['jimpitan'] = $this->M_Home->get_count_table('jimpitan');
		// $data['laporan'] = $this->M_Home->get_count_table('laporan');
		// $data['komplain'] = $this->M_Home->get_count_table('komplain');
		$data['user'] = $this->M_Home->get_count_table('user');

		if($this->session->userdata('level')==='1'){
			$data['nav'] = 'home';
			$this->load->view('template/V_Header', $data);
			$this->load->view('V_Home', $data);

			$data['script'] = '';
			$this->load->view('template/V_Footer', $data);
		}else{
			echo "Access Denied";
		}
	}

	public function user_petugas()
	{
		if($this->session->userdata('level')==='2'){
			$this->load->view('dashboard_view');
		}else{
			echo "Access Denied";
		}
	}

	public function user_warga()
	{
		if($this->session->userdata('level')==='3'){
			$this->load->view('dashboard_view');
		}else{
			echo "Access Denied";
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */