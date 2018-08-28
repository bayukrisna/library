<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

	public function dashboard_finance(){
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
  public function dashboard_marketing_data(){
    return $this->db->select('tanggal_pendaftaran , no_telp')
                  ->get('tb_pendaftaran')
                  ->result();
        
  } 
  public function dashboard_marketing(){
    $data_tamu = $this->db->select('count(*) as total')
                ->get('tb_pendaftaran')
                ->row();

    $data_peserta_tes = $this->db->select('count(*) as total')
                ->get('tb_hasil_tes')
                ->row();

    $data_sgs = $this->db->select('count(*) as total')
                ->where('status_bayar', 'Aktif')
                ->where('sgs is NOT NULL')
                ->get('tb_pendaftaran')
                ->row();
    $data_mhs = $this->db->select('count(*) as total')
                ->where('id_status', 1)
                ->get('tb_mahasiswa')
                ->row();

    return array(
      'data_tamu' => $data_tamu->total,
      'data_peserta_tes' => $data_peserta_tes->total,
      'data_mhs' => $data_mhs->total,
      'data_sgs' => $data_sgs->total

      );
  }

	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */