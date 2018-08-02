<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
  function barang_gg(){
    $hasil=$this->db->query("SELECT * FROM tb_pembayaran");
    return $hasil->result();
  }
  public function autocomplete($nama){

    // $this->db->like('nama_mahasiswa' , $nama, 'BOTH');
    // $this->db->order_by('id_mahasiswa', 'asc');
    // $this->db->limit(5);
    // return $this->db->get('tb_mahasiswa')->result();
     $this->db->select('*');
     $this->db->from('tb_mahasiswa');
     // $this->db->join('tb_pembayaran','tb_mahasiswa.id_mahasiswa=tb_pembayaran.id_mahasiswa');
     $this->db->like('tb_mahasiswa.nama_mahasiswa',$nama);
     $query = $this->db->get();
     return $query->result();
  }
  function coba_mahasiswa($id){
    $this->db->select('*');
     $this->db->from('tb_pembayaran');
     $this->db->join('tb_mahasiswa','tb_mahasiswa.id_mahasiswa=tb_pembayaran.id_mahasiswa');
     $this->db->join('tb_biaya','tb_biaya.id_biaya=tb_pembayaran.id_biaya');
     $this->db->where('tb_pembayaran.id_mahasiswa', $id);
     $query = $this->db->get();
     return $query->result();
  }
  function get_data_ranking($id){
    $this->db->select('*');
     $this->db->from('tb_mahasiswa');
     $this->db->join('tb_mahasiswa','tb_mahasiswa.id_mahasiswa=tb_pembayaran.id_mahasiswa');
     $this->db->join('tb_biaya','tb_biaya.id_biaya=tb_pembayaran.id_biaya');
     $this->db->where('tb_pembayaran.id_mahasiswa', $id);
     $query = $this->db->get();
     return $query->result();
  }

   public function riwayat_pembayaran($id_mahasiswa){
    $this->db->select('*');
     $this->db->from('tb_pembayaran');

     $this->db->where('tb_pembayaran.id_mahasiswa', $id_mahasiswa);
     $query = $this->db->get();
     return $query->result();
  }

  public function dashboard(){
    $belum_bayar = $this->db->select('count(*) as total')
                ->where('status_bayar','Proses Pengecekan')
                ->get('tb_pendaftaran')
                ->row();

    $lunas = $this->db->query("SELECT COUNT(*) AS total FROM tb_pendaftaran WHERE status_bayar = 'Lunas' OR status_bayar = 'Aktif'")->row();

    return array(
      'belum_bayar' => $belum_bayar->total,
      'lunas' => $lunas->total

      );
  }

	public function data_mahasiswa(){
		return $this->db->where('status_bayar' , 'Proses Pengecekan')
		->order_by('id_pendaftaran','ASC')
		->get('tb_pendaftaran')
		->result();
	}
 

  public function data_lunas(){
    $query = $this->db->query("SELECT * FROM tb_pendaftaran WHERE status_bayar = 'Lunas' OR status_bayar = 'Aktif'")->result();
    return $query;
  }

	public function save_konfirmasi($id_pendaftaran){
    $data = array(
       'id_pendaftaran'     => $id_pendaftaran,
       'id_du'            => $this->input->post('id_daftar_ulang', TRUE),
        'status_bayar'  => 'Lunas',
        'tanggal_konfirmasi'  => date('Y-m-d')
      );

    $this->db->where('id_pendaftaran', $id_pendaftaran)
        ->update('tb_pendaftaran', $data);

    if ($this->db->affected_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
  public function gagal_konfirmasi($id_pendaftaran){
    $data = array(
       'id_pendaftaran'     => $id_pendaftaran,
        'status_bayar'  => 'Belum bayar'
      );

    $this->db->where('id_pendaftaran', $id_pendaftaran)
        ->update('tb_pendaftaran', $data);

    if ($this->db->affected_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
  function cek_id_daftar_ulang($id){
      $query = $this->db->select('*')
                ->from('tb_pendaftaran')
                ->where('id_du', $id)
                ->get();
                if ($query->num_rows() > 0)
                {
                    echo '<span class="label label-danger">No Registrasi Tidak Tersedia</span>
                    <input type="hidden" name="reg" class="callout callout-danger" id="reg" value="No Regristrasi Tidak Tersedia">
                    <script>document.getElementById("btn_update").disabled = true;</script>';
                } else{
                echo '<span class="label label-success">No Registrasi Tersedia</span>
                      <input type="hidden" name="reg" class="btn btn-info" id="reg" value="No Registrasi Tersedia" readonly="">
                      <script>document.getElementById("btn_update").disabled = false;</script>';

                
                }
    }
     public function get_dropdown_pembayaran($data){
      return $this->db->where('jenis_biaya',$data)
              ->get('tb_biaya')
              ->result();
  }
  public function get_biaya_pembayaran($data){
      return $this->db->where('id_biaya',$data)
              ->get('tb_biaya')
              ->row();
  }
  function get_data_detail_mahasiswa($ya){
    return $this->db->select('id_mahasiswa, jenis_kelamin, no_telepon')
                    

              ->where('id_mahasiswa',$ya)
              ->get('tb_mahasiswa')
              ->row();
  }
  public function tambah_pembayaran()
    {
        $data = array(
            'id_mahasiswa'                        => $this->input->post('id_mhsa'),
            'id_biaya'                        => $this->input->post('pembayaran'),
            'total_biaya'                 => $this->input->post('biaya'),
            'tanggal_pembayaran'          => $this->input->post('tanggal_pembayaran')
            
        );
    
        $this->db->insert('tb_pembayaran', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */