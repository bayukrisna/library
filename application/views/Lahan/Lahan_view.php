<style type="text/css">
        .buttons-copy {
        background:#2C97DF;
  color:white;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:4px solid #2A80B9;
  padding:2px 4px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
        }
    .buttons-pdf {
        background:red;
  color:white;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:4px solid black;
  padding:2px 4px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
  margin-left: 5px;
        }

        .buttons-csv {
        background:maroon;
  color:white;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:4px solid black;
  padding:2px 4px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
  margin-left: 5px;
        }

    .buttons-print {
        background:grey;
  color:white;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:4px solid black;
  padding:2px 4px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
  margin-left: 5px;
        }

      .buttons-excel {
        background:green;
  color:white;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:4px solid black;
  padding:2px 4px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
  margin-left: 5px;
        }

    </style>
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA LAHAN</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table  class="table table-bordered table-striped table-hover dataTable js-exportable " style="text-transform: uppercase;">

                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>

                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lahan</th>
                  <th>Tgl. Perolehan</th>
                  <th>Luas (m<sup>2</sup>)</th>
                  <th>Harga Perolehan</th>
                  <th>Kepemilikan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($lahan as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_view'.$data->id_lahan.'">'.$data->nama_lahan.'</a></td>
                  <td>'.$data->tgl_perolehan.'</td>
                  <td>'.$data->luas_lahan.'</td>
                  <td>'.$data->harga_perolehan.'</td>
                  <td>'.$data->kepemilikan.'</td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_lahan.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                
                ' ;
                
              }
              ?>
                </tbody>
              </table>
            </div>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<?php 
        foreach($lahan as $i):
        ?>
        <div class="modal fade" id="modal_view<?php echo $i->id_lahan;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">DETAIL LAHAN</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <table class="table" style="text-transform: uppercase;">
                          <tr>
                              <td class="left_column" width="40%">Nama Lahan </td>
                                <td colspan="9">:  <?php echo $i->nama_lahan ?>
                            </tr>
                          <tr>
                              <td class="left_column" width="20%">Tgl. Perolehan</td>
                                <td>: 
                           <?php echo $i->tgl_perolehan ?></td>
                            </tr>
                            <tr>
                              <td class="left_column">Luas Lahan</td>
                                <td>: <?php echo $i->luas_lahan ?></td>
                            </tr> 
                            <tr>
                              <td class="left_column">Harga Perolehan</td>
                                <td>: <?php echo $i->harga_perolehan ?></td>
                            </tr> 
                            <tr>
                              <td class="left_column">Kepemilikan</td>
                                <td>: <?php echo $i->kepemilikan ?></td>
                            </tr> 
                            <tr>
                              <td class="left_column">Alamat</td>
                                <td>: <?php echo $i->alamat ?></td>
                            </tr>
                           
                        </table>

                    </div>

                </div>
            </div>
            </div>
        </div>

    <?php endforeach;?>

    <!-- <?php 
        foreach($data_periode as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_lahan;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT PERIODE</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('setting_periode/edit_periode'); ?>
                      <table class="table" style="text-transform: uppercase;">
      <tr>
          <td>Semester <font color="#FF0000">*</font></td>
            <td colspan="9">:  <input type="text" name="semester" id="id_smt" value="<?php echo $i->semester ?>"  readonly="" />
        </tr>
      <tr>
          <td class="left_column" width="40%">Program Studi <font color="#FF0000">*</font></td>
            <td>: 
       <select id="id_prodi" required="" name="id_prodi">
                    <option value="<?php echo $i->id_prodi ?>"><?php echo $i->nama_prodi; ?></option>   
                    <?php 

                  foreach($getProdi as $row)
                  { 
                    echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                  }
                  ?>
                  </select> 
             </td>
        </tr>
        <tr>
          <td class="left_column">Target Mahasiswa Baru</td>
            <td>: <input type="number" name="target_mhs_baru" id="target_mhs_baru" class="text-input" style="width:50px" value="<?php echo $i->target_mhs_baru; ?>"></td>
        </tr> 
        <tr>
          <td class="left_column">Pendaftar Ikut Seleksi</td>
            <td>: <input type="number" name="pendaftar_ikut_seleksi" id="pendaftar_ikut_seleksi" class="text-input" style="width:50px" value="<?php echo $i->pendaftar_ikut_seleksi; ?>"></td>
        </tr> 
        <tr>
          <td class="left_column">Pendaftar Lulus Seleksi</td>
            <td>: <input value="<?php echo $i->pendaftar_lulus_seleksi; ?>" type="number" name="pendaftar_lulus_seleksi" id="target_mhs_baru" class="text-input" style="width:50px"></td>
        </tr> 
        <tr>
          <td class="left_column">Daftar Ulang</td>
            <td>: <input value="<?php echo $i->daftar_ulang; ?>" type="number" name="daftar_ulang" id="target_mhs_baru" class="text-input" style="width:50px"></td>
        </tr>
        <tr>
          <td class="left_column">Mengundurkan Diri</td>
            <td>: <input value="<?php echo $i->mengundurkan_diri; ?>" type="number" name="mengundurkan_diri" id="target_mhs_baru" class="text-input" style="width:50px"></td>
        </tr> 
        <tr>
         <td class="left_column">Tanggal Perkuliahan  <font color="#FF0000">*</font></td>
            <td>:
        <input type="date" value="<?php echo $i->tgl_awal_kul; ?>" name="tgl_awal_kul" id="tgl_awal_kul"  maxlength="50" size="50" style="width:45%">               <strong>s/d</strong>
        <input type="date" value="<?php echo $i->tgl_akhir_kul; ?>" name="tgl_akhir_kul" id="tgl_akhir_kul"  text-input" maxlength="50" size="50" style="width:45%">            </td>
        </tr>
        <tr>
          <td class="left_column">Jumlah Minggu Pertemuan </td>
            <td>: <input value="<?php echo $i->jumlah_minggu_pertemuan; ?>" type="number" name="jumlah_minggu_pertemuan" id="target_mhs_baru" class="text-input" style="width:50px"></td>
            <input type="hidden" name="id_lahan" value="<?php echo $i->id_lahan; ?>">
        </tr> 
        <tr>
          <td colspan="4"><button type="submit" class="btn btn-info btn-flat">Edit</button></td>
        </tr>
    </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>

    <?php endforeach;?> -->


        <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">TAMBAH LAHAN</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('Lahan/simpan_lahan'); ?>
                      <table class="table" style="text-transform: uppercase;">
      <tr>
          <td>Nama Lahan <font color="#FF0000">*</font></td>
            <td>:  <input type="text" name="nama_lahan" id="tgl_perolehan" value="" size="40" style="width:80%" />
        </tr>
      <tr>
          <td>Tgl. Perolehan <font color="#FF0000">*</font></td>
            <td>:  <input type="date" name="tgl_perolehan" id="tgl_perolehan" value="" />
        </tr>
        <tr>
          <td class="left_column">Luas Lahan</td>
            <td>: <input type="number" name="luas_lahan" id="luas_lahan" class="text-input" style="width:80px" value=""> m<sup>2</sup></td>
        </tr> 
        <tr>
          <td class="left_column">Harga Perolehan</td>
            <td>: <input type="number" name="harga_perolehan" id="harga_perolehan" class="text-input" value=""> </td>
        </tr> 
        <tr>
          <td class="left_column">Kepemilikan</td>
            <td>: <input value="" type="text" name="kepemilikan" id="kepemilikan" class="text-input" ></td>
        </tr> 
        <tr>
          <td class="left_column">Alamat</td>
            <td>: <textarea wrap="soft" name="alamat" id="alamat" rows="5" cols="40"></textarea> </td>
        </tr>
  
        <tr>
          <td colspan="4"><button type="submit" class="btn btn-info btn-flat">Simpan</button></td>
        </tr>
    </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>



