<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message');?>
              <h3 class="box-title">Data Biaya</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <a href="<?php echo base_url() ?>master_biaya_sekolah/page_tambah_biaya_sekolah" class="btn btn-info btn-sm" > Tambah Biaya</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Biaya</th>
                  <th>Jenis Biaya</th>
                  <th>Nama Biaya</th>
                  <th>Jumlah Biaya</th>
                  <th>Tahun Akademik</th>
                  <th>Waktu Kuliah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Apakah anda yakin mengapus data ini ?'";
                foreach ($data_biaya as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td>'.$data->id_biaya.'
                  </td>
                  <td>'.$data->jenis_biaya.'</td>
                  <td>'.$data->nama_biaya.'</td>
                  <td>'.$data->jumlah_biaya.'</td>
                  <td>'.$data->periode.'</td>
                  <td>'.$data->waktu.'</td>
                  <td>
                    <a href="'.base_url('master_biaya_sekolah/edit_biaya_sekolah/'.$data->id_biaya).'" class="btn btn-success  btn-sm" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                    <a href="'.base_url('master_biaya_sekolah/hapus_biaya_sekolah/'.$data->id_biaya).'" class="btn btn-danger  btn-sm" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
                  </td>
                </tr>
                ';
                
              }
              ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>