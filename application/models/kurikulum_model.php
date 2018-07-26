<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_kurikulum()
    {
        $data = array(
            'id_kurikulum'         => $this->input->post('id_kurikulum'),
            'nama_kurikulum'      => $this->input->post('nama_kurikulum'),
            'id_prodi'                 => $this->input->post('id_prodi'),
            'id_periode'                 => $this->input->post('id_periode'),
            'jumlah_sks'      	  => $this->input->post('jumlah_sks'),
            'bobot_matkul_wajib'      		=> $this->input->post('bobot_matkul_wajib'),
            'bobot_matkul_pilihan'         => $this->input->post('bobot_matkul_pilihan')
            
        );
    
        $this->db->insert('tb_kurikulum', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

  public function data_kurikulum(){
   return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_kurikulum.id_prodi')
              ->join('tb_periode','tb_periode.id_periode=tb_kurikulum.id_periode')
              ->get('tb_kurikulum')
              ->result();
  }

  public function detail_kurikulum($id_kurikulum){
      return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_kurikulum.id_prodi')
              ->join('tb_periode','tb_periode.id_periode=tb_kurikulum.id_periode')
              ->where('tb_kurikulum.id_kurikulum', $id_kurikulum)
              ->get('tb_kurikulum')
              ->row();
  }

  public function edit_kurikulum($id_periode){
    $data = array(
          'id_kurikulum'         => $this->input->post('id_kurikulum'),
            'nama_kurikulum'      => $this->input->post('nama_kurikulum'),
            'id_prodi'                 => $this->input->post('id_prodi'),
            'id_periode'                 => $this->input->post('id_periode'),
            'jumlah_sks'          => $this->input->post('jumlah_sks'),
            'bobot_matkul_wajib'          => $this->input->post('bobot_matkul_wajib'),
            'bobot_matkul_pilihan'         => $this->input->post('bobot_matkul_pilihan')
      );

    if (!empty($data)) {
            $this->db->where('id_kurikulum', $id_periode)
        ->update('tb_kurikulum', $data);

          return true;
        } else {
            return null;
        }
  }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */