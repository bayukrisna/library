<style type="text/css">
.modal-dialog {
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
              <h3 class="box-title">CD</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive" style=" overflow-x: hidden; overflow-y: hidden;">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="10%" >No Inventory</th>
                <th width="10%" >Subject</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($cd as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><?php echo $data->cdNumber;?></td>
                    <td><?php echo $data->cdSubject;?></td>
                    <td>
                      
                      
                    <a href="" data-toggle="modal" data-target="#modal_edit<?=$data->cdId?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Material/delete_locker/'.$data->cdId); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

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
                <h3 class="modal-title" id="myModalLabel">ADD CD</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Material/add_cd', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="col-md-6">
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Number</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdNumber" name="cdNumber" placeholder="" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subject Heading</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdSubject" name="cdSubject" placeholder=""  >
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Classification</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdClassification" name="cdClassification" placeholder="" >
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Title</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdTitle" name="cdTitle" placeholder="" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Director</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdDirector" name="cdDirector" placeholder="" >
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Actor / Actress</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdActor" name="cdActor" placeholder="" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Producer</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdProducer" name="cdProducer" placeholder="" >
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Duration</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdDuration" name="cdDuration" placeholder="">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Place</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdPlace" name="cdPlace" placeholder="" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Date Purchasing</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdPurchaseDate" name="cdPurchaseDate" placeholder="" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Notes</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" id="cdNotes" name="cdNotes"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Quantity</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdQty" name="cdQty" placeholder="" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Image</label>

                  <div class="col-sm-8">
                    <input type="file" name="image" onchange="loadFile(event)"  id="image" placeholder="">
                    <br>
                    <img src="http://icons.iconarchive.com/icons/harwen/simple/256/PNG-Image-icon.png"  width="250px" id="output">
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
     <?php 
        foreach($cd as $i):
        ?>
    <div class="modal fade" id="modal_edit<?php echo $i->cdId;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT LOCKER</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Material/edit_cd', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="col-md-6">
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Number</label>

                  <div class="col-sm-8">
                    <input type="hidden" name="cdId" value="<?= $i->cdId?>">
                    <input type="text" class="form-control" id="cdNumber" name="cdNumber" placeholder="" value="<?= $i->cdNumber?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subject Heading</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdSubject" name="cdSubject" placeholder="" value="<?= $i->cdSubject?>" >
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Classification</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdClassification" name="cdClassification" placeholder=""  value="<?= $i->cdClassification?>">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Title</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdTitle" name="cdTitle" placeholder="" value="<?= $i->cdTitle?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Director</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdDirector" name="cdDirector" placeholder="" value="<?= $i->cdDirector?>">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Actor / Actress</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdActor" name="cdActor" placeholder="" value="<?= $i->cdActor?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Producer</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdProducer" name="cdProducer" placeholder="" value="<?= $i->cdProducer?>">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Duration</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdDuration" name="cdDuration" placeholder="" value="<?= $i->cdDuration?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Place</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdPlace" name="cdPlace" placeholder="" value="<?= $i->cdPlace?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Date Purchasing</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdPurchaseDate" name="cdPurchaseDate" placeholder="" value="<?= $i->cdPurchaseDate?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Notes</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" id="cdNotes" name="cdNotes"><?= $i->cdNotes?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Quantity</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdQty" name="cdQty" placeholder="" value="<?= $i->cdQty?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Image</label>

                  <div class="col-sm-8">
                    <input type="file" name="image" onchange="loadFile2(event)"  id="image" placeholder="">
                    <input type="hidden" name="cdImage" placeholder="" value="<?= $i->cdImage; ?>">
                    <br>
                    <img src="<?php echo base_url();?>uploads/<?php echo $i->cdImage; ?>" onerror="this.src='http://icons.iconarchive.com/icons/harwen/simple/256/PNG-Image-icon.png'" width="250px" id="output2">
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
     <?php endforeach;?>

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
