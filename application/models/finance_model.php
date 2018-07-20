<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
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
                ->from('tb_du')
                ->where('id_du', $id)
                ->get();
                if ($query->num_rows() > 0)
                {
                    echo '<span class="label label-danger">No Registrasi Tidak Tersedia</span>
                    <input type="hidden" name="reg" class="callout callout-danger" id="reg" value="No Regristrasi Tidak Tersedia">';
                } else{
                echo '<span class="label label-success">No Registrasi Tersedia</span>
                      <input type="hidden" name="reg" class="btn btn-info" id="reg" value="No Registrasi Tersedia" readonly="">';
                
                }
    }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */