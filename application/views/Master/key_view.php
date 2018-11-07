      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">MASTER Key</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >#</th>
                <th width="10%" >No Key</th>
                <th width="10%" >Campus Location</th>
                <th width="10%" >Status</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($key as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><?php echo $data->no_key;?></td>
                    <td><?php echo $data->campusName;?></td>
                    <td><?php echo $data->bookstatus;?></td>
                    <td>
                      
                      
                    <a href="" data-toggle="modal" data-target="#modal_edit<?=$data->id_key?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Master/delete_vendor/'.$data->id_key); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

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
                <h3 class="modal-title" id="myModalLabel">ADD LOCKER KEY</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/add_key', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">No Locker Key</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input class="form-control" type="text" name="no_key" value="" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Campus Location</label>
                    <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="campusId" id="campusId">
                            <option value="" selected="selected"> Choose Campus Location </option>
                                      <?php 
                                      $a = $this->session->userdata('campusId');
                                    foreach($getCampus as $row)
                                    { 
                                      $c = '';
                                      if($row->campusId == $i->campusId){
                                        $c = 'selected=" "';
                                      }
                                      echo '<option '.$c.' value="'.$row->campusId.'">'.$row->campusName.'</option>';
                                    }
                                    ?>
                        </select>
                        
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>
     <?php 
        foreach($key as $i):
        ?>
    <div class="modal fade" id="modal_edit<?php echo $i->id_key;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT LOCKER KEY</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/edit_key', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">No Locker Key</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input type="hidden" name="id_key" value="<?php echo $i->id_key ?>">
                        <input class="form-control" type="text" name="no_key" value="<?php echo $i->no_key ?>" required="" />
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Campus Location</label>
                    <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="campusId" id="campusId">
                            <option value=""> Choose Campus Location </option>
                                      <?php 

                                    foreach($getCampus as $row)
                                    { 
                                     $a = ' ';
                                     if($row->campusId == $i->campusId){
                                        $a = 'selected=" "';
                                     }
                                      echo '<option '.$a.' value="'.$row->campusId.'">'.$row->campusName.'</option>';
                                    }
                                    ?>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Status</label>
                    <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="status" id="status">
                            <option value=""> Choose Status </option>
                                      <?php 

                                    foreach($getBookStatus as $row)
                                    { 
                                     $a = ' ';
                                     if($row->id_bookstatus == $i->status){
                                        $a = 'selected=" "';
                                     }
                                      echo '<option '.$a.' value="'.$row->id_bookstatus.'">'.$row->bookstatus.'</option>';
                                    }
                                    ?>
                        </select>
                        
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>
     <?php endforeach;?>



