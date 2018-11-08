<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                <th>Qty</th>
            </tr>
        </thead>
    </table>
        </div>
      </div>
      <button type="button" onclick="cek()" name="" id="" class="btn btn-success">Export Excel </button>  
    </div>
  </div>
</section>
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
        $('#example').DataTable( {
            data:           <?= $book; ?>,  
            deferRender:    true,
            scrollCollapse: true,
            scroller:       true,
            "autoWidth": true
        } );
        
    } );
    function cek(){
        window.location = '<?php echo base_url(); ?>Report/export_excel';
    }
</script>