                <?php 
                if($this->session->userdata('id_mahasiswa') != null){ ?>
       <!--  <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa">Detail Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_pendidikan">History Pendidikan</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/krs_mahasiswa">KRS Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_nilai">History Nilai</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/aktivitas_perkuliahan">Aktivitas Perkuliahan</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/prestasi">Prestasi</a> -->
        
           <?php } else { ?>

         <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/lihat_mahasiswa_dikti/<?php echo $mahasiswa->id_mahasiswa; ?>">Detail Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_pendidikan/<?php echo $mahasiswa->id_mahasiswa; ?>">History Pendidikan</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/krs_mahasiswa/<?php echo $mahasiswa->id_mahasiswa ?>/<?php echo $mahasiswa->id_prodi; ?>/<?php echo $mahasiswa->semester_aktif; ?>">KRS Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/jadwal_mhs/<?php echo $mahasiswa->id_mahasiswa ?>/<?php echo $mahasiswa->id_prodi; ?>/<?php echo $mahasiswa->semester_aktif; ?>">Jadwal Kuliah</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/history_nilai/<?php echo $mahasiswa->id_mahasiswa; ?>">History Nilai</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/aktivitas_perkuliahan/<?php echo $mahasiswa->id_mahasiswa; ?>">Aktivitas Perkuliahan</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/prestasi/<?php echo $mahasiswa->id_mahasiswa; ?>">Prestasi</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>mahasiswa/data_mahasiswa">Kembali</a>
         <br/><br/>   
           <?php }

           ?>
        
        <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
        <tr>


            <td width="15%" class="left_column">NIM <font color="#FF0000">*</font></td>
            <td>: <?php echo $mahasiswa->nim; ?>   </td>
            <td class="left_column" width="15%">Nama<font color="#FF0000">*</font></td>
            <td>:
               <?php echo $mahasiswa->nama_mahasiswa; ?>                        </td>
    
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%" value=>Program Studi <font color="#FF0000">*</font></td>
            <td width="35%">: <?php echo $mahasiswa->nama_prodi; ?>        </td>
            <td class="left_column" width="15%">Angkatan <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $mahasiswa->angkatan; ?>                        </td>
        </tr>
        
        </table>
            </div>
            <!-- /.box-body -->
          </div>
         

          <div class="box box-info">
            <table class="table table-bordered table-striped" id="example3">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center" rowspan="2">No.</th>
    <th style="text-align:center" rowspan="2">Semester</th>
    <th width="10%" style="text-align:center" rowspan="2">Status</th>
    <th width="15%" style="text-align:center" rowspan="2">IPS</th>
    <th width="15%" style="text-align:center" rowspan="2">IPK</th>
    <th style="text-align:center" colspan="2">Jumlah SKS</th>
  </tr>
  <tr>
    <th width="5%" style="text-align:center">Semester</th>
    <th width="5%" style="text-align:center">Total</th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $no = 0;
        foreach($aktivitas as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->semester;?></td>
        <td style="text-align:center"><?php echo $data->status_mhs;?></td>
        <td style="text-align:center"><?php echo $data->ips;?></td>
        <td style="text-align:center"><?php echo $data->ipk_ak;?></td>
        <td style="text-align:center"><?php echo $data->sks_semester;?></td>
        <td style="text-align:center"><?php echo $data->sks_total;?></td >
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>

          </div>
      
        <div class="callout callout-info">
        <strong>Keterangan :</strong>
            <br />
            - Fitur ini digunakan untuk menampilkan history pendidikan setiap mahasiswa
            <br />
            - Data yang dapat di ubah hanya data pada periode aktif
         </div>

