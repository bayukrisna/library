<form  method="post" action="<?php echo base_url(); ?>mahasiswa/save_edit_mahasiswa/<?php echo $mahasiswa->id_mahasiswa; ?>" enctype="multipart/form-data">

        <div class="box box-info">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
        <tr>

            <td width="15%" class="left_column">Nama <font color="#FF0000">*</font></td>
            <td>:
                <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="text-input" size="10" style="width:70%" value="<?php echo $mahasiswa->nama_mahasiswa; ?>" readonly>    </td>
      
            <td class="left_column">Nama Ibu <font color="#FF0000">*</font></td>
            <td>:  <input type="text" name="" id="" class="text-input" size="10" style="width:70%" value="<?php echo $mahasiswa->nama_ibu; ?>" readonly>
                                  
            <input type="hidden" name="stat_pd" value="A">
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%" value=>Tempat Lahir <font color="#FF0000">*</font></td>
            <td width="35%">: <input type="text" name="tempat_lahir" id="tempat_lahir" class="text-input" size="10" style="width:70%" value="<?php echo $mahasiswa->tempat_lahir; ?>" readonly>          </td>
            <td class="left_column" width="15%">Tanggal Lahir <font color="#FF0000">*</font></td>
            <td>:
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="text-input" size="10" style="width:70%" value="<?php echo $mahasiswa->tanggal_lahir; ?>" readonly>                           </td>
        </tr>
        <tr>
            <td class="left_column">Jenis Kelamin</td>
            <td>: <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="text-input" size="10" style="width:70%" value="<?php echo $mahasiswa->jenis_kelamin; ?>" readonly></td>
            <td class="left_column">Agama <font color="#FF0000">*</font></td>
            <td>:  <select name="agama" id="agama">
            <option value="<?php echo $mahasiswa->agama; ?>"><?php echo $mahasiswa->agama; ?></option>
            <option value="Islam">Islam</option>
            <option value="Katholik">Katholik</option>
             <option value="Kristen">Kristen</option>
             <option value="Hindu">Hindu</option>
             <option value="Budha">Budha</option>
             <option value="Konghucu">Konghucu</option>
             <option value="Lainnya">Lainnya</option>
             </select></td>
            </tr>
        </table>
            </div>
            <!-- /.box-body -->
          </div>


          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Alamat</a></li>
              <li><a href="#tab_2" data-toggle="tab">Orang Tua</a></li>
              <li><a href="#tab_3" data-toggle="tab">Wali</a></li>
              <li><a href="#tab_4" data-toggle="tab">Kebutuhan Khusus</a></li>
              <li class="pull-right"><button class="btn btn-sm btn-success" >Simpan</button> </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table width="90%" class="table">
                <tr>
                    <td class="left_column" width="15%">NIK <font color="#FF0000">*</font></td>
                    <td colspan="4">:  <input type="text" name="nik" id="nik" value="<?php echo $mahasiswa->nik; ?>" class="validate[required] text-input" maxlength="16" size="50" style="width:40%">                            <font color="grey"><em> ( Nomor NIK tanpa tanda baca ) </em></font>
                    </td>
                </tr>
        <tr>
                    <td class="left_column" width="15%">NISN</td>
                    <td colspan="5">: <input type="text" name="nisn" id="nisn" class="text-input" maxlength="10" size="10" style="width:70%" value="<?php echo $mahasiswa->nisn; ?>"></td>
                </tr>
        <tr>
                    <td class="left_column" width="15%">NPWP</td>
                    <td colspan="5">: <input type="text" name="npwp" id="npwp" class="text-input" maxlength="15" size="15" style="width:70%" value="<?php echo $mahasiswa->npwp; ?>"></td>
                </tr>
                <tr>
                    <td class="left_column">Kewarganegaraan <font color="#FF0000">*</font></td>
                    <td colspan="5">: 
                    <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="validate[required] text-input" style="width:70%" value="<?php echo $mahasiswa->kewarganegaraan; ?>"> 
                    </td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">Jalan</td>
                    <td colspan="5">: <input type="text" name="jalan" id="jalan" class="text-input" maxlength="80" size="80" style="width:70%" value="<?php echo $mahasiswa->jalan; ?>"></td>
                </tr>
                <tr>
                    <td class="left_column">Dusun</td>
                    <td>: <input type="text" name="dusun" id="dusun" class="text-input" maxlength="60" size="60" style="width:80%" value="<?php echo $mahasiswa->dusun; ?>"></td>
                    <td class="left_column">RT</td>
                    <td >: <input type="text" name="rt" id="rt" class="text-input" maxlength="2" size="2" style="width:50%" onkeydown="return onlyNumber(event,this,false,false)" value="<?php echo $mahasiswa->rt; ?>">  </td>
                    <td class="left_column">RW</td>
                    <td>: <input type="text" name="rw" id="rw" class="text-input" maxlength="2" size="2" style="width:50%" onkeydown="return onlyNumber(event,this,false,false)" value="<?php echo $mahasiswa->rw; ?>"></td>
                </tr>
                <tr>
                    <td class="left_column">Kelurahan <font color="#FF0000">*</font></td>
                    <td>: <input type="text" name="kelurahan" id="kelurahan" class="validate[required] text-input" maxlength="60" size="60" style="width:80%" value="<?php echo $mahasiswa->kelurahan; ?>"></td>
                    <td class="left_column">Kodepos</td>
                    <td colspan="4">: <input type="text" name="kode_pos" id="kode_pos" class="text-input" maxlength="5" size="5" style="width:30%" onkeydown="return onlyNumber(event,this,false,false)" value="<?php echo $mahasiswa->kode_pos; ?>"></td>
                </tr>
                <tr>
                    <td class="left_column">Kecamatan <font color="#FF0000">*</font></td>
                    <td colspan="5">: 
                    <input type="text" name="kecamatan" id="kecamatan" class="validate[required] text-input" style="width:70%" value="<?php echo $mahasiswa->kecamatan; ?>">
                    </td>
                </tr>
                <tr>
                    <td class="left_column">Jenis Tinggal</td>
                    <td colspan="5">: <select name="jenis_tinggal" id="jenis_tinggal">
                    <option value="<?php echo $mahasiswa->jenis_tinggal; ?>"><?php echo $mahasiswa->jenis_tinggal; ?></option>
                    <option value="Bersama orang tua">Bersama orang tua</option>
                    <option value="Wali">Wali</option>
                    <option value="Kost">Kost</option>
                    <option value="Asrama">Asrama</option>
                    <option value="Panti asuhan">Panti asuhan</option>
                    <option value="Lainnya">Lainnya</option>
                    </select></td>
                </tr>
                 <tr>
                    <td class="left_column">Alat Transportasi</td>
                    <td colspan="5">: <select name="alat_transportasi" id="alat_transportasi">
                    <option value="<?php echo $mahasiswa->alat_transportasi; ?>"><?php echo $mahasiswa->alat_transportasi; ?></option>
                    <option value="Jalan kaki">Jalan kaki</option>
                    <option value="Angkutan umum/bus/pete-pete">Angkutan umum/bus/pete-pete</option>
                    <option value="Mobil/bus antar jemput">Mobil/bus antar jemput</option>
                    <option value="Kereta api">Kereta api</option>
                    <option value="Ojek">Ojek</option>
                    <option value="Andong/bendi/sado/dokar/delman/becak">Andong/bendi/sado/dokar/delman/becak</option>
                    <option value="Perahu penyeberangan/rakit/getek">Perahu penyeberangan/rakit/getek</option>
                    <option value="Kuda">Kuda</option>
                    <option value="Sepeda">Sepeda</option>
                    <option value="Sepeda motor">Sepeda motor</option>
                    <option value="Mobil pribadi">Mobil pribadi</option>
                    <option value="Lainnya">Lainnya</option>
                </select></td>
                </tr>
                <tr>
                    <td class="left_column">Telepon</td>
                    <td>: <input type="text" name="no_telepon" id="no_telepon" class="text-input" maxlength="20" size="20" style="width:30%" value="<?php echo $mahasiswa->no_telepon; ?>"></td>
                    <td class="left_column">HP</td>
                    <td colspan="4">: <input type="text" name="no_hp" id="no_hp" class="text-input" maxlength="20" size="20" style="width:30%" value="<?php echo $mahasiswa->no_hp; ?>"></td>
                </tr>
                <tr>
                    <td class="left_column">Email</td>
                    <td colspan="5">: <input type="text" name="email" id="email" class="text-input" maxlength="60" size="60" style="width:30%" value="<?php echo $mahasiswa->email; ?>"></td>
                </tr>
                <tr>
                    <td class="left_column">Penerima KPS ? <font color="#FF0000">*</font></td>
                    <td>: 
                    <label class="radio-inline"><input type="radio" name="kps" value="Tidak" > Tidak</label> &nbsp; 
                <label class="radio-inline"><input type="radio" name="kps" value="Ya" > Ya</label> &nbsp; 
                </td>
                    <td class="left_column">No KPS</td>
                    <td colspan = '4'>: <input type="text" name="no_kps" id="no_kps" class="text-input" maxlength="80" size="80" disabled style="width:50%" value="<?php echo $mahasiswa->no_kps; ?>"></td>
                </tr>




          </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table width="90%" class="table">
                <tr>
                    <td colspan="2"><strong>Ayah</strong></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">NIK</td>
                    <td>:  <input type="text" name="nik_ayah" id="nik_ayah" class="text-input" maxlength="16" size="50" style="width:40%" onkeydown="return onlyNumber(event,this,false,false)" value="<?php echo $mahasiswa->nik_ayah; ?>">                            <font color="grey"><em> ( Nomor KTP tanpa tanda baca ) </em></font>
                    </td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">Nama</td>
                    <td>: <input type="text" name="nama_ayah" id="nama_ayah" class="text-input" maxlength="100" size="100" style="width:50%" value="<?php echo $mahasiswa->nama_ayah; ?>"></td>
                </tr>
                <tr>
                    <td class="left_column">Tanggal Lahir</td>
                    <td>:
                        <input type="date" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" class="text-input" maxlength="50" size="50" style="width:20%" value="<?php echo $mahasiswa->tanggal_lahir_ayah; ?>">                                                                    </td>
                </tr>
                <tr>
                    <td class="left_column">Pendidikan</td>
                    <td>: <select name="pendidikan_ayah" id="pendidikan_ayah">
                        <option value="<?php echo $mahasiswa->pendidikan_ayah; ?>"><?php echo $mahasiswa->pendidikan_ayah; ?></option>
                        <option value="Tidak sekolah">Tidak sekolah</option>
                        <option value="PAUD">PAUD</option>
                        <option value="TK / sederajat">TK / sederajat</option>
                        <option value="Putus SD">Putus SD</option>
                        <option value="SD / sederajat">SD / sederajat</option>
                        <option value="SMP / sederajat">SMP / sederajat</option>
                        <option value="SMA / sederajat">SMA / sederajat</option>
                        <option value="Paket A">Paket A</option>
                        <option value="Paket B">Paket B</option>
                        <option value="Paket C">Paket C</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="Profesi">Profesi</option>
                        <option value="Sp-1">Sp-1</option>
                        <option value="S2">S2</option>
                        <option value="S2 Terapan">S2 Terapan</option>
                        <option value="Sp-2">Sp-2</option>
                        <option value="S3">S3</option>
                        <option value="S3 Terapan">S3 Terapan</option>
                        <option value="Non formal">Non formal</option>
                        <option value="Informal">Informal</option>
                        <option value="Lainnya">Lainnya</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="left_column">Pekerjaan</td>
                    <td>: <select name="pekerjaan_ayah" id="pekerjaan_ayah">
                        <option value="<?php echo $mahasiswa->pekerjaan_ayah; ?>"><?php echo $mahasiswa->pekerjaan_ayah; ?></option>
                        <option value="Tidak bekerja">Tidak bekerja</option>
                        <option value="Nelayan">Nelayan</option>
                        <option value="Petani">Petani</option>
                        <option value="Peternak">Peternak</option>
                        <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Pedagang Kecil">Pedagang Kecil</option>
                        <option value="Pedagang Besar">Pedagang Besar</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                        <option value="Lainnya">Lainnya</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="left_column">Penghasilan</td>
                    <td>: <select name="penghasilan_ayah" id="penghasilan_ayah">
                        <option value="<?php echo $mahasiswa->penghasilan_ayah; ?>"><?php echo $mahasiswa->penghasilan_ayah; ?></option>
                        <option value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000</option>
                        <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
                        <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>
                        <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                        <option value="Rp. 5,000,000 - Rp. 20,000,000">Rp. 5,000,000 - Rp. 20,000,000</option>
                        <option value="Lebih dari Rp. 20,000,000">Lebih dari Rp. 20,000,000</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Ibu</strong></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">NIK</td>
                    <td>:  <input type="text" name="nik_ibu" id="nik_ibu" class="text-input" maxlength="16" size="50" style="width:40%" onkeydown="return onlyNumber(event,this,false,false)" value="<?php echo $mahasiswa->nik_ibu; ?>">                            <font color="grey"><em> ( Nomor KTP tanpa tanda baca ) </em></font>
                    </td>
                </tr>
                
                <tr>
                    <td class="left_column">Nama</td>
                    <td>:
            <input type="text" name="nama_ibu" id="nama_ibu" class="text-input" size="10" style="width:70%" value="<?php echo $mahasiswa->nama_ibu; ?>" readonly></td>
                </tr>
                <tr>
                    <td class="left_column">Tanggal Lahir</td>
                    <td>:
                        <input type="date" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" class="text-input" maxlength="60" size="60" style="width:20%" value="<?php echo $mahasiswa->tanggal_lahir_ibu; ?>">                    </td>
                </tr>
                <tr>
                    <td class="left_column">Pendidikan</td>
                    <td>: <select name="pendidikan_ibu" id="pendidikan_ibu">
                        <option value="<?php echo $mahasiswa->pendidikan_ibu; ?>"><?php echo $mahasiswa->pekerjaan_ibu; ?></option>
                        <option value="Tidak sekolah">Tidak sekolah</option>
                        <option value="PAUD">PAUD</option>
                        <option value="TK / sederajat">TK / sederajat</option>
                        <option value="Putus SD">Putus SD</option>
                        <option value="SD / sederajat">SD / sederajat</option>
                        <option value="SMP / sederajat">SMP / sederajat</option>
                        <option value="SMA / sederajat">SMA / sederajat</option>
                        <option value="Paket A">Paket A</option>
                        <option value="Paket B">Paket B</option>
                        <option value="Paket C">Paket C</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="Profesi">Profesi</option>
                        <option value="Sp-1">Sp-1</option>
                        <option value="S2">S2</option>
                        <option value="S2 Terapan">S2 Terapan</option>
                        <option value="Sp-2">Sp-2</option>
                        <option value="S3">S3</option>
                        <option value="S3 Terapan">S3 Terapan</option>
                        <option value="Non formal">Non formal</option>
                        <option value="Informal">Informal</option>
                        <option value="Lainnya">Lainnya</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="left_column">Pekerjaan</td>
                    <td>: <select name="pekerjaan_ibu" id="pekerjaan_ibu">
                        <option value="<?php echo $mahasiswa->pekerjaan_ibu; ?>"><?php echo $mahasiswa->pekerjaan_ibu; ?></option>
                        <option value="Tidak bekerja">Tidak bekerja</option>
                        <option value="Nelayan">Nelayan</option>
                        <option value="Petani">Petani</option>
                        <option value="Peternak">Peternak</option>
                        <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Pedagang Kecil">Pedagang Kecil</option>
                        <option value="Pedagang Besar">Pedagang Besar</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                        <option value="Lainnya">Lainnya</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="left_column">Penghasilan</td>
                    <td>: <select name="penghasilan_ibu" id="penghasilan_ibu">
                    <option value="<?php echo $mahasiswa->penghasilan_ibu; ?>"><?php echo $mahasiswa->penghasilan_ibu; ?></option>
                     <option value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000</option>
                        <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
                        <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>
                        <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                        <option value="Rp. 5,000,000 - Rp. 20,000,000">Rp. 5,000,000 - Rp. 20,000,000</option>
                        <option value="Lebih dari Rp. 20,000,000">Lebih dari Rp. 20,000,000</option>
                        </select></td>
                </tr>
            </table>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <table width="90%" class="table">
                <tr>
                    <td colspan="2"><strong>Wali</strong></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">Nama</td>
                    <td>: <input type="text" name="nama_wali" id="nama_wali" class="text-input" maxlength="100" size="100" style="width:50%" value="<?php echo $mahasiswa->nama_wali; ?>"></td>
                </tr>
                <tr>
                    <td class="left_column">Tanggal Lahir</td>
                    <td>:
                        <input type="date" name="tanggal_lahir_wali" id="tanggal_lahir_wali" class="text-input" maxlength="50" size="50" style="width:20%" value="<?php echo $mahasiswa->tanggal_lahir_wali; ?>">                                                                    </td>
                </tr>
                <tr>
                    <td class="left_column">Pendidikan</td>
                    <td>: <select name="pendidikan_wali" id="pendidikan_wali">
                        <option value="<?php echo $mahasiswa->pendidikan_wali; ?>"><?php echo $mahasiswa->pendidikan_wali; ?></option>
                        <option value="Tidak sekolah">Tidak sekolah</option>
                        <option value="PAUD">PAUD</option>
                        <option value="TK / sederajat">TK / sederajat</option>
                        <option value="Putus SD">Putus SD</option>
                        <option value="SD / sederajat">SD / sederajat</option>
                        <option value="SMP / sederajat">SMP / sederajat</option>
                        <option value="SMA / sederajat">SMA / sederajat</option>
                        <option value="Paket A">Paket A</option>
                        <option value="Paket B">Paket B</option>
                        <option value="Paket C">Paket C</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="Profesi">Profesi</option>
                        <option value="Sp-1">Sp-1</option>
                        <option value="S2">S2</option>
                        <option value="S2 Terapan">S2 Terapan</option>
                        <option value="Sp-2">Sp-2</option>
                        <option value="S3">S3</option>
                        <option value="S3 Terapan">S3 Terapan</option>
                        <option value="Non formal">Non formal</option>
                        <option value="Informal">Informal</option>
                        <option value="Lainnya">Lainnya</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="left_column">Pekerjaan</td>
                    <td>: <select name="pekerjaan_wali" id="pekerjaan_wali">
                        <option value="<?php echo $mahasiswa->pekerjaan_wali; ?>"><?php echo $mahasiswa->pekerjaan_wali; ?></option>
                        <option value="Tidak bekerja">Tidak bekerja</option>
                        <option value="Nelayan">Nelayan</option>
                        <option value="Petani">Petani</option>
                        <option value="Peternak">Peternak</option>
                        <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Pedagang Kecil">Pedagang Kecil</option>
                        <option value="Pedagang Besar">Pedagang Besar</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                        <option value="Lainnya">Lainnya</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="left_column">Penghasilan</td>
                    <td>: <select name="penghasilan_wali" id="penghasilan_wali">
                        <option value="<?php echo $mahasiswa->penghasilan_wali; ?>"><?php echo $mahasiswa->penghasilan_wali; ?></option>
                        <option value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000</option>
                        <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
                        <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>
                        <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                        <option value="Rp. 5,000,000 - Rp. 20,000,000">Rp. 5,000,000 - Rp. 20,000,000</option>
                        <option value="Lebih dari Rp. 20,000,000">Lebih dari Rp. 20,000,000</option>
                        </select></td>
                </tr>
            </table>

              </div>
              <div class="tab-pane" id="tab_4">
                <table width="90%" class="table">
                <tr>
                    <td class="left_column" width="15%" valign="middle">Mahasiswa</td>
                    <td>
                    <table width="100%">
                    <tr>
                    <td>
                                                            <input type="checkbox" name="id_kk[]" id="id_kk_1#A" value="1#A"> A - Tuna netra<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_2#B" value="2#B"> B - Tuna rungu<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_4#C" value="4#C"> C - Tuna grahita ringan<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_8#C1" value="8#C1"> C1 - Tuna grahita ringan<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_16#D" value="16#D"> D - Tuna daksa ringan<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_32#D1" value="32#D1"> D1 - Tuna daksa sedang<br></td><td>                                        <input type="checkbox" name="id_kk[]" id="id_kk_64#E" value="64#E"> E - Tuna laras<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_128#F" value="128#F"> F - Tuna wicara<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_256#H" value="256#H"> H - Hiperaktif<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_512#I" value="512#I"> I - Cerdas Istimewa<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_1024#J" value="1024#J"> J - Bakat Istimewa<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_2048#K" value="2048#K"> K - Kesulitan Belajar<br></td><td>                                        <input type="checkbox" name="id_kk[]" id="id_kk_4096#N" value="4096#N"> N - Narkoba<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_8192#O" value="8192#O"> O - Indigo<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_16384#P" value="16384#P"> P - Down Syndrome<br>                                        <input type="checkbox" name="id_kk[]" id="id_kk_32768#Q" value="32768#Q"> Q - Autis<br>                                        </td>
                    </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td class="left_column" width="15%" valign="middle">Ayah</td>
                    <td>
                    <table width="100%">
                    <tr>
                    <td>
                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_1#A" value="1#A"> A - Tuna netra<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_2#B" value="2#B"> B - Tuna rungu<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_4#C" value="4#C"> C - Tuna grahita ringan<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_8#C1" value="8#C1"> C1 - Tuna grahita ringan<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_16#D" value="16#D"> D - Tuna daksa ringan<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_32#D1" value="32#D1"> D1 - Tuna daksa sedang<br></td><td>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_64#E" value="64#E"> E - Tuna laras<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_128#F" value="128#F"> F - Tuna wicara<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_256#H" value="256#H"> H - Hiperaktif<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_512#I" value="512#I"> I - Cerdas Istimewa<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_1024#J" value="1024#J"> J - Bakat Istimewa<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_2048#K" value="2048#K"> K - Kesulitan Belajar<br></td><td>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_4096#N" value="4096#N"> N - Narkoba<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_8192#O" value="8192#O"> O - Indigo<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_16384#P" value="16384#P"> P - Down Syndrome<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ayah[]" id="id_kebutuhan_khusus_ayah_32768#Q" value="32768#Q"> Q - Autis<br>                                        </td>
                    </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td class="left_column" width="15%" valign="middle">Ibu</td>
                    <td>
                    <table width="100%">
                    <tr>
                    <td>
                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_1#A" value="1#A"> A - Tuna netra<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_2#B" value="2#B"> B - Tuna rungu<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_4#C" value="4#C"> C - Tuna grahita ringan<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_8#C1" value="8#C1"> C1 - Tuna grahita ringan<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_16#D" value="16#D"> D - Tuna daksa ringan<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_32#D1" value="32#D1"> D1 - Tuna daksa sedang<br></td><td>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_64#E" value="64#E"> E - Tuna laras<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_128#F" value="128#F"> F - Tuna wicara<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_256#H" value="256#H"> H - Hiperaktif<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_512#I" value="512#I"> I - Cerdas Istimewa<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_1024#J" value="1024#J"> J - Bakat Istimewa<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_2048#K" value="2048#K"> K - Kesulitan Belajar<br></td><td>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_4096#N" value="4096#N"> N - Narkoba<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_8192#O" value="8192#O"> O - Indigo<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_16384#P" value="16384#P"> P - Down Syndrome<br>                                        <input type="checkbox" name="id_kebutuhan_khusus_ibu[]" id="id_kebutuhan_khusus_ibu_32768#Q" value="32768#Q"> Q - Autis<br>                                        </td>
                    </tr>
                    </table>
                    </td>
                </tr>
            </table>
            </form>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->