<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/28//news/news_not_found.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="clearfix"></div>

<div class="breadcrumbs">
    <ul style="list-style:none">
        <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
        <?php if($v['separator']==true) { ?>
            <li style="float:left;font-size:11px;color:#ccc"><a href="" style="font-size:11px;color:#333;padding-left:5px;padding-right:5px;"> » </a></li>
        <?php } ?>
        <li style="float:left"><a href="<?=$v['href']?>"><?=$v['text']?></a></li>
        <?php } } ?>
    </ul>
</div>
<div class="f-ctn-center">
    
    <div class="f-module-page">
        <?php include $_B['temp']->load('news/news_category') ?>
        <div class="f-module-page-title"> 
            <h1><i><img src="<?php if(isset($data['content']['icon'])) { ?> <?=$data['content']['icon']?> <?php } ?>" /></i>
            	<span><?php if(isset($data['content']['title']) ) { ?> <?=$data['content']['title']?> <?php } ?></span></h1>
        </div>
        <div class="f-module-page-desc row" <?php if(isset($data['content']['bg']) ) { ?> style="background-image:url(<?=$data['content']['bg']?>)" <?php } ?>>
            <div class="col-md-3 img">
                     <img class="img-thumbnail img-responsive" src=" <?php if(isset($data['content']['img']) ) { ?><?=$data['content']['img']?><?php } ?>">
            </div>
            <div class="col-md-9">
                <p><?php if(isset($data['content']['description'])) { ?> <?=$data['content']['description']?> <?php } ?>
            </div>
        </div>
    </div>
</div>