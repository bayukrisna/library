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
    public function getDCG(){
     return $this->db->get('detail_catalogue_group')
                    ->result();
    }
    public function getCampus(){
     return $this->db->get('campus')
                    ->result();
    }
    public function getVendor(){
     return $this->db->get('vendor')
                    ->result();
    }
    public function getStatus(){
     return $this->db->get('status')
                    ->result();
    }
    public function getLocker(){
     return $this->db->get('locker')
                    ->result();
    }
    public function getDocument(){
     return $this->db->limit(500)
                    ->join('detail_catalogue_group', 'detail_catalogue_group.dcgId=document.dcgId', 'left')
                    ->order_by('docId', 'asc')
                    ->get('document')
                    ->result();
    }
    public function getCD(){
     return $this->db->get('cd')
                    ->result();
    }
    public function get_dcg_by_cg($cgId){
     return $this->db->where('cgId', $cgId)
                    ->get('detail_catalogue_group')
                    ->result();
   }
    //===================================================================================\\
    //===================================================================================\\
    public function add_catalogue()
    {
        $data = array(
            'cgName'                        => $this->input->post('cgName')
        );
    
        $this->db->insert('catalogue_group', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_catalogue(){
        $data = array('cgName' => $this->input->post('cgName'));

        if (!empty($data)) {
                $this->db->where('cgId', $this->input->post('cgId'))
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
            'dcgName'                        => $this->input->post('dcgName'),
            'cgId'                        => $this->input->post('cgId')
        );
    
        $this->db->insert('detail_catalogue_group', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_detail_catalogue(){
        $data = array('cgId' => $this->input->post('cgId'),
                      'dcgName' => $this->input->post('dcgName'));

        if (!empty($data)) {
                $this->db->where('dcgId', $this->input->post('dcgId'))
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
            'vendorName'                        => $this->input->post('vendorName'),
            'vendorAddress'                        => $this->input->post('vendorAddress'),
            'vendorPhone'                        => $this->input->post('vendorPhone'),
            'vendorEmail'                        => $this->input->post('vendorEmail')
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
            'vendorName'                        => $this->input->post('vendorName'),
            'vendorAddress'                        => $this->input->post('vendorAddress'),
            'vendorPhone'                        => $this->input->post('vendorPhone'),
            'vendorEmail'                        => $this->input->post('vendorEmail')
        );

        if (!empty($data)) {
                $this->db->where('vendorId', $this->input->post('vendorId'))
            ->update('vendor', $data);

              return true;
            } else {
                return null;
            }
      }
    //===================================================================================\\
    //===================================================================================\\
    public function add_status()
    {
        $data = array(
            'statusName'                        => $this->input->post('statusName')
        );
    
        $this->db->insert('status', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_status(){
        $data = array('statusName' => $this->input->post('statusName'));

        if (!empty($data)) {
                $this->db->where('statusId', $this->input->post('statusId'))
            ->update('status', $data);

              return true;
            } else {
                return null;
            }
      }
    //===================================================================================\\
    //===================================================================================\\
    public function add_campus()
    {
        $data = array(
            'campusName'                        => $this->input->post('campusName')
        );
    
        $this->db->insert('campus', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_campus(){
        $data = array('campusName' => $this->input->post('campusName'));

        if (!empty($data)) {
                $this->db->where('campusId', $this->input->post('campusId'))
            ->update('campus', $data);

              return true;
            } else {
                return null;
            }
      }
    //===================================================================================\\
    //===================================================================================\\
    public function add_key()
    {
        $data = array(
            'no_key'                        => $this->input->post('no_key'),
            'campusId'                        => $this->input->post('campusId'),
            'status'                        => '1'
        );
    
        $this->db->insert('key', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_key(){
        $data = array(
            'no_key'                        => $this->input->post('no_key'),
            'campusId'                        => $this->input->post('campusId'),
            'status'                        => $this->input->post('status')
        );

        if (!empty($data)) {
                $this->db->where('id_key', $this->input->post('id_key'))
            ->update('key', $data);

              return true;
            } else {
                return null;
            }
    }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */