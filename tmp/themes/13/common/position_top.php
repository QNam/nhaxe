<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/13//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="br-header">
    <div id="top-nav" class="hidden-xs">
        <div class="container">
            <div class="col-sm-12">
                <ul class="clearfix">
                    <?php if(is_array($menu['bottom'])) { foreach($menu['bottom'] as $k => $v) { ?>
                        <?php include $_B['temp']->load('common/menu_bottom_list') ?>
                    <?php } } ?>
                    
                </ul>
            </div>
            <div class="col-sm-0"></div>
        </div>
    </div>
    <nav>
        <div class="container">
            <div id="logo" class="pull-left">
                <?php if($web['anvui_id'] == 'TC0Bp1rZFPJNRYty') { ?>
                <a href="http://dev.avigobus.vn/">
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
                <?php } else { ?>
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
                <?php } ?>
            </div>
            <div class="navbar-header">
                <button type="button" id="click-show-menu" class="navbar-toggle collapsed sb-toggle-left" data-toggle="collapse" data-target="" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="pull-right w-menu-h">
                
                <?php include $_B['temp']->load('common/menu_top') ?>
            </div>
        </div>
    </nav>
</div>
<script type="text/javascript">
    $("#click-show-menu").click(function(){
        $(".w-menu-h").slideToggle();
    })
</script>
<style type="text/css">
    .navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px;
    background: #fff;
}
</style>
<header class="header" role="banner" style="display: none;">
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
                <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                <?php } ?>
                <?php } else { ?>
                <img src="<?=$web['logo']['img']?>" class="img-responsive logo" alt="Logo" />
                <?php } ?>
            </a>
        </div>
        <!-- //Logo -->
        <?php include $_B['temp']->load('common/menu_top') ?>
    </div>
</header>
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



