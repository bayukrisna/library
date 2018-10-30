      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA USER</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <thead>
                <tr>
                  <th style="width: 2%">No. </th>
                  <th>Name</th>
                  <th>Sex</th>
                  <th>Status</th>
                  <th>Category</th>
                  <th>Phone Number</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($user as $data) {
                 
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td><a href="'.base_url('admin/detail_user/'.$data->id_user).'">'.$data->username.'</a></td>
                  <td>'.$data->sex.'</td>
                  <td>'.$data->user_status.'</td>
                  <td>'.$data->category.'</td>
                  <td>'.$data->no_telp_user.'</td>
                </tr>
                ' ;
                
              }
              ?>
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

    




    


      