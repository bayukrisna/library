<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
    function laporan_barang($tgl_pembelian1, $tgl_pembelian2, $id_kategori){
      $query = $this->db->select('*')
                ->from('tb_barang')
                ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                ->join('tb_kategori','tb_kategori.id_kategori=tb_model.id_kategori')
                ->where('tb_barang.tgl_pembelian >=', $tgl_pembelian1)
                ->where('tb_barang.tgl_pembelian <=', $tgl_pembelian2)
                ->like('tb_kategori.id_kategori', $id_kategori)
                ->order_by("tb_barang.tgl_pembelian", "asc")
                ->get();
      $row = $query->result();
      $pp = $this->db->select('kategori')
            ->where('id_kategori', $id_kategori)
            ->get('tb_kategori')
            ->row();
      $coo = $this->db->select('count(*) as total')
               ->from('tb_barang')
                ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                ->join('tb_kategori','tb_kategori.id_kategori=tb_model.id_kategori')
                ->where('tb_barang.tgl_pembelian >=', $tgl_pembelian1)
                ->where('tb_barang.tgl_pembelian <=', $tgl_pembelian2)
                ->like('tb_kategori.id_kategori', $id_kategori)
                ->order_by("tb_barang.tgl_pembelian", "asc")
                ->get();
      $total = $coo->row();

                if ($query->num_rows() > 0)
                { 
                  if(empty($pp->kategori)){
                    $cc = 'Semua';
                  } else {
                    $cc = $pp->kategori;
                  }
                  $no = 0;
                  $total_harga = 0;
                  $option = "";
                  $option .= '


    <section class="content" id="ea">

     <div class="row">
        <div class="col-xs-12">
          
            <h4><b>LAPORAN PEMBELIAN BARANG</h4></b>
            <table>
              <tr>
                <td width="120px">Kategori</td>
                <td width="300px">: '.$cc.'</td>
                <td width="120px">Tanggal Awal</td>
                <td>: '.$tgl_pembelian1.'</td>
              </tr>
              <tr>
                <td width="120px">Jumlah Barang</td>
                <td width="300px">: '.$total->total.'</td>
                <td width="120px">Tanggal Akhir</td>
                <td>: '.$tgl_pembelian2.'</td>
              </tr>
            </table>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table2 table-bordered table-striped table-hover dataTable js-exportable " style="text-transform: uppercase;">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tgl. Pembelian</th>
                  <th>Kategori</th>
                  <th>Nama Barang</th>
                  <th>Merk</th>
                  <th>Model</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>';

                  foreach ($row as $data) {

                    $total_harga += $data->harga_barang;

                    $option .= '
                    <tr>
                      <td>'.++$no.'</td>
                      <td>'.$data->tgl_pembelian.'</td>
                      <td>'.$data->kategori.'</td>
                      <td>'.$data->nama_barang.'</td>
                      <td>'.$data->merk.'</td>
                      <td>'.$data->nama_model.'</td>
                      <td style="text-align:right">'.number_format($data->harga_barang,2,',','.').'</td>
                    </tr>'
                    ;
                    
                  }
                  $option .= '
                    <tr>
                      <td colspan="6" style="text-align:right"><b>Total Harga</b></td>
                      <td style="text-align:right"><b>Rp. '.number_format($total_harga,2,',','.').'</b></td>
                    </tr>
                  </tbody>

              </table>
            </div>
            
            <!-- /.box-body -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>';
                  echo $option;

                } else{
                echo '<span class="label label-success"> Tidak Ada Data.</span>';
                
                }
    }

    function laporan_pemeliharaan($tgl_perbaikan1, $tgl_perbaikan2, $id_kategori, $id_tipe_pemeliharaan){
      $query = $this->db->select('*')
                ->from('tb_pemeliharaan')
                ->join('tb_barang','tb_barang.id_barang=tb_pemeliharaan.id_barang')
                ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                ->join('tb_kategori','tb_kategori.id_kategori=tb_model.id_kategori')
                ->join('tb_tipe_pemeliharaan','tb_tipe_pemeliharaan.id_tipe_pemeliharaan=tb_pemeliharaan.id_tipe_pemeliharaan')
                ->where('tb_pemeliharaan.tgl_mulai_perbaikan >=', $tgl_perbaikan1)
                ->where('tb_pemeliharaan.tgl_mulai_perbaikan <=', $tgl_perbaikan2)
                ->like('tb_kategori.id_kategori', $id_kategori)
                ->like('tb_tipe_pemeliharaan.id_tipe_pemeliharaan', $id_tipe_pemeliharaan)
                ->order_by("tb_pemeliharaan.tgl_mulai_perbaikan", "asc")
                ->get();
      $row = $query->result();
      $pp = $this->db->select('kategori')
            ->where('id_kategori', $id_kategori)
            ->get('tb_kategori')
            ->row();
      $qq = $this->db->select('tipe_pemeliharaan')
            ->where('id_tipe_pemeliharaan', $id_tipe_pemeliharaan)
            ->get('tb_tipe_pemeliharaan')
            ->row();
      $coo = $this->db->select('count(*) as total')
                ->from('tb_pemeliharaan')
                ->join('tb_barang','tb_barang.id_barang=tb_pemeliharaan.id_barang')
                ->join('tb_model','tb_model.id_model=tb_barang.id_model')
                ->join('tb_merk','tb_merk.id_merk=tb_model.id_merk')
                ->join('tb_kategori','tb_kategori.id_kategori=tb_model.id_kategori')
                ->join('tb_tipe_pemeliharaan','tb_tipe_pemeliharaan.id_tipe_pemeliharaan=tb_pemeliharaan.id_tipe_pemeliharaan')
                ->where('tb_pemeliharaan.tgl_mulai_perbaikan >=', $tgl_perbaikan1)
                ->where('tb_pemeliharaan.tgl_mulai_perbaikan <=', $tgl_perbaikan2)
                ->like('tb_kategori.id_kategori', $id_kategori)
                ->like('tb_tipe_pemeliharaan.id_tipe_pemeliharaan', $id_tipe_pemeliharaan)
                ->order_by("tb_pemeliharaan.tgl_mulai_perbaikan", "asc")
                ->get();
      $total = $coo->row();

                if ($query->num_rows() > 0)
                { 
                  if(empty($pp->kategori)){
                    $cc = 'Semua';
                  } else {
                    $cc = $pp->kategori;
                  }
                  if (empty($qq->tipe_pemeliharaan)) {
                    $dd = 'Semua';
                  } else {
                    $dd = $qq->tipe_pemeliharaan;
                  }
                  $no = 0;
                  $total_harga = 0;
                  $option = "";
                  $option .= '<section class="content" id="ea">

     <div class="row">
        <div class="col-xs-12">
          
            <h4><b>LAPORAN PEMBELIAN BARANG</h4></b>
            <table>
              <tr>
                <td width="120px">Kategori</td>
                <td width="300px">: '.$cc.'</td>
                <td width="120px">Tanggal Awal</td>
                <td>: '.$tgl_perbaikan1.'</td>
              </tr>
              <tr>
                <td width="120px">Jumlah Barang</td>
                <td width="300px">: '.$total->total.'</td>
                <td width="120px">Tanggal Akhir</td>
                <td>: '.$tgl_perbaikan2.'</td>
              </tr>
              <tr>
                <td width="120px">Tipe Pemeliharaan</td>
                <td width="300px">: '.$dd.'</td>
              </tr>
            </table>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table2 table-bordered table-striped table-hover dataTable js-exportable " style="text-transform: uppercase;">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tgl. Perbaikan</th>
                  <th>Tipe</th>
                  <th>Kategori</th>
                  <th>Nama Barang</th>
                  <th>Permasalahan</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>';

                  foreach ($row as $data) {

                    $total_harga += $data->harga_perbaikan;

                    $option .= '
                    <tr>
                      <td>'.++$no.'</td>
                      <td>'.$data->tgl_mulai_perbaikan.'</td>
                      <td>'.$data->tipe_pemeliharaan.'</td>
                      <td>'.$data->kategori.'</td>
                      <td>'.$data->nama_barang.'</td>
                      <td>'.$data->permasalahan.'</td>
                      <td style="text-align:right">'.number_format($data->harga_perbaikan,2,',','.').'</td>
                    </tr>'
                    ;
                    
                  }
                  $option .= '
                    <tr>
                      <td colspan="6" style="text-align:right"><b>Total Harga</b></td>
                      <td style="text-align:right"><b>Rp. '.number_format($total_harga,2,',','.').'</b></td>
                    </tr>
                  </tbody>

              </table>
            </div>
            
            <!-- /.box-body -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>';
                  echo $option;

                } else{
                echo '<span class="label label-success"> Tidak Ada Data.</span>';
                
                }
    }
    
   
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */