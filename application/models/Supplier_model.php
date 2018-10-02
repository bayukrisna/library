<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_supplier()
    {
        $data = array(
            'nama_supplier'                        => $this->input->post('nama_supplier'),
            'alamat'                        => $this->input->post('alamat'),
            'kota'                 => $this->input->post('kota'),
            'kodepos'      		=> $this->input->post('kodepos'),
            'nama_kontak'         => $this->input->post('nama_kontak'),
            'no_telp'         => $this->input->post('no_telp'),
            'fax'         => $this->input->post('fax'),
            'email'         => $this->input->post('email'),
            'url'         => $this->input->post('url'),
            'keterangan'         => $this->input->post('keterangan'),

        );
    
        $this->db->insert('tb_supplier', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  

   public function data_supplier(){
     return $this->db->get('tb_supplier')
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