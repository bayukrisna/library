<form  method="post" action="<?php echo base_url(); ?>tamu/save_f1/<?php echo $edit->id_pendaftaran; ?>" enctype="multipart/form-data">
<div class="row"> 
  <?php echo $this->session->flashdata('message');?>

  <div class="col-md-12">

  <div class="box box-primary">

    <h3 style="text-align:center">Follow Up</h3>
  <div class="box-body">
    <div class="col-md-6">
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <label for="no">No. Tamu</label>
                  <input type="text" name="id_pendaftaran" class="form-control" id="id_pendaftaran" placeholder=""  .input-sm value="<?php echo $edit->id_pendaftaran; ?>" readonly required>
                </div>
                <div class="form-group">
                  <label for="no">Follow Up 1</label>
                  <input type="text" name="f1" class="form-control" id="f1" placeholder=""  .input-sm value="<?php echo $edit->f1; ?>" >
                </div>
                <div class="form-group">
                  <label for="no">Follow Up 2</label>
                  <input type="text" name="f2" class="form-control" id="f2" placeholder=""  .input-sm value="<?php echo $edit->f2; ?>" >
                </div>
                <div class="form-group">
                  <label for="no">Follow Up 3</label>
                  <input type="text" name="f3" class="form-control" id="f3" placeholder=""  .input-sm value="<?php echo $edit->f3; ?>" >
                </div>
                <div class="form-group">
                  <label for="no">Catatan</label>
                  <textarea type="text" class="form-control input-sm" id="notes" name="notes" placeholder=""><?php echo $edit->notes; ?></textarea>
                </div>
                <tr>
                  <td>

                    <input type="checkbox" id="myCheck"  onclick="myFunction()" value="Tamu">
                    <input type="hidden" id="status_bayar" name="status_bayar" value="Tamu">
                  </td>
                  <td>
                    Non Aktif
                  </td>
                </tr>
                
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
<script>
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("status_bayar");
    if (checkBox.checked == true){
        document.getElementById("status_bayar").value = "Non Aktif";
    } else {
       document.getElementById("status_bayar").value = "none";
    }
}
</script>



