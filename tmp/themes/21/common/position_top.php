<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/21//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="menu_close"></div>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 logo_all">
                <div class="banner">
                    <a class="link-logo" href="/" title="logo" target="_self">

                    <?php if($web['logo'] != null) { ?>
                    <?php if($web['logo']['is_swf']) { ?>
                    <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                        <param value="transparent" name="wmode">
                        <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                        <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                    </object>
                    <?php } else { ?>
                    <img id="logo-main" class="logo" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                    <?php } ?>
                    <?php } else { ?>
                    <img id="logo-main" src="<?=$web['logo']['img']?>" class="img-responsive logo" alt="Logo" />
                    <?php } ?>
                    </a>
                </div>
            </div>
            <div class="col-md-9 menu_all">
                <div class="menu_pc">
                    <div class="nav-main">
                        <ul id="nav-main-menu" class="nav-menu">
                            <?php include $_B['temp']->load('common/menu_top') ?>
                        </ul>
                    </div>
                    <div class="box-marque">
                    </div>
                </div>
                <div class="menu_mobile"><i class="fa fa-bars" aria-hidden="true"> Menu</i></div>
            </div>
        </div>
    </div>
</header>

<script type="text/javascript">
$('.icon_menu').click(function() {
    $('.menu_mobile').addClass('showmenu');
    $('.divmm').addClass('show');

})
$('.close-mmenu').click(function() {
    $('.menu_mobile').removeClass('showmenu');
    $('.divmm').removeClass('show');

})
</script>
<?php if($mod != 'home') { ?>
<?php if(isset($web['background']['color'])) { ?>
<style type="text/css">
.header {
    position: relative;

    background: {
        <?=$web['background']['color']?>
    }

    ;
    background-position: center top;
}
</style>
<?php } else { ?>
<style type="text/css">
.header {
    position: relative;
    background-position: center top;
}
</style>
<?php } ?>
<?php } ?>