<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/32//news/news_details.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container bg-3">
    <div class="news-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
                <li class="breadcrumb-item"><a href="<?=$v['href']?>"><?=$v['text']?></a> <i class="fa fa-caret-right"></i></li>
                <?php } } ?>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="news-title">
                <h1 style="font-size: 24px; font-weight: bold;"><?=$data['content']['newsDetail']['title']?></h1>
                <div class="news-date">
                    <div class="left"><i class="fa fa-clock-o"></i> <?php echo lang('date_posted');?> : <?=$data['content']['newsDetail']['create_time']?></div>
                </div>
            </div>
            <div class="news-content">
                <?=$data['content']['newsDetail']['details']?>
                <div class="button-facebook">

                </div>
            </div>
        </div>
    </div>
    <?php if(is_array($data['content']['newsDetail']['tags'])) { foreach($data['content']['newsDetail']['tags'] as $k => $v) { ?>
        <a href="<?=$v['href']?>"><?=$v['title']?></a>
    <?php } } ?>
    <div class="clearfix"></div>
    <div class="">
        <!--Tin tuc cung danh muc-->
        <?php if(isset($data['content']['newsOther']['news'])) { ?>
        <div id="cate-news">
            <h3 class="box-news-title clearfix"><?php echo lang('related_news');?></h3>
            <div class="box-news clearfix">
                <div class="carousel" id="carouselInformation">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <ul class="thumbnails clearfix">
                                    <?php if(is_array($data['content']['newsOther']['news'])) { foreach($data['content']['newsOther']['news'] as $k => $v) { ?>
                                    <li class="col-sm-3">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                <a href="<?=$v['href']?>">
                                                    <img alt="<?=$v['title']?>"
                                                         <?php  echo loadImage($v['img'],'crop','570','290',true); ?>>
                                                </a>
                                            </div>

                                            <div class="caption">
                                                <a href="<?=$v['href']?>">
                                                    <h4><?=$v['title']?></h4>
                                                </a>

                                                <p><?php echo cutString($v['short'],0,100); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <?php } ?>
        <!--Ket thuc Tin tuc cung danh muc-->
        <div class="clearfix"></div>
        <!--Tin tuc lien quan-->
        <?php if(isset($data['content']['newsRelated']['newsr'])) { ?>
        <div id="recent-news">
            <h3 class="box-news-title clearfix"><?php echo lang('related_news');?></h3>
            <div class="box-news clearfix">
                <div class="carousel slide" id="carouselInformation2">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <ul class="thumbnails clearfix">
                                    <?php if(is_array($data['content']['newsRelated']['news'])) { foreach($data['content']['newsRelated']['news'] as $k => $v) { ?>
                                    <li class="col-sm-3">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                <a href="<?=$v['href']?>">
                                                    <img alt="<?=$v['title']?>"
                                                         src="<?=$v['img']?>">
                                                </a>
                                            </div>

                                            <div class="caption">
                                                <a href="<?=$v['href']?>">
                                                    <h4><?=$v['title']?></h4>
                                                </a>

                                                <p><?php echo cutString($v['short'],0,100); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <?php } ?>
        <!--Ket thuc Tin tuc lien quan-->
    </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $(".news-title").offset().top
        },1000);
    });
</script>
