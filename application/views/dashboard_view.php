 <section class="content">
      <div class="row">     
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo $dashboard['t_document']?></h3>

              <p>Document Total</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
            <a href="<?php echo base_url(); ?>Material/document" class="small-box-footer">Read More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $dashboard['t_cd']?></h3>

              <p>Content Digital Total</p>
            </div>
            <div class="icon">
              <i class="fa fa-floppy-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>Material/cd" class="small-box-footer">Read More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $dashboard['t_document_number']?></h3>

              <p>Eksemplar Total</p>
            </div>
            <div class="icon">
              <i class="fa fa-keyboard-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>Material/document" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $dashboard['t_user']?></h3>

              <p>User Total</p>
            </div>
            <div class="icon">
              <i class="fa fa-tint"></i>
            </div>
            <a href="<?php echo base_url(); ?>Master/member" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
        