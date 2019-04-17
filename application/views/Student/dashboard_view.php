<style type="text/css">

/* Animation */

@keyframes fadeInUp {
    from {
        transform: translate3d(0,40px,0)
    }

    to {
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

@-webkit-keyframes fadeInUp {
    from {
        transform: translate3d(0,40px,0)
    }

    to {
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

.animated {
    animation-duration: 2s;
    animation-fill-mode: both;
    -webkit-animation-duration: 2s;
    -webkit-animation-fill-mode: both
}

.animatedFadeInUp {
    opacity: 0
}

.fadeInUp {
    opacity: 0;
    animation-name: fadeInUp;
    -webkit-animation-name: fadeInUp;
}
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
<div class="content">
    <div class="row">
        <?php echo $this->session->flashdata('message');?>
      <div class="col-md-1" ></div>
        <div class="col-md-6 animated animatedFadeInUp fadeInUp">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php $nos = 0; foreach ($slider as $key) {
                        if($nos == 0){
                            $acc = 'active';
                        } else {
                            $acc = '';
                        }
                        ?>
                        
                    
                    <div class="item <?= $acc ?>">
                        <img src="<?= base_url('uploads/'.$key->image) ?>" alt="Los Angeles" style="width:100%;margin-bottom: 10px">
                        <div class="carousel-caption">
                            <!-- <h3>Los Angeles</h3>
                            <p>LA is always so much fun!</p> -->
                        </div>
                    </div>
                    <?php ++$nos; } ?>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <?php foreach ($banner as $key) {?>
            
        
          <div class="col-md-3 animated animatedFadeInUp fadeInUp">
            <img src="<?= base_url('uploads/'.$key->image) ?>" style="width:100%;margin-bottom: 15px;border-radius: 10px">
          </div>
        <?php }?>
        
    </div>
    <div class="row">
      <div class="box-header">
              <b style="font-size: 30px">NEW COLLECTION</b>
            </div>
    <?php foreach ($data as $key) { ?>

        <div class="col-md-2 myImg" onclick="window.location = '<?php echo base_url(); ?>Dashboard/detail_catalogue/<?= $key->docId ?>'">
            <div style="background-color: white;height: 300px">
                <div class="box-body">
                    <input type="hidden" id="data_title<?= $key->docId ?>" value="<?= $key->docTitle ?>">
                    <img class="img-responsive"  src="<?= base_url('uploads/'.$key->docImage)?>" onerror="this.src='<?= base_url('assets/img/no image.png')?>'" alt="Photo" style="width: 100%;height: 200px">
                    
                        <p class="myImg2"><?php if(strlen($key->docTitle) > 40){
                            echo substr($key->docTitle,0,40).'...';
                        } else {
                            echo $key->docTitle;
                        } ?></p>
                    
                </div>
            </div>
        
        </div>
        <?php } ?>
      </div>
      <div class="row">
      <div class="box-header">
              <b style="font-size: 30px">MOST POPULAR BOOK</b>
            </div>
    <?php foreach ($best as $key) { ?>

        <div class="col-md-2 myImg" onclick="window.location = '<?php echo base_url(); ?>Dashboard/detail_catalogue/<?= $key->docId ?>'">
            <div style="background-color: white;height: 300px">
                <div class="box-body">
                    <input type="hidden" id="data_title<?= $key->docId ?>" value="<?= $key->docTitle ?>">
                    <img class="img-responsive"  src="<?= base_url('uploads/'.$key->docImage)?>" onerror="this.src='<?= base_url('assets/img/no image.png')?>'" alt="Photo" style="width: 100%;height: 200px">
                    
                        <p class="myImg2"><?php if(strlen($key->docTitle) > 40){
                            echo substr($key->docTitle,0,40).'...';
                        } else {
                            echo $key->docTitle;
                        } ?></p>
                    
                </div>
            </div>
        
        </div>
        <?php } ?>
      </div>
</div>