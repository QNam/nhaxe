<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/18/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><section class="bg-secondary-rgba-2 center991">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 bg-info bg-info-side well3">
                <h3 class="white">
                    Bạn Muốn Đi Đâu
                </h3>

                <p class="white txt2 ">
                    
                </p>

                <p class="white ins-right">
                    Hình ảnh, bài viết chia sẽ các điểm du lịch nổi tiếng cùng những kinh nghiệm dành cho các bạn đam mê du lịch.
                    <br>
                    <br>
                    
                    <br>
                    <br>
                    Tư vấn các tour du lịch, khám phá cảnh đẹp, những món ngon cực hấp dẫn
                </p>
            </div>
            <?php $i = 0 ?>
            <?php if(is_array($data['home_travel'])) { foreach($data['home_travel'] as $key => $value) { ?>
            <?php if($i < 2) { ?>
            <div class="col-md-4 col-sm-6 col-xs-12 inset-md-1">
                <h4>
                    <?=$value['title']?>
                </h4>

                <div class="thumbnail thumbnail4">
                    <img <?php  echo loadImage($value['img'],'none','570','290',true); ?>alt="">

                    <div class="caption">
                        <p class="txt-darker">
                            <?php echo cutString($value['short'],0,85); ?>
                        </p>
                        <a href="<?=$value['link']?>" class="btn btn-info">Chi tiết <span class="icon icon-md fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>   
            <?php } ?>
            <?php $i++ ?>         
            <?php } } ?>
            
        </div>
    </div>
</section>

<section class="well well2 well2_ins2">
    <div class="container">
        <hr class="hr2">
        <h3 class="txt-sec">
            Tin Tức
        </h3>

        <div class="row offset-2">
            <?php $i=0 ?>
            <?php if(is_array($data['content']['home_cat']['0']['content_news'])) { foreach($data['content']['home_cat']['0']['content_news'] as $k => $v) { ?>
            <?php if($i < 3) { ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <article class="news-1">
                    <img <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt="">
                    <time datetime="2015-01-01"><?=$v['create_day']?>, <?=$v['create_md']?></time>
                     <h4>
                        <a href="<?=$v['link']?>">
                            <?php echo cutString($v['title'],0,25); ?>
                        </a>
                    </h4> 
                    <p class="border txt1">
                        <?php echo cutString($v['short'],0,85); ?>
                    </p>
                    <a href="<?=$v['link']?>" class="btn-link">Chi tiết<span class="icon icon-md fa-long-arrow-right"></span></a>
                </article>
            </div>
            <?php } ?>
            <?php $i++ ?>
            <?php } } ?>
            <div class="bt-ct" style="text-align: center; margin-top: 25px; text-align: center;
    margin-top: 55px;
    float: left;
    width: 100%;">
                <a href="/news.html" class="btn btn-info">Xem thêm <span class="icon icon-md fa-long-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>

