<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/28//detail.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><link rel="stylesheet" href="<?=$web['static_temp_mod']?>/resources/css/album.css?rs=<?=$data['content']['restmedia']?>">
 
<div class="">
<div class="">

<?php if(isset($data['content']['breadcrumbs'])) { ?>
<div class="productbreadcrumb">

<ol class="breadcrumb">
     <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
        
        <li ><a href="<?=$v['href']?>"><?=$v['text']?></a></li>
         
        <?php } } ?>
   
</ol>
</div>

<div class="clearfix"></div>
<?php } ?>
        <div class="clearfix"></div>
        <!--main-->
        <div class="f-module-page">
            <div class="f-module-page-title">
                <i></i><span><?=$data['content']['title']?></span>
            </div>
            <div class="f-module-page-body padding-10">
                <div class="clearfix"></div>
                <div class="f-album-view-page">
                <link rel="stylesheet" href="<?=$web['static_temp_mod']?>/resources/plugins/galleria/themes/classic/galleria.classic.css">
                    <?php if(isset($data['content']['albumImages'])) { ?>
                    <div id="galleria">
                        <?php if(is_array($data['content']['albumImages'])) { foreach($data['content']['albumImages'] as $k => $v) { ?>
                        <a href="<?=$v['image']?>"> 
                        <img title="<?=$v['title']?>"
                        alt="<?=$v['description']?>"
                        <?php  echo loadImage($v['src_link'],'crop','100','78',true); ?>> 
                        </a>
                        <?php } } ?>
                    </div>
                    <?php } ?>

                    <div class="f-album-detail">
                        <?php if(!empty($data['content']['contents_description'])) { ?>
                        <?php echo cutString($data['content']['contents_description'],0,100); ?>
                        <?php } ?>
                    </div>
                    <div class="f-album-detail" style="display: none">
                        <?=$data['content']['contents_description']?>
                    </div>
                    <?php if(isset($data['content']['count_des']) && $data['content']['count_des'] > 100) { ?>
                    <div class="f-album-detail-readmore">
                        <a class="f-album-detail-readmorebt"><?php echo lang('read_more');?>...</a>
                    </div>
                    <?php } ?>
                    <div class="f-page-split">
                    </div>
                    <div class="f-page-split">
                        <div class="f-page-split-title"></div>
                        <?php if(isset($data['content']['url'])) { ?>
                        <div class="f-page-split-body">
                            <div class="f-product-view-comment row ">
                                <div class="f-product-comment-tab-header">
                                    <ul id="f-pr-page-view-tabcomentid" class="no-margin no-padding nav-tabs">
                                        <li class="active">
                                            <a href="#f-pr-cm-view-01" data-toggle="tab"><?php echo lang('comment_with_your_facebook_account');?></a>
                                        </li>
                                        <li >
                                            <a href="#f-pr-cm-view-02" data-toggle="tab"><?php echo lang('comment_with_your_google_account');?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="f-product-comment-tab-body tab-content">
                                    <div id="f-pr-cm-view-01" class="tab-pane fade in active padding-10">
                                        <div class="autosize1-container">
                                        <?php if(isset($data['content']['url'])) { ?><div class="fb-comments" data-href="<?=$data['content']['url']?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div><?php } ?>
                                        </div>
                                    </div>
                                    <div id="f-pr-cm-view-02" class="tab-pane fade padding-10">
                                        <div class="autosize1-container" style="width: 100%; height: 200px">
                                            <?php if(isset($data['content']['url'])) { ?><div class="g-comments" data-href="<?=$data['content']['url']?>" data-width="838" data-height="131" data-first_party_property="BLOGGER" data-view_type="FILTERED_POSTMOD"></div><?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php if(!empty($data['content']['my_related']) || !empty($data['content']['cate_related'])) { ?>
                    <div class="f-page-split">
                        <div class="f-page-split-title">
                            <?php echo lang('album_related');?>
                        </div>
                        <div class="f-page-split-body">
                            <div class="clearfix"></div>

                            <ul class="f-album row">
                                <?php if(!empty($data['content']['my_related'])) { ?>
                                <?php if(is_array($data['content']['my_related'])) { foreach($data['content']['my_related'] as $k => $v) { ?>
                                <li class="col-md-3">
                                    <div class="f-album-item">
                                        <div class="f-album-item-img">
                                            <a href="<?=$v['link']?>" title="<?=$v['title']?>">
                                            <img class="albumload img-responsive" data-original="{loadImage <?=$v['avatar']?> crop 201 257}" alt="<?=$v['title']?>" /> <div class="f-album-item-img-hover"></div> </a>
                                        </div>
                                        <div class="f-album-item-title">
                                            <h2><a href="<?=$v['link']?>" title="<?=$v['title']?>"><?php echo cutString($v['title'],0,25); ?></a></h2>
                                        </div>
                                    </div>
                                </li>
                                <?php } } ?>
                                <?php } ?>
                                <?php if(!empty($data['content']['cate_related'])) { ?>
                                <?php if(is_array($data['content']['cate_related'])) { foreach($data['content']['cate_related'] as $k => $v) { ?>
                                <li class="col-md-3">
                                    <div class="f-album-item">
                                        <div class="f-album-item-img">
                                            <a href="<?=$v['link']?>" title="<?=$v['title']?>"><img <?php  echo loadImage($v['avatar'],'crop','334','257',true); ?>class="img-responsive" alt="<?=$v['title']?>" /> <div class="f-album-item-img-hover"></div> </a>
                                        </div>
                                        <div class="f-album-item-title">
                                            <h2><a href="<?=$v['link']?>" title="<?=$v['title']?>"><?php echo cutString($v['title'],0,25); ?></a></h2>
                                        </div>
                                    </div>
                                </li>
                                <?php } } ?>
                                <?php } ?>
                            </ul>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php } ?>
            
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--end main -->

    </div>
</div>

<script>
var jsurl = '<?=$web['static_temp_mod']?>';
</script>
<script src="<?=$web['static_temp_mod']?>/resources/scripts/jquery.albumload.min.js?rs=<?=$data['content']['restmedia']?>"></script>
<script src="<?=$web['static_temp_mod']?>/resources/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=$web['static_temp_mod']?>/resources/plugins/elevatezoom/jquery.elevatezoom.js" type="text/javascript"></script>

<script src="<?=$web['static_temp_mod']?>/resources/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="<?=$web['static_temp_mod']?>/resources/plugins/galleria/galleria-1.3.2.min.js" type="text/javascript"></script>

<script src="<?=$web['static_temp_mod']?>/resources/plugins/galleria/galleria.history.min.js" type="text/javascript"></script>

<script src="<?=$web['static_temp_mod']?>/resources/scripts/album.js?rs=<?=$data['content']['restmedia']?>" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
var per = new Array();

    album.init(per);
    }); 
</script>