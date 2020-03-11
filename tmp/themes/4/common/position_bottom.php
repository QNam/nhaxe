<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/4//common/position_bottom.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><footer class="page-footer font-small unique-color-dark pt-0">

    <!--Menu footer-->
    <style>
        .cus-menu-footer {
            background-color: #d32f2f;
            margin-left: -25px;
            margin-right: -25px;
            padding-top: 25px;
            padding-bottom: 10px;
            margin-top: -25px;
            margin-bottom: 10px;
        }
    </style>
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