<div class="row"> 
    <div class="col-md-12">
        <div>
          <div class="panel panel-primary">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> Tambah Dosen</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-6">
                  <?php echo $this->session->flashdata('message');?>
                  <?php echo form_open('master_dosen/save_dosen'); ?>
                      <div class="form-group">
                        <label for="text">Nama Dosen</label>
                        <input type="text" name="nama_dosen" class="form-control" id="nama_dosen">
                         <input type="text" name="id_dosen" class="form-control" id="id_dosen"  value="<?php echo $kd; ?>">
                      </div>
                      <div class="form-group">
                        <label for="number">NIDN / NUP/ NIDK</label>
                        <input type="text" name="kode_dosen" class="form-control" id="kode_dosen">
                      </div>
                      <div class="form-group">
                        <label for="text">NIP</label>
                        <input type="number" name="nip" class="form-control" id="nip">
                      </div>
                      <div class="form-group">
                        <label for="text">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required="">
                            <option value="">Pilih Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                          </select>  
                      </div>
                       <div class="form-group">
                        <label for="text">Agama</label>
                        <select id="agama" name="agama" class="form-control" required="">
                             <option value="">Pilih Agama</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Islam">Islam</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Buddha">Buddha</option>
                              <option value="Konghuchu">Konghuchu</option>
                          </select> 
                      </div>
                       <div class="form-group">
                        <label for="text">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" id="keterangan" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group">
                        <label for="text">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" >
                      </div>
                       <div class="form-group">
                        <label for="text">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Keterangan">
                      </div>
                       <div class="form-group">
                        <label for="text">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Keterangan">
                      </div>
                       <div class="form-group">
                        <label for="text">No. Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" id="no_telepon" placeholder="Masukkan Keterangan">
                      </div>
                       <div class="form-group">
                        <label for="text">Jenis Dosen</label>
                        <input type="text" name="jenis_dosen" class="form-control" id="jenis_dosen" placeholder="Masukkan Keterangan">
                      </div>
                      <button type="submit" class="btn btn-info pull-right">Simpan</button>
                      
                  <?php echo form_close();?>
              </div></div></div>
            </div>
          </div>
        </div>
          </div>
        </div></div>