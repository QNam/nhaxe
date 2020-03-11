<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/31//common/position_top.php
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
                <div class="row">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   </button>
                   <div class="col-md-5">
                    <a href="<?=$web['home_url']?>">
                        <?php if($web['logo'] != null) { ?>
                        <?php if($web['logo']['is_swf']) { ?>
                        <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                            <param value="transparent" name="wmode">
                            <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                            <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                        </object>
                        <?php } else { ?>
                        <img id="logo-main" class="logo" src="<?=$web['static_upload']?><?=$web['logo']['img']?>" style="max-height: 45px;">
                        <?php } ?>
                        <?php } else { ?>
                        <img id="logo-main" src="<?=$web['logo']['img']?>" class="img-responsive logo" alt="Logo" />
                        <?php } ?>
                    </a>
                   </div>
                   <div class="col-md-7">
                        <div class="hotline-d">
                            <p>Hotline: <span class="phoneNumberd" style="font-size: 30px;">0966 896 896</span></p>
                        </div>
                          <a href="https://itunes.apple.com/app/id1460760852" class="download_app apple" target="_blank"></a><a href="https://play.google.com/store/apps/details?id=vn.anvui.trungthanh" class="download_app google" target="_blank"></a>
                   </div>
               </div>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="" id="bs-example-navbar-collapse-1">
                <div class="row">
                  <?php include $_B['temp']->load('common/menu_top') ?>
                </div>
            </div>
            <!-- end navbar-collapse -->
         </div>
      </nav>
      <!--/////////////////-->
      <div class="tagline"></div>
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
                    <li>Tổng đài:<span class="phone">0203 399 1996</span></li>
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
  <a href="tel:0966896896"></a>
  <a href="tel:0966896896" class="pps-btn-img " title="Liên hệ">
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
    .down-app-d {
            float: right;
    margin-top: 10px;
    margin-left: 20px;
    }
    .down-app-d a {
    display: inline-block;
    width: 100px;
}
.v2_bnc_language{
    display: none;
}
.select2-container--default .select2-selection--single{
    background: #fff !important;
}
</style>

<script type="text/javascript">
    $('.flag_language').bind('click',function(){
        var lang = $(this).attr('data-language');
        var home_url = $('base').attr('href');
        $.ajax({
            url:home_url+'/language.html',
            type:'POST',
            dataType:'json',
            data:{redirect:$('#langRedirectUrl').val(), lang: lang},
            success:function (res) {
                console.log(res);
                window.location.href = $('#langRedirectUrl').val();
            },
            error:function (error) {
                console.log(error);
            }
        });
    });
</script>