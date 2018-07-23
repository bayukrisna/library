        <a class="btn btn-sm btn-primary" href="">Detail Mahasiswa</a>
        <a class="btn btn-sm btn-info" href="">History Pendidikan</a>
        <a class="btn btn-sm btn-primary">KRS Mahasiswa</a>
        <a class="btn btn-sm btn-info">History Nilai</a>
        <a class="btn btn-sm btn-primary">Aktivasi Perkuliahan</a>
        <a class="btn btn-sm btn-info">Prestasi</a>
        <br><br>
        <div class="box box-info">
        <div class="box-body">
              <table class="table">
        <tr>
            <td width="15%" class="left_column">NIM</td>
            <td>: 171612120765</td>
            <td width="15%" class="left_column">Nama</td>
            <td>: ANINDYA FELITA SYARIENDRAR</td>
        </tr>
        <tr>
            <td class="left_column" width="15%">Program Studi</td>
            <td width="35%">: S1 Akuntansi            </td>
            <td class="left_column" width="15%">Angkatan</td>
            <td>: 2017            </td>
        </tr>
        <tr>
            <td class="left_column">Periode </td>
            <td colspan="3">: 2018/2019 Ganjil</td>
        </tr>
                <tr>
            <td class="left_column">Kelas </td>
            <td colspan="3">: 
            <input type="text" name="kelas" id="kelas" class="text-input">
            &nbsp; &nbsp;
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
        <th ></th>
    </tr>
    </thead>
    <tbody>
        
        <tr><td colspan="2">Tidak ada data</td></tr>
    
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
