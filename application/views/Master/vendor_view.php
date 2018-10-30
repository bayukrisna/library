      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">MASTER VENDOR</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="10%" >Vendor Name</th>
                <th width="10%" >Address</th>
                <th width="10%" >Phone Number</th>
                <th width="15%" >Email</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($vendor as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><?php echo $data->vendorName;?></td>
                    <td><?php echo $data->vendorAddress;?></td>
                    <td><?php echo $data->vendorPhone;?></td>
                    <td><?php echo $data->vendorEmail;?></td>
                    <td>
                      
                      
                    <a href="" data-toggle="modal" data-target="#modal_edit<?=$data->vendorId?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Master/delete_vendor/'.$data->vendorId); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

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
                <h3 class="modal-title" id="myModalLabel">ADD VENDOR</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/add_vendor', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Vendor Name</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="vendorName" value="" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Address</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="vendorAddress" value="" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Phone Number</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="vendorPhone" value="" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Email</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="email" name="vendorEmail" value="" required="" />
                        
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
     <?php 
        foreach($vendor as $i):
        ?>
    <div class="modal fade" id="modal_edit<?php echo $i->vendorId;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT VENDOR</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/edit_vendor', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Vendor Name</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input type="hidden" name="vendorId" value="<?php echo $i->vendorId ?>">
                        <input class="form-control" type="text" name="vendorName" value="<?php echo $i->vendorName ?>" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Address</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="vendorAddress" value="<?php echo $i->vendorAddress ?>" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Phone Number</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="vendorPhone" value="<?php echo $i->vendorPhone ?>" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Email</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="vendorEmail" value="<?php echo $i->vendorEmail ?>" required="" />
                        
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
     <?php endforeach;?>



