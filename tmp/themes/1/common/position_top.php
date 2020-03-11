<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style type="text/css">
.hearder_main .logo img {
    width: 100%;
    max-height: 100px; 
    min-height: 60px; 
}
.hearder_main .logo {
    width: 230px;
    /* width: 100px; */
    height: auto;
    padding-bottom: 10px;
    padding: 10px !important;
    position: absolute;
    z-index: 1;
    top: -40px;
    clear: both;
    overflow: hidden;
    left: 0;
    background: #fff;
    -webkit-border-bottom-left-radius: 10px;
    -moz-border-bottom-left-radius: 10px;
    -ms-border-bottom-left-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-border-bottom-right-radius: 10px;
    -moz-border-bottom-right-radius: 10px;
    -ms-border-bottom-right-radius: 10px;
    border-bottom-right-radius: 10px;
    -webkit-box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.75);
    -moz-box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.75);
    box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.75);
    text-align: center;
}
</style>
<div id="header">
    <div class="hearder_search">
        <div class="main">
            <div class="menu_main">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <ul class="styleheadertop">
                        
                        <li>
                             <div class="logo visible-xs">
                        <a href="<?=$web['home_url']?>"  title="Logo title" rel="nofollow">
                          <?php if($web['logo'] != null) { ?> 
                            <?php if($web['logo']['is_swf']) { ?> 
                                <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                                <param value="transparent" name="wmode">
                                <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                                <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                                </object>
                            <?php } else { ?>
                                 <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" class="img-responsive"  alt="Logo"/>
                            <?php } ?> 
                          <?php } else { ?>
                           <img src="<?=$web['logo']['img']?>" class="img-responsive"  alt="Logo"/>
                          <?php } ?>
                      </a>
                      <?php if(empty($web['query_string']['mod'])) { ?>
                      <h1 style="display:none"><?=$web['info']['business']?></h1> 
                      <?php } ?>
                    </div>
                    <!--end logo-->
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="TextQuangCao">
                        <div class="container">
                            <marquee><?php  include $_B['temp']->printposAd("adv_1"); ?></marquee>
                        </div>
                    </div>
                </div>
                <div id="search-box" class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                    <div class="input-group-btn buttonsearch"> <a href="javascript:void(0);" class="search-button" id="BNC_btn_search"><i class="fa fa-search"></i></a>
                    </div>
                    <!--end input group-->
                    <div class="search search-area">
                        <!-- <form class="navbar-form" role="search"> -->
                        <div class="input-group search-border control-group">
                            <div class="input-group-btn search-basic">
                                <select class="form-control " name="BNC_searchCategory">
                                    <option value="news"selected><?php echo lang('search_news');?></option>
                                </select>
                            </div>
                            <!--end search basic-->
                            <input type="text" class="form-control search-field" placeholder="Tìm kiếm ..." name="BNC_txt_search" id="BNC_txt_search" value="<?php if(isset($searchBasic)) { ?><?=$searchBasic?><?php } ?>">
                        </div>
                    </div>
                    <!--end search-area-->
                </div>
            </div>
        </div>
    </div>
    <div class="hearder_main">
        <div class="bg_main png">
            <div class="main">
                <div class="menu_main">
                    <div class="logo hidden-xs">
                        <a href="<?=$web['home_url']?>"  title="Logo title" rel="nofollow">
                          <?php if($web['logo'] != null) { ?> 
                            <?php if($web['logo']['is_swf']) { ?> 
                                <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                                <param value="transparent" name="wmode">
                                <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                                <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                                </object>
                            <?php } else { ?>
                                 <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" class="img-responsive"  alt="Logo"/>
                            <?php } ?> 
                          <?php } else { ?>
                           <img src="<?=$web['logo']['img']?>" class="img-responsive"  alt="Logo"/>
                          <?php } ?>
                      </a>
                      <?php if(empty($web['query_string']['mod'])) { ?>
                      <h1 style="display:none"><?=$web['info']['business']?></h1> 
                      <?php } ?>
                    </div>
                    <!--end logo-->
                </div>
                <div class="menu_main_new">
                    <?php include $_B['temp']->load('common/menu_top') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header hide">
    <div class="header-top-top">
        <div class="container">
            <div class="row ">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                    <ul class="styleheadertop">
                        
                        <li>
                            <div class="logo .visible-xs">
                        <a href="<?=$web['home_url']?>"  title="Logo title" rel="nofollow">
                          <?php if($web['logo'] != null) { ?> 
                            <?php if($web['logo']['is_swf']) { ?> 
                                <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                                <param value="transparent" name="wmode">
                                <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                                <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                                </object>
                            <?php } else { ?>
                                 <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" class="img-responsive"  alt="Logo"/>
                            <?php } ?> 
                          <?php } else { ?>
                           <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" class="img-responsive"  alt="Logo"/>
                          <?php } ?>
                      </a>
                      <?php if(empty($web['query_string']['mod'])) { ?>
                      <h1 style="display:none"><?=$web['info']['business']?></h1> 
                      <?php } ?>
                    </div>
                    <!--end logo-->
                        </li>
                    </ul>
                    <!--end style headertop-->
                </div>
                <!--end col-md-5-->
                <div class="col-md-7 col-sm-8 col-xs-12 floatleft">
                    <div id="search-box">
                        <div class="input-group-btn buttonsearch"> <a href="javascript:void(0);" class="search-button" id="BNC_btn_search"><i class="fa fa-search"></i></a>
                        </div>
                        <!--end input group-->
                        <div class="search search-area">
                            <!-- <form class="navbar-form" role="search"> -->
                            <div class="input-group search-border control-group">
                                <div class="input-group-btn search-basic">
                                    <select class="form-control " name="BNC_searchCategory">
                                        <option value="product" <?php if((isset($mod) && $mod=='product' )) { ?>selected
                                            <?php } ?>><?php echo lang('search_product');?></option>
                                        <option value="news" <?php if((isset($mod) && $mod=='news' ) ) { ?>selected
                                            <?php } ?>><?php echo lang('search_news');?></option>
                                        <option value="album" <?php if((isset($mod) && $mod=='album' )) { ?>selected
                                            <?php } ?>><?php echo lang('search_album');?></option>
                                        <option value="video" <?php if((isset($mod) && $mod=='video' )) { ?>selected
                                            <?php } ?>><?php echo lang('search_video');?></option>
                                        <option value="recruit" <?php if((isset($mod) && $mod=='recruit' )) { ?>selected
                                            <?php } ?>><?php echo lang('search_recruit');?></option>
                                    </select>
                                </div>
                                <!--end search basic-->
                                <input type="text" class="form-control search-field" placeholder="" name="BNC_txt_search" id="BNC_txt_search" value="<?php if(isset($searchBasic)) { ?><?=$searchBasic?><?php } ?>">
                            </div>
                            <!--end control group-->
                            <!--  <div class="search-tem">
                            Từ khóa phổ biến <a href="#">bnc version 02</a> <a href="#">website vô địch</a> <a href="#">plus muôn năm</a> <a href="#">x-team project</a>
                          </div> -->
                            <!--  </form> -->
                        </div>
                        <!--end search-area-->
                    </div>
                    <!--end id searchbox-->
                </div>
                <!--end col-md 7-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end header top top-->
    <div class="clearfix"></div>
    <div class="headerbottom1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stylelogo">
                </div>
                <!--end col-lg-1-->
                <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
                    <div class="headder-bottom">
                        <div class="menu">
                            <?php include $_B['temp']->load('common/menu_top') ?>
                        </div>
                        <!--end menu-->
                        <div id="notify-box" class="col-md-2 col-lg-2 col-sm-2 col-xs-12  ">
                            <ul>
                                <li class="icon-newspaper help-box">
                                    <div class="shopcart phoneview">
                                        <a class="checkorder hidden-xs" href="<?=$web['home_url']?>/product-fastCart-index.html"><span class="icon-header"><i class="fa fa-mobile "></i></span> <span><?php echo lang('common_mobile_version');?></span>
                                      </a>
                                        <div class="phoneview-show">
                                            <img src="<?=$_B['qrcode']?>" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="icon-phone support-box">
                                    <div class="shopcart checkordernb pos-r">
                                        <a class="checkorder" href="<?=$web['home_url']?>/product-fastCart-index.html"><span class="icon-header"><i class="fa fa-map-marker"></i></span> <span><?php echo lang('view_fast_cart');?></span></a>
                                        <div class="checkordernb-show">
                                            <div id="alert-fast-cart" style="display: none;" class="alert alert-danger alert-dismissible" role="alert">
                                                <a type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></a>
                                                <span id="notify-fast-cart"></span>
                                            </div>
                                            <form id="fast-cart">
                                                <p class="chelp"><?php echo lang('invoice');?></p>
                                                <input type="text" id="invoice" class="validate[required] form-control" />
                                                <p class="chelp"><?php echo lang('email');?></p>
                                                <input type="text" id="email" class="validate[required,custom[email]] form-control" />
                                                <button type="submit" id="send-fast-cart"><?php echo lang('send');?></button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--end notify-box-->
                    </div>
                    <!--end header bottom-->
                    <div class="social-share" style="display:none">
                        <div class="fb-like" data-href="http://webbnc.net" data-layout="button_count" data-action="recommend" data-show-faces="false" data-share="true">
                        </div>
                        <!--end fb-like-->
                    </div>
                    <!--end social share-->
                </div>
                <!--end col-lg-9 -->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end headerbottom1-->
    <div class="pseudoStickyBlock"></div>
    <div class="header-middle">
        <div class="container">
            <div class="backgroundrow">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    </div>
                    <!--end col-lg-3-->
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    </div>
                    <!--end col-lg-3-->
                </div>
                <!--end row-->
            </div>
            <!--end background row-->
        </div>
        <!--end container-->
    </div>
    <!--end header middle-->
</header>
<?php if($web['background'] != null) { ?>
<style>
body {
    background: {
        <?=$web['background']['color']?>
    }
    url('<?=$web['static_upload']?><?=$web['background']['img']?>');
    background-position: center top;
    {
        <?=$web['background']['repeat']?>
    }
}
</style>
<?php } ?>
<div class="container bg-color-2 ">
    <!--temp block/block_top_category_custom-->
</div>
<script type="text/javascript">
$(document).ready(function() {
    $(".icon-search").click(function() {
        $(".search-area").slideToggle(300);
    });
    $(".f-menutop-name").click(function() {
        $(".f-menutop-ul").slideToggle(300);
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('.titleblockproduct h2').click(function() {
        $(".f-block-news-menu ").toggleClass('floatmenu');
        $(".wrapper").toggleClass('pull-right1');
    });
});
</script>
<script type="text/javascript">
var ww = document.body.clientWidth;

$(document).ready(function() {
    $(".menudsd li a").each(function() {
        if ($(this).next().length > 0) {
            $(this).addClass("parentaa");
        };
    });

    $(".menu-mobilea").click(function(e) {
        e.preventDefault();
        $(this).toggleClass("activea");
        $(".mobileciti-header-contenta").toggle(300);
    });
    adjustMenu();
});

$(window).bind('resize orientationchange', function() {
    ww = document.body.clientWidth;
    adjustMenu();
});

var adjustMenu = function() {
    if (ww < 768) {
        $('#header').removeClass('fixed2');


    } else if (ww >= 768) {
        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > 55) {
                $('#header').addClass('fixed2');

            } else {
                $('#header').removeClass('fixed2');

            }
        });
    }
}
</script>