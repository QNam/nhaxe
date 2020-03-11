<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/21/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container">
    <div class="row">
        <div class="col-md-12">
<?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $key => $value) { ?>
<?php $content_news = $value['content_news'] ?>

<div class="box-news-home">
    <div class="box-news-list">
        <div class="header"><a href="/tin-tuc-su-kien-1189.html">Tin tức &amp; Sự kiện</a></div>
        <div class="body-news clearfix">
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
            
        </div>
    </div>
</div>

<?php } } ?>
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

