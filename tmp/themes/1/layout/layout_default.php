<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//layout/layout_default.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="wrapper">
    <?php include $_B['temp']->load('common/position_top') ?>
    <div class="slidetop">
        <?php $_B['temp']->printpos("5"); ?>
    </div>
    <div class="main1">
        <div class="" style="padding-left:15px ; padding-right:15px">
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="f-ctn-center ">
                    <p class="pull-left  hide">
                        <button type="button" class="btn btn-primary btn-xs hide" data-toggle="offcanvas">Ẩn / Hiện tiện ích BLOCK</button>
                    </p>
                    <?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
                </div>
                <!--end f-ctn center-->
                <div class="f-ctn-right hide col-md-0 col-xs-0 col-sm-0 border-right">
                </div>
                <!--end f ctn-right-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <div class="clearfix"></div>
    </div>
    <!--end main1-->
    <?php include $_B['temp']->load('common/position_bottom') ?>
</div>