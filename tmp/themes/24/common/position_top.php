<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/24//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header>
 <div class="container">
    <div class="row top_header">
       <div class="col-md-5 logo">
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
          <div class="navbar-toggle visible-sm visible-xs showMenuIcon"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
       </div>
       <div class="col-md-7 text-right hidden-xs hidden-sm">
        <div class="col-md-6">
          <div class="row">
            <span class="hotline">Tổng đài đặt vé: <strong>02033.756.756</strong></span>
            <span class="hotline">Hotline CSKH: <strong>0966.896.896</strong></span>
          </div>
        </div>
        <div class="col-md-6">
          <a href="https://itunes.apple.com/app/id1460760852" class="download_app apple" target="_blank"></a><a href="https://play.google.com/store/apps/details?id=vn.anvui.trungthanh" class="download_app google" target="_blank"></a>
        </div>
      </div>

    </div>
    <div class="clearfix"></div>
    <div class="overlay_menu"></div>
    <div class="menus_box">
       <ul class="menu_list">

          <?php include $_B['temp']->load('common/menu_top') ?>
          
       </ul>
    </div>
 </div>
</header>

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