        <div class="box box-info">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
        <tr>
            <td width="15%" class="left_column">Nama <font color="#FF0000">*</font></td>
            <td >:
        ANINDYA FELITA SYARIENDRAR      </td>
      
            <td class="left_column">Nama Ibu <font color="#FF0000">*</font></td>
            <td>:  
            KRISSEPTIANA                            
            <input type="hidden" name="stat_pd" value="A">
            </td>
        </tr>
        <tr>
            <td class="left_column" width="15%">Tempat Lahir <font color="#FF0000">*</font></td>
            <td width="35%">: SEMARANG            </td>
            <td class="left_column" width="15%">Tanggal Lahir <font color="#FF0000">*</font></td>
            <td>:
                19-09-1999                            </td>
        </tr>
        <tr>
            <td class="left_column">Jenis Kelamin</td>
            <td>: Perempuan</td>
            <td class="left_column">Agama <font color="#FF0000">*</font></td>
            <td>:  <select name="id_jns_tinggal" id="id_jns_tinggal">
<option value="">Agama</option>
<option value="1">Bersama orang tua</option>
<option value="2">Wali</option>
<option value="3">Kost</option>
<option value="4">Asrama</option>
<option value="5">Panti asuhan</option>
<option value="99">Lainnya</option>
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
              <li class="pull-right"><button class="btn btn-sm btn-danger" >Batal</button> </li>
              <li class="pull-right"><button class="btn btn-sm btn-success" >Simpan</button> </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table width="90%" class="table">
                <tr>
                    <td class="left_column" width="15%">NIK <font color="#FF0000">*</font></td>
                    <td colspan="4">:  <input type="text" name="nik" id="nik" value="3374115509710003" class="validate[required] text-input" maxlength="16" size="50" style="width:40%">                            <font color="grey"><em> ( Nomor KTP tanpa tanda baca ) </em></font>
                    </td>
                </tr>
        <tr>
                    <td class="left_column" width="15%">NISN</td>
                    <td colspan="5">: <input type="text" name="nisn" id="nisn" class="text-input" maxlength="10" size="10" style="width:70%"></td>
                </tr>
        <tr>
                    <td class="left_column" width="15%">NPWP</td>
                    <td colspan="5">: <input type="text" name="npwp" id="npwp" class="text-input" maxlength="15" size="15" style="width:70%"></td>
                </tr>
                <tr>
                    <td class="left_column">Kewarganegaraan <font color="#FF0000">*</font></td>
                    <td colspan="5">: 
                    <input type="text" name="negara" id="negara" value="Indonesia" class="validate[required] text-input" style="width:70%">                    <input type="hidden" name="kewarganegaraan" id="kewarganegaraan" value="ID" />
                    </td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">Jalan</td>
                    <td colspan="5">: <input type="text" name="jln" id="jln" class="text-input" maxlength="80" size="80" style="width:70%"></td>
                </tr>
                <tr>
                    <td class="left_column">Dusun</td>
                    <td>: <input type="text" name="nm_dsn" id="nm_dsn" class="text-input" maxlength="60" size="60" style="width:80%"></td>
                    <td class="left_column">RT</td>
                    <td >: <input type="text" name="rt" id="rt" class="text-input" maxlength="2" size="2" style="width:50%" onkeydown="return onlyNumber(event,this,false,false)">  </td>
                    <td class="left_column">RW</td>
                    <td>: <input type="text" name="rw" id="rw" class="text-input" maxlength="2" size="2" style="width:50%" onkeydown="return onlyNumber(event,this,false,false)"></td>
                </tr>
                <tr>
                    <td class="left_column">Kelurahan <font color="#FF0000">*</font></td>
                    <td>: <input type="text" name="ds_kel" id="ds_kel" value="LEMPONG SARI" class="validate[required] text-input" maxlength="60" size="60" style="width:80%"></td>
                    <td class="left_column">Kodepos</td>
                    <td colspan="4">: <input type="text" name="kode_pos" id="kode_pos" class="text-input" maxlength="5" size="5" style="width:30%" onkeydown="return onlyNumber(event,this,false,false)"></td>
                </tr>
                <tr>
                    <td class="left_column">Kecamatan <font color="#FF0000">*</font></td>
                    <td colspan="5">: 
                    <input type="text" name="wilayah" id="wilayah" value="Kec. Gajah Mungkur -  Kota Semarang - Prop. Jawa Tengah" class="validate[required] text-input" style="width:70%">                    <input type="hidden" name="id_wil" id="id_wil" value="036304  " />
                    </td>
                </tr>
                <tr>
                    <td class="left_column">Jenis Tinggal</td>
                    <td colspan="5">: <select name="id_jns_tinggal" id="id_jns_tinggal">
<option value="">-- Pilih Jenis Tinggal --</option>
<option value="1">Bersama orang tua</option>
<option value="2">Wali</option>
<option value="3">Kost</option>
<option value="4">Asrama</option>
<option value="5">Panti asuhan</option>
<option value="99">Lainnya</option>
</select></td>
                </tr>
                 <tr>
                    <td class="left_column">Alat Transportasi</td>
                    <td colspan="5">: <select name="id_alat_transport" id="id_alat_transport">
<option value="">-- Pilih Alat Transportasi --</option>
<option value="1">Jalan kaki</option>
<option value="3">Angkutan umum/bus/pete-pete</option>
<option value="4">Mobil/bus antar jemput</option>
<option value="5">Kereta api</option>
<option value="6">Ojek</option>
<option value="7">Andong/bendi/sado/dokar/delman/becak</option>
<option value="8">Perahu penyeberangan/rakit/getek</option>
<option value="11">Kuda</option>
<option value="12">Sepeda</option>
<option value="13">Sepeda motor</option>
<option value="14">Mobil pribadi</option>
<option value="99">Lainnya</option>
</select></td>
                </tr>
                <tr>
                    <td class="left_column">Telepon</td>
                    <td>: <input type="text" name="no_tel_rmh" id="no_tel_rmh" class="text-input" maxlength="20" size="20" style="width:30%"></td>
                    <td class="left_column">HP</td>
                    <td colspan="4">: <input type="text" name="no_hp" id="no_hp" class="text-input" maxlength="20" size="20" style="width:30%"></td>
                </tr>
                <tr>
                    <td class="left_column">Email</td>
                    <td colspan="5">: <input type="text" name="email" id="email" class="text-input" maxlength="60" size="60" style="width:30%"></td>
                </tr>
                <tr>
                    <td class="left_column">Penerima KPS ? <font color="#FF0000">*</font></td>
                    <td>: 
                    <label class="radio-inline"><input type="radio" name="a_terima_kps" value="0" checked > Tidak</label> &nbsp; 
<label class="radio-inline"><input type="radio" name="a_terima_kps" value="1" > Ya</label> &nbsp; 
</td>
                    <td class="left_column">No KPS</td>
                    <td colspan = '4'>: <input type="text" name="no_kps" id="no_kps" class="text-input" maxlength="80" size="80" disabled style="width:50%"></td>
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
                    <td>:  <input type="text" name="nik_ayah" id="nik_ayah" class="text-input" maxlength="16" size="50" style="width:40%" onkeydown="return onlyNumber(event,this,false,false)">                            <font color="grey"><em> ( Nomor KTP tanpa tanda baca ) </em></font>
                    </td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">Nama</td>
                    <td>: <input type="text" name="nm_ayah" id="nm_ayah" class="text-input" maxlength="100" size="100" style="width:50%"></td>
                </tr>
                <tr>
                    <td class="left_column">Tanggal Lahir</td>
                    <td>:
                        <input type="text" name="tgl_lahir_ayah" id="tgl_lahir_ayah" class="text-input" maxlength="50" size="50" style="width:20%">                                                                    </td>
                </tr>
                <tr>
                    <td class="left_column">Pendidikan</td>
                    <td>: <select name="id_jenjang_pendidikan_ayah" id="id_jenjang_pendidikan_ayah">
<option value="">-- Pilih Jenjang --</option>
<option value="0">Tidak sekolah</option>
<option value="1">PAUD</option>
<option value="2">TK / sederajat</option>
<option value="3">Putus SD</option>
<option value="4">SD / sederajat</option>
<option value="5">SMP / sederajat</option>
<option value="6">SMA / sederajat</option>
<option value="7">Paket A</option>
<option value="8">Paket B</option>
<option value="9">Paket C</option>
<option value="20">D1</option>
<option value="21">D2</option>
<option value="22">D3</option>
<option value="23">D4</option>
<option value="30">S1</option>
<option value="31">Profesi</option>
<option value="32">Sp-1</option>
<option value="35">S2</option>
<option value="36">S2 Terapan</option>
<option value="37">Sp-2</option>
<option value="40">S3</option>
<option value="41">S3 Terapan</option>
<option value="90">Non formal</option>
<option value="91">Informal</option>
<option value="99">Lainnya</option>
</select></td>
                </tr>
                <tr>
                    <td class="left_column">Pekerjaan</td>
                    <td>: <select name="id_pekerjaan_ayah" id="id_pekerjaan_ayah">
<option value="">-- Pilih Pekerjaan --</option>
<option value="1">Tidak bekerja</option>
<option value="2">Nelayan</option>
<option value="3">Petani</option>
<option value="4">Peternak</option>
<option value="5">PNS/TNI/Polri</option>
<option value="6">Karyawan Swasta</option>
<option value="7">Pedagang Kecil</option>
<option value="8">Pedagang Besar</option>
<option value="9">Wiraswasta</option>
<option value="10">Wirausaha</option>
<option value="11">Buruh</option>
<option value="12">Pensiunan</option>
<option value="98">Sudah Meninggal</option>
<option value="99">Lainnya</option>
</select></td>
                </tr>
                <tr>
                    <td class="left_column">Penghasilan</td>
                    <td>: <select name="id_penghasilan_ayah" id="id_penghasilan_ayah">
<option value="">-- Pilih Penghasilan --</option>
<option value="0"> </option>
<option value="11">Kurang dari Rp. 500,000</option>
<option value="12">Rp. 500,000 - Rp. 999,999</option>
<option value="13">Rp. 1,000,000 - Rp. 1,999,999</option>
<option value="14">Rp. 2,000,000 - Rp. 4,999,999</option>
<option value="15">Rp. 5,000,000 - Rp. 20,000,000</option>
<option value="16">Lebih dari Rp. 20,000,000</option>
</select></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Ibu</strong></td>
                </tr>
                <tr>
                    <td class="left_column" width="15%">NIK</td>
                    <td>:  <input type="text" name="nik_ibu" id="nik_ibu" class="text-input" maxlength="16" size="50" style="width:40%" onkeydown="return onlyNumber(event,this,false,false)">                            <font color="grey"><em> ( Nomor KTP tanpa tanda baca ) </em></font>
                    </td>
                </tr>
                
                <tr>
                    <td class="left_column">Nama</td>
                    <td>:
            KRISSEPTIANA</td>
                </tr>
                <tr>
                    <td class="left_column">Tanggal Lahir</td>
                    <td>:
                        <input type="text" name="tgl_lahir_ibu" id="tgl_lahir_ibu" class="text-input" maxlength="60" size="60" style="width:20%">                    </td>
                </tr>
                <tr>
                    <td class="left_column">Pendidikan</td>
                    <td>: <select name="id_jenjang_pendidikan_ibu" id="id_jenjang_pendidikan_ibu">
<option value="">-- Pilih Jenjang --</option>
<option value="0">Tidak sekolah</option>
<option value="1">PAUD</option>
<option value="2">TK / sederajat</option>
<option value="3">Putus SD</option>
<option value="4">SD / sederajat</option>
<option value="5">SMP / sederajat</option>
<option value="6">SMA / sederajat</option>
<option value="7">Paket A</option>
<option value="8">Paket B</option>
<option value="9">Paket C</option>
<option value="20">D1</option>
<option value="21">D2</option>
<option value="22">D3</option>
<option value="23">D4</option>
<option value="30">S1</option>
<option value="31">Profesi</option>
<option value="32">Sp-1</option>
<option value="35">S2</option>
<option value="36">S2 Terapan</option>
<option value="37">Sp-2</option>
<option value="40">S3</option>
<option value="41">S3 Terapan</option>
<option value="90">Non formal</option>
<option value="91">Informal</option>
<option value="99">Lainnya</option>
</select></td>
                </tr>
                <tr>
                    <td class="left_column">Pekerjaan</td>
                    <td>: <select name="id_pekerjaan_ibu" id="id_pekerjaan_ibu">
<option value="">-- Pilih Pekerjaan --</option>
<option value="1">Tidak bekerja</option>
<option value="2">Nelayan</option>
<option value="3">Petani</option>
<option value="4">Peternak</option>
<option value="5">PNS/TNI/Polri</option>
<option value="6">Karyawan Swasta</option>
<option value="7">Pedagang Kecil</option>
<option value="8">Pedagang Besar</option>
<option value="9">Wiraswasta</option>
<option value="10">Wirausaha</option>
<option value="11">Buruh</option>
<option value="12">Pensiunan</option>
<option value="98">Sudah Meninggal</option>
<option value="99">Lainnya</option>
</select></td>
                </tr>
                <tr>
                    <td class="left_column">Penghasilan</td>
                    <td>: <select name="id_penghasilan_ibu" id="id_penghasilan_ibu">
<option value="">-- Pilih Penghasilan --</option>
<option value="0"> </option>
<option value="11">Kurang dari Rp. 500,000</option>
<option value="12">Rp. 500,000 - Rp. 999,999</option>
<option value="13">Rp. 1,000,000 - Rp. 1,999,999</option>
<option value="14">Rp. 2,000,000 - Rp. 4,999,999</option>
<option value="15">Rp. 5,000,000 - Rp. 20,000,000</option>
<option value="16">Lebih dari Rp. 20,000,000</option>
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
                    <td>: <input type="text" name="nm_wali" id="nm_wali" class="text-input" maxlength="100" size="100" style="width:50%"></td>
                </tr>
                <tr>
                    <td class="left_column">Tanggal Lahir</td>
                    <td>:
                        <input type="text" name="tgl_lahir_wali" id="tgl_lahir_wali" class="text-input" maxlength="50" size="50" style="width:20%">                                                                    </td>
                </tr>
                <tr>
                    <td class="left_column">Pendidikan</td>
                    <td>: <select name="id_jenjang_pendidikan_wali" id="id_jenjang_pendidikan_wali">
<option value="">-- Pilih Jenjang --</option>
<option value="0">Tidak sekolah</option>
<option value="1">PAUD</option>
<option value="2">TK / sederajat</option>
<option value="3">Putus SD</option>
<option value="4">SD / sederajat</option>
<option value="5">SMP / sederajat</option>
<option value="6">SMA / sederajat</option>
<option value="7">Paket A</option>
<option value="8">Paket B</option>
<option value="9">Paket C</option>
<option value="20">D1</option>
<option value="21">D2</option>
<option value="22">D3</option>
<option value="23">D4</option>
<option value="30">S1</option>
<option value="31">Profesi</option>
<option value="32">Sp-1</option>
<option value="35">S2</option>
<option value="36">S2 Terapan</option>
<option value="37">Sp-2</option>
<option value="40">S3</option>
<option value="41">S3 Terapan</option>
<option value="90">Non formal</option>
<option value="91">Informal</option>
<option value="99">Lainnya</option>
</select></td>
                </tr>
                <tr>
                    <td class="left_column">Pekerjaan</td>
                    <td>: <select name="id_pekerjaan_wali" id="id_pekerjaan_wali">
<option value="">-- Pilih Pekerjaan --</option>
<option value="1">Tidak bekerja</option>
<option value="2">Nelayan</option>
<option value="3">Petani</option>
<option value="4">Peternak</option>
<option value="5">PNS/TNI/Polri</option>
<option value="6">Karyawan Swasta</option>
<option value="7">Pedagang Kecil</option>
<option value="8">Pedagang Besar</option>
<option value="9">Wiraswasta</option>
<option value="10">Wirausaha</option>
<option value="11">Buruh</option>
<option value="12">Pensiunan</option>
<option value="98">Sudah Meninggal</option>
<option value="99">Lainnya</option>
</select></td>
                </tr>
                <tr>
                    <td class="left_column">Penghasilan</td>
                    <td>: <select name="id_penghasilan_wali" id="id_penghasilan_wali">
<option value="">-- Pilih Penghasilan --</option>
<option value="0"> </option>
<option value="11">Kurang dari Rp. 500,000</option>
<option value="12">Rp. 500,000 - Rp. 999,999</option>
<option value="13">Rp. 1,000,000 - Rp. 1,999,999</option>
<option value="14">Rp. 2,000,000 - Rp. 4,999,999</option>
<option value="15">Rp. 5,000,000 - Rp. 20,000,000</option>
<option value="16">Lebih dari Rp. 20,000,000</option>
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

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
