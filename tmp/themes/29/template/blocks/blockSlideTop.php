<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/29/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="main-bg-vn container-fluid pr">
    <?php if($web['anvui_id'] == 'TC0CV1rpv8f1eOmV') { ?>
    <?php $t = 0 ?>
    <!--<?php if(is_array($data)) { foreach($data as $k => $v) { ?>
    <?php if($t == 0) { ?>
    <div class="bannernews" style="padding: 0px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
                
                <div class="item active">
                  <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="" volume="0" width="100%">
                    <source src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/PHATLOCAN3.mp4?V=1" type="video/webm">
                </video>
                </div>
            </div>
            
        </div>
    </div>
    <?php } ?>
    <?php $t++ ?>
    <?php } } ?>
    <!--end main-bg-->
    <?php } else { ?>
    <?php $t = 0 ?>
    <?php if(is_array($data)) { foreach($data as $k => $v) { ?>
    <?php if($t == 0) { ?>
    <div class="bannernews" style="padding: 0px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                <li data-target="#myCarousel" data-slide-to="<?=$k2?>" class="<?php if($k2==0) { ?> active <?php } ?>"></li>
                <?php } } ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                <div class="item item <?php if($k2==0) { ?> active <?php } ?>">
                    <img <?php  echo loadImage($v2['src_link'],'none','1170','500',true); ?>style="width: 100%" class="img-responsive" alt="<?=$v2['title']?>">
                                </div>
                    <?php } } ?>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <?php } ?>
        <?php $t++ ?>
        <?php } } ?>
    <?php } ?>
</div>




<div class="box-formdv">
    <div class="content-container tabs-container">
        <div class="booking-mask">
            <div class="tabs js-tabs">
                <ul class="tabs__list">
                    <li class="tabs__item" data-length="4">
                        <a href="#tab-search-flight" class="tabs__link"><span><svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-search">
                                    <use xlink:href="#icon-search"></use>
                                </svg>MUA VÉ TRỰC TUYẾN</span></a>
                    </li>
                </ul>
                <div class="tabs__contents">
                    <div class="tabs__content tabs__content--active" id="tab-panel-0" role="tabpanel" aria-hidden="false" aria-labelledby="tab-link-0">
                        <div data-react-class="SearchMask" data-react-props="{&quot;target&quot;: &quot;homepage&quot;, &quot;displayFlightSearch&quot;: 0}">
                            <div class="search-mask" data-extended="false" data-flight-mode="round" data-target="homepage">
                                <div class="form search-mask__form">
                                    <div class="form__row">
                                        <div>
                                            <div class="form__field form__field--1-3">
                                                <select id="startPoint" name="startPoint">
                                                    <option value="">Tìm điểm đi</option>
                                                </select>
                                                <span class="search-mask__input-icon">
                                                    <svg class="icon icon-destination">
                                                        <use xlink:href="#icon-destination"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="form__field form__field--1-3">
                                                <select id="endPoint" name="endPoint">
                                                    <option value="">Tìm điểm đến</option>
                                                </select>
                                                <span class="search-mask__input-icon">
                                                    <svg class="icon icon-destination">
                                                        <use xlink:href="#icon-destination"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="form__field form__field--1-3">
                                                <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                                <span class="search-mask__input-icon">
                                                    <svg class="icon icon-destination">
                                                        <use xlink:href="#icon-destination"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="search-mask__submit" data-validated="true">
                                                <input type="hidden" name="returnDate">
                                                <input type="hidden" id="startId" name="startId">
                                                <input type="hidden" id="endId" name="endId">
                                                <input type="hidden" id="isRoundTrip" name="isRoundTrip">
                                                <button type="submit" class="button button--size-l button--full-width button--green" id="search-btn">Tìm kiếm xe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="clear:both;"></div>
<div class="sora-special-box" id="section-2">
  <div class="container">
    <div class="special-wrap row">
        <div class="special-title">
            <h1 style="display: none;">Phát Lộc An</h1>
            <h4>CAM KẾT CHẤT LƯỢNG</h4>
        </div>
        <div style="clear: both;"></div>
        <!-- First -->
        <div class="special-tiles">
            <span class="special-icons">
                <i aria-hidden="true" class="fa fa-heart-o"></i>
            </span>
            <h6 class="special-heading">AN TOÀN</h6>
            <p class="special-text">Đảm bảo an toàn tuyệt đối suốt hành trình </p>
        </div>
        <!-- First One Ends -->
        <!-- Second -->
        <div class="special-tiles">
            <span class="special-icons">
                <i aria-hidden="true" class="fa fa-birthday-cake"></i>
            </span>
            <h6 class="special-heading">CHU ĐÁO</h6>
            <p class="special-text">Dịch vụ khách hàng chu đáo </p>
        </div>
        <!-- Second Ends -->
        <!-- Third -->
        <div class="special-tiles">
            <span class="special-icons">
                <i aria-hidden="true" class="fa fa-cutlery"></i>
            </span>
            <h6 class="special-heading">TẬN TÂM</h6>
            <p class="special-text">Phục vụ bằng chính tâm của mình </p>
        </div>
        <!-- Third Ends -->
        <!-- Fourth -->
        <div class="special-tiles">
            <span class="special-icons">
                <i aria-hidden="true" class="fa fa-shopping-bag"></i>
            </span>
            <h6 class="special-heading">GIÁ CẢ CẠNH TRANH</h6>
            <p class="special-text">Chính sách giá linh hoạt, trọn gói cho khách hàng </p>
        </div>
        <!-- Fourth Ends -->
        <!-- Fifth -->
        <div class="special-tiles">
            <span class="special-icons">
                <i aria-hidden="true" class="fa fa-diamond"></i>
            </span>
            <h6 class="special-heading">CHẤT LƯỢNG TIN CẬY</h6>
            <p class="special-text">Chính sách bảo hành các sản phẩm linh hoạt </p>
        </div>
        <!-- Fifth Ends -->
        <!-- Sixth -->
        <div class="special-tiles">
            <span class="special-icons">
                <i aria-hidden="true" class="fa fa-glass"></i>
            </span>
            <h6 class="special-heading">PHỤC VỤ NHANH CHÓNG</h6>
            <p class="special-text">Chuyên nghiệp và miễn phí dịch vụ đưa đón tận nơi</p>
        </div>
        <!-- Sixth Ends -->
    </div>
  </div>
</div>

<div style="clear:both;"></div>
<style type="text/css">
.box-formdv {
    background: #f8c13b;
    margin-top: -25p;
    position: relative;
    z-index: 2;
    margin-top: -36px;
}
.main-bg-vn{
    position: relative;
    z-index: 1;
}
</style>



