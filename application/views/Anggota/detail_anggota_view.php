      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="form-horizontal">
            <div class="box-body">
                <table class="table" align="center">
                  <h4 align="center"><b><?= $data->username; ?></b></h4>
                  <tr>
                    <td width="60px">Status </td><td>: <?= $data->user_status; ?></td>
                    <td width="10px">Sex </td><td>: <?= $data->sex; ?></td>
                    <td width="102px">Address </td><td>: <?= $data->address_user; ?></td>
                    <td rowspan="3" width="100px"><img height="100" width="100" class="pull-right" width="40%" src="<?php echo base_url(); ?>uploads/" alt="Photo" onerror="this.src='<?php echo base_url();?>uploads/book.jpg'" src="#" alt="Your Image" ></td>
                  </tr>
                  <tr>
                    <td>City</td><td>: <?= $data->city_user; ?></td>
                    <td>Zip</td><td>: </td>
                    <td>Email</td><td>: <?= $data->email_user; ?></td>
                  </tr>
                  <tr>
                    <td>Phone</td><td>: <?= $data->no_telp_user; ?></td>
                    <td>Mobile</td><td>: </td>
                    <td>User Category</td><td>: <?= $data->category; ?></td>
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
                      $datetime2 = date_create($items->due_date);
                      $interval = date_diff($datetime1, $datetime2);
                      $due_date = $interval->format('%r%a');
                      $i++;
                    ?>
                  <tr>
                    <td><?= $i?></td>
                    <td><?= $items->no_trans_borrowing ?></td>
                    <td><?= $items->title ?></td>
                    <td><?= $items->id_number.'-'.$items->book_number?></td>
                    <td><?= $items->date_borrow?></td>
                    <td <?php if($due_date < 0 && $items->borrowing_status == 'BORROWED'){echo 'style="color: red"';} ?>><?= $items->due_date?></td>
                    <td><?= $items->borrowing_status?></td>
                    <td> <?php if($items->borrowing_status == 'BORROWED'){ ?>  <a href="<?= base_url('Anggota/simpan_return/'.$this->uri->segment(3).'/'.$items->id_detail_borrow.'/'.$items->no_inventory);?>"  class="btn btn-primary btn-xs btn-flat" ><i class="fa fa-reply"></i><span class="tooltiptext">Return</span></a>
                        <a href="" data-toggle="modal" data-target="#modal_deduct<?=$items->id_detail_borrow?>" class="btn btn-danger btn-xs btn-flat" ><i class="fa fa-magic"></i><span class="tooltiptext">Deduct</span></a>
                        <a href="" data-toggle="modal" data-target="#modal_renewal<?=$items->id_detail_borrow?>" class="btn btn-success btn-xs btn-flat" ><i class="fa  fa-recycle"></i><span class="tooltiptext">Renewal</span></a>
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
            <?php echo form_open('Anggota/simpan_peminjaman/'.$this->uri->segment(3), ' method="post" role="form" enctype="multipart/form-data" '); ?>
            <div class="form-horizontal">
            <div class="box-body">
                <table class="table table-striped tab">
                  <!-- <header>
                    <h4 style="text-align: center;"><b>Transaksi</b></h4>
                  </header> -->
                  <input type="hidden" name="no_trans_borrowing" value="<?= $noTrans ?>">
                  <input type="hidden" name="id_user" value="<?= $this->uri->segment(3) ?>">
                  <thead>
                  <tr>
                    <th width="5%">#</th>
                    <th>No Inventory</th>
                    <th>Date of Borrow</th>
                    <th>Due Date</th>
                    <th width="5%"></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $i=0;
                      foreach ($this->cart->contents() as $items) : 
                      $i++;
                    ?>
                  <tr>
                    <td><?= $i?></td>
                    <td><?= $items['id_number'] ?></td>
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
                      <label for="name" class="col-md-3 control-label">Book</label>
                      <div class="col-md-7 col-sm-12 required">
                        <select class="select2" style="width:100%" name="id_number" id="id_number" onchange="book_number(this.value)">
                          <?php foreach ($getBook as $row) {
                            echo '<option value="'.$row->id_number.'">'.$row->title.'</option>';
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
      <div class="modal fade" id="modal_renewal<?= $i->id_detail_borrow?>" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                  <h3 class="modal-title" id="myModalLabel">RENEWAL BOOK</h3>
                </div>
                <div class="modal-body">
                  <?php echo form_open('Anggota/simpan_renewal/'.$this->uri->segment(3), ' method="post" role="form" enctype="multipart/form-data" '); ?>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Due Date</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="hidden" name="id_detail_borrow" class="form-control" value="<?= $i->id_detail_borrow?>">
                          <input type="date" name="due_date" class="form-control" value="<?= $i->due_date?>">
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
          $datetime2 = date_create($i->due_date);
          $interval = date_diff($datetime1, $datetime2);
          $due_date = $interval->format('%a');
        ?>
        <div class="modal fade" id="modal_deduct<?= $i->id_detail_borrow?>" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                  <h3 class="modal-title" id="myModalLabel">DEDUCT BOOK</h3>
                </div>
                <div class="modal-body">
                  <?php echo form_open('Anggota/simpan_deduct/'.$this->uri->segment(3), ' method="post" class="form-horizontal" role="form" enctype="multipart/form-data" '); ?>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Id User</label>
                      <div class="col-md-7 col-sm-12 required">
                          <input type="text" name="id_user" class="form-control" value="<?= $i->id_user?>" readonly>
                          <input type="hidden" name="id_detail_borrow" class="form-control" value="<?= $i->id_detail_borrow?>" readonly>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">No Transaksi</label>
                      <div class="col-md-7 col-sm-12 required">
                          <input type="text" name="no_trans_borrowing" class="form-control" value="<?= $i->no_trans_borrowing?>" readonly>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">No Inventory</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="hidden" name="no_inventory" class="form-control" value="<?= $i->no_inventory?>" >
                          <input type="text" name="" class="form-control" value="<?= $i->id_number.'-'.$i->book_number?>" readonly>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Due Date</label>
                      <div class="col-md-7 col-sm-12 required">
                          <input type="text" name="return_status" class="form-control" value="Late : <?= $due_date?> Days" readonly>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="name" class="col-md-3 control-label">Deduct</label>
                      <div class="col-md-7 col-sm-12 required">
                          <input type="text" name="deduct" class="form-control" value="">
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
          function book_number(p) {

                $.ajax({
                    url: '<?php echo base_url(); ?>Anggota/getBookNumber/',
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
                  url : '<?php echo base_url(); ?>Anggota/add_to_cart',
                  type: 'post',
                  data : $('#form_ajax').serialize(),
                  success: function(msg){
                    window.location = '<?php echo base_url(); ?>Anggota/detail_anggota/'+a;
                  }
                }
              )
            }
          function delete_cart(p){
            var a = '<?= $this->uri->segment(3)?>';
              $.ajax(
                {
                  url: '<?php echo base_url(); ?>Anggota/delete_cart/'+p,
                  type: 'POST',
                  success: function(msg){
                    window.location = '<?php echo base_url(); ?>Anggota/detail_anggota/'+a;
                  }
                }
              )
            }
        </script>