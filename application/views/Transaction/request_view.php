<div class="content">
  <div class="row">
    <?php echo $this->session->flashdata('message');?>
    <div class="box">
      <div class="form-horizontal">
          <div class="box-body">
              <table id="example1" class="table2 table-hover table-striped table-condensed">
                  <header>
                      <h4 style="text-align: center;"><b>Request List</b></h4>
                  </header>
                  <hr>
                  <thead>
                      <tr>
                          <th width="5%">#</th>
                          <th>Name</th>
                          <th>No Inventory</th>
                          <th>Title</th>
                          <th>Author</th>
                          <th>Date Request</th>
                          <th>Max Date</th>
                          <th>Information</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $a = 0; foreach ($data as $key) { 
                      if($key->srStatus == '1'){
                        $srStatus = 'Pending';
                      } else if($key->srStatus == '2'){
                        $srStatus = 'Accepted';
                      } else if($key->srStatus == '3'){
                        $srStatus = 'Rejected';
                      } else if($key->srStatus == '4'){
                        $srStatus = 'OK';
                      } else if($key->srStatus == '5'){
                        $srStatus = 'Expired';
                      } else if($key->srStatus == '6'){
                        $srStatus = 'Canceled';
                      }
                      ?>
                      <tr>
                        <td><?= ++$a ?></td>
                        <td><a href="<?= base_url('Master/member_view/'.$key->userId) ?>"><?php echo $key->userUsername;?></a></td>
                        <td><?= $key->docNumber ?></td>
                        <td><a href="<?= base_url('Material/document_detail/'.$key->docId) ?>"><?php echo $key->docTitle;?></a></td>
                        <td><?= $key->docAuthor ?></td>
                        <td><?= date('d M Y', strtotime($key->srDate)) ?></td>
                        <td><?= date('d M Y', strtotime($key->srMaxDate)) ?></td>
                        <td><?= $key->srInformation ?></td>
                        <td><?= $srStatus ?></td>
                        <td><?php if($key->srStatus == '1'){ ?>
                          <a onclick="show_modal('<?= $key->srId; ?>')"  class="btn btn-warning btn-xs btn-flat glyphicon glyphicon-pencil"><span class="tooltiptext">Action</span></a>
                        <?php } else if($key->srStatus == '2'){?>
                          <!-- <a href="<?= base_url('Transaction/save_edit_request/'.$key->srId.'/4') ?>" class="btn btn-success btn-xs btn-flat fa fa-check"><span class="tooltiptext">OK</span></a> -->
                          <a href="<?= base_url('Transaction/save_edit_request/'.$key->srId.'/5') ?>" class="btn btn-danger btn-xs btn-flat fa fa-times"><span class="tooltiptext">Expired</span></a>
                        <?php } ?>
                          </td>
                      </tr>
                    <?php } ?>
                  </tbody>
              </table>
          </div>
      </div>
      <!-- /.box-body -->
  </div>
  </div>
</div>
<div class="modal fade" id="modal_edit" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Action</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('Transaction/save_request', 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                        <input type="hidden" name="srId" id="srId">
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Action</label>
                    <div class="col-md-7 col-sm-12 required">
                        <select class="form-control" name="srStatus" required="">
                          <option value="2">Accept</option>
                          <option value="3">Reject</option>
                        </select>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Max Date</label>
                    <div class="col-md-7 col-sm-12 required">
                        <input type="date" class="form-control" name="srMaxDate" required="">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="col-md-3 control-label">Notes</label>
                    <div class="col-md-7 col-sm-12 required">
                        <textarea class="form-control" rows="3" name="srInformation"></textarea>
                    </div>
                </div>
                <!-- Manufacturer -->
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Save</button>
                </div>
                </div>
            </div>
            </div>
    </div>
    <?php echo form_close();?>
<script type="text/javascript">
  function show_modal(p) {
        $('#modal_edit').modal('show');
        $('#srId').val(p);
      }
</script>