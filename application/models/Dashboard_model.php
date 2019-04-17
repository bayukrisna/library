<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}
	function get_book_list($limit, $start){
		$a = $this->input->get('p');
		$a = urldecode($a);
        $query = $this->db->like('docTitle', $a)
        				->get('document', $limit, $start);
        return $query;
    }
     public function dashboard_admin(){
     	$t_document = $this->db->select('count(*) as total')
	                ->get('document')
	                ->row();
	    $t_document_header = $this->db
	    			->select('distinct(docId)')
					->where('campusId', $this->session->userdata('campusId'))
	                ->get('document_number')
	                ->num_rows();	
		$t_document_number = $this->db->select('count(*) as total')
					->where('campusId', $this->session->userdata('campusId'))
	                ->get('document_number')
	                ->row();	                
	    $t_cd = $this->db->select('count(*) as total')
	                ->get('cd')
	                ->row();
	    $t_user = $this->db->select('count(*) as total')
	                ->get('user')
	                ->row();
	    return array(
	      't_document' => $t_document->total,
	      't_document_number' => $t_document_number->total,
	      't_document_header' => $t_document_header,
	      't_cd' => $t_cd->total,
	      't_user' => $t_user->total
	      );
	  }
	public function data_log(){
     return $this->db->select('user1.username as username, user2.username as to, tb_log.waktu_log, tb_log.aktivitas, tb_log.waktu_log, tb_barang.nama_barang')
     				->from('tb_log')
     				->join('tb_user as user1','user1.id_user=tb_log.user_log')
     				->join('tb_barang','tb_barang.id_barang=tb_log.id_barang')
     				->join('tb_user as user2','user2.id_user=tb_barang.id_user')
     				
     				->order_by('tb_log.waktu_log', 'desc')
     				->limit(5)
                    ->get('')                    
                    ->result();
   }
	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */