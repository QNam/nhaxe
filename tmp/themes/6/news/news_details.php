<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//news/news_details.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><link rel="stylesheet" type="text/css" href="<?=$web['static_temp_mod']?>/resource/css/style.css"/>
<div class="productbreadcrumb">
<ol class="breadcrumb">
<?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
<li ><a href="<?=$v['href']?>"><?=$v['text']?></a> <i class="fa fa-caret-right"></i></li>
<?php } } ?>		
</ol>
</div>
<div class="clearfix"></div>
<div class="f-ctn-center marginnews">
<div class="f-module-page">

<div class="f-module-page-body">
<div class="top-new">
<div class="clearfix"></div>
<div class="f-news-view-page">
<div class="f-news-view-title">
<h1><?=$data['content']['newsDetail']['title']?></h1>
<div class="f-news-date">
<div class="left"><i class="fa fa-clock-o"></i> <?php echo lang('date_posted');?> : <?=$data['content']['newsDetail']['create_time']?></div>
</div>
</div>
</div>
<div class="f-news-view-detail">
<?=$data['content']['newsDetail']['details']?>
<div class="button-facebook">
                                     
                    </div>
</div>
 
</div>

<div class="f-facebook">
<div class="f-product-view-comment ">
                              <div class="title-bl">
                                  <span>Bình luận</span>
                              </div>
                              <div class="f-product-comment-tab-header">
                                  <ul id="f-pr-page-view-tabcomentid" class="no-margin no-padding nav-tabs">
                                      <li class="active">
                                          <a href="#f-pr-cm-view-01" data-toggle="tab">Bình luận bằng tài khoản facebook</a>
                                      </li>
                                      <li >
                                          <a href="#f-pr-cm-view-02" data-toggle="tab">Bình luận bằng tài khoản google</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="clearfix"></div>
                              <div class="f-product-comment-tab-body tab-content">
                                  <div id="f-pr-cm-view-01" class="tab-pane fade in active">
                                      <div class="autosize1-container">
                                      <?php if(isset($data['content']['curUrl'])) { ?><div class="fb-comments" data-href="<?=$data['content']['curUrl']?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div><?php } ?>
                                      </div>
                                  </div>
                                  <div id="f-pr-cm-view-02" class="tab-pane fade">
                                      <script src="https://apis.google.com/js/plusone.js"></script>
                                      <div class="g-comments"
                                        data-view_type="FILTERED_POSTMOD"
                                        data-first_party_property="BLOGGER"
                                        data-width="696"
                                        data-href="<?=$data['content']['curUrl']?>">
                                    </div>
                                  </div>
                              </div>
                          </div>
</div><!--end f-facebook-->

<div class="f-page-split nonespilit">
                      <div class="f-page-split-title"></div>
                      <?php if(isset($data['content']['url'])) { ?>
                      <div class="f-page-split-body">
                          <div class="f-product-view-comment ">
                              <div class="title-bl">
                                  <span>Bình luận</span>
                              </div>
                              <div class="f-product-comment-tab-header">
                                  <ul id="f-pr-page-view-tabcomentid" class="no-margin no-padding nav-tabs">
                                      <li class="active">
                                          <a href="#f-pr-cm-view-01" data-toggle="tab">Bình luận bằng tài khoản facebook</a>
                                      </li>
                                      <li >
                                          <a href="#f-pr-cm-view-02" data-toggle="tab">Bình luận bằng tài khoản google</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="clearfix"></div>
                              <div class="f-product-comment-tab-body tab-content">
                                  <div id="f-pr-cm-view-01" class="tab-pane fade in active">
                                      <div class="autosize1-container">
                                      <?php if(isset($data['content']['curUrl'])) { ?><div class="fb-comments" data-href="<?=$data['content']['curUrl']?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div><?php } ?>
                                      </div>
                                  </div>
                                  <div id="f-pr-cm-view-02" class="tab-pane fade">
                                      <script src="https://apis.google.com/js/plusone.js"></script>
                                      <div class="g-comments"
                                        data-view_type="FILTERED_POSTMOD"
                                        data-first_party_property="BLOGGER"
                                        data-width="696"
                                        data-href="<?=$data['content']['curUrl']?>">
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php } ?>
                    </div>
<div class="clearfix"></div>
<!--Tin tức cùng danh mục-->
<?php if(isset($data['content']['newsOther']['news'])) { ?>
<div class="f-page-split-title tintuccungdanhmuc"><?php echo lang('news_cat');?></div>
<div class="f-page-split tintuccungdanhmuc">
<ul>
<?php if(is_array($data['content']['newsOther']['news'])) { foreach($data['content']['newsOther']['news'] as $k => $v) { ?>
<li class="col-md-6 col-sm-6 col-xs-6 full-xs">
<a href="<?=$v['href']?>"><img src="<?=$v['img']?> " class="img-responsive" alt="<?=$v['title']?>" /> </a>
<h3>
<a href="<?=$v['href']?>"><?=$v['title']?> </a>
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
<a href="<?=$v['href']?>"><span>»</span> <?=$v['title']?> </a>
</h3>
</li>
<?php } } ?>
</ul>
</div>
<?php } ?>
<!--Kết thúc tin liên quan tự chọn-->
</div>
<div class="clearfix"></div>
</div>
</div>

