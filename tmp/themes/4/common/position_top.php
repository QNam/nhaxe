<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/4//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header>
    <div class="container-fluid">
        <div class="container header-logo">
            <div class="row header-container">
                <h1 class="header-logo col-md-2 col-xs-2">
                    <a href="<?=$web['home_url']?>">
                        <?php if($web['logo'] != null) { ?>
                            <?php if($web['logo']['is_swf']) { ?>
                            <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                                <param value="transparent" name="wmode">
                                <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                                <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                            </object>
                            <?php } else { ?>
                            <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" class="logo" alt="An Vui">
                            <?php } ?>
                        <?php } else { ?>
                        <img src="<?=$web['logo']['img']?>" class="img-responsive logo"  alt="Logo"/>
                        <?php } ?>
                    </a>
                </h1>
                <div class="col-md-8 col-xs-10 company-name">
                    <style>
                        @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,800');
                        .companyName {
                            font-family: 'Open Sans', sans-serif;
                            font-size: 36px;
                        }

                        .companyNameEn {
                            font-family: Cambria, Georgia, serif;
                            font-size: 24px;
                            margin-top: 0px;
                        }
                    </style>
                    <h2 class="companyName"><strong>CÔNG TY TNHH PHÚC XUYÊN</strong></h2>
                    <h3 class="companyNameEn">PHUC XUYEN LIMITED COMPANY</h3>
                </div>
                <div class="col-md-2" style="margin-left: 50px;">
                    <div class="col-md-12 lang">
                        <a href="#"><img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/en-icon.png" class="img-responsive pull-right cus-icon"
                                         alt="VN Icon" id="en"></a>
                        <a href="#"><img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/vn-icon.png" class="img-responsive pull-right cus-icon"
                                         alt="VN Icon" id="vn"></a>
                    </div>
                    <div class="col-md-12 search">
                        <!--<form action="/news.html">
                            <input type="text" class="search-input" name="title" placeholder="Tìm kiếm...">
                        </form>-->

                        <a href="call:02033663366">
                            <img style="margin-top: 25px;width: 200px;margin-left: -55px;" src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/hot-line.png" alt="Hot Line">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid menu">
        <div class="container main-menu visible-lg visible-md visible-sm">
            <?php include $_B['temp']->load('common/menu_top') ?>
        </div>
        <div class="main-menu-mobile visible-xs">
            <?php include $_B['temp']->load('common/menu_top_responsive') ?>

        </div>
    </div>
</header>