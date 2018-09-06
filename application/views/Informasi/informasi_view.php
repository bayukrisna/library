      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mahasiswa Lulus atau Drop Out</h3>
            </div>
            <div class="box-body">
              <?php if ($this->session->userdata('level') != 5) { ?>
                
              <table class="">
                <tbody>
                  <form method="get" action="<?php echo base_url("informasi/filter_informasi/")?>">
                  <tr>
                    <th>Filter</th>
                  </tr>
                  <tr>                                                                    
                    <td>Jabatan</td>     
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      <select name="id_level">
                        <option value="">-- Semua --</option>
                        <?php 

                                        foreach($getJabatan as $row)
                                        { 
                                          echo '<option value="'.$row->id_level.'">'.$row->nama_level.'</option>';
                                        }
                                    ?>
                      </select>

                    </td>                                            
                    
                    <td>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="Cari">  
                    </td>

                  </tr>

                
                </tbody>
              </table>
                      
               </form>
             <?php } ?>
             <?php if ($this->session->userdata('level') != 5) { ?>
              <table id="example1" class="table table-bordered table-striped">

                <br>
                <?php if($this->session->userdata('level') == 1 OR $this->session->userdata('level') == 6) { ?>
               <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#modal_view"><i class="fa fa-plus"></i> Tambah </a>
                  <?php } else { ?>
                <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#modal_view2"><i class="fa fa-plus"></i> Tambah </a>
                  <?php } ?>

               <br> <br>
             
                <thead>
                <tr>
                  <th style="width:10%">No</th>
                  <th>Judul Informasi</th>
                  <th>Pengirim</th>
                  <th>Penerima</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                

                foreach ($informasi as $data) {
                  if($this->session->userdata('level') != 1 AND $this->session->userdata('level') != 6){
                 if ($data->pengirim == $this->session->userdata('level') OR $data->penerima == $this->session->userdata('level')) {
                   
                 
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_lihat'.$data->id_info.'">'.$data->judul_info.'</a></td>
                  <td>'.$data->pengirimh.'</td>
                  <td>'.$data->penerimah.'</td>
                  <td><a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_info.'"><i class="fa fa-pencil"> </i></a></td>
                  

       
                ' ;
                }
              } else {
                
                echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_lihat'.$data->id_info.'">'.$data->judul_info.'</a></td>
                  <td>'.$data->pengirimh.'</td>
                  <td>'.$data->penerimah.'</td>
                  <td><a href="" data-toggle="modal" data-target="#modal_edit'.$data->id_info.'"><i class="fa fa-pencil"> </i></a></td>
                  

       
                ' ;
                
              }
              } 
            
              ?>
                </tbody>
              </table>
            <?php } else { ?>
              <table id="example1" class="table table-bordered table-striped">

                
             
                <thead>
                <tr>
                  <th style="width:10%">No</th>
                  <th>Judul Informasi</th>
                  <th>Deskripsi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $no = 0;
                foreach ($informasi as $data) {
                  echo '
                  
                <tr>
                  <td>'.++$no.'</td>

                  <td><a href="" data-toggle="modal" data-target="#modal_lihat'.$data->id_info.'">'.$data->judul_info.'</a></td>
                  <td>'.$data->deskripsi_info.'</td>
                  

       
                ' ;
                
              }
              ?>
                </tbody>
              </table>
            <?php } ?>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

        <div class="modal fade" id="modal_view2" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Informasi</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('informasi/simpan_informasi2'); ?>
                      <table class="table">
                          <tr>
          <td class="left_column">Judul <font color="#FF0000">*</font></td>
            <td> 
      <input type="text" name="judul_info" id="judul_info" class="validate[required] text-input" style="width:300px" required="">   
            </td>
        </tr>
        <tr>
          <td class="left_column">Deskripsi <font color="#FF0000">*</font></td>
            <td> 
         <textarea wrap="soft" name="deskripsi_info" id="deskripsi_info" rows="5" cols="40"></textarea>          </td>
        </tr> 
      <tr>
          <td class="left_column">Ditujukan untuk <font color="#FF0000">*</font></td>
            <td> 
         <select name="id_level" required="">
                        <option value=""> Pilih Jabatan </option>
                        <?php 

                                        foreach($getJabatan as $row)
                                        { 
                                          echo '<option value="'.$row->id_level.'">'.$row->nama_level.'</option>';
                                        }
                                    ?>
                      </select>           </td>
        </tr> 
        <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info" id="MyBtn">Simpan</button></td>
                  </tr>

                        </table>
                        <?php echo form_close();?>

                    </div>

                </div>
            </div>
            </div>
        </div>



        <div class="modal fade" id="modal_view" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Informasi</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('informasi/simpan_informasi'); ?>
                      <table class="table">
                          <tr>
          <td class="left_column">Judul <font color="#FF0000">*</font></td>
            <td> 
      <input type="text" name="judul_info" id="judul_info" class="validate[required] text-input" style="width:300px" required="">   
            </td>
        </tr>
        <tr>
          <td class="left_column">Deskripsi <font color="#FF0000">*</font></td>
            <td> 
         <textarea wrap="soft" name="deskripsi_info" id="deskripsi_info" rows="5" cols="40"></textarea>          </td>
        </tr> 
      <tr>
          <td class="left_column">Ditujukan untuk <font color="#FF0000">*</font></td>
            <td> 
         <select name="id_level" required="">
                        <option value=""> Pilih Jabatan </option>
                        <?php 

                                        foreach($getJabatan as $row)
                                        { 
                                          echo '<option value="'.$row->id_level.'">'.$row->nama_level.'</option>';
                                        }
                                    ?>
                      </select>           </td>
        </tr> 
        <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info" id="MyBtn">Simpan</button></td>
                  </tr>

                        </table>
                        <?php echo form_close();?>

                    </div>

                </div>
            </div>
            </div>
        </div>



   

    <?php 
        foreach($informasi as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->id_info;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit Informasi</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      <?php echo form_open('informasi/edit_informasi'); ?>
                      <table class="table">
      <tr>
          <td class="left_column">Judul <font color="#FF0000">*</font></td>
            <td> 
      <input type="text" name="judul_info" id="judul_info" class="validate[required] text-input" style="width:300px" required="" value="<?php echo $i->judul_info; ?>"> 
      <input type="text" name="id_info" id="id_info" class="validate[required] text-input" style="width:300px" required="" value="<?php echo $i->id_info; ?>">   
            </td>
        </tr>
        <tr>
          <td class="left_column">Deskripsi <font color="#FF0000">*</font></td>
            <td> 
         <textarea wrap="soft" name="deskripsi_info" id="deskripsi_info" rows="5" cols="40"><?php echo $i->deskripsi_info; ?></textarea>          </td>
        </tr> 
      <tr>
          <td class="left_column">Ditujukan untuk <font color="#FF0000">*</font></td>
            <td> 
         <select name="id_level" required="">
                        <option value="<?php echo $i->id_level; ?>"><?php echo $i->nama_level; ?></option>
                        <?php 

                                        foreach($getJabatan as $row)
                                        { 
                                          echo '<option value="'.$row->id_level.'">'.$row->nama_level.'</option>';
                                        }
                                    ?>
                      </select>           </td>
        </tr> 
        <tr>
                    <td colspan="4"><button type="submit" class="btn btn-info" id="MyBtn">Simpan</button></td>
                  </tr>
    </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>

    <?php endforeach;?>

    <?php 
        foreach($informasi as $i):
        ?>
        <div class="modal fade" id="modal_lihat<?php echo $i->id_info;?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Detail Informasi</h3>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                      
                      <table class="table">
      <tr>
          <td class="left_column" style="width:20%">Judul </td>
            <td>: <?php echo $i->judul_info; ?>   
            </td>
        </tr>
        <tr>
          <td class="left_column">Deskripsi </td>
            <td>: <?php echo $i->deskripsi_info; ?>          </td>
        </tr> 
      <tr>
          <td class="left_column">Ditujukan untuk</td>
            <td>: <?php echo $i->nama_level; ?>         </td>
        </tr> 
        
    </table>

                    </div>

                </div>
            </div>
            </div>
        </div>
        

    <?php endforeach;?>


    

