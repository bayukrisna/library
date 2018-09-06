<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function data(){
		return $this->db->get('tb_events')->result();
	}

  public function edit_calendar(){
    // $start = date('dd.MM.yyyy HH:mm:ss', strtotime($this->input->post('start')));
    $data = array(
            'title'                        => $this->input->post('title'),
            'start'                        => $this->input->post('start'),
            'end'                 => $this->input->post('end'),
            'backgroundColor'          => $this->input->post('backgroundColor'),
            'description'                 => $this->input->post('description')
      );
    $id = $this->input->post('id');
    if (!empty($data)) {
            $this->db->where('id', $id)
        ->update('tb_events', $data);

          return true;
        } else {
            return null;
        }
  }
  public function tambah_calendar(){
    // $start = date('dd.MM.yyyy HH:mm:ss', strtotime($this->input->post('start')));
    $data = array(
            'title'                        => $this->input->post('title'),
            'start'                        => $this->input->post('start'),
            'end'                 => $this->input->post('end'),
            'backgroundColor'          => $this->input->post('backgroundColor'),
            'description'                 => $this->input->post('description')
      );
    $this->db->insert('tb_events', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
  }

  public function hapus_calendar($id){
        $this->db->where('id', $id)
          ->delete('tb_events');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }
    
}

/* End of file konsentrasi_model.php */
/* Location: ./application/models/konsentrasi_model.php */
