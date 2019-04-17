<style type="text/css">
    .myImg {
        
        background-color: white;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 4px 8px 0 rgba(100, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin: 10px;
    }
    .myImg2 {
        text-align: center;
        padding: 5px;
    }
    .myImg:hover {
        opacity: 0.7;
    }
    .modal-dialog {
    width: 80%;
    margin: 30px auto;
}
</style>

<section class="content">
    <div class="row">

        <div class="col-md-12">
            <form role="search" method="get" id="search__form" class="searchform" action="<?= base_url('Dashboard/list_book/') ?>">
            <center>
        <div class="input-group input-group-sm col-md-6">
                <input type="text" class="form-control" placeholder="Title" name="p" value="<?php if($this->input->get('p') != null){ echo $this->input->get('p');}?>">
                    <span class="input-group-btn">
                      <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </span>
              </div>
          </center></form>
              </div>
        <?php foreach ($data->result() as $key) { ?>

        <div class="col-md-2 myImg" onclick="window.location = '<?php echo base_url(); ?>Dashboard/detail_catalogue/<?= $key->docId ?>'">
            <div style="background-color: white;height: 300px">
                <div class="box-body">
                    <input type="hidden" id="data_title<?= $key->docId ?>" value="<?= $key->docTitle ?>">
                    <img class="img-responsive"  src="<?= base_url('uploads/'.$key->docImage)?>" onerror="this.src='https://www.freeiconspng.com/uploads/no-image-icon-6.png'" alt="Photo" style="width: 100%;height: 200px">
                    
                        <p class="myImg2"><?php if(strlen($key->docTitle) > 40){
                            echo substr($key->docTitle,0,40).'...';
                        } else {
                            echo $key->docTitle;
                        } ?></p>
                    
                </div>
            </div>
        
        </div>
        <?php } ?>
        <div class="row col-md-12">
                            <div class="col">
                                <!--Tampilkan pagination-->
                                <?php echo $pagination; ?>
                            </div>
                        </div>
                        
        <!-- <div class="col-lg-2 col-xs-6 myImg">
            <div style="background-color: white">
                <div class="box-body">
                    <img class="img-responsive" src="http://ecx.images-amazon.com/images/I/41HYNCVQHFL.jpg" onerror="this.src='http://icons.iconarchive.com/icons/harwen/simple/256/PNG-Image-icon.png'" alt="Photo" style="width:100%;max-width:150px;">
                    <center>
                        <p style="margin-top: 1px">sada</p>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-xs-6">
            <img id="myImg" class="img-responsive" width="100px" src="http://ecx.images-amazon.com/images/I/41HYNCVQHFL.jpg" alt="Photo" style="width:100%;max-width:150px;">
        </div> -->
    </div>
</section>
<!-- <script type="text/javascript">
    setTimeout(function(){ alert("Hello"); }, 3000);
</script> -->