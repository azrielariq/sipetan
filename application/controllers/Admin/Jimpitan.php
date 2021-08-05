<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jimpitan extends CI_Controller {

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
		  $.ajax({url: "'.base_url().'Admin/Jimpitan/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';

		$data = [
			'nav' => 'jimpitan',
			'script' => $script,
			'data' => $this->M_Admin->select_jimpitan_join('warga'),
			'data1' => $this->M_Admin->select_jimpitan_latest()
		];

		$this->load->view('Admin/Template/V_Header', $data);
		$this->load->view('Admin/V_Jimpitan', $data);
		$this->load->view('Admin/Template/V_Footer', $data);
	}

	public function tambah()
	{
		$tgl = $this->input->post('tgl_setor');
		$jml = $this->input->post('jml_setor');
		$sisa = $this->input->post('sisa_jimpitan');
		$petugas = $this->session->userdata('session_data')['nik'];

		$data = array(
			'tgl_setor' => $tgl,
			'jml_setor' => $jml,
			'total_jimpitan' => $sisa + $jml,
			'nik_petugas' => $petugas
		);

		$this->M_Admin->insert_table('jimpitan', $data);

		redirect(base_url().'Admin/Jimpitan');
	}

	public function viewedit($id)
	{
		if ($id) {
			$data['data'] = $this->M_Admin->select_table_where('jimpitan', $id);

			$this->load->view('Admin/V_Jimpitan_Edit', $data);
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Jimpitan";
				</script>';
		}
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$tgl = $this->input->post('tgl_setor');
		$jml = $this->input->post('jml_setor');
		$total = $this->input->post('total_jimpitan');
		$petugas = $this->input->post('nik_petugas');

		$data = array(
			'tgl_setor' => $tgl,
			'jml_setor' => $jml,
			'total_jimpitan' => $total,
			'nik_petugas' => $petugas
		);

		$this->M_Admin->update_table('jimpitan', $data, $id);

		redirect(base_url().'Admin/Jimpitan');
	}

	public function hapus($id)
	{
		if ($id) {
			$this->M_Admin->delete_table('jimpitan', $id);

			redirect(base_url().'Admin/Jimpitan');
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Jimpitan";
				</script>';
		}
	}

}

/* End of file Jimpitan.php */
/* Location: ./application/controllers/Admin/Jimpitan.php */