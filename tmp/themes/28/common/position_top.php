<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/28//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="wrapper wp-top-h" style="display: none;">
    <div class="vnt-logo">
        <h1>
            <a href="<?=$web['home_url']?>">
                <?php if($web['logo'] != null) { ?>
                <?php if($web['logo']['is_swf']) { ?>
                <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                    <param value="transparent" name="wmode">
                    <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                    <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                </object>
                <?php } else { ?>
                <img id="logo-main" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                <?php } ?>
                <?php } else { ?>
                <img id="logo-main" src="<?=$web['logo']['img']?>" class="img-responsive logo" alt="Logo" />
                <?php } ?>
            </a>
        </h1>
    </div>
    <div class="vnt-tool" style="display: none;">
        <div class="tool-top">
            <div class="wrapper">
                <div class="vnt-hotline">
                    <a href="tel:1800 6381"><span class="text">Tổng đài <span class="h-style">ĐẶT XE MIỄN CƯỚC</span></span> <span class="h-number">1800 6381</span></a>
                </div>
                <div class="menu_mobile">
                    <div class="icon_menu">Menu</div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="tool-main">
            <div class="vnt-menutop">
                <ul>
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
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
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
    background: #0b4a97;
    background-position: center top;
}
</style>
<?php } ?>
<?php } ?>
<style type="text/css">
    a.ticket-ac-btn.btn-vxr-lg.btn.pull-right.w100.hasSeat.closed {
    line-height: 33px;
}
</style>
<script type="text/javascript">
    $('.nav-container__ancestor').click(function(){
        $('.responsive-menu').slideToggle();
    })
</script>
