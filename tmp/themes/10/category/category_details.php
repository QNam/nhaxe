<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/10//category/category_details.php
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
<h3><?=$data['content']['categoryDetail']['title']?></h3>
<div class="news-date">
<div class="left"><i class="fa fa-clock-o"></i> <?php echo lang('post_date');?>: <?=$data['content']['categoryDetail']['create_time']?></div>
</div>
</div>
<div class="news-content">
<?=$data['content']['categoryDetail']['details']?>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $(".news-title").offset().top
        },1000);
    });
</script>