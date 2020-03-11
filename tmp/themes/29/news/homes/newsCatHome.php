<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/29/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $key => $value) { ?>
<?php $content_news = $value['content_news'] ?>
<div class="bg-d-new-home" style="background: whitesmoke">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box-news-home">
                    <div class="box-news-list">
                        <div class="header"><a href="/tin-tuc-su-kien-1189.html"><?=$value['title']?></a></div>
                        <div class="body-news clearfix">
                            <?php if($value['title'] == 'Dịch Vụ') { ?>
                            <?php $i = 0 ?>
                            <?php if(is_array($content_news)) { foreach($content_news as $k => $v) { ?>
                            <div class="item-list d-33 clearfix"><a style="height: 200px" href="<?=$v['link']?>" title="<?=$v['title']?>"><img <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt="Táo Quân chính thức 2018" title="<?=$v['title']?>"></a><a href="<?=$v['link']?>" title="<?=$v['title']?>" style="height: 45px; text-align: center;"><?=$v['title']?></a>
                                <div class="view-container" style="display: block; padding: 0px 15px; text-align: center;">
                                    <?=$v['short']?>
                                </div>
                            </div>
                            <?php $i++ ?>
                            <?php } } ?>
                            <?php } else { ?>
                            <?php $i = 0 ?>
                            <?php if(is_array($content_news)) { foreach($content_news as $k => $v) { ?>
                            <div class="item-list clearfix"><a href="<?=$v['link']?>" title="<?=$v['title']?>"><img <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt="Táo Quân chính thức 2018" title="<?=$v['title']?>"></a><a href="<?=$v['link']?>" title="<?=$v['title']?>"><?=$v['title']?></a>
                                <div class="view-container">

                                    <p><strong><?=$v['short']?></strong></p>
                                    <p>&nbsp;</p>
                                </div>
                                <div class="news-more"><a href="<?=$v['link']?>">Xem tiếp</a></div>
                            </div>
                            <?php $i++ ?>
                            <?php } } ?>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } } ?>

<style type="text/css">
    .d-33 {
        width: calc(33.333% - 22px) !important;
    }
</style>
<div style="clear:both;"></div>
<div class="sora-works-box" id="section-3">
    <div class="container">
        <div class="works-wrap row">
            <div class="works-title">
                <h4>Giá trị cốt lõi</h4>
                <span>Mọi hoạt động của chúng tôi dựa trên 4 giá trị cốt lõi</span>
            </div>
            <div style="clear: both;"></div>
            <!-- First -->
            <div class="works-tiles">
                <span class="works-icons">
                    <li data-percent="25"><span class="text"><i aria-hidden="true" class="fa fa-lightbulb-o"></i></span><span class="bar-circle-right" style="transform: rotate(90deg);"></span><span class="bar-circle-left"></span><span class="bar-circle-cover"></span></li>
                </span>
                <h6 class="works-heading">THÂN THIỆN</h6>
                <p class="works-text">Vui vẻ, hòa đồng với khách hàng, đồng nghiệp và xem như người thân trong gia đình</p>
            </div>
            <!-- First One Ends -->
            <!-- Second -->
            <div class="works-tiles">
                <span class="works-icons">
                    <li data-percent="50"><span class="text"><i aria-hidden="true" class="fa fa-clipboard"></i></span><span class="bar-circle-right" style="transform: rotate(180deg);"></span><span class="bar-circle-left" style="clip: rect(0px 150px 150px 75px); background: rgb(176, 218, 185);"></span><span class="bar-circle-cover"></span></li>
                </span>
                <h6 class="works-heading">TRÁCH NHIỆM</h6>
                <p class="works-text">Trách nhiệm với công việc, với khách hàng, luôn giữ lời hứa với khách hàng.</p>
            </div>
            <!-- Second Ends -->
            <!-- Third -->
            <div class="works-tiles">
                <span class="works-icons">
                    <li data-percent="75"><span class="text"><i aria-hidden="true" class="fa fa-paint-brush"></i></span><span class="bar-circle-right" style="transform: rotate(270deg);"></span><span class="bar-circle-left" style="clip: rect(0px 150px 150px 75px); background: rgb(176, 218, 185);"></span><span class="bar-circle-cover"></span></li>
                </span>
                <h6 class="works-heading">TRUNG THỰC </h6>
                <p class="works-text">Trung thực với bản thân, với công ty, với đồng nghiệp và khách hàng. </p>
            </div>
            <!-- Third Ends -->
            <!-- Fourth -->
            <div class="works-tiles">
                <span class="works-icons">
                    <li data-percent="100"><span class="text"><i aria-hidden="true" class="fa fa-gift"></i></span><span class="bar-circle-right" style="transform: rotate(360deg);"></span><span class="bar-circle-left" style="clip: rect(0px 150px 150px 75px); background: rgb(176, 218, 185);"></span><span class="bar-circle-cover"></span></li>
                </span>
                <h6 class="works-heading">CHUYÊN NGHIỆP</h6>
                <p class="works-text">Luôn nâng cao trình độ, nghiệp vụ, làm việc chuyên nghiệp.</p>
            </div>
            <!-- Fourth Ends -->
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {

    $("#slide-box").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

});
</script>


