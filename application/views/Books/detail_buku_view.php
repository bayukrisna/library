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

<div class="box box-info">
  <div class="box-body">
    <div class="table-responsive">
  <table class="table2 table-bordered table-striped" id="example3" style="text-transform: uppercase;">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th width="10%" style="text-align:center">No. Inventory</th>
    <th width="10%" style="text-align:center">Book Number</th>
    <th width="15%" style="text-align:center">Book Status</th>
    <th width="15%" style="text-align:center">Action</th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $no = 0;
        foreach($detail as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->id_number;?>-<?php echo $data->book_number;?></td>
        <td style="text-align:center"><?php echo $data->book_number;?></td>
        <td style="text-align:center"><?php echo $data->bookstatus;?></td>
        
        <td style="text-align:center"></td>
        

        
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>
</div>
</div>


          </div>
 