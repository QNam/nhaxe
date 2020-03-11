<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/19//news/news_details.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="main-bg-vn container-fluid pr" style="background: url('http://cdn.anvui.vn/uploadv2/web/27/2704/slide/2018/12/04/08/03/1543910637_vn-03.jpg')">
    
   <div class="main-wrap pr">
      <div class="hotline"><i class="fa fa-phone"></i> Hotline <?=$web['info']['phone']?></div>
      <div class="teaser">
         Trang Đặt Vé Trực Tuyến - <?=$web['info']['business']?></span>
      </div>
      <ul id="promotion-ribbon" class="ribbon-wrap">
         <li class="ribbon-left"><a data-toggle="modal" data-target="#static-ad" href="">Chủ động <span>Đặt vé &nbsp;</span></a></li>
         <li class="ribbon-right"><a data-toggle="modal" data-target="#static-ad" href="">&nbsp;Nhanh chóng  <span>Tiện lợi</span></a></li>
      </ul>
      <div class="product-tab-wrap pr clearfix wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeIn;">
         <div class="col-sm-12">
            <ul class="product-tab">
               <li><a href="#bus-search-box" class="default active"><i class="fa fa-bus" aria-hidden="true"></i><br><span class="hidden-xs">Vé xe khách</span></a></li>
               <li><a href="#train-search-box" class="default"><i class="fa fa-train" aria-hidden="true"></i><br><span class="hidden-xs">Vé Tàu Hỏa</span></a></li>
               <li><a href="#ferry-search-box" class="default"><i class="fa fa-ship" aria-hidden="true"></i><br><span class="hidden-xs">Vé Phà</span></a></li>
               <li><a href="#car-search-box" class="default"><i class="fa fa-car" aria-hidden="true"></i><br><span class="hidden-xs">Thuê Ô tô</span></a></li>
               <li class="sub hidden-xs">
                  <div class="subproduct-label"><span class="hidden-xs">Khác</span>:</div>
                  <ul class="subproduct">
                     <li><a href="#sub-charter-box" class="default"><i class="icon-driver"></i> Xe Hợp Đồng</a></li>
                     <li><a href="/vi-vn/tour"><i class="fa icon-holiday"></i> Tour <span class="label-new2" style="vertical-align:1px;">MỚI</span></a></li>
                     <li><a href="" target="_blank"><i class="fa fa-bed"></i> Khách Sạn</a></li>
                  </ul>
               </li>
               <li class="hidden-lg hidden-md hidden-sm"><a href="#others-search-box" class="default"><i class="icon-plus"></i><br><span class="hidden-xs">Khác</span></a></li>
            </ul>
         </div>
      </div>
      <!--end product-tab-wrap-->
        <div class="search-wrap pr clearfix">
            <div class="tab-content">
                <div id="bus-search-box " class="wow fadeIn animated animated" data-wow-duration="100ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 100ms; animation-delay: 100ms; animation-name: fadeIn; display: block;">
                    <div class="col-sm-12 title"><span>Vé Xe Khách</span></div>
                    <form action="dat-ve" id="search-form ">
                        <div class="row pr" id="Bus-search-panel-box-div">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="startPoint" >Điểm đi</label>
                                    <div class="iconic-input">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" class="form-control" name="startPoint" id="startPoint" readonly>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="Bus swap">
                                <div class="form-group">
                                    <a><i class="fa icon-switch"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="endPoint" >Điểm đến</label>
                                    <div class="iconic-input">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="depatureDate" >Ngày đi</label>
                                    <div class="iconic-input">
                                        <i class="fa fa-calendar"></i>
                                        <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-2">
                                <div class="form-group">
                                    <div class="search-btn">
                                        
                                        <input type="hidden" id="startId" name="startId">
                                        <input type="hidden" name="returnDate">
                                        <input type="hidden" id="endId" name="endId">
                                        <button type="submit" class="btn btn-orange" id="search-btn">Tìm kiếm xe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="row" id="Bus-search-option-div">
                    <div class="col-lg-12">
                        <a href="javascript:;" id="aBasic_Bus" class="orange" style="display: none;">Tìm kiếm cơ bản</a>
                        <a href="javascript:;" id="aAdvanced_Bus" class="orange" style="">Tìm kiếm nâng cao</a>
                        <a data-toggle="modal" data-target="#suggest-new-route" class="suggest-route">Đề Xuất Tuyến Mới</a>
                    </div>
                </div>
            </div>
        </div>
      <div class="form-tab-booking">
            
      </div>
      <!--search-wrap-->
      
   </div>
   <!--end main-bg-->
</div>
<div class="outer-wrap sx-hide text-center marketing-msg bg-dark-grey text-white">
    <div class="outer-small-pad clearfix">
        <div class="col-sm-4"><i class="fa fa-check-circle"></i> Bằng giá tại quầy <span>*</span></div>
        <div class="col-sm-4"><i class="fa fa-check-circle"></i> Không phí quản trị <span>**</span></div>
        <div class="col-sm-4"><i class="fa fa-check-circle"></i> Giảm đến 10% <span>***</span></div>
    </div>
</div>
<div class="container bg-3">
    <div class="news-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
                <li class="breadcrumb-item"><a href="<?=$v['href']?>"><?=$v['text']?></a> <i class="fa fa-caret-right"></i></li>
                <?php } } ?>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="news-title">
                <h3><?=$data['content']['newsDetail']['title']?></h3>
                <div class="news-date">
                    <div class="left"><i class="fa fa-clock-o"></i> <?php echo lang('date_posted');?> : <?=$data['content']['newsDetail']['create_time']?></div>
                </div>
            </div>
            <div class="news-content">
                <?=$data['content']['newsDetail']['details']?>
                <div class="button-facebook">

                </div>
            </div>
        </div>
    </div>
    <?php if(is_array($data['content']['newsDetail']['tags'])) { foreach($data['content']['newsDetail']['tags'] as $k => $v) { ?>
        <a href="<?=$v['href']?>"><?=$v['title']?></a>
    <?php } } ?>
    <div class="clearfix"></div>
    <div class="">
        <!--Tin tuc cung danh muc-->
        <?php if(isset($data['content']['newsOther']['news'])) { ?>
        <div id="cate-news">
            <h3 class="box-news-title clearfix"><?php echo lang('related_news');?></h3>
            <div class="box-news clearfix">
                <div class="carousel" id="carouselInformation">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <ul class="thumbnails clearfix">
                                    <?php if(is_array($data['content']['newsOther']['news'])) { foreach($data['content']['newsOther']['news'] as $k => $v) { ?>
                                    <li class="col-sm-3">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                <a href="<?=$v['href']?>">
                                                    <img alt="<?=$v['title']?>"
                                                         <?php  echo loadImage($v['img'],'crop','570','290',true); ?>>
                                                </a>
                                            </div>

                                            <div class="caption">
                                                <a href="<?=$v['href']?>">
                                                    <h4><?=$v['title']?></h4>
                                                </a>

                                                <p><?php echo cutString($v['short'],0,100); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <?php } ?>
        <!--Ket thuc Tin tuc cung danh muc-->
        <div class="clearfix"></div>
        <!--Tin tuc lien quan-->
        <?php if(isset($data['content']['newsRelated']['newsr'])) { ?>
        <div id="recent-news">
            <h3 class="box-news-title clearfix"><?php echo lang('related_news');?></h3>
            <div class="box-news clearfix">
                <div class="carousel slide" id="carouselInformation2">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <ul class="thumbnails clearfix">
                                    <?php if(is_array($data['content']['newsRelated']['news'])) { foreach($data['content']['newsRelated']['news'] as $k => $v) { ?>
                                    <li class="col-sm-3">
                                        <div class="fff">
                                            <div class="thumbnail">
                                                <a href="<?=$v['href']?>">
                                                    <img alt="<?=$v['title']?>"
                                                         src="<?=$v['img']?>">
                                                </a>
                                            </div>

                                            <div class="caption">
                                                <a href="<?=$v['href']?>">
                                                    <h4><?=$v['title']?></h4>
                                                </a>

                                                <p><?php echo cutString($v['short'],0,100); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <?php } ?>
        <!--Ket thuc Tin tuc lien quan-->
    </div>
</div>
</div>
</div>
<style type="text/css">
    .main-wrap{
        padding-top: 20px;
    }
</style>
<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $(".news-title").offset().top
        },1000);
    });
</script>
