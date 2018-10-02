      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA ASSET</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Pabrik</th>
                  <th>Asset Model</th>
                  <th>Model No.</th>
                  <th>Assets</th>
                  <th>Penyusutan</th>
                  <th>Kategori</th>
                  <th>EOL</th>
                  <th>Fieldset</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($asset as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_view'.$data->id_gedung.'">'.$data->nama_gedung.'</a></td>
                  <td>'.$data->luas_gedung.'</td>
                  <td>'.$data->kepemilikan.'</td>
                  <td>'.$data->kegiatan.'</td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_lahan.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                
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
<?php 
        foreach($asset as $i):
        ?>
        <div class="modal fade" id="modal_view<?php echo $i->id_gedung;?>" >
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
                              <td class="left_column" width="40%">Nama Gedung </td>
                                <td colspan="9">:  <?php echo $i->nama_gedung ?>
                            </tr>
                            <tr>
                              <td class="left_column">Luas Gedung</td>
                                <td>: <?php echo $i->luas_gedung ?></td>
                            </tr> 
                            <tr>
                              <td class="left_column" width="20%">Kepemilikan</td>
                                <td>: 
                           <?php echo $i->kepemilikan ?></td>
                            </tr>
                            <tr>
                              <td class="left_column">Kegiatan</td>
                                <td>: <?php echo $i->kegiatan ?></td>
                            </tr> 
                            <tr>
                              <td class="left_column">Kondisi</td>
                                <td>: <?php echo $i->kondisi ?></td>
                            </tr> 
                            <tr>
                              <td class="left_column">Lahan</td>
                                <td>: <?php echo $i->nama_lahan ?></td>
                            </tr>
                           
                        </table>

                    </div>

                </div>
            </div>
            </div>
        </div>

    <?php endforeach;?>

    <?php 
        foreach($asset as $i):
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
          <td class="left_column">Kondisi</td>
            <td>: <select class="text-input" style="width:80%" name="id_kondisi" required="">
              <option value="<?php echo $i->id_kondisi ?>"><?php echo $i->kondisi ?></option>
                  <?php 

                  foreach($drop_kondisi as $row)
                  { 
                    echo '<option value="'.$row->id_kondisi.'">'.$row->kondisi.'</option>';
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

    <?php endforeach;?>


        <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">TAMBAH ASSET</h3>
            </div>
                <div class="modal-body">

                    <form id="create-form" class="form-horizontal" method="post" action="http://www.jic.ac.id/snipe_it/public/hardware/models/create" autocomplete="off" role="form" enctype="multipart/form-data">
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Model Asset</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="nama_asset" id="name" value="" />
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Perusahaan</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_manufacturer">
            <option value="" selected="selected">Select a Manufacturer</option>
        </select>
        
    </div>
</div><!-- Category -->
<div class="form-group ">
    <label for="category_id" class="col-md-3 control-label">Category</label>
    <div class="col-md-7 col-sm-12 required">
        <select class="select2" style="width:100%" name="id_category">
            <option value="" selected="selected">Select a Category</option>
        </select>
        
    </div>
</div><!-- Model Number -->
<div class="form-group ">
    <label for="model_number" class="col-md-3 control-label">Model No.</label>
    <div class="col-md-7">
    <input class="form-control" type="text" name="model_no" id="model_number" value="" />
        
    </div>
</div><!-- Depreciation -->
<div class="form-group ">
    <label for="depreciation_id" class="col-md-3 control-label">Depreciation</label>
    <div class="col-md-7">
        <select class="select2" style="width:350px" name="id_depreciation">
            <option value="" selected="selected">Do Not Depreciate</option></select>
        
    </div>
</div>
<!-- EOL -->

<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">EOL</label>
    <div class="col-md-3">
        <div class="input-group">
            <input class="col-md-2 form-control" type="text" name="eol" id="eol" value="" />
            <span class="input-group-addon">
                months
            </span>
        </div>
    </div>
</div>

<!-- Custom Fieldset -->
<div class="form-group ">
    <label for="custom_fieldset" class="col-md-3 control-label">Fieldset</label>
    <div class="col-md-7">
        <select class="select2" style="width:350px" name="custom_fieldset"><option value="" selected="selected">No custom fields</option><option value="1">Asset with MAC Address</option></select>
        
    </div>
</div>

<!-- Notes -->
<div class="form-group ">
    <label for="notes" class="col-md-3 control-label">Notes</label>
    <div class="col-md-7 col-sm-12">
        <textarea class="col-md-6 form-control" id="notes" name="notes"></textarea>
        
    </div>
</div>
<!-- Image -->

<div class="form-group ">
    <label class="col-md-3 control-label" for="image">Upload Image</label>
    <div class="col-md-5">
        <input name="image" type="file">
        
    </div>
</div>

                    <div class="box-footer text-right">
    <a class="btn btn-link" href="http://www.jic.ac.id/snipe_it/public/hardware/models">Cancel</a>
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
</div>                </form>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>

