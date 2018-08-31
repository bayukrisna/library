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


            <td width="15%" class="left_column">Nama <font color="#FF0000">*</font></td>
            <td>: <?php echo $mahasiswa->nama_mahasiswa; ?>   </td>
      
           
                                  
            <input type="hidden" name="stat_pd" value="A">
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%" value=>Tempat Lahir <font color="#FF0000">*</font></td>
            <td width="35%">: <?php echo $mahasiswa->tempat_lahir; ?>        </td>
            <td class="left_column" width="15%">Tanggal Lahir <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $mahasiswa->tanggal_lahir; ?>                        </td>
        </tr>
        <tr>
            <td class="left_column">Jenis Kelamin</td>
            <td>: <?php echo $mahasiswa->jenis_kelamin; ?></td>
            <td class="left_column">Agama <font color="#FF0000">*</font></td>
            <td>:
            <?php echo $mahasiswa->agama; ?>
        </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="">
            <?php 
                if($this->session->userdata('level') == 5){ ?>

                <?php } else { ?>
                        <a class="btn btn-primary pull-right"  data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus"></i> Tambah Pendidikan</a><br><br>
                <?php } ?>
            
          </div>
          <div class="box box-info">
            <div class="box-body">
            <table class="table table-bordered table-striped" id="example3">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th width="10%" style="text-align:center">NIM</th>
    <th width="10%" style="text-align:center">Jenis Pendaftaran</th>
    <th width="15%" style="text-align:center">Periode</th>
    <th width="15%" style="text-align:center">Tanggal Masuk</th>
    <th style="text-align:center">Perguruan Tinggi</th>
    <th style="text-align:center">Program Studi</th>
    <?php if($this->session->userdata('level') != 5){?>
        <th style="text-align:center"></th>
    <?php } ?>
  </tr>
  </thead>
  <tbody>
    <?php 
        $no = 0;
        foreach($history as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->nim;?></td>
        <td style="text-align:center"><?php echo $data->nama_pendaftaran;?></td>
        <td style="text-align:center"><?php echo $data->semester;?></td>
        <td style="text-align:center"><?php echo $data->tgl_du;?></td>
        <td style="text-align:center"><?php echo $data->nama_pt;?></td>
        <td style="text-align:center"><?php echo $data->nama_prodi;?></td >
        <?php if($this->session->userdata('level') != 5){?>
        <td style="text-align:center">
                <button id="" type="button" class="btn btn-xs"   data-toggle="modal" data-target="#modal_detil"><i class="fa fa-pencil"></i></button>
                        </td> <?php }?>
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>
</div>

          </div>
          <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">History Pendidikan</h3>
            </div>
            <?php echo form_open('mahasiswa/simpan_pendidikan/'.$mahasiswa->id_mahasiswa); ?>
            <div class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="col-xs-4" >NIM</label>
                        <div class="col-xs-6">
                            <input type="text" name="nim" class="form-control input-sm pull-left" id="nim" placeholder="" readonly="" value="<?php echo $mahasiswa->nim; ?>">
                            <input type="hidden" name="id_mahasiswa" class="form-control input-sm pull-left" id="id_mahasiswa" placeholder="" required="" value="<?php echo $mahasiswa->id_mahasiswa; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Jenis Pendaftaran</label>
                        <div class="col-xs-6">
                            <select name="jenis_pendaftaran" id="jenis_pendaftaran" class="form-control input-sm">
            <option value="">-- Pilih Jenis Pendaftaran --</option>
            <option value="1">Peserta Didik Baru</option>
            <option value="2">Pindahan</option>
             <option value="3">Alih Jenjang</option>
             <option value="4">Lintas Jalur</option>
             <option value="5">Rekognisi Pembelajaran Lampau</option>
             </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Jalur Pendaftaran</label>
                        <div class="col-xs-6">
                            <select name="jalur_pendaftaran" id="jalur_pendaftaran" class="form-control input-sm">
            <option value="">-- Pilih Jalur Pendaftaran --</option>
            <option value="1">SBMPTN</option>
            <option value="2">SNMPTN</option>
             <option value="3">PMDK</option>
             <option value="4">Prestasi</option>
             <option value="5">Seleksi Jalur PTN</option>
             <option value="6">Seleksi Jalur PTS</option>
              <option value="7">Ujian Masuk Bersama PTN (UMB-PT)</option>
               <option value="8">Ujian Masuk Bersama PTS (UMB-PTS)</option>
                <option value="9">Program Internasional</option>
                 <option value="10">Program Kerjasama Perusahaan/Institusi/Pemerintah</option>
             </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Pembiayaan Awal</label>
                        <div class="col-xs-6">
                            <select name="pembiayaan_awal" id="pembiayaan_awal" class="form-control input-sm">
            <option value="">-- Pilih Pembiayaan Awal --</option>
            <option value="1">Mandiri</option>
            <option value="2">Beasiswa Tidak Penuh</option>
             <option value="3">Beasiswa Penuh</option>
             </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Perguruan Tinggi</label>
                        <div class="col-xs-6">
                            <input type="text" name="perguruan_tinggis" class="form-control input-sm pull-left" id="perguruan_tinggis" placeholder="" required="" value="033082 - STIE Jakarta International College" readonly="">
                            <input type="hidden" name="perguruan_tinggi" class="form-control input-sm pull-left" id="perguruan_tinggi" placeholder="" required="" value="033082" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Nama Prodi</label>
                        <div class="col-xs-6">
                            <select name="id_prodi" onchange="return get_prodi_periode(this.value)" class="form-control input-sm pull-left">
                        <option value="">-- Pilih Prodi --</option>
                        <?php 

                                        foreach($getProdi as $row)
                                        { 
                                          echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                                        }
                                    ?>
                      </select>
                  </div>
                        </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Periode Pendaftaran</label>
                        <div class="col-xs-6">
                            <select name="id_periode" id="id_periode" class="form-control input-sm pull-left">
                        <option value="">-- Pilih periode --</option>
                       
                      </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Jumlah Sks di akui</label>
                        <div class="col-xs-6">
                            <input type="text" name="jml_sks_diakui" class="form-control input-sm pull-left" id="jml_sks_diakui" placeholder="" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Asal Perguruan Tinggi</label>
                        <div class="col-xs-6">
                            <input type="text" name="asal_pt" class="form-control input-sm pull-left" id="asal_pt" placeholder="" required="" >
                        </div>
                    </div>
                   <div class="form-group">
                        <label class=" col-xs-4" >Asal Program Studi</label>
                        <div class="col-xs-6">
                            <input type="text" name="asal_prodi" class="form-control input-sm pull-left" id="asal_prodi" placeholder="" required="" >
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-info">Simpan</button>
                </div>
            <?php echo form_close();?>
            </div></div>
            </div>
        </div>

        <div class="modal fade" id="modal_detil" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">History Pendidikan</h3>
            </div>
            <?php echo form_open(); ?>
            <div class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="col-xs-4" >NIM</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Jenis Pendaftaran</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Jalur Pendaftaran</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Tanggal Masuk</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Pembiayaan Awal</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Perguruan Tinggi</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" value="033082 - STIE Jakarta International College" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Program Studi</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Periode Pendaftaran</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" value="2018/2019 Ganjil" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Jumlah Sks di akui</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Asal Perguruan Tinggi</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Asal Program Studi</label>
                        <div class="col-xs-6">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="id_daftar_ulang" placeholder="" required="" >
                        </div>
                    </div>

                </div>
            <?php echo form_close();?>
            </div></div>
            </div>
        </div>
        <div class="callout callout-info">
        <strong>Keterangan :</strong>
            <br />
            - Fitur ini digunakan untuk menampilkan history pendidikan setiap mahasiswa
            <br />
            - Data yang dapat di ubah hanya data pada periode aktif
         </div>


<script type="text/javascript">
            function get_prodi_periode(p) {
                var id_prodi = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>kurikulum/get_prodi_periode/'+id_prodi,
                    data: 'id_prodi='+id_prodi,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_periode").html(msg);
                    }
                });
            }
</script>