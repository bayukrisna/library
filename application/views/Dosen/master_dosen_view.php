<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Dosen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Dosen</th>
                  <th>Kode Dosen</th>
                  <th>No. HP</th>
                  <th>Keterangan</th>
                   <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($dosen as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td>'.$data->nama_dosen.'
                  </td>
                  <td>'.$data->kode_dosen.'</td>
                  <td>'.$data->no_hp.'</td>
                  <td>'.$data->keterangan.'</td>
                  <td>   <a href="'.base_url('/detail_tamu/'.$data->id_dosen).'" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-list-alt"></i><span class="tooltiptext">Detail Tamu</span></a>
                  <a href="'.base_url('daftar_ulang/page_du_pagi/'.$data->id_dosen).'" class="btn btn-info btn-sm"><i class="fa fa-sign-in"></i><span class="tooltiptext">Daftar Ulang</span></a>
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