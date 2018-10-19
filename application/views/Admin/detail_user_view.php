<div class="row" > 
    <div class="col-md-12" >
      <?php echo $this->session->flashdata('message');?>
        <div >
          <div class="panel panel-danger">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> DETAIL USER </div>
            <div class="panel-body" >
              <div class="row" >
                <div class="col-lg-6">
                  
                  <?php echo form_open('admin/edit_user/'.$user->id_user); ?>
                      <div class="form-group">
                        <label for="email">Name</label>
                        <input type="text" name="nama_supplier" class="form-control" id="nama_supplier" placeholder="Wajib Diisi" required="" value="<?php echo $user->username; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="email">Sex</label>
                        <select class="select2" style="width:100%" name="id_sex" id="id_sex">
                            <option value="<?php echo $user->id_sex; ?>" selected="selected"> <?php echo $user->sex; ?> </option>
                            <option value="1"> Male </option>         
                            <option value="2"> Female </option>
                              </select>
                      </div>
                      <div class="form-group">
                        <label for="email">Status</label>
                        <select class="select2" style="width:100%" name="id_us" id="id_us" onchange="return get_uc(this.value)">
                            <option value="<?php echo $user->id_us; ?>" selected="selected"> <?php echo $user->user_status; ?> </option>
                                <?php 

                                    foreach($getUserStatus as $row)
                                    { 
                                      echo '<option value="'.$row->id_us.'">'.$row->user_status.'</option>';
                                    }
                                    ?>
                            
                              </select>
                      </div>
                      <div class="form-group">
                        <label for="email">Category</label>
                        <select class="select2" style="width:100%" name="id_uc" id="id_uc">
                            <option value="<?php echo $user->id_uc; ?>" selected="selected"> <?php echo $user->category; ?> </option>
                            
                              </select>
                      </div>
                       
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="email">City</label>
                        <input type="text" name="city_user" class="form-control" id="city_user" value="<?php echo $user->city_user; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Address</label>
                         <input type="text" name="address_user" class="form-control" id="address_user" value="<?php echo $user->address_user; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email_user" class="form-control" id="email_user"  value="<?php echo $user->email_user; ?>">
                      </div>
                      <div class="form-group">
                        <label for="email">Phone Number</label>
                        <input type="text" name="no_telp_user" class="form-control" id="no_telp_user" value="<?php echo $user->no_telp_user; ?>">
                      </div>
                    
                      <button type="submit" class="btn btn-warning pull-right">Save Edited Data</button>
                      
                    </div>

                     
                  <?php echo form_close();?>
              </div></div>
            </div>
          </div>
        </div>
          </div>

         
        <script type="text/javascript">
            function get_uc(p) {
                var id_us = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>admin/get_category_by_status/'+id_us,
                    data: 'id_us='+id_us,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_uc").html(msg);

                    }
                });
            }
          </script>

        