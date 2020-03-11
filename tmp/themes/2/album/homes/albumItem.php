<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2/album/homes/albumItem.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?> 
<?php if(!empty($content_album)) { ?>
<ul class="f-video row">
<?php if(is_array($content_album)) { foreach($content_album as $k => $v) { ?> 
 <li class="col-md-3  col-sm-3 col-xs-3 col-xs-6 full-xs">
              <div class="f-video-item">
                <div class="f-video-item-img"> <a href="<?=$v['link']?>" title="<?=$v['title']?>"> <img <?php  echo loadImage($v['avatar'],'crop','448','250',true); ?>class="img-responsive" alt="<?=$v['title']?>"  />
                  <div class="f-video-item-img-hover"></div>
                  </a> </div>
                <div class="f-video-item-title">
                  <h3><a href="<?=$v['link']?>" title="<?=$v['title']?>"> <?php echo cutString($v['title'],0,25); ?> </a></h3>
                </div>
              </div>
            </li>  
<?php } } ?>
</ul>
<?php } ?>
<div class="clearfix"></div>
 
