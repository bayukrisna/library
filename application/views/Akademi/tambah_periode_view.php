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
			 <select id="id_prodi" required="" name="id_prodi">
                    <option value="">Pilih Prodi</option>   
                    <?php 

                  foreach($getProdi as $row)
                  { 
                    echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                  }
                  ?>
                  </select> 
             </td>
        </tr>
        <tr>
        	<td class="left_column">Target Mahasiswa Baru</td>
            <td>: <input type="number" name="target_mhs_baru" id="target_mhs_baru" class="text-input" style="width:50px"></td>
        </tr> 
        <tr>
        	<td class="left_column">Pendaftar Ikut Seleksi</td>
            <td>: <input type="number" name="pendaftar_ikut_seleksi" id="pendaftar_ikut_seleksi" class="text-input" style="width:50px"></td>
        </tr> 
        <tr>
        	<td class="left_column">Pendaftar Lulus Seleksi</td>
            <td>: <input type="number" name="pendaftar_lulus_seleksi" id="target_mhs_baru" class="text-input" style="width:50px"></td>
        </tr> 
        <tr>
        	<td class="left_column">Daftar Ulang</td>
            <td>: <input type="number" name="daftar_ulang" id="target_mhs_baru" class="text-input" style="width:50px"></td>
        </tr>
        <tr>
        	<td class="left_column">Mengundurkan Diri</td>
            <td>: <input type="number" name="mengundurkan_diri" id="target_mhs_baru" class="text-input" style="width:50px"></td>
        </tr> 
        <tr>
         <td class="left_column">Tanggal Perkuliahan  <font color="#FF0000">*</font></td>
            <td>:
				<input type="date" name="tgl_awal_kul" id="tgl_awal_kul"  maxlength="50" size="50" style="width:20%">           		<strong>s/d</strong>
				<input type="date" name="tgl_akhir_kul" id="tgl_akhir_kul"  text-input" maxlength="50" size="50" style="width:20%">            </td>
        </tr>
        <tr>
        	<td class="left_column">Jumlah Minggu Pertemuan </td>
            <td>: <input type="number" name="jumlah_minggu_pertemuan" id="target_mhs_baru" class="text-input" style="width:50px"></td>
        </tr> 
        <tr>
        	<td colspan="4"><button type="submit" class="btn btn-info">Tambah</button>
            <button type="reset" class="btn btn-default">Reset</button></td>
        </tr>
    </table>
</div>