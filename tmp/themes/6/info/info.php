<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//info/info.php
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
<div class="f-ctn-center introducedetail">
    <div class="f-module-page">
        <div class="f-module-page-title" style="display:none"> 
            <h1><span><?php echo lang('title_info');?></span></h1>
        </div>
        <div class="f-module-page-body padding-10">
            <div class="clearfix"></div>
            <div class="f-page-tab">
                <div class="tab-content margin-top-10">
                    <div id="f-pr-tab01" class="tab-pane active">
                        <?php include $_B['temp']->load('info/info_page_info_list') ?>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
