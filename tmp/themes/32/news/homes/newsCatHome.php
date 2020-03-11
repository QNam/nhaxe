<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/32/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $key => $value) { ?>
<?php $content_news = $value['content_news'] ?>
<div class="bg-d-new-home" style="">
    <div class="wrapper">
        <div class="div_title" style="text-align: center;">
                <h2><span class="hot" style="padding-right:0px;"><?=$value['title']?></span></h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="box-news-home">
                    <div class="box-news-list">
                        
                        <div class="body-news clearfix">
                            <div class="row">
                                <?php if(is_array($content_news)) { foreach($content_news as $k => $v) { ?>
                                <div class="item-list d-33 col-md-6"><a style="height: 200px" href="<?=$v['link']?>" title="<?=$v['title']?>"><img <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt="Táo Quân chính thức 2018" title="<?=$v['title']?>"></a><a href="<?=$v['link']?>" title="<?=$v['title']?>" style="height: 45px; text-align: center;"><?=$v['title']?></a>
                                    <div class="view-container" style="display: block; padding: 0px 15px; text-align: center;">
                                        <?=$v['short']?>
                                    </div>
                                </div>
                                <?php } } ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="http://xeanvui.nhaxe.vn/themes//32/statics/images/banner-slide.png" style="margin-top: 13px;">
            </div>
        </div>
    </div>
</div>
<?php } } ?>
<style type="text/css">
.div_title span {
    display: inline-block;
    position: relative;
    padding-right: 70px;
    font-family: roboto;
    font-weight: 700;
    margin-top: 15px;
    color: #0e274f;
    font-size: 30px;
}
</style>
