<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/14//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div id="av-header">
    <div class="av-headerTop">
        <div class="wrapper">
            <div class="av-logo">
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
            <div class="info_header">
                <div class="top_tool">
                    <div class="av-menutop">
                        <ul>
                            <?php if(is_array($menu['bottom'])) { foreach($menu['bottom'] as $k => $v) { ?>
                            <?php include $_B['temp']->load('common/menu_bottom_list') ?>
                            <?php } } ?>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php include $_B['temp']->load('common/menu_top') ?>
                
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php if($web['anvui_id'] == 'TC0Cm1rweVdinjJi' || $web['anvui_id'] == 'TC09m1ql0HQCiixG') { ?>
    <style>
        .topHotline li {
            font-weight: bold;
        }
        .topHotline ul{
            margin-bottom: 0px;
        }
        .top-location{
            color: #fff;
            font-weight: bold;
        }
        .av-headMain .wrapper{
            
        }
        .av-headMain{
            background: #fff
        }
        .av-headMain .wrapper{
            width: 1170px;
            background: #145b93
        }
        .av-book-method .div_title h2{
            color: #fff
        }
        .container {
            width: 1170px;
            padding: 0px;
        }
        .selectDistrict{
            display: none !important;
        }
        #roundtrip{
            display: none;
        }
        #oneway{
            display: none;
        }
        .hidest{
            display: none;
        }
        .fullst {
            width: 22% !important;
        }

        @media(max-width: 767px){
            .fullst{
                width: 100% !important;
            }
        }
    </style>
    <div class="av-headMain">
        <div class="wrapper">
            <div class="topHotline">
                <ul>
                    <li>XE CHẤT LƯỢNG CAO SƠN TÙNG</li>
                </ul>
            </div>
            <div class="top-location">
                NHA TRANG - QUY NHƠN - ĐẮK LẮK - HỘI AN - ĐÀ NẴNG
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php } else { ?>
    <div class="av-headMain">
        <div class="wrapper">
            <div class="topHotline">
                <ul>
                    <li>Tổng đài:<span class="phone"><?=$web['info']['phone']?></span></li>
                </ul>
            </div>
            <div class="top-location">
                <?php if($web['anvui_id'] == 'TC03h1IzK1jParS') { ?>
                <a href="http://phucxuyen.com.vn/bussanbay" class="i-location text-nn">Bus HẠ LONG - SÂN BAY VÂN ĐỒN</a>
                <?php } else { ?>
                <a href="/dai-ly.html" class="i-location">Bến xe - Điểm bán vé</a>
                <?php } ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php } ?>
    
    <div class="av-headMobile fixed_menu">
        <div class="wrapper">
                <a href="<?=$web['home_url']?>" target="_self">
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
                </a></div>
            <div class="div_mobile">
                <div class="menu_mobile">
                    <div class="icon_menu"><span>Menu</span></div>
                    <div class="divmm">
                        <div class="mmContent">
                            <div class="mmTitle">
                                <div class="searchMobile">
                                    <a href="<?=$web['home_url']?>" target="_self">
                                        <?php if($web['logo'] != null) { ?>
                                            <?php if($web['logo']['is_swf']) { ?>
                                            <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                                                <param value="transparent" name="wmode">
                                                <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                                                <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                                            </object>
                                            <?php } else { ?>
                                            <img id="logo-main" src="<?=$web['static_upload']?><?=$web['logo']['img']?>" style="max-height: 45px;">
                                            <?php } ?>
                                            <?php } else { ?>
                                            <img id="logo-main" src="<?=$web['logo']['img']?>" class="img-responsive logo" alt="Logo" />
                                            <?php } ?>
                                    </a>
                                </div>
                            </div>
                            <div class="mmMenu">
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
                            <div class="close-mmenu"></div>
                        </div>
                        <div class="divmmbg"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
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
<style type="text/css">
    a.ticket-ac-btn.btn-vxr-lg.btn.pull-right.w100.hasSeat.closed {
    line-height: 33px;
}
</style>