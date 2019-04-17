<table id="example1" class="table2 table-hover table-striped table-condensed" style="text-transform: uppercase;">
                
                <a href="" data-toggle="modal" data-target="#modal_tambah" class="btn btn-primary btn-sm btn-flat" ><i class="fa fa-plus"></i> Add</a> <br> <br>
              <thead>
              <tr>
                <th width="1%" >No.</th>
                <th width="1%" >No Inventory</th>
                <th width="30%" >Title</th>
                <th width="15%" >Author</th>
                <th width="1%">Qty</th>
                <th width="1%">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                    $no = 0;
                    $alert = "'Anda yakin menghapus data ini ?'";
                    foreach($document as $data):
                    ;
                  ?>
                  <tr>
                  <td><?php echo ++$no;?></td>
                  <td><?php echo $data->docNumber;?></td>
                    <td><a href="<?= base_url('Material/document_detail/'.$data->docId); ?>"  ><?php echo $data->docTitle;?></a></td>
                  <td><?php echo $data->docAuthor;?></td>
                  <td><?php $a = $this->db->where('docId', $data->docId)->get('document_number')->result(); echo count($a);  ?></td>
                    <td>
                    <a href="<?= base_url('Material/document_edit/'.$data->docId); ?>" class="btn btn-warning btn-xs btn-flat" ><i class="glyphicon glyphicon-pencil"></i><span class="tooltiptext">Edit</span></a>

                    <a href="<?= base_url('Material/delete_document/'.$data->docId); ?>" onclick="return confirm(<?= $alert; ?>)" class="btn btn-danger btn-xs btn-flat" ><i class="glyphicon glyphicon-trash"></i><span class="tooltiptext">Hapus</span></a>

                    </td>
                    
                </tr>
            <?php endforeach; ?>
              
              </tbody>
              </table>