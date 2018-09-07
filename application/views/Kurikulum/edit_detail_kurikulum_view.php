<div class="panel panel-primary">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> Edit Kurikulum</div>
            <div class="panel-body">
              <div class="row">
         <form  method="post" action="<?php echo base_url(); ?>kurikulum/edit_detail_kurikulum/<?php echo $kurikulum->id_detail_kurikulum; ?>" enctype="multipart/form-data">
		<table class="table">
    	   <tr>
            <td class="left_column">Nama Mata Kuliah <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="nama_matkul" id="nama_matkul" class="validate[required] text-input" maxlength="20" size="100" style="width:50%" value="<?php echo $kurikulum->nama_matkul; ?>">
            </td>
        </tr> 

        <tr>
            <td class="left_column">Kode Mata Kuliah <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="kode_matkul" id="kode_matkul" class="validate[required] text-input" maxlength="20" size="100" style="width:10%; background-color:#E0E0E0" required="" value="<?php echo $kurikulum->kode_matkul; ?>" >
            </td>
        </tr> 

        <tr>
            <td class="left_column">Bobot Mata Kuliah <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="bobot_matkul" id="bobot_matkul" class="validate[required] text-input" maxlength="20" size="100" style="width:5%; background-color:#E0E0E0" required="" value="<?php echo $kurikulum->bobot_matkul; ?>">
            </td>
        </tr> 

        <tr>
            <td class="left_column">Bobot Praktikum <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="bobot_praktikum" id="bobot_praktikum" class="validate[required] text-input" maxlength="20" size="100" style="width:5%; background-color:#E0E0E0" required="" value="<?php echo $kurikulum->bobot_praktikum; ?>">
            </td>
        </tr> 

        <tr>
            <td class="left_column">Bobot Simulasi <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="bobot_simulasi" id="bobot_simulasi" class="validate[required] text-input" maxlength="20" size="100" style="width:5%; background-color:#E0E0E0" required="" value="<?php echo $kurikulum->bobot_simulasi; ?>">
            </td>
        </tr> 

         <tr>
            <td class="left_column">Bobot Praktik Lapangan <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="bobot_praktik_lapangan" id="bobot_praktik_lapangan" class="validate[required] text-input" maxlength="20" size="100" style="width:5%; background-color:#E0E0E0" required="" value="<?php echo $kurikulum->bobot_praktik_lapangan; ?>">
            </td>
        </tr> 

         <tr>
            <td class="left_column">Bobot Tatap Muka <font color="#FF0000">*</font></td>
            <td>:  <input type="text" name="bobot_tatap_muka" id="bobot_tatap_muka" class="validate[required] text-input" maxlength="20" size="100" style="width:5%; background-color:#E0E0E0" required="" value="<?php echo $kurikulum->bobot_tatap_muka; ?>">
            </td>
        </tr> 
            <input type="hidden" name="id_kurikulum" id="id_kurikulum" class="validate[required] text-input" maxlength="20" size="100" style="width:80%" required="" value="<?php echo $kurikulum->id_kurikulum; ?>">

            <input type="hidden" name="id_detail_kurikulum" id="id_detail_kurikulum" class="validate[required] text-input" maxlength="20" size="100" style="width:80%" required="" value="<?php echo $kurikulum->id_detail_kurikulum; ?>">
        <tr>
            <td class="left_column">Semester <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="semester_kurikulum" id="semester_kurikulum" class="validate[required] text-input" maxlength="20" size="100" style="width:5%" required="" value="<?php echo $kurikulum->semester_kurikulum; ?>"></td>
        </tr> 
        <tr>
          <td class="left_column">Wajib <font color="#FF0000">*</font></td>
          <td>: 

          <?php if($kurikulum->wajib =='Y'){
          echo '<label class="radio-inline"><input type="radio" name="wajib" id="wajib" value="Y" checked="" > Ya</label> &nbsp; 
          <label class="radio-inline"><input type="radio" name="wajib" id="wajib" value="T"> Tidak</label> &nbsp; ';
        }else{
        echo '<label class="radio-inline"><input type="radio" name="wajib" id="wajib" value="Y"> Ya</label> &nbsp; 
          <label class="radio-inline"><input type="radio" name="wajib" id="wajib" value="T"  checked="" > Tidak</label> &nbsp; ';
          }
          ?>
          </td>
          </tr>
        
                  <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info">Simpan</button></td>
                  </tr>

    </table>
    </form>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
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
