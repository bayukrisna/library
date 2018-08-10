        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/lihat_mahasiswa_dikti/<?php echo $mahasiswa->id_mahasiswa; ?>">Detail Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_pendidikan/<?php echo $mahasiswa->id_mahasiswa; ?>">History Pendidikan</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/krs_mahasiswa/<?php echo $mahasiswa->id_mahasiswa; ?>">KRS Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_nilai/<?php echo $mahasiswa->id_mahasiswa; ?>">History Nilai</a>
        <a class="btn btn-sm btn-primary">Aktivasi Perkuliahan</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/prestasi/<?php echo $mahasiswa->id_mahasiswa; ?>">Prestasi</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>mahasiswa/data_mahasiswa">Kembali</a>
        <br><br>
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
            <a class="btn btn-primary pull-right"  data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus"></i> Tambah Pendidikan</a><br><br>
          </div>

          <div class="box box-info">
            <table class="table table-bordered table-striped" id="example3">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th width="10%" style="text-align:center">Jenis</th>
    <th width="10%" style="text-align:center">Tingkat</th>
    <th width="15%" style="text-align:center">Nama Prestasi</th>
    <th width="15%" style="text-align:center">Tahun</th>
    <th style="text-align:center">Penyelenggara</th>
    <th style="text-align:center">Peringkat</th>
    <th style="text-align:center"></th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $no = 0;
        foreach($prestasi as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->jenis_prestasi;?></td>
        <td style="text-align:center"><?php echo $data->tingkat_prestasi;?></td>
        <td style="text-align:center"><?php echo $data->nama_prestasi;?></td>
        <td style="text-align:center"><?php echo $data->tahun;?></td>
        <td style="text-align:center"><?php echo $data->penyelenggara;?></td>
        <td style="text-align:center"><?php echo $data->peringkat;?></td >
        <td style="text-align:center">
                <button id="" type="button" class="btn btn-xs"   data-toggle="modal" data-target="#modal_detil"><i class="fa fa-pencil"></i></button>
                        </td>
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>

          </div>
          <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Prestasi</h3>
            </div>
           <?php echo form_open('mahasiswa/simpan_prestasi/'.$mahasiswa->id_mahasiswa); ?>
            <div class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="col-xs-4" >Jenis Prestasi</label>
                        <div class="col-xs-6">
                            <select name="jenis_prestasi" id="jenis_prestasi" class="form-control input-sm">
                                <option value="">-- Pilih Jenis Prestasi --</option>
                                <option value="Sains">Sains</option>
                                <option value="Olahraga">Olahraga</option>
                                 <option value="Seni">Seni</option>
                                 <option value="Lain-lain">Lain-lain</option>
                                 </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Tingkat Prestasi</label>
                        <div class="col-xs-6">
                            <select name="tingkat_prestasi" id="tingkat_prestasi" class="form-control input-sm">
                            <option value="">-- Pilih Tingkat Prestasi --</option>
                            <option value="Islam">Sekolah</option>
                            <option value="Kecamatan">Kecamatan</option>
                             <option value="Kab/Kota">Kab/Kota</option>
                             <option value="Provinsi">Provinsi</option>
                             <option value="Nasional">Nasional</option>
                             <option value="Internasional">Internasional</option>
                             <option value="Lainnya">Lainnya</option>
                             </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Nama Prestasi</label>
                        <div class="col-xs-6">
                            <input type="text" name="nama_prestasi" class="form-control input-sm pull-left" id="nama_prestasi" placeholder="" required="" >
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-xs-4" >Tahun</label>
                        <div class="col-xs-6">
                            <input type="text" name="tahun" class="form-control input-sm pull-left" id="tahun" placeholder="" required="" value="">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Penyelenggara</label>
                        <div class="col-xs-6">
                            <input type="text" name="penyelenggara" class="form-control input-sm pull-left" id="penyelenggara" placeholder="" required="" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" col-xs-4" >Peringkat</label>
                        <div class="col-xs-6">
                            <input type="text" name="peringkat" class="form-control input-sm pull-left" id="peringkat" placeholder="" required="" value="">
                        </div>
                    </div>

                <div class="modal-footer">
                    <button class="btn btn-info">Simpan</button>
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
