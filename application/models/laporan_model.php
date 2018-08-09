<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
    function laporan_tamu($tanggal_pendaftaran, $tanggal_pendaftaran2){
      $query = $this->db->select('*')
                ->from('tb_pendaftaran')
                ->where('tanggal_pendaftaran >=', $tanggal_pendaftaran)
                ->where('tanggal_pendaftaran <=', $tanggal_pendaftaran2)
                ->get();
      $row = $query->result();
                if ($query->num_rows() > 0)
                { 
                  
                  $no = 0;
                  $option = "";
                  $option .= '<section class="content" id="ea">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Semester</th>
                </tr>
                </thead>
                <tbody>';
                  foreach ($row as $data) {
                    $option .= "<tr><td>".++$no."</td><td>".$data->nama_pendaftar."</td></tr>";
                    
                  }
                  $option .= '</tbody>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
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