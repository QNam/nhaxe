<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/26//news.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="clearfix"></div>
<div class="productbreadcrumb">
    <ol class="breadcrumb">
       <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>        
       <li ><a href="<?=$v['href']?>"><?=$v['text']?></a></li>
       <?php } } ?>
   </ol>
</div>
<div class="clearfix"></div>
<div clas="f-ctn-center">
    <div class="f-module-page">
        <?php include $_B['temp']->load('news/news_category') ?>
        <div class="f-module-page-title">
            <h1><i><img src="<?php if(isset($data['content']['icon'])) { ?> <?=$data['content']['icon']?> <?php } ?>" /></i>
                <span><?php if(isset($data['content']['title']) ) { ?> <?=$data['content']['title']?> <?php } ?></span></h1>
            </div>

            <div class="f-module-page-desc " <?php if(isset($data['content']['bg']) ) { ?> style="background-image:url(<?=$data['content']['bg']?>)" <?php } ?>>
               <div class="row">
                <div class="col-md-3 img">
                    <img class="img-thumbnail img-responsive" src=" <?php if(isset($data['content']['img']) ) { ?><?=$data['content']['img']?><?php } ?>">
                </div>
                <div class="col-md-9">
                    <p><?php if(isset($data['content']['description'])) { ?> <?=$data['content']['description']?> <?php } ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="f-module-page-body padding-10">
                <div class="clearfix"></div>
                <hr/>
                <div class="row">
                    <form id="news_filter" method="POST" action="<?=$data['content']['curUrl']?>" enctype="multipart/form-data">
                        <div class="col-md-3">

                            <select name="type_filter" class="form-control type_filter">
                                <option value = "news_latsted" <?php if(isset($data['content']['filter_type']) && ($data['content']['filter_type'] == 'news_latsted')) { ?> selected <?php } ?>> <?php echo lang('news_new_1');?></option>
                                <option value = "news_vip" <?php if(isset($data['content']['filter_type']) && $data['content']['filter_type'] == 'news_vip') { ?> selected <?php } ?> > <?php echo lang('news_hot_1');?></option>
                                <option value = "news_az" <?php if(isset($data['content']['filter_type']) && $data['content']['filter_type'] == 'news_az') { ?> selected <?php } ?> > <?php echo lang('news_az');?></option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="<?php if(isset($data['content']['filter_title'])) { ?> <?=$data['content']['filter_title']?> <?php } ?>" name="name_filter" placeholder="<?php echo lang('title_news');?>..." class="form-control form-filter"/>
                        </div>
                        <div class="col-md-3">
                            <select name="limit_filter" class="form-control limit_filter">
                                <option value = "10"><?php echo lang('number_records');?></option>
                                <option value = "10" <?php if(isset($data['content']['filter_limit']) && ($data['content']['filter_limit'] == '10')) { ?> selected <?php } ?> >10</option>
                                <option value = "15" <?php if(isset($data['content']['filter_limit']) && ($data['content']['filter_limit'] == '15')) { ?> selected <?php } ?> >15</option>
                                <option value = "20" <?php if(isset($data['content']['filter_limit']) && ($data['content']['filter_limit'] == '20')) { ?> selected <?php } ?> >20</option>
                                <option value = "25" <?php if(isset($data['content']['filter_limit']) && ($data['content']['filter_limit'] == '25')) { ?> selected <?php } ?> >25</option>
                                <option value = "50" <?php if(isset($data['content']['filter_limit']) && ($data['content']['filter_limit'] == '50')) { ?> selected <?php } ?> >50</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <a href="javascript:void(0);" class="btn btn-success" id="submitSearch"><?php echo lang('search');?></a>
                        </div>
                    </div>
                </form>
                <hr/>
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