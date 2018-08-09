        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/lihat_mahasiswa_dikti/<?php echo $mahasiswa->id_mahasiswa; ?>">Detail Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_pendidikan/<?php echo $mahasiswa->id_mahasiswa; ?>">History Pendidikan</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/krs_mahasiswa/<?php echo $mahasiswa->id_mahasiswa; ?>">KRS Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_nilai/<?php echo $mahasiswa->id_mahasiswa; ?>">History Nilai</a>
        <a class="btn btn-sm btn-primary">Aktivasi Perkuliahan</a>
        <a class="btn btn-sm btn-info">Prestasi</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>mahasiswa/data_mahasiswa">Kembali</a>
        <br><br>
        <div class="box box-info">
        <div class="box-body">
              <table class="table">
        <tr>
            <td width="15%" class="left_column">NIM</td>
            <td>: <?php echo $mahasiswa->nim; ?></td>
            <td width="15%" class="left_column">Nama</td>
            <td>: <?php echo $mahasiswa->nama_mahasiswa; ?></td>
        </tr>
        <tr>
            <td class="left_column" width="15%">Program Studi</td>
            <td width="35%">: <?php echo $mahasiswa->nama_prodi; ?>            </td>
            <td class="left_column" width="15%">Angkatan</td>
            <td>: <?php echo $mahasiswa->angkatan; ?>           </td>
        </tr>
        
               

        </table>
            </div>
            <!-- /.box-body -->
          </div>
        <br><br>
        <div class="box">
            <table class="">
                <tbody>
                  <form method="get" action="<?php echo base_url(); ?>mahasiswa/filter_nilai/<?php echo $mahasiswa->id_mahasiswa; ?>">
                  <tr>
                    <th><input type="hidden" name="id_prodi" id="id_prodi" value="<?php echo $mahasiswa->id_prodi; ?>"><br></th>
                  </tr>
                  <tr>                                                                    
                    <td> &nbsp;&nbsp;&nbsp;Periode</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      <select name="id_periode" id="id_periode" class="validate[required]">
                        <option value="">Semua</option>   
                    
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
              <br>
        <table id="table1" class="table table-striped table-bordered" >
    <thead>
    <tr>
        <th style="width:5%;text-align:center" rowspan="2">No.</th>
        <th style="text-align:center" rowspan="2">Kode MK</th>
        <th style="text-align:center" rowspan="2">Nama MK</th>
        <th style="text-align:center" rowspan="2">Bobot MK<br />(sks)</th>
         <th style="text-align:center" colspan="3">Nilai<br />(sks)</th>
         <th style="text-align:center" rowspan="2">sks * N.indeks</th>
       
    </tr>
    <tr>
        <th style="width:5%;text-align:center">Angka</th>
        <th style="text-align:center">Huruf</th>
        <th style="text-align:center">Indeks</th>
        
    </tr>
    </thead>
    <tbody>
    <?php 

        $no = 0;
        $totalsi = 0;
        $totalbobot = 0;
        foreach($nilai as $data):
             $dataee = $data->bobot_matkul * $data->nilai_indeks;
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->kode_matkul;?></td>
        <td style="text-align:center"><?php echo $data->nama_matkul;?></td>
        <td style="text-align:center"><?php $totalbobot += $data->bobot_matkul; echo $data->bobot_matkul;?></td>
        <td style="text-align:center"><?php echo $data->nilai_d;?></td>
        <td style="text-align:center"><?php echo $data->nilai_huruf;?></td>
        <td style="text-align:center"><?php echo $data->nilai_indeks;?></td>
        <td style="text-align:center"><?php $totalsi += $dataee; echo $dataee;?></td>
        
        <td style="text-align:center">
                
                        </td>
    </tr>
   
<?php endforeach; ?>

    <tr>
         <td colspan="3" style="text-align:right"> <b> Jumlah Bobot : </b></td>
        <td style="text-align:center">  <?php 
        if ($totalbobot == 0) {
            echo $totalbobot = 1;
        } else {
            echo $totalbobot;
        }  ?> </td>
        <td colspan="3" style="text-align:right"> <b> Jumlah sks * N.indeks : </b></td>
        <td style="text-align:center"> <?php echo $totalsi; ?></td>

    </tr>
    <tr>
        <th style="text-align:right" colspan="7"> IPS : </th>
        <th style="text-align:center"> <?php $ips = $totalsi / $totalbobot; echo round($ips, 2); ?>   </th>
    </tr>

  
  </tbody>
    </table>
    
    </div>
    <div class="callout callout-info">
        <strong>Keterangan :</strong>
            <br />
            - Fitur ini di gunakan untuk menampilkan nilai perkuliahan mahasiswa setiap periode 
            <br />
            - Perhitungan IPS = Jumlah ( N.Indeks * sks ) / Jumlah sks
            <br />
            - Untuk mengisikan nilai , silahkan ke menu [ Nilai Perkuliahan ]   
            <br />
            
    </div>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script type="text/javascript">
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
</script>
