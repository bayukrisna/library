      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Setting Periode Perkuliahan</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <a href="<?php echo base_url(); ?>setting_periode/tambah_periode" class="btn btn-info btn-sm" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Semester</th>

                  <th>Program Studi</th>
                  <th>Target Mahasiswa Baru</th>
                  <th>Tanggal Awal Perkuliahan</th>
                  <th>Tanggal Akhir Perkuliahan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <!-- <?php 
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
              ?> -->
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