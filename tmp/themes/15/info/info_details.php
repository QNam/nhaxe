<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/15//info/info_details.php
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
<div class="news-title">
<h3><?=$data['content']['infoDetail']['title']?></h3>
<div class="news-date">
<div class="left"><i class="fa fa-clock-o"></i> <?php echo lang('date_posted');?> : <?=$data['content']['infoDetail']['create_time']?></div>
</div>
</div>
<div class="news-content">
<?=$data['content']['infoDetail']['details']?>
</div>
<div class="clearfix"></div>
</div>
</div>