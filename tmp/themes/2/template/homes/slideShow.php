<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2/template/homes/slideShow.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>  <style>
  #owl-demo-slide .item img{
    display: block;
    width: 100%;
    height: auto;
}
  </style>

  <!--################################## BEGIN REVOLUTION SLIDER -->
      <div class="row">
      <div class="f-slider col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <?php if(isset($data['content']['slides'])) { ?>
        <!-- Carousel
                ================================================== -->
          <!-- Indicators -->
          <div id="owl-demo-slide" class="owl-carousel">
            <?php if(is_array($data['content']['slides'])) { foreach($data['content']['slides'] as $k => $v1) { ?> 
            <?php if(!empty($v1['image_slide'])) { ?>
            <?php $image_slide = $v1['image_slide'] ?>
            <?php if(is_array($image_slide)) { foreach($image_slide as $key => $val) { ?> 
            <div class="item">
             <img <?php  echo  loadImage($val['src_link'],'crop',$val['width'],$val['height'],true); ?>alt="<?=$val['title']?>">
              <div class="container">
                <div class="carousel-caption">
                  <h2><?=$val['title']?></h2>
                  <p><?=$val['description']?></p>
                </div>
              </div>
            </div>
             <?php } } ?>
        <?php } ?>
        <?php } } ?> 
             
            
          </div>
        <!-- /.carousel --> 
        <?php } ?>
      </div><!--end f slider-->
      <div class="clearfix"></div>
    </div><!--end row-->
  
    

  <!--################################## END REVOLUTION SLIDER -->
    <div class="clearfix"></div>

    <script>
    $(document).ready(function() {

      var owl = $("#owl-demo-slide");

      owl.owlCarousel({
        navigation : true,
        singleItem : true,
        transitionStyle : "backSlide"
      });

    });
    </script>

 