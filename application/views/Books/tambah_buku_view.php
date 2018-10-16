      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Buku</h3>
              <?php $cart_check = $this->cart->contents(); ?>
                
                <button type="submit" class="btn btn-success pull-right" ><i class="fa fa-check"></i> Simpan </button>';
                    
            <?php echo form_close();?>
          
            </div>

            
            <!-- /.box-header -->
            <div class="box-body form-horizontal">
              <div class="col-md-6">
              <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Number</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="id_number" name="id_number" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subject Heading</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="subject_heading" name="subject_heading" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Classification</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="classification" name="classification" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Catalogue Groups</label>

                  <div class="col-sm-8">
                    <select class="select2" style="width:100%" name="id_cg" id="id_cg" onchange="return get_dcg(this.value)">
                                  <option value="" selected="selected"> Choose Catalogue Group </option>
                                      <?php 

                                    foreach($getCG as $row)
                                    { 
                                      echo '<option value="'.$row->id_cg.'">'.$row->catalogue_group.'</option>';
                                    }
                                    ?>
                              </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Catalogue Group Types</label>

                  <div class="col-sm-8">
                    <select class="select2" style="width:100%" name="id_dcg" id="id_dcg">
                                  <option value="" selected="selected"> Choose Catalogue Group First </option>
                                     
                              </select>
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Title</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="title" name="title" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Subtitle</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Author</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="author" name="author" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Additional Author</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="add_author" name="add_author" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Editor</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="edior" name="editor" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Publication Year</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="pub_year" name="pub_year" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">ISBN</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Amount</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Notes</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" id="notes" name="notes"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="table-responsive">
                  <div class="box-header with-border">
                    <h3 class="box-title">Books Number</h3>
                  </div>
                  <table id="" class="table table-bordered table-striped table-hover" style="text-transform: uppercase;">
                    <br>
                      <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-3 control-label">Book Number</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="book_number" placeholder="">
                        </div>
                        <div class="col-sm-1">
                          <button class="btn btn-success"><i class="fa fa-check icon-white"></i></button>
                        </div>
                      </div>
                  <thead>
                  <tr>
                    <th>No. </th>
                    <th>No. Book</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                          $i=0;
                          foreach ($this->cart->contents() as $items) : 
                          $i++;
                        ?>
                        <tr>
                          <td><?= $i?></td>
                          <td><?= $items['book_number'] ?></td>
                          <td><?= $items['id_bookstatus'] ?></td>
                          <td></td>
                        </tr>
                        
                        <?php endforeach; ?>
                  </tbody>
                </table>
              </div>

              
      

              <br>
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Book Cover</h3>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Amount</label>

                  <div class="col-sm-8">
                    <input type="file"  id="" placeholder="">
                    <br>
                    <img src="http://icons.iconarchive.com/icons/harwen/simple/256/PNG-Image-icon.png" width="250px">
                  </div>
                </div>
              </div>
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
            function get_dcg(p) {
                var id_cg = p;

                $.ajax({
                    url: '<?php echo base_url(); ?>books/get_dcg_by_cg/'+id_cg,
                    data: 'id_cg='+id_cg,
                    type: 'GET',
                    dataType: 'html',
                    success: function(msg) {
                        $("#id_dcg").html(msg);

                    }
                });
            }
</script>
        