<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/28//common/position_bottom.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div id="vnt-footer">
    <div class="wrapper">
        
        <div class="w-footer">
            <div class="">
                
                <div class="copyright">
                    <div>© 2019 <span>LIMONOW.</span> All rights reserved. Developed by <span>Huy Thang </span> Auto</div>
                </div>
            </div>
           
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="menu_mobile">
            <div class="divmm">
                <div class="mmContent">
                    <div class="mmMenu">
                        <ul class="mmMain">
                            <?php $i = 0 ?>
                            <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
                                <?php if($i < 9) { ?>

                                    <li><a href="<?=$v['link']?>" target="_self"><?=$v['namemenu']?></a></li>
                                <?php } ?>
                                <?php $i++ ?>
                            <?php } } ?>
                            
                        </ul>
                        <div class="hotline-mobile">
                            <a href="tel:1800 6381"><span class="text">Tổng đài <span class="h-style">ĐẶT XE MIỄN CƯỚC</span></span> <span class="h-number">1800 6381</span></a>
                        </div>
                    </div>
                    <div class="close-mmenu">
                        <div class="icon_menu"><span class="style_icon"></span>Close</div>
                    </div>
                </div>
                <div class="divmmbg"></div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".menu_mobile .icon_menu").click(function(event) {
            if(! $(".menu_mobile").hasClass("showmenu")){
                $(".menu_mobile").find(".divmm").addClass('show');
                $('.menu_mobile').addClass("showmenu");
                $('html').addClass("openmenu");
                $('body').css({});
            }else{
                $(".menu_mobile").find(".divmm").removeClass('show');
                $('.menu_mobile').removeClass("showmenu");
                $('html').removeClass("openmenu");
            }
        });
        $(".menu_mobile .divmm .divmmbg , .menu_mobile .divmm .mmContent .close-mmenu").click(function(event) {
            $(this).parents(".menu_mobile").find(".divmm").removeClass('show');
            setTimeout(function() {
                $('.menu_mobile').removeClass("showmenu");
                $('html').removeClass("openmenu");
            }, 500);
        });
        $(window).resize(function(){
            if($(window).innerWidth() > 1024){
                $(".menu_mobile").find(".divmm").removeClass('show');
                $('.menu_mobile').removeClass("showmenu");
                $('html').removeClass("openmenu");
            }
        });
    });
</script>
<?php if($web['info']['link_fanpage']) { ?>
<script type="text/javascript">
$(document).ready(function() {
    $('.online-support').hide();
    $('.support-icon-right h3').click(function(e) {
        e.stopPropagation();
        $('.online-support').slideToggle();
    });
    $('.online-support').click(function(e) {
        e.stopPropagation();
    });
    $(document).click(function() {
        $('.online-support').slideUp();
    });

});
</script>


<div class="support-icon-right">
    <h3><i class="fa fa-comments"></i> Hỗ trợ tuyến </h3>
    <div class="online-support">
        <div class="fb-page" data-href="https://www.facebook.com/<?=$web['info']['link_fanpage']?>" data-small-header="true" data-height="300" data-width="250" data-tabs="messages" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false" data-show-posts="false">
        </div>
    </div>
</div>

<style type="text/css">
    .support-icon-right {
    position: fixed;
    right: 5px;
    bottom: 0;
    z-index: 999999;
    overflow: hidden;
    width: 250px;
    color: #fff!important;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}
.support-icon-right h3 {
    text-transform: uppercase;
    font-weight: bold;
    font-size: 13px!important;
    font-family: Arial;
    color: #fff!important;
    margin: 0!important;
    background-color: #3a5795;
    cursor: pointer;
    border-radius: 10px 10px 0px 0px;
    overflow: hidden;
}
.support-icon-right i {
    padding: 10px;
    font-size: 24px;
}
.online-support {
    display: none;
}
</style>
<?php } ?>

<?php if($web['audio'] != null) { ?>
<audio controls autoplay<?php if($web['audio']['play_again'] == 1) { ?> loop<?php } ?> style="display:none">
<source src="<?=$web['static_upload']?><?=$web['audio']['audio']?>" type="audio/mpeg">
</audio>
<?php } ?>