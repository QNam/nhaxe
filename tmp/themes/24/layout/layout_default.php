<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/24//layout/layout_default.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<?php include $_B['temp']->load('common/position_top') ?>
<section>
    <div class="container containerIndex">
        <!--Slide-->

        <?php $_B['temp']->printpos("5"); ?>

        <!--End Slide-->
        <!--Load content-->
        <?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
        <!--End Load content-->
    </div>
</section>

<?php if($web['anvui_id'] == 'TC0A31qrgPVJBW3a') { ?>
<div class="modal fade" id="adsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/imgs/km-trung-thanh.jpg" style="width: 100%" class="img-responsive img-ads" alt="">
            </div>
        </div>
    </div>
</div>

<style type="text/css">
#adsModal .modal-content {
    box-shadow: none !important;
    background: none;
    border: 0px;
}
</style>

<?php } ?>
<?php include $_B['temp']->load('common/position_bottom') ?>