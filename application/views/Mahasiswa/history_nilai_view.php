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
        <table id="table1" class="table table-striped table-bordered" >
    <thead>
    <tr>
        <th style="width:5%;text-align:center" rowspan="2">No.</th>
        <th style="text-align:center" rowspan="2">Kode MK</th>
        <th style="text-align:center" rowspan="2">Nama MK</th>
        <th style="text-align:center" rowspan="2">Bobot MK<br />(sks)</th>
         <th style="text-align:center" colspan="3">Nilai<br />(sks)</th>
         <th style="text-align:center" rowspan="2">sks * N.indeks</th>
        <th rowspan="2"></th>
    </tr>
    <tr>
        <th style="width:5%;text-align:center">Angka</th>
        <th style="text-align:center">Huruf</th>
        <th style="text-align:center">Indeks</th>
        <th ></th>
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
        <input type="text" name="ee" id="ee" value="<?php echo $dataee;?>">
        <td style="text-align:center">
                <button id="" type="button" class="btn btn-xs"   data-toggle="modal" data-target="#modal_detil"><i class="fa fa-pencil"></i></button>
                        </td>
    </tr>
   
<?php endforeach; ?>

    <tr>
        <td colspan="4"> <span id="val"> <?php echo $totalsi; ?> </span></td>
        <td colspan="4"> <span id="val"> <?php echo $totalbobot; ?> </span></td>
        <td colspan="1"> <span id="val"> <?php $ips = $totalsi / $totalbobot; echo $ips; ?> </span></td>

    </tr>

  
  </tbody>
    </table>
    <input type="text" name="ea" id="ea">
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
<script type="text/javascript">
   
      /* var table = document.getElementById("table1"), sumVal = 0;
      for (var i = 1; i < table.rows.length; i++)
      {
         sumVal = sumVal + parseInt(table.rows[i].cells[7].innerHTML);
      }
      document.getElementById("val").innerHTML = "Sum Value = " + sumVal;
     console.log(sumVal);
     /*var ee = document.getElementById('ee').value;
     var hasil = parseInt(ee) + parseInt(ee);
     document.getElementById('ea').value = hasil; */
</script>