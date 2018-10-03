      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA MODEL ASSET </h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Tambah</a> <br> <br>
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Gambar</th>
                  <th>Pabrik</th>
                  <th>Asset Model</th>
                  <th>Model No.</th>
                  <th>Assets</th>
          
                  <th>EOL</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($model as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td><img src="'.base_url().'uploads/'.$data->image.'" style="width: 50px" onerror="" ></td>
                  <td>'.$data->id_merk.'</td>
                  <td>'.$data->nama_model.'</td>
                  <td>'.$data->model_no.'</td>
                  <td>'.$data->model_no.'</td>
              
                  <td>'.$data->eol.'</td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_model.'" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
                
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
        foreach($model as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_model;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT Model</h3>
            </div>
                <div class="modal-body">
                  <?php echo form_open('Model/edit_model', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                     <!-- CSRF Token -->
                    <input type="hidden" name="id_model" value="<?php echo $i->id_model ?>">
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Model Asset</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="nama_model" id="name" value="<?php echo $i->nama_model ?>" required="" />
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Perusahaan</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_manufacturer">
            <option value="<?php echo $i->id_manufacturer ?>" selected="selected"><?php echo $i->id_manufacturer ?></option>
        </select>
        
    </div>
</div><!-- Category -->
<div class="form-group ">
    <label for="category_id" class="col-md-3 control-label">Kategori</label>
    <div class="col-md-7 col-sm-12 required">
        <select class="select2" style="width:100%" name="id_category">
            <option value="<?php echo $i->id_category ?>" selected="selected"><?php echo $i->id_category ?></option>
        </select>
        
    </div>
</div><!-- Model Number -->
<div class="form-group ">
    <label for="model_number" class="col-md-3 control-label">Model No.</label>
    <div class="col-md-7">
    <input class="form-control" type="text" name="model_no" id="model_number" value="<?php echo $i->model_no ?>" />
        
    </div>
</div>
<!-- EOL -->

<div class="form-group ">
    <label for="eol" class="col-md-3 control-label">EOL</label>
    <div class="col-md-3">
        <div class="input-group">
            <input class="col-md-2 form-control" type="text" name="eol" id="eol" value="<?php echo $i->eol ?>" />
            <span class="input-group-addon">
                months
            </span>
        </div>
    </div>
</div>
<!-- Notes -->
<div class="form-group ">
    <label for="notes" class="col-md-3 control-label">Catatan</label>
    <div class="col-md-7 col-sm-12">
        <textarea class="col-md-6 form-control" id="notes" name="notes"><?php echo $i->notes ?></textarea>
        
    </div>
</div>
<!-- Image -->

<div class="form-group ">

    <label class="col-md-3 control-label" for="image">Unggah Gambar</label>
    <div class="col-md-5">
      <img src="<?php echo base_url().'uploads/'.$i->image?>" style="width: 50px" onerror="" >
        <input name="image" type="file" id="image">
        
    </div>
</div>

                    <div class="box-footer text-right">
<<<<<<< HEAD
    
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
=======
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
>>>>>>> cb0559e28e227b2a8307c081aaf5c89d0685e976
</div>                </form>

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
                <h3 class="modal-title" id="myModalLabel">TAMBAH MODEL ASSET</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Model/simpan_model', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Nama Model Asset</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="nama_model" id="name" value="" required="" />
        
    </div>
</div><!-- Manufacturer -->
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Perusahaan</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_manufacturer">
            <option value="" selected="selected">Pilih Merk</option>
        </select>
        
    </div>
</div><!-- Category -->

<div class="form-group ">
    <label for="model_number" class="col-md-3 control-label">Model No.</label>
    <div class="col-md-7">
    <input class="form-control" type="text" name="model_no" id="model_number" value="" />
        
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

<!-- Notes -->
<div class="form-group ">
    <label for="notes" class="col-md-3 control-label">Catatan</label>
    <div class="col-md-7 col-sm-12">
        <textarea class="col-md-6 form-control" id="notes" name="notes"></textarea>
        
    </div>
</div>
<!-- Image -->

<div class="form-group ">
    <label class="col-md-3 control-label" for="image">Unggah Gambar</label>
    <div class="col-md-5">
        <input name="image" type="file" id="image">
        
    </div>
</div>

                    <div class="box-footer text-right">
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
</div>                </form>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>

