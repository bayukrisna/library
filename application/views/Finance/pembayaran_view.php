		<style type="text/css">
			.ui-autocomplete {
  z-index: 215000000 !important;
}
		</style>
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
                		<input type="text" class="form-control" id="nama_mhs" value="">
                    <span class="input-group-btn">
						<i class="btn btn-info"  onclick="tampil_data_mahasiswa()">Cari</i>
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
            </form>
          </div>
      </div>
      <div class="col-md-12" id="riwayat"  style="visibility: hidden;">
      	<div class="box">
          <div><div class="box-header">
              <h3 class="box-title">Riwayat Pembayaran</h3>

              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i> Tambah
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
                <tbody id="show_data">

                <!-- <?php 
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
              ?> -->
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
	      $('#id_mhsa').val(ui.item.id);
	      $('#nama_mhsa').val(ui.item.label);
	    }
	  });    
	});

	  jQuery(document).ready(function($){
	  $('#nama_mhsa').autocomplete({
	    source:'<?php echo base_url(); ?>finance/get_autocomplete', 
	    minLength:1,
	    select: function(event, ui){
	      $('#nama_mhsa').val(ui.item.label);
	    }
	  });    
	});

	  function get_pembayaran(p) {
                var jenis_biaya = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>finance/get_dropdown_pembayaran/'+jenis_biaya,
                    data: 'jenis_biaya='+jenis_biaya,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#pembayaran").html(msg);

                    }
                });
            }
        function get_biaya(p) {
                var id_biaya = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>finance/get_biaya_pembayaran/'+id_biaya,
                    data: 'id_biaya='+id_biaya,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#biaya").html(msg);

                    }
                });
            }

	  function get_riwayat(){
		document.getElementById("riwayat").style.visibility = 'visible';
		tampil_data_mahasiswa();
		}
	  function tampil_data_mahasiswa(){
	  	document.getElementById("riwayat").style.visibility = 'visible';
	  	var id_mahasiswa = $('#id_mahasiswa').val();

		    $.ajax({
		        type  : 'get',
		        url   : '<?php echo base_url()?>finance/data_pembayaran_mahasiswa',
		        data     : 'id_mahasiswa='+id_mahasiswa,
		        dataType : 'html',
		        success : function(data){
		            $('#show_data').html(data);
		        }

		    });
		}

		$(document).ready(function(){
		$(".tombol-simpan").click(function(){
			var data = $('.form-pembayaran').serialize();
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url()?>finance/tambah_pembayaran',
				data: data,
				success: function() {
					tampil_data_mahasiswa();
					myahai();

				}
			});
		});
	});
		function myahai(){
			 $('#biayaa').val('');
  			 $('#pembayaran').val('');
  			 $('#jenis_pembayaran').val('');
		}
  </script>
    
        
       <div class="modal fade" id="modal-default" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pembayaran</h4>
              </div>
              <div class="modal-body">
                
	            <div class="form-horizontal">
	            <form method="post" class="form-pembayaran">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-3 control-label">ID Mahasiswa</label>

	                  <div class="col-sm-8">
	                    <input type="text" class="form-control" id="id_mhsa" name="id_mhsa" placeholder="" readonly="">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-3 control-label">Nama Mahasiswa</label>

	                  <div class="col-sm-8">
	                    <input type="text" class="form-control" id="nama_mhsa" placeholder="" readonly="">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-3 control-label">Jenis Pembayaran</label>

	                  <div class="col-sm-8">
	                  	 <select id="jenis_pembayaran" class="form-control" required="" name="jenis_pembayaran" onchange="return get_pembayaran(this.value)">
                    	 <option value="">Pilih Jenis Pembayaran</option>   
	                    	<?php 

                  				foreach($getJenisPembayaran as $row)
		                  { 
		                    echo '<option value="'.$row->jenis_biaya.'">'.$row->jenis_biaya.'</option>';
		                  }
		                  ?>
                  </select>
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-3 control-label">Pembayaran</label>

	                  <div class="col-sm-8">
	                  	<select class="form-control" required="" name="pembayaran" id="pembayaran" onchange="return get_biaya(this.value)"> 
                    	 <option value="">Pilih Jenis Pembayaran dulu</option>   
                    	</select>
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-3 control-label">Biaya</label>

	                  <div class="col-sm-8" id="biaya">
	                    <input type="text" class="form-control" readonly="" id="biayaa">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-3 control-label">Tgl Pembayaran</label>

	                  <div class="col-sm-8">
	                    <input type="text" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran" placeholder="" 
	                    value="<?php echo date('d-m-Y'); ?>">
	                  </div>
	                </div>
	                <a class="tombol-simpan btn btn-info" data-dismiss="modal">Simpan</a>
	              </div>
	              <!-- /.box-body -->
	              <!-- /.box-footer -->
	              </form>
	            </div>
          </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    