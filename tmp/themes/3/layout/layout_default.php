<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/3//layout/layout_default.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php include $_B['temp']->load('common/position_top') ?>

<!--Slide-->
<div class="slide">
    <?php $_B['temp']->printpos("5"); ?>
</div>
<!--End Slide-->

<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
</div>
<!--End Load content-->

<?php include $_B['temp']->load('common/position_bottom') ?>