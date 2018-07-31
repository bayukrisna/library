<div class="panel panel-primary">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> Edit kelas_perkuliahan</div>
            <div class="panel-body">
              <div class="row">
         <form  method="post" action="<?php echo base_url(); ?>kelas_perkuliahan/save_edit_kp/<?php echo $kp->id_kp; ?>" enctype="multipart/form-data">
		<table class="table">
    	  <tr>
            <td class="left_column" width="30%">Program Studi <font color="#FF0000">*</font></td>
            <td colspan="9">:  
            <select name="id_prodi" id="id_prodi" class="validate[required]" onchange="return get_prodi_periode(this.value)" required="">
              <option value="<?php echo $kp->id_prodi; ?>"> <?php echo $kp->nama_prodi; ?></option>
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
            <option value="<?php echo $kp->id_periode; ?>"><?php echo $kp->semester; ?></option>
        </select>     </td>
        </tr>
        <tr>
          <td class="left_column">Mata Kuliah  <font color="#FF0000">*</font></td>
            <td colspan="9">: 
      <input type="text" name="nama_matkul" id="nama_matkul" class="validate[required] text-input ui-autocomplete-input" size="20"  style="width: 50%;" required="" value="<?php echo $kp->nama_matkul; ?>"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>            

      <input type="hidden" name="kode_matkul" id="kode_matkul" value="<?php echo $kp->kode_matkul; ?>" > 
            </td>
    </tr>
        <tr>
          <td class="left_column">Nama Kelas <font color="#FF0000">*</font>
            </td>
          <td colspan="9">: 
      <input type="text" name="nama_kelas" id="nama_kelas" class="validate[required] text-input"  size="5" style="width: 40%;" required="" value="<?php echo $kp->nama_kelas; ?>"></td>
        </tr> 
        <tr>
          <td class="left_column">Bahasan</td>
            <td colspan="9">: 
      <textarea wrap="soft" name="bahasan" id="bahasan" class="text-input" rows="5" cols="50" maxlength="200"><?php echo $kp->bahasan; ?></textarea></td>
        </tr>
        <tr>
         <td class="left_column">Tanggal Mulai Efektif</td>
            <td colspan="9">:
        <input type="date" name="tgl_mulai" id="tgl_mulai" class="text-input hasDatepicker" maxlength="50" size="50" style="width:50%" value="<?php echo $kp->tgl_mulai; ?>">            </td>
        </tr>
        <tr>
          <td class="left_column">Tanggal Akhir Efektif 
         </td>
         <td colspan="9">:
        <input type="date" name="tgl_akhir" id="tgl_akhir" class="text-input hasDatepicker" maxlength="50" size="50" style="width:50%" value="<?php echo $kp->tgl_akhir; ?>">            </td>
        </tr>
                  <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info">Simpan</button></td>
                  </tr>
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

