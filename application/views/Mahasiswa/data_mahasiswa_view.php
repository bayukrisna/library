<section class="content">
      <div class="row">

        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header">
              
              <h3 class="box-title">Data Penerimaan Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Nama Prodi</th>
                  <th>Nama Konsentrasi</th>
                  <th>Waktu</th>
                  <th>Tgl. Registrasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
               
                foreach ($mahasiswa as $data) {
                  if ($data->id_status == 19 OR $data->id_status == 1) {
                    
                  
                  echo '
                <tr>
                  <td>'.$data->nim.'</td>
                  <td>'.$data->nama_mahasiswa.'
                  </td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->nama_konsentrasi.'</td>
                  <td>'.$data->waktu.'</td>
                  <td>'.$data->tgl_du.'</td>
                  <td>
                       <a href="'.base_url('mahasiswa/detail_mahasiswa/'.$data->id_mahasiswa).'" class="btn btn-info btn-sm">Detail</a>
                  </td>
                </tr>
                ';
                }
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