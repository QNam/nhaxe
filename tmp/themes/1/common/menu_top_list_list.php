<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//common/menu_top_list_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><li class="col-lg-4 col-sm-4 col-md-4">
  
    
 <a class="" href="<?=$v2['link']?>" title=""><?=$v2['namemenu']?></a>
 <?php if(isset($v2['sub']) AND count($v2['sub']) > 0 ) { ?>
 <ul>  
  <?php if(is_array($v2['sub'])) { foreach($v2['sub'] as $k => $v3) { ?>     
   <?php include $_B['temp']->load('common/menu_top_list_list_list') ?>
  <?php } } ?>
 </ul>
 <?php } ?>
 
</li>