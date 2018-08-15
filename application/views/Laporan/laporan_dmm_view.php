
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Mahasiswa Per Periode</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Filter</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="ss" id="ss" class="form-control" required="" onchange="semester(this.value)">
                      <option value="">Pilih Filter</option>
                      <option value="dosen">Dosen</option>   
                      <option value="mahasiswa">Mahasiswa</option>
                      <option value="matakuliah">Mata Kuliah</option>      
                              
              </select>
            
                    </div>
              
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Semester</label>

                  <div class="col-sm-10">
                    <div class="col-sm-4">
                    <select name="ssa" id="ssa" class="form-control" required="">
                      <option value="">Pilih Semester</option>
                       <?php 

                            foreach($getSemester as $row)
                            { 
                              echo '<option value="'.$row->semester.'">'.$row->semester.'</option>';
                            }
                            ?>   
                      </select>
            
                    </div>
              
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Dosen</label>

                  <div class="col-sm-10">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="">
                    </div>
                  </div>

                </div>
                
                    

                    
                  </div>

                </div>
                <br>
              <p class="btn btn-info" onclick="tampil()">Tampilkan</p>
                    <p class="btn btn-primary" onclick="print1()"> Cetak </p>

              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>
           <div class="box" id="show_data">
            </div>
<script type="text/javascript">
  function semester(p){
    var filter = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>laporan/get_semester_dmm/',
                    data: 'filter='+filter,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#show_semester").html(msg);

                    }
                });
  }
  function tampil(){
      $.ajax({
                    url: '<?php echo base_url(); ?>laporan/laporan_dmmku/',
                    data: 'id_periode='+document.getElementById("ss").value+'&id_prodi='+document.getElementById("sa").value,
                    type: 'GET',
                    dataType: 'html',
                    success:function(data){
                    $("#show_data").html(data);
                    },
                    error:function (){}
                });
    }
</script>
<script>
    function print1(){
     var printContents = document.getElementById("ea").innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents; 
    }
  </script>