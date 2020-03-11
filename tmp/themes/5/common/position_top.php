<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/5//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header>
    <div class="container">
        <div class="header-container">
            <h1 class="header-logo">
                <a href="<?=$web['home_url']?>" title="Logo title" rel="nofollow">
                    <?php if($web['logo'] != null) { ?>
                        <?php if($web['logo']['is_swf']) { ?>
                            <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                                <param value="transparent" name="wmode">
                                <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                                <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                            </object>
                        <?php } else { ?>
                            <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" class="img-responsive logo"  alt="Logo"/>
                        <?php } ?>
                    <?php } else { ?>
                        <img src="<?=$web['logo']['img']?>" class="img-responsive logo"  alt="Logo"/>
                    <?php } ?>
                </a>
            </h1>
            <div class="main-menu">
                <?php include $_B['temp']->load('common/menu_top') ?>
            </div>
        </div>
    </div>
</header>