        <?php echo $this->session->flashdata('message');?>
        <div class="box">
        <table class="table">
        <tbody><tr>
            <td class="left_column" width="20%">ID Number <font color="#FF0000">*</font></td>
            <td colspan="3" width="20%">:  
      <?php echo $books->id_number; ?>      </td>

      <td class="left_column">Subject Heading  <font color="#FF0000">*</font></td>
            <td colspan="3">: 
      <?php echo $books->subject_heading; ?>             
            </td>
            <td rowspan="9" width="15%">
                        <div  >
                  <img height="200" width="150" class="pull-right" width="40%" src="<?php echo base_url(); ?>uploads/<?php echo $books->file_name; ?>" alt="Photo" onerror="this.src='<?php echo base_url();?>uploads/book.jpg'" src="#" alt="Your Image" >
                </div>
                </td>
        </tr>
        <tr>
            <td class="left_column" width="20%">Classification <font color="#FF0000">*</font></td>
            <td colspan="3">:  <?php echo $books->classification; ?>           
            </td>
        <td class="left_column">Author</td>
            <td colspan="3">: 
      <?php echo $books->author; ?>            
            </td>

        </tr>
         <tr>
            <td class="left_column" width="20%">Title <font color="#FF0000">*</font></td>
            <td colspan="3">:  <?php echo $books->title; ?>           
            </td>
        <td class="left_column">Edition</td>
            <td colspan="3">: 
      <?php echo $books->edition; ?>            
            </td>

        </tr>
         <tr>
          <td class="left_column">Publisher</td>
            <td colspan="3">:
          <?php echo $books->publisher; ?>          </td>
          
       <td>Editor </td>
          <td colspan="3">: 
      <?php echo $books->editor; ?> </td>
           

           
            

        </tr>
        <tr>
          <td class="left_column">Book(s) Total</td>
        <?php $total_buku = $this->db->query("SELECT count(*) AS total FROM booknumber WHERE booknumber.id_number = '$books->id_number'")->row(); ?>

            <td colspan="3">: <b> <?php echo $total_buku->total;?>  </b> book(s)</td>

            <td class="left_column">Notes</td>

            <td colspan="3">:  <?php echo $books->notes;?> </td>
    

        </tr>
       
       
    </tbody></table>
</div>
    
    <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat pull-right" ><i class="fa fa-plus"></i> Add Item</a> 

    <a class="btn btn-default btn-sm pull-right" style="margin-right: 10px"  href="<?php echo base_url('books'); ?>"><i class="fa fa-angle-left"></i> Back </a> <br> <br> <br> 

<div class="box box-info">
  <div class="box-body">
    <div class="table-responsive">
      <?php echo form_open('books/delete_checked/'.$books->id_book); ?>
  <table class="table2 table-bordered table-striped" id="example3" style="text-transform: uppercase;">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th width="25%" style="text-align:center">No. Inventory</th>
    <th width="10%" style="text-align:center">Book Number</th>
    <th width="15%" style="text-align:center">Book Status</th>
    <th width="3%" style="text-align:center">Action</th>
    <th width="2%" style="text-align:center">Check</th>
  </tr>
  </thead>
  <tbody>
    
    <?php 
        $no = 0;
        $alert = "'Are you sure to delete these item(s) ?'";
        foreach($detail as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td><?php echo $data->id_number;?>-<?php echo $data->book_number;?></td>
        <td style="text-align:center"><?php echo $data->book_number;?></td>
        <td style="text-align:center"><?php echo $data->bookstatus;?></td>
        
        <td style="text-align:center">
          <a href="" data-toggle="modal" data-target="#modal_edit<?php echo $data->no_inventory; ?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

        </td>
         <td style="text-align: center"><input type="checkbox" name="id[]" value="<?php echo $data->no_inventory; ?>"></td>
        

        
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>
<br>
<input type="submit" value="Delete Checked Books" onclick="return confirm('Are you sure to delete these item(s) ?')" class="btn btn-danger pull-right btn-flat"> <br> <br> 
<?php echo form_close()?>
</div>
</div>


          </div>



<div class="modal fade" id="modal_tambah" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">ADD ITEM BOOK</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('books/save_one_book/'.$books->id_book, 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">ID Number</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="id_number" id="id_number" value="<?php echo $books->id_number; ?>" readonly />

        
    </div>
</div>
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Book Number</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="book_number" id="book_number" value="" required="" />
        
    </div>
</div>


                    <div class="box-footer text-right">
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
</div>                </form>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>

<?php 
        foreach($detail as $i):
        ?>
        <div class="modal fade" id="modal_edit<?php echo $i->no_inventory; ?>" >
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">EDIT ITEM BOOK</h3>
            </div>
                <div class="modal-body">
                        <?php echo form_open('books/edit_one_book/'.$books->id_book.'/'.$i->no_inventory, 'class="form-horizontal" method="post" role="form" enctype="multipart/form-data"'); ?>
                    <!-- CSRF Token -->
                    
<!-- Name -->
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">ID Number</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="id_number" id="id_number" value="<?php echo $i->id_number; ?>" readonly />
        
    </div>
</div>
<div class="form-group ">
    <label for="name" class="col-md-3 control-label">Book Number</label>
    <div class="col-md-7 col-sm-12 required">
        <input class="form-control" type="text" name="book_number" id="book_number" value="<?php echo $i->book_number; ?>" required="" />
        
    </div>
</div>
<div class="form-group ">
    <label for="manufacturer_id" class="col-md-3 control-label">Status</label>
    <div class="col-md-7 required">
        <select class="select2" style="width:100%" name="id_bookstatus">
            <option value="<?php echo $i->id_bookstatus; ?>" selected="selected"><?php echo $i->bookstatus; ?></option>
            <?php 

                  foreach($getBookstatus as $row)
                  { 
                    echo '<option value="'.$row->id_bookstatus.'">'.$row->bookstatus.'</option>';
                  }
                  ?>
        </select>
        
    </div>
  </div>


                    <div class="box-footer text-right">
    <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
</div>                </form>

                </div>
            </div>
            </div>
        </div>
        <?php echo form_close();?>
        <?php endforeach;?>


  <script type="text/javascript">
    $(document).ready(function() {
      $("input[name='checkAll']").click(function() {
        var checked = $(this).attr("checked");
        $("#myTable tr td input:checkbox").attr("checked", checked);
      });
    });
  </script>
 