      
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">LOCKER KEY</h3>
              
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive" style=" overflow-x: hidden; overflow-y: hidden;">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="10%" >Locker Number</th>
                <th width="10%" >Locker Notes</th>
                <th width="10%" >Status</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($locker as $data):
                      if($data->statusId == '1'){
                        $data->statusId = 'Available';
                      } else if($data->statusId == '2'){
                        $data->statusId = 'Non Available';
                      } else {
                        $data->statusId = 'Lost';
                      }
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><?php echo $data->lockerNumber;?></td>
                    <td><?php echo $data->lockerNotes;?></td>
                    <td><?php echo $data->statusId;?></td>
                    <td>
                      
                      
                    <a href="" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning btn-xs btn-flat" data-id="<?=$data->lockerId?>" data-isi="<?=$data->lockerNumber?>" data-status="<?=$data->statusId?>" data-campus="<?=$data->campusId?>" data-notes="<?=$data->lockerNotes?>" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Material/delete_locker/'.$data->lockerId); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

                    </td>
                    
                </tr>
            <?php endforeach; ?>
              
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
    <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">ADD LOCKER</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Material/add_locker', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-3 control-label">Campus Location</label>
                        <div class="col-sm-7">
                          <select style="width: 100%" name="campusId" id="campusId" class="select2">
                            <option value="" selected="selected"> Choose Campus Location </option>
                                      <?php 
                                      $a = $this->session->userdata('campusId');
                                    foreach($getCampus as $row)
                                    { 
                                      $c = '';
                                      if($row->campusId == $a){
                                        $c = 'selected=" "';
                                      }
                                      echo '<option '.$c.' value="'.$row->campusId.'">'.$row->campusName.'</option>';
                                    }
                                    ?>
                          </select>
                        </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Locker Number</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input onblur="validasi(this.value)" class="form-control" type="text" name="lockerNumber" value="" required="" />
                        <span id="user-availability-status"></span>  
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Notes</label>
                    <div class="col-md-7 col-sm-12 required">
                        <textarea class="form-control" rows="4" name="lockerNotes"></textarea>
                        
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button type="submit" id="myBtn" class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>
    <div class="modal fade" id="modal_edit" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT LOCKER</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Material/edit_locker', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Locker Number</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input type="hidden" name="lockerId" id="lockerId" value="">
                        <input class="form-control" type="text" id="lockerNumber" name="lockerNumber" value="" required="" />
                        
                    </div>
                </div>
                <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-3 control-label">Campus Location</label>
                        <div class="col-sm-7">
                          <select style="width: 100%" name="campusId" id="campusId2" class="select2">
                            <option value="" selected="selected"> Choose Campus Location </option>
                                      <?php 
                                    foreach($getCampus as $row)
                                    { 
                                      echo '<option  value="'.$row->campusId.'">'.$row->campusName.'</option>';
                                    }
                                    ?>
                          </select>
                        </div>
                </div>
                <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-7">
                          <select style="width: 100%" name="statusId" id="statusId" class="select2">
                            <option value="1"  > Available </option>
                            <option value="2" > Non Available </option>
                            <option value="3" > Lost </option>
                          </select>
                        </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Notes</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" id="lockerNotes" name="lockerNotes" value=""  />
                        
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button type="submit"  class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>
  $('#modal_edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var recipient = button.data('id')
    var isi = button.data('isi')
    var status = button.data('status')
    var campus = button.data('campus')
    var notes = button.data('notes')
    var modal = $(this)

    modal.find('.modal-body #lockerId').val(recipient)
    modal.find('.modal-body #lockerNumber').val(isi)
    modal.find('.modal-body #lockerNotes').val(notes)
    $('#statusId').val(status).trigger('change');
    $('#campusId2').val(campus).trigger('change');
  })
</script>
<script type="text/javascript">
  function validasi(p){
    $.ajax({
                    url: '<?php echo base_url(); ?>Material/cek_locker/',
                    data: 'lockerNumber='+p+'&campusId='+$("#campusId").val(),
                    type: 'POST',
                    dataType: 'html',
                    success:function(data){
                    $("#user-availability-status").html(data);
                    },
                    error:function (){}
                });

  }
</script>

