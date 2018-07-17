<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pendaftar</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Pendaftaran</th>
                  <th>Nama Pendaftar</th>
                  <th>Status Pendaftar</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($mahasiswa as $data) {
                  $form_konfirmasi = '';
                $form_close = '';
                $form_konfirmasi .= form_open('finance/konfirmasi/'.$data->id_pendaftaran);
                $form_close .= form_close();

                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>
                  <td name="id_pendaftaran">'.$data->id_pendaftaran.'
                  </td>
                  <td>'.$data->nama_pendaftar.'</td>
                  <td>'.$data->status_bayar.'</td>
                  <td> <a href="'.base_url('uploads/'.$data->bukti_transfer).'" class="btn btn-info btn-sm" target="_blank">Lihat Bukti</a> <td> 
                  </td>
                  
                  <td>
                   <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_ubah" onclick="prepare_update_surat('.$data->id_pendaftaran.')">Konfirmasi</a>
                  <a href="'.base_url('finance/konfirmasi_gagal/'.$data->id_pendaftaran).'" class="btn btn-success btn-sm" >Data Tidak Valid </a>
                  </td>
                  
                </tr>
        
       
                ' ;
                
              }
              ?>

              <div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="modal_ubahLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url(); ?>finance/konfirmasi/" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_ubahLabel"> Ubah Surat Masuk</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>No. Daftar Ulang</label>
                        <input type="text" name="id_du2" id="id_du2" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Keluar
                    </button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
                </tbody>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <script type="text/javascript">
    function prepare_update_surat(id_pendaftaran)
    {
        
        $('#id_du2').empty();

        $.getJSON('<?php echo base_url(); ?>index.php/tamu/detail_tamu/' + id_pendaftaran, function(data){
           
            $('#id_du2').val(data.id_du2);
        });
    }
</script>

