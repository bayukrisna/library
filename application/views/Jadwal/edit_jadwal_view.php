<div class="panel panel-primary">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> Edit Jadwal</div>
            <div class="panel-body">
              <div class="row">
         <form  method="post" action="<?php echo base_url(); ?>jadwal/edit_jadwal/<?php echo $jadwal->id_jadwal; ?>" enctype="multipart/form-data">
		<table class="table">
    	  <tr>
          <td class="left_column">Kelas</td>
            <td>: <input type="text" name="nama_kelas" id="nama_kelas" class="text-input" maxlength="80" size="80" style="width:400px" value="<?php echo $jadwal->nama_kelas; ?>">
            <input type="hidden" name="id_kp" id="id_kp" class="text-input" maxlength="80" size="80" style="width:400px" value="<?php echo $jadwal->id_kp; ?>">
            <input type="hidden" name="id_prodi" id="id_prodi" class="text-input" maxlength="80" size="80" style="width:400px" value="<?php echo $jadwal->id_prodi; ?>">
          </td>
        </tr>
        <tr>
          <td class="left_column">Periode <font color="#FF0000">*</font></td>
            <td>: 
      <select name="id_periode" id="id_periode" class="validate[required]" required="">
          <option value="<?php echo $jadwal->id_periode; ?>"> <?php echo $jadwal->semester; ?></option>


          </select>            </td>
        </tr> 
         <tr>
          <td class="left_column">Hari</td>
            <td>: <select name="id_hari" id="id_hari" class="validate[required]" required="" style="width: 100px">
        <option value="<?php echo $jadwal->id_hari; ?>"> <?php echo $jadwal->hari; ?></option>
        <option value="1"> Senin </option>
        <option value="2"> Selasa </option>
        <option value="3"> Rabu </option>
        <option value="4"> Kamis </option>
        <option value="5"> Jumat </option>
        <option value="6"> Sabtu </option>
        <option value="7"> Minggu </option>


      </select>  </td>
        </tr>
         <tr>
          <td class="left_column">Jam Awal</td>
            <td>: <input type="time" name="jam_awal" id="jam_awal" class="text-input" maxlength="80" size="80" style="width:100px" value="<?php echo $jadwal->jam_awal; ?>"></td>
        </tr>
        <tr>
          <td class="left_column">Jam Akhir</td>
            <td>: <input type="time" name="jam_akhir" id="jam_akhir" class="text-input" maxlength="80" size="80" style="width:100px" value="<?php echo $jadwal->jam_akhir; ?>"></td>
        </tr>
        <tr>
          <td class="left_column">Sesi</td>
            <td>: <select name="id_waktu" id="id_waktu" class="validate[required]" required="" style="width: 80px">
        <option value="<?php echo $jadwal->id_waktu; ?>"> <?php echo $jadwal->waktu; ?> </option>
        <option value="1"> Pagi </option>
        <option value="2"> Sore </option>
      </select>  </td>
        </tr>
        <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info" id="MyBtn">Simpan</button></td>
                  </tr>
    </table>
    </form>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>


  <script>
       document.getElementById("nama_kelas").style.visibility = 'visible';

    jQuery(document).ready(function($){
    $('#nama_kelas').autocomplete({
      source:'<?php echo base_url(); ?>jadwal/get_autocomplete_kp', 
      minLength:1,
      select: function(event, ui){
        $('#nama_kelas').val(ui.item.label)  ;
        $('#id_kp').val(ui.item.id);
        $('#id_prodi').val(ui.item.id_prodi);
        get_prodi_periode();
      }
    });    
  });

  </script>

  <script type="text/javascript">
            function get_prodi_periode() {
                var id_prodi = document.getElementById('id_prodi').value;
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


