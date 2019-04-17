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
                        <th>No Inventory</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date Request</th>
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
                      <td><?= $key->docNumber ?></td>
                      <td><a href="<?= base_url('Dashboard/detail_catalogue/'.$key->docId) ?>"><?php echo $key->docTitle;?></a></td>
                      <td><?= $key->docAuthor ?></td>
                      <td><?= date('d M Y', strtotime($key->srDate)) ?></td>
                      <td><?= $key->srInformation ?></td>
                      <td><?= $srStatus ?></td>
                      <td>
                        <?php if($key->srStatus == '1' or $key->srStatus == '2'){ ?>
                          <a href="<?= base_url('Transaction/save_edit_request/'.$key->srId.'/6') ?>" class="btn btn-danger btn-xs btn-flat fa fa-times"><span class="tooltiptext">Canceled</span></a> 
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