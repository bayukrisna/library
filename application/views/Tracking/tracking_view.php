<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tracking</h3><br>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Inventory</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <input type="text" name="no_inventory" class="form-control" id="no_inventory">
                     </div>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <input type="text" name="title" class="form-control" id="title">
                     </div>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Book Number</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <input type="text" name="book_number" class="form-control" id="book_number">
                    <br>
                  <p class="btn btn-info" onclick="tampil()">Search</p>

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
                      <th width="30%">Title</th>
                      <th>Author</th>
                      <th>Borrower</th>
                      <th width="1%">Date of Borrow</th>
                      <th width="10%">Due Date</th>
                      <th width="1%">Book Number</th>
                  </tr>
              </thead>
          </table>
          
        </div>
      </div>
      <!-- <button type="button" onclick="cek()" name="" id="" class="btn btn-success">Export Excel </button> -->  
    </div>
  </div>
</section>
<script type="text/javascript">
  jQuery(document).ready(function($){
    $('#title').autocomplete({
      source:'<?php echo base_url(); ?>Tracking/autocomplete_title', 
      minLength:3,
      select: function(event, ui){
        $('#title').val(ui.item.label);
      }
    });    
  });
    function tampil(){
      $('#example').dataTable().fnDestroy();
        $.ajax({
                    url: '<?php echo base_url(); ?>Tracking/show_tracking/',
                    data: 'no_inventory='+document.getElementById("no_inventory").value+'&title='+document.getElementById("title").value+'&book_number='+document.getElementById("book_number").value,
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
        window.location = '<?php echo base_url(); ?>Report/export_return/'+a;
    }
</script>