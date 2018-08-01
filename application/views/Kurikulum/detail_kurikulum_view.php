      
       <?php echo $this->session->flashdata('message');?>
        <div class="box box-info">
            
            <!-- /.box-header --> 
            <div class="box-body">
              <table class="table">

        <tr>


            <td width="15%" class="left_column">Nama Kurikulum <font color="#FF0000">*</font></td>
            <td>: <?php echo $kurikulum->nama_kurikulum; ?>   </td>
      
           <td class="left_column" width="25%">Tanggal Mulai <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $kurikulum->semester; ?>                        </td>
                                  
           
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%" value=>Program Studi <font color="#FF0000">*</font></td>
            <td width=20%">: <?php echo $kurikulum->nama_prodi; ?>        </td>
            <td class="left_column" width="15%">Jumlah Bobot Matakuliah Wajib <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $kurikulum->bobot_matkul_wajib; ?>                        </td>
            <td class="left_column" width="15%">SKS Matakuliah Wajib </td>
            <td>:
               <?php echo $bobot['bobot_wajib']; ?>   </td>
        </tr>
        <tr>
            <td class="left_column">Jumlah SKS</td>
            <td width=20%">: <?php echo $kurikulum->jumlah_sks; ?></td>
            <td class="left_column">Jumlah Bobot Matakuliah Pilihan <font color="#FF0000">*</font></td>
            <td>:
            <?php echo $kurikulum->bobot_matkul_pilihan; ?>
             <td class="left_column" width="15%">SKS Matakuliah Pilihan</td>
            <td>:
               <?php echo $bobot['bobot_pilihan']; ?>   </td>
        </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="">
            <a class="btn btn-primary pull-right"  href="<?php echo base_url(); ?>kurikulum" style="margin-left: 10px">
              Kembali</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary pull-right"  data-toggle="modal" data-target="#modal_tambah">
              <i class="fa fa-plus"></i> Tambah Mata Kuliah</a> <br><br>
            
          </div>


          <div class="box box-info">
            <table class="table2 table-bordered table-striped">
  <thead>
  <tr>
    <th  style="text-align:center" rowspan="2">No.</th>
    <th  style="text-align:center" rowspan="2">Kode MK</th>
    <th  style="text-align:center" rowspan="2">Nama MK</th>
    <th  style="text-align:center" colspan="5">Bobot Mata Kuliah</th>
    <th  style="text-align:center" rowspan="2">Semester</th>
    <th style="text-align:center" rowspan="2">Wajib</th>
        <th style="text-align:center" rowspan="2"> Aksi</th>
  </tr>
  <tr>
    <th  style="text-align:center">Mata Kuliah</th>
    <th  style="text-align:center">Tatap Muka</th>
    <th  style="text-align:center">Praktikum</th>
    <th  style="text-align:center">Prakt Lap.</th>
    <th  style="text-align:center">Simulasi</th>
    
  </tr>
  </thead>
  <tbody>

    <?php 
        $no = 0;

        $alert = "'Apakah anda yakin menghapus data ini ?'";
        foreach($dk as $data):
        ;
      ?>

      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->kode_matkul;?></td>
        <td style="text-align:center"><?php echo $data->nama_matkul;?></td>
        <td style="text-align:center"><?php echo $data->bobot_matkul;?></td>
        <td style="text-align:center"><?php echo $data->bobot_tatap_muka;?></td>
        <td style="text-align:center"><?php echo $data->bobot_praktikum;?></td>
        <td style="text-align:center"><?php echo $data->bobot_praktik_lapangan;?></td >
        <td style="text-align:center"><?php echo $data->bobot_simulasi;?></td >
        <td style="text-align:center"><?php echo $data->semester_kurikulum;?></td >
        <td style="text-align:center"><?php

          if ($data->wajib == 'Y') $check = '<i class="fa fa-check"></i>'; else $check = '';

          echo $check;

          ?>
  
        </td >
        <td style="text-align:center">
                <a href="<?php echo base_url(); ?>kurikulum/hapus_matkul_kurikulum/<?php echo $data->id_detail_kurikulum; ?>" onclick="return confirm(<?php echo $alert; ?>)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus Matkul</span></a>

                <a href="<?php echo base_url(); ?>kurikulum/detail_matkul_kurikulum/<?php echo $data->id_detail_kurikulum; ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Detail Matkul</span></a>

    </tr>
<?php endforeach; ?>
<tr>
        <td colspan="3" style="text-align:right"> <b> Jumlah SKS : </b></td>
        <td style="text-align:center"><?php echo $bobot['bobot_matkuls']; ?></td>
        <td style="text-align:center"><?php echo $bobot['bobot_btm']; ?></td>
        <td style="text-align:center"><?php echo $bobot['bobot_bp']; ?></td>
        <td style="text-align:center"><?php echo $bobot['bobot_bpl']; ?></td>
        <td style="text-align:center"><?php echo $bobot['bobot_bs']; ?></td>
        <td style="text-align:center" colspan="2"></td >
        <td style="text-align:center">
                
                        </td>
    </tr>
  
  </tbody>
</table>

          </div>
          
       

         <div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Mata Kuliah</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('kurikulum/simpan_detail_kurikulum'); ?>
                      <table class="table">
                         <tr>
            <td class="left_column">Nama Mata Kuliah <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="nama_matkul" id="nama_matkul" class="validate[required] text-input" maxlength="20" size="40" style="width:80%">
            </td>
        </tr> 
          
       <input type="hidden" name="kode_matkul" id="kode_matkul" class="validate[required] text-input" maxlength="20" size="40" style="width:80%" required="">
         
        
            <input type="hidden" name="id_kurikulum" id="nama_kurikulum" class="validate[required] text-input" maxlength="20" size="40" style="width:80%" required="" value="<?php echo $this->uri->segment(3); ?>">

            <input type="hidden" name="bobot_matkul" id="bobot_matkul" class="validate[required] text-input" maxlength="20" size="40" style="width:80%" required="">

            <input type="hidden" name="bobot_praktikum" id="bobot_praktikum" class="validate[required] text-input" maxlength="20" size="40" style="width:80%" required="">
            <input type="hidden" name="bobot_simulasi" id="bobot_simulasi" class="validate[required] text-input" maxlength="20" size="40" style="width:80%" required="">
            <input type="hidden" name="bobot_praktik_lapangan" id="bobot_praktik_lapangan" class="validate[required] text-input" maxlength="20" size="40" style="width:80%" required="">
            <input type="hidden" name="bobot_tatap_muka" id="bobot_tatap_muka" class="validate[required] text-input" maxlength="20" size="40" style="width:80%" required="">
            
       
        <tr>
            <td class="left_column">Semester <font color="#FF0000">*</font></td>
            <td>: <input type="text" name="semester_kurikulum" id="semester_kurikulum" class="validate[required] text-input" maxlength="20" size="40" style="width:80%" required=""></td>
        </tr> 
        <tr>
          <td class="left_column">Wajib <font color="#FF0000">*</font></td>
          <td>: 
          <label class="radio-inline"><input type="radio" name="wajib" id="wajib" value="Y" checked="" > Ya</label> &nbsp; 
          <label class="radio-inline"><input type="radio" name="wajib" id="wajib" value="T"> Tidak</label> &nbsp; 
                </td>
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

  

