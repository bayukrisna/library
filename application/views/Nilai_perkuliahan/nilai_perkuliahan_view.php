<!-- <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<script type="text/javascript">
     function total(id){
      var id_kp = id;
         $.ajax({
                    url: '<?php echo base_url(); ?>kelas_perkuliahan/get_total_mhs/'+id_kp,
                    data: 'id_kp='+id_kp,
                    type: 'GET',
                    success: function(data) {
                      console.log('poop', data)
                    }
                });
       };
       window.get_total_mhs=total;
    get_total_mhs(10);
</script> -->

    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Nilai Perkuliahan</h3>
            </div>
            <div class="box-body">
              <table class="">
                <tbody>
                  <form method="get" action="<?php echo base_url("nilai_perkuliahan/filter_kp/")?>">
                  <tr>
                    <th>Filter</th>
                  </tr>
                  <tr>                                                                    
                    <td>Program Studi</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      <select name="id_prodi" onchange="return get_prodi_periode2(this.value)">
                        <option value="">-- Semua --</option>
                        <?php 

                                        foreach($getProdi as $row)
                                        { 
                                          echo '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
                                        }
                                    ?>
                      </select>

                    </td>                                            
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semester</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="id_periode" id="id_periode2">
                        <option value="">-- Semua --</option>
              
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

              <table id="example3" class="table2 table-bordered table-striped">
                
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode MK</th>
                  <th>Nama MK</th>
                  <th>Nama Kelas</th>
                  <th>Bobot MK (SKS)</th>
                  <th>KRS</th>
                  <th>Jumlah Mahasiswa</th>
                </tr>
                 
                </thead>

                <tbody>

                <?php 
                $no = 0;
                 $alert = "'Apakah anda yakin menghapus data ini ?'";
                foreach ($kp as $data) { ?>
                   <script type="text/javascript" > 
                      get_total_mhs(10);
                   </script>                  
                 <?php 
                  echo '                  
                <tr>
                  <td>'.++$no.'</td>
                  <td><a href="'.base_url('nilai_perkuliahan/detail_nilai/'.$data->id_kp).'">'.$data->kode_matkul.'</a></td>
                  <td>'.$data->nama_matkul.'</td>
                  <td>'.$data->nama_kelas.'</td>
                  <td>'.$data->bobot_matkul.'</td>
                  <td>'.$data->total_mhs.'</td>
                  <td>'.$data->total_mhs.'</td>
                  
                  </tr>
                ' ;
                
                
              }
              ?>
        
                </tbody>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
<script type="text/javascript">
            function get_prodi_periode2(p) {
                var id_prodi = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>kurikulum/get_prodi_periode/'+id_prodi,
                    data: 'id_prodi='+id_prodi,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_periode2").html(msg);
                    }
                });
            }
</script>
