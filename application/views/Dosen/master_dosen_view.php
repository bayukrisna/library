<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Dosen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>master_dosen/page_tambah_dosen"><i class="fa fa-plus"></i> Tambah Dosen</a> <br> <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Dosen</th>
                  <th>NIDN/NUP/NIDK</th>
                  <th>NIP</th>
                  <th>L/P</th>
                  <th>No. Telp</th>
                  <th>Status</th>
                  <th>Jenis</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                $alert = "'Apakah anda yakin menghapus data ini ?'";
                foreach ($dosen as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td>'.$data->nama_dosen.'
                  </td>
                  <td>'.$data->kode_dosen.'</td>
                  <td>'.$data->nip.'</td>
                  <td>'.$data->jenis_kelamin.'</td>
                  <td>'.$data->no_hp.'</td>
                  <td>'.$data->status_mhs.'</td>
                  <td>'.$data->status_dosen.'</td>
                  <td>   
                        <a href="'.base_url('master_dosen/hapus_dosen/'.$data->id_dosen).'" class="btn btn-danger  btn-sm" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus Kurikulum</span></a>
                         <a href="'.base_url('master_dosen/page_edit_dosen/'.$data->id_dosen).'" class="btn btn-warning  btn-sm"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit Kurikulum</span></a>
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