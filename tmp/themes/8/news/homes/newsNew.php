<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/8/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><li class="widget widget-sidebar transfers_featured_services_widget">
    <div class="services boxed white">
      <?php $i=0 ?>
        <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
        <?php if($i < 4) { ?>
        <!-- Item -->
              <article class="one-fourth fadeIn">
                  <figure class="featured-image">
                      <img <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt="Shuttle transfers">
                      <div class="overlay">
                          <a href="<?=$v['link']?>" title="<?=$v['title']?>" class="expand">+</a>
                      </div>
                  </figure>
                  <div class="details">
                      <h4><a href="<?=$v['link']?>" title="<?=$v['title']?>"><?=$v['title']?></a></h4>
                      <p>
                          <?php echo cutString($v['short'],0,100); ?>
                      </p>
                      <a href="<?=$v['link']?>" title="Read more" class="more">Read more</a>
                  </div>
              </article>
        <!-- //Item -->
        <?php } ?>
        <?php $i++ ?>
        <?php } } ?>
        
        
        
    </div>
</li>
<div class="clearfix"></div>