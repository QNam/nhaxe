<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2/template/homes/slideLogo.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="row_logo_bottom">
    <ul class="row">
      <?php if(is_array($data['content']['slides'])) { foreach($data['content']['slides'] as $k => $v) { ?> 
          <?php if(!empty($v['image_slide'])) { ?>
          <?php $image_slide = $v['image_slide'] ?>
            <?php if(is_array($image_slide)) { foreach($image_slide as $key => $val) { ?> 
            <li class="col-md-2 col-xs-2">
              <img src="<?=$val['thumb']?>" class="img-responsive" alt="<?=$v['title']?>" />
              <!--<p class="flex-caption"><?=$val['title']?></p>-->
            </li>
          <?php } } ?>
      <?php } ?>
        <?php } } ?>  
    </ul>
</div> 