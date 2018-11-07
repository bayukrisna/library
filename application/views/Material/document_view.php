<style type="text/css">
.modal-dialog {
    width: 80%;
    margin: 30px auto;
}
</style>
<style type="text/css">
.modal-dialog2 {
    width: 60%;
    margin: 40px auto;
}
</style>
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DOCUMENT</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="15%" >Title</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($document as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                    <td><a href="<?= base_url('Material/document_detail/'.$data->docId); ?>"  ><?php echo $data->docTitle;?></a></td>
                    <td>
                    <a href="<?= base_url('Material/document_edit/'.$data->docId); ?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Material/delete_document/'.$data->docId); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

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
                <h3 class="modal-title" id="myModalLabel">ADD DOCUMENT</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Material/add_document', 'id="form_ajax" class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="col-md-6">
              <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Number</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docNumber" name="docNumber" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subject Heading</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docSubject" name="docSubject" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Classification</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docClassification" name="docClassification" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Catalogue Groups</label>

                  <div class="col-sm-8">
                    <select class="select2" style="width:100%" name="cgId" id="cgId" onchange="return get_dcg(this.value)">
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
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Catalogue Group Types</label>

                  <div class="col-sm-8">
                    <select class="select2" style="width:100%" name="dcgId" id="dcgId">
                                  <option value="" selected="selected"> Choose Catalogue Group First </option>
                                     
                              </select>
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Title</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docTitle" name="docTitle" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subtitle</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docSubtitle" name="docSubtitle" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Author</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docAuthor" name="docAuthor" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Additional Author</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docAddAuthor" name="docAddAuthor" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Editor</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docEditor" name="docEditor" placeholder="">
                  </div>
                </div>

                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Edition</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docEdition" name="docEdition" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Place</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docPlace" name="docPlace" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Publisher</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docPublisher" name="docPublisher" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Publication Year</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docPubYear" name="docPubYear" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Date Purchasing</label>

                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="docPurchaseDate" name="docPurchaseDate" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">ISBN</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docIsbn" name="docIsbn" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Notes</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" id="docNotes" name="docNotes"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="table-responsive" style="overflow-x: hidden;">
                  <div class="box-header with-border">
                    <h3 class="box-title">Books Number</h3>
                  </div>
                  <table id="" class="table table-bordered table-striped table-hover" style="text-transform: uppercase;">
                    <br>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Document Number</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="dnNumber" placeholder="" name="dnNumber">
                        </div>
                      </div>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Type</label>
                        <div class="col-sm-6">
                          <select style="width: 100%" name="dnType" id="dnType" class="select2">
                            <option value="original">Original</option>
                            <option value="copy">Copy</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Campus Location</label>
                        <div class="col-sm-6">
                          <select style="width: 100%" name="campusId" id="campusId" class="select2">
                            <option value="" selected="selected"> Choose Campus Location </option>
                                      <?php 
                                      $a = $this->session->userdata('campusId');
                                    foreach($getCampus as $row)
                                    { 
                                      $c = '';
                                      if($row->campusId == $a){
                                        $c = 'selected=" "';
                                      }
                                      echo '<option '.$c.' value="'.$row->campusId.'">'.$row->campusName.'</option>';
                                    }
                                    ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Notes</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="dnNotes" placeholder="" name="dnNotes">
                        </div>
                        <div class="col-sm-1">
                          <button type="button" onclick="simpan_cart()" class="btn btn-success"><i class="fa fa-check icon-white"></i></button>
                        </div>
                      </div>
                  <thead>
                  <tr>
                    <th>No. </th>
                    <th>No. Document</th>
                    <th>Type</th>
                    <th>Notes</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody id="kk">
                  </tbody>
                </table>
              </div>

              
      

              <br>
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Book Cover</h3>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Image</label>

                  <div class="col-sm-8">
                    <input type="file" name="image" onchange="loadFile(event)"  id="image" placeholder="">
                    <br>
                    <img src="http://icons.iconarchive.com/icons/harwen/simple/256/PNG-Image-icon.png" width="250px" id="output">
                  </div>
                </div>
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
    <div class="modal fade" id="modal_view" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">VIEW DOCUMENT</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Material/edit_document', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <table class="table">
                  <tr>
                    <th class="col-sm-2" height="5px">Id Number</th>
                    <td class="col-sm-3"><?= $i->docNumber; ?></td>
                    <th class="col-sm-2">Edition</th>
                    <td class="col-sm-3"><?= $i->docEdition; ?></td>
                    <td width="10%" rowspan="3"><img src="<?php echo base_url();?>uploads/<?php echo $i->docImage; ?>" onerror="this.src='http://icons.iconarchive.com/icons/harwen/simple/256/PNG-Image-icon.png'" width="100px" id="output2"></td>
                  </tr>
                  <tr>
                    <th height="5px">Subject Heading</th>
                    <td><?= $i->docSubject; ?></td>
                    <th>Place</th>
                    <td><?= $i->docPlace; ?></td>
                  </tr>
                  <tr>
                    <th>Classification</th>
                    <td><?= $i->docClassification; ?></td>
                    <th>Publisher</th>
                    <td><?= $i->docEdition; ?></td>
                  </tr>
                  <tr>
                    <th>Catalogue Groups</th>
                    <td><?= $i->docNumber; ?></td>
                    <th>Publication Year</th>
                    <td><?= $i->docPubYear; ?></td>
                  </tr>
                  <tr>
                    <th>Catalogue Groups Type</th>
                    <td><?= $i->docNumber; ?></td>
                    <th>Date Purchasing</th>
                    <td><?= $i->docPurchaseDate; ?></td>
                  </tr>
                  <tr>
                    <th>Title</th>
                    <td><?= $i->docTitle; ?></td>
                    <th>ISBN</th>
                    <td><?= $i->docIsbn; ?></td>
                  </tr>
                  <tr>
                    <th>Subtitle</th>
                    <td><?= $i->docSubtitle; ?></td>
                    <th>Notes</th>
                    <td rowspan="2"><?= $i->docNotes; ?></td>
                  </tr>
                  <tr>
                    <th>Author</th>
                    <td><?= $i->docNumber; ?></td>
                  </tr>
                  <tr>
                    <th>Additional Author</th>
                    <td><?= $i->docAddAuthor; ?></td>
                    <th>Editor</th>
                    <td><?= $i->docEditor; ?></td>
                  </tr>
                </table>
                
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>
<script type="text/javascript">
  function test(p){
    alert(p);
  }
            function get_dcg(p) {
                var cgId = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>material/get_dcg_by_cg/'+cgId,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#dcgId").html(msg);

                    }
                });
            }
            function get_dcg2(p) {
                var cgId = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>material/get_dcg_by_cg/'+cgId,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#editDcgId").html(msg);

                    }
                });
            }
            function simpan_cart(){
              var a = $('#form_ajax').serialize();
              $.ajax(
                {
                  url : '<?php echo base_url(); ?>Material/add_to_cart',
                  type: 'post',
                  data : $('#form_ajax').serialize(),
                  success: function(msg){
                    document.getElementById("dnNumber").value = '';
                    document.getElementById("dnNotes").value = '';
                    $("#kk").html(msg);
                  }
                }
              )
            }
            function simpan_cart2(){
              var a = $('#form_ajax2').serialize();
              $.ajax(
                {
                  url : '<?php echo base_url(); ?>Material/add_to_cart2',
                  type: 'post',
                  data : $('#form_ajax2').serialize(),
                  success: function(msg){
                    document.getElementById("dnNumber2").value = '';
                    document.getElementById("dnNotes2").value = '';
                    document.getElementById("mkm").style.display = null;
                    $("#kks").html(msg);
                  }
                }
              )
            }
            function delete_cart(p){
              $.ajax(
                {
                  url: '<?php echo base_url(); ?>Material/delete_cart/'+p,
                  type: 'POST',
                  success: function(msg){
                    $("#kk").html(msg);
                    $("#kks").html(msg);
                  }
                }
              )
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
