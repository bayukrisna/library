           <?php 
                if($this->session->userdata('level') == 2){ ?>
        <!-- <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa">Detail Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_pendidikan">History Pendidikan</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/krs_mahasiswa">KRS Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_nilai">History Nilai</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/aktivitas_perkuliahan">Aktivitas Perkuliahan</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/prestasi">Prestasi</a> -->
        
           <?php } else { ?>

         <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>master_dosen/detail_dosen/<?php echo $dosen->id_dosen; ?>">Profil Dosen</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>master_dosen/jadwal_dosen/<?php echo $dosen->id_dosen; ?>">Jadwal Dosen</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>master_dosen/nilai_dosen/<?php echo $dosen->id_dosen; ?>">Input Nilai</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>master_dosen">Kembali</a>
         <br/><br/> 
           <?php }

           ?>
      <?php echo $this->session->flashdata('message');?>
      <?php if($this->session->userdata('level') == 1 &&  $this->session->userdata('level') == 6) {?>
        <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
        <tr>

            <td width="15%" class="left_column">Nama <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $dosen->nama_dosen; ?> </td>
      
            <td class="left_column">Tanggal Lahir <font color="#FF0000">*</font></td>
            <td>:  <?php echo $dosen->tgl_lahir; ?>
                                  
            <input type="hidden" name="stat_pd" value="A">
            </td>

        </tr>
        <tr>
            <td class="left_column" width="15%" value=>Jenis Kelamin <font color="#FF0000">*</font></td>
            <td width="35%">: <?php echo $dosen->jenis_kelamin; ?>        </td>
            <td class="left_column" width="15%">Agama <font color="#FF0000">*</font></td>
            <td>:
                <?php echo $dosen->agama; ?>                           </td>
        </tr>
        
        </table>
            </div>
            <!-- /.box-body -->
          </div>

        <?php } ?>


         <div class="box">
        <section class="content">
      <div class="row">
        
          
            <div class="box-header">
              <h3 class="box-title">Senin</h3>       
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th  style="width:5%">No</th>
                  <th style="width:50%">Nama Matkul</th>
                  <th style="width:10%">Semester</th>
                  <th style="width:30%">Waktu</th>
                  <th style="width:15%">Kelas/Ruang</th>
                </tr>
                </thead>
                <tbody> 
                    
                  <?php 
                $no = 0;
                $id_kp = '';
                foreach ($senin as $i) {
                            
                  echo '
                  
                <tr>
                  <td style="width:5%">'.++$no.'</td>
                  <td style="width:50%"><a href="'.base_url('nilai_perkuliahan/detail_nilai/'.$i->id_kp.'/'.$dosen->id_dosen).'"/>'.$i->nama_matkul.'</td>
                  <td style="width:10%">'.$i->semester_kurikulum.'</td>
                  <td style="width:30%">'.substr($i->jam_awal,0,-3).' - '.substr($i->jam_akhir,0,-3).'</td>
                  <td style="width:15%">'.$i->nama_kelas.' / '.$i->nama_ruang.'</td>
                ' ;
                }   
              
            ?>
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>

          <div class="box-header">
              <h3 class="box-title">Selasa</h3>       
            <!-- /.box-header -->
            <div class="box-body">
               <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th  style="width:5%">No</th>
                  <th style="width:50%">Nama Matkul</th>
                  <th style="width:10%">Semester</th>
                  <th style="width:30%">Waktu</th>
                  <th style="width:15%">Kelas/Ruang</th>
                </tr>
                </thead>
                <tbody> 
                    
                  <?php 
                $no = 0;
                $id_kp = '';
                foreach ($selasa as $i) {
                            
                  echo '
                  
                <tr>
                  <td style="width:5%">'.++$no.'</td>
                  <td style="width:50%"><a href="'.base_url('nilai_perkuliahan/detail_nilai/'.$i->id_kp.'/'.$dosen->id_dosen).'"/>'.$i->nama_matkul.'</td>
                  <td style="width:10%">'.$i->semester_kurikulum.'</td>
                  <td style="width:30%">'.substr($i->jam_awal,0,-3).' - '.substr($i->jam_akhir,0,-3).'</td>
                  <td style="width:15%">'.$i->nama_kelas.' / '.$i->nama_ruang.'</td>
                ' ;
                }   
              
            ?>
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>

          <div class="box-header">
              <h3 class="box-title">Rabu</h3>       
            <!-- /.box-header -->
            <div class="box-body">
               <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th  style="width:5%">No</th>
                  <th style="width:50%">Nama Matkul</th>
                  <th style="width:10%">Semester</th>
                  <th style="width:30%">Waktu</th>
                  <th style="width:15%">Kelas/Ruang</th>
                </tr>
                </thead>
                <tbody> 
                    
                  <?php 
                $no = 0;
                $id_kp = '';
                foreach ($rabu as $i) {
                            
                  echo '
                  
                <tr>
                  <td style="width:5%">'.++$no.'</td>
                  <td style="width:50%"><a href="'.base_url('nilai_perkuliahan/detail_nilai/'.$i->id_kp.'/'.$dosen->id_dosen).'"/>'.$i->nama_matkul.'</td>
                  <td style="width:10%">'.$i->semester_kurikulum.'</td>
                  <td style="width:30%">'.substr($i->jam_awal,0,-3).' - '.substr($i->jam_akhir,0,-3).'</td>
                  <td style="width:15%">'.$i->nama_kelas.' / '.$i->nama_ruang.'</td>
                ' ;
                }   
              
            ?>
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>

          <div class="box-header">
              <h3 class="box-title">Kamis</h3>       
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th  style="width:5%">No</th>
                  <th style="width:50%">Nama Matkul</th>
                  <th style="width:10%">Semester</th>
                  <th style="width:30%">Waktu</th>
                  <th style="width:15%">Kelas/Ruang</th>
                </tr>
                </thead>
                <tbody> 
                    
                  <?php 
                $no = 0;
                $id_kp = '';
                foreach ($kamis as $i) {
                            
                  echo '
                  
                <tr>
                  <td style="width:5%">'.++$no.'</td>
                  <td style="width:50%"><a href="'.base_url('nilai_perkuliahan/detail_nilai/'.$i->id_kp.'/'.$dosen->id_dosen).'"/>'.$i->nama_matkul.'</td>
                  <td style="width:10%">'.$i->semester_kurikulum.'</td>
                  <td style="width:30%">'.substr($i->jam_awal,0,-3).' - '.substr($i->jam_akhir,0,-3).'</td>
                  <td style="width:15%">'.$i->nama_kelas.' / '.$i->nama_ruang.'</td>
                ' ;
                }   
              
            ?>
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>

          <div class="box-header">
              <h3 class="box-title">Jumat</h3>       
            <!-- /.box-header -->
            <div class="box-body">
               <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th  style="width:5%">No</th>
                  <th style="width:50%">Nama Matkul</th>
                  <th style="width:10%">Semester</th>
                  <th style="width:30%">Waktu</th>
                  <th style="width:15%">Kelas/Ruang</th>
                </tr>
                </thead>
                <tbody> 
                    
                  <?php 
                $no = 0;
                $id_kp = '';
                foreach ($jumat as $i) {
                            
                  echo '
                  
                <tr>
                  <td style="width:5%">'.++$no.'</td>
                  <td style="width:50%"><a href="'.base_url('nilai_perkuliahan/detail_nilai/'.$i->id_kp.'/'.$dosen->id_dosen).'"/>'.$i->nama_matkul.'</td>
                  <td style="width:10%">'.$i->semester_kurikulum.'</td>
                  <td style="width:30%">'.substr($i->jam_awal,0,-3).' - '.substr($i->jam_akhir,0,-3).'</td>
                  <td style="width:15%">'.$i->nama_kelas.' / '.$i->nama_ruang.'</td>
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
      
      <!-- /.row -->
    </section>
    
   
    </div>
          <!-- nav-tabs-custom -->
    
        <!-- /.col -->
