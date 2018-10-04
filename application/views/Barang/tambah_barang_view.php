<div class="row" > 
    <div class="col-md-12" >
        <div >
          <div class="panel panel-danger">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> TAMBAH ASET</div>
            <div class="panel-body" >
              <div class="row" >
                <div class="col-lg-6">
                  <?php echo $this->session->flashdata('message');?>
                  <?php echo form_open('barang/simpan_barang/'.$kategori->id_kategori); ?>
                      <div class="form-group ">
                          <label>Perusahaan (Kepemilikan)</label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="id_perusahaan">
                                  <option value="" selected="selected"> Pilih Perusahaan </option>
                                      <?php 

                                    foreach($getPerusahaan as $row)
                                    { 
                                      echo '<option value="'.$row->id_perusahaan.'">'.$row->nama_perusahaan.'</option>';
                                    }
                                    ?>
                              </select>
                               <input type="hidden" name="id_kategori" class="form-control" id="id_kategori" placeholder="Wajib Diisi" value="<?php echo $kategori->id_kategori; ?>">
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Merk</label>
                          <div class="form-group">
                              <select name="id_merk" id="id_merk" class="select2" style="width:100%" onchange="return get_model(this.value)">
                        
                    
                            </select>
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Model</label>
                          <div class="form-group">
                              <select name="id_model" id="id_model" class="select2" style="width:100%">
                              <option> Pilih Merk terlebih dahulu</option>
                        
                    
                            </select>
                              
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="email">Nama Aset / Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Wajib Diisi" required="" >
                      </div>
                      <div class="form-group">
                        <label for="email">Harga</label>
                        <input type="number" name="harga_barang" class="form-control" id="harga_barang" placeholder="Wajib Diisi" required="" >
                      </div>
                      <div class="form-group">
                        <label for="email">Tanggal Pembelian</label>
                        <input type="date" name="tgl_pembelian" class="form-control" id="tgl_pembelian" placeholder="Wajib Diisi" required="" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group ">
                          <label>Pemasok / Supplier</label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="id_supplier">
                                  <option value="" selected="selected"> Pilih Pemasok </option>
                                      <?php 

                                    foreach($getSupplier as $row)
                                    { 
                                      echo '<option value="'.$row->id_supplier.'">'.$row->nama_supplier.'</option>';
                                    }
                                    ?>
                              </select>
                               
                              
                          </div>
                      </div>
                       
                      <div class="form-group ">
                          <label>Ditempatkan di </label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="id_ruang">
                                  <option value="" selected="selected"> Pilih Ruang </option>
                                      <?php 

                                    foreach($getRuang as $row)
                                    { 
                                      echo '<option value="'.$row->id_ruang.'">'.$row->nama_ruang.'</option>';
                                    }
                                    ?>
                              </select>
                              
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Status </label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="id_status">
                                  <option value="" selected="selected"> Pilih Status </option>
                                      <?php 

                                    foreach($getStatus as $row)
                                    { 
                                      echo '<option value="'.$row->id_status.'">'.$row->status.'</option>';
                                    }
                                    ?>
                              </select>
                              
                              
                          </div>
                      </div>
                      <div class="form-group ">
                          <label>Bisa Dipinjam (Requestable) </label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="requestable">
                                  <option value="Y" selected="selected"> Ya </option>
                                   <option value="N"> Tidak </option>
                                     
                              </select>
                               
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="email">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Isi Bila Ada"></textarea>
                      </div>
                      <br>
                      <br>
                      <br>

                       <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div>

                     
                  <?php echo form_close();?>
              </div></div>
            </div>
          </div>
        </div>
          </div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<script type="text/javascript">
                var id_kategori = document.getElementById('id_kategori').value;

                $.ajax({
                    url: '<?php echo base_url(); ?>barang/get_merk_by_kategori/'+id_kategori,
                    data: 'id_kategori='+id_kategori,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_merk").html(msg);
                    }
                });                       
</script>

<script type="text/javascript">
            function get_model(p) {
                var id_merk = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>barang/get_model_by_merk/'+id_merk,
                    data: 'id_merk='+id_merk,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_model").html(msg);

                    }
                });
            }
</script>