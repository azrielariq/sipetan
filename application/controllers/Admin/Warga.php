<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

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
		  $.ajax({url: "'.base_url().'Admin/Warga/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';

		$data = [
			'nav' => 'warga',
			'script' => $script,
			'data' => $this->M_Admin->select_table('warga')
		];

		$this->load->view('Admin/Template/V_Header', $data);
		$this->load->view('Admin/V_Warga', $data);
		$this->load->view('Admin/Template/V_Footer', $data);
	}

	public function tambah()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tempat = $this->input->post('tmpt_lahir');
		$tgl = $this->input->post('tgl_lahir');
		$kelamin = $this->input->post('jenis_kel');
		$kontak = $this->input->post('kontak');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'tmpt_lahir' => $tempat,
			'tgl_lahir' => $tgl,
			'jenis_kel' => $kelamin,
			'kontak' => $kontak,
		);

		$this->M_Admin->insert_table('warga', $data);

		redirect(base_url().'Admin/Warga');
	}

	public function viewedit($id)
	{
		if ($id) {
			$data['data'] = $this->M_Admin->select_table_where('warga', $id);

			$this->load->view('Admin/V_Warga_Edit', $data);
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Warga";
				</script>';
		}
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tempat = $this->input->post('tmpt_lahir');
		$tgl = $this->input->post('tgl_lahir');
		$kelamin = $this->input->post('jenis_kel');
		$kontak = $this->input->post('kontak');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'tmpt_lahir' => $tempat,
			'tgl_lahir' => $tgl,
			'jenis_kel' => $kelamin,
			'kontak' => $kontak,
		);

		$this->M_Admin->update_table('warga', $data, $id);

		redirect(base_url().'Admin/Warga');
	}

	public function hapus($id)
	{
		if ($id) {
			$this->M_Admin->delete_table('warga', $id);

			redirect(base_url().'Admin/Warga');
		} else{
			echo '<script language="javascript">
					window.alert("Data tidak ditemukan!");
					window.location.href="'.base_url().'Admin/Warga";
				</script>';
		}
	}

}

/* End of file Warga.php */
/* Location: ./application/controllers/Admin/Warga.php */