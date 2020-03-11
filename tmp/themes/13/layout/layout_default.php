<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/13//layout/layout_default.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php include $_B['temp']->load('common/position_top') ?>

<!--Slide-->

    <?php $_B['temp']->printpos("5"); ?>

<!--End Slide-->
<!--Load content-->
<?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
<!--End Load content-->


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
<?php include $_B['temp']->load('common/position_bottom') ?>