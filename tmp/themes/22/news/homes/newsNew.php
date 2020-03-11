<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container" style="display: none;">
        <div class="clearfix"></div>
            <h2 class="title-news-home"><a href="/tin-tuc" title="Tin tức">Tin tức</a></h2>
            <div class="h-news">
                <div class="box">
                    <div class="col-mar-12 row-ibl">
                        <div class="row">
                            <div class="col-md-6">
                                <?php $i=0 ?>
                                <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
                                <?php if($i < 1) { ?>
                                <div class="big-post">
                                    <div class="img-hv v2">
                                        <a href="<?=$v['link']?>"><img width="800" height="533" <?php  echo loadImage($v['img'],'none','570','290',true); ?>class="attachment-full size-full wp-post-image img-responsive" alt="" ></a>
                                    </div>
                                    <h3 class="from_the_blog_title title"><a href="<?=$v['link']?>"><?=$v['title']?></a></h3>
                                    <p class="from_the_blog_excerpt small-font show-next"><?php echo cutString($v['short'],0,80); ?> </p>
                                </div>
                                <?php } ?>
                                <?php $i++ ?>
                                <?php } } ?>
                            </div>
                            <div class="col-md-6">
                                <div class="col-mar-8">
                                    <?php $i=0 ?>
                                    <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
                                    <?php if($i > 0 and $i < 5) { ?>
                                    <div class="item-blog row">
                                        <div class="h-post-d">
                                            <div class="imgdbox col-md-4">
                                                <a href="<?=$v['link']?>"><img <?php  echo loadImage($v['img'],'none','570','290',true); ?>class="img-responsive" alt="" ></a>
                                            </div>
                                            <div class="ct-d col-md-8">
                                                <h3 class="from_the_blog_title_d title"><a href="<?=$v['link']?>"><?=$v['title']?></a></h3>
                                                <p class="from_the_blog_excerpt small-font show-next"><?php echo cutString($v['short'],0,80); ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php $i++ ?>
                                    <?php } } ?>
                                </div>
                            </div>
                        </div>
                    </div>
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