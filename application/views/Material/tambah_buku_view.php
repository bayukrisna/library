      <section class="content">
      <div class="row">
        <?php echo form_open('books/simpan_buku', ' method="post" id="form_ajax" role="form" enctype="multipart/form-data" '); ?>
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">ADD DOCUMENT</h3>
                <button type="submit" class="btn btn-success pull-right" ><i class="fa fa-check"></i> SAVE </button>
                    
          
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
                    <input type="text" class="form-control" id="editor" name="editor" placeholder="">
                  </div>
                </div>

                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Edition</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="edition" name="edition" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Place</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="place" name="place" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">Publisher</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="publisher" name="publisher" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Publication Year</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="pub_year" name="pub_year" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Date Purchasing</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="purchasing_date" name="purchasing_date" placeholder="">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-3 control-label">ISBN</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="">
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
                          <input type="text" class="form-control" id="book_number" placeholder="" name="book_number">
                        </div>
                        <div class="col-sm-1">
                          <button type="button" onclick="simpan_cart()" class="btn btn-success"><i class="fa fa-check icon-white"></i></button>
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
                  <tbody id="kk">
                  </tbody>
                </table>
              </div>

              
      

              <br>
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Book Cover</h3>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Image</label>

                  <div class="col-sm-8">
                    <input type="file" name="image" onchange="loadFile(event)"  id="image" placeholder="">
                    <br>
                    <img src="http://icons.iconarchive.com/icons/harwen/simple/256/PNG-Image-icon.png" width="250px" id="output">
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
      <?php echo form_close();?>
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
            function simpan_cart(){
              var a = $('#form_ajax').serialize();
              $.ajax(
                {
                  url : '<?php echo base_url(); ?>books/add_to_cart',
                  type: 'post',
                  data : $('#form_ajax').serialize(),
                  success: function(msg){
                    document.getElementById("book_number").value = '';
                    $("#kk").html(msg);
                  }
                }
              )
            }
            function delete_cart(p){
              $.ajax(
                {
                  url: '<?php echo base_url(); ?>books/delete_cart/'+p,
                  type: 'POST',
                  success: function(msg){
                    $("#kk").html(msg);
                  }
                }
              )
            }
</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>