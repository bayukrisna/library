<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Registrasi Lunas</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Tamu</th>

                  <th>Nama Pendaftar</th>
                  <th>Tanggal Konfirmasi</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($mahasiswa as $data) {
                  $form_konfirmasi = '';
                $form_close = '';
                $form_close .= form_close();

                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td name="id_pendaftaran">'.$data->id_pendaftaran.'
                  </td>

                  <td>'.$data->nama_pendaftar.'</td>
                  <td>'.$data->tanggal_konfirmasi.'
                  </td>

               
                  <td> <a href="'.base_url('uploads/'.$data->bukti_transfer).'" class="btn btn-info btn-sm" target="_blank">Lihat Bukti</a>
                  </td>
                  <td>
                  

       
                ' ;
                
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