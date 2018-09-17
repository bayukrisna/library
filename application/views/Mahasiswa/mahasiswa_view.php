<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header">
              
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
                      <select name="id_agama">
                        <option value="">-- Semua --</option>
                        <option value="1">Islam</option>
                              <option value="2">Katholik</option>
                              <option value="3">Kristen</option>
                              <option value="4">Hindu</option>
                              <option value="5">Budha</option>
                              <option value="6">Konghucu</option>
                      </select>
                    </td>
                    <td>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="Cari">  
                    </td>

                  </tr>
                  
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="id_kelamin">
                        <option value="">-- Semua --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </td>           
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Angkatan</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="angkatan">
                        <option value="">-- Semua --</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
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
                  <th>Tpt. Lahir </th>
                  <th>Tgl. Lahir </th>
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
                  if ($data->id_status == 19) {
                    $status = 'Aktif';}
                    else if ($data->id_status == 1){
                      $status = 'Aktif';
                    } else {
                      $status = $data->status_mhs;
                    }
                  if ($data->id_status != 12) {
                  
                  echo '
                <tr>
                  <td>'.++$no.'</td>
                  <td><a href="'.base_url('mahasiswa/lihat_mahasiswa_dikti/'.$data->id_mahasiswa).'")>'.$data->nama_mahasiswa.'</a></td>
                  <td>'.$data->nim.'</td>
                  <td>'.$data->jenis_kelamin.'</td>
                  <td>'.$data->agama.'</td>
                  <td>'.$data->tempat_lahir.'</td>
                  <td>'.$data->tanggal_lahir.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$status.'</td>
                  <td>'.substr($data->tgl_du,0,4).'</td>
                  <td>
                    <a href="'.base_url('mahasiswa/detail_mahasiswa_dikti/'.$data->id_mahasiswa).'" class="btn btn-success  btn-sm"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Detail Mahasiswa</span></a>
                    

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