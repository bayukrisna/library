<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	public function data_mahasiswa(){
		return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_du.id_prodi2')
              ->join('tb_sekolah','tb_sekolah.id_sekolah=tb_du.id_sekolah2')
              ->join('tb_konsentrasi','tb_konsentrasi.id_konsentrasi=tb_du.id_konsentrasi2')
              ->where('status_du', 'Mahasiswa')
              ->get('tb_du')
              ->result();
	}

	public function detail_mahasiswa($id_du){
      return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_du.id_prodi2')
              ->join('tb_sekolah','tb_sekolah.id_sekolah=tb_du.id_sekolah2')
              ->join('tb_konsentrasi','tb_konsentrasi.id_konsentrasi=tb_du.id_konsentrasi2')
              ->where('id_du', $id_du)
              ->get('tb_du')
              ->row();
  }

  public function get_mahasiswa_by_du($id_du){
       return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_pendaftaran.id_prodi2')
              ->join('tb_konsentrasi','tb_konsentrasi.id_konsentrasi=tb_du.id_konsentrasi2')
              ->where('id_du', $id_du)
              ->get('tb_du')
              ->row();
  }

  public function save_mahasiswa()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'nama_mahasiswa'      => $this->input->post('nama_mahasiswa', TRUE),
            'nim'      => $this->input->post('nim', TRUE),
            'jenis_kelamin'      => $this->input->post('jenis_kelamin', TRUE),
            'tanggal_lahir'      => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'     => $this->input->post('tempat_lahir', TRUE),
            'agama'     => $this->input->post('agama', TRUE),
            'email'     => $this->input->post('email', TRUE),
            'no_telepon'     => $this->input->post('no_telepon', TRUE),
            'foto_mahasiswa'     => $this->input->post('foto_mahasiswa', TRUE),
            'status_mahasiswa'      => $this->input->post('status_mahasiswa', TRUE),
            'id_prodi'      => $this->input->post('id_prodi', TRUE),
            'id_konsentrasi'      => $this->input->post('id_konsentrasi', TRUE)
        );
    
        $this->db->insert('tb_mahasiswa', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

     public function save_orang_tua()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'nama_ayah'      => $this->input->post('nama_ayah', TRUE),
            'nik_ayah'      => $this->input->post('nik_ayah', TRUE),
            'tanggal_lahir_ayah'      => $this->input->post('tanggal_lahir_ayah', TRUE),
            'pendidikan_ayah'      => $this->input->post('pendidikan_ayah', TRUE),
            'pekerjaan_ayah'     => $this->input->post('pekerjaan_ayah', TRUE),
            'penghasilan_ayah'     => $this->input->post('penghasilan_ayah', TRUE),
            'nama_ibu'     => $this->input->post('nama_ibu', TRUE),
            'nik_ibu'     => $this->input->post('nik_ibu', TRUE),
            'tanggal_lahir_ibu'     => $this->input->post('tanggal_lahir_ibu', TRUE),
            'pendidikan_ibu'      => $this->input->post('pendidikan_ibu', TRUE),
            'pekerjaan_ibu'      => $this->input->post('pekerjaan_ibu', TRUE),
            'penghasilan_ibu'      => $this->input->post('penghasilan_ibu', TRUE),
            'kebutuhan_khusus_ayah'      => $this->input->post('kebutuhan_khusus_ayah', TRUE),
            'kebutuhan_khusus_ibu'      => $this->input->post('kebutuhan_khusus_ibu', TRUE)
        );
        $this->db->insert('tb_orang_tua', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }

    public function save_wali()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'nama_wali'      => $this->input->post('nama_wali', TRUE),
            'tanggal_lahir_wali'      => $this->input->post('tanggal_lahir_wali', TRUE),
            'pendidikan_wali'      => $this->input->post('pendidikan_wali', TRUE),
            'pekerjaan_wali'     => $this->input->post('pekerjaan_wali', TRUE),
            'penghasilan_wali'     => $this->input->post('penghasilan_wali', TRUE)
        );
        $this->db->insert('tb_wali', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }

    public function save_alamat()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'jalan'      => $this->input->post('jalan', TRUE),
            'dusun'      => $this->input->post('dusun', TRUE),
            'kelurahan'      => $this->input->post('kelurahan', TRUE),
            'kecamatan'     => $this->input->post('kecamatan', TRUE),
            'rt'     => $this->input->post('rt', TRUE),
            'rw'     => $this->input->post('rw', TRUE),
            'kode_pos'     => $this->input->post('kode_pos', TRUE),
            'jenis_tinggal'     => $this->input->post('jenis_tinggal', TRUE),
            'alat_transportasi'     => $this->input->post('alat_transportasi', TRUE)
        );
        $this->db->insert('tb_alamat', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */