<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/12//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header class="header" role="banner">
    <div class="wrap">
        
        <!-- Logo -->
        <div class="logo">
            <a href="<?=$web['home_url']?>">
                <?php if($web['logo'] != null) { ?>
                    <?php if($web['logo']['is_swf']) { ?>
                    <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                        <param value="transparent" name="wmode">
                        <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                        <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                    </object>
                    <?php } else { ?>
                    <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" >
                    <?php } ?>
                <?php } else { ?>
                <img src="<?=$web['logo']['img']?>" class="img-responsive logo"  alt="Logo"/>
                <?php } ?>
            </a>
        </div>
        <!-- //Logo -->
        <?php include $_B['temp']->load('common/menu_top') ?>
        
    </div>
</header>
<div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/embed/<?=$web['info']['video_info']?>?rel=0&controls=0&showinfo=0">
    <div class="box-search wrap">
        <div class="box-search-title col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <h2><?=$v2['title']?></h2>
            <span class="header-info">
                <?=$v2['description']?>

            </span>
            <a href="/dat-ve" class="btn-link col-md-offset-9">Đặt Vé</a>
        </div>
        
    </div>
</div>
<?php if($mod != 'home') { ?>

<?php if(isset($web['background']['color'])) { ?>
<style type="text/css">
    .header {
    position: relative;
    background: <?=$web['background']['color']?>;
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