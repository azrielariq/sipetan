<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain extends CI_Controller {

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
		  $.ajax({url: "'.base_url().'Admin/Komplain/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';

		$data = [
			'nav' => 'komplain',
			'script' => $script,
			'data' => $this->M_Admin->select_komplain_join('warga')
		];

		$this->load->view('Admin/Template/V_Header', $data);
		$this->load->view('Admin/V_Komplain', $data);
		$this->load->view('Admin/Template/V_Footer', $data);
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

		$this->M_Admin->insert_table('komplain', $data);

		redirect(base_url().'Admin/Komplain');
	}

	public function viewedit($id)
	{
		if ($id) {
			$data['data'] = $this->M_Admin->select_table_where('komplain', $id);

			$this->load->view('Admin/V_Komplain_Edit', $data);
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Komplain";
				</script>';
		}
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$tgl = $this->input->post('tgl');
		$judul = $this->input->post('judul');
		$keluhan = $this->input->post('keluhan');
		$tanggapan = $this->input->post('tanggapan');
		$komplainer = $this->input->post('komplainer');

		$data = array(
			'tgl' => $tgl,
			'judul' => $judul,
			'keluhan' => $keluhan,
			'tanggapan' => $tanggapan,
			'nik_komplainer' => $komplainer
		);

		$this->M_Admin->update_table('komplain', $data, $id);

		redirect(base_url().'Admin/Komplain');
	}

	public function hapus($id)
	{
		if ($id) {
			$this->M_Admin->delete_table('komplain', $id);

			redirect(base_url().'Admin/Komplain');
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Komplain";
				</script>';
		}
	}

}

/* End of file Komplain.php */
/* Location: ./application/controllers/Admin/Komplain.php */