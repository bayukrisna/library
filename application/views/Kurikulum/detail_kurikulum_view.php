        
       
        <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
        <tr>


            <td width="15%" class="left_column">Nama <font color="#FF0000">*</font></td>
            <td>: <?php echo $kurikulum->nama_kurikulum; ?>   </td>
      
           
                                  
            <input type="hidden" name="stat_pd" value="A">
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%" value=>Tempat Lahir <font color="#FF0000">*</font></td>
            <td width="35%">: <?php echo $kurikulum->tempat_lahir; ?>        </td>
            <td class="left_column" width="15%">Tanggal Lahir <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $kurikulum->tanggal_lahir; ?>                        </td>
        </tr>
        <tr>
            <td class="left_column">Jenis Kelamin</td>
            <td>: <?php echo $kurikulum->jenis_kelamin; ?></td>
            <td class="left_column">Agama <font color="#FF0000">*</font></td>
            <td>:
            <?php echo $kurikulum->agama; ?>
        </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="">
            <a class="btn btn-primary pull-right"  data-toggle="modal" data-target="#modal_edit"><i class="fa fa-plus"></i> Tambah Pendidikan</a><br><br>
          </div>

          <div class="box box-info">
            <table class="table table-bordered table-striped">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th width="10%" style="text-align:center">NIM</th>
    <th width="10%" style="text-align:center">Jenis Pendaftaran</th>
    <th width="15%" style="text-align:center">Periode</th>
    <th width="15%" style="text-align:center">Tanggal Masuk</th>
    <th style="text-align:center">Perguruan Tinggi</th>
    <th style="text-align:center">Program Studi</th>
        <th style="text-align:center"></th>
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
        <td style="text-align:center"><?php echo $data->nama_kurikulum;?></td>
        <td style="text-align:center"><?php echo $data->nama_kurikulum;?></td>
        <td style="text-align:center"><?php echo $data->nama_kurikulum;?></td>
        <td style="text-align:center"><?php echo $data->nama_kurikulum;?></td>
        <td style="text-align:center"><?php echo $data->nama_kurikulum;?></td>
        <td style="text-align:center"><?php echo $data->nama_kurikulum;?></td >
        <td style="text-align:center">
                <button id="" type="button" class="btn btn-xs"   data-toggle="modal" data-target="#modal_detil"><i class="fa fa-pencil"></i></button>
                        </td>
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>

          </div>
          <div class="modal fade" id="modal_edit" >
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
                            <select name="agama" id="agama" class="form-control input-sm">
            <option value="">-- Pilih Pendaftaran --</option>
            <option value="Islam">Islam</option>
            <option value="Katholik">Katholiksssssssssssss</option>
             <option value="Kristen">Kristen</option>
             <option value="Hindu">Hindu</option>
             <option value="Budha">Budha</option>
             <option value="Konghucu">Konghucu</option>
             <option value="Lainnya">Lainnya</option>
             </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4" >Jalur Pendaftaran</label>
                        <div class="col-xs-6">
                            <select name="agama" id="agama" class="form-control input-sm">
            <option value="">-- Pilih Pendaftaran --</option>
            <option value="Islam">Islam</option>
            <option value="Katholik">Katholiksssssssssssss</option>
             <option value="Kristen">Kristen</option>
             <option value="Hindu">Hindu</option>
             <option value="Budha">Budha</option>
             <option value="Konghucu">Konghucu</option>
             <option value="Lainnya">Lainnya</option>
             </select>
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
                            <select name="agama" id="agama" class="form-control input-sm">
            <option value="">-- Pilih Pendaftaran --</option>
            <option value="Islam">Islam</option>
            <option value="Katholik">Katholiksssssssssssss</option>
             <option value="Kristen">Kristen</option>
             <option value="Hindu">Hindu</option>
             <option value="Budha">Budha</option>
             <option value="Konghucu">Konghucu</option>
             <option value="Lainnya">Lainnya</option>
             </select>
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
                            <select name="agama" id="agama" class="form-control input-sm">
            <option value="">-- Pilih Pendaftaran --</option>
            <option value="Islam">Islam</option>
            <option value="Katholik">Katholiksssssssssssss</option>
             <option value="Kristen">Kristen</option>
             <option value="Hindu">Hindu</option>
             <option value="Budha">Budha</option>
             <option value="Konghucu">Konghucu</option>
             <option value="Lainnya">Lainnya</option>
             </select>
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
                            <select name="agama" id="agama" class="form-control input-sm">
            <option value="">-- Pilih Pendaftaran --</option>
            <option value="Islam">Islam</option>
            <option value="Katholik">Katholiksssssssssssss</option>
             <option value="Kristen">Kristen</option>
             <option value="Hindu">Hindu</option>
             <option value="Budha">Budha</option>
             <option value="Konghucu">Konghucu</option>
             <option value="Lainnya">Lainnya</option>
             </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Konfirmasi</button>
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
            - Fitur ini digunakan untuk menampilkan history pendidikan setiap kurikulum
            <br />
            - Data yang dapat di ubah hanya data pada periode aktif
         </div>
