<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/10/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(!empty($data['content']['home_cat'])) { ?>
<div class="row" style="display: none;">
<div class="col-md-8" style="margin-bottom: 30px;" >
<div class="title">
<h3><?=$data['content']['home_cat']['0']['title']?></h3>
</div>
<div class="owl-carousel owl-theme bus-list">
<?php if(is_array($data['content']['home_cat']['0']['content_news'])) { foreach($data['content']['home_cat']['0']['content_news'] as $k => $v) { ?>
<div class="item-bus">
<a href="<?=$v['link']?>">
<img <?php  echo loadImage($v['img'],'resize','570','290',true); ?>class="img-responsive" style="height: 130px" alt="<?=$v['title']?>">
<h5><?=$v['title']?></h5>
</a>
</div>
<?php } } ?>
</div>
</div>
<div class="col-md-4" style="margin-bottom: 30px;">
<div class="title">
<h3><?=$data['content']['home_cat']['1']['title']?></h3>
</div>
<div class="travel">
<?php if(is_array($data['content']['home_cat']['1']['content_news'])) { foreach($data['content']['home_cat']['1']['content_news'] as $k => $v) { ?>
<div class="row item" style="margin-top: 10px;">
<a href="<?=$v['link']?>">
<div class="col-md-5">
<img <?php  echo loadImage($v['img'],'crop','570','290',true); ?>class="img-responsive" alt="<?=$v['title']?>">
</div>
<div class="col-md-7">
<p><?=$v['title']?></p>
</div>
</a>
</div>
<?php } } ?>
</div>
</div>
</div>
<style>
.travel {
overflow-y: auto;
overflow-x: hidden;
height: 250px;
}
</style>
<?php } ?>


