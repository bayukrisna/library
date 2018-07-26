		<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- /.box-header -->
            <!-- form start --><br>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Mahasiswa</label>

                  <div class="col-sm-6">
                    <div class="input-group input-group-sm">
                		<input type="text" class="form-control" id="nama_mhs" onchange="get_riwayat()" value="">
                    <span class="input-group-btn">
                      <form method="get" action="<?php echo base_url("finance/pembayaran/"); ?>">
						<input type="submit" class="btn btn-primary" value="Cari"> 
                    </span>
              		</div>
                    <input type="text" id="id_mahasiswa" name="id_mahasiswa" >
                  </div>
                  <div>
                  </form>
                  	
                  </div>
                </div>
              </div>
              <!-- /.box-body --
              <!-- /.box-footer -->
            </form>
          </div>
      </div>
      <div class="col-md-12" id="riwayat">
      	<div class="box">
          <div><div class="box-header">
              <h3 class="box-title">Riwayat Pembayaran</h3>

              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>No</th>
                  <th>Nama Mahasiswa</th>
                  <th>Jenis Pembayaran</th>
                  <th>Nama Pembayaran</th>
                  <th>Total Biaya</th>
                  <th>Tanggal Pembayaran</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 0;
                foreach ($riwayat as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td>'.$data->id_mahasiswa.'</td>
                  <td>'.$data->id_biaya.'</td>
                  <td>'.$data->id_mahasiswa.'</td>
                  <td>'.$data->id_mahasiswa.'</td>
                  <td>'.$data->id_biaya.'</td>
                  

       
                ' ;
                
              }
              ?>
            </tbody>
        </table>
        </div>
            </div>
      </div>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
  <script>
  	   document.getElementById("nama_mhs").style.visibility = 'visible';
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

	  function get_riwayat(){
		document.getElementById("riwayat").style.visibility = 'visible';
		}

	function tampil(){
		$.ajax({
                    url: '<?php echo base_url(); ?>finance/get_riwayat',
                    data: 'id_mahasiswa='+$("#id_mahasiswa").val(),
                    type: 'GET',
                    dataType: 'html',
                    success:function(data){
                    // $("#user-availability-status").html(data);
                    },
                    error:function (){}
                });
	}
  </script>
    
        
       <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    