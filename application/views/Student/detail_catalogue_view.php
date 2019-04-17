<div class="content">
    <?php echo $this->session->flashdata('message');
error_reporting(0);
    ?>
    <?php if($stock > 0){?>
      <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat">
        </i> Borrow</a>
    <?php 
    } else {?>
      <button type="button"  class="btn btn-primary btn-sm btn-flat" disabled="">
        </i> Borrow</button>
    <?php } ?>
    
    <div class="box">
        <div class="box-body">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th class="col-sm-2" height="5px">Id Number</th>
                        <td class="col-sm-3">
                            <?=$document->docNumber; ?></td>
                        <th class="col-sm-2">Edition</th>
                        <td class="col-sm-3">
                            <?=$document->docEdition; ?></td>
                        <td width="10%" rowspan="3"><img src="<?php echo base_url();?>uploads/<?php echo $document->docImage; ?>" onerror="this.src='<?= base_url('assets/img/no image.png')?>'" width="100px" id="output2">
                        </td>
                    </tr>
                    <tr>
                        <th height="5px">Subject Heading</th>
                        <td>
                            <?=$document->docSubject; ?></td>
                        <th>Place</th>
                        <td>
                            <?=$document->docPlace; ?></td>
                    </tr>
                    <tr>
                        <th>Classification</th>
                        <td>
                            <?=$document->docClassification; ?></td>
                        <th>Publisher</th>
                        <td>
                            <?=$document->docEdition; ?></td>
                    </tr>
                    <tr>
                        <th>Catalogue Groups</th>
                        <td>
                            <?=$document->cgName; ?></td>
                        <th>Publication Year</th>
                        <td>
                            <?=$document->docPubYear; ?></td>
                    </tr>
                    <tr>
                        <th>Catalogue Groups Type</th>
                        <td>
                            <?=$document->dcgName; ?></td>
                        <th>Date Purchasing</th>
                        <td>
                            <?=$document->docPurchaseDate; ?></td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>
                            <?=$document->docTitle; ?></td>
                        <th>ISBN</th>
                        <td>
                            <?=$document->docIsbn; ?></td>
                    </tr>
                    <tr>
                        <th>Subtitle</th>
                        <td>
                            <?=$document->docSubtitle; ?></td>
                        <th>Notes</th>
                        <td rowspan="2">
                            <?=$document->docNotes; ?></td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td>
                            <?=$document->docAuthor; ?></td>
                    </tr>
                    <tr>
                        <th>Additional Author</th>
                        <td>
                            <?=$document->docAddAuthor; ?></td>
                        <th>Editor</th>
                        <td>
                            <?=$document->docEditor; ?></td>
                    </tr>
                    <tr>
                        <th>Stock Available</th>
                        <td>
                            <?=$stock ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- /.box-body -->
    </div>
    <div class="box">
      <div class="box-body">
        <h3>Description</h3>
        <p><?= $document->docDescription ?></p>
      </div>
    </div>
</div>
</div>
<div class="modal fade" id="modal_tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div> -->
            <div class="modal-body">
                <?php echo form_open( 'Student/add_request', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                <div class="form-group ">
                  <center>
                    <div class="col-sm-12">
                      <input type="hidden" name="docId" value="<?= $document->docId ?>">
                      <input type="hidden" name="userId" value="<?= $this->session->userdata('userId') ?>">
                      <h4>Are you sure to borrow ?</h4>
                      <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" title="Close"><i class="fa fa-close icon-white"></i></button>
                        <button type="submit" class="btn btn-success" title="Yes"><i class="fa fa-check icon-white"></i></button>
                    </div>
                  </center>
                </div>
                <!-- Manufacturer -->
                <!-- <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                </div> -->
            </div>
        </div>
    </div>
</div>
<?php echo form_close();?>