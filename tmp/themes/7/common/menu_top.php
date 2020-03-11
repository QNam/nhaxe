<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/7//common/menu_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<ul class="main-menu-level">
    <li class="has-sub ">
        <a href="<?=$web['home_url']?>">
            <?php if($web['logo'] != null) { ?>
            <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" class="logo" alt="An Vui">
            <?php } else { ?>
            <img src="<?=$web['logo']['img']?>" class="img-responsive logo"  alt="Logo"/>
            <?php } ?>
        </a>
    </li>
    <?php $i = 0 ?>
    <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
    
    <?php if($i < 2) { ?>
    <?php include $_B['temp']->load('common/menu_top_list') ?>
    <?php } ?>

    <?php $i++ ?>
    <?php } } ?>
    
    <?php $j = 0 ?>
    <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
    
    <?php if($j > 2) { ?>
    <?php include $_B['temp']->load('common/menu_top_list') ?>
    <?php } ?>

    <?php $j++ ?>
    <?php } } ?>
</ul>
<script>
    $(document).ready(function () {
        $('.mainmenu-level-item').on('mouseenter',function () {
            $('.dropdown-menu-item').hide();
            $(this).children('.dropdown-menu-item').show();
        });

        $('.dropdown-menu-item').on('mouseleave',function () {
            $('.dropdown-menu-item').hide();
        });
    });
</script>

