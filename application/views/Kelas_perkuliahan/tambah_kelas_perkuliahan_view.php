<div class="panel panel-primary">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> Tambah Kelas Perkuliahan</div>
            <div class="panel-body">
              <div class="row">
         <?php echo form_open('kelas_perkuliahan/save_kp'); ?>
    <table class="table">

        <tr>
            <td class="left_column" width="20%">Program Studi <font color="#FF0000">*</font></td>
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
      <input type="text" name="nama_matkul" id="nama_matkul" class="validate[required] text-input ui-autocomplete-input" size="20"  style="width: 50%;" required=""><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>            <input type="text" name="id_detail_kurikulum" id="id_detail_kurikulum" value="" > 
       <input type="hidden" name="id_kp" id="id_kp" value="<?php echo $kodeunik; ?>" >
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
    </form>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
  <script>
       document.getElementById("nama_matkul").style.visibility = 'visible';

    jQuery(document).ready(function($){
    $('#nama_matkul').autocomplete({
      source:'<?php echo base_url(); ?>kelas_perkuliahan/get_autocomplete_mk', 
      minLength:1,
      select: function(event, ui){
        $('#nama_matkul').val(ui.item.label)  ;
        $('#kode_matkul').val(ui.item.id);
        $('#bobot_dosen').val(ui.item.bobot);
        $('#nama_kurikulum').val(ui.item.kurikulum);
        $('#id_detail_kurikulum').val(ui.item.idk);
      }
    });    
  });

  </script>

  <script>
       document.getElementById("nama_dosen").style.visibility = 'visible';

    jQuery(document).ready(function($){
    $('#nama_dosen').autocomplete({
      source:'<?php echo base_url(); ?>kelas_perkuliahan/get_autocomplete', 
      minLength:1,
      select: function(event, ui){
        $('#nama_dosen').val(ui.item.label)  ;
        $('#id_dosen').val(ui.item.id);
      }
    });    
  });

  </script>


