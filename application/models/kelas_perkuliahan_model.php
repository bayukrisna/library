<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_perkuliahan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

  public function autocomplete_mk($nama){
     $this->db->select('*');
     $this->db->from('tb_detail_kurikulum');
     $this->db->join('tb_kurikulum','tb_kurikulum.id_kurikulum=tb_detail_kurikulum.id_kurikulum');
     $this->db->join('tb_matkul','tb_matkul.kode_matkul=tb_detail_kurikulum.kode_matkul');
     $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_matkul.id_prodi');
     $this->db->like('tb_matkul.nama_matkul',$nama);
     $query = $this->db->get();
     return $query->result();
  }

  public function autocomplete_jadwal($nama){
    return $this->db->join('tb_periode','tb_periode.id_periode=tb_jadwal.id_periode')
              ->join('tb_konsentrasi_kelas','tb_konsentrasi_kelas.id_konsentrasi=tb_jadwal.id_konsentrasi')
              ->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi_kelas.id_prodi')
              ->join('tb_detail_kurikulum','tb_detail_kurikulum.id_detail_kurikulum=tb_jadwal.id_detail_kurikulum')
              ->join('tb_matkul','tb_matkul.kode_matkul=tb_detail_kurikulum.kode_matkul')
              ->join('tb_hari','tb_hari.id_hari=tb_jadwal.id_hari')
              ->join('tb_kurikulum','tb_kurikulum.id_kurikulum=tb_detail_kurikulum.id_kurikulum')
              ->join('tb_ruang','tb_ruang.id_ruang=tb_jadwal.id_ruang')
              ->like('tb_matkul.nama_matkul',$nama)
              ->get('tb_jadwal')
              ->result();
  }


	public function data_kp(){

		$this->db->select('*');
		 $this->db->from('tb_kp');
		 $this->db->join('tb_jadwal','tb_jadwal.id_jadwal=tb_kp.id_jadwal');
     $this->db->join('tb_ruang','tb_ruang.id_ruang=tb_jadwal.id_ruang');
     $this->db->join('tb_konsentrasi_kelas','tb_konsentrasi_kelas.id_konsentrasi=tb_jadwal.id_konsentrasi');
     $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi_kelas.id_prodi');
     $this->db->join('tb_detail_kurikulum','tb_detail_kurikulum.id_detail_kurikulum=tb_jadwal.id_detail_kurikulum');
     $this->db->join('tb_matkul','tb_matkul.kode_matkul=tb_detail_kurikulum.kode_matkul');
		 $query = $this->db->get();
		 return $query->result();
	}

  public function get_concentrate2($data){
      return $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi_kelas.id_prodi')
              ->where('tb_prodi.id_prodi',$data)
              ->get('tb_konsentrasi_kelas')
              ->result();
  }

  public function filter_kp($id_prodi, $id_periode){
    $this->db->select('*');
     $this->db->from('tb_kp');
     $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_kp.id_prodi');
     
    
     
     $this->db->join('tb_dosen','tb_dosen.id_dosen=tb_kp.id_dosen');
     $this->db->like('tb_prodi.id_prodi',$id_prodi);
     $this->db->like('tb_periode.id_periode',$id_periode);
     $query = $this->db->get();
     return $query->result();
  }

  public function data_kelas_dosen($id_dosen){
    $this->db->select('*');
     $this->db->from('tb_kelas_dosen');
     $this->db->join('tb_dosen','tb_dosen.id_dosen=tb_kelas_dosen.id_dosen');
     $this->db->join('tb_kp','tb_kp.id_kp=tb_kelas_dosen.id_kp');
     $this->db->join('tb_jadwal','tb_jadwal.id_jadwal=tb_kp.id_jadwal');
     $this->db->join('tb_detail_kurikulum','tb_detail_kurikulum.id_detail_kurikulum=tb_jadwal.id_detail_kurikulum');
     $this->db->join('tb_matkul','tb_matkul.kode_matkul=tb_detail_kurikulum.kode_matkul');
     $this->db->where('tb_kelas_dosen.id_kp', $id_dosen);
     $query = $this->db->get();
     return $query->result();
  }

   public function data_kelas_mhs($id_dosen){
    $this->db->select('*');
     $this->db->from('tb_kelas_mhs');
     $this->db->join('tb_mahasiswa','tb_mahasiswa.id_mahasiswa=tb_kelas_mhs.id_mahasiswa');
     $this->db->join('tb_bio','tb_bio.id_mahasiswa=tb_kelas_mhs.id_mahasiswa');
     $this->db->join('tb_konsentrasi_kelas','tb_konsentrasi_kelas.id_konsentrasi=tb_mahasiswa.id_konsentrasi');
     $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi_kelas.id_prodi');
     $this->db->where('tb_kelas_mhs.id_kp', $id_dosen);
     $query = $this->db->get();
     return $query->result();
  }

  public function detail_kp($id_kp){
      return $this->db->join('tb_jadwal','tb_jadwal.id_jadwal=tb_kp.id_jadwal')
              ->join('tb_konsentrasi_kelas','tb_konsentrasi_kelas.id_konsentrasi=tb_jadwal.id_konsentrasi')
              ->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi_kelas.id_prodi')
              ->join('tb_periode','tb_periode.id_periode=tb_jadwal.id_periode')
              ->join('tb_detail_kurikulum','tb_detail_kurikulum.id_detail_kurikulum=tb_jadwal.id_detail_kurikulum')
              ->join('tb_matkul','tb_matkul.kode_matkul=tb_detail_kurikulum.kode_matkul')
              ->join('tb_hari','tb_hari.id_hari=tb_jadwal.id_hari')
              ->where('tb_kp.id_kp', $id_kp)
              ->get('tb_kp')
              ->row();
  }


  public function autocomplete($nama){
     $this->db->select('*');
     $this->db->from('tb_dosen');
     $this->db->like('tb_dosen.nama_dosen',$nama);
     $query = $this->db->get();
     return $query->result();
  }

  public function autocomplete2($nama){
    $this->db->select('*');
     $this->db->from('tb_mahasiswa');
     $this->db->join('tb_bio','tb_bio.id_mahasiswa=tb_mahasiswa.id_mahasiswa');
     $this->db->join('tb_konsentrasi_kelas','tb_konsentrasi_kelas.id_konsentrasi=tb_mahasiswa.id_konsentrasi');
     $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi_kelas.id_prodi');
     $this->db->like('tb_mahasiswa.nama_mahasiswa', $nama);
     $query = $this->db->get();
     return $query->result();
  }

  public function autocomplete_kp($nama){
    $this->db->select('*');
     $this->db->from('tb_kp');
     $this->db->join('tb_jadwal','tb_jadwal.id_jadwal=tb_kp.id_jadwal');
     $this->db->join('tb_konsentrasi_kelas','tb_konsentrasi_kelas.id_konsentrasi=tb_jadwal.id_konsentrasi');
     $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi_kelas.id_prodi');
     $this->db->join('tb_detail_kurikulum','tb_detail_kurikulum.id_detail_kurikulum=tb_jadwal.id_detail_kurikulum');
     $this->db->join('tb_matkul','tb_matkul.kode_matkul=tb_detail_kurikulum.kode_matkul');
     $this->db->where('tb_kp.tgl_mulai <=', date('Y-m-d'));
     $this->db->where('tb_kp.tgl_akhir >=', date('Y-m-d'));
     $this->db->like('tb_matkul.nama_matkul', $nama);
     $query = $this->db->get();
     return $query->result();
  }

  public function detail_kelas_mhs($nama){
    $this->db->select('*');
     $this->db->from('tb_kelas_mhs');
     $this->db->join('tb_mahasiswa','tb_mahasiswa.id_mahasiswa=tb_kelas_mhs.id_mahasiswa');
     $this->db->join('tb_bio','tb_bio.id_mahasiswa=tb_mahasiswa.id_mahasiswa');
     $this->db->join('tb_konsentrasi_kelas','tb_konsentrasi_kelas.id_konsentrasi=tb_mahasiswa.id_konsentrasi');
     $this->db->join('tb_prodi','tb_prodi.id_prodi=tb_konsentrasi_kelas.id_prodi');
     $this->db->where('tb_kelas_mhs.id_kelas_mhs', $nama);
     $query = $this->db->get();
     return $query->row();
  }

  function cek_mahasiswa($id_mahasiswa, $id_kp){
      $query = $this->db->select('*')
                ->from('tb_kelas_mhs')
                ->where('id_mahasiswa', $id_mahasiswa)
                ->where('id_kp', $id_kp)
                ->get();
                if ($query->num_rows() > 0)
                {
                    echo '<span class="label label-success"> Mahasiswa Sudah terdaftar </span><script>document.getElementById("myBtn").disabled = true;</script>';

                } else{
                echo '<span class="label label-success"> Mahasiswa bisa ditambahkan</span><script>document.getElementById("myBtn").disabled = false;</script>';
                
                }
    }


  public function  buat_kode()   {
          $this->db->SELECT('RIGHT(tb_kp.id_kp,3) as kode', FALSE); 
          $this->db->order_by('id_kp','DESC');    
          $this->db->limit(1);    
          $query = $this->db->get('tb_kp');      //cek dulu apakah ada sudah ada kode di tabel.    
          if($query->num_rows() <> 0){      
           //jika kode ternyata sudah ada.      
           $data = $query->row();      
           $kode = intval($data->kode) + 1;    
          }
          else {      
           //jika kode belum ada      
           $kode = 1;    
          }
          $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
          $kodejadi = "KP".$kodemax;    // hasilnya ODJ-991-0001 dst.
          return $kodejadi; 
    }

  public function save_kp()
    {
        $data = array(
            'id_jadwal'       => $this->input->post('id_jadwal'),
            'nama_kelas'      	=> $this->input->post('nama_kelas'),
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

    public function save_kelas_dosen()
    {
        $data = array(
            'id_kp'        => $this->input->post('id_kp'),
            'id_dosen'        => $this->input->post('id_dosen'),
            'rencana'          => $this->input->post('rencana'),
            'realisasi'          => $this->input->post('realisasi'),
            'bobot_dosen'          => $this->input->post('bobot_dosen'),
            'jenis_evaluasi'          => $this->input->post('jenis_evaluasi')
        );
    
        $this->db->insert('tb_kelas_dosen', $data);

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
            'id_detail_kurikulum'          => $this->input->post('kode_matkul'),
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


    public function hapus_kelas_dosen($id_detail_kurikulum){
        $this->db->where('id_kp', $id_detail_kurikulum)
          ->delete('tb_kelas_dosen');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }

     public function hapus_kelas_mhs($id_detail_kurikulum){
        $this->db->where('id_kelas_mhs', $id_detail_kurikulum)
          ->delete('tb_kelas_mhs');

    if ($this->db->affected_rows() > 0) {
      return TRUE;
      } else {
        return FALSE;
      }
    }


    public function jumlah_dosen($id_kp){

    $dosen = $this->db->query("SELECT count(*) AS total FROM tb_kelas_dosen WHERE id_kp = '$id_kp'")->row();
    $jumlah_mhs = $this->db->query("SELECT count(*) AS total FROM tb_kelas_mhs WHERE id_kp = '$id_kp'")->row();
    return array(     
          'dosen' => $dosen->total,
          'jumlah_mhs' => $jumlah_mhs->total


      );
    }

    public function edit_kelas_dosen($id_detail_kurikulum){
    $data = array(
            'id_kp'        => $this->input->post('id_kp'),
            'id_dosen'        => $this->input->post('id_dosen'),
            'rencana'          => $this->input->post('rencana'),
            'realisasi'          => $this->input->post('realisasi'),
            'bobot_dosen'          => $this->input->post('bobot_dosen'),
            'jenis_evaluasi'          => $this->input->post('jenis_evaluasi')
      );

    if (!empty($data)) {
            $this->db->where('id_kelas_dosen', $id_detail_kurikulum)
        ->update('tb_kelas_dosen', $data);

          return true;
        } else {
            return null;
        }
  }

  public function edit_id_dosen($id_detail_kurikulum){
    $data = array(
            'id_kp'        => $this->input->post('id_kp'),
            'id_dosen'        => $this->input->post('id_dosen')
      );

    if (!empty($data)) {
            $this->db->where('id_kp', $id_detail_kurikulum)
        ->update('tb_kp', $data);

          return true;
        } else {
            return null;
        }
  }

  public function edit_kelas_mhs($id_detail_kurikulum){
    $data = array(
      'id_kp'        => $this->input->post('id_kp'),
           'id_mahasiswa'        => $this->input->post('id_mahasiswa')
      );

    if (!empty($data)) {
            $this->db->where('id_kelas_mhs', $id_detail_kurikulum)
        ->update('tb_kelas_mhs', $data);

          return true;
        } else {
            return null;
        }
  }

   public function simpan_kelas_mhs()
    {
        $data = array(
            'id_kp'        => $this->input->post('id_kp'),
            'id_mahasiswa'        => $this->input->post('id_mahasiswa')
        );
    
        $this->db->insert('tb_kelas_mhs', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
        }
    }

     public function simpan_kelas_dosen()
    {
        $data = array(
            'id_kp'        => $this->input->post('id_kp'),
            'id_dosen'        => $this->input->post('id_dosen'),
            'rencana'          => $this->input->post('rencana'),
            'realisasi'          => $this->input->post('realisasi'),
            'jenis_evaluasi'          => $this->input->post('jenis_evaluasi')
        );
    
        $this->db->insert('tb_kelas_dosen', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
        }
    }

      public function update_status_mhs($id_mahasiswa){
    $data = array(
            'id_mahasiswa'        => $this->input->post('id_mahasiswa'),
            'id_status'       => '1'
        );

    if (!empty($data)) {
            $this->db->where('id_mahasiswa', $id_mahasiswa)
        ->update('tb_mahasiswa', $data);

          return true;
        } else {
            return null;
        }
  }

  public function update_status_aktivitas($id_mahasiswa, $id_periode){
    $this->db->query("UPDATE tb_aktivitas_perkuliahan SET id_status = '1' WHERE id_mahasiswa = '$id_mahasiswa' AND id_periode = '$id_periode'");

          return true;
  }

}

/* End of file kp_model.php */
/* Location: ./application/models/kp_model.php */