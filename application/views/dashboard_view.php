 <section class="content">
      <div class="row">     
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo $dashboard['t_perusahaan']?></h3>

              <p>Total Perusahaan</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
            <a href="<?php echo base_url(); ?>perusahaan" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $dashboard['t_barang']?></h3>

              <p>Total Barang</p>
            </div>
            <div class="icon">
              <i class="fa fa-floppy-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>barang/data_aset" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $dashboard['t_merk']?></h3>

              <p>Total Merk</p>
            </div>
            <div class="icon">
              <i class="fa fa-keyboard-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>merk" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $dashboard['t_model']?></h3>

              <p>Total Model</p>
            </div>
            <div class="icon">
              <i class="fa fa-tint"></i>
            </div>
            <a href="<?php echo base_url(); ?>model" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-9 col-xs-6">
        <div class="box">
          <!-- small box -->
          <div class="table-responsive">
            <div class="box-header with-border">
              <h3 class="box-title">RECENT ACTIVITY</h3>
            </div>

              <table id="" class="table" style="text-transform: uppercase;">
                <thead>
                <tr>
                  <th class="col-sm-2" data-field="created_at">Date</th>
                        <th class="col-sm-2" data-field="admin">Admin</th>
                        <th class="col-sm-2" data-field="action_type">Action</th>
                        <th class="col-sm-4" data-field="item">Item</th>
                        <th class="col-sm-2" data-field="target">To</th>
                </tr>
                </thead>
                <tbody>

                
                  
                <?php 
                      $no = 0;
                      foreach($log as $data):
                      ;
                    ?>
                    <tr>
                        <td><?php echo date('M d,  Y h:ia', strtotime($data->waktu_log));?></td>
                        <td><?php echo $data->username;?></td>
                        <td><?php echo $data->aktivitas;?></td>
                        <td><?php echo $data->nama_barang;?></td>
                        <td><?php echo $data->to;?></td>
                    </tr>
                    <?php endforeach; ?>
                
                                </tbody>
              </table>
            </div>
        </div>
      </div>
        