<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><li>
    <div class="top-menu-backgroud">
        <?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>
        <div class="top-menu-sub">
            <ul class="row">
                <?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v2) { ?>
                <?php include $_B['temp']->load('common/menu_top_list_list') ?>
                <?php } } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
    <a class="f-bg-base firstlink" href="<?=$v['link']?>" title="">

        <span><?=$v['namemenu']?></span>
    </a>
</li>