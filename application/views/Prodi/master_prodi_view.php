<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Program Studi</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <a href="<?php echo base_url() ?>master_prodi/page_tambah_prodi" class="btn btn-info btn-sm" > Tambah Prodi</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Prodi</th>
                  <th>Nama Prodi</th>
                  <th>Ketua Prodi</th>
                  <th style="width: 10%">Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Apakah anda yakin mengapus data ini ?'";
                foreach ($prodi as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td>'.$data->id_prodi.'
                  </td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->ketua_prodi.'</td>
                  <td>
                  <a href="'.base_url('index.php/master_prodi/edit_prodi/'.$data->id_prodi).'" class="btn btn-success  btn-sm"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Detail</span></a>
                  <a href="'.base_url('index.php/master_prodi/hapus_prodi/'.$data->id_prodi).'" class="btn btn-danger  btn-sm" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>
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