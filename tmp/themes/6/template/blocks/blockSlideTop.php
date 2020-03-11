<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(is_array($data)) { foreach($data as $k => $v) { ?> 
<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    
      <?php if(!empty($v['image_slide'])) { ?>
          <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
          <li data-target="#carousel-example-generic" data-slide-to="<?=$k2?>" class="<?php if($k2==0) { ?> active <?php } ?>"></li>
          <?php } } ?>
      <?php } ?>
      
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

      <?php if(!empty($v['image_slide'])) { ?>
          <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?> 
          <div class="item <?php if($k2==0) { ?> active <?php } ?>">
            <a href="<?=$v2['link']?>">
              <img <?php  echo loadImage($v2['src_link'],'none','1170','500',true); ?>class="img-responsive" alt="<?=$v2['title']?>" />

              <div class="wrapnewitem">
                      
              </div><!--end wrapnewitem-->
            </a>

            <div class="container">
              <div class="carousel-caption">


                <h2><?=$v2['title']?></h2>
                <p class="titlecaption"><?=$v2['description']?></p>
                <p class="readdetail"><a title="Title" href="<?=$v2['link']?>">Read Detail</a></p>
              </div><!--end carousel caption-->
            </div><!--end container-->

          </div><!--end item-->
          <?php } } ?>
      <?php } ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <i class="fa fa-angle-left commonleft"></i>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <i class="fa fa-angle-right commonright "></i>
  </a>

</div>
<?php } } ?>