<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/12//common/menu_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><nav id="nav" class="main-nav">
    <ul id="menu-primary" class="">
        <?php $i = 0 ?>
        <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
            <?php if($i < 9) { ?>
                <?php include $_B['temp']->load('common/menu_top_list') ?>
            <?php } ?>
            <?php $i++ ?>
        <?php } } ?>
        
    </ul>
</nav>

<div class="menu-mobile">
    <section class="button_menu_mobile">
        <div id="nav_list">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
    </section>
    <nav class="menutop">
        <div class="menu-top-custom">
            <div class="navbar-collapse pushmenu pushmenu-left">
                <ul class="nav navbar-nav">
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
    </nav>
</div>

<script type="text/javascript">
$("#nav_list").click(function(){
$(".button_menu_mobile").toggleClass("active");
$("body").toggleClass("pushmenu-push-toright");
$(".navbar-collapse").toggleClass("pushmenu-open");
})

</script>


