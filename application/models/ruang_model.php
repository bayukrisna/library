<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function data_ruang(){
		$this->db->select('*');
		 $this->db->from('tb_ruang');
		 $query = $this->db->get();
		 return $query->result();
	}

  function getRuang()
    {
        return $this->db->get('tb_ruang')
                    ->result();

    }

    public function simpan_ruang()
    {
        $data = array(
            
            'nama_ruang'      	=> $this->input->post('nama_ruang'),
            'kapasitas'      		=> $this->input->post('kapasitas'),
            'keterangan'         => $this->input->post('keterangan')
            
        );
    
        $this->db->insert('tb_ruang', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function hapus_ruang($id_ruang){
        $this->db->where('id_ruang', $id_ruang)
          ->delete('tb_ruang');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

   


  public function edit_ruang($id_ruang){
    $data = array(
            'id_ruang'        => $this->input->post('id_ruang'),
            'nama_ruang'        => $this->input->post('nama_ruang'),
            'kapasitas'         => $this->input->post('kapasitas'),
            'keterangan'         => $this->input->post('keterangan')
      );

    if (!empty($data)) {
            $this->db->where('id_ruang', $id_ruang)
        ->update('tb_ruang', $data);

          return true;
        } else {
            return null;
        }
  }

}

/* End of file ruang_model.php */
/* Location: ./application/models/ruang_model.php */