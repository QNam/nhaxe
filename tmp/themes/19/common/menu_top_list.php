<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/19//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>
<li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$v['namemenu']?><span class="caret"></span></a>
 <ul class="dropdown-menu">
 	<?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v2) { ?>
    <?php include $_B['temp']->load('common/menu_top_list_list') ?>
    <?php } } ?>
 </ul>
</li>
<?php } else { ?>
<li class="hidden-xs">
 <a href="<?=$v['link']?>"><?=$v['namemenu']?></a>
</li>
<?php } ?>