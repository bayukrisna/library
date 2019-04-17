<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="form-horizontal">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DETAIL MEMBER</h3>
              <a href="<?= base_url('Master/member') ?>" class="btn btn-sm btn-info pull-right"> Back</a>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <div class="col-md-6">
                  <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Student Id</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input class="form-control" type="text" name="userStudentId" value="<?= $member->userStudentId?>" readonly />
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Name</label>
                        <div class="col-md-7 col-sm-12 required">
                          <input type="hidden" name="userId" value="<?=$member->userId ?>">
                            <input class="form-control" type="text" name="userUsername" value="<?= $member->userUsername?>" readonly />
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Sex</label>
                        <div class="col-md-7 col-sm-12 required">
                           <select class="select2" style="width:100%" name="sexId" id="sexId" required="" disabled="" >
                            <option value="" <?php if($member->sexId == ''){echo 'selected="selected"';} ?> > Choose Sex </option>
                            <option value="1" <?php if($member->sexId == '1'){echo 'selected="selected"';} ?>> Male </option>         
                            <option value="2" <?php if($member->sexId == '2'){echo 'selected="selected"';} ?> > Female </option>
                              </select>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Status</label>
                        <div class="col-md-7 col-sm-12 required">
                            <select class="select2" style="width:100%" name="usId" id="usId" onchange="return get_uc(this.value)" required="" disabled="">
                            <option value="" selected="selected"> Choose Status </option>
                                <?php 

                                    foreach($getUserStatus as $row)
                                    { 
                                      $c = '';
                                      if($row->usId == $member->usId){
                                        $c = 'selected=""';
                                      }
                                      echo '<option '.$c.' value="'.$row->usId.'">'.$row->userStatus.'</option>';
                                    }
                                    ?>
                            
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">User Category</label>
                        <div class="col-md-7 col-sm-12 required">
                            <select class="select2" style="width:100%" name="ucId" id="ucId" required="" disabled="">
                                <option value="" selected="selected"> Choose Status First </option>
                                <?php 

                                    foreach($getUC as $row)
                                    { 
                                      $c = '';
                                      if($row->ucId == $member->ucId){
                                        $c = 'selected=""';
                                      }
                                      echo '<option '.$c.' value="'.$row->ucId.'">'.$row->ucCategory.'</option>';
                                    }
                                    ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Campus Location</label>
                        <div class="col-md-7 col-sm-12 required">
                            <select class="select2" style="width:100%" name="campusId" id="campusId" required="" disabled="">
                            <option value="" selected="selected"> Choose Campus </option>
                                <?php 

                                    foreach($getCampus as $row)
                                    { 
                                      $c = '';
                                      if($row->campusId == $member->campusId){
                                        $c = 'selected=""';
                                      }
                                      echo '<option '.$c.' value="'.$row->campusId.'">'.$row->campusName.'</option>';
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
                            <input type="text" name="userCity" class="form-control" id="userCity" value="<?= $member->userCity?>" readonly>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Address</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="text" name="userAddress" class="form-control" id="userAddress" value="<?= $member->userAddress?>" readonly>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Email</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="email" name="userEmail" class="form-control" id="userEmail"  value="<?= $member->userEmail?>" required="" readonly>
                            
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Phone Number</label>
                        <div class="col-md-7 col-sm-12 required">
                            <input type="text" name="userPhone" class="form-control" id="userPhone" value="<?= $member->userPhone?>" readonly>
                            
                        </div>
                    </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Image</label>

                  <div class="col-sm-8">
                    <img src="<?php echo base_url();?>uploads/<?php echo $member->userImage; ?>" onerror="this.src='<?= base_url('assets/img/no image.png')?>'" width="250px" id="output">
                  </div>
                </div>
                </div>
              </div>
              </div>
            </div>
            <?php echo form_close();?>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
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
          </script>