<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/25//news/news_category.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="f-cate  ">
    <ul class="f-cate-ul no-margin no-padding">
        <?php if(isset($data['content']['listCategory'])) { ?>
            <?php if(is_array($data['content']['listCategory'])) { foreach($data['content']['listCategory'] as $k => $v) { ?>
            <li class="col-md-3 col-lg-3 col-sm-4 col-xs-6" style="margin-bottom:5px">
                <h2><a href="<?=$v['href']?>" title="<?=$v['title']?>"><span><?=$v['title']?></span></a></h2></li>
            <?php } } ?>
        <?php } ?>
    </ul>
    <div class="clearfix"></div>
</div>
