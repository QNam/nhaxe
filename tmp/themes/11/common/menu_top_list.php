<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/11//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><li class="dropdown singleDrop ">
  <a href="<?=$v['link']?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false"><?=$v['namemenu']?></a>
  <?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>
  <ul class="dropdown-menu dropdown-menu-left">
  	<?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v2) { ?>
  		<li><a href="<?=$v2['namemenu']?>"><?=$v2['namemenu']?></a>
  	<?php } } ?>
  </ul>
  <?php } ?>
</li>