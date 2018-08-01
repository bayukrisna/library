<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message');?>
              <h3 class="box-title">Data Peserta Tes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
             
                <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Asal Sekolah</th>
                  <th>Nama Prodi</th>
                  <th>Nama Konsentrasi</th>
                  <th>Waktu</th>
                  <th>Tgl. Registrasi</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
               
                foreach ($du as $data) {
                  if ($data->waktu == 'Pagi') {
                    if ($data->status_mahasiswa == 'Nilai Kosong') {
                       echo '
                  
                <tr>
                  <td>'.$data->nim.'</td>
                  <td>'.$data->nama_mahasiswa.'
                  </td>
                  <td>'.$data->nama_sekolah.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->nama_konsentrasi.'</td>
                  <td>'.$data->waktu.'</td>
                  <td>'.$data->tgl_du.'</td>
                  <td>'.$data->status_mahasiswa.'</td>
                  <td>
                    
                     <a href="'.base_url('daftar_ulang/print_ljk/'.$data->id_mahasiswa).'" target="_blank" class="btn btn-warning btn-sm" title="Print Lembar Jawaban"><i class="glyphicon glyphicon-print" ></i><span class="tooltiptext">Print LJK</span></a>
                     <a href="'.base_url('hasil_tes/page_input_nilai/'.$data->id_mahasiswa).'" class="btn btn-success  btn-sm" title="Input Nilai Tes"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Input Nilai Tes</span></a>
                  </td>
                </tr>
                ';
                  } else {

                      echo '
                  
                <tr>
                  <td>'.$data->nim.'</td>
                  <td>'.$data->nama_mahasiswa.'
                  </td>
                 
                
                  <td>'.$data->nama_sekolah.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->nama_konsentrasi.'</td>
                  <td>'.$data->waktu.'</td>
                  <td>'.$data->tgl_du.'</td>
                  <td>'.$data->status_mahasiswa.'</td>
                  <td>
                    <a href="'.base_url('daftar_ulang/detail_nilai/'.$data->id_mahasiswa).'" class="btn btn-warning btn-sm" title="Detail"><i class="glyphicon glyphicon-list-alt"></i><span class="tooltiptext">Detail</span></a>
                     <a href="'.base_url('hasil_tes/print_hasil_tes/'.$data->id_mahasiswa).'" target="_blank" class="btn btn-info btn-sm" title="Print Hasil Tes"><i class="fa fa-print"></i><span class="tooltiptext">Print Hasil Tes</span></a>
                  </td>
                </tr>
                ';
                }

                 } else {
                  echo '               
                    
                <tr>
                  <td>'.$data->nim.'</td>
                  <td>'.$data->nama_mahasiswa.'
                  </td>
                 
                  <td>'.$data->nama_sekolah.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->nama_konsentrasi.'</td>
                  <td>'.$data->waktu.'</td>
                  <td>'.$data->tgl_du.'</td>
                  <td>'.$data->status_mahasiswa.'</td>
                  <td>
                   
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