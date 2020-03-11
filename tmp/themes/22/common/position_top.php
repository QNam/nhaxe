<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><!-- fixed menu -->     

<div class="transition top-menu" id="top-menu">
    <div class="my-container">
        <a href="/">
        <div class="logo transition">
        
            <img class="logo-mark transition" src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/DanAnh/svg/dananh-logomark.svg" />
            <h1 class="logo-type transition">DAN ANH</h1>
        </div>
            
        </a>
        <div class="menu-burger">&nbsp;</div>
        
        <div class="nav-menu transition">
            
                <?php include $_B['temp']->load('common/menu_top') ?>
                
        </div>
        <div style="clear:both"></div>
    </div>
</div>
<!-- end fixed menu -->     





<!--
<div class="phonering-alo-ph-circle-fill"></div>
<div class="phonering-alo-ph-img-circle">
  <a href="tel:<?=$web['info']['phone']?>"></a>
  <a href="tel:<?=$web['info']['phone']?>" class="pps-btn-img " title="Liên hệ">
  <img src="https://showroomchevrolet.com/wp-content/uploads/hotlinechevrolet.png" alt="Liên hệ" width="50" onmouseover="this.src='https://showroomchevrolet.com/wp-content/uploads/hotlinechevrolet.png';" onmouseout="this.src='https://showroomchevrolet.com/wp-content/uploads/hotlinechevrolet.png';">
  </a>
</div>
-->
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