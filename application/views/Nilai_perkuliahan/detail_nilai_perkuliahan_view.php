        
        
        <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
        <tr>


            <td width="15%" class="left_column">Program Studi <font color="#FF0000">*</font></td>
            <td>: <?php echo $kp->nama_prodi; ?>   </td>
            <td class="left_column" width="15%" value=>Semester <font color="#FF0000">*</font></td>
            <td width="35%">: <?php echo $kp->semester; ?>       </td>
           
                                  
            <input type="hidden" name="stat_pd" value="A">
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%">Mata Kuliah <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $kp->kode_matkul; ?> - <?php echo $kp->nama_matkul; ?> ( <?php echo $kp->bobot_matkul; ?> )                        </td>
               <td class="left_column" width="15%">Nama Kelas <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $kp->nama_kelas; ?>                        </td>
        </tr>
        
        </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="">
            <a class="btn btn-primary pull-right"  data-toggle="modal" data-target="#modal_edit"><i class="fa fa-plus"></i> Tambah Pendidikan</a><br><br>
          </div>

          <div class="box box-info">
            <table class="table table-bordered table-striped" id="example3">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center" rowspan="2">No.</th>
    <th width="15%" style="text-align:center" rowspan="2">NIM</th>
    <th style="text-align:center" rowspan="2">Nama Mahasiswa</th>
    <th width="15%" style="text-align:center" rowspan="2">Prodi</th>
    <th width="15%" style="text-align:center" rowspan="2">Angkatan</th>
    <th style="text-align:center" colspan="2">Nilai</th>
        <th style="text-align:center" rowspan="2"></th>
  </tr>
   <tr>
   
    <th width="7%" style="text-align:center">Angka</th>
    <th width="7%" style="text-align:center">Huruf</th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $no = 0;
        foreach($nilai as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->nama_kp;?></td>
        <td style="text-align:center"><?php echo $data->nama_kp;?></td>
        <td style="text-align:center"><?php echo $data->nama_kp;?></td>
        <td style="text-align:center"><?php echo $data->nama_kp;?></td>
        <td style="text-align:center"><?php echo $data->nama_kp;?></td>
        <td style="text-align:center"><?php echo $data->nama_kp;?></td >
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

        
       