<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/15/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="slide-3">
<?php if(!empty($data['content']['home_cat'])) { ?>
<div class="container" style="margin-bottom: 30px;">
<div class="title">
<h3><?=$data['content']['home_cat']['0']['title']?></h3>
</div>
<div class="row">
<?php if(is_array($data['content']['home_cat']['0']['content_news'])) { foreach($data['content']['home_cat']['0']['content_news'] as $k => $v) { ?>
<div class="item-bus col-md-4">
<a href="<?=$v['link']?>">
<img <?php  echo loadImage($v['img'],'none','570','290',true); ?>class="img-responsive" alt="<?=$v['title']?>">
<h5><?php echo cutString($v['title'],0,40); ?></h5>
</a>
</div>

<?php } } ?>
</div>

</div>
<?php } ?>

</div>



