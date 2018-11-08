<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lost Book Report</h3><br>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <input type="text" name="username" class="form-control" id="username">
                      <input type="hidden" name="userId" class="form-control" id="userId">
                    <br>
                  <p class="btn btn-info" onclick="tampil()">Tampilkan</p>

                </div>
                    <br>

                    
                  </div>

                </div>
                

              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>
      <div class="box">
        <div class="box-body" id="employee_table">
          
            <table id="example" class="">
              <thead>
                  <tr>
                      <th width="1%">No</th>
                <th>No Inventory</th>
                <th>DDC</th>
                <th>Subject</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Publication Year</th>
                <th>ISBN</th>
                  </tr>
              </thead>
          </table>
          
        </div>
      </div>
      <button type="button" onclick="cek()" name="" id="" class="btn btn-success">Export Excel </button>  
    </div>
  </div>
</section>
<script type="text/javascript">
  jQuery(document).ready(function($){
    $('#username').autocomplete({
      source:'<?php echo base_url(); ?>Transaction/autocomplete_user', 
      minLength:1,
      select: function(event, ui){
        $('#username').val(ui.item.label);
        $('#userId').val(ui.item.id);
        
      }
    });    
  });
    function tampil(){
        $.ajax({
                    url: '<?php echo base_url(); ?>Report/show_lost/',
                    data: 'userId='+document.getElementById("userId").value,
                    type: 'POST',
                    dataType: 'json',
                    success:function(msg){
                    $('#example').DataTable( {
                        data:           msg,  
                        deferRender:    true,
                        scrollCollapse: true,
                        scroller:       true,
                        "autoWidth": true
                    } );
                    },
                    error:function (){}
                });
    }
    function cek(){
        var a = document.getElementById("userId").value;
        window.location = '<?php echo base_url(); ?>Report/export_lost/'+a;
    }
</script>