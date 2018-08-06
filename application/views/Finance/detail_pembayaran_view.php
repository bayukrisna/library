      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<div class="box box-info">
            
            <div class="box-body">
              <table class="table">
        <tr>


            <td width="15%" class="left_column">Nama Mahasiswa <font color="#FF0000">*</font></td>
            <td>:  <?php echo $data->nama_mahasiswa ?> </td>
      
           <td class="left_column" width="25%">NIM <font color="#FF0000">*</font></td>
            <td>:  <?php echo $data->id_mahasiswa ?>
                                     </td>
                                     <input type="hidden" name="js_ranking" id="js_ranking" value="<?php echo $data->grade; ?>">
                                  
           
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%" value=>Jenis Kelamin <font color="#FF0000">*</font></td>
            <td width="25%">: <?php echo $data->jenis_kelamin ?>       </td>
            <td class="left_column" width="15%">Ranking <font color="#FF0000">*</font></td>
            <td>: <?php echo $data->grade; ?>
                                     </td>
        </tr>
        <tr>
            <td class="left_column">Nomor Telephone</td>
            <td>: <?php echo $data->no_telepon ?></td>
            <td class="left_column">Program Studi <font color="#FF0000">*</font></td>
            <td>: <?php echo $data->nama_prodi; ?></td>
          </tr>
           <tr>
            <td class="left_column">Kelas </td>
            <td>: <?php echo $data->waktu ?></td>
            <input type="hidden" name="waktu" id="waktu" value="<?php echo $data->waktu ?>">
          </tr>
        </table>
            </div>
            <!-- /.box-body -->
          </div>
          <input type="hidden" name="id_mahasiswa" id="id_mahasiswa" value="<?php echo $data->id_mahasiswa ?>"> 
    <section class="content">
      <div class="row">
        
          <div class="box">
            <div class="box-header">
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
                  <!-- <th>Aksi</th> -->
                </tr>
                </thead>
                <tbody> 
                  <?php 
                $no = 0;
                foreach ($data_pembayaran as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td>'.$data->nama_mahasiswa.'</td>
                  <td>'.$data->jenis_biaya.'</td>
                  <td>'.$data->nama_biaya.' '.$data->kode_matkul.'</td>
                  <td>'.$data->t_biaya.'</td>
                  <td>'.$data->tanggal_pembayaran.'</td>
                  

       
                ' ;
                
              }
              ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
      <!-- /.row -->
    </section>
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
        <?php echo form_open('finance/simpan_pembayaran/'.$this->uri->segment(3));?>
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
                <?php $cart_check = $this->cart->contents();
                if(empty($cart_check)) {
                echo '<button type="submit" class="btn btn-success" disabled>Simpan & Cetak</button>';
                } else {
                  echo '<button type="submit" class="btn btn-success">Simpan & Cetak</button>';
                } ?> 
                
                <?= anchor('finance/clear_cart/'.$this->uri->segment(3),'Reset',['class'=>'btn btn-danger']) ?>         
            <?php echo form_close();?>
      
    </div>

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
                <?php echo form_open('finance/add_to_cart/'.$this->uri->segment(3));?>
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
                        <input type="text" class="form-control" id="id_mhsa" name="id_mhsa" value="<?php echo $data->id_mahasiswa ?>" placeholder="" readonly >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Nama Mahasiswa</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_mhsa" name="nama_mhsa" value="<?php echo $data->nama_mahasiswa ?>" placeholder="" readonly>
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
                    <div class="form-group" id="myText2" style="display: none;">
                      <label for="inputEmail3" class="col-sm-3 control-label">Mata Kuliah</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="krs_mengulang" id="krs_mengulang" value="" placeholder="Input Nama Mata Kuliah">
                        <input type="hidden" class="form-control" readonly="" name="krs_id" id="krs_id"  value="">
                        <input type="hidden" class="form-control" readonly="" name="kode_matkul" id="kode_matkul" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Biaya</label>

                      <div class="col-sm-8" id="biaya">
                        <input type="text" class="form-control" readonly="" name="biaya" id="biayaa" required="" value="">
                        <input type="hidden" class="form-control" readonly="" name="biayaku" id="biayaku" required="" value="">
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
    
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script type="text/javascript">
            jQuery(document).ready(function($){
    $('#krs_mengulang').autocomplete({
      source:'<?php echo base_url(); ?>kurikulum/get_autocomplete', 
      minLength:1,
      select: function(event, ui){
        $('#krs_mengulang').val(ui.item.label)  ;
        $('#krs_id').val(ui.item.bobot);
        $('#kode_matkul').val(ui.item.id);
        var ea = document.getElementById('biayaku').value ;
        var ae = document.getElementById('krs_id').value;
        var result = parseInt(ea) * parseInt(ae);
        document.getElementById('biayaa').value = result;
      }
    });    
  });
  function get_pembayaran(p) {
                var jenis_biaya = p;
                var waktu = document.getElementById("waktu").value;
                $.ajax({
                    url: '<?php echo base_url(); ?>finance/get_dropdown_pembayaran/',
                    data: 'jenis_biaya='+jenis_biaya+'&waktu='+waktu,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#pembayaran").html(msg);

                    }
                });
            }
        function get_biaya(p) {
                var id_biaya = p;
                var grade = document.getElementById('js_ranking').value;
                var kategori = document.getElementById('jenis_pembayaran').value;
                if (kategori == 'KRS'){
                  document.getElementById("myText2").style.display = "";
                } else {
                  document.getElementById("myText2").style.display = "none";
                }
                $.ajax({
                    url: '<?php echo base_url(); ?>finance/get_biaya_pembayaran/'+id_biaya,
                    data: 'id_biaya='+id_biaya,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                      if (kategori == 'Angsuran Tahun 1'){
                          if(grade == 'Ranking 1'){
                          var ea = parseInt(msg) * 0.40;
                          var ae = parseInt(msg) - ea;
                          document.getElementById('biayaa').value = ae;
                        } else if(grade == 'Ranking 2'){
                          var ea = parseInt(msg) * 0.40;
                          var ae = parseInt(msg) - ea;
                          document.getElementById('biayaa').value = ae;
                        } else if(grade == 'Ranking 3'){
                          var ea = parseInt(msg) * 0.25;
                          var ae = parseInt(msg) - ea;
                          document.getElementById('biayaa').value = ae;
                        } else {
                          document.getElementById('biayaa').value = msg;
                        }
                      } else if(kategori == 'KRS'){
                        document.getElementById('biayaku').value = msg;
                      }

                      

                    }
                });
            }
</script>
