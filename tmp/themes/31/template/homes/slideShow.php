<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/31/template/homes/slideShow.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>  <!--################################## BEGIN REVOLUTION SLIDER -->
  <div class="clearfix"></div>
  <div class="f-slider"> 
    <?php if(isset($data['content']['slides'])) { ?>
    <!-- Carousel
            ================================================== -->
    <div id="myslide" class="carousel slide" data-ride="carousel"> 
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php if(is_array($data['content']['slides'])) { foreach($data['content']['slides'] as $k => $v) { ?> 
        <?php if(!empty($v['image_slide'])) { ?>
        <?php $image_slide = $v['image_slide'] ?>
        <?php if(is_array($image_slide)) { foreach($image_slide as $key => $val) { ?> 
        <li data-target="#myslide" data-slide-to="<?=$key?>" class="<?php if($key==0) { ?>active<?php } ?>"></li>
        
           <?php } } ?>
    <?php } ?>
    <?php } } ?> 
      </ol>
      <div class="carousel-inner">
        <?php if(is_array($data['content']['slides'])) { foreach($data['content']['slides'] as $k => $v) { ?> 
        <?php if(!empty($v['image_slide'])) { ?>
        <?php $image_slide = $v['image_slide'] ?>
        <?php if(is_array($image_slide)) { foreach($image_slide as $key => $val) { ?> 
        <div class="item <?php if($key==0) { ?>active<?php } ?>"> 
          <img <?php  echo  loadImage($val['src_link'],'resize',$val['width'],$val['height'],true); ?>alt="<?=$val['title']?>">
          <div class="container">
            <div class="carousel-caption">
              <h1><?=$val['title']?></h1>
              <p><?=$val['description']?></p>
            </div>
          </div>
        </div>
         <?php } } ?>
    <?php } ?>
    <?php } } ?> 
         
        
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
    <!-- /.carousel --> 
    <?php } ?>
  </div>
  <!--################################## END REVOLUTION SLIDER -->
    <div class="clearfix"></div>

 