           <?php 
                if($this->session->userdata('id_dosen') != null){ ?>
        <!-- <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa">Detail Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_pendidikan">History Pendidikan</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/krs_mahasiswa">KRS Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_nilai">History Nilai</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/aktivitas_perkuliahan">Aktivitas Perkuliahan</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/prestasi">Prestasi</a> -->
        
           <?php } else { ?>

         <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>master_dosen/detail_dosen/<?php echo $dosen->id_dosen; ?>">Profil Dosen</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>master_dosen/jadwal_dosen/<?php echo $dosen->id_dosen; ?>">Jadwal Dosen</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>master_dosen">Kembali</a>
         <br/><br/> 
           <?php }

           ?>
      
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
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_0" data-toggle="tab">Profil</a></li>
              
              <!--<li><a href="#tab_4" data-toggle="tab">Kebutuhan Khusus</a></li> -->
              <?php 
                if($this->session->userdata('id_dosen') != null){ ?>

                <?php } else { ?>
                        <a class="btn btn-success pull-right" href="<?php echo base_url();?>master_dosen/page_edit_dosen/<?php echo $dosen->id_dosen; ?>">Ubah</a>
                <?php } ?>
              
            </ul>



            <div class="tab-content">

                 <div class="tab-pane active" id="tab_0">
                <table width="90%" class="table">
                
                <tr>
                    <td class="left_column" width="15%">NIP</td>
                    <td colspan="6">:  <?php echo $dosen->nip; ?>
                    </td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">NIDN/NUP/NIDK</td>
                    <td colspan="6" size="100">: <?php echo $dosen->kode_dosen; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%">Email</td>
                    <td colspan="6" size="100">: <?php echo $dosen->email; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%">No. Telepon</td>
                    <td colspan="6" size="100">: <?php echo $dosen->no_hp; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%">Jenis Dosen</td>
                    <td colspan="6" size="100">: <?php echo $dosen->status_dosen; ?></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">Status</td>
                    <td colspan="6" size="100">: <?php echo $dosen->status_mhs; ?></td>
                </tr>
                 <tr>
                    <td class="left_column" width="15%">Alamat</td>
                    <td colspan="6" size="100">: <?php echo $dosen->alamat; ?></td>
                </tr>
                
            </table>

              </div>
              
             
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
    
        <!-- /.col -->
