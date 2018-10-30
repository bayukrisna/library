          <div class="box">
            <div class="form-horizontal">
            <div class="box-body">
                <table id="example1" class="table2 table-hover table-striped table-condensed" >
                  <thead>
                  <tr>
                    <th width="5%">#</th>
                    <th>Name</th>
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
                      $datetime2 = date_create($items->due_date);
                      $interval = date_diff($datetime1, $datetime2);
                      $due_date = $interval->format('%r%a');
                      $i++;
                    ?>
                  <tr>
                    <td><?= $i?></td>
                    <td><a href="<?= base_url('Anggota/detail_anggota/'.$items->id_user) ?>"><?= $items->username; ?></a></td>
                    <td><?= $items->no_trans_borrowing ?></td>
                    <td><?= $items->title ?></td>
                    <td><?= $items->id_number.'-'.$items->book_number?></td>
                    <td><?= $items->date_borrow?></td>
                    <td <?php if($due_date < 0 && $items->borrowing_status == 'BORROWED'){echo 'style="color: red"';} ?>><?= $items->due_date?></td>
                    <td><?= $items->borrowing_status?></td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>