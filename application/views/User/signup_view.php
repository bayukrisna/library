<div class="row" > 
    <div class="col-md-12" >
      <?php echo $this->session->flashdata('message');?>
        <div >
          <div class="panel panel-danger">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> SIGN UP </div>
            <div class="panel-body" >
              <div class="row" >
                <div class="col-lg-6">
                  
                  <?php echo form_open('user/create_user'); ?>
                      <div class="form-group">
                        <label for="email">Name</label>
                        <input type="text" name="userUsername" class="form-control" id="userUsername" placeholder="Wajib Diisi" required="" value="<?php echo $this->session->userdata('username'); ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="email">Sex</label>
                        <select class="select2" style="width:100%" name="sexId" id="sexId" required="">
                            <option value="" selected="selected"> Choose Sex </option>
                            <option value="1"> Male </option>         
                            <option value="2"> Female </option>
                              </select>
                      </div>
                      <div class="form-group">
                        <label for="email">Status</label>
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
                      <div class="form-group">
                        <label for="email">Category</label>
                        <select class="select2" style="width:100%" name="ucId" id="ucId" required="">
                            <option value="" selected="selected"> Choose Status First </option>
                            
                              </select>
                      </div>
                       <div class="form-group">
                        <label for="email">Campus</label>
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

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="email">City</label>
                        <input type="text" name="userCity" class="form-control" id="userCity" value="">
                      </div>
                      <div class="form-group">
                        <label for="email">Address</label>
                         <input type="text" name="userAddress" class="form-control" id="userAddress" value="">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="userEmail" class="form-control" id="userEmail"  value="">
                      </div>
                      <div class="form-group">
                        <label for="email">Phone Number</label>
                        <input type="text" name="userPhone" class="form-control" id="userPhone" value="">
                      </div>
                    
                      <button type="submit" class="btn btn-warning pull-right">Save</button>
                      
                    </div>

                     
                  <?php echo form_close();?>
              </div></div>
            </div>
          </div>
        </div>
          </div>

         
        <script type="text/javascript">
            function get_uc(p) {
                var usId = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>user/get_uc_by_us/'+usId,
                    data: 'usId='+usId,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#ucId").html(msg);

                    }
                });
            }
          </script>

        