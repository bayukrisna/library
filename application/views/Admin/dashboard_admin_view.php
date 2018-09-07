<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <div class="info-box bg-aqua"<?php if($informasi == null){
            echo 'style="display: none"';
          }
          ?>>
            <span class="info-box-icon"><i class="glyphicon glyphicon-info-sign"></i></span>
            
            <div class="info-box-content">
              <span class="info-box-text"> <b> <i>NEW INFO ! </i></b></span>
              <span class="info-box-number"><?php foreach ($informasi as $data) { echo $data->judul_info; ?>
                
              </span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                    <a href="" style="color: white" data-toggle="modal" data-target="#modal_view<?php echo $data->id_info; ?>"> <?php echo substr($data->deskripsi_info,0,100); ?> ... </a>
                    <a class="pull-right" style="color: white" href="<?php echo base_url(); ?>informasi" ><u><i> Read More</i></u> </a>
                  </span>
             
                <?php } ?>

            </div>
        </div>
      </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $dashboard['jml_user']; ?></h3>

              <p>Jumlah User</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
        
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
          <!-- /.box -->

          <!-- quick email widget -->
          
            
          </div>

        </section>

        <?php 
        foreach($informasi as $i):
        ?>
        <div class="modal fade" id="modal_view<?php echo $i->id_info;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Detail Informasi</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      
                      <table class="table">
      <tr>
          <td class="left_column" style="width:20%">Judul </td>
            <td>: <?php echo $i->judul_info; ?>   
            </td>
        </tr>
        <tr>
          <td class="left_column">Deskripsi </td>
            <td>: <?php echo $i->deskripsi_info; ?>          </td>
        </tr> 
        <tr>
          <td class="left_column">Pengirim </td>
            <td>: <?php echo $i->pengirimh; ?>          </td>
        </tr> 
         <tr>
          <td class="left_column">Tanggal Terbit </td>
            <td>: <?php echo $i->tgl_info; ?>          </td>
        </tr> 
        
    </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
        

    <?php endforeach;?>