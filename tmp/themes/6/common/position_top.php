<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//common/position_top.php
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
    position: relative;
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
<header class="sticky-style" id="header">
    <div class="container clearfix" id="bg-header">
        <div class="box-header clearfix">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <a href="<?=$web['home_url']?>" title="Logo title" rel="nofollow">
                            <?php if($web['logo'] != null) { ?>
                            <?php if($web['logo']['is_swf']) { ?>
                            <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                                <param value="transparent" name="wmode">
                                <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                                <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                            </object>
                            <?php } else { ?>
                            <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" class="img-responsive" alt="Logo" />
                            <?php } ?>
                            <?php } else { ?>
                            <img src="<?=$web['logo']['img']?>" class="img-responsive" alt="Logo" />
                            <?php } ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 top_banner">
                    <div class="contact">
                        <span class="phone"><?=$web['info']['phone']?></span>
                        <br>
                        <span class="address"><?=$web['info']['address']?></span>
                    </div>
                    <a href="#"><img src="<?=$web['static_temp_no_cdn']?><?=$web['temp']?>/statics/imgs/contact-us.png" class="pull-right"></a>
                </div>
            </div>
        </div>
    </div>
    <?php include $_B['temp']->load('common/menu_top') ?>
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