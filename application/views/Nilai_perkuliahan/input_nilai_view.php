
<div class="panel panel-primary">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> Input Nilai</div>
            <div class="panel-body">
              <div class="row">
         <form  method="post" action="<?php echo base_url(); ?>nilai_perkuliahan/save_edit_nilai/<?php echo $dnilai->id_kelas_mhs; ?>" enctype="multipart/form-data">
    <table class="table">
      <tr>
            <td class="left_column">Nama Mahasiswa<font color="#FF0000">*</font></td>
            <td>: <?php echo $dnilai->nama_mahasiswa; ?>
             </td>
        </tr> 
        <tr>
            <td class="left_column">NIM <font color="#FF0000">*</font></td>
            <td>: <?php echo $dnilai->nim; ?> 
             </td>
        </tr> 
        <tr>
            <td class="left_column">Mata Kuliah <font color="#FF0000">*</font></td>
            <td>: <?php echo $dnilai->nama_matkul; ?> 
             </td>
        </tr> 
       <tr>
            <td class="left_column">Nilai <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="nilai" id="nilai" class="validate[required] text-input" size="50" style="width:5%" maxlength="5" required="" value="<?php echo $dnilai->nilai_d; ?>" onkeyup="return get_skala(this.value)">  <input type="hidden" name="id_skala_nilai" id="ee" value="">
              <input type="hidden" name="id_kp" id="kp" value="<?php echo $dnilai->id_kp; ?>">
               <input type="hidden" name="id_prodi" id="id_prodi" value="<?php echo $dnilai->id_prodi; ?>">
             </td>
        </tr> 

                  <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info">Simpan</button></td>
                  </tr>
    </table>
    </form>
</div>

<script type="text/javascript">
  function get_skala2() {
                var nilai = document.getElementById('nilai').value;
                $.ajax({
                    url: '<?php echo base_url(); ?>nilai_perkuliahan/get_skala/'+nilai,
                    data: 'nilai='+nilai,
                    type: 'POST',
                    dataType: 'html',
                    success:function(data){
                      console.log(data);
                    document.getElementById('ee').value = data;
                    },
                    error:function (){}
                }); 
              }
               
            
</script>

<script type="text/javascript">
            function get_skala(p) {
                var nilai = document.getElementById('nilai').value;
                var id_prodi = document.getElementById('id_prodi').value;

                $.ajax({
                    url: '<?php echo base_url(); ?>nilai_perkuliahan/get_skala/',
                    data: 'nilai='+nilai+'&id_prodi='+id_prodi,
                    type: 'POST',
                    dataType: 'html',
                    success: function(data) {
                      // console.log(data);
                        document.getElementById('ee').value = data;
                    },
                    error:function (){}
                });
            }
</script>


