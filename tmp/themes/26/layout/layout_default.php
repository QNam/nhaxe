<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/26//layout/layout_default.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<?php include $_B['temp']->load('common/position_top') ?>

<!--Slide-->

    <?php $_B['temp']->printpos("5"); ?>

<!--End Slide-->
<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
<!--End Load content-->


<?php if($web['anvui_id'] == 'TC09m1ql0HQCiixG') { ?>
<div class="modal fade" id="adsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/images/bao-tri-he-thong.jpg" style="width: 100%" class="img-responsive img-ads" alt="">
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
<script type="text/javascript">
$('#adsModal').modal('show');
</script>
<?php } ?>
<?php include $_B['temp']->load('common/position_bottom') ?>