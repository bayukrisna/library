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
                  <?php echo form_open('barang/simpan_barang'); ?>
                      <div class="form-group ">
                          <label>Perusahaan</label>
                          <div class="form-group">
                              <select class="select2" style="width:100%" name="perusahaan">
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
                        
                    
                            </select>
                              
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="email">No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Wajib Diisi" required="" >
                      </div>
                       <div class="form-group">
                        <label for="email">Kota</label>
                        <input type="text" name="kota" class="form-control" id="kota" placeholder="Wajib Diisi" required="" >
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Wajib Disii" required=""></textarea>
                      </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group">
                        <label for="email">Kode Pos</label>
                        <input type="text" name="kodepos" class="form-control" id="kodepos" placeholder="Wajib Diisi" required="" >
                      </div>
                      <div class="form-group">
                        <label for="email">Fax</label>
                        <input type="text" name="fax" class="form-control" id="fax" value="" placeholder="Isi Bila Ada">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="" placeholder="Isi Bila Ada">
                      </div>
                      <div class="form-group">
                        <label for="email">Url</label>
                        <input type="text" name="url" class="form-control" id="url" value="" placeholder="Isi Bila Ada">
                      </div>
                      <div class="form-group">
                        <label for="email">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Isi Bila Ada">  </textarea>
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