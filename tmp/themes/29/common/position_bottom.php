<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/29//common/position_bottom.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if($web['anvui_id'] == 'TC0Cu1rzpoTq3vbZ') { ?>
<div class="button-position  bnt-download">
    <a class="color-white download-button" onclick="return gtag_report_conversion('tel:19007009);" href="tel:<?=$web['info']['phone']?>">
        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
    </a>
</div>
<div class="bnt-download button-form bg-yl">
  <a onclick="return gtag_report_conversion('tel:19007009);" href="tel:<?=$web['info']['phone']?>" style="color: #fff">
        Tổng đài đặt vé : <?=$web['info']['phone']?></a>
</div>
<?php } else { ?>
<div class="button-position  bnt-download">
    <a class="color-white download-button" href="tel:<?=$web['info']['phone']?>">
        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
    </a>
</div>
<div class="bnt-download button-form bg-yl">
  <a href="tel:<?=$web['info']['phone']?>" style="color: #fff">
        Tổng đài đặt vé : <?=$web['info']['phone']?></a>
</div>
<?php } ?>

<style type="text/css">
.bnt-download.button-form {
    position: fixed;
        background: #c70101;
    box-shadow: 0 0 3px #c70100;
    border: 2px solid #fff;
    bottom: 4px;
    left: 40px;
    cursor: pointer;
    z-index: 999;
    margin: 0 0 3px;
    padding: 7px 10px 7px 30px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 900;
    border-radius: 5px;
}
.button-position {
    cursor: pointer;
    position: fixed;
    bottom: 4px;
    z-index: 1000;
    left: 20px;
    text-align: center;
    border-radius: 40px;
    border: 2px solid #fff;
    /* padding: 14px 0; */
    width: 45px;
    height: 45px;
    line-height: 45px;
    padding-top: 13px;
}
.bnt-download .fa {
    
    color: #fff;
}
.fs-18 {
    font-size: 18px!important;
    line-height: 25px;
}
@-webkit-keyframes shake {
    from {
        -webkit-transform: rotate(10deg);
    }
    to {
        -webkit-transform-origin:center center;
        -webkit-transform: rotate(-10deg);
    }

}
.bnt-download {
        background: #c70101;
    box-shadow: 0 0 3px #c70100;
}

  .bg-blue1 {
    background-color: #000;
  }

</style>
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
    color: #fff !important;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.support-icon-right h3 {
    text-transform: uppercase;
    font-weight: bold;
    font-size: 13px !important;
    font-family: Arial;
    color: #fff !important;
    margin: 0 !important;
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
<footer class="container-fluid">
    <div class="">
        <div class="">
            <?=$web['footer']?>
            
        </div>
    </div>
</footer>
<?php if($web['audio'] != null) { ?>
<audio controls autoplay<?php if($web['audio']['play_again']==1) { ?> loop
    <?php } ?> style="display:none">
    <source src="<?=$web['static_upload']?><?=$web['audio']['audio']?>" type="audio/mpeg">
</audio>
<?php } ?>