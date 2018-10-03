<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_barang()
    {
        $data = array(
            'id_ruang'                        => $this->input->post('id_ruang'),
            'nama_barang'                        => $this->input->post('nama_barang'),
            'id_tipe'                 => $this->input->post('id_tipe'),
            'merk'      		=> $this->input->post('merk'),
            'jumlah'         => $this->input->post('jumlah'),
            'id_status'         => $this->input->post('id_status'),
        );
    
        $this->db->insert('tb_barang', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

     public function simpan_status()
    {
        $data = array(
            'status'                        => $this->input->post('status')
        );
    
        $this->db->insert('tb_status', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
  

   public function data_barang($id_kategori){
     return $this->db->join('tb_ruang','tb_ruang.id_ruang=tb_barang.id_ruang')
                    ->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_status','tb_status.id_status=tb_ruang.id_status')
                    ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                    ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                    ->join('tb_kategori','tb_kategori.id_kategori=tb_merk.id_kategori')
                    ->where('tb_kategori.id_kategori', $id_kategori)
                    ->get('tb_barang')
                    ->result();
   }

   public function detail_kategori($id_kategori){
     return $this->db->where('tb_kategori.id_kategori', $id_kategori)
                    ->get('tb_kategori')
                    ->row();
   }

    public function data_kategori_barang(){
     return $this->db->get('tb_kategori')
                    ->result();
   }

    public function data_status(){
     return $this->db->get('tb_status')
                    ->result();
   }

   public function get_merk_by_kategori($id_kategori){
     return $this->db->where('tb_merk.id_kategori', $id_kategori)
                    ->get('tb_merk')->result();
   }

   public function getPerusahaan(){
     return $this->db->get('tb_perusahaan')->result();
   }

   public function getSupplier(){
     return $this->db->get('tb_perusahaan')->result();
   }

   public function getModel(){
     return $this->db->get('tb_perusahaan')->result();
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