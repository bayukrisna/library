        <div class="box box-info">
            
            <div class="box-body">
              <table class="table">
        <tr>


            <td width="15%" class="left_column">Nama Mahasiswa <font color="#FF0000">*</font></td>
            <td>:  <?php echo $mahasiswa ?> </td>
      
           <td class="left_column" width="25%">NIM <font color="#FF0000">*</font></td>
            <td>:  <?php echo $id_mahasiswa ?>
                                     </td>
                                  
           
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%" value=>Jenis Kelamin <font color="#FF0000">*</font></td>
            <td width="25%">:       </td>
            <td class="left_column" width="15%">Ranking <font color="#FF0000">*</font></td>
            <td>:
                                     </td>
        </tr>
        <tr>
            <td class="left_column">Nomor Telephone</td>
            <td>: </td>
            <td class="left_column">Program Studi <font color="#FF0000">*</font></td>
            <td>:
           
        </table>
            </div>
            <!-- /.box-body -->
          </div>
          <input type="hidden" name="id_mahasiswa" id="id_mahasiswa" value="<?php echo $id_mahasiswa ?>"> 
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
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody id="show_data"> 

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
                        <input type="text" class="form-control" id="id_mhsa" name="id_mhsa" value="<?php echo $id_mahasiswa ?>" placeholder="" readonly="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Nama Mahasiswa</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_mhsa" value="<?php echo $mahasiswa ?>" placeholder="" readonly="">
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
                        <input type="text" class="form-control" readonly="" id="biayaa" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Tgl Pembayaran</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran" placeholder="" 
                        value="<?php echo date('d-m-Y'); ?>">
                      </div>
                    </div>
                    <a class="tombol-simpan btn btn-info" >Simpan</a>
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
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
    tampil_data_mahasiswa();
        function tampil_data_mahasiswa(){
            var id_mahasiswa = document.getElementById("id_mahasiswa").value;
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>finance/data_pembayaran_mahasiswa',
                async : false,
                data : {id_mahasiswa:id_mahasiswa},
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var o=1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+o+++'</td>'+
                                '<td>'+data[i].id_mahasiswa+'</td>'+
                                '<td>'+data[i].id_mahasiswa+'</td>'+
                                '<td>'+data[i].id_mahasiswa+'</td>'+
                                '<td>'+data[i].total_biaya+'</td>'+
                                '<td>'+data[i].tanggal_pembayaran+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a  class="btn btn-info btn-xs item_edit" data="'+data[i].id_mahasiswa+'">Edit</a>'+' '+
                                    '<a  class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_mahasiswa+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }
        $(document).ready(function(){
        $(".tombol-simpan").click(function(){
            var pembayaran = document.getElementById("pembayaran").value;
            var jenis_pembayaran = document.getElementById("jenis_pembayaran").value;
            var data = $('.form-pembayaran').serialize();
            if (pembayaran != "" && jenis_pembayaran!="" ) {
                $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>finance/tambah_pembayaran',
                data: data,
                success: function() {
                    tampil_data_mahasiswa();
                    myahai();
                    $('#modal-default').modal('hide');

                }
            });
            }else{
                alert('Anda harus mengisi data dengan lengkap !');
            }
            
            
        });
    });
        function myahai(){
             $('#biayaa').val('');
             $('#pembayaran').val('');
             $('#jenis_pembayaran').val('');
        }
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