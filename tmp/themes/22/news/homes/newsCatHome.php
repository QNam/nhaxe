<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="clearfix"></div>
<?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $key => $value) { ?>
<?php $content_news = $value['content_news'] ?>
<section class="news">
    <div class="my-container">
        <div class="title-block">
            <h1>Du lịch Đà Lạt</h1>
        </div>
        <div>
        <ul class="news-container">
        
        <!-- chỉ cho 3 tin mới nhất hiển thị trên trang chủ thôi nhé! -->       
            <?php $i = 0 ?>
            <?php if(is_array($content_news)) { foreach($content_news as $k => $v) { ?>
            <?php if($i < 3) { ?>
            
            <li class="item">
                <a href="<?=$v['link']?>">
                    <div class="img-container">
                        <img <?php  echo loadImage($v['img'],'none','570','290',true); ?>>
                    </div>
                    <h3><?=$v['title']?></h3>
                </a>
                <p><?=$v['short']?></p>               
            </li>
            <?php } ?>
            <?php $i++ ?>
            <?php } } ?>
            
            
        </ul>
        </div>
    </div>
</section>
<?php } } ?>
