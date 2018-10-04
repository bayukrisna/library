        <?php echo $this->session->flashdata('message');?>
        <div class="box">
        <table class="table">
        <tbody><tr>
            <td class="left_column" width="15%">Kategori Barang </td>
            <td colspan="3" width="95%">:  
      <?php echo $kategori->kategori; ?>      </td>

      
        </tr>
        <tr>
          <td class="left_column">Total  </td>
            <td colspan="3">:  <?php $total_barang = $this->db->query("SELECT count(*) AS total FROM tb_barang JOIN tb_model ON tb_model.id_model=tb_barang.id_model JOIN tb_merk ON tb_merk.id_merk=tb_model.id_merk JOIN tb_kategori ON tb_kategori.id_kategori=tb_merk.id_kategori WHERE tb_kategori.id_kategori = $kategori->id_kategori")->row(); ?>
      <?php echo $total_barang->total; ?>           
            </td>
        </tr>
        
       
       
    </tbody></table>
</div>
<div class="">   

            <a href="<?php echo base_url(); ?>barang/tambah_barang/<?php echo $kategori->id_kategori; ?>" class="btn btn-primary btn-sm btn-flat pull-right" ><i class="fa fa-plus"></i> Tambah</a>

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
    <th width="15%" style="text-align:center">Perusahaan</th>
    <th width="15%" style="text-align:center">Ruang</th>
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
        <td style="text-align:center"><?php echo $data->nama_perusahaan;?></td>
        <td style="text-align:center"><?php echo $data->nama_ruang;?></td>
        <td style="text-align:center"><?php echo $data->status;?></td>
        
    </tr>
<?php endforeach; ?>
  
  </tbody>
</table>
</div>


          </div>


