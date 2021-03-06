      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">MASTER CATALOGUE GROUP TYPES</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="2%" >Catalogue Group</th>
                <th width="15%" >Catalogue Group Types</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($catalogue as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><?php echo $data->cgName;?></td>
                    <td><?php echo $data->dcgName;?></td>
                    <td>
                      
                      
                    <a href="" data-toggle="modal" data-target="#modal_edit<?=$data->dcgId?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Master/delete_detail_catalogue/'.$data->dcgId); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

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
                <h3 class="modal-title" id="myModalLabel">ADD CATALOGUE GROUP TYPES</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/add_detail_catalogue', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                    <label for="name" class="col-md-4 control-label">Catalogue Group</label>
                    <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="cgId" id="cgId">
                                  <option value="" selected="selected"> Choose Catalogue Group </option>
                                      <?php 

                                    foreach($getCG as $row)
                                    { 
                                      echo '<option value="'.$row->cgId.'">'.$row->cgName.'</option>';
                                    }
                                    ?>
                              </select>
                        
                    </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-4 control-label">Catalogue Group Types</label>

                  <div class="col-md-7">
                    <input type="text" class="form-control" id="dcgName" name="dcgName" placeholder="">
                  </div>
                </div><!-- Manufacturer -->
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                </div>
                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>
        <?php 
        foreach($catalogue as $i):
        ?>
  <div class="modal fade" id="modal_edit<?= $i->dcgId?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit CATALOGUE GROUP TYPES</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/edit_detail_catalogue', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                    <label for="name" class="col-md-4 control-label">Catalogue Group</label>
                    <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="cgId" id="cgId">
                                  <option value="" selected="selected"> Choose Catalogue Group </option>
                                      <?php 

                                    foreach($getCG as $row)
                                    { 
                                      $a = '';
                                      if($row->cgId == $i->cgId){
                                        $a = 'selected=""';
                                      }
                                      echo '<option '.$a.' value="'.$row->cgId.'">'.$row->cgName.'</option>';
                                    }
                                    ?>
                              </select>
                        
                    </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-4 control-label">Catalogue Group Types</label>

                  <div class="col-md-7">
                    <input type="hidden" name="dcgId" value="<?php echo $i->dcgId ?>">
                    <input type="text" class="form-control" id="dcgName" name="dcgName" placeholder="" value="<?php echo $i->dcgName ?>">
                  </div>
                </div><!-- Manufacturer -->
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                </div>
                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>
        <?php endforeach;?>



