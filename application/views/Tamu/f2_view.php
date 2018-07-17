<form  method="post" action="<?php echo base_url(); ?>tamu/save_f2/<?php echo $edit->id_pendaftaran; ?>" enctype="multipart/form-data">
<div class="row"> 
  <?php echo $this->session->flashdata('message');?>

  <div class="col-md-12">

  <div class="box box-primary">

    <h3 style="text-align:center">Follow Up 2</h3>
  <div class="box-body">
    <div class="col-md-6">
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <label for="no">No. Tamu</label>
                  <input type="text" name="id_pendaftaran" class="form-control" id="id_pendaftaran" placeholder=""  .input-sm value="<?php echo $edit->id_pendaftaran; ?>" readonly required>
                </div>
                <div class="form-group">
                  <label for="no">Catatan</label>
                  <input type="text" name="f2" class="form-control" id="f2" placeholder=""  .input-sm value="<?php echo $edit->f2; ?>" required>
                </div>
                
               <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

                

               
                  <?php echo form_close();?>
            
          
  </div>
            </form>
        </div></div>
          
      </div>
          </div>
</div>
</div>


