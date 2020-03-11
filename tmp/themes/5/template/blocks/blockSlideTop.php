<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/5/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><!--Begin slide-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php if(is_array($data)) { foreach($data as $k => $v) { ?>
            <?php if(!empty($v['image_slide'])) { ?>
                <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                    <li data-target="#myCarousel" data-slide-to="<?=$k2?>" class="<?php if($k2==0) { ?> active <?php } ?>"></li>
                <?php } } ?>
            <?php } ?>
        <?php } } ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php if(is_array($data)) { foreach($data as $k => $v) { ?>
            <?php if(!empty($v['image_slide'])) { ?>
                <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                    <div class="item item <?php if($k2==0) { ?> active <?php } ?>">
                        <img <?php  echo loadImage($v2['src_link'],'none','1170','500',true); ?>style="width: 100%" class="img-responsive" alt="<?=$v2['title']?>">
                    </div>
                <?php } } ?>
            <?php } ?>
        <?php } } ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--End slide-->
