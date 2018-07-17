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
        foreach($data as $i):
        ;
      ?>
      <tr>
        <td><?php echo ++$no; ?></td>
        <td><?php echo $i->id_pendaftaran;?></td>
        <td><?php echo $i->nama_pendaftar;?></td>
        <td><?php echo $i->status_bayar;?></td>
        <td><a href="<?php echo base_url().'uploads/'.$i->bukti_transfer;?>" class="btn btn-info btn-sm" target="_blank">Lihat Bukti</a></td>
                <td><a class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal_edit<?php echo $i->id_pendaftaran;?>"> Konfirmasi</a></td>              
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
  
</div>


<<<<<<< HEAD
    <!-- ============ MODAL ADD BARANG =============== -->
        
    <!--END MODAL ADD BARANG-->

    <!-- ============ MODAL EDIT BARANG =============== -->
    <?php 
        foreach($data as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_pendaftaran;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
            </div>
            <?php echo form_open('finance/konfirmasi/'.$i->id_pendaftaran); ?>
                <div class="modal-body">

                    <div class="form-group">
                      <input type="hidden" name="id_pendaftaran" class="form-control" id="alamat" placeholder="Input Home Address" required="" value="<?php echo $i->id_pendaftaran;?>">
                        <label class="control-label col-xs-3" >ID Daftar Ulang</label>
                        <div class="col-xs-8">
                            <input type="text" name="id_daftar_ulang" class="form-control input-sm pull-left" id="inputEmail3" placeholder="" required="">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                </div>
            <?php echo form_close();?>
            </div>
=======
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
>>>>>>> fe9412ade7919069f3bbf3c16d047e2df5b23380
            </div>
        </div>
<<<<<<< HEAD

    <?php endforeach;?>
    <!--END MODAL ADD BARANG-->
<script>
  $(document).ready(function(){
    $('#mydata').DataTable();
  });
</script>
=======
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

>>>>>>> fe9412ade7919069f3bbf3c16d047e2df5b23380
