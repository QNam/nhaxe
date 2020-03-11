<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//common/menu_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="f-menutop 123456 doanhdz">
    <div class="container">
        <div class="">
            <ul class="f-menutop-ul">
                <?php $i = 0 ?>
                <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
                <?php if($i < 9) { ?>
                <?php include $_B['temp']->load('common/menu_top_list') ?>
                <?php } ?>
                <?php $i++ ?>
                <?php } } ?>
            </ul>
        </div>
    </div>
    
    <script type="text/javascript">
    $(".topmn-bg-zoom").hover(function() {
        $(".top-menu-sub").css("display", "none");
    });
    $(".f-menutop-ul li a").hover(function() {

        $(".top-menu-sub").css("display", "block");
    });
    </script>
</div>
<button id="responsive-menu-button" class="responsive-menu-button responsive-menu-boring          responsive-menu-accessible" type="button" aria-label="Menu">
    <span class="responsive-menu-box">
        <span class="responsive-menu-inner"></span>
    </span>
</button>
<div id="responsive-menu-container" class="slide-left">
    <div id="responsive-menu-wrapper">
        <ul id="responsive-menu" class="">
            <?php $i = 0 ?>
            <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
            <?php if($i < 9) { ?>
            <?php include $_B['temp']->load('common/menu_top_list') ?>
            <?php } ?>
            <?php $i++ ?>
            <?php } } ?>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $("#responsive-menu-button").click(function(){
        $(this).toggleClass("is-active");
        $("#responsive-menu-container").toggleClass("is-showmenu");
    })
</script>