<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_gedung()
    {
        $data = array(
            'nama_gedung'                        => $this->input->post('nama_gedung'),
            'luas_gedung'                 => $this->input->post('luas_gedung'),
            'kepemilikan'      		=> $this->input->post('kepemilikan'),
            'kegiatan'            => $this->input->post('kegiatan'),
            'id_kondisi'         => $this->input->post('id_kondisi'),
            'id_lahan'         => $this->input->post('id_lahan')
        );
    
        $this->db->insert('tb_gedung', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  
    function drop_kondisi()
    {
        return $this->db->get('tb_kondisi')
                    ->result();

    }
    function drop_lahan()
    {
        return $this->db->get('tb_lahan')
                    ->result();

    }

   public function data_gedung(){
     return $this->db->select('id_gedung, nama_gedung, luas_gedung, tb_gedung.kepemilikan, kegiatan, tb_gedung.id_lahan, nama_lahan, tb_gedung.id_kondisi, kondisi')
                    ->join('tb_lahan', 'tb_lahan.id_lahan = tb_gedung.id_lahan')
                    ->join('tb_kondisi', 'tb_kondisi.id_kondisi = tb_gedung.id_kondisi')
                    ->get('tb_gedung')->result();
   }

  public function edit_gedung($id_gedung){
    $data = array(
            'nama_gedung'                        => $this->input->post('nama_gedung'),
            'luas_gedung'                 => $this->input->post('luas_gedung'),
            'kepemilikan'           => $this->input->post('kepemilikan'),
            'kegiatan'            => $this->input->post('kegiatan'),
            'id_kondisi'         => $this->input->post('id_kondisi'),
            'id_lahan'         => $this->input->post('id_lahan')
      );

    if (!empty($data)) {
            $this->db->where('id_gedung', $id_gedung)
        ->update('tb_gedung', $data);

          return true;
        } else {
            return null;
        }
  }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */