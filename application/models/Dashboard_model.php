<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

     public function dashboard_admin(){
     	$t_perusahaan = $this->db->select('count(*) as total')
	                ->get('tb_perusahaan')
	                ->row();
	    $t_barang = $this->db->select('count(*) as total')
	                ->get('tb_barang')
	                ->row();
	    $t_merk = $this->db->select('count(*) as total')
	                ->get('tb_merk')
	                ->row();
	    $t_model = $this->db->select('count(*) as total')
	                ->get('tb_model')
	                ->row();

	    return array(
	      't_perusahaan' => $t_perusahaan->total,
	      't_barang' => $t_barang->total,
	      't_merk' => $t_merk->total,
	      't_model' => $t_model->total

	      );
	  }
	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */