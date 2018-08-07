        
        
        <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
        <tr>


            <td width="15%" class="left_column">Program Studi <font color="#FF0000">*</font></td>
            <td>: <?php echo $kp->nama_prodi; ?>   </td>
            <td class="left_column" width="15%" value=>Semester <font color="#FF0000">*</font></td>
            <td width="35%">: <?php echo $kp->semester; ?>       </td>
           
                                  
            <input type="hidden" name="stat_pd" value="A">
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%">Mata Kuliah <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $kp->kode_matkul; ?> - <?php echo $kp->nama_matkul; ?> ( <?php echo $kp->bobot_matkul; ?> )                        </td>
               <td class="left_column" width="15%">Nama Kelas <font color="#FF0000">*</font></td>
            <td>:
               <?php echo $kp->nama_kelas; ?>                        </td>
        </tr>
        
        </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="">
            <a class="btn btn-primary pull-right"  href="<?php echo base_url(); ?>nilai_perkuliahan"></i> Kembali</a><br><br>
          </div>

          <div class="box box-info">
            <table class="table table-bordered table-striped" id="example3">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center" rowspan="2">No.</th>
    <th width="15%" style="text-align:center" rowspan="2">NIM</th>
    <th style="text-align:center" rowspan="2">Nama Mahasiswa</th>
    <th width="15%" style="text-align:center" rowspan="2">Prodi</th>
    <th width="15%" style="text-align:center" rowspan="2">Angkatan</th>
    <th style="text-align:center" colspan="2">Nilai</th>
    <th style="text-align:center" rowspan="2"> Aksi</th>
  </tr>
   <tr>
   
    <th width="7%" style="text-align:center">Angka</th>
    <th width="7%" style="text-align:center">Huruf</th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $no = 0;
        foreach($nilai as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->nim;?></td>
        <td style="text-align:center"><?php echo $data->nama_mahasiswa;?></td>
        <td style="text-align:center"><?php echo $data->nama_prodi;?></td>
        <td style="text-align:center"><?php echo $data->angkatan;?></td>
        <td style="text-align:center"><?php echo $data->nilai_d;?></td>
        <td style="text-align:center"><?php echo $data->nilai_huruf;?> ( <?php echo $data->nilai_indeks;?> ) </td >
        <td style="text-align:center"> 
                 <a href="<?php echo base_url(); ?>nilai_perkuliahan/edit_nilai/<?php echo $data->id_kelas_mhs; ?>" class="btn btn-warning  btn-sm"><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit Kelas </span></a>
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>

          </div>
           

        
        
       