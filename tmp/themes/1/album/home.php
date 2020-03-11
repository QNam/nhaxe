<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//album/home.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><link rel="stylesheet" href="<?=$web['static_temp_mod']?>/resources/css/album.css?rs=<?=$data['content']['restmedia']?>">
<div>
    <?php if(isset($data['content']['breadcrumbs'])) { ?>
    <div class="clearfix"></div>
    <div class="productbreadcrumb">
    <ol class="breadcrumb">
         <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>           
            <li ><a href="<?=$v['href']?>"><?=$v['text']?></a> <i class="fa fa-caret-right"></i></li>           
            <?php } } ?>      
    </ol>
    </div><!--end breakcrumb-->

    <div class="clearfix"></div>
    <?php } ?>
    <div class="">
        <div class="clearfix"></div>
        <div class="f-module-page">
           <div class="f-cate ">
                <ul class="f-cate-ul no-margin no-padding">
                    <?php if(isset($data['content']['cateList'])) { ?>
                        <?php if(is_array($data['content']['cateList'])) { foreach($data['content']['cateList'] as $k => $v) { ?>
                        <li class="col-md-3" style="margin-bottom:5px">
                        <h2>
                            <a href="<?=$v['link']?>" title="<?=$v['title']?>"><span><?php echo cutString($v['title'],0,20); ?></span></a>
                            </h2>
                        </li>
                        <?php } } ?>
                    <?php } ?>
                </ul>
                <div class="clearfix"></div>
            </div>
            <?php if(!empty($data['content']['home_title']) ) { ?>
            <div class="f-module-page-title"> 
            <h1>
                <span><?=$data['content']['home_title']?></span></h1>
            </div>
            <?php } else { ?>
            <div class="f-module-page-title">
                <i></i><span><?php echo lang('module_name');?></span>

            </div>
            <?php } ?>
            <?php if(!empty($data['content']['home_description']) ) { ?>
            <div class="f-module-page-desc" <?php if(!empty($data['content']['home_bg_image']) ) { ?>style="background-image:url(<?=$data['content']['home_bg_image']?>);display: inline-block;"<?php } ?>>
                <div class="col-md-3 col-sm-3 col-xs 12 img auto-xs">
                <img alt="album" class="img-thumbnail img-responsive" <?php  echo loadImage($data['content']['home_avatar'],'resize','170','170',true); ?>onerror="this.onerror=null;this.src='{loadImage <?=$data['content']['no_img']?> crop 170 170}'">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <p><?php if(isset($data['content']['home_description'])) { ?><?=$data['content']['home_description']?><?php } ?>
                </div>
            </div><!--end modue page-->

            <?php } ?>
            
            <div class="f-module-page-body">
                <div class="clearfix"></div>
                <hr />
            <div class="row styleformcontrol">
            <form method="get" action="">
                <div class="col-md-3">
                     
                    <select class="form-control" name="sort">
                        <option <?php if(!empty($data['content']['sort']) && $data['content']['sort'] == 'new' ) { ?>selected="selected" <?php } ?>value="new"><?php echo lang('new');?></option>
                        <option <?php if(!empty($data['content']['sort']) && $data['content']['sort'] == 'hot' ) { ?>selected="selected" <?php } ?>value="hot"><?php echo lang('hot');?></option>
                        <option <?php if(!empty($data['content']['sort']) && $data['content']['sort'] == 'az' ) { ?>selected="selected" <?php } ?>value="az"><?php echo lang('a_z');?></option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" name="q" placeholder="<?php echo lang('title');?>" class="form-control" value="<?php if(!empty($data['content']['search_string']) ) { ?><?=$data['content']['search_string']?><?php } ?>">
                </div>
                <div class="col-md-3">
                    <select class="form-control" name="limit" id="album_limit">
                        <option value="<?=$data['content']['default_limit']?>" <?php if(!empty($data['content']['search_limit']) && $data['content']['search_limit'] == $data['content']['default_limit'] ) { ?>selected="selected"<?php } ?>><?php echo lang('show_number');?></option>
                        <option value="20" <?php if(!empty($data['content']['search_limit']) && $data['content']['search_limit'] == 20 ) { ?>selected="selected"<?php } ?>>20</option>
                        <option value="30" <?php if(!empty($data['content']['search_limit']) && $data['content']['search_limit'] == 30 ) { ?>selected="selected"<?php } ?>>30</option>
                        <option value="40" <?php if(!empty($data['content']['search_limit']) && $data['content']['search_limit'] == 40 ) { ?>selected="selected"<?php } ?>>40</option>
                        <option value="50" <?php if(!empty($data['content']['search_limit']) && $data['content']['search_limit'] == 50 ) { ?>selected="selected"<?php } ?>>50</option>
                        </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success" id="submitSearch"><?php echo lang('search');?></button>
                </div>
                
            </form>
            </div>
            <hr />
            <div class="clearfix"></div>
                    <div class="tab-content margin-top-10">
                        <div id="f-pr-tab01" class="tab-pane active">
                            <?php if(isset($data['content']['albumList'])) { ?>
                            <ul class="f-album row <?=$data['content']['home_display_type']?>"><!--grid/list-->
                                <?php if(is_array($data['content']['albumList'])) { foreach($data['content']['albumList'] as $k => $v) { ?>
                                <li class=" col-md-4 col-sm-6 col-xs-6 full-xs">
        <div class="f-album-item">
                    <div class="f-album-item-img"> <a href="<?=$v['link']?>" title="<?=$v['title']?>"> <img <?php  echo loadImage($v['avatar'],'crop','236','217',true); ?>class="img-responsive" alt="<?=$v['title']?>" />
                      <div class="f-album-item-img-hover"></div>
                      </a> 

                         <div class="iconalbum">
                          
                      </div><!--end icon album-->
                  </div>

                     
                    <div class="f-album-item-title">
                      <h3><a href="<?=$v['link']?>" title="<?=$v['title']?>"> <?=$v['title']?></a></h3>
                    </div>
                  </div>
 
      </li>
                                <?php } } ?>
                            </ul>
                            <?php } else { ?>
                              <p style="padding: 10px 0"><?=$data['content']['alert']?></p>
                            <?php } ?>
                            <div class="clearfix"></div>
                            <?php include $_B['temp']->load('album/_pagination') ?>
                            
                        </div>

                    </div>
                        
                    <div class="clearfix"></div>
                </div>
                
                <!--####################################### END CENTER MODULE TAB PRODUCT HOT -->

            </div>
        </div>
        <!--/-->

    </div>
<script src="<?=$web['static_temp_mod']?>/resources/scripts/jquery.albumload.min.js?rs=<?=$data['content']['restmedia']?>"></script>
<script src="<?=$web['static_temp_mod']?>/resources/scripts/album.js?rs=<?=$data['content']['restmedia']?>" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
var per = new Array();

    album.init(per);
    }); 
</script>