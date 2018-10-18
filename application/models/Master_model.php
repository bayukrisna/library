<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
    }
    public function getCG(){
     return $this->db->get('catalogue_group')
                    ->result();
    }

    public function add_catalogue()
    {
        $data = array(
            'catalogue_group'                        => $this->input->post('catalogue_group')
        );
    
        $this->db->insert('catalogue_group', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_catalogue(){
        $data = array('catalogue_group' => $this->input->post('catalogue_group'));

        if (!empty($data)) {
                $this->db->where('id_cg', $this->input->post('id_cg'))
            ->update('catalogue_group', $data);

              return true;
            } else {
                return null;
            }
      }
    public function add_detail_catalogue()
    {
        $data = array(
            'detail_cg'                        => $this->input->post('detail_cg'),
            'id_cg'                        => $this->input->post('id_cg')
        );
    
        $this->db->insert('detail_catalogue_group', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_detail_catalogue(){
        $data = array('id_cg' => $this->input->post('id_cg'),
                      'detail_cg' => $this->input->post('detail_cg'));

        if (!empty($data)) {
                $this->db->where('id_dcg', $this->input->post('id_dcg'))
            ->update('detail_catalogue_group', $data);

              return true;
            } else {
                return null;
            }
      }

}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */