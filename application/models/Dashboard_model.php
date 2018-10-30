<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

     public function dashboard_admin(){
     	$t_document = $this->db->select('count(*) as total')
	                ->get('books')
	                ->row();
	    $t_late = $this->db->select('count(*) as total')
	    			->where('due_date <', date('Y-m-d'))
	    			->where('date_return')
	                ->get('detail_of_borrow')
	                ->row();
	    return array(
	      't_document' => $t_document->total,
	      't_late' => $t_late->total
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