<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/19//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="header-wrap">
   <div class="header pr">
      <!--/////////////////////////////-->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
                <a href="<?=$web['home_url']?>">
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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <?php include $_B['temp']->load('common/menu_top') ?>
            </div>
            <!-- end navbar-collapse -->
         </div>
      </nav>
      <?php if($web['anvui_id'] !== 'TC09Y1qfVRdUCvIf') { ?>
      <!-- <div class="tagline">Dịch vụ từ trái tim</div> -->
      <?php } ?>
   </div>
   <!--end header-->
</div>
<div id="av-header" style="display: none;">
    <div class="av-headerTop">
        <div class="wrapper">
            <div class="av-logo">
                <h1>
                    
                </h1>
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
                
                
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="av-headMain">
        <div class="wrapper">
            <div class="topHotline">
                <ul>
                    <li>Tổng đài:<span class="phone"><?=$web['info']['phone']?></span></li>
                </ul>
            </div>
            <div class="top-location">
                <a href="/dai-ly.html" class="i-location">Bến xe - Điểm bán vé</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="av-headMobile fixed_menu">
        <div class="wrapper">
            <div class="av-logo-mobile">
                <h1><a href="<?=$web['home_url']?>" target="_self">
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
                </a></h1></div>
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
  <a  href="tel:<?=$web['info']['phone']?>"></a>
  <a  href="tel:<?=$web['info']['phone']?>" class="pps-btn-img " title="Liên hệ">
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
    background-position: center top;
}
</style>
<?php } ?>
<?php } ?>

<style type="text/css">
    .product-tab-wrap{
        display: none;
    }
    .search-wrap{
        margin-top: 120px;
    }
    .form-control{
        color: #333
    }
</style>