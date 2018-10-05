<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	 public function simpan_barang($upload)
    {
        $data = array(
            'id_ruang'                        => $this->input->post('id_ruang'),
            'nama_barang'                        => $this->input->post('nama_barang'),
            'id_status'         => $this->input->post('id_status'),
            'id_model'         => $this->input->post('id_model'),
            'id_perusahaan'         => $this->input->post('id_perusahaan'),
            'harga_barang'         => $this->input->post('harga_barang'),
            'tgl_pembelian'         => $this->input->post('tgl_pembelian'),
            'id_supplier'         => $this->input->post('id_supplier'),
            'requestable'         => $this->input->post('requestable'),
            'foto_barang'         => $upload['file_name'],
            'pengguna'         => $this->input->post('pengguna')
        );
    
        $this->db->insert('tb_barang', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

    public function simpan_berkas($upload)
    {
        $data = array(
            'id_barang'                        => $this->input->post('id_barang'),
            'keterangan_berkas'         => $this->input->post('keterangan_berkas'),
            'nama_berkas'         => $upload['file_name']
        );
    
        $this->db->insert('tb_berkas', $data);

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

    public function simpan_pemeliharaan()
    {
        $data = array(
            'id_barang'     => $this->input->post('id_barang'),
            'id_tipe_pemeliharaan'     => $this->input->post('id_tipe_pemeliharaan'),
            'id_supplier'     => $this->input->post('id_supplier'),
            'tgl_mulai_perbaikan'     => $this->input->post('tgl_mulai_perbaikan'),
            'tgl_selesai_perbaikan'     => $this->input->post('tgl_selesai_perbaikan'),
            'harga_perbaikan'     => $this->input->post('harga_perbaikan'),
            'permasalahan'     => $this->input->post('permasalahan'),
        );
    
        $this->db->insert('tb_pemeliharaan', $data);

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
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_barang.id_perusahaan')         
                    ->where('tb_kategori.id_kategori', $id_kategori)
                    ->get('tb_barang')
                    ->result();
   }

   public function data_barang_semua(){
     return $this->db->join('tb_ruang','tb_ruang.id_ruang=tb_barang.id_ruang')
                    ->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_status','tb_status.id_status=tb_ruang.id_status')
                    ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                    ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                    ->join('tb_kategori','tb_kategori.id_kategori=tb_merk.id_kategori')
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_barang.id_perusahaan')         
                    ->get('tb_barang')
                    ->result();
   }

   public function detail_barang($id_barang){
     return $this->db->join('tb_ruang','tb_ruang.id_ruang=tb_barang.id_ruang')
                    ->join('tb_gedung','tb_gedung.id_gedung=tb_ruang.id_gedung')
                    ->join('tb_lahan','tb_lahan.id_lahan=tb_gedung.id_lahan')
                    ->join('tb_status','tb_status.id_status=tb_ruang.id_status')
                    ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                    ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                    ->join('tb_kategori','tb_kategori.id_kategori=tb_merk.id_kategori')
                    ->join('tb_perusahaan','tb_perusahaan.id_perusahaan=tb_barang.id_perusahaan')
                    ->join('tb_supplier','tb_supplier.id_supplier=tb_barang.id_supplier')         
                    ->where('tb_barang.id_barang', $id_barang)
                    ->get('tb_barang')
                    ->row();
   }

    public function data_pemeliharaan($id_barang){
     return $this->db->join('tb_barang','tb_barang.id_barang=tb_pemeliharaan.id_barang')  
                    ->join('tb_tipe_pemeliharaan','tb_tipe_pemeliharaan.id_tipe_pemeliharaan=tb_pemeliharaan.id_tipe_pemeliharaan') 
                    ->join('tb_supplier','tb_supplier.id_supplier=tb_pemeliharaan.id_supplier')     
                    ->where('tb_pemeliharaan.id_barang', $id_barang)
                    ->get('tb_pemeliharaan')
                    ->result();
   }

   public function data_berkas($id_barang){
     return $this->db->join('tb_barang','tb_barang.id_barang=tb_berkas.id_barang')  
                    ->where('tb_berkas.id_barang', $id_barang)
                    ->get('tb_berkas')
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

   public function get_model_by_merk($id_merk){
     return $this->db->where('tb_model.id_merk', $id_merk)
                    ->get('tb_model')->result();
   }

   public function get_merk_by_kategori($id_kategori){
     return $this->db->where('tb_merk.id_kategori', $id_kategori)
                    ->get('tb_merk')->result();
   }

   public function getPerusahaan(){
     return $this->db->get('tb_perusahaan')->result();
   }

   public function getSupplier(){
     return $this->db->get('tb_supplier')->result();
   }

   public function getRuang(){
     return $this->db->get('tb_ruang')->result();
   }

   public function getStatus(){
     return $this->db->get('tb_status')->result();
   }

   public function getTipe(){
     return $this->db->get('tb_tipe_pemeliharaan')->result();
   }

   public function getKategori(){
     return $this->db->get('tb_kategori')->result();
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