<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/13//category/category.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<div class="clearfix"></div>
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
<div class="clearfix"></div>
<div class="f-ctn-center">
    <div class="f-module-page">
        <div class="f-module-page-title"> 
            <h1><span><?php echo lang('title_category');?></span></h1>
        </div>
        <div class="f-module-page-body padding-10">
            <div class="clearfix"></div>
                <div class="f-page-tab">
                    <div class="tab-content margin-top-10">
                        <div id="f-pr-tab01" class="tab-pane active">
                            <?php include $_B['temp']->load('category/category_page_category_list') ?>
                            <div class="clearfix"></div>
                            <?php include $_B['temp']->load('category/category_pagination') ?>
                        </div>                        
                    </div>
                </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--/VIDEO -->
</div>
