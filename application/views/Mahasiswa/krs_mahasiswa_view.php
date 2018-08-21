           <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/lihat_mahasiswa_dikti/<?php echo $mahasiswa->id_mahasiswa; ?>">Detail Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_pendidikan/<?php echo $mahasiswa->id_mahasiswa; ?>">History Pendidikan</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/krs_mahasiswa/<?php echo $mahasiswa->id_mahasiswa ?>/<?php echo $mahasiswa->id_prodi; ?>">KRS Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/history_nilai/<?php echo $mahasiswa->id_mahasiswa; ?>">History Nilai</a>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mahasiswa/aktivitas_perkuliahan/<?php echo $mahasiswa->id_mahasiswa; ?>">Aktivitas Perkuliahan</a>
        <a class="btn btn-sm btn-info" href="<?php echo base_url();?>mahasiswa/prestasi/<?php echo $mahasiswa->id_mahasiswa; ?>">Prestasi</a>
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
        <tr>
            <td class="left_column">Periode </td>
            <td colspan="3">: <?php 
             echo $periode->semester;?></td>
        </tr>
                <tr>
            <!-- <td class="left_column">Kelas </td>
            
            <input type="text" name="kelas" id="kelas" class="text-input"> -->
            <td colspan="3">
            
                <button type="button" class="btn btn-sm btn-primary">
                <i class="fa fa-plus"></i> KRS</button>
            &nbsp;
            
                        </td>
        </tr>

        </table>
            </div>
            <!-- /.box-body -->
          </div>
        <a class="btn btn-primary pull-right"><i class="fa fa-file"></i> Cetak KRS</a>
        <a class="btn pull-right">[ KRS Kolektif ]</a><br><br>
        <div class="box">
        <table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th style="width:5%;text-align:center">No.</th>
        <th style="text-align:center">Kode MK</th>
        <th style="text-align:center">Nama MK</th>
        <th style="text-align:center">Kelas</th>
        <th style="text-align:center">Bobot MK<br />(sks)</th>
        
    </tr>
    </thead>
    <tbody>
    <?php 
        $no = 0;
        foreach($krs as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->kode_matkul;?></td>
        <td style="text-align:center"><?php echo $data->nama_matkul;?></td>
        <td style="text-align:center"><?php echo $data->nama_kelas;?></td>
        <td style="text-align:center"><?php echo $data->bobot_matkul;?></td>
    
    </tr>
<?php endforeach; ?>
  
  </tbody>
    </table>
    </div>
    <div class="callout callout-info">
        <strong>Keterangan :</strong>
            <br />
            - Fitur ini di gunakan untuk menampilkan dan mengelola KRS per mahasiswa pada periode berlaku
            <br />
            - Fitur ini cocok di gunakan apabila sumber data yang digunakan adalah daftar KRS per mahasiswa
            <br />
            - Bila sumber data yang digunakan adalah daftar absensi , silahkan ke menu <a href="http://10.10.0.4:8082/kelaskuliah">[ Kelas Perkuliahan ]</a>            <br />
            - Untuk menambahkan Kelas yang di tawarkan, silahkan ke menu <a href="http://10.10.0.4:8082/kelaskuliah">[ Kelas Perkuliahan ]</a>          <br />
            - Anda dapat menambahkan KRS secara kolektif pada mahasiswa ini, klik pada 
            <a style="cursor:pointer" onclick="return showKelas(this)" title="Menampilkan Kelas yang ditawarkan">[ KRS Kolektif ]</a>
            <br />
            
    </div>
