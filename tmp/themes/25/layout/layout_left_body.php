<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/25//layout/layout_left_body.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php include $_B['temp']->load('common/position_top') ?>

<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
<!--End Load content-->

<?php include $_B['temp']->load('common/position_bottom') ?>

