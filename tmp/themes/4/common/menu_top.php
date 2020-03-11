<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/4//common/menu_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><ul class="main-menu-level">
    <?php $i = 0 ?>
    <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>

    <?php if($i < 9) { ?>
    <?php include $_B['temp']->load('common/menu_top_list') ?>
    <?php } ?>

    <?php $i++ ?>
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

