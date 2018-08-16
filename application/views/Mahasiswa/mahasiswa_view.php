<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message');?>
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="">
                <tbody>
                  <form method="get" action="<?php echo base_url("mahasiswa/filter_mahasiswa/")?>">
                  <tr>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filter</th>
                  </tr>
                  <tr>                                                                    
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Studi</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      <select name="id_prodi">
                        <option value="">-- Semua --</option>
                        <?php 

                                        foreach($drop_down_prodi as $row)
                                        { 
                                          echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                                        }
                                    ?>
                      </select>

                    </td>                                            
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="agama">
                        <option value="">-- Semua --</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Lainnya">Lainya</option>
                      </select>
                    </td>
                    <td>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="Cari">  
                    </td>

                  </tr>
                  
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="jenis_kelamin">
                        <option value="">-- Semua --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </td>           
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Angkatan</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="angkatan">
                        <option value="">-- Semua --</option>
                        
                      </select>   
                    </td>                                                         
                  </tr>
                </tbody>
              </table>
                      
               </form>
              <br>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                 <a href="<?php echo base_url(); ?>mahasiswa/page_tambah_mahasiswa" class="btn btn-info btn-sm" > Tambah Mahasiswa</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>L/P</th>
                  <th>Agama</th>
                  <th>Tanggal Lahir </th>
                  <th>Program Studi</th>
                  <th>Status</th>
                  <th>Angkatan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
               $no = 0;
                foreach ($mahasiswa as $data) {
                  if ($data->id_status != 12) {
                  
                  echo '
                <tr>
                  <td>'.++$no.'</td>
                  <td><a href="'.base_url('mahasiswa/lihat_mahasiswa_dikti/'.$data->id_mahasiswa).'")>'.$data->nama_mahasiswa.'</a></td>
                  <td>'.$data->nim.'</td>
                  <td>'.$data->jenis_kelamin.'</td>
                  <td>'.$data->agama.'</td>
                  <td>'.$data->tanggal_lahir.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->status_mhs.'</td>
                  <td>'.$data->angkatan.'</td>
                  <td>
                    <a href="'.base_url('mahasiswa/detail_mahasiswa_dikti/'.$data->id_mahasiswa).'" class="btn btn-success  btn-sm"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Detail Mahasiswa</span></a>
                    <a href="'.base_url('mahasiswa/aktivitas_perkuliahan/'.$data->id_mahasiswa).'" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Aktivitas Kuliah</span></a>

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