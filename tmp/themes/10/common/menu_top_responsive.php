<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/10//common/menu_top_responsive.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="slicknav_menu">
    <a href="#" aria-haspopup="true" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;">
        <span class="slicknav_menutxt"></span>
        <span class="slicknav_icon slicknav_no-text">
            <span class="slicknav_icon-bar"></span>
            <span class="slicknav_icon-bar"></span>
            <span class="slicknav_icon-bar"></span>
        </span>
    </a>
    <nav class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
        <ul class="">
            <?php $i = 0 ?>
            <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
                <?php if($i < 9) { ?>
                <?php include $_B['temp']->load('common/menu_top_list') ?>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-389 slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="<?=$v['link']?>"><?=$v['namemenu']?></a>
                <?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?><span class="slicknav_arrow">►</span><?php } ?></a>
                <?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>
                    <ul class="sub-menu slicknav_hidden" role="menu" style="display: none;" aria-hidden="true">
                        
                        <?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v2) { ?>
                        <li class="menu-item menu-item-type-post_type menu-item-object-destination menu-item-575"><a href="<?=$v2['namemenu']?>" role="menuitem" tabindex="-1"><?=$v2['namemenu']?></a></li>
                        <?php } } ?>
                    </ul>
                <?php } ?>
                </li>
                <?php } ?>
            <?php $i++ ?>
            <?php } } ?>
        </ul>
    </nav>
</div>