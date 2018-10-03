        <?php echo $this->session->flashdata('message');?>
        <div class="box">
        <table class="table">
        <tbody><tr>
            <td class="left_column" width="20%">Kategori Barang <font color="#FF0000">*</font></td>
            <td colspan="3" width="20%">:  
      <?php echo $kategori->kategori; ?>      </td>

      <td class="left_column">Total  <font color="#FF0000">*</font></td>
            <td colspan="3">: 
      total           
            </td>
        </tr>
        
       
       
    </tbody></table>
</div>
<div class="">   

            <a href="<?php echo base_url(); ?>barang/tambah_barang/<?php echo $kategori->kategori; ?>" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat pull-right" ><i class="fa fa-plus"></i> Tambah</a>

             <a class="btn btn-default btn-sm pull-right" style="margin-right: 10px"  href="<?php echo base_url('barang'); ?>"><i class="fa fa-angle-left"></i> Back </a> <br> <br>

          </div> <br>


    <div class="box box-info">
  <div class="box-body">
  <table class="table table-bordered table-striped" id="example3" style="text-transform: uppercase;">
  <thead>
  <tr>
    <th style="width:5%" style="text-align:center">No.</th>
    <th width="10%" style="text-align:center">Nama Barang</th>
    <th width="10%" style="text-align:center">Merk</th>
    <th width="15%" style="text-align:center">Model</th>
    <th width="15%" style="text-align:center">Status</th>
  </tr>
  </thead>
  <tbody>
    <?php 
        $no = 0;
        foreach($barang as $data):
        ;
      ?>
      <tr>
      <td><?php echo ++$no;?></td>
        <td style="text-align:center"><?php echo $data->nama_barang;?></td>
        <td style="text-align:center"><?php echo $data->merk;?></td>
        <td style="text-align:center"><?php echo $data->nama_model;?></td>
        <td style="text-align:center"><?php echo $data->status;?></td>
        
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>
</div>


          </div>


