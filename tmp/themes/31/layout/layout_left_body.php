<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/31//layout/layout_left_body.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style type="text/css">
.dt-slidew{
display: none;
}
</style>
<?php if($mod != 'insurrancelove' || $mod != 'checkticket') { ?>
<?php include $_B['temp']->load('common/position_top') ?>
<?php $_B['temp']->printpos("5"); ?>
<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
<!--End Load content-->
<?php include $_B['temp']->load('common/position_bottom') ?>

<?php } else { ?>

<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>

<?php } ?>

