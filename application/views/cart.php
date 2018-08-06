<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Front-End Toko Online by Kursus-PHP.com</title>
		
	</head>
	<body>
		<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i> Tambah
              </button>
              <br>
              <br>
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
                <?php echo form_open('anyar/add_to_cart');?>
                  <div class="box-body">
                    <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Tgl Pembayaran</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran" placeholder="" 
                        value="<?php echo date('d-m-Y'); ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Kode Pembayaran</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="kode_pembayaran" name="kode_pembayaran" value="<?= $kodeunik; ?>" placeholder="" readonly="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">ID Mahasiswa</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="id_mhsa" name="id_mhsa" value="" placeholder="" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Nama Mahasiswa</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_mhsa" name="nama_mhsa" value="" placeholder="" >
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
                        <input type="text" class="form-control" readonly="" name="biaya" id="biayaa" required="">
                      </div>
                    </div>
                    <button type="submit">Simpan</button>
                  </div>
                  <!-- /.box-body -->
                  <!-- /.box-footer -->
                  <?php echo form_close();?>

                </div>
          </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
		
		<!-- Tampilkan semua produk -->

		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Pembayaran</th>
					<th>Pembayaran</th>
					<th>Price</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$i=0;
					foreach ($this->cart->contents() as $items) : 
					$i++;
				?>
				<tr>
					<td><?= $i?></td>
					<td><?= $items['name'] ?></td>
					<td><?= $items['jp'] ?></td>
					<td><?= $items['pembayaran'] ?></td>
					<td align="right"><?= number_format($items['price'],0,',','.') ?></td>
					<td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
				</tr>
				
				<?php endforeach; ?>

			</tbody>
			<tfoot>
				<tr>
					<td align="right" colspan="5">Total </td>
					<td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
				</tr>
			</tfoot>

		</table>

		<div align="center">
				<?php echo form_open('anyar/simpan_pembayaran');?>
                <?php 
					$i=0;
					foreach ($this->cart->contents() as $items) : 
					$i++;
				?>
                        <input type="hidden" class="form-control" id="kodeku_pembayaran" name="kodeku_pembayaran" value="<?= $items['kode'] ?>">
                        <input type="hidden" class="form-control" id="id_mhsa" name="id_mhsa" value="<?= $items['idmhsa'] ?>">
                        <input type="hidden" class="form-control" id="tanggal_pembayaran" name="tanggal_pembayaran" value="<?= $items['tgl'] ?>">
                        <input type="hidden" class="form-control" id="total_biaya" name="total_biaya" value="<?= $this->cart->total() ?>">
                <?php endforeach; ?>
                <button type="submit" class="btn btn-success">Simpan & Cetak</button>
                <?= anchor('anyar/clear_cart','Clear Cart',['class'=>'btn btn-danger']) ?>         
            <?php echo form_close();?>
			
		</div>
		
	</body>
</html>
<script type="text/javascript">
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
</script>