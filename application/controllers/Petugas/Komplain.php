<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain extends CI_Controller {

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
			'nav' => 'komplain',
			'script' => $script,
			'data' => $this->M_Petugas->select_komplain_join('warga')
		];

		$this->load->view('Petugas/Template/V_Header', $data);
		$this->load->view('Petugas/V_Komplain', $data);
		$this->load->view('Petugas/Template/V_Footer', $data);
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

		$this->M_Petugas->insert_table('komplain', $data);

		redirect(base_url().'Petugas/Komplain');
	}

}

/* End of file Komplain.php */
/* Location: ./application/controllers/Petugas/Komplain.php */