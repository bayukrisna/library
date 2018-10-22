      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <!-- /.box-header --><br>
            <div class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Student Name</label>
                  <div class="col-sm-6">
                    <div class="input-group input-group-sm">
                        <input  type="text" class="form-control" id="username" name="username" value="">
                    <span class="input-group-btn" >
                        <p class="btn fa fa-search" style="background: maroon;color: white" onclick="cari()"></p>
                    </span>
                    </div>
                    <input type="hidden" id="id_user" name="id_user" >
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <script>

       document.getElementById("username").style.visibility = 'visible';
    jQuery(document).ready(function($){
    $('#username').autocomplete({
      source:'<?php echo base_url(); ?>Anggota/autocomplete_user', 
      minLength:1,
      select: function(event, ui){
        $('#username').val(ui.item.label);
        $('#id_user').val(ui.item.id);
        
      }
    });    
  });

    function cari(){
      var a = document.getElementById("id_user").value
      window.location = '<?php echo base_url(); ?>Anggota/detail_anggota/'+a;
    }
  </script>
        