<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/31/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title-top-main">
                <h3>Tin Tức Du Lịch</h3>
                <a href="/news.html"> >>> Xem tất cả</a>
            </div>
            <div class="full-cd">
                <div class="content-newdz">
                    <?php $i = 0 ?>
                    <?php if(is_array($data['content']['home_news_hot'])) { foreach($data['content']['home_news_hot'] as $key => $v) { ?>
                    <?php if($i < 16) { ?>
                    <div class="item-news-d col-md-3">
                        <div class="item-image">
                            <a href="<?=$v['link']?>">
                                <img <?php  echo loadImage($v['img'],'none','316','209',true); ?>>
                            </a>
                        </div>
                        <h4><?=$v['title']?></h4>
                    </div>
                    <?php } ?>
                    <?php $i++ ?>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 
<script type="text/javascript">
    $(".content-newdz").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3]

    });
    $(".content-feedback").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1]

    });
</script> -->

<div class="clearfix"></div>

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

