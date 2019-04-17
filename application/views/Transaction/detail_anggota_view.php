      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="form-horizontal">
            <div class="box-body">
                <table class="table" align="center">
                  <h4 align="center"><b><?= $data->userUsername; ?> - [<?= $data->userStudentId; ?>]</b></h4>
                  <tr>
                    <td width="60px"><b>Status</b> </td><td>: <?= $data->userStatus; ?></td>
                    <td width="10px"><b>Sex</b> </td><td>: <?= $data->sexName; ?></td>
                    <td width="102px"><b>Address</b> </td><td>: <?= $data->userAddress; ?></td>
                    <td rowspan="3" width="100px"><img height="100" width="100" class="pull-right" width="40%" src="<?php echo base_url(); ?>uploads/<?=$data->userImage ?>" alt="Photo" onerror="this.src='<?= base_url('assets/img/no image.png')?>'" src="#" alt="Your Image" ></td>
                  </tr>
                  <tr>
                    <td><b>City</b></td><td>: <?= $data->userCity; ?></td>
                    <td><b>Zip</b></td><td>: </td>
                    <td><b>Email</b></td><td>: <?= $data->userEmail; ?></td>
                  </tr>
                  <tr>
                    <td><b>Phone</b></td><td>: <?= $data->userPhone; ?></td>
                    <td><b>Mobile</b></td><td>: </td>
                    <td><b>User Category</b></td><td>: <?= $data->ucCategory; ?></td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="alert alert-success" id="success" style="display:none;">
            <strong>Success !!!</strong>
          </div>
<?php 
  $list_req = $this->db->where('user.userId', $data->userId)
                ->where('srStatus', '2')
                ->or_where('srStatus', '7')
                ->join('document', 'document.docId = student_request.docId')
                ->join('user', 'user.userId = student_request.userId')
                ->get('student_request')->result();
?>
          <div class="box" style="display: <?php if(count($list_req) == 0){echo 'none';} ?>">
            <div class="form-horizontal">
            <div class="box-body">
                <table id="example1" class="table2 table-hover table-striped table-condensed" >
                  <header>
                    <h4 style="text-align: center;"><b>Request </b></h4>
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
                    <?php $a = 0; foreach ($list_req as $key) { 
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
                      } else if($key->srStatus == '7'){
                        $srStatus = 'list';
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
                          <a onclick="user_request('<?= $key->docId ?>', '<?= $key->srId ?>')" class="btn btn-success btn-xs btn-flat fa fa-check"><span class="tooltiptext">OK</span></a>
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
          <div class="box">
            <div class="form-horizontal">
            <div class="box-body">
                <table id="example1" class="table2 table-hover table-striped table-condensed" >
                  <header>
                    <h4 style="text-align: center;"><b>History</b></h4>
                  </header>
                  <hr>
                  <thead>
                  <tr>
                    <th width="5%">#</th>
                    <th>No Transaksi</th>
                    <th>Title</th>
                    <th>No Inventory</th>
                    <th>Date of Borrow</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $i=0;
                      foreach ($book as $items) : 
                      $datetime1 = date_create(date('Y-m-d'));
                      $datetime2 = date_create($items->tdDueDate);
                      $interval = date_diff($datetime1, $datetime2);
                      $due_date = $interval->format('%r%a');
                      $i++;
                      if($items->cdId != null){
                        $title = 'CD';
                        $no = $items->cdNumber;
                      } else if($items->dnId != null){
                        $title = $items->docTitle;
                        $no = $items->docNumber.'-'.$items->dnNumber;
                      } else {
                        $title = 'Locker Key';
                        $no = $items->lockerNumber;
                      }
                      if($items->tdStatus == '1'){
                        $items->tdStatus1 = 'Borrowed';
                      } else if($items->tdStatus == '2'){
                        $items->tdStatus1 = 'Returned';
                      } else if($items->tdStatus == '3'){
                        $items->tdStatus1 = 'Deduct';
                      } else if($items->tdStatus == '4'){
                        $items->tdStatus1 = 'Lost';
                      }
                    ?>
                  <tr>
                    <td><?= $i?></td>
                    <td><?= $items->transId ?></td>
                    <td><?= $title ?></td>
                    <td><?= $no?></td>
                    <td><?= date('d M Y', strtotime($items->transBorrowingDate)) ?></td>
                    <td <?php if($due_date < 0 && $items->tdStatus == '1'){echo 'style="color: red"';} ?>><?= date('d M Y', strtotime($items->tdDueDate))?></td>
                    <td><?= $items->tdStatus1?></td>
                    <td> <?php if($items->tdStatus == '1'){ ?>  <!-- <a href="<?= base_url('Transaction/simpan_return/'.$this->uri->segment(3).'/'.$items->tdId.'/'.$items->docId);?>"  class="btn btn-primary btn-xs btn-flat" ><i class="fa fa-reply"></i><span class="tooltiptext">Return</span></a> -->
                        <a href="" data-toggle="modal" data-target="#modal_deduct<?=$items->tdId?>" class="btn btn-primary btn-xs btn-flat" ><i class="fa fa-reply"></i><span class="tooltiptext">Return</span></a>
                        <a href="" data-toggle="modal" data-target="#modal_renewal<?=$items->tdId?>" class="btn btn-success btn-xs btn-flat" ><i class="fa  fa-recycle"></i><span class="tooltiptext">Renewal</span></a>
                      <?php }?>
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
          <div class="box">
            <?php echo form_open('Transaction/simpan_peminjaman/'.$this->uri->segment(3), ' method="post" role="form" enctype="multipart/form-data" '); ?>
            <div class="form-horizontal">
            <div class="box-body">
                <table class="table table-striped tab">
                  <header>
                  <button type="button" class="btn btn-primary pull-right" onclick="show_modal()">Add</button>
                  </header>
                  <input type="hidden" name="transId" value="<?= $noTrans ?>">
                  <input type="hidden" name="userId" value="<?= $this->uri->segment(3) ?>">
                  <?php $cart_check = $this->cart->contents();
                  if(!empty($cart_check)) {?>
                  <div class="form-group ">
                      <label for="name" style="text-align: left" class="col-md-2 control-label" >Borrowing Date</label>
                      <div class="col-md-7 col-sm-12 required">
                          <input style="margin-left: -70px" type="date" name="borrow_date" class="form-control" value="<?= date('Y-m-d') ?>">
                      </div>
                  </div>
                  
                  <?php } else { 
                    $ui = array('srStatus' => '2');
                    if($this->db->where('userId', $data->userId)->where('srStatus', '7')->get('student_request')->num_rows() > 0){
                      $this->db->where('userId', $data->userId)
                            ->where('srStatus', '7')
                  ->update('student_request', $ui);  
                      $yourURL= base_url('Transaction/detail_anggota/'.$data->userId);
                      echo ("<script>location.href='$yourURL'</script>");
                    }
                    
                  

                   } ?> 
                  
                  <thead>
                  <tr>
                    <th width="5%">#</th>
                    <th width="10%">Type</th>
                    <th>No</th>
                    <th>Due Date</th>
                    <th width="5%"></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $i=0;
                      foreach ($this->cart->contents() as $items) :
                      if($items['filter'] == 'cd'){
                        $cd = $this->db->where('cdId', $items['cdId'])->get('cd')->row();
                        $no = $cd->cdNumber;
                      } else if($items['filter'] == 'doc'){
                        $doc = $this->db->where('dnId', $items['dnId'])
                                ->join('document', 'document.docId=document_number.docId')
                                ->get('document_number')->row();
                        $no = $doc->docNumber.'-'.$doc->dnNumber;
                      } else if($items['filter'] == 'locker'){
                        $locker = $this->db->where('lockerId', $items['lockerId'])->get('locker')->row();
                        $no = $locker->lockerNumber;
                      }
                      $i++;
                    ?>
                  <tr>
                    <td><?= $i?></td>
                    <td><?= $items['filter']?></td>
                    <td><?= $no ?></td>
                    <td><?= $items['due_date'] ?></td>
                    <td><button  type="button" title="Delete data" class="btn btn-xs btn-danger fa fa-close" onclick="delete_cart(this.value)" value="<?= $items['rowid']?>"></button></td>
                  </tr>
                   <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <div align="center">
          <?php $cart_check = $this->cart->contents();
                if(empty($cart_check)) {
                echo '<button type="submit" class="btn btn-success" disabled> Save </button>';
                
                } else {
                  echo '<button type="submit" class="btn btn-success" autofocus="" > Save </button>';

                } ?> 
            </div>
            <?= form_close(); ?>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                  <h3 class="modal-title" id="myModalLabel">ADD TRANSACTION</h3>
                </div>
                <div class="modal-body">
                  <form id="form_ajax" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                  <div class="form-group request">
                      <label for="name" class="col-md-3 control-label">Filter</label>
                      <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="filter" id="filter" onchange="filterku(this.value)" required="">
                          <option value="">Choose Filter</option>
                          <option value="doc">Document</option>
                          <option value="cd">CD</option>
                          <option value="locker">Locker Key</option>
                        </select>
                      </div>
                  </div>
                  <input type="hidden" id="srId">
                  <div class="form-group" style="display: none; " id="filterCD">
                      <label for="name" class="col-md-3 control-label">CD</label>
                      <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="cdId" id="cdId" onchange="book_number(this.value)">
                          <option></option>
                          <?php foreach ($getCD as $row) {
                            echo '<option value="'.$row->cdId.'">'.$row->cdTitle.'</option>';
                          }
                          ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group" style="display: none; " id="filterLocker">
                      <label for="name" class="col-md-3 control-label">Key</label>
                      <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="lockerId" id="lockerId" onchange="book_number(this.value)">
                          <option></option>
                          <?php foreach ($getLocker as $row) {
                            echo '<option value="'.$row->lockerId.'">'.$row->lockerNumber.'</option>';
                          }
                          ?>
                        </select>
                      </div>
                  </div>
                <div id="filterDoc" style="display: none;">
                  <div class="form-group request">
                      <label for="name" class="col-md-3 control-label">Tags</label>
                      <div class="col-md-7 col-sm-12 required">
                          <input type="text" name="tags" id="tags" value="" data-role="tagsinput" class="form-control" />
                      </div>
                      <div class="col-md-2">
                          <button type="button" onclick="book_tags()" class="btn btn-sm">Filter</button>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="name" class="col-md-3 control-label">Book</label>
                      <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="id_number" id="id_number" onchange="book_number(this.value)">
                          <option></option>
                          <?php foreach ($getBook as $row) {
                            echo '<option value="'.$row->docId.'">'.$row->docNumber.' - '.$row->docTitle.'</option>';
                          }
                          ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Book Number</label>
                      <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="dnId" id="dnId" >
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="name" class="col-md-3 control-label">Booked By</label>
                      <div class="col-md-7 col-sm-12 required">
                        <label class="control-label" id="cek-booked"></label>
                      </div>
                  </div>
                </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Due Date</label>
                      <div class="col-md-7 col-sm-12 required">
                          <input type="date" name="due_date" class="form-control" value="">
                      </div>
                  </div>
                  <div class="box-footer text-right">
                    <button type="button" onclick="simpan_cart()" class="btn btn-success"><i class="fa fa-plus icon-white"> Save </i></button>
                  </div> 

                </div>
            </div>
            </div>
            </form>
        </div>
      <?php 
        foreach($book as $i):
        ?>
      <div class="modal fade" id="modal_renewal<?= $i->tdId?>" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                  <h3 class="modal-title" id="myModalLabel">RENEWAL BOOK</h3>
                </div>
                <div class="modal-body">
                  <?php echo form_open('Transaction/simpan_renewal/'.$this->uri->segment(3), ' method="post" role="form" enctype="multipart/form-data" '); ?>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Due Date</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="hidden" name="tdId" class="form-control" value="<?= $i->tdId?>">
                          <input type="date" name="tdDueDate" class="form-control" value="<?= $i->tdDueDate?>">
                      </div>
                  </div>


                  <div class="box-footer text-right">
                    <button type="submit"  class="btn btn-success"><i class="fa fa-plus icon-white"> Renewal </i></button>
                  </div> 

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>
        <?php endforeach;?>
        <?php 
        foreach($book as $i):
          $datetime1 = date_create(date('Y-m-d'));
          $datetime2 = date_create($i->tdDueDate);
          $interval = date_diff($datetime1, $datetime2);
          $due_date = $interval->format('%a');
          if($i->cdId != null){
                        $title = 'cd';
                        $no = $i->cdId;
                        $col = 'cdId';
                        $notes = $i->cdNotes;
                      } else if($i->dnId != null){
                        $title = 'doc';
                        $no = $i->dnId;
                        $col = 'dnId';
                        $notes = $i->dnNotes;
                      } else {
                        $title = 'locker';
                        $no = $i->lockerId;
                        $col = 'lockerId';
                        $notes = $i->lockerNotes;
                      }
          $riwayat = $this->db->where($col, $no)->where('tdNotes !=', ' ')->get('transaction_detail')->result();
        ?>
        <div class="modal fade" id="modal_deduct<?= $i->tdId?>" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                  <h3 class="modal-title" id="myModalLabel">RETURN BOOK <?= $no ?></h3>
                </div>
                <div class="modal-body">
                  <?php echo form_open('Transaction/simpan_deduct/'.$this->uri->segment(3), ' method="post" class="form-horizontal" role="form" enctype="multipart/form-data" '); ?>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Id User</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="hidden" name="filter" value="<?= $title; ?>">
                        <input type="hidden" name="nomor" value="<?= $no; ?>">
                          <input type="text" name="userId" class="form-control" value="<?= $i->userId?>" readonly>
                          <input type="hidden" name="tdId" class="form-control" value="<?= $i->tdId?>" readonly>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Return Date</label>
                      <div class="col-md-7 col-sm-12 required">
                          <input type="date" name="tdReturnDate" class="form-control" >
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Return Status</label>
                      <div class="col-md-7 col-sm-12 required">
                          <select class="select2" style="width: 100%" name="tdStatus">
                            <option value="2">Okay</option>
                            <option value="3">Deduct</option>
                            <option value="4">Lost</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Deduct</label>
                      <div class="col-md-7 col-sm-12 required">
                          <textarea name="tdNotes" class="form-control" rows="3"></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="name" class="col-md-3 control-label">History</label>
                      <div class="col-md-7 col-sm-12 required">
                          <textarea name="notes" class="form-control" rows="3" ><?= $notes;  ?></textarea>
                      </div>
                  </div>
                  <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus icon-white"> Save </i></button>
                  </div> 

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>
         <?php endforeach;?>
<script type="text/javascript">
  function user_request(param1 = '', srId = ''){
    $('.request').each(function(i, obj) {
      document.getElementsByClassName("request")[i].style.display = "none";
    });
    $("#modal_tambah").modal('show');
    $('#filter').val('doc').trigger('change');
    $('#id_number').val(param1).trigger('change');
    $('#srId').val(srId);
  }
  function show_modal(){
    $("#form_ajax")[0].reset();
    $('.request').each(function(i, obj) {
      document.getElementsByClassName("request")[i].style.display = "";
    });
    $("#modal_tambah").modal('show');
    $('#filter').val('').trigger('change');
    $('#id_number').val('').trigger('change');
  }
</script>
        <script type="text/javascript">
          function filterku(p) {
              if(p == 'doc'){
                document.getElementById("filterDoc").style.display = null;
                document.getElementById("filterCD").style.display = 'none';
                document.getElementById("filterLocker").style.display = 'none';
              } else if(p == 'locker'){
                document.getElementById("filterDoc").style.display = 'none';
                document.getElementById("filterCD").style.display = 'none';
                document.getElementById("filterLocker").style.display = null;
              } else if(p == 'cd'){
                document.getElementById("filterDoc").style.display = 'none';
                document.getElementById("filterCD").style.display = null;
                document.getElementById("filterLocker").style.display = 'none';
              } else {
                document.getElementById("filterDoc").style.display = 'none';
                document.getElementById("filterCD").style.display = 'none';
                document.getElementById("filterLocker").style.display = 'none';
              }
            }
          function book_tags() {
            var p = document.getElementById("tags").value;
                $.ajax({
                    url: '<?php echo base_url(); ?>Transaction/getBookTags/',
                    data: 'tags='+p,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_number").html(msg);
                        console.log(msg);
                    }
                });
            }
          function book_number(p) {

                $.ajax({
                    url: '<?php echo base_url(); ?>Transaction/getBookNumber/',
                    data: 'id='+p,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#dnId").html(msg);
                        cek_booked(p);
                    }
                });
            }
          function cek_booked(p) {
                $.ajax({
                    url: '<?php echo base_url(); ?>Transaction/cek_booked/',
                    data: 'id='+p,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#cek-booked").html(msg);

                    }
                });
            }
          function simpan_cart(){
              var a = '<?= $this->uri->segment(3)?>';
              var srId = $('#srId').val();
              $.ajax(
                {
                  url : '<?php echo base_url(); ?>Transaction/add_to_cart',
                  type: 'post',
                  data : $('#form_ajax').serialize(),
                  success: function(msg){
                    if(srId != ''){
                      $.ajax(
                        {url: "<?= base_url('Transaction/save_edit_request/"+srId+"/7') ?>", 
                        success: function(result){
                      }});
                    }
                    window.location = '<?php echo base_url(); ?>Transaction/detail_anggota/'+a;
                  }
                }
              )
            }
          function delete_cart(p){
            var a = '<?= $this->uri->segment(3)?>';
              $.ajax(
                {
                  url: '<?php echo base_url(); ?>Transaction/delete_cart/'+p,
                  type: 'POST',
                  success: function(msg){
                    window.location = '<?php echo base_url(); ?>Transaction/detail_anggota/'+a;
                  }
                }
              )
            }
        </script>