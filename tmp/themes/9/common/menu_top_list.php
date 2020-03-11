<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/9//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><li id="menu-item-389" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-389"><a href="<?=$v['link']?>"><?=$v['namemenu']?></a>
    <?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>
    <ul class="sub-menu">
        <?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v2) { ?>
        <li id="menu-item-575" class="menu-item menu-item-type-post_type menu-item-object-destination menu-item-575"><a href="<?=$v2['namemenu']?>"><?=$v2['namemenu']?></a></li>
        <?php } } ?>
    </ul>
    <?php } ?>
</li>