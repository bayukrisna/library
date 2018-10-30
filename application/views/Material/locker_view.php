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
              <div class="table-responsive">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="10%" >Locker Number</th>
                <th width="10%" >Locker Notes</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($locker as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><?php echo $data->lockerNumber;?></td>
                    <td><?php echo $data->lockerNotes;?></td>
                    <td>
                      
                      
                    <a href="" data-toggle="modal" data-target="#modal_edit<?=$data->lockerId?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

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
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Locker Number</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="lockerNumber" value="" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Notes</label>
                    <div class="col-md-7 col-sm-12 required">
                        <textarea class="form-control" rows="4" name="lockerNotes"></textarea>
                        
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
        foreach($locker as $i):
        ?>
    <div class="modal fade" id="modal_edit<?php echo $i->lockerId;?>" >
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
                        <input type="hidden" name="lockerId" value="<?php echo $i->lockerId ?>">
                        <input class="form-control" type="text" name="lockerNumber" value="<?php echo $i->lockerNumber ?>" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Notes</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="lockerNotes" value="<?php echo $i->lockerNotes ?>" required="" />
                        
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



