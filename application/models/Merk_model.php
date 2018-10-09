<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_merk()
    {
        $data = array(
            'merk'                        => $this->input->post('merk'),
            'id_kategori'                        => $this->input->post('id_kategori'),
        );
    
        $this->db->insert('tb_merk', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  

   public function data_merk(){
     return $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_merk.id_kategori')
                    ->get('tb_merk')
                    ->result();
   }

   public function getKategori(){
     return $this->db->get('tb_kategori')
                    ->result();
   }

  public function edit_merk($id_merk){
    $data = array(
            'id_merk' => $this->input->post('id_merk'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'merk' => $this->input->post('merk')
      );

    if (!empty($data)) {
            $this->db->where('id_merk', $id_merk)
        ->update('tb_merk', $data);

          return true;
        } else {
            return null;
        }
  }

   public function hapus_merk($id_merk){
        $this->db->where('id_merk', $id_merk)
          ->delete('tb_merk');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */