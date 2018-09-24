<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsentrasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function data_konsentrasi(){
		$this->db->select('*');
		 $this->db->from('tb_konsentrasi');
		 $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi.id_prodi');
		 $query = $this->db->get();
		 return $query->result();
	}

   public function get_konsentrasi_by_id($id_konsentrasi){
      return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi.id_prodi')
              ->where('tb_konsentrasi.id_konsentrasi', $id_konsentrasi)
              ->get('tb_konsentrasi')
              ->row();
  }

  

	public function get_prodi(){
		return $this->db->get('tb_prodi')->result();
	}

	public function  buat_kode()   {
          $this->db->SELECT('RIGHT(tb_konsentrasi.id_konsentrasi,3) as kode', FALSE);
          $this->db->order_by('id_konsentrasi','DESC');    
          $this->db->limit(1);    
          $query = $this->db->get('tb_konsentrasi');      //cek dulu apakah ada sudah ada kode di tabel.    
          if($query->num_rows() <> 0){      
           //jika kode ternyata sudah ada.      
           $data = $query->row();      
           $kode = intval($data->kode) + 1;    
          }
          else {      
           //jika kode belum ada      
           $kode = 1;    
          }
          $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
          $kodejadi = "KO".$kodemax;    // hasilnya ODJ-9921-0001 dst.
          return $kodejadi; 
    }

    public function save_konsentrasi()
    {
        $data = array(
            'id_konsentrasi'        => $this->input->post('id_konsentrasi'),
            'nama_konsentrasi'      	=> $this->input->post('nama_konsentrasi'),
            'id_prodi'      		=> $this->input->post('id_prodi')
            
        );
    
        $this->db->insert('tb_konsentrasi', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function save_konsentrasi2()
    {
        $data = array(
            'id_konsentrasi'        => $this->input->post('id_konsentrasi'),
            'nama_konsentrasi'        => $this->input->post('nama_konsentrasi'),
            'id_prodi'          => $this->input->post('id_prodi')
            
        );
    
        $this->db->insert('tb_konsentrasi_kelas', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_konsentrasi($id_konsentrasi){
        $this->db->where('id_konsentrasi', $id_konsentrasi)
          ->delete('tb_konsentrasi');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

    public function hapus_konsentrasi2($id_konsentrasi){
        $this->db->where('id_konsentrasi', $id_konsentrasi)
          ->delete('tb_konsentrasi_kelas');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

   


  public function save_edit_konsentrasi($id_sekolah){
    $data = array(
       'id_konsentrasi'     => $this->input->post('id_konsentrasi'),
        'nama_konsentrasi'  => $this->input->post('nama_konsentrasi'),
        'id_prodi'         => $this->input->post('id_prodi')
      );

    if (!empty($data)) {
            $this->db->where('id_konsentrasi', $id_sekolah)
        ->update('tb_konsentrasi', $data);

          return true;
        } else {
            return null;
        }
  }

  public function save_edit_konsentrasi2($id_sekolah){
    $data = array(
       'id_konsentrasi'     => $this->input->post('id_konsentrasi'),
        'nama_konsentrasi'  => $this->input->post('nama_konsentrasi'),
        'id_prodi'         => $this->input->post('id_prodi')
      );

    if (!empty($data)) {
            $this->db->where('id_konsentrasi', $id_sekolah)
        ->update('tb_konsentrasi_kelas', $data);

          return true;
        } else {
            return null;
        }
  }

}

/* End of file konsentrasi_model.php */
/* Location: ./application/models/konsentrasi_model.php */