      
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Visitor</h3>
              
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive" style=" overflow-x: hidden; overflow-y: hidden;">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="10%" >Date</th>
                <th width="10%" >Name</th>
                <th width="1%" >Institutions</th>
                <th width="10%" >Address</th>
                <th width="10%">Notes</th>
                <th width="2%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($visitor as $data):
                    ;
                  ?>
                  <tr>
                    <td><?php echo ++$no;?></td>
                    <td><?php echo date("d M Y h:i a", strtotime($data->visitorDate));?></td>
                    <td><?php echo $data->visitorName;?></td>
                    <td><?php echo $data->campusName;?></td>
                    <td><?php echo $data->visitorAddress;?></td>
                    <td><?php echo $data->visitorNote;?></td>
                    <td>
                      
                    <a href="" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning btn-xs btn-flat" data-id="<?=$data->visitorNo?>" data-name="<?= $data->visitorName?>" data-address="<?= $data->visitorAddress?>" data-campus="<?=$data->campusId?>" data-note="<?=$data->visitorNote?>" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Visitor/delete_visitor/'.$data->visitorNo); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

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
                <h3 class="modal-title" id="myModalLabel">ADD VISITOR</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Visitor/add_visitor', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-3 control-label">Institutions</label>
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
                    <label for="name" class="col-md-3 control-label">Name</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="visitorName" value="" required="" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Address</label>
                    <div class="col-md-7 col-sm-12 required">
                        <textarea class="form-control" rows="2" name="visitorAddress"></textarea>
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Note</label>
                    <div class="col-md-7 col-sm-12 required">
                        <textarea class="form-control" rows="4" name="visitorNote"></textarea>
                        
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
                <h3 class="modal-title" id="myModalLabel">EDIT VISITOR</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Visitor/edit_visitor', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
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
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Name</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input type="hidden" name="visitorNo" id="visitorNo" value="">
                        <input class="form-control" type="text" id="visitorName" name="visitorName" value="" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Address</label>
                    <div class="col-md-7 col-sm-12 required">
                        <textarea class="form-control" rows="2" name="visitorAddress" id="visitorAddress"></textarea>
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Note</label>
                    <div class="col-md-7 col-sm-12 required">
                        <textarea class="form-control" rows="4" name="visitorNote" id="visitorNote"></textarea>
                        
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
    var name = button.data('name')
    var address = button.data('address')
    var campus = button.data('campus')
    var note = button.data('note')
    var modal = $(this)

    modal.find('.modal-body #visitorNo').val(recipient)
    modal.find('.modal-body #visitorName').val(name)
    modal.find('.modal-body #visitorAddress').val(address)
    modal.find('.modal-body #visitorNote').val(note)
    $('#campusId2').val(campus).trigger('change');
  })
</script>