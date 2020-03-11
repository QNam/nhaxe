<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//news/news.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="clearfix"></div>
<div class="productbreadcrumb">
    <ol class="breadcrumb">
       <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>        
       <li ><a href="<?=$v['href']?>"><?=$v['text']?></a> <i class="fa fa-caret-right"></i></li>
       <?php } } ?>
   </ol>
</div>
<div class="clearfix"></div>
<div clas="f-ctn-center">
    <div class="f-module-page"> 
    
     <div class="f-module-page-title">
            <h1><i><img src="<?php if(isset($data['content']['icon'])) { ?> <?=$data['content']['icon']?> <?php } ?>" /></i>
                <span><?php if(isset($data['content']['title']) ) { ?> <?=$data['content']['title']?> <?php } ?></span></h1>
            </div>

            
            <div class="clearfix"></div>
            <div class="f-module-page-body">    
                <div class="clearfix"></div>
                <div class="f-page-tab">
                <!-- <ul class="nav-tabs">
                    <li class="active"><a href="#f-pr-tab01" data-toggle="tab">Mới</a>
                    </li>
                    <li><a href="#f-pr-tab02" data-toggle="tab">Nổi bật</a>
                    </li>
                    <li><a href="#f-pr-tab03" data-toggle="tab">A-Z</a>
                    </li>
                </ul> -->
                <div class="clearfix"></div>
                <div class="tab-content margin-top-10">
                    <div id="f-pr-tab01" class="tab-pane active">

                        <?php include $_B['temp']->load('news/news_page_news_list') ?>                        
                    </div>
                    
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<script src="<?=$web['static_temp_mod']?>/resource/js/news.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    News.init();
});
</script>