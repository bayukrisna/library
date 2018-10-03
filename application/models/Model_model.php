<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_model($upload)
    {
        $data = array(
            'nama_model'                        => $this->input->post('nama_model'),
            'id_manufacturer'                 => $this->input->post('id_manufacturer'),
            'id_category'      		=> $this->input->post('id_category'),
            'model_no'            => $this->input->post('model_no'),
            'eol'         => $this->input->post('eol'),
            'notes'         => $this->input->post('notes'),
            'image'         => $upload['file_name']
        );
    
        $this->db->insert('tb_model', $data);

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

   public function data_model(){
     return $this->db->get('tb_model')->result();
   }

  public function edit_model($id_model, $upload){

    $data = array(
            'nama_model'                        => $this->input->post('nama_model'),
            'id_manufacturer'                 => $this->input->post('id_manufacturer'),
            'id_category'           => $this->input->post('id_category'),
            'model_no'            => $this->input->post('model_no'),
            'eol'         => $this->input->post('eol'),
            'notes'         => $this->input->post('notes')
        );
    $data2 = array('image' => $upload['file_name'] );
    if (!empty($data)) {
            $this->db->where('id_model', $id_model)
        ->update('tb_model', $data);
        if($upload['file_name'] != null){
            $this->db->where('id_model', $id_model)
            ->update('tb_model', $data2);
        }
          return true;
        } else {
            return null;
        }
  }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */