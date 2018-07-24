<div class="panel panel-primary">
            <div class="panel-heading">
            <i class="fa fa-user-plus"></i> Tambah Prodi</div>
            <div class="panel-body">
              <div class="row">

<table class="table">
    	<tr>
        	<td>Semester <font color="#FF0000">*</font></td>
            <td colspan="9">:  2018/2019 Ganjil            <input type="hidden" name="id_smt" id="id_smt" value="20181" />
        </tr>
    	<tr>
        	<td class="left_column" width="20%">Program Studi <font color="#FF0000">*</font></td>
            <td>: 
			 <select name="id_sms" id="id_sms" class="validate[required]">
				<option value="">-- Program Studi --</option>
				<option value="681d9cf5-ecc1-4b67-a3a7-ecc045ea5a8b">S1 Akuntansi</option>
				<option value="854f9922-ca37-4ec9-9027-e5bfa194af34">S1 Manajemen</option>
			</select></td>
        </tr>
        <tr>
        	<td class="left_column">Target Mahasiswa Baru</td>
            <td>: <input type="text" name="target_mhs_baru" id="target_mhs_baru" class="text-input" maxlength="6" size="6" style="width:50px" onkeydown="return onlyNumber(event,this,false,false)"></td>
        </tr> 
        <tr>
        	<td class="left_column">Pendaftar Ikut Seleksi</td>
            <td>: <input type="text" name="calon_ikut_seleksi" id="calon_ikut_seleksi" class="text-input" maxlength="6" size="6" style="width:50px" onkeydown="return onlyNumber(event,this,false,false)"></td>
        </tr> 
        <tr>
        	<td class="left_column">Pendaftar Lulus Seleksi</td>
            <td>: <input type="text" name="calon_lulus_seleksi" id="calon_lulus_seleksi" class="text-input" maxlength="6" size="6" style="width:50px" onkeydown="return onlyNumber(event,this,false,false)"></td>
        </tr> 
        <tr>
        	<td class="left_column">Daftar Ulang</td>
            <td>: <input type="text" name="daftar_sbg_mhs" id="daftar_sbg_mhs" class="text-input" maxlength="6" size="6" style="width:50px" onkeydown="return onlyNumber(event,this,false,false)"></td>
        </tr>
        <tr>
        	<td class="left_column">Mengundurkan Diri</td>
            <td>: <input type="text" name="pst_undur_diri" id="pst_undur_diri" class="text-input" maxlength="5" size="5" style="width:50px" onkeydown="return onlyNumber(event,this,false,false)"></td>
        </tr> 
        <tr>
         <td class="left_column">Tanggal Perkuliahan  <font color="#FF0000">*</font></td>
            <td>:
				<input type="text" name="tgl_awal_kul" id="tgl_awal_kul" class="validate[required] text-input" maxlength="50" size="50" style="width:20%">           		<strong>s/d</strong>
				<input type="text" name="tgl_akhir_kul" id="tgl_akhir_kul" class="validate[required] text-input" maxlength="50" size="50" style="width:20%">            </td>
        </tr>
        <tr>
        	<td class="left_column">Jumlah Minggu Pertemuan </td>
            <td>: <input type="text" name="jml_mgu_kul" id="jml_mgu_kul" class="text-input" maxlength="2" size="2" style="width:50px" onkeydown="return onlyNumber(event,this,false,false)"></td>
        </tr> 
        <tr>
        	<td colspan="4"><button type="submit" class="btn btn-info">Tambah</button>
            <button type="reset" class="btn btn-default">Reset</button></td>
        </tr>
    </table>
</div>