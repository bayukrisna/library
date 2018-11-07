<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <?php echo form_open('Material/edit_document', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
            <div class="box-header with-border">
              <h3 class="box-title">EDIT DOCUMENT</h3>
              <button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-check icon-white"></i> Save</button>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <div class="col-md-6">
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Number</label>

                  <div class="col-sm-8">
                    <input type="hidden" class="form-control" id="docId" name="docId" placeholder="" value="<?= $document->docId; ?>">
                    <input type="text" class="form-control" id="docNumber" name="docNumber" placeholder="" value="<?= $document->docNumber; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subject Heading</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docSubject" name="docSubject" placeholder="" value="<?= $document->docSubject; ?>" >
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Classification</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docClassification" name="docClassification" placeholder="" value="<?= $document->docClassification; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Catalogue Groups</label>

                  <div class="col-sm-8">
                    <select class="select2" style="width:100%" name="cgId" id="editCgId" onchange="return get_dcg2(this.value)">
                                  <option value="" selected="selected"> Choose Catalogue Group </option>
                                      <?php 

                                    foreach($getCG as $row)
                                    { 
                                      $a = '';
                                      if($row->cgId == $document->cgId){
                                        $a = 'selected=" "';
                                      }
                                      echo '<option '.$a.' value="'.$row->cgId.'">'.$row->cgName.'</option>';
                                    }
                                    ?>
                              </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Catalogue Group Types</label>

                  <div class="col-sm-8">
                    <select class="select2" style="width:100%" name="dcgId" id="editDcgId">
                                  <?php 

                                    foreach($getDCG as $row)
                                    { 
                                      $a = '';
                                      if($row->dcgId == $document->dcgId){
                                        $a = 'selected=" "';
                                      }
                                      echo '<option '.$a.' value="'.$row->dcgId.'">'.$row->dcgName.'</option>';
                                    }
                                    ?>
                                     
                              </select>
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Title</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docTitle" name="docTitle" placeholder="" value="<?= $document->docTitle; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subtitle</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docSubtitle" name="docSubtitle" placeholder="" value="<?= $document->docSubtitle; ?>">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Author</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docAuthor" name="docAuthor" placeholder="" value="<?= $document->docAuthor; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Additional Author</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docAddAuthor" name="docAddAuthor" placeholder="" value="<?= $document->docAddAuthor; ?>">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Editor</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docEditor" name="docEditor" placeholder="" value="<?= $document->docEditor; ?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Edition</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docEdition" name="docEdition" placeholder="" value="<?= $document->docEdition; ?>">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Place</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docPlace" name="docPlace" placeholder="" value="<?= $document->docPlace; ?>">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Publisher</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docPublisher" name="docPublisher" placeholder="" value="<?= $document->docPublisher; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Publication Year</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docPubYear" name="docPubYear" placeholder="" value="<?= $document->docPubYear; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Date Purchasing</label>

                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="docPurchaseDate" name="docPurchaseDate" placeholder="" value="<?= $document->docPurchaseDate; ?>">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">ISBN</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="docIsbn" name="docIsbn" placeholder="" value="<?= $document->docIsbn; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Notes</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" id="docNotes" name="docNotes"><?= $document->docNotes; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Image</label>

                  <div class="col-sm-8">
                    <input type="file" name="image" onchange="loadFile2(event)"  id="image" placeholder="">
                    <input type="hidden" name="docImage" placeholder="" value="<?= $document->docImage; ?>">
                    <br>
                    <img src="<?php echo base_url();?>uploads/<?php echo $document->docImage; ?>" onerror="this.src='http://icons.iconarchive.com/icons/harwen/simple/256/PNG-Image-icon.png'" width="250px" id="output2">
                  </div>
                </div>
              </div>
              </div>
            </div>
            <?php echo form_close();?>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
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