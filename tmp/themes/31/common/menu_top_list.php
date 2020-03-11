<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/31//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>
<li class="dropdown-d">
 <a href="<?=$v['link']?>" class="dropdown-toggle-d"><?=$v['namemenu']?><span class="caret"></span></a>
 <ul class="dropdown-menu-d">
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