<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_perkuliahan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kelas_perkuliahan_model');
		$this->load->model('daftar_ulang_model');
	}

	public function index(){
				$data['getProdi'] = $this->daftar_ulang_model->getProdi();
				$data['getPeriode'] = $this->daftar_ulang_model->getPeriode();
				$data['kp'] = $this->kelas_perkuliahan_model->data_kp();
				$data['main_view'] = 'Kelas_perkuliahan/kelas_perkuliahan_view';
				$this->load->view('template', $data);
	}

	public function detail_kp(){
				$id_kp = $this->uri->segment(3);
				$data['getProdi'] = $this->daftar_ulang_model->getProdi();
				$data['getPeriode'] = $this->daftar_ulang_model->getPeriode();
				$data['kp'] = $this->kelas_perkuliahan_model->detail_kp($id_kp);
				$data['main_view'] = 'Kelas_perkuliahan/edit_kelas_perkuliahan_view';
				$this->load->view('template', $data);
	}

	public function detail_kelas(){
				$id_kp = $this->uri->segment(3);
				$data['getProdi'] = $this->daftar_ulang_model->getProdi();
				$data['getPeriode'] = $this->daftar_ulang_model->getPeriode();
				$data['kp'] = $this->kelas_perkuliahan_model->detail_kp($id_kp);
				
				$data['dsn'] = $this->kelas_perkuliahan_model->jumlah_dosen($id_kp);
				$id_dosen = $this->uri->segment(3);
				$data['dosen'] = $this->kelas_perkuliahan_model->data_kelas_dosen($id_dosen);
				$data['main_view'] = 'Kelas_perkuliahan/detail_kelas_perkuliahan_view';
				$this->load->view('template', $data);
	}

	public function save_kp()
	{
			if($this->kelas_perkuliahan_model->save_kp() == TRUE){
				$username = $this->input->post('nama_kp');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Registrasi '.$username.' berhasil didaftarkan. </div>');
            	redirect('kelas_perkuliahan');
			} 
	}

	public function hapus_kp($id_kp){
		if ($this->kelas_perkuliahan_model->hapus_kp($id_kp) == TRUE) {
			$this->session->set_flashdata('message', 'Hapus kp Berhasil');
			redirect('kelas_perkuliahan');
		} else {
			$this->session->set_flashdata('message', 'Hapus kp Berhasil');
			redirect('kelas_perkuliahan');
		}
	}

	public function save_edit_kp(){
			$id_kp = $this->uri->segment(3);
					if ($this->kelas_perkuliahan_model->save_edit_kp($id_kp) == TRUE) {
						$data['message'] = 'Edit kp berhasil';
						redirect('kelas_perkuliahan');
					} else {
						$data['main_view'] = 'Prodi/kelas_perkuliahan_view';
						$data['message'] = 'Edit kp gagal';
						redirect('kelas_perkuliahan/edit_kp');
					}
			}

	public function simpan_kelas_dosen()
	{
			if($this->kelas_perkuliahan_model->simpan_kelas_dosen() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Tambah Dosen Berhasil </div>');
				$id_kp = $this->input->post('id_kp');
            	redirect('kelas_perkuliahan/detail_kelas/'.$id_kp);
			} 
	}

	function autocomplete(){
		$searchTerm = $_GET['term'];
		//mendapatkan data yang sesuai dari tabel daftar_kota
		$query = $this->db->query("SELECT * FROM tb_dosen WHERE nama_dosen LIKE '%".$searchTerm."%' ORDER BY nama_dosen ASC");
		foreach($query->result_array() as $row){
		    $data[] = $row['nama_dosen'];
		    $data[] = $row['id_dosen'];
		}
		//return data json
		echo json_encode($data);
	}
	public function get_autocomplete(){
		if(isset($_GET['term'])){
			$result = $this->kelas_perkuliahan_model->autocomplete($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->id_dosen.' - '.$row->nama_dosen,
						'id' => $row->id_dosen);
				echo json_encode($result_array);
			
			}
		}
	}

	public function hapus_kelas_dosen(){
		$id_detail_kurikulum = $this->uri->segment(3);
		if ($this->kelas_perkuliahan_model->hapus_kelas_dosen($id_detail_kurikulum) == TRUE) {
			$this->session->set_flashdata('message', 'Hapus Mata Kuliah Berhasil');
            	redirect('kelas_perkuliahan');
		} else {
			$this->session->set_flashdata('message', 'Hapus Mata Kuliah Berhasil');
            	redirect('kurikulum');
		}
	}

	public function edit_kelas_dosen(){
			$id_detail_kurikulum = $this->uri->segment(3);
					if ($this->kelas_perkuliahan_model->edit_kelas_dosen($id_detail_kurikulum) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit dosen berhasil </div>');
            			$data = $this->input->post('id_kp');
            			redirect('kurikulum/detail_kurikulum/'.$data);
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit Dosen Gagal </div>');
            			redirect('kurikulum');
					}
		} 




}

/* End of file kelas_perkuliahan.php */
/* Location: ./application/controllers/kelas_perkuliahan.php */