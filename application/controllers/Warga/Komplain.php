<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain extends CI_Controller {

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
			'nav' => 'komplain',
			'script' => $script,
			'data' => $this->M_Warga->select_komplain_join('warga')
		];

		$this->load->view('Warga/Template/V_Header', $data);
		$this->load->view('Warga/V_Komplain', $data);
		$this->load->view('Warga/Template/V_Footer', $data);
	}

	public function tambah()
	{
		$tgl = $this->input->post('tgl');
		$judul = $this->input->post('judul');
		$keluhan = $this->input->post('keluhan');
		$komplainer = $this->session->userdata('session_data')['nik'];

		$data = array(
			'tgl' => $tgl,
			'judul' => $judul,
			'keluhan' => $keluhan,
			'nik_komplainer' => $komplainer
		);

		$this->M_Warga->insert_table('komplain', $data);

		redirect(base_url().'Warga/Komplain');
	}

}

/* End of file Komplain.php */
/* Location: ./application/controllers/Warga/Komplain.php */