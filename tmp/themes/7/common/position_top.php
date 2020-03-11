<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/7//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<a href="#menu" id="btn-menu" data-role="button" role="button" class="ui-link ui-btn ui-shadow ui-corner-all ui-btn-active"></a>
<?php include $_B['temp']->load('common/menu_top_responsive') ?>

<div id="banner_main">
    <div class="container">
        <div id="bn_top">
            <div id="bn_container">
                <style type="text/css">
                    #banner_main {
                        background: url(upload/hinhanh/054_vi.jpg) center 0 no-repeat;
                    }
                </style>
                <div class="thongtin-bn clearfix">
                <a href="/" class="bn-img">
                    <img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/imgs/tuannga.png" alt="CÔNG TY TNHH VẬN TẢI &amp; DỊCH VỤ TUẤN NGA" class="bn">
                </a>

                </div>
                <div class="bn-hotline">
                    <p><span>Hotline : <?=$web['info']['phone']?></span></p>
                    <p><span>Email : <?=$web['info']['email']?></span></p>
                </div>
                
                <div class="clear"></div>
            </div>
            <!--end #bn_container-->
        </div>
        <!--end #bn_top-->
    </div>
</div>
<div id="main_menu">
    <div id="main_mn_container" class="clearfix container">
        <div id="mn_top" class="clearfix">
            <?php include $_B['temp']->load('common/menu_top') ?>
        </div>
    </div>
    <!--end #main_mn_container-->
</div>