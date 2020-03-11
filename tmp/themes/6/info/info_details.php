<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//info/info_details.php
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

<div class="f-ctn-center">
<div class="f-module-page">
<div class="f-module-page-title"> <i></i><h1><span><?=$data['content']['infoDetail']['title']?></span></h1> </div>
<div class="f-module-page-body padding-10">
<div class="clearfix"></div>
<div class="f-news-view-page">
<div class="f-news-view-title">
<div class="f-news-date"> <?php echo lang('date_posted');?> : <?=$data['content']['infoDetail']['create_time']?> </div>
</div>
</div>
<div class="f-news-view-detail">
<?=$data['content']['infoDetail']['details']?>
</div> 
</div>
<div class="clearfix"></div>
</div>
</div>