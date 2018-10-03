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
                foreach ($model as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td>'.$data->id_manufacturer.'</td>
                  <td>'.$data->nama_model.'</td>
                  <td>'.$data->model_no.'</td>
                  <td>'.$data->model_no.'</td>
                  <td>'.$data->id_depreciation.'</td>
                  <td>'.$data->id_category.'</td>
                  <td>'.$data->eol.'</td>
                  <td>'.$data->id_fieldset.'</td>
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
    <label for="category_id" class="col-md-3 control-label">Category</label>
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
</div><!-- Depreciation -->
<div class="form-group ">
    <label for="depreciation_id" class="col-md-3 control-label">Depreciation</label>
    <div class="col-md-7">
        <select class="select2" style="width:350px" name="id_depreciation">
            <option value="<?php echo $i->id_depreciation ?>" selected="selected"><?php echo $i->id_depreciation ?></option></select>
        
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

<!-- Custom Fieldset -->
<div class="form-group ">
    <label for="custom_fieldset" class="col-md-3 control-label">Fieldset</label>
    <div class="col-md-7">
        <select class="select2" style="width:350px" name="id_fieldset">
          <option value="<?php echo $i->id_fieldset ?>" selected="selected"><?php echo $i->id_fieldset ?></option>
        </select>
        
    </div>
</div>

<!-- Notes -->
<div class="form-group ">
    <label for="notes" class="col-md-3 control-label">Notes</label>
    <div class="col-md-7 col-sm-12">
        <textarea class="col-md-6 form-control" id="notes" name="notes"><?php echo $i->notes ?></textarea>
        
    </div>
</div>
<!-- Image -->

<div class="form-group ">
    <label class="col-md-3 control-label" for="image">Upload Image</label>
    <div class="col-md-5">
        <input name="image" type="file" id="image">
        
    </div>
</div>

                    <div class="box-footer text-right">
    
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
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
        <select class="select2" style="width:350px" name="id_fieldset"><option value="" selected="selected">No custom fields</option><option value="1">Asset with MAC Address</option></select>
        
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
        <input name="image" type="file" id="image">
        
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

