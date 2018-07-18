<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message');?>
              <h3 class="box-title">Data Tamu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                 <a href="<?php echo base_url(); ?>tamu/page_tambah_tamu" class="btn btn-info btn-sm" > Tambah Tamu</a> <br> <br>
             
                <thead>
                <tr>
                  <th>No. Tamu</th>
                  <th>Nama Tamu</th>
                  <th>Asal Sekolah</th>
                  <th>Minat Prodi</th>
                  <th>Waktu</th>
                  <th>Tgl. Daftar Tamu</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                foreach ($tamu as $data) {
                  if ($data->status_bayar == 'Tamu' OR $data->status_bayar == '') {
                  
                  echo '
                  
                <tr>
                  <td>'.$data->id_pendaftaran.'
                  </td>
                  <td>'.$data->nama_pendaftar.'</td>
                  <td>'.$data->nama_sekolah.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->waktu.'</td>
                  <td>'.$data->tanggal_pendaftaran.'</td>
                  <td>'.$data->status_bayar.'</td>
                  
                  <td>
                  
                     <a href="'.base_url('tamu/f1/'.$data->id_pendaftaran).'" class="btn btn-warning btn-sm" >FU<span class="tooltiptext">Follow UP</span></a>
                     
                     <a href="'.base_url('tamu/out/'.$data->id_pendaftaran).'" class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i><span class="tooltiptext">Hapus</span></a>
                      <a href="'.base_url('tamu/page_upload/'.$data->id_pendaftaran).'" class="btn btn-info btn-sm"><i class="fa fa-file-image-o"></i><span class="tooltiptext">Unggah Gambar</span></a>
                  

                  </td>
                </tr>
                ';
                
              } else if ($data->status_bayar == 'Lunas') {
                if ($data->waktu == 'Pagi') {
                  echo '
                  
                <tr>
                  
                  <td>'.$data->id_pendaftaran.'
                  </td>
                  <td>'.$data->nama_pendaftar.'</td>
                  <td>'.$data->nama_sekolah.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->waktu.'</td>
                  <td>'.$data->tanggal_pendaftaran.'</td>
                  <td>'.$data->status_bayar.'</td>
                  
                  <td>
                     <a href="'.base_url('uploads/'.$data->bukti_transfer).'" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-file-image-o"></i><span class="tooltiptext">Lihat Bukti</span></a>
                     <a href="'.base_url('tamu/detail_tamu/'.$data->id_pendaftaran).'" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-list-alt"></i><span class="tooltiptext">Detail Tamu</span></a>
                  <a href="'.base_url('daftar_ulang/page_du_pagi/'.$data->id_pendaftaran).'" class="btn btn-info btn-sm"><i class="fa fa-sign-in"></i><span class="tooltiptext">Daftar Ulang</span></a>


                  </td>
                </tr>
                ';
                }
                else {
                   echo '
                  
                <tr>
                  
                  <td>'.$data->id_pendaftaran.'
                  </td>
                  <td>'.$data->nama_pendaftar.'</td>
                  <td>'.$data->nama_sekolah.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->waktu.'</td>
                  <td>'.$data->tanggal_pendaftaran.'</td>
                  <td>'.$data->status_bayar.'</td>
                  
                  <td>
                   <a href="'.base_url('uploads/'.$data->bukti_transfer).'" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-file-image-o"></i><span class="tooltiptext">Lihat Bukti</span></a>
                   <a href="'.base_url('tamu/detail_tamu/'.$data->id_pendaftaran).'" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-list-alt"></i><span class="tooltiptext">Detail Tamu</span></a>
                      <a href="'.base_url('daftar_ulang/page_du_sore/'.$data->id_pendaftaran).'" class="btn btn-info btn-sm"><i class="fa fa-sign-in"></i><span class="tooltiptext">Daftar Ulang</span></a>
                     
                  </td>
                </tr>
                ';
                }
              
              ?>

              <?php
            } else if ($data->status_bayar != 'Non Aktif' AND $data->status_bayar != 'Daftar Ulang') {
                   echo '
                <tr>
                
                  <td>'.$data->id_pendaftaran.'
                  </td>
                  <td>'.$data->nama_pendaftar.'</td>
                  <td>'.$data->nama_sekolah.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->waktu.'</td>
                  <td>'.$data->tanggal_pendaftaran.'</td>
                  <td>'.$data->status_bayar.'</td>
                  <td>
                   <a href="'.base_url('uploads/'.$data->bukti_transfer).'" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-file-image-o"></i><span class="tooltiptext">Lihat Bukti</span></a>
                   <a href="'.base_url('tamu/detail_tamu/'.$data->id_pendaftaran).'" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-list-alt"></i><span class="tooltiptext">Detail Tamu</span></a>
                     
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
