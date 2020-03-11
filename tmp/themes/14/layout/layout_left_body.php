<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/14//layout/layout_left_body.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if($mod != 'checkticket') { ?>
<?php include $_B['temp']->load('common/position_top') ?>
<?php } ?>

<style type="text/css">
.content-container.tabs-container{
position: inherit;
    	background: #2e3192;padding-top: 15px; padding-bottom: 15px;
}
</style>
<?php $_B['temp']->printpos("5"); ?>

<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
<!--End Load content-->
<?php if($mod != 'checkticket') { ?>
<?php include $_B['temp']->load('common/position_bottom') ?>
<?php } ?>
