<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function data_informasi(){
		$this->db->select('penerima.nama_level as penerimah, pengirim.nama_level as pengirimh, tb_informasi.judul_info, tb_informasi.deskripsi_info,tb_informasi.id_info, tb_informasi.pengirim, tb_informasi.penerima, tb_informasi.tgl_info');
		 $this->db->from('tb_informasi');
		 $this->db->join('tb_jabatan AS penerima','penerima.id_level=tb_informasi.penerima');
    $this->db->join('tb_jabatan AS pengirim','pengirim.id_level=tb_informasi.pengirim');
		 $query = $this->db->get();
		 return $query->result();
	}

  public function filter_informasi($pengirim1, $penerima1){
   $this->db->select('penerima.nama_level as penerimah, pengirim.nama_level as pengirimh, tb_informasi.judul_info, tb_informasi.deskripsi_info,tb_informasi.id_info, tb_informasi.pengirim, tb_informasi.penerima, tb_informasi.tgl_info');
     $this->db->from('tb_informasi');
     $this->db->join('tb_jabatan AS penerima','penerima.id_level=tb_informasi.penerima');
    $this->db->join('tb_jabatan AS pengirim','pengirim.id_level=tb_informasi.pengirim');
     $this->db->like('tb_informasi.pengirim', $pengirim1);
     $this->db->like('tb_informasi.penerima', $penerima1);
     $query = $this->db->get();
     return $query->result();
  }

  public function filter_informasi2(){
   $this->db->select('penerima.nama_level as penerimah, pengirim.nama_level as pengirimh, tb_informasi.judul_info, tb_informasi.deskripsi_info,tb_informasi.id_info, tb_informasi.pengirim, tb_informasi.penerima, tb_informasi.tgl_info');
     $this->db->from('tb_informasi');
     $this->db->join('tb_jabatan AS penerima','penerima.id_level=tb_informasi.penerima');
    $this->db->join('tb_jabatan AS pengirim','pengirim.id_level=tb_informasi.pengirim');
    
     $query = $this->db->get();
     return $query->result();
  }
  

	public function getJabatan(){
		return $this->db->get('tb_jabatan')->result();
	}

  public function simpan_informasi()
    {
        $data = array(
            'judul_info'        => $this->input->post('judul_info'),
            'deskripsi_info'      	=> $this->input->post('deskripsi_info'),
            'penerima'      		=> $this->input->post('id_level'),
            'pengirim'          => $this->session->userdata('level'),
            'tgl_info'          => date('Y-m-d')
            
        );
    
        $this->db->insert('tb_informasi', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_informasi($id_info){
        $this->db->where('id_info', $id_info)
          ->delete('tb_informasi');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

  public function edit_informasi($id_info){
    $data = array(
      'id_info'        => $this->input->post('id_info', TRUE),
        'judul_info'        => $this->input->post('judul_info'),
            'deskripsi_info'        => $this->input->post('deskripsi_info'),
            'penerima'          => $this->input->post('id_level')
      );

    if (!empty($data)) {
            $this->db->where('id_info', $id_info)
        ->update('tb_informasi', $data);

          return true;
        } else {
            return null;
        }
  }


}

/* End of file konsentrasi_model.php */
/* Location: ./application/models/konsentrasi_model.php */