<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/20//home/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<div class="wrapper">
<div id="reason-flight" class="reason" style="display: none;">
    <div class="reason-form">
        <div class="reason-item-img">
            <div class="reason-flight reason-flight_hunting"></div>
        </div>
        <h2 class="title">ĐẶT VÉ DỄ DÀNG</h2>
        <p>Đặt vé mọi lúc, mọi nơi với vài thao tác đơn giản<a data-toggle="modal" data-target="#flightPrice-modal" class="reason-show"></a></p>
    </div>
    <div class="reason-form">
        <div class="reason-item-img">
            <div class="reason-flight reason-flight_security"></div>
        </div>
        <h2 class="title">THANH TOÁN TIỆN LỢI</h2>
        <p>Cung cấp tất cả các hình thức thanh toán<br> Tiện lợi, đảm bảo an toàn.</p>
    </div>
    <div class="reason-form">
        <div class="reason-item-img">
            <div class="reason-flight reason-flight_support"></div>
        </div>
        <h2 class="title">HỖ TRỢ MIỄN PHÍ 24/7</h2>
        <p>Gọi ngay <?=$web['info']['phone']?> để được hỗ trợ.<br> Hoàn toàn<span class="orange"> không - mất - phí!</span></p>
    </div>
</div>
</div>

<?php if($web['anvui_id'] == 'TC1OHntfnujP') { ?>
<div class="av-product">
    <div class="wrapper">
        <div class="div_title">
            <?php if($web['anvui_id'] == "TC03h1IzK1jParS") { ?>
            <h2><span class="hot">Dịch Vụ Xe</span></h2>
        </div>
        <?php } else { ?>
        <h3 class="title">Các tuyến hiện có</h3>
    </div>
    <?php } ?>
    
    <div id="slider_pro">
        <div aria-live="polite" class="slick-list draggable">
            <div class="slick-track">
                <?php if(is_array($data['content']['chuyen'])) { foreach($data['content']['chuyen'] as $k => $v) { ?>
                    <div class="item-d ">
                        <div class="w-item effect_up" style="animation-duration: 0.9s;">
                            <div class="i-image">
                                <a href="<?=$v['link']?>" tabindex="0">
                                    <?php if($v['listImages']['0'] != "0" && isset($v['listImages']['0'])) { ?>

                                    <img src="" data-image="<?=$v['listImages']['1']?>" class="img-responsive" alt="<?=$v['routeName']?>" alt="<?=$v['routeName']?>" id='key-<?=$k?>' />

                                    <?php } else { ?>

                                    <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/bottom%20-%20sin.jpg" class="img-responsive" alt="<?=$v['routeName']?>" />

                                    <?php } ?>
                                </a>
                            </div>
                            <div class="i-desc">
                                <div class="w-desc" style="    text-align: center;">
                                    <div class="i-title">
                                        <h3><a href="<?=$v['link']?>" tabindex="0"><?=$v['routeName']?></a></h3>
                                    </div>
                                    <div class="i-content">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } } ?>

            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if(is_array($data['content']['chuyen'])) { foreach($data['content']['chuyen'] as $k => $v) { ?>
    <script type="text/javascript">
        var link<?=$k?> = "<?=$v['listImages']['0']?>";

        var linkImage<?=$k?> = link<?=$k?>.replace("http://", "https://");


        console.log(linkImage<?=$k?>);

        $("#key-"+<?=$k?>).attr('src', linkImage<?=$k?>)

    </script>
<?php } } ?>

<?php $_B['temp']->printhome(); ?>

<style type="text/css">
.w-item {
    padding: 0px 15px;
}
</style>