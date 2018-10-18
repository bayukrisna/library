      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">BOOKS DATA</h3>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="<?= base_url()?>books/add_books" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add Book</a> <br> <br> 
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th width="10%" style="text-align:center">ID Number</th>
    <th width="10%" style="text-align:center">Title</th>
    <th width="10%" style="text-align:center">Subject Heading</th>
    <th width="15%" style="text-align:center">Author</th>
    <th width="15%" style="text-align:center">Publisher</th>
    <th width="5%" style="text-align:center">Total</th>
    <th width="15%" style="text-align:center">Aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $no = 0;
        $alert = "'Anda yakin menghapus data ini ?'";
        foreach($books as $data):
           $total_buku = $this->db->query("SELECT count(*) AS total FROM booknumber WHERE booknumber.id_number = '$data->id_number'")->row();
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td><a href="<?php echo base_url(); ?>books/book_detail/<?php echo $data->id_book; ?>"><?php echo $data->id_number;?></a></td>
        <td><?php echo $data->title;?></td>
        <td><?php echo $data->subject_heading;?></td>
        <td><?php echo $data->author;?></td>
        <td><?php echo $data->publisher;?></td>
        <td style="text-align:center"><?php echo $total_buku->total;?></td>
        <td>
          
          
        <a href="#"  class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

        <a href="#" onclick="return confirm(<?php $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

        </td>
        
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>
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




