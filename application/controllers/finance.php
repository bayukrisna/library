<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('finance_model');
		$this->load->model('biaya_sekolah_model');
	}

	public function dashboard_finance(){
		$data['dashboard'] = $this->finance_model->dashboard();
		$data['main_view'] = 'Finance/dashboard_finance_view';
		$this->load->view('template', $data);

	}

		public function index()
	{
		$data['main_view'] = 'Finance/finance_view';
		$data['data']=$this->finance_model->data_mahasiswa();
		$this->load->view('template', $data);
	}
	public function detail_pembayaran()
	{
		$ea = $this->input->post('nama_mhs');
		if ($ea == null){
			redirect('finance/gg');
		} else {
			$data['mahasiswa']=$ea;
			$data['id_mahasiswa']= $this->input->post('id_mahasiswa');
		$data['getJenisPembayaran'] = $this->biaya_sekolah_model->getJenisPembayaran();
		$data['main_view'] = 'Finance/detail_pembayaran_view';
		$this->load->view('template', $data);	
		}
		
	}
	function data_pembayaran_mahasiswa(){
		
		$id = $this->input->get('id_mahasiswa');
		$data=$this->finance_model->coba_mahasiswa($id);
		echo json_encode($data);
		// // echo json_encode($data);
		// $option = "";
		// foreach ($data2 as $data) {
		// 	$option .= "<tr>
		//                   <td>".$data->id_mahasiswa."</td>
		//                    <td>".$data->total_biaya."</td>
		//                         <td>".$data->id_mahasiswa."</td>
		//                    <td>".$data->total_biaya."</td>
		//                    <td>".$data->id_mahasiswa."</td>
		//                    <td>".$data->total_biaya."</td>
		//                         </tr>";
			
		// }
		// echo $option;
	}
	function pembayaran(){
		$data['main_view'] = 'finance/pembayaran_view';
		$this->load->view('template', $data);
	}
	function data_gg(){
		$data=$this->finance_model->barang_gg();
		echo json_encode($data);
	}
	public function oke()
	{
		$this->load->view('Finance/pembayaran_view');
	}
	function autocomplete(){
		$searchTerm = $_GET['term'];
		//mendapatkan data yang sesuai dari tabel daftar_kota
		$query = $this->db->query("SELECT * FROM tb_biaya WHERE nama_biaya LIKE '%".$searchTerm."%' ORDER BY nama_biaya ASC");
		foreach($query->result_array() as $row){
		    $data[] = $row['nama_biaya'];
		    $data[] = $row['id_biaya'];
		}
		//return data json
		echo json_encode($data);
	}
	public function get_autocomplete(){
		if(isset($_GET['term'])){
			$result = $this->finance_model->autocomplete($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->nama_mahasiswa,
						'id' => $row->id_mahasiswa);
				echo json_encode($result_array);
			
			}
		}
	}



	public function data_lunas()
	{
		$data['main_view'] = 'Finance/data_lunas_view';
		$data['mahasiswa'] = $this->finance_model->data_lunas();
		$this->load->view('template', $data);
	}

	public function konfirmasi(){				
				$id_pendaftaran = $this->input->post('id_pendaftaran');
				if ($this->input->post('reg') == 'No Registrasi Tersedia'){
					if ($this->finance_model->save_konfirmasi($id_pendaftaran) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> konfirmasi Berhasil </div>');
						redirect('finance');
					} else  {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Konfirmasi Gagal </div>');
						redirect('finance');
					} 	
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger"> Konfirmasi Gagal </div>');
						redirect('finance');}
		}
	public function konfirmasi_gagal($id_pendaftaran){				
				$id_pendaftaran = $this->uri->segment(3);
				if ($this->finance_model->gagal_konfirmasi($id_pendaftaran) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Data tidak valid </div>');
						redirect('finance');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Konfirmasi Gagal </div>');
						redirect('finance');
					}
			}
	public function cek_id_daftar_ulang(){
		$id = $this->input->post('id_daftar_ulang');
		$this->finance_model->cek_id_daftar_ulang($id);
	}
	public function get_dropdown_pembayaran($param = NULL) {
		// $layanan =$this->input->post('layanan');
		$jenis_biaya = urldecode($param);
		$result = $this->finance_model->get_dropdown_pembayaran($jenis_biaya);
		$option = "";
		$option .= '<option value="">Pilih Pembayaran</option>';
		foreach ($result as $data) {
			$option .= "<option value='".$data->id_biaya."' >".$data->nama_biaya."</option>";
			
		}
		echo $option;

	}
	public function get_biaya_pembayaran($param = NULL) {
		// $layanan =$this->input->post('layanan');
		$id_biaya = $param;
		$result = $this->finance_model->get_biaya_pembayaran($id_biaya);
		$option = "";
		$option .= "<input readonly='' type='text' class='form-control' name='biaya' id='biayaa' value='".$result->jumlah_biaya."' >";
		echo $option;

	}
	public function tambah_pembayaran()
	{
		//set rule di setiap form input
			$this->finance_model->tambah_pembayaran();
	}
}
