<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/32//news_details.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><link rel="stylesheet" type="text/css" href="<?=$web['static_temp_mod']?>/resource/css/style.css"/>
<div class="productbreadcrumb">
<ol class="breadcrumb">
<?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
<li ><a href="<?=$v['href']?>"><?=$v['text']?></a></li>
<?php } } ?>		
</ol>
</div>
<div class="clearfix"></div>
<div class="f-ctn-center">
<div class="f-module-page">
<div class="f-module-page-title"> <i></i><span><?php if(isset($data['content']['title']) ) { ?> <?=$data['content']['title']?> <?php } ?></span> </div>
<div class="f-module-page-body padding-10">
<div class="clearfix"></div>
<div class="f-news-view-page">
<div class="f-news-view-title">
<h1><?=$data['content']['newsDetail']['title']?></h1>
<div class="f-news-date">
<?php echo lang('date_posted');?> : <?=$data['content']['newsDetail']['create_time']?> 
</div>
</div>
</div>
<div class="f-news-view-detail">
<?=$data['content']['newsDetail']['details']?>
</div>
<div class="f-news-view-tags">
<span>Tags: 
<?php if(is_array($data['content']['newsDetail']['meta_keyword'])) { foreach($data['content']['newsDetail']['meta_keyword'] as $k => $v) { ?>
<a href="<?=$k?>"><?=$v?></a>,
<?php } } ?>
</span>
</div>
<div class="clearfix"></div>
<!--Tin tức cùng danh mục-->
<?php if(isset($data['content']['newsOther']['news'])) { ?>
<div class="f-page-split-title"><?php echo lang('news_cat');?></div>
<div class="f-page-split">
<ul>
<?php if(is_array($data['content']['newsOther']['news'])) { foreach($data['content']['newsOther']['news'] as $k => $v) { ?>
<li>
<h3>
<a href="<?=$v['href']?>">
<?php if(isset($v['thumb'])) { ?>
<img src="<?=$v['thumb']?>" alt="<?=$v['title']?>" title="<?=$v['title']?>" /> 
<?php } ?>
<?=$v['title']?> 
</a>
</h3>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>
<!--Kết thúc Tin tức cùng danh mục-->
<div class="clearfix"></div>
<!--Tin tức liên quan tự chọn-->
<?php if(isset($data['content']['newsRelated']['newsr'])) { ?>
<div class="f-page-split-title"><?php echo lang('related_news');?></div>
<div class="f-page-split">
<ul>
<?php if(is_array($data['content']['newsRelated']['newsr'])) { foreach($data['content']['newsRelated']['newsr'] as $k => $v) { ?>
<li>
<h3>
<a href="<?=$v['href']?>">
<?php if(isset($v['thumb'])) { ?><img src="<?=$v['thumb']?>" alt="<?=$v['title']?>" title="<?=$v['title']?>" /><?php } ?> 
<?=$v['title']?> 
</a>
</h3>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>
<!--Kết thúc tin liên quan tự chọn-->
<div class="f-product-view-comment row ">
<div class="f-product-comment-tab-header">
<ul id="f-pr-page-view-tabcomentid" class="no-margin no-padding nav-tabs">
<li class="active"><a href="#f-pr-cm-view-01" data-toggle="tab"><?php echo lang('comment_facebook');?></a></li>
<li ><a href="#f-pr-cm-view-02" data-toggle="tab"><?php echo lang('comment_google');?></a></li>
</ul>
</div>
<div class="clearfix"></div>
<div class="f-product-comment-tab-body tab-content">
<div id="f-pr-cm-view-01" class="tab-pane fade in active padding-10">
<div class="autosize1-container">
<div class="fb-comments" data-href="http://www.haivl.com/photo/1667441" data-numposts="5" data-colorscheme="light"></div>
</div>
</div>
<div id="f-pr-cm-view-02" class="tab-pane fade padding-10">
<div class="autosize-container">
<g:comments href="http://omegakd.blogspot.com/2013/09/huong-dan-them-comment-cua-google-plus.html" width="600" first_party_property="BLOGGER" view_type="FILTERED_POSTMOD"> </g:comments>
</div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>

