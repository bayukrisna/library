<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_perkuliahan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function data_kp(){
		$this->db->select('*');
		 $this->db->from('tb_kp');
		 $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_kp.id_prodi');
     $this->db->join('tb_periode','tb_periode.id_periode=tb_kp.id_periode');
     $this->db->join('tb_matkul','tb_matkul.kode_matkul=tb_kp.kode_matkul');
		 $query = $this->db->get();
		 return $query->result();
	}

  public function detail_kp($id_kp){
      return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_kp.id_prodi')
              ->join('tb_periode','tb_periode.id_periode=tb_kp.id_periode')
              ->join('tb_matkul','tb_matkul.kode_matkul=tb_kp.kode_matkul')
              ->where('id_kp', $id_kp)
              ->get('tb_kp')
              ->row();
  }

  public function save_kp()
    {
        $data = array(
            'id_kp'        => $this->input->post('id_kp'),
            'nama_kelas'      	=> $this->input->post('nama_kelas'),
            'id_prodi'      		=> $this->input->post('id_prodi'),
            'id_periode'          => $this->input->post('id_periode'),
            'kode_matkul'          => $this->input->post('kode_matkul'),
            'bahasan'          => $this->input->post('bahasan'),
            'tgl_mulai'          => $this->input->post('tgl_mulai'),
            'tgl_akhir'          => $this->input->post('tgl_akhir')
            
        );
    
        $this->db->insert('tb_kp', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
        }

    }

    public function hapus_kp($id_kp){
        $this->db->where('id_kp', $id_kp)
          ->delete('tb_kp');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

  public function save_edit_kp($id_kp){
    $data = array(
            'id_kp'        => $this->input->post('id_kp'),
            'nama_kelas'       => $this->input->post('nama_kelas'),
            'id_prodi'          => $this->input->post('id_prodi'),
            'id_periode'          => $this->input->post('id_periode'),
            'kode_matkul'          => $this->input->post('kode_matkul'),
            'bahasan'          => $this->input->post('bahasan'),
            'tgl_mulai'          => $this->input->post('tgl_mulai'),
            'tgl_akhir'          => $this->input->post('tgl_akhir')
        );

    if (!empty($data)) {
            $this->db->where('id_kp', $id_kp)
        ->update('tb_kp', $data);

          return true;
        } else {
            return null;
        }
  }

}

/* End of file kp_model.php */
/* Location: ./application/models/kp_model.php */