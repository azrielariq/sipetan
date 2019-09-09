<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Warga');
		$this->load->library('excel');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect(base_url().'account');
		}
	}

	public function index()
	{
		$warga = $this->M_Warga->get_warga();
		$data['warga'] = $warga;
		
		$data['nav'] = 'warga';
		$this->load->view('template/V_Header', $data);
		$this->load->view('V_Warga', $data);

		$script = '<script>
		function viewedit(nik){
		  $.ajax({url: "'.base_url().'warga/viewedit/"+nik, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';
		$data['script'] = $script;
		$this->load->view('template/V_Footer', $data);
	}

	public function add()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tmpt_lahir = $this->input->post('tmpt_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jenis_kel = $this->input->post('jenis_kel');
		$gol_darah = $this->input->post('gol_darah');
		$alamat = $this->input->post('alamat');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status');
		$pekerjaan = $this->input->post('pekerjaan');
		$kewarganegaraan = $this->input->post('kewarganegaraan');
		$kontak = $this->input->post('kontak');

		$data = [
			'nik' => $nik,
			'nama' => $nama,
			'tmpt_lahir' => $tmpt_lahir,
			'tgl_lahir' => $tgl_lahir,
			'jenis_kel' => $jenis_kel,
			'gol_darah' => $gol_darah,
			'alamat' => $alamat,
			'agama' => $agama,
			'status' => $status,
			'pekerjaan' => $pekerjaan,
			'kewarganegaraan' => $kewarganegaraan,
			'kontak' => $kontak
		];

		$this->M_Warga->add($data);

		redirect(base_url().'warga');
	}

	public function import_excel()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{   
					$nik = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$nama = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$tmpt_lahir = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$tgl_lahir = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$jenis_kel = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$gol_darah = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$alamat = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$agama = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$status = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
					$pekerjaan = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
					$kewarganegaraan = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
					$kontak = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
					
					$data[] = array(
						'nik'        =>    $nik,
						'nama'        =>    $nama,
						'tmpt_lahir'        =>    $tmpt_lahir,
						'tgl_lahir'        =>    $tgl_lahir,
						'jenis_kel'        =>    $jenis_kel,
						'gol_darah'        =>    $gol_darah,
						'alamat'        =>    $alamat,
						'agama'        =>    $agama,
						'status'        =>    $status,
						'pekerjaan'        =>    $pekerjaan,
						'kewarganegaraan'        =>    $kewarganegaraan,
						'kontak'        =>    $kontak
					);
				}
			}
			$this->M_Warga->insert_import($data);
		}
	}

	public function viewedit($nik = null){
		if($nik == null){
			redirect(base_url().'warga');
		}

		$data['warga'] = $this->M_Warga->get_warga_nik($nik);

		$this->load->view('V_Warga_Viewedit', $data);
		
	}

	public function update()
	{
		$nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
		$tmpt_lahir = $this->input->post('tmpt_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jenis_kel = $this->input->post('jenis_kel');
		$gol_darah = $this->input->post('gol_darah');
		$alamat = $this->input->post('alamat');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status');
		$pekerjaan = $this->input->post('pekerjaan');
		$kewarganegaraan = $this->input->post('kewarganegaraan');
        $kontak = $this->input->post('kontak');

        $data = [
        	'nama' => $nama,
            'tmpt_lahir' => $tmpt_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kel' => $jenis_kel,
            'gol_darah' => $gol_darah,
            'alamat' => $alamat,
            'agama' => $agama,
            'status' => $status,
            'pekerjaan' => $pekerjaan,
            'kewarganegaraan' => $kewarganegaraan,
            'kontak' => $kontak
        ];

		$this->M_Warga->update($data, $nik);
		redirect(base_url().'warga');
	}

	public function delete($nik = null)
	{
		if ($nik == null) {
			redirect(base_url().'warga');
		}

		if ($nik == '1') {
			redirect(base_url().'warga');
		}

		$this->M_Warga->delete($nik);
		redirect(base_url().'warga');
	}
}

/* End of file Warga.php */
/* Location: ./application/controllers/Warga.php */