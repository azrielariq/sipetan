<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jimpitan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Jimpitan');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect(base_url().'account');
		}
	}

	public function index()
	{
		$nik = $this->M_Jimpitan->get_nik_jimpitan();
		$jimpitan = $this->M_Jimpitan->get_jimpitan();
		$data['warga'] = $nik;
		$data['jimpitan'] = $jimpitan;

		$data['nav'] = 'jimpitan';
		$this->load->view('template/V_Header', $data);
		$this->load->view('V_Jimpitan', $data);

		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'jimpitan/viewedit/"+id, success: function(result){
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
		$tgl_setor = $this->input->post('tgl_setor');
		$jml_setor = $this->input->post('jml_setor');

		$data = [
			'id_nik' => $id_nik,
			'tgl_setor' => $tgl_setor,
			'jml_setor' => $jml_setor
		];

		$this->M_Jimpitan->add($data);

		redirect(base_url().'jimpitan');
	}

	public function viewedit($id = null){
		if($id == null){
			redirect(base_url().'jimpitan');
		}

		$data['jimpitan'] = $this->M_Jimpitan->get_jimpitan_id($id);

		$this->load->view('V_Jimpitan_Viewedit', $data);
		
	}

	public function update()
	{
		$id = $this->input->post('id');
        $nik = $this->input->post('id_nik');
        $nama = $this->input->post('nama');
		$tgl = $this->input->post('tgl_setor');
		$jml = $this->input->post('jml_setor');

        $data = [
        	'jml_setor' => $jml
        ];

		$this->M_Jimpitan->update($data, $id);
		redirect(base_url().'jimpitan');
	}

	public function delete($id = null)
	{
		if ($id == null) {
			redirect(base_url().'jimpitan');
		}

		if ($id == '1') {
			redirect(base_url().'jimpitan');
		}

		$this->M_Jimpitan->delete($id);
		redirect(base_url().'jimpitan');
	}

}

/* End of file Jimpitan.php */
/* Location: ./application/controllers/Jimpitan.php */