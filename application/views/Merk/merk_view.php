      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA MERK (<i>BRAND</i>)</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Merk / Brand</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($merk as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_view'.$data->id_merk.'">'.$data->merk.'</a></td>
                  <td>'.$data->kategori.'</td>
                 
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_merk.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                
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
      </div>
      <!-- /.row -->
    </section>
<!--<?php 
        foreach($ruang as $i):
        ?>
        <div class="modal fade" id="modal_view<?php echo $i->id_merk;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">DETAIL RUANG</h3>
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
        <div class="modal fade" id="modal_edit<?php echo $i->id_merk;?>" >
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
            <input type="hidden" name="id_merk" value="<?php echo $i->id_merk; ?>">
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
                <h3 class="modal-title" id="myModalLabel">TAMBAH MERK (<i>BRAND</i>)</h3>
            </div>
                <div class="modal-body">

                    <?php echo form_open('merk/simpan_merk', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Merk</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="merk" id="merk" value="" required="" />
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Kategori</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_kategori">
            <option value="" selected="selected"> Pilih Kategori</option>
             <?php 
                                        foreach($getKategori as $row)
                                        { 
                                          echo '<option value="'.$row->id_kategori.'">'.$row->kategori.'</option>';
                                        }
                                    ?>
        </select>
        
    </div>
</div><!-- Category -->



                    <div class="box-footer text-right">
    
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
</div>                </form>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>


