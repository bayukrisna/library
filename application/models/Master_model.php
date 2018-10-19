<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
    }
    //===================================================================================\\
    //===================================================================================\\
    public function getCG(){
     return $this->db->get('catalogue_group')
                    ->result();
    }
    public function getVendor(){
     return $this->db->get('vendor')
                    ->result();
    }
    public function getBookStatus(){
     return $this->db->get('bookstatus')
                    ->result();
    }
    //===================================================================================\\
    //===================================================================================\\
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
    //===================================================================================\\
    //===================================================================================\\
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
    //===================================================================================\\
    //===================================================================================\\
    public function add_vendor()
    {
        $data = array(
            'nama_vendor'                        => $this->input->post('nama_vendor'),
            'alamat'                        => $this->input->post('alamat'),
            'no_telp'                        => $this->input->post('no_telp'),
            'email'                        => $this->input->post('email')
        );
    
        $this->db->insert('vendor', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_vendor(){
        $data = array(
            'nama_vendor'                        => $this->input->post('nama_vendor'),
            'alamat'                        => $this->input->post('alamat'),
            'no_telp'                        => $this->input->post('no_telp'),
            'email'                        => $this->input->post('email')
        );

        if (!empty($data)) {
                $this->db->where('id_vendor', $this->input->post('id_vendor'))
            ->update('vendor', $data);

              return true;
            } else {
                return null;
            }
      }
    //===================================================================================\\
    //===================================================================================\\
    public function add_book_status()
    {
        $data = array(
            'bookstatus'                        => $this->input->post('bookstatus')
        );
    
        $this->db->insert('bookstatus', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_book_status(){
        $data = array('bookstatus' => $this->input->post('bookstatus'));

        if (!empty($data)) {
                $this->db->where('id_bookstatus', $this->input->post('id_bookstatus'))
            ->update('bookstatus', $data);

              return true;
            } else {
                return null;
            }
      }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */