<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/11//common/position_bottom.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if($web['info']['link_fanpage'] != null) { ?>
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
            background-color: #07693d;
            /* margin-left: -25px; */
            /* margin-right: -25px; */
            /* padding-top: 25px; */
            /* padding-bottom: 10px; */
            /* margin-top: -25px; */
        }
        footer{
            color: #fff;
        }
    </style>
    

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-md-left">
        <?=$web['footer']?>
    </div>

    <!--/.Footer Links-->

    <!-- Copyright-->
    
    <div class="footer-copyright py-3 text-center">
        <a href="https://anvui.vn" style="color: #ffffff">
            <strong> An vui</strong> 
        </a> tự hào là đơn vị tư vấn giải pháp quản lý tổng thể cho <strong> <?=$web['info']['business']?> </strong>
    </div>
    <!--/.Copyright -->

</footer>
<?php if($web['audio'] != null) { ?>
<audio controls autoplay<?php if($web['audio']['play_again'] == 1) { ?> loop<?php } ?> style="display:none">
<source src="<?=$web['static_upload']?><?=$web['audio']['audio']?>" type="audio/mpeg">
</audio>
<?php } ?>