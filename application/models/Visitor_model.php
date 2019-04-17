<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
    
    public function add_visitor()
    {
        $data = array(
            'visitorName'                        => $this->input->post('visitorName'),
            'visitorAddress'                        => $this->input->post('visitorAddress'),
            'visitorNote'                        => $this->input->post('visitorNote'),
            'campusId'                        => $this->input->post('campusId'),
            'visitorDate'                        => date('Y-m-d h:i:s'),
        );
    
        $this->db->insert('visitor', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_visitor(){
        $data = array(
            'visitorName'                        => $this->input->post('visitorName'),
            'visitorAddress'                        => $this->input->post('visitorAddress'),
            'visitorNote'                        => $this->input->post('visitorNote'),
            'campusId'                        => $this->input->post('campusId'),
        );
        if (!empty($data)) {
                $this->db->where('visitorNo', $this->input->post('visitorNo'))
            ->update('visitor', $data);

              return true;
            } else {
                return null;
            }
    }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */