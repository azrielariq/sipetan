<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

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
		  $.ajax({url: "'.base_url().'Admin/Informasi/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';

		$data = [
			'nav' => 'informasi',
			'script' => $script,
			'data' => $this->M_Admin->select_informasi_join('warga')
		];

		$this->load->view('Admin/Template/V_Header', $data);
		$this->load->view('Admin/V_Informasi', $data);
		$this->load->view('Admin/Template/V_Footer', $data);
	}

	public function tambah()
	{
		$tgl = $this->input->post('tgl');
		$informasi = $this->input->post('informasi');
		$informan = $this->session->userdata('session_data')['nik'];

		$data = array(
			'tgl' => $tgl,
			'informasi' => $informasi,
			'nik_informan' => $informan
		);

		$this->M_Admin->insert_table('informasi', $data);

		redirect(base_url().'Admin/Informasi');
	}

	public function viewedit($id)
	{
		if ($id) {
			$data['data'] = $this->M_Admin->select_table_where('informasi', $id);

			$this->load->view('Admin/V_Informasi_Edit', $data);
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Informasi";
				</script>';
		}
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$tgl = $this->input->post('tgl');
		$informasi = $this->input->post('informasi');
		$informan = $this->input->post('nik_informan');

		$data = array(
			'tgl' => $tgl,
			'informasi' => $informasi,
			'nik_informan' => $informan
		);

		$this->M_Admin->update_table('informasi', $data, $id);

		redirect(base_url().'Admin/Informasi');
	}

	public function hapus($id)
	{
		if ($id) {
			$this->M_Admin->delete_table('informasi', $id);

			redirect(base_url().'Admin/Informasi');
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Informasi";
				</script>';
		}
	}

}

/* End of file Informasi.php */
/* Location: ./application/controllers/Admin/Informasi.php */