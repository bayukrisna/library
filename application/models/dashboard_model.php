<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}
  public function dashboard_admin(){
    $jml_user = $this->db->select('count(*) as total')
                ->get('tb_user')
                ->row();


    return array(
      'jml_user' => $jml_user->total

      );
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
    $yes = $this->db->query('SELECT distinct(DATE_FORMAT(tanggal_pendaftaran,"%Y-%m")) as tanggal_pendaftaran FROM `tb_pendaftaran`  order by tanggal_pendaftaran desc LIMIT 3');
    return $yes->result();
    
        
  }
  public function dashboard_marketing_data2(){
    $yes = $this->db->query('SELECT distinct(DATE_FORMAT(tanggal_pendaftaran,"%Y")) as tanggal_pendaftaran FROM `tb_pendaftaran`  order by tanggal_pendaftaran desc LIMIT 3');
    return $yes->result();
              
        
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
  public function dashboard_akademik(){
    $data_mhs_aktif = $this->db->select('count(*) as total')
                ->where('id_status', 1)
                ->get('tb_mahasiswa')
                ->row();

    $data_prodi = $this->db->select('count(*) as total')
                ->get('tb_prodi')
                ->row();

    $data_dosen = $this->db->select('count(*) as total')
                ->get('tb_dosen')
                ->row();

    $data_mhs_akuntansi = $this->db->select('count(*) as total')
                ->from('tb_konsentrasi')
                ->join('tb_mahasiswa','tb_mahasiswa.id_konsentrasi=tb_konsentrasi.id_konsentrasi')
                ->where('tb_konsentrasi.id_prodi', 'PR002')
                ->get();
    $data_mhs_akuntansi = $data_mhs_akuntansi->row();

    $data_mhs_manajemen = $this->db->select('count(*) as total')
                ->from('tb_konsentrasi')
                ->join('tb_mahasiswa','tb_mahasiswa.id_konsentrasi=tb_konsentrasi.id_konsentrasi')
                ->where('tb_konsentrasi.id_prodi', 'PR001')
                ->get();
    $data_mhs_manajemen = $data_mhs_manajemen->row();

    return array(
      'data_mhs_aktif' => $data_mhs_aktif->total,
      'data_prodi' => $data_prodi->total,
      'data_dosen' => $data_dosen->total,
      'data_mhs_akuntansi' => $data_mhs_akuntansi->total,
      'data_mhs_manajemen' => $data_mhs_manajemen->total

      );
  }

	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */