

    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Kelas Perkuliahan</h3>
            </div>
            <div class="box-body">
              <table class="">
                <tbody>
                  <form method="get" action="<?php echo base_url("kelas_perkuliahan/filter_kp/")?>">
                  <tr>
                    <th>Filter</th>
                  </tr>
                  <tr>                                                                    
                    <td>Program Studi</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      <select name="id_prodi" onchange="return get_prodi_periode2(this.value)">
                        <option value="">-- Semua --</option>
                        <?php 

                                        foreach($getProdi as $row)
                                        { 
                                          echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                                        }
                                    ?>
                      </select>

                    </td>                                            
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semester</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="id_periode" id="id_periode2">
                        <option value="">-- Semua --</option>
              
                      </select>
                    </td>
                    <td>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="Cari">  
                    </td>

                  </tr>
                  
                </tbody>
              </table>
                      
               </form>
               <br>

              <table id="example3" class="table2 table-bordered table-striped">
                <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>kelas_perkuliahan/page_tambah"><i class="fa fa-plus"></i> Tambah Kelas</a> <br> <br>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode MK</th>
                  <th>Nama MK</th>
                  <th>Nama Kelas</th>
                  <th style="width: 15px;">SKS</th>
                  <th>Nama Dosen</th>
                  <th>Jumlah Mahasiswa</th>
                  <th>Aksi</th>
                </tr>
                 
                </thead>

                <tbody>

                <?php 
                $no = 0;
                 $alert = "'Apakah anda yakin menghapus data ini ?'";

                foreach ($kp as $data) { 
                  $total_mahasiswa = $this->db->query("SELECT count(*) AS total FROM tb_kelas_mhs WHERE id_kp = '$data->id_kp'")->row();
                  $nama_dosen = $this->db->query("SELECT nama_dosen AS abc FROM tb_kp JOIN tb_kelas_dosen ON tb_kelas_dosen.id_kp = tb_kp.id_kp JOIN tb_dosen ON tb_dosen.id_dosen = tb_kelas_dosen.id_dosen WHERE tb_kp.id_kp = '$data->id_kp'")->row();

                  echo '                  
                <tr>
                  <td>'.++$no.'</td>
                  <td><a href="'.base_url('kelas_perkuliahan/detail_kelas/'.$data->id_kp).'">'.$data->kode_matkul.'</a></td>
                  <td>'.$data->nama_matkul.'</td>
                  <td>'.$data->nama_kelas.'</td>
                  <td>'.$data->bobot_matkul.'</td>
                  <td>'.$nama_dosen->abc.'</td>
                  <td>'.$total_mahasiswa->total.'</td>
                  <td>
                        <a href="'.base_url('kelas_perkuliahan/hapus_kp/'.$data->id_kp).'" class="btn btn-danger btn-sm" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus Kelas</span></a>
                         <a href="'.base_url('kelas_perkuliahan/detail_kp/'.$data->id_kp).'" class="btn btn-warning  btn-sm"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit Kelas </span></a>
                  </td>
                  </tr>
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
      </div>
      <!-- /.row -->
    </section>
    
        <div class="modal fade" id="modal_view" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Kelas Perkuliahan</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('kelas_perkuliahan/save_kp'); ?>
                      <table class="table">
                         <tr>
            <td class="left_column" width="30%">Program Studi <font color="#FF0000">*</font></td>
            <td colspan="9">:  
            <select name="id_prodi" id="id_prodi" class="validate[required]" onchange="return get_prodi_periode(this.value)" required="">
              <option value=""> Pilih Prodi </option>
           <?php 

                            foreach($getProdi as $row)
                            { 
                              echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                            }
                            ?>
        </select>     </td>
        </tr>
        <tr>
            <td class="left_column" width="20%">Semester <font color="#FF0000">*</font></td>
            <td colspan="9">:  
            <select name="id_periode" id="id_periode" class="validate[required]" required="">
            <option value=""> Pilih Semester </option>
        </select>     </td>
        </tr>
        <tr>
          <td class="left_column">Mata Kuliah  <font color="#FF0000">*</font></td>
            <td colspan="9">: 
      <input type="text" name="nama_matkul" id="nama_matkul" class="validate[required] text-input ui-autocomplete-input" size="20"  style="width: 50%;" required=""><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>            <input type="hidden" name="kode_matkul" id="kode_matkul" value="" > 
            </td>
    </tr>

        <tr>
          <td class="left_column">Nama Kelas <font color="#FF0000">*</font>
            </td>
          <td colspan="9">: 
      <input type="text" name="nama_kelas" id="nama_kelas" class="validate[required] text-input"  size="5" style="width: 40%;" required=""></td>
        </tr> 
        <tr>
          <td class="left_column">Bahasan</td>
            <td colspan="9">: 
      <textarea wrap="soft" name="bahasan" id="bahasan" class="text-input" rows="5" cols="50" maxlength="200"></textarea></td>
        </tr>
         <tr>
            <td class="left_column">Nama Dosen <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="nama_dosen" id="nama_dosen" class="validate[required] text-input" maxlength="50" size="50" style="width:80%" required="">
              <input type="hidden" name="id_dosen" id="id_dosen" class="validate[required] text-input" maxlength="20" size="40" style="width:80%" required=""></td>
        </tr> 
        <tr>
            <td class="left_column">Rencana</td>
            <td>: 
            <input type="text" name="rencana" id="rencana" class="text-input" maxlength="3" size="2"  style="width:10%" value="0" onkeyup="sum();">       
            </td>
        </tr>
        <tr>
            <td class="left_column">Realisasi</td>
            <td>: 
            <input type="text" name="realisasi" id="realisasi" class="text-input" maxlength="3" size="2" style="width:10%" value="0">  
            </td>
        </tr>
        <tr>
            <td class="left_column">Bobot (sks)</td>
            <td>: 
            <input type="text" name="bobot_dosen" id="bobot_dosen" class="text-input" maxlength="3" size="2"  style="width:10%; background-color: #E0E0E0;"  readonly>         
            </td>
        </tr>
        <tr>
            <td class="left_column">Jenis Evaluasi</td>
            <td>: 
            <input type="text" name="jenis_evaluasi" id="jenis_evaluasi" class="text-input" size="2"  style="width:40%" >         
            </td>
            <input type="hidden" name="id_kp" id="id_kp" class="text-input" maxlength="3" size="2"  style="width:10%" value="<?php echo $this->uri->segment(3); ?>"> 
            
        </tr>
        <tr>
         <td class="left_column">Tanggal Mulai Efektif</td>
            <td colspan="9">:
        <input type="date" name="tgl_mulai" id="tgl_mulai" class="text-input hasDatepicker" maxlength="50" size="50" style="width:50%">            </td>
        </tr>
        <tr>
          <td class="left_column">Tanggal Akhir Efektif 
         </td>
         <td colspan="9">:
        <input type="date" name="tgl_akhir" id="tgl_akhir" class="text-input hasDatepicker" maxlength="50" size="50" style="width:50%">            </td>
        </tr>
                  <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info">Simpan</button></td>
                  </tr>
              <?php echo form_close();?>

                        </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
<script type="text/javascript">
            function get_prodi_periode(p) {
                var id_prodi = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>kurikulum/get_prodi_periode/'+id_prodi,
                    data: 'id_prodi='+id_prodi,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_periode").html(msg);
                    }
                });
            }
</script>
<script type="text/javascript">
            function get_prodi_periode2(p) {
                var id_prodi = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>kurikulum/get_prodi_periode/'+id_prodi,
                    data: 'id_prodi='+id_prodi,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_periode2").html(msg);
                    }
                });
            }
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <script>
       document.getElementById("nama_matkul").style.visibility = 'visible';

    jQuery(document).ready(function($){
    $('#nama_matkul').autocomplete({
      source:'<?php echo base_url(); ?>kurikulum/get_autocomplete', 
      minLength:1,
      select: function(event, ui){
        $('#nama_matkul').val(ui.item.label)  ;
        $('#kode_matkul').val(ui.item.id);
        $('#bobot_matkul').val(ui.item.bobot);
        $('#bobot_tatap_muka').val(ui.item.btm);
        $('#bobot_praktikum').val(ui.item.bp);
        $('#bobot_simulasi').val(ui.item.bs);
        $('#bobot_praktik_lapangan').val(ui.item.bpl);
      }
    });    
  });

  </script>