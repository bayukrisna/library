      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">MASTER CONTENT</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive" style=" overflow-x: hidden; overflow-y: hidden;">
              <table id="" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <!-- <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br> -->
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="15%" >Image</th>
                <th width="15%" >Position</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($dashboard as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><img src="<?= base_url('uploads/'.$data->image) ?>" width="100px"></td>
                    <td><?php echo $data->position;?></td>
                    <input type="hidden" id="position<?= $data->id ?>" value="<?= $data->position; ?>">
                    <input type="hidden" id="image<?= $data->id ?>" value="<?= $data->image  ?>">
                    <td>
                    <button onclick="show_modal(this.value)" value="<?= $data->id; ?>"  title="Edit" class="btn btn-warning btn-xs btn-flat glyphicon glyphicon-pencil"></button>

                    <!-- <a href="<?= base_url('Master/delete_content/'.$data->id); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a> -->

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
                <h3 class="modal-title" id="myModalLabel">ADD CONTENT</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/add_content', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group">
                  <center>
                    <label class="btn">
                            <img height="100px" width="100px" src="" onerror="this.src='<?= base_url('assets/img/no image.png')?>'" alt="" id="output">
                             <input type="file" id="foto" style="display: none" name="foto" onchange="loadFile(event)">
                        </label>
                    </center>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Position</label>
                    <div class="col-md-7 col-sm-12 required">
                        <select class="form-control" name="position" required="">
                          <option value="">-- Choose --</option>
                          <option value="slider">Slider</option>
                          <option value="banner">Banner</option>
                        </select>
                        
                    </div>
                </div><!-- Manufacturer -->
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> SAVE</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>
     
    <div class="modal fade" id="modal_edit" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT CONTENT</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Master/edit_content', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group">
                  <center>
                    <label class="btn">
                            <img height="100px" width="100px" src="" onerror="this.src='<?= base_url('assets/img/no image.png')?>'" alt="" id="output2">
                             <input type="file" style="display: none" name="foto" onchange="loadFile2(event)">
                             <input type="hidden" name="images" id="images">
                        </label>
                    </center>
                </div>
                <div class="form-group " style="display: none">
                    <label for="name" class="col-md-3 control-label">POSITION</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input type="hidden" name="id" id="id" value="">
                        <select class="form-control" name="position" id="position" required="">
                          <option value="">-- Choose --</option>
                          <option value="slider">Slider</option>
                          <option value="banner">Banner</option>
                        </select>
                        
                    </div>
                </div><!-- Manufacturer -->
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> SAVE</button>
                </div>
                </div>
            </div>
            </div>
    </div>
<div class="modal fade" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Submit Masukan Paket </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Nama Paket:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Kesan Belajar:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function show_modal(p){
    $('#modal_edit').modal('show');
    $('#id').val(p);
    var position = document.getElementById("position"+p).value;
    var image = document.getElementById("image"+p).value;
    imaget = '<?= base_url('uploads/')?>'+image;
    $('#images').val(image);
    $('#position').val($('#position'+p).val()).trigger("change");
    document.getElementById("output2").src = imaget;
    
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