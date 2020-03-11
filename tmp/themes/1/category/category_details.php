<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//category/category_details.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="breadcrumbs">
<ul style="list-style:none">
<?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
<?php if($v['separator']==true) { ?>
<li style="float:left;font-size:11px;color:#ccc"><a href="" style="font-size:11px;color:#333;padding-left:5px;padding-right:5px;"> » </a></li>
<?php } ?>
<li style="float:left"><a href="<?=$v['href']?>"><?=$v['text']?></a></li>
<?php } } ?>
</ul>
</div>

<div class="clearfix"></div>

<div class="f-ctn-center">
<div class="f-module-page">
<div class="f-module-page-title"> <i></i><span><?=$data['content']['categoryDetail']['title']?></span> </div>
<div class="f-module-page-body padding-10">
<div class="clearfix"></div>
<div class="f-news-view-page">
<div class="f-news-view-title">
<div class="f-news-date"><?php echo lang('post_date');?>: <?=$data['content']['categoryDetail']['create_time']?> </div>
</div>
</div>
<div class="f-news-view-detail">
<?=$data['content']['categoryDetail']['details']?>
</div>
<div class="f-news-view-tags">
<span><?php echo lang('tags');?>:
<?php if(is_array($data['content']['categoryDetail']['tags'])) { foreach($data['content']['categoryDetail']['tags'] as $k => $v) { ?>
<a href="<?=$k?>"><?=$v?></a>,
<?php } } ?>
</span>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>