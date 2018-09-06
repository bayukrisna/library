<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <div class="col-md-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="glyphicon glyphicon-info-sign"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> <b> <i>NEW INFO ! </i></b></span>
              <span class="info-box-number"><?php foreach ($informasi as $data) { echo $data->judul_info; ?>
                
              </span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                    <?php echo substr($data->deskripsi_info,0,100); ?> ... 
                    <a class="pull-right" style="color: white" href="" data-toggle="modal" data-target="#modal_view<?php echo $data->id_info; ?>"><u><i> Read More</i></u> </a>
                  </span>
             
                <?php } ?>

            </div>
        </div>
      </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $dashboard['belum_bayar']; ?></h3>

              <p>Transfer Registrasi Masuk</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url(); ?>finance/data_registrasi" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $dashboard['lunas']; ?><sup style="font-size: 20px"></sup></h3>

              <p>Registrasi Lunas</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url(); ?>finance/data_lunas" class="small-box-footer">Lihat Data<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
          <!-- /.box -->

          <!-- quick email widget -->
          
            
          </div>

        </section>