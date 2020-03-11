<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/18//common/menu_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><ul class="navbar-nav sf-menu navbar-right sf-js-enabled sf-arrows" data-type="navbar">
    <?php $i = 0 ?>
    <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
        <?php if($i < 9) { ?>
            <?php include $_B['temp']->load('common/menu_top_list') ?>
        <?php } ?>
        <?php $i++ ?>
    <?php } } ?>
    
</ul>
