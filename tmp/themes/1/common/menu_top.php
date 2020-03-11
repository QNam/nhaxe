<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//common/menu_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="f-menutop ">
    <div class="wrapmenutop">
        <div class="f-menutop-name">
            <span> </span> <i class="fa fa-plus"></i>
        </div>
    </div>
    <ul class="f-menutop-ul <?php if($mod=='home') { ?>home<?php } else { ?>nohome<?php } ?>">
        <?php $i = 0 ?>
        <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
        <?php if($i < 9) { ?>
        <?php include $_B['temp']->load('common/menu_top_list') ?>
        <?php } ?>
        <?php $i++ ?>
        <?php } } ?>
    </ul>
    <script type="text/javascript">
    $(".topmn-bg-zoom").hover(function() {
        $(".top-menu-sub").css("display", "none");
    });
    $(".f-menutop-ul li a").hover(function() {

        $(".top-menu-sub").css("display", "block");
    });
    </script>
</div>
<div class="news-top" style="display:none">
    <ul>
        <?php if(is_array($menu['option'])) { foreach($menu['option'] as $k => $v) { ?>
        <li>
            <a href="<?=$v['link']?>"> <?=$v['title']?> </a>
        </li>
        <?php } } ?>
    </ul>
</div>