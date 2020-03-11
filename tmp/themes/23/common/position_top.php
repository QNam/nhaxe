<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/23//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header class="main-header">
    <div class="container">
        <div id="header">
            <div class="logo-wrap">
                <h1 id="logo" class="image-logo" itemprop="headline">
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
                </h1><!-- END #logo -->
            </div>
            <div class="primary-navigation" role="navigation" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                
                <?php include $_B['temp']->load('common/menu_top') ?>
            </div>
        </div>
    </div>
</header>
<style type="text/css">
    .main-header {
        background-color: #ffcc00;
    }
</style>
<div class="phonering-alo-ph-circle-fill"></div>
<div class="phonering-alo-ph-img-circle">
  <a href="tel:<?=$web['info']['phone']?>"></a>
  <a href="tel:<?=$web['info']['phone']?>" class="pps-btn-img " title="Liên hệ">
  <img src="https://showroomchevrolet.com/wp-content/uploads/hotlinechevrolet.png" alt="Liên hệ" width="50" onmouseover="this.src='https://showroomchevrolet.com/wp-content/uploads/hotlinechevrolet.png';" onmouseout="this.src='https://showroomchevrolet.com/wp-content/uploads/hotlinechevrolet.png';">
  </a>
</div>
<script type="text/javascript">
    $('.icon_menu').click(function(){
        $('.menu_mobile').addClass('showmenu');
        $('.divmm').addClass('show');
         
    })
    $('.close-mmenu').click(function(){
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
    background: #0b4a97;
    background-position: center top;
}
</style>
<?php } ?>
<?php } ?>