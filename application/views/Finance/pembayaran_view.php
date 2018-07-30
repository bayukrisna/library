      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    </style>
      <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- /.box-header -->
            <!-- form start --><br>
            <?php echo form_open('finance/detail_pembayaran'); ?>
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Mahasiswa</label>

                  <div class="col-sm-6">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" value="">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-info">Cari</button>
                    </span>
                    </div>
                    <input type="text" id="id_mahasiswa" name="id_mahasiswa" >
                  </div>
                  <div>
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body --
              <!-- /.box-footer -->
            </div>
            <?php echo form_close();?>
          </div>
      </div>
      <!-- autocomplete -->
     <script> 
      jQuery(document).ready(function($){
      $('#nama_mhs').autocomplete({
        source:'<?php echo base_url(); ?>finance/get_autocomplete', 
        minLength:1,
        select: function(event, ui){
          $('#nama_mhs').val(ui.item.label);
          $('#id_mahasiswa').val(ui.item.id);
          }
        });    
      });  
    </script>
    <script type="text/javascript">
      
    </script>