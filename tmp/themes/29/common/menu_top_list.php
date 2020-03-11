<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/29//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>

<li class="itop"><span class="span-menu"></span><a href="<?=$v['link']?>" target="_self"><?=$v['namemenu']?></a>
<ul class="sub-menu">
<?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v2) { ?>
    <?php include $_B['temp']->load('common/menu_top_list_list') ?>
    <?php } } ?>
</ul>
</li>
<?php } else { ?>
<li><span class="span-menu"></span><a href="<?=$v['link']?>" target="_self"><?=$v['namemenu']?></a></li>

<?php } ?>