<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

   public function  buat_kode_mhs()   {
          $this->db->SELECT('RIGHT(tb_mahasiswa.id_mahasiswa,4) as kode', FALSE);
          $this->db->order_by('id_mahasiswa','DESC');    
          $this->db->limit(1);    
          $query = $this->db->get('tb_mahasiswa');      //cek dulu apakah ada sudah ada kode di tabel.    
          if($query->num_rows() <> 0){      
           //jika kode ternyata sudah ada.      
           $data = $query->row();      
           $kode = intval($data->kode) + 1;    
          }
          else {      
           //jika kode belum ada      
           $kode = 1;    
          }
          $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
          $kodejadi = "M".$kodemax;    // hasilnya ODJ-991-0001 dst.
          return $kodejadi; 
    }

	public function data_mahasiswa(){
		return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_mahasiswa.id_prodi')
              ->join('tb_konsentrasi','tb_konsentrasi.id_konsentrasi=tb_mahasiswa.id_konsentrasi')
              ->join('tb_alamat','tb_alamat.id_mahasiswa=tb_mahasiswa.id_mahasiswa')  
              ->join('tb_bio','tb_bio.id_mahasiswa=tb_mahasiswa.id_mahasiswa') 
              ->join('tb_kontak','tb_kontak.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_waktu','tb_waktu.id_waktu=tb_mahasiswa.id_waktu') 
              ->join('tb_mhs_add','tb_mhs_add.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_status_mhs','tb_status_mhs.id_status=tb_mahasiswa.id_status')
              ->where('tb_mahasiswa.id_status', '1')
              ->get('tb_mahasiswa')
              ->result();
	}

  public function data_mahasiswa_dikti(){
    $this->db->select('*');
     $this->db->from('tb_mahasiswa');
     $this->db->join('tb_konsentrasi','tb_konsentrasi.id_konsentrasi=tb_mahasiswa.id_konsentrasi');
     $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_mahasiswa.id_prodi');
     $this->db->join('tb_bio','tb_bio.id_mahasiswa=tb_mahasiswa.id_mahasiswa');
     $this->db->join('tb_status_mhs','tb_status_mhs.id_status=tb_mahasiswa.id_status');
     $query = $this->db->get();
     return $query->result();
  }

  public function filter_mahasiswa($id_prodi, $agama, $jenis_kelamin){
    $this->db->select('*');
     $this->db->from('tb_mahasiswa');
     $this->db->join('tb_konsentrasi','tb_konsentrasi.id_konsentrasi=tb_mahasiswa.id_konsentrasi');
     $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_mahasiswa.id_prodi');
     $this->db->join('tb_bio','tb_bio.id_mahasiswa=tb_mahasiswa.id_mahasiswa');
     $this->db->like('tb_prodi.id_prodi',$id_prodi);
     $this->db->like('tb_bio.agama',$agama);
     $this->db->like('tb_bio.jenis_kelamin',$jenis_kelamin);
     $query = $this->db->get();
     return $query->result();
  }

   function filter_nilai($id_mahasiswa,$id_periode){

     $this->db->select('*');
     $this->db->from('tb_kelas_mhs');
     $this->db->join('tb_kp','tb_kp.id_kp=tb_kelas_mhs.id_kp');
     $this->db->join('tb_matkul','tb_matkul.kode_matkul=tb_kp.kode_matkul');
     $this->db->join('tb_skala_nilai','tb_skala_nilai.id_skala_nilai=tb_kelas_mhs.id_skala_nilai');
     $this->db->join('tb_periode','tb_periode.id_periode=tb_kp.id_periode');
     $this->db->like('tb_kelas_mhs.id_mahasiswa',$id_mahasiswa);
     $this->db->like('tb_periode.id_periode',$id_periode);
     $query = $this->db->get();
     return $query->result();
      }

      public function data_nilai_mhs($id_mahasiswa){
      return $this->db->join('tb_kp','tb_kp.id_kp=tb_kelas_mhs.id_kp')
              ->join('tb_matkul','tb_matkul.kode_matkul=tb_kp.kode_matkul')
              ->join('tb_skala_nilai','tb_skala_nilai.id_skala_nilai=tb_kelas_mhs.id_skala_nilai')
              ->join('tb_periode','tb_periode.id_periode=tb_kp.id_periode')
              ->where('tb_kelas_mhs.id_mahasiswa', $id_mahasiswa)
              ->get('tb_kelas_mhs')
              ->result();
  } 

  public function detail_mahasiswa_dikti($id_mahasiswa){
      return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_mahasiswa.id_prodi')
              ->join('tb_konsentrasi','tb_konsentrasi.id_konsentrasi=tb_mahasiswa.id_konsentrasi')
              ->join('tb_ayah','tb_ayah.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_ibu','tb_ibu.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_alamat','tb_alamat.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_kependudukan','tb_kependudukan.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_wali','tb_wali.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_kontak','tb_kontak.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_bio','tb_bio.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_mhs_add','tb_mhs_add.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_jenis_tinggal','tb_jenis_tinggal.id_jt=tb_mhs_add.id_jt','left')
              ->join('tb_transportasi','tb_transportasi.id_transportasi=tb_mhs_add.id_transportasi','left')
              ->where('tb_mahasiswa.id_mahasiswa', $id_mahasiswa)
              ->get('tb_mahasiswa')
              ->row();
  }

  public function detail_krs_mahasiswa($id_mahasiswa){
      return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_mahasiswa.id_prodi')
              ->join('tb_bio','tb_bio.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->where('tb_mahasiswa.id_mahasiswa', $id_mahasiswa)
              ->get('tb_mahasiswa')
              ->row();
  } 

  

  public function data_krs_mhs($id_mahasiswa){
      return $this->db->join('tb_kp','tb_kp.id_kp=tb_kelas_mhs.id_kp')
              ->join('tb_matkul','tb_matkul.kode_matkul=tb_kp.kode_matkul')
              ->where('tb_kelas_mhs.id_mahasiswa', $id_mahasiswa)
              ->get('tb_kelas_mhs')
              ->result();
  } 

  public function getStatus(){
      return $this->db->get('tb_status_mhs')
              ->result();
  } 

   public function getGrade(){
      return $this->db->get('tb_grade')
              ->result();
  } 


  public function history_pendidikan($history){
      return $this->db->join('tb_mahasiswa','tb_mahasiswa.id_mahasiswa=tb_pendidikan.id_mahasiswa')
              ->join('tb_prodi','tb_prodi.id_prodi=tb_mahasiswa.id_prodi')
              ->join('tb_periode','tb_periode.id_periode=tb_pendidikan.id_periode')
              ->join('tb_pt','tb_pt.id_pt=tb_pendidikan.perguruan_tinggi')
              ->join('tb_mhs_add','tb_mhs_add.id_mahasiswa=tb_mahasiswa.id_mahasiswa')
              ->join('tb_jenis_pendaftaran','tb_jenis_pendaftaran.id_jenis_pendaftaran=tb_pendidikan.jenis_pendaftaran')
              ->where('tb_pendidikan.id_mahasiswa', $history)
              ->get('tb_pendidikan')
              ->result();
  }

  public function prestasi($history){
      return $this->db->where('tb_prestasi.id_mahasiswa', $history)
              ->get('tb_prestasi')
              ->result();
  }

  public function detail_prestasi($history){
      return $this->db->where('tb_prestasi.id_prestasi', $history)
              ->get('tb_prestasi')
              ->row();
  }

  public function simpan_prestasi($id_mahasiswa)
    {
        $data = array(
            'id_mahasiswa'        => $id_mahasiswa,
            'jenis_prestasi'        => $this->input->post('jenis_prestasi'),
            'tingkat_prestasi'        => $this->input->post('tingkat_prestasi'),
            'nama_prestasi'        => $this->input->post('nama_prestasi'),
            'penyelenggara'        => $this->input->post('penyelenggara'),
            'tahun'        => $this->input->post('tahun'),
            'peringkat'        => $this->input->post('peringkat')

        );
    
        $this->db->insert('tb_prestasi', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
        }
    }

    public function simpan_pendidikan($id_mahasiswa)
    {
        $data = array(
            'id_mahasiswa'        => $id_mahasiswa,
            'jenis_pendaftaran'        => $this->input->post('jenis_pendaftaran'),
            'jalur_pendaftaran'        => $this->input->post('jalur_pendaftaran'),
            'pembiayaan_awal'        => $this->input->post('pembiayaan_awal'),
            'perguruan_tinggi'        => $this->input->post('perguruan_tinggi'),
            'jml_sks_diakui'        => $this->input->post('jml_sks_diakui'),
            'asal_pt'        => $this->input->post('asal_pt'),
            'asal_prodi'        => $this->input->post('asal_prodi'),
            'id_periode'        => $this->input->post('id_periode')

        );
    
        $this->db->insert('tb_pendidikan', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
        }
    }

    public function edit_prestasi($id_tes){
    $data = array(
             'id_mahasiswa'        => $this->input->post('id_mahasiswa'),
            'jenis_prestasi'        => $this->input->post('jenis_prestasi'),
            'tingkat_prestasi'        => $this->input->post('tingkat_prestasi'),
            'nama_prestasi'        => $this->input->post('nama_prestasi'),
            'penyelenggara'        => $this->input->post('penyelenggara'),
            'tahun'        => $this->input->post('tahun'),
            'peringkat'        => $this->input->post('peringkat')
      );

    if (!empty($data)) {
            $this->db->where('id_prestasi', $id_tes)
        ->update('tb_prestasi', $data);

          return true;
        } else {
            return null;
        }
  }


  public function get_mahasiswa_by_du($id_mahasiswa){
       return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_mahasiswa.id_prodi')
              ->join('tb_konsentrasi','tb_konsentrasi.id_konsentrasi=tb_mahasiswa.id_konsentrasi')
              ->where('id_mahasiswa', $id_mahasiswa)
              ->get('tb_mahasiswa')
              ->row();
  }

  public function save_mahasiswa()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'nama_mahasiswa'      => $this->input->post('nama_mahasiswa', TRUE),
            'nim'      => $this->input->post('nim', TRUE),
            'id_status'      => $this->input->post('id_status', TRUE),
            'id_prodi'      => $this->input->post('id_prodi', TRUE),
            'id_konsentrasi'      => $this->input->post('concentrate', TRUE),
            'id_waktu'      => $this->input->post('id_waktu', TRUE),
            'id_grade'      => $this->input->post('id_grade', TRUE),
            'id_grade2'      => $this->input->post('id_grade', TRUE)

        );
    
        $this->db->insert('tb_mahasiswa', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

  public function save_mahasiswa_pagi()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'id_du'      => $this->input->post('id_du', TRUE),
            'nama_mahasiswa'      => $this->input->post('nama_mahasiswa', TRUE),
            'nim'      => $this->input->post('nim', TRUE),
            'status_mahasiswa'      => 'Nilai Kosong',
            'id_prodi'      => $this->input->post('id_prodi', TRUE),
            'id_konsentrasi'      => $this->input->post('concentrate', TRUE),
            'id_hasil_tes'      => $this->input->post('id_hasil_tes', TRUE),
            'id_sekolah'      => $this->input->post('id_sekolah', TRUE),
            'id_waktu'      => '1',
        );
    
        $this->db->insert('tb_mahasiswa', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

     public function save_mahasiswa_sore()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'id_du'      => $this->input->post('id_du', TRUE),
            'nama_mahasiswa'      => $this->input->post('nama_mahasiswa', TRUE),
            'nim'      => $this->input->post('nim', TRUE),
            'status_mahasiswa'      => 'Aktif',
            'id_prodi'      => $this->input->post('id_prodi', TRUE),
            'id_konsentrasi'      => $this->input->post('concentrate', TRUE),
            'id_hasil_tes'      => $this->input->post('id_hasil_tes', TRUE),
            'id_sekolah'      => $this->input->post('id_sekolah', TRUE),
            'id_waktu'      => '2',
        );
    
        $this->db->insert('tb_mahasiswa', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

    public function save_tes_sore()
    {        
        $data = array(
            'id_hasil_tes'      => $this->input->post('id_hasil_tes', TRUE),
            'grade'      => 'Non-Beasiswa',
        );
        $this->db->insert('tb_hasil_tes', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }

    public function save_bio()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'jenis_kelamin'      => $this->input->post('jenis_kelamin', TRUE),
            'tanggal_lahir'      => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'     => $this->input->post('tempat_lahir', TRUE),
            'agama'     => $this->input->post('agama', TRUE),
            'angkatan'     => date('Y')
        );
    
        $this->db->insert('tb_bio', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function save_tgl_du()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'tgl_du'     => date('Y-m-d'),
            'id_jt'      => $this->input->post('jenis_tinggal', TRUE),
            'id_transportasi'      => $this->input->post('alat_transportasi', TRUE)
        );
    
        $this->db->insert('tb_mhs_add', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function save_tgl_du_mhs()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'tgl_du'     => $this->input->post('tgl_du', TRUE),
            'id_jt'      => $this->input->post('jenis_tinggal', TRUE),
            'id_transportasi'      => $this->input->post('alat_transportasi', TRUE)
        );
    
        $this->db->insert('tb_mhs_add', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function save_kontak()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'email'     => $this->input->post('email', TRUE),
            'no_telepon'     => $this->input->post('no_telepon', TRUE),
            'no_hp'     => $this->input->post('no_hp', TRUE)
        );
    
        $this->db->insert('tb_kontak', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

     public function save_ayah()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'nama_ayah'      => $this->input->post('nama_ayah', TRUE),
            'nik_ayah'      => $this->input->post('nik_ayah', TRUE),
            'tanggal_lahir_ayah'      => $this->input->post('tanggal_lahir_ayah', TRUE),
            'pendidikan_ayah'      => $this->input->post('pendidikan_ayah', TRUE),
            'pekerjaan_ayah'     => $this->input->post('pekerjaan_ayah', TRUE),
            'penghasilan_ayah'     => $this->input->post('penghasilan_ayah', TRUE)
            
        );
        $this->db->insert('tb_ayah', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }

     public function save_ibu()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'nama_ibu'     => $this->input->post('nama_ibu', TRUE),
            'nik_ibu'     => $this->input->post('nik_ibu', TRUE),
            'tanggal_lahir_ibu'     => $this->input->post('tanggal_lahir_ibu', TRUE),
            'pendidikan_ibu'      => $this->input->post('pendidikan_ibu', TRUE),
            'pekerjaan_ibu'      => $this->input->post('pekerjaan_ibu', TRUE),
            'penghasilan_ibu'      => $this->input->post('penghasilan_ibu', TRUE)
            
        );
        $this->db->insert('tb_ibu', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }

    public function save_wali()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'nama_wali'      => $this->input->post('nama_wali', TRUE),
            'tanggal_lahir_wali'      => $this->input->post('tanggal_lahir_wali', TRUE),
            'pendidikan_wali'      => $this->input->post('pendidikan_wali', TRUE),
            'pekerjaan_wali'     => $this->input->post('pekerjaan_wali', TRUE),
            'penghasilan_wali'     => $this->input->post('penghasilan_wali', TRUE)
        );
        $this->db->insert('tb_wali', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }

    public function save_alamat()
    {        
        $data = array(
            'id_mahasiswa'      => $this->input->post('id_mahasiswa', TRUE),
            'jalan'      => $this->input->post('jalan', TRUE),
            'dusun'      => $this->input->post('dusun', TRUE),
            'kelurahan'      => $this->input->post('kelurahan', TRUE),
            'kecamatan'     => $this->input->post('kecamatan', TRUE),
            'rt'     => $this->input->post('rt', TRUE),
            'rw'     => $this->input->post('rw', TRUE),
            'kode_pos'     => $this->input->post('kode_pos', TRUE),
        );
        $this->db->insert('tb_alamat', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }

    public function save_kependudukan()
    {        
        $data = array(
            'id_mahasiswa'      =>$this->input->post('id_mahasiswa', TRUE),
            'nik'      => $this->input->post('nik', TRUE),
            'nisn'      => $this->input->post('nisn', TRUE),
            'npwp'      => $this->input->post('npwp', TRUE),
            'kewarganegaraan'     => $this->input->post('kewarganegaraan', TRUE),
            'kps'     => $this->input->post('kps', TRUE),
            'no_kps'     => $this->input->post('no_kps', TRUE)
        );
        $this->db->insert('tb_kependudukan', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }

    public function save_edit_foto_mahasiswa($foto_mahasiswa, $id_mahasiswa)
   {
    $data = array('foto_mahasiswa' => $foto_mahasiswa['file_name'] )
                  ;

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_mahasiswa)
        ->update('tb_mahasiswa', $data);

          return true;
        } else {
            return null;
        }
  }

    public function save_edit_mahasiswa($id_tes){
    $data = array(
            'nama_mahasiswa'      => $this->input->post('nama_mahasiswa', TRUE),
            'nim'      => $this->input->post('nim', TRUE),
      );

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_tes)
        ->update('tb_mahasiswa', $data);

          return true;
        } else {
            return null;
        }
  }

  public function save_edit_bio($id_tes){
    $data = array(
            'jenis_kelamin'      => $this->input->post('jenis_kelamin', TRUE),
            'tanggal_lahir'      => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'     => $this->input->post('tempat_lahir', TRUE),
            'agama'     => $this->input->post('agama', TRUE)

      );

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_tes)
        ->update('tb_bio', $data);

          return true;
        } else {
            return null;
        }
  }

  public function save_edit_kontak($id_tes){
    $data = array(
            'email'     => $this->input->post('email', TRUE),
            'no_telepon'     => $this->input->post('no_telepon', TRUE),
            'no_hp'     => $this->input->post('no_hp', TRUE)

      );

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_tes)
        ->update('tb_kontak', $data);

          return true;
        } else {
            return null;
        }
  }

  public function save_edit_ayah($id_tes){
    $data = array(
            'nama_ayah'      => $this->input->post('nama_ayah', TRUE),
            'nik_ayah'      => $this->input->post('nik_ayah', TRUE),
            'tanggal_lahir_ayah'      => $this->input->post('tanggal_lahir_ayah', TRUE),
            'pendidikan_ayah'      => $this->input->post('pendidikan_ayah', TRUE),
            'pekerjaan_ayah'     => $this->input->post('pekerjaan_ayah', TRUE),
            'penghasilan_ayah'     => $this->input->post('penghasilan_ayah', TRUE)
      );

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_tes)
        ->update('tb_ayah', $data);

          return true;
        } else {
            return null;
        }
  }

  public function save_edit_ibu($id_tes){
    $data = array(
            'nama_ibu'     => $this->input->post('nama_ibu', TRUE),
            'nik_ibu'     => $this->input->post('nik_ibu', TRUE),
            'tanggal_lahir_ibu'     => $this->input->post('tanggal_lahir_ibu', TRUE),
            'pendidikan_ibu'      => $this->input->post('pendidikan_ibu', TRUE),
            'pekerjaan_ibu'      => $this->input->post('pekerjaan_ibu', TRUE),
            'penghasilan_ibu'      => $this->input->post('penghasilan_ibu', TRUE)
      );

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_tes)
        ->update('tb_ibu', $data);
          return true;
        } else {
            return null;
        }
  }

  public function save_edit_alamat($id_tes){
    $data = array(
            'jalan'      => $this->input->post('jalan', TRUE),
            'dusun'      => $this->input->post('dusun', TRUE),
            'kelurahan'      => $this->input->post('kelurahan', TRUE),
            'kecamatan'     => $this->input->post('kecamatan', TRUE),
            'rt'     => $this->input->post('rt', TRUE),
            'rw'     => $this->input->post('rw', TRUE),
            'kode_pos'     => $this->input->post('kode_pos', TRUE),
            'alamat_mhs'     => $this->input->post('alamat_mhs', TRUE),
            'jurusan'     => $this->input->post('jurusan', TRUE)
      );

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_tes)
        ->update('tb_alamat', $data);

          return true;
        } else {
            return null;
        }
  }

  public function save_edit_kependudukan($id_tes){
    $data = array(
            'nik'      => $this->input->post('nik', TRUE),
            'nisn'      => $this->input->post('nisn', TRUE),
            'npwp'      => $this->input->post('npwp', TRUE),
            'kewarganegaraan'     => $this->input->post('kewarganegaraan', TRUE),
            'kps'     => $this->input->post('kps', TRUE),
            'no_kps'     => $this->input->post('no_kps', TRUE)
      );

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_tes)
        ->update('tb_kependudukan', $data);

          return true;
        } else {
            return null;
        }
  }

 public function save_edit_wali($id_tes){
    $data = array(
            'nama_wali'      => $this->input->post('nama_wali', TRUE),
            'tanggal_lahir_wali'      => $this->input->post('tanggal_lahir_wali', TRUE),
            'pendidikan_wali'      => $this->input->post('pendidikan_wali', TRUE),
            'pekerjaan_wali'     => $this->input->post('pekerjaan_wali', TRUE),
            'penghasilan_wali'     => $this->input->post('penghasilan_wali', TRUE)
      );

   if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_tes)
        ->update('tb_wali', $data);

          return true;
        } else {
            return null;
        }
  }

  public function update_ipk($id_mahasiswa, $ipk, $id_grade2){
    $data = array(
            'ipk'      => $ipk,
            'id_grade2'      => $id_grade2
      );

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_mahasiswa)
        ->update('tb_mahasiswa', $data);

          return true;
        } else {
            return null;
        }
  }



}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */