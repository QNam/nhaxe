<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/10//layout/layout_default.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php include $_B['temp']->load('common/position_top') ?>

<?php $_B['temp']->printpos("5"); ?>


<!--End Slide-->



<div class="clearfix"></div>
<!--Load content-->
<div class="idx-frame-bg idx-bg1">
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
</div>
<!--End Load content-->

<?php include $_B['temp']->load('common/position_bottom') ?>