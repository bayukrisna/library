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
		$data['main_view'] = 'finance_view';
		// $data['data']=$this->finance_model->data_mahasiswa();
		$this->load->view('template', $data);
	}
	public function detail_pembayaran()
	{
		$ea = $this->uri->segment(3);
		$ya = $this->uri->segment(3);
		$dataku = $this->finance_model->get_data_detail_mahasiswa($ya);
		$data['mahasiswa']=$ea;
		$data['data']= $dataku;
		$data['grade']= $this->finance_model->get_data_detail_mahasiswa2($ya);
		
		$data['data_pembayaran']= $this->finance_model->data_pembayaran_mahasiswa($ya);
		$data['data_pembayaran2']= $this->finance_model->data_pembayaran_mahasiswa($ya);
		$data['kodeunik'] = $this->finance_model->buat_kode();
		// $data['getJenisPembayaran'] = $this->biaya_sekolah_model->getJenisPembayaran($dataku->waktu);
		$data['getTA'] = $this->biaya_sekolah_model->getTA();
		$data['main_view'] = 'Finance/detail_pembayaran_view';
		$this->load->view('template', $data);	
		
		
	}
	public function cek_mahasiswa(){
    $id_mahasiswa = $this->input->get('id_mahasiswa');
    $this->finance_model->cek_mahasiswa($id_mahasiswa);
  }
  public function add_to_cart()
	{
		$ea = $this->uri->segment(3);
		$product_id = $this->input->post('pembayaran');
		$product = $this->finance_model->find($product_id);
		$data = array(
					   'id'      => $this->input->post('pembayaran'),
					   'qty'     => 1,
					   'price'   => $this->input->post('biaya'),
					   'name'    => $this->input->post('nama_mhsa'),
					   'idmhsa'    => $this->input->post('id_mhsa'),
					   'tgl'    => $this->input->post('tanggal_pembayaran'),
					   'pembayaran'    => $product->nama_biaya,
					   'jp'    => $this->input->post('jenis_pembayaran'),
					   'kdmatkul'    => $this->input->post('kode_matkul'),
					   'kode'    => $this->input->post('kode_pembayaran'),
					   'idgrade'    => $this->input->post('id_grade'),
					   'potongan'    => $this->input->post('potongan'),
					   'denda'    => $this->input->post('denda'),
					   'keterangan'    => $this->input->post('keterangan')
					);

		$this->cart->insert($data);
		redirect(base_url('finance/detail_pembayaran/'.$ea));
	}
	public function simpan_pembayaran()
	{
			if($this->finance_model->simpan_pembayaran() == TRUE){
				$this->cart->destroy();
				$ea = $this->uri->segment(3);
            	redirect(base_url('finance/detail_pembayaran/'.$ea));
			} 
	}
	public function clear_cart()
	{
		$this->cart->destroy();

		$ea = $this->uri->segment(3);
		redirect(base_url('finance/detail_pembayaran/'.$ea));
	}
	public function tambah_cart()
	{
		$data = array(
            'id_mahasiswa'                        => $this->input->post('id_mhsa'),
            'kode_pembayaran'                        => $this->input->post('kode_pembayaran'),
            'total_biaya'                 => $this->input->post('biaya'),
            'tanggal_pembayaran'          => $this->input->post('tanggal_pembayaran')
            
        );
		$this->cart->insert($data);
	}
	function data_pembayaran_mahasiswa(){
		
		$id = $this->input->get('id_mahasiswa');
		$data=$this->finance_model->coba_mahasiswa($id);
		echo json_encode($data);
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
						'label' => $row->nim.' - '.$row->nama_mahasiswa,
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
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Data tidak valid '.$id_pendaftaran.'</div>');
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
	public function get_dropdown_pembayaran() {
		// $layanan =$this->input->post('layanan');
		$param = $this->input->get('jenis_biaya');
		$waktu = $this->input->get('waktu');
		$periode = $this->input->get('periode');
		$jenis_biaya = urldecode($param);
		$result = $this->finance_model->get_dropdown_pembayaran($jenis_biaya, $waktu, $periode);
		$option = "";
		$option .= '<option value="">Pilih Pembayaran</option>';
		foreach ($result as $data) {
			$option .= "<option value='".$data->id_biaya."' >".$data->nama_biaya."</option>";
			
		}
		echo $option;

	}
	public function get_ta() {
		// $layanan =$this->input->post('layanan');
		$param = $this->input->get('periode');
		$waktu = $this->input->get('waktu');
		$result = $this->finance_model->get_ta($param , $waktu);
		$option = "";
		$option .= '<option value="">Pilih Pembayaran</option>';
		foreach ($result as $data) {
			$option .= "<option value='".$data->jenis_biaya."' >".$data->jenis_biaya."</option>";
			
		}
		echo $option;

	}
	public function get_biaya_pembayaran() {
		// $layanan =$this->input->post('layanan');
		$param = $this->input->get('id_biaya');
		$pae = $this->input->get('id_grade');
		$par = $this->input->get('kategori');
		$id_biaya = $param;
		$result = $this->finance_model->get_biaya_pembayaran($id_biaya);
		// $option = "";
		// $option .= "<input readonly='' type='text' class='form-control' name='biaya' id='biayaa' value='".$result->jumlah_biaya."' >";

		if ($par == 'Angsuran Tahun 1'){
			$yaya = $this->finance_model->get_yaya($pae);
			$ee = $result->jumlah_biaya * $yaya->diskon / 100;		
		} else if($par == 'Angsuran Tahun 2'  or $par == 'Angsuran Tahun 3' or $par == 'Angsuran Tahun 4'){
			$yaya = $this->finance_model->get_yaya($pae);
			$ee = $result->jumlah_biaya * $yaya->diskon / 100;	
		} else {
			$ee = 0;
		}
		
		
		
		
		$ea = $result->jumlah_biaya - $ee;
		echo $ea;

	}
	public function tambah_pembayaran()
	{
		//set rule di setiap form input
			$this->finance_model->tambah_pembayaran();
	}
	//////////////////////////////////////////////////////////////
	function data_barang(){
		$data=$this->finance_model->data_mahasiswa();
		echo json_encode($data);
	}

	function get_barang(){
		$kobar=$this->input->get('id');
		$data=$this->finance_model->get_barang_by_kode($kobar);
		echo json_encode($data);
	}

	function simpan_barang(){
		$kobar=$this->input->post('kobar');
		$nabar=$this->input->post('nabar');
		$harga=$this->input->post('harga');
		$data=$this->m_barang->simpan_barang($kobar,$nabar,$harga);
		echo json_encode($data);
	}

	function update_barang(){
		$kobar=$this->input->post('kobar');
		$nabar=$this->input->post('nabar');
		$harga=$this->input->post('harga');
		$data=$this->m_barang->update_barang($kobar,$nabar,$harga);
		echo json_encode($data);
	}

	function hapus_barang(){
		$kobar=$this->input->post('kode');
		$data=$this->m_barang->hapus_barang($kobar);
		echo json_encode($data);
	}
}
