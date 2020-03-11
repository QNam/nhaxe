<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/7//common/position_bottom.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style type="text/css">
    .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
    background-color: #00aff2;
    background-color: #00aff2 9;
}
.phonering-alo-phone {
   position:fixed;
   visibility:hidden;
   background-color:transparent;
   width: 90px;
   height:90px;
   cursor:pointer;
   z-index:200000!important;
   -webkit-backface-visibility:hidden;
   -webkit-transform:translateZ(0);
   transition:visibility .5s;
   display:block
   }
   .phonering-alo-phone.phonering-alo-show {
   visibility:visible
   }
   @-webkit-keyframes fadeInRight {
   0% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   100% {
   opacity:1;
   -webkit-transform:none;
   transform:none
   }
   }
   @-webkit-keyframes fadeInRightBig {
   0% {
   opacity:0;
   -webkit-transform:translate3d(2000px,0,0);
   transform:translate3d(2000px,0,0)
   }
   100% {
   opacity:1;
   -webkit-transform:none;
   transform:none
   }
   }
   @-webkit-keyframes fadeOutRight {
   0% {
   opacity:1
   }
   100% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   }
   .fadeOutRight {
   -webkit-animation-name:fadeOutRight;
   animation-name:fadeOutRight
   }
   .phonering-alo-phone.phonering-alo-static {
   opacity:.6
   }
   .phonering-alo-phone.phonering-alo-hover,.phonering-alo-phone:hover {
   opacity:1
   }
   .phonering-alo-ph-circle {
   width:160px;
   height:160px;
   top:20px;
   left:20px;
   position:absolute;
   background-color:transparent;
   border-radius:100%;
   border:2px solid rgba(30,30,30,0.4);
   border:2px solid #bfebfc 9;
   opacity:.1;
   -webkit-animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
   animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
   transition:all .5s;
   -webkit-transform-origin:50% 50%;
   -ms-transform-origin:50% 50%;
   transform-origin:50% 50%
   }
   .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle {
   -webkit-animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important;
   animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle {
   -webkit-animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important;
   animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone:hover .phonering-alo-ph-circle {
   border-color:#00aff2;
   opacity:.5
   }
   .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle {
   border-color:#75eb50;
   border-color:#baf5a7 9;
   opacity:.5
   }
   .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {
   border-color:#00aff2;
   border-color:#bfebfc 9;
   opacity:.5
   }
   .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle {
   border-color:#ccc;
   opacity:.5
   }
   .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle {
   border-color:#75eb50;
   opacity:.5
   }
   .phonering-alo-ph-circle-fill {
   width: 90px;
   height: 90px;
   bottom: 60px;
   left: -10px;
   z-index: 99999999;
   position: fixed;
   background-color:#000;
   border-radius:100%;
   border:2px solid transparent;
   -webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
   animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
   transition:all .5s;
   -webkit-transform-origin:50% 50%;
   -ms-transform-origin:50% 50%;
   transform-origin:50% 50%;
   }
   .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle-fill {
   -webkit-animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important;
   animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle-fill {
   -webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
   animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
   opacity:0!important
   }
   .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone:hover .phonering-alo-ph-circle-fill {
   background-color:rgba(0,175,242,0.5);
   background-color:#00aff2 9;
   opacity:.75!important
   }
   .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle-fill {
   background-color:rgba(117,235,80,0.5);
   background-color:#baf5a7 9;
   opacity:.75!important
   }
   .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle-fill {
   }
   .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle-fill {
   background-color:rgba(204,204,204,0.5);
   background-color:#ccc 9;
   opacity:.75!important
   }
   .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle-fill {
   background-color:rgba(117,235,80,0.5);
   opacity:.75!important
   }
   .phonering-alo-ph-img-circle {
   width: 50px;
   height: 50px;
   bottom: 81px;
   left: 10px;
   z-index: 99999999999;
   position: fixed;
   background:rgba(30,30,30,0.1) url(https://showroomchevrolet.com/wp-content/uploads/hotline-icon.png) no-repeat center center;
   border-radius:100%;
   border:2px solid transparent;
   -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
   animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
   -webkit-transform-origin:50% 50%;
   -ms-transform-origin:50% 50%;
   transform-origin:50% 50%;
   }
   .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-img-circle {
   -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important;
   animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-img-circle {
   -webkit-animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important;
   animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important
   }
   .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone:hover .phonering-alo-ph-img-circle {
   background-color:#00aff2
   }
   .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-img-circle {
   background-color:#75eb50;
   background-color:#75eb50 9
   }
   .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
   background-color:#00aff2;
   background-color:#00aff2 9
   }
   .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-img-circle {
   background-color:#ccc
   }
   .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-img-circle {
   background-color:#75eb50
   }
   @-webkit-keyframes phonering-alo-circle-anim {
   0% {
   -webkit-transform:rotate(0) scale(.5) skew(1deg);
   -webkit-opacity:.1
   }
   30% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   -webkit-opacity:.5
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   -webkit-opacity:.1
   }
   }
   @-webkit-keyframes phonering-alo-circle-fill-anim {
   0% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   opacity:.2
   }
   100% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   }
   @-webkit-keyframes phonering-alo-circle-img-anim {
   0% {
   -webkit-transform:rotate(0) scale(1) skew(1deg)
   }
   10% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
   }
   20% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg)
   }
   30% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
   }
   40% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg)
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg)
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg)
   }
   }
   @-webkit-keyframes fadeInRight {
   0% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   -ms-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   100% {
   opacity:1;
   -webkit-transform:none;
   -ms-transform:none;
   transform:none
   }
   }
   @keyframes fadeInRight {
   0% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   -ms-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   100% {
   opacity:1;
   -webkit-transform:none;
   -ms-transform:none;
   transform:none
   }
   }
   @-webkit-keyframes fadeOutRight {
   0% {
   opacity:1
   }
   100% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   -ms-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   }
   @keyframes fadeOutRight {
   0% {
   opacity:1
   }
   100% {
   opacity:0;
   -webkit-transform:translate3d(100%,0,0);
   -ms-transform:translate3d(100%,0,0);
   transform:translate3d(100%,0,0)
   }
   }
   @-webkit-keyframes phonering-alo-circle-anim {
   0% {
   -webkit-transform:rotate(0) scale(.5) skew(1deg);
   transform:rotate(0) scale(.5) skew(1deg);
   opacity:.1
   }
   30% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.5
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg);
   opacity:.1
   }
   }
   @keyframes phonering-alo-circle-anim {
   0% {
   -webkit-transform:rotate(0) scale(.5) skew(1deg);
   transform:rotate(0) scale(.5) skew(1deg);
   opacity:.1
   }
   30% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.5
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg);
   opacity:.1
   }
   }
   @-webkit-keyframes phonering-alo-circle-fill-anim {
   0% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg);
   opacity:.2
   }
   100% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   }
   @keyframes phonering-alo-circle-fill-anim {
   0% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg);
   opacity:.2
   }
   100% {
   -webkit-transform:rotate(0) scale(.7) skew(1deg);
   transform:rotate(0) scale(.7) skew(1deg);
   opacity:.2
   }
   }
   @-webkit-keyframes phonering-alo-circle-img-anim {
   0% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   10% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
   transform:rotate(-25deg) scale(1) skew(1deg)
   }
   20% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg);
   transform:rotate(25deg) scale(1) skew(1deg)
   }
   30% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
   transform:rotate(-25deg) scale(1) skew(1deg)
   }
   40% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg);
   transform:rotate(25deg) scale(1) skew(1deg)
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   }
   @keyframes phonering-alo-circle-img-anim {
   0% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   10% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
   transform:rotate(-25deg) scale(1) skew(1deg)
   }
   20% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg);
   transform:rotate(25deg) scale(1) skew(1deg)
   }
   30% {
   -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
   transform:rotate(-25deg) scale(1) skew(1deg)
   }
   40% {
   -webkit-transform:rotate(25deg) scale(1) skew(1deg);
   transform:rotate(25deg) scale(1) skew(1deg)
   }
   50% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   100% {
   -webkit-transform:rotate(0) scale(1) skew(1deg);
   transform:rotate(0) scale(1) skew(1deg)
   }
   }
   
   .info-modal p {
    margin-bottom: 9px;
}
.phonering-alo-ph-img-circle {
    background-color: #00aff2;
    background-color: #00aff2 9;
}
</style>
<div class="phonering-alo-ph-circle-fill"></div>
<div class="phonering-alo-ph-img-circle">
  <a href="tel:<?=$web['info']['phone']?>"></a>
  <a href="tel:<?=$web['info']['phone']?>" class="pps-btn-img " title="Liên hệ">
  <img src="https://showroomchevrolet.com/wp-content/uploads/hotlinechevrolet.png" alt="Liên hệ" width="50" onmouseover="this.src='https://showroomchevrolet.com/wp-content/uploads/hotlinechevrolet.png';" onmouseout="this.src='https://showroomchevrolet.com/wp-content/uploads/hotlinechevrolet.png';">
  </a>
</div>

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
    <h3><i class="fa fa-comments"></i> Hỗ trợ trực tuyến </h3>
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
<footer class="page-footer font-small unique-color-dark pt-0">
    <div class="container-fluid cus-menu-footer">
        <div class="container">
            <ul class="footer-nav row">
                <?php if(is_array($menu['bottom'])) { foreach($menu['bottom'] as $k => $v) { ?>
                <?php include $_B['temp']->load('common/menu_bottom_list') ?>
                <?php } } ?>
            </ul>
        </div>
    </div>
    <!--End Menu footer-->
    <!--Menu footer-->
    <style>
        .cus-menu-footer {
            background-color: #9a6d00;
            /* margin-left: -25px; */
            /* margin-right: -25px; */
            /* padding-top: 25px; */
            /* padding-bottom: 10px; */
            /* margin-top: -25px; */
             margin-bottom: 25px; 
        }
    </style>
    

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-md-left">
        <?=$web['footer']?>
    </div>

    <!--/.Footer Links-->

    <!-- Copyright-->
    
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://anvui.vn" style="color: #ffffff">
            <strong> An vui</strong>
        </a>
    </div>
    <!--/.Copyright -->

</footer>
<?php if($web['audio'] != null) { ?>
<audio controls autoplay<?php if($web['audio']['play_again'] == 1) { ?> loop<?php } ?> style="display:none">
<source src="<?=$web['static_upload']?><?=$web['audio']['audio']?>" type="audio/mpeg">
</audio>
<?php } ?>