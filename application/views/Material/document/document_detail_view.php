<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DOCUMENT</h3>
              <a href="<?= base_url('Material/document_edit/'.$this->uri->segment('3')); ?>" class="btn btn-warning btn-xs pull-right" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table class="table">
                  <tr>
                    <th class="col-sm-2" height="5px">Id Number</th>
                    <td class="col-sm-3"><?= $document->docNumber; ?></td>
                    <th class="col-sm-2">Edition</th>
                    <td class="col-sm-3"><?= $document->docEdition; ?></td>
                    <td width="10%" rowspan="3"><img src="<?php echo base_url();?>uploads/<?php echo $document->docImage; ?>" onerror="this.src='http://icons.iconarchive.com/icons/harwen/simple/256/PNG-Image-icon.png'" width="100px" id="output2"></td>
                  </tr>
                  <tr>
                    <th height="5px">Subject Heading</th>
                    <td><?= $document->docSubject; ?></td>
                    <th>Place</th>
                    <td><?= $document->docPlace; ?></td>
                  </tr>
                  <tr>
                    <th>Classification</th>
                    <td><?= $document->docClassification; ?></td>
                    <th>Publisher</th>
                    <td><?= $document->docEdition; ?></td>
                  </tr>
                  <tr>
                    <th>Catalogue Groups</th>
                    <td><?= $document->cgName; ?></td>
                    <th>Publication Year</th>
                    <td><?= $document->docPubYear; ?></td>
                  </tr>
                  <tr>
                    <th>Catalogue Groups Type</th>
                    <td><?= $document->dcgName; ?></td>
                    <th>Date Purchasing</th>
                    <td><?= $document->docPurchaseDate; ?></td>
                  </tr>
                  <tr>
                    <th>Title</th>
                    <td><?= $document->docTitle; ?></td>
                    <th>ISBN</th>
                    <td><?= $document->docIsbn; ?></td>
                  </tr>
                  <tr>
                    <th>Subtitle</th>
                    <td><?= $document->docSubtitle; ?></td>
                    <th>Notes</th>
                    <td rowspan="2"><?= $document->docNotes; ?></td>
                  </tr>
                  <tr>
                    <th>Author</th>
                    <td><?= $document->docAuthor; ?></td>
                  </tr>
                  <tr>
                    <th>Additional Author</th>
                    <td><?= $document->docAddAuthor; ?></td>
                    <th>Editor</th>
                    <td><?= $document->docEditor; ?></td>
                  </tr>
                </table>
            </div>
            </div>
            
            <!-- /.box-body -->
          </div>
          <a href="" data-toggle="modal" data-target="#modal_add" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
          <div class="box">
            <div class="box-body">
              <table id="example3" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="15%" >Number</th>
                <th width="15%" >Status</th>
                <th width="15%" >Condition</th>
                <th width="15%" >Notes</th>
                <th width="2%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    $number = $this->db->where('docId', $document->docId)->get('document_number')->result();
                    foreach($number as $data):
                    ;
                  ?>
                  <tr>
                    <td><?= ++$no;?></td>
                    <td><?= $data->dnNumber;?></td>
                    <td><?= $data->statusId;?></td>
                    <td><?= $data->dnCondition;?></td>
                    <td><?= $data->dnNotes;?></td>
                    <td><a href="" data-toggle="modal" data-target="#modal_edit_number<?=$data->dnId?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Material/delete_document_number/'.$data->dnId.'/'.$data->docId); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a></td>
                </tr>
              <?php endforeach;?>
              </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <?php 
        $number = $this->db->where('docId', $document->docId)->get('document_number')->result();
        foreach($number as $i):
        ?>
    <div class="modal fade" id="modal_edit_number<?php echo $i->dnId;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT DOCUMENT</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Material/edit_document_number', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Document Number</label>
                        <div class="col-sm-6">
                          <input type="hidden" name="docId" value="<?= $data->docId; ?>">
                          <input type="hidden" name="dnId" value="<?= $i->dnId; ?>">
                          <input type="text" class="form-control" id="dnNumber" placeholder="" name="dnNumber" value="<?= $i->dnNumber;?>">
                        </div>
                      </div>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Type</label>
                        <div class="col-sm-6">
                          <select style="width: 100%" name="dnType" id="dnType" class="select2">
                            <option value="original" <?php if($i->dnType == 'original'){echo 'selected=" "';}?>>Original</option>
                            <option value="copy" <?php if($i->dnType == 'copy'){echo 'selected=" "';}?>>Copy</option>
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
                                      if($row->campusId == $i->campusId){
                                        $c = 'selected=" "';
                                      }
                                      echo '<option '.$c.' value="'.$row->campusId.'">'.$row->campusName.'</option>';
                                    }
                                    ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-6">
                          <select class="select2" style="width: 100%" name="statusId">
                            <option value="1" <?php if($i->statusId == '1'){echo 'selected=" "';}?> >Available</option>
                            <option value="2" <?php if($i->statusId == '2'){echo 'selected=" "';}?>>Non Available</option>
                            <option value="3" <?php if($i->statusId == '3'){echo 'selected=" "';}?>>Lost</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Condition</label>
                        <div class="col-sm-6">
                          <select class="select2" style="width: 100%" name="dnCondition">
                            <option value="1" <?php if($i->dnCondition == '1'){echo 'selected=" "';}?> >New</option>
                            <option value="2" <?php if($i->dnCondition == '2'){echo 'selected=" "';}?>>Old</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Notes</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" name="dnNotes" id="dnNotes"><?= $i->dnNotes;?></textarea>
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
    <?php endforeach;?>
    <div class="modal fade" id="modal_add" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">ADD DOCUMENT</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Material/add_document_number', 'id="form_ajax2" class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <?php echo $this->session->flashdata('message2');?>
                    <div class="box">
                    <div class="box-body">
               <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-4 control-label">Document Number</label>
                        <div class="col-sm-6">
                          <input type="hidden" name="docId" value="<?= $document->docId?>">
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
                      </div>
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>