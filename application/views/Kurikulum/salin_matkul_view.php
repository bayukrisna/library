      <?php  $id_kurikulum = $kurikulum->id_kurikulum; ?>

       <?php echo $this->session->flashdata('message');?>
        <div class="box box-info">
            
            <!-- /.box-header --> 
            <div class="box-body">
              <table class="table">

        <tr>


            <td width="15%" class="left_column">Nama Kurikulum <font color="#FF0000">*</font></td>
            <td>: <?php echo $kurikulum2->nama_kurikulum; ?>   </td>
      
           <td class="left_column" width="25%">Tanggal Mulai <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $kurikulum2->semester; ?>                        </td>
                                  
           
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%" value=>Program Studi <font color="#FF0000">*</font></td>
            <td width=20%">: <?php echo $kurikulum2->nama_prodi; ?>        </td>
            <td class="left_column" width="15%">Jumlah Bobot Matakuliah Wajib <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $kurikulum2->bobot_matkul_wajib; ?>                        </td>
            <td class="left_column" width="15%">SKS Matakuliah Wajib </td>
            <td>: <?php 
                    $totalwajib = 0;
                     foreach($dk as $data){
                        if ($data->wajib == 'Y') {
                          $totalwajib += $data->bobot_matkul;
                        }
                      } echo $totalwajib;
                  ?>
                
                </td>
        </tr>
        <tr>
            <td class="left_column">Jumlah SKS</td>
            <td width=20%">: <?php  $jumlah_sks = $kurikulum2->bobot_matkul_wajib + $kurikulum->bobot_matkul_pilihan;;echo $jumlah_sks; ?></td>
            <td class="left_column">Jumlah Bobot Matakuliah Pilihan <font color="#FF0000">*</font></td>
            <td>:
            <?php echo $kurikulum2->bobot_matkul_pilihan; ?>
             <td class="left_column" width="15%">SKS Matakuliah Pilihan</td>
            <td>: <?php 
                    $totalpilihan = 0;
                     foreach($dk as $data){
                        if ($data->wajib == 'T') {
                          $totalpilihan += $data->bobot_matkul;
                        }
                      } echo $totalpilihan;
                  ?>
                  </td>
        </table>
            </div>
            <!-- /.box-body -->
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
        $totalbobot = 0;
        $totaltm = 0;
        $totalprak = 0;
        $totalpl = 0;
        $totalsim = 0;
        $alert = "'Apakah anda yakin menghapus data ini ?'";
        $kode_matkul = '';
        $semester_kurikulum = '';
        $wajib = '';
        foreach($dk as $data):
          $kode_matkul .= $data->kode_matkul.','; 
          $semester_kurikulum .= $data->semester_kurikulum.','; 
          $wajib .= $data->wajib.','; 
        ;
      ?>

      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->kode_matkul;?></td>
        <td style="text-align:center"><?php echo $data->nama_matkul;?></td>
        <td style="text-align:center"><?php $totalbobot += $data->bobot_matkul;echo $data->bobot_matkul;?></td>
        <td style="text-align:center"><?php $totaltm += $data->bobot_tatap_muka;echo $data->bobot_tatap_muka;?></td>
        <td style="text-align:center"><?php $totalprak += $data->bobot_praktikum;echo $data->bobot_praktikum;?></td>
        <td style="text-align:center"><?php $totalpl += $data->bobot_praktik_lapangan;echo $data->bobot_praktik_lapangan;?></td >
        <td style="text-align:center"><?php $totalsim += $data->bobot_simulasi;echo $data->bobot_simulasi;?></td >
        <td style="text-align:center"><?php echo $data->semester_kurikulum;?></td >
        <td style="text-align:center"><?php

          if ($data->wajib == 'Y') $check = '<i class="fa fa-check"></i>'; else $check = '';

          echo $check;

          ?>
  
        </td >

    </tr>
<?php endforeach; ?>
<tr>
        <td colspan="3" style="text-align:right"> <b> Jumlah SKS : </b></td>
        <td style="text-align:center"><?php echo $totalbobot; ?></td>
        <td style="text-align:center"><?php echo $totaltm; ?></td>
        <td style="text-align:center"><?php echo $totalprak; ?></td>
        <td style="text-align:center"><?php echo $totalpl; ?></td>
        <td style="text-align:center"><?php echo $totalsim; ?></td>
        <td style="text-align:center" colspan="2"></td >
        <td style="text-align:center" colspan="2">
                
                        </td>
    </tr>
  
  </tbody>
</table>

 <?php echo form_open('kurikulum/simpan_salin_matkul');?>
              <input type="hidden" class="form-control" id="id_kurikulum" name="id_kurikulum" value="<?php echo $id_kurikulum ?>">
              <input type="hidden" class="form-control" id="kode_matkul" name="kode_matkul" value="<?php echo $kode_matkul ?>">
               <input type="hidden" class="form-control" id="semester_kurikulum" name="semester_kurikulum" value="<?php echo $semester_kurikulum ?>">
               <input type="hidden" class="form-control" id="wajib" name="wajib" value="<?php echo $wajib ?>">

               <button type="submit"  class="btn btn-success pull-right" style="margin-right: 10px; margin-bottom: 10px">Simpan</button> <br>
              
 <?php echo form_close();?>

              <br>
              
          </div>
          
       

         

        



  

