<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/28/news/homes/newsHot.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style>
    .padding-news {
        padding-left: 0;
        padding-right: 0px;
        width: 63%;
    }

    .padding-news-item {
        /*padding-left: 0;*/
        padding-right: 0;
        width: 37%;
    }

    .padding-item {
        padding-right: 10px;
        padding-left: 10px;
    }
</style>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 boxnew" style="display: none;">
    <h2><a href="/news">Tin tức và sự kiện</a></h2>
    <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
    <div class="row list-news">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="<?=$v['link']?>"><img <?php  echo loadImage($v['img'],'none','570','290',true); ?>class="img-responsive"></a>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 infonews">
            <a href="<?=$v['link']?>"><?=$v['title']?></a> 
        </div>
     </div>
     <?php } } ?>
</div>