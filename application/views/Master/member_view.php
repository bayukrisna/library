<style type="text/css">
.modal-dialog2 {
    width: 80%;
    margin: 30px auto;
}
</style>
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">MASTER MEMBER</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive" style="overflow-x: hidden;">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="10%" >Name</th>
                <th width="1%" >Gender</th>
                <th width="10%" >Address</th>
                <th width="5%" >City</th>
                <th width="5%" >Status</th>
                <th width="5%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($member as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><a href="<?= base_url('Master/member_view/'.$data->userId) ?>"><?php echo $data->userUsername;?></a></td>
                    <td><?php echo $data->sexName;?></td>
                    <td><?php echo $data->userAddress;?></td>
                    <td><?php echo $data->userCity;?></td>
                    <td><?php echo $data->userStatus;?></td>
                    <td>
                      
                      
                    <a href="<?= base_url('Master/member_edit/'.$data->userId); ?>"  class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Master/delete_member/'.$data->userId); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

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
            <div class="modal-dialog2">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">ADD MEMBER</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/add_member', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Student Id</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input onkeyup="cek_student(this.value)" class="form-control" type="text" name="userStudentId" value="" required="" />
                            <span id="span_student"></span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Name</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input class="form-control" type="text" name="userUsername" value="" required="" />
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Sex</label>
                        <div class="col-md-7 col-sm-12 required">
                           <select class="select2" style="width:100%" name="sexId" id="sexId" required="">
                            <option value="" selected="selected"> Choose Sex </option>
                            <option value="1"> Male </option>         
                            <option value="2"> Female </option>
                              </select>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Status</label>
                        <div class="col-md-7 col-sm-12 required">
                            <select class="select2" style="width:100%" name="usId" id="usId" onchange="return get_uc(this.value)" required="">
                            <option value="" selected="selected"> Choose Status </option>
                                <?php 

                                    foreach($getUserStatus as $row)
                                    { 
                                      echo '<option value="'.$row->usId.'">'.$row->userStatus.'</option>';
                                    }
                                    ?>
                            
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">User Category</label>
                        <div class="col-md-7 col-sm-12 required">
                            <select class="select2" style="width:100%" name="ucId" id="ucId" required="">
                                <option value="" selected="selected"> Choose Status First </option>
                            
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Campus Location</label>
                        <div class="col-md-7 col-sm-12 required">
                            <select class="select2" style="width:100%" name="campusId" id="campusId" required="">
                            <option value="" selected="selected"> Choose Campus </option>
                                <?php 

                                    foreach($getCampus as $row)
                                    { 
                                      echo '<option value="'.$row->campusId.'">'.$row->campusName.'</option>';
                                    }
                                    ?>
                            
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">City</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="text" name="userCity" class="form-control" id="userCity" value="">
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Address</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="text" name="userAddress" class="form-control" id="userAddress" value="">
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Email</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="email" name="userEmail" class="form-control" id="userEmail"  value="" required="">
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Phone Number</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="text" name="userPhone" class="form-control" id="userPhone" value="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Image</label>

                  <div class="col-sm-8">
                    <input type="file" name="image" onchange="loadFile(event)"  id="image" placeholder="">
                    <br>
                    <img src="<?= base_url('assets/img/no image.png')?>" width="100px" id="output">
                  </div>
                </div>
                </div>
                <div class="box-footer text-right">
                    <button id="myBtn" type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>
    <div class="modal fade" id="modal_edit" >
            <div class="modal-dialog2">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT VENDOR</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/edit_vendor', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Name</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input class="form-control" type="text" name="userUsername" value="" required="" />
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Sex</label>
                        <div class="col-md-7 col-sm-12 required">
                           <select class="select2" style="width:100%" name="sexId" id="sexId" required="">
                            <option value="" selected="selected"> Choose Sex </option>
                            <option value="1"> Male </option>         
                            <option value="2"> Female </option>
                              </select>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Status</label>
                        <div class="col-md-7 col-sm-12 required">
                            <select class="select2" style="width:100%" name="usId" id="usId" onchange="return get_uc(this.value)" required="">
                            <option value="" selected="selected"> Choose Status </option>
                                <?php 

                                    foreach($getUserStatus as $row)
                                    { 
                                      echo '<option value="'.$row->usId.'">'.$row->userStatus.'</option>';
                                    }
                                    ?>
                            
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">User Category</label>
                        <div class="col-md-7 col-sm-12 required">
                            <select class="select2" style="width:100%" name="ucId" id="ucId" required="">
                                <option value="" selected="selected"> Choose Status First </option>
                            
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Campus Location</label>
                        <div class="col-md-7 col-sm-12 required">
                            <select class="select2" style="width:100%" name="campusId" id="campusId" required="">
                            <option value="" selected="selected"> Choose Campus </option>
                                <?php 

                                    foreach($getCampus as $row)
                                    { 
                                      echo '<option value="'.$row->campusId.'">'.$row->campusName.'</option>';
                                    }
                                    ?>
                            
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">City</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="text" name="userCity" class="form-control" id="userCity" value="">
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Address</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="text" name="userAddress" class="form-control" id="userAddress" value="">
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Email</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="email" name="userEmail" class="form-control" id="userEmail"  value="" required="">
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Phone Number</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="text" name="userPhone" class="form-control" id="userPhone" value="">
                            
                        </div>
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>



        <script type="text/javascript">
            function get_uc(p) {
                var usId = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>Master/get_uc_by_us/'+usId,
                    data: 'usId='+usId,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#ucId").html(msg);

                    }
                });
            }
            function cek_student(p) {
                $.ajax({
                    url: '<?php echo base_url(); ?>Master/cek_student',
                    data: 'userStudentId='+p,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#span_student").html(msg);

                    }
                });
            }
          </script>
          <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadFile2 = function(event) {
    var output = document.getElementById('output2');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>