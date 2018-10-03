<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_merk()
    {
        $data = array(
            'merk'                        => $this->input->post('merk'),
            'id_kategori'                        => $this->input->post('id_kategori'),
        );
    
        $this->db->insert('tb_merk', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  

   public function data_merk(){
     return $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_merk.id_kategori')
                    ->get('tb_merk')
                    ->result();
   }

   public function getKategori(){
     return $this->db->get('tb_kategori')
                    ->result();
   }

  public function edit_periode($id_periode){
    $data = array(
            'semester'                        => $this->input->post('semester'),
            'id_prodi'                        => $this->input->post('id_prodi'),
            'target_mhs_baru'                 => $this->input->post('target_mhs_baru'),
            'pendaftar_ikut_seleksi'          => $this->input->post('pendaftar_ikut_seleksi'),
            'pendaftar_lulus_seleksi'         => $this->input->post('pendaftar_lulus_seleksi'),
            'daftar_ulang'         => $this->input->post('daftar_ulang'),
            'mengundurkan_diri'         => $this->input->post('mengundurkan_diri'),
            'tgl_awal_kul'         => $this->input->post('tgl_awal_kul'),
            'tgl_akhir_kul'         => $this->input->post('tgl_akhir_kul'),
            'jumlah_minggu_pertemuan'         => $this->input->post('jumlah_minggu_pertemuan')
      );

    if (!empty($data)) {
            $this->db->where('id_periode', $id_periode)
        ->update('tb_periode', $data);

          return true;
        } else {
            return null;
        }
  }
    
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */