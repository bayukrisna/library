      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA KATEGORI</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($kategori as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_view'.$data->id_kategori.'">'.$data->kategori.'</a></td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_kategori.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                
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
        foreach($gedung as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_gedung;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT Gedung</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('Gedung/edit_gedung'); ?>
                      <table class="table" style="text-transform: uppercase;">
      <tr>
        <input type="hidden" name="id_gedung" value="<?php echo $i->id_gedung ?>">
          <td>Nama Gedung <font color="#FF0000">*</font></td>
            <td>:  <input type="text" name="nama_gedung" id="tgl_perolehan" value="<?php echo $i->nama_gedung ?>" size="40" style="width:80%" /></td>
        </tr>
        <tr>
          <td class="left_column">Luas Gedung</td>
            <td>: <input type="number" name="luas_gedung" id="luas_lahan" class="text-input" style="width:80px" value="<?php echo $i->luas_gedung ?>"> m<sup>2</sup></td>
        </tr>
        <tr>
          <td class="left_column">Kepemilikan</td>
            <td>: <input type="text" name="kepemilikan" value="<?php echo $i->kepemilikan ?>" id="kepemilikan" class="text-input" style="width:80%"></td>
        </tr> 
        <tr>
          <td class="left_column">Kegiatan</td>
            <td>: <textarea wrap="soft" name="kegiatan" id="kegiatan" rows="5"  cols="50"><?php echo $i->kegiatan ?></textarea> </td>
        </tr>
        <tr>
          <td class="left_column">status</td>
            <td>: <select class="text-input" style="width:80%" name="id_status" required="">
              <option value="<?php echo $i->id_status ?>"><?php echo $i->status ?></option>
                  <?php 

                  foreach($drop_status as $row)
                  { 
                    echo '<option value="'.$row->id_status.'">'.$row->status.'</option>';
                  }
                  ?>
            </select> </td>
        </tr>
        <tr>
          <td class="left_column">Lahan</td>
            <td>: <select class="text-input" style="width:80%" name="id_lahan" required="">
              <option value="<?php echo $i->id_lahan ?>"><?php echo $i->nama_lahan ?></option>
                  <?php 

                  foreach($drop_lahan as $row)
                  { 
                    echo '<option value="'.$row->id_lahan.'">'.$row->nama_lahan.'</option>';
                  }
                  ?>
            </select> </td>
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

    <?php endforeach;?> -->


        <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">TAMBAH KATEGORI</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('kategori/simpan_kategori'); ?>
                      <table class="table" style="text-transform: uppercase;">
      <tr>
          <td>Nama Kategori <font color="#FF0000">*</font></td>
            <td>:  <input type="text" name="kategori" id="kategori" value="" size="40" style="width:80%" /></td>
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

