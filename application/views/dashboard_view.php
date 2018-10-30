 <section class="content">
      <div class="row">     
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo $dashboard['t_document']?></h3>

              <p>Total Document</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
            <a href="<?php echo base_url(); ?>books" class="small-box-footer">Read More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $dashboard['t_late']?></h3>

              <p>Total Late</p>
            </div>
            <div class="icon">
              <i class="fa fa-floppy-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>kategori" class="small-box-footer">Read More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6" style="visibility: hidden;">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $dashboard['t_late']?></h3>

              <p>Total Merk</p>
            </div>
            <div class="icon">
              <i class="fa fa-keyboard-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>merk" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6" style="visibility: hidden;">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $dashboard['t_late']?></h3>

              <p>Total Model</p>
            </div>
            <div class="icon">
              <i class="fa fa-tint"></i>
            </div>
            <a href="<?php echo base_url(); ?>model" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
        