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
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>