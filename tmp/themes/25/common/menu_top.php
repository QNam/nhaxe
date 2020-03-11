<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/25//common/menu_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="av-menuMain">
    <ul>
        <?php $i = 0 ?>
            <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
                <?php if($i < 9) { ?>
                    <?php include $_B['temp']->load('common/menu_top_list') ?>
                <?php } ?>
                <?php $i++ ?>
            <?php } } ?>
    </ul>
    <div class="clear"></div>
</div>

<script type="text/javascript">
$("#nav_list").click(function(){
$(".button_menu_mobile").toggleClass("active");
$("body").toggleClass("pushmenu-push-toright");
$(".navbar-collapse").toggleClass("pushmenu-open");
})
$(".icon_menu").click(function(){
        $(".divmm").addClass("show-menud")
    })
</script>