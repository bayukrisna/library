      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="form-horizontal">
            <div class="box-body">
                <table class="table" align="center">
                  <h4 align="center"><b><?= $data->userUsername; ?></b></h4>
                  <tr>
                    <td width="60px">Status </td><td>: <?= $data->userStatus; ?></td>
                    <td width="10px">Sex </td><td>: <?= $data->sexName; ?></td>
                    <td width="102px">Address </td><td>: <?= $data->userAddress; ?></td>
                    <td rowspan="3" width="100px"><img height="100" width="100" class="pull-right" width="40%" src="<?php echo base_url(); ?>uploads/" alt="Photo" onerror="this.src='<?php echo base_url();?>uploads/book.jpg'" src="#" alt="Your Image" ></td>
                  </tr>
                  <tr>
                    <td>City</td><td>: <?= $data->userCity; ?></td>
                    <td>Zip</td><td>: </td>
                    <td>Email</td><td>: <?= $data->userEmail; ?></td>
                  </tr>
                  <tr>
                    <td>Phone</td><td>: <?= $data->userPhone; ?></td>
                    <td>Mobile</td><td>: </td>
                    <td>User Category</td><td>: <?= $data->ucCategory; ?></td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="alert alert-success" id="success" style="display:none;">
            <strong>Success !!!</strong>
          </div>
          <div class="box">
            <div class="form-horizontal">
            <div class="box-body">
                <table id="example1" class="table2 table-hover table-striped table-condensed" >
                  <header>
                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal_tambah">Tambah</button>
                    <h4 style="text-align: center;"><b>Riwayat Peminjaman</b></h4>
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
                      } else if($items->docId != null){
                        $title = $items->docTitle;
                        $no = $items->docNumber.'-'.$items->dnNumber;
                      } else {
                        $title = 'Locker Key';
                        $no = $items->lockerId;
                      }
                    ?>
                  <tr>
                    <td><?= $i?></td>
                    <td><?= $items->transId ?></td>
                    <td><?= $title ?></td>
                    <td><?= $no?></td>
                    <td><?= $items->transBorrowingDate?></td>
                    <td <?php if($due_date < 0 && $items->tdStatus == '1'){echo 'style="color: red"';} ?>><?= $items->tdDueDate?></td>
                    <td><?= $items->tdStatus?></td>
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
                  <!-- <header>
                    <h4 style="text-align: center;"><b>Transaksi</b></h4>
                  </header> -->
                  <input type="text" name="transId" value="<?= $noTrans ?>">
                  <input type="text" name="userId" value="<?= $this->uri->segment(3) ?>">
                  <thead>
                  <tr>
                    <th width="5%">#</th>
                    <th>Type</th>
                    <th>No</th>
                    <th>Date of Borrow</th>
                    <th>Due Date</th>
                    <th width="5%"></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $i=0;
                      foreach ($this->cart->contents() as $items) :
                      if($items['filter'] == 'cd'){
                        $no = $items['cdId'];
                      } else if($items['filter'] == 'doc'){
                        $no = $items['docId'];
                      } else if($items['filter'] == 'locker'){
                        $no = $items['lockerId'];
                      }
                      $i++;
                    ?>
                  <tr>
                    <td><?= $i?></td>
                    <td><?= $items['filter']?></td>
                    <td><?= $no ?></td>
                    <td><?= date('Y-m-d') ?></td>
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
                echo '<button type="submit" class="btn btn-success" disabled> Simpan </button>';
                
                } else {
                  echo '<button type="submit" class="btn btn-success" > Simpan </button>';

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
                  <h3 class="modal-title" id="myModalLabel">ADD BOOK</h3>
                </div>
                <div class="modal-body">
                  <form id="form_ajax" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Filter</label>
                      <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="filter" id="filter" onchange="filterku(this.value)" required="">
                          <option value=" ">Choose Filter</option>
                          <option value="doc">Document</option>
                          <option value="cd">CD</option>
                          <option value="locker">Locker Key</option>
                        </select>
                      </div>
                  </div>
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
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Book</label>
                      <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="id_number" id="id_number" onchange="book_number(this.value)">
                          <?php foreach ($getBook as $row) {
                            echo '<option value="'.$row->docId.'">'.$row->docTitle.'</option>';
                          }
                          ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Book Number</label>
                      <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="bookNumber" id="bookNumber" >
                        </select>
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
                    <button type="button" onclick="simpan_cart()" class="btn btn-success"><i class="fa fa-plus icon-white"> Renewal </i></button>
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
        ?>
        <div class="modal fade" id="modal_deduct<?= $i->tdId?>" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                  <h3 class="modal-title" id="myModalLabel">RETURN BOOK</h3>
                </div>
                <div class="modal-body">
                  <?php echo form_open('Transaction/simpan_deduct/'.$this->uri->segment(3), ' method="post" class="form-horizontal" role="form" enctype="multipart/form-data" '); ?>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Id User</label>
                      <div class="col-md-7 col-sm-12 required">
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
          function book_number(p) {

                $.ajax({
                    url: '<?php echo base_url(); ?>Transaction/getBookNumber/',
                    data: 'id='+p,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#bookNumber").html(msg);

                    }
                });
            }
          function simpan_cart(){
              var a = '<?= $this->uri->segment(3)?>';
              $.ajax(
                {
                  url : '<?php echo base_url(); ?>Transaction/add_to_cart',
                  type: 'post',
                  data : $('#form_ajax').serialize(),
                  success: function(msg){
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