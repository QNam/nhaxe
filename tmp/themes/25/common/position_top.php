<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/25//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header class="header">
    <div class="header__navigation">
        <div class="main-navigation">
            <nav class="content-container">
                <div class="main-navigation__logo">
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
                </div>
                <ul class="nav-container">

                    <?php $i = 0 ?>
                    <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
                        <?php if($i < 9) { ?>
                            <?php include $_B['temp']->load('common/menu_top_list') ?>
                        <?php } ?>
                        <?php $i++ ?>
                    <?php } } ?>
                </ul>  
                    
            </nav>
            <!-- /if menu -->
        </div>
        <div class="main-navigation responsive">
            <nav>
                <div class="main-navigation__logo">
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
                </div>
                <ul class="nav-container">
                    <li class="nav-container__ancestor"><a data-status="closed">Menu </a></li>
                </ul>
                <div class="responsive-menu">
                    <div class="responsive-menu__inner">
                        <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
                        <div class="responsive-menu__link">
                            <div>
                                <a class="responsive-menu__link--main" href="<?=$v['link']?>"><?=$v['namemenu']?></a>
                            </div>
                            
                        </div>
                        <?php } } ?>
                        
                    </div>
                </div>
            </nav>
            <!-- /if menu -->
        </div>
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