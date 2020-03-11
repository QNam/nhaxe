<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/21//layout/layout_left_body.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php include $_B['temp']->load('common/position_top') ?>
<?php if($mod != 'datve') { ?>
<?php $_B['temp']->printpos("5"); ?>

<style>
.search-wrap{
      display: none;
    }
    .box-news-title.col-md-12{
    	display: none;
    }
</style>
<?php } ?> 

<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
<!--End Load content-->



<?php include $_B['temp']->load('common/position_bottom') ?>

