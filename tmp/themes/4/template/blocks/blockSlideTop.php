<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/4/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><!--Begin slide-->
<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
    &lt;!&ndash; Indicators &ndash;&gt;
    <ol class="carousel-indicators">
        &lt;!&ndash;<?php if(is_array($data)) { foreach($data as $k => $v) { ?>&ndash;&gt;
            &lt;!&ndash;<?php if(!empty($v['image_slide'])) { ?>&ndash;&gt;
                &lt;!&ndash;<?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>&ndash;&gt;
                    <li data-target="#myCarousel" data-slide-to="<?=$k2?>" class="&lt;!&ndash;<?php if($k2==0) { ?>&ndash;&gt; active &lt;!&ndash;<?php } ?>&ndash;&gt;"></li>
                &lt;!&ndash;<?php } } ?>&ndash;&gt;
            &lt;!&ndash;<?php } ?>&ndash;&gt;
        &lt;!&ndash;<?php } } ?>&ndash;&gt;
    </ol>

    &lt;!&ndash; Wrapper for slides &ndash;&gt;
    <div class="carousel-inner">
        &lt;!&ndash;<?php if(is_array($data)) { foreach($data as $k => $v) { ?>&ndash;&gt;
            &lt;!&ndash;<?php if(!empty($v['image_slide'])) { ?>&ndash;&gt;
                &lt;!&ndash;<?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>&ndash;&gt;
                    <div class="item item &lt;!&ndash;<?php if($k2==0) { ?>&ndash;&gt; active &lt;!&ndash;<?php } ?>&ndash;&gt;">
                        <img src="&lt;!&ndash;{loadImage <?=$v2['src_link']?> none 1170 500}&ndash;&gt;" style="width: 100%" class="img-responsive" alt="<?=$v2['title']?>">
                    </div>
                &lt;!&ndash;<?php } } ?>&ndash;&gt;
            &lt;!&ndash;<?php } ?>&ndash;&gt;
        &lt;!&ndash;<?php } } ?>&ndash;&gt;
    </div>

    &lt;!&ndash; Left and right controls &ndash;&gt;
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>-->
<style>
    .view {
        background-position: center center;
        background-repeat: no-repeat;
        height: 470px;
        text-align: center;
    }

    .full-bg-img {
        padding: 10% 0;
    }
</style>

<div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/embed/r8-NLYoQnpg?rel=0&controls=0&showinfo=0">
    <div class="full-bg-img">
        <div class="container flex-center">
            <div class="row">
                <div class="col-md-12 wow fadeIn">

                </div>
            </div>
        </div>
    </div>
</div>
<!--End slide-->
