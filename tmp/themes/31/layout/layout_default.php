<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/31//layout/layout_default.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php include $_B['temp']->load('common/position_top') ?>

<!--Slide-->
<div class="toppage">
<?php $_B['temp']->printpos("5"); ?>
</div>
<!--End Slide-->
<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
<div class="bottompage">

<?php if($web['anvui_id'] == 'TC1OHntfnujP') { ?>
<?php $_B['temp']->printpos("5"); ?>
<?php } ?>
</div>
<!--End Load content-->
<?php if($web['anvui_id'] == 'TC1OHntfnujP') { ?>
<div class="modal fade" id="adsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/imgs/popup2.jpg" style="width: 100%" class="img-responsive img-ads" alt="">
            </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="modal fade" id="adsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body" id="ads-body-d">
                
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    getAds();
    function getAds() {
    var dnow = new Date();
    var d = dnow.getTime();
    var ddata = [];
    var companyId = $("base").attr("id");
    $.ajax({
        type: 'POST',
        url: 'https://ticket-new-dot-dobody-anvui.appspot.com/popup/get-list',
        dataType: "json",
        async:true,
        data: JSON.stringify({companyId: companyId,date:d}),
        success: function (data) {
            if(data.results.popUps[0].link !=''){
                $('#adsModal').modal('show');
                html = '<img src="'+data.results.popUps[0].link+'" style="width: 100%" class="img-responsive img-ads" alt="">'
            $("#ads-body-d").append(html);
            }
            

        }
    });
    return ddata;
    }
</script>

<script type="text/javascript">
$(".toppage .dt-slidew").empty();
$(".bottompage .show-top").empty();
</script>
<?php include $_B['temp']->load('common/position_bottom') ?>
