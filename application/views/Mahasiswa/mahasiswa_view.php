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
                  <tr>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filter</th>
                  </tr>
                  <tr>                                                                    
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Studi</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="kota">
                        <option value="">-- PILIH --</option>
                        <option value="010100">KAB. KEPULAUAN SERIBU</option>
                        <option value="016000">KOTA JAKARTA PUSAT</option>
                        <option value="016100">KOTA JAKARTA UTARA</option>
                        <option value="016200">KOTA JAKARTA BARAT</option>
                      </select>
                    </td>                                            
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Studi</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="kota">
                        <option value="">-- PILIH --</option>
                        <option value="010100">KAB. KEPULAUAN SERIBU</option>
                        <option value="016000">KOTA JAKARTA PUSAT</option>
                        <option value="016100">KOTA JAKARTA UTARA</option>
                        <option value="016200">KOTA JAKARTA BARAT</option>
                      </select>
                    </td>                                              
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Studi</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="kota">
                        <option value="">-- PILIH --</option>
                        <option value="010100">KAB. KEPULAUAN SERIBU</option>
                        <option value="016000">KOTA JAKARTA PUSAT</option>
                        <option value="016100">KOTA JAKARTA UTARA</option>
                        <option value="016200">KOTA JAKARTA BARAT</option>
                      </select>
                    </td>           
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Studi</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="kota">
                        <option value="">-- PILIH --</option>
                        <option value="010100">KAB. KEPULAUAN SERIBU</option>
                        <option value="016000">KOTA JAKARTA PUSAT</option>
                        <option value="016100">KOTA JAKARTA UTARA</option>
                        <option value="016200">KOTA JAKARTA BARAT</option>
                      </select>
                    </td>                                                         
                  </tr>
                </tbody>
              </table>
              <br>
              <table id="example1" class="table table-bordered table-striped">
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
                  
                  echo '
                <tr>
                  <td>'.++$no.'</td>
                  <td>'.$data->nama_mahasiswa.'</td>
                  <td>'.$data->nim.'</td>
                  <td>'.$data->jenis_kelamin.'</td>
                  <td>'.$data->agama.'</td>
                  <td>'.$data->tanggal_lahir.'</td>
                  <td>'.$data->nama_prodi.'</td>
                  <td>'.$data->status_mahasiswa.'</td>
                  <td>'.$data->id_angkatan.'</td>
                  <td>

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