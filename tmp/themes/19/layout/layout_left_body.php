<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/19//layout/layout_left_body.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php include $_B['temp']->load('common/position_top') ?>
<style type="text/css">
.main-bg-vn.container-fluid.pr {
    display: none;
}
.outer-wrap.sx-hide.text-center.marketing-msg.bg-dark-grey.text-white{
display: none;
}
</style>
<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
<!--End Load content-->

<?php include $_B['temp']->load('common/position_bottom') ?>

