<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/19/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php $t = 0 ?>
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
<div class="main-wrap pr">
    <?php if($web['anvui_id'] === 'TC09Y1qfVRdUCvIf') { ?>
    <div class="hotline"> Hà Nội - Móng Cái - Hà Nội</div>
    <?php } else { ?>
    <div class="hotline"><i class="fa fa-phone"></i> Hotline <?=$web['info']['phone']?></div>
    <?php } ?>
    <div class="teaser">
        Trang Đặt Vé Trực Tuyến - <?=$web['info']['business']?></span>
    </div>
    <ul id="promotion-ribbon" class="ribbon-wrap">
        <li class="ribbon-left"><a data-toggle="modal" data-target="#static-ad" href="">Chủ động <span>Đặt vé &nbsp;</span></a></li>
        <li class="ribbon-right"><a data-toggle="modal" data-target="#static-ad" href="">&nbsp;Nhanh chóng <span>Tiện lợi</span></a></li>
    </ul>
    <?php if($web['anvui_id'] != 'TC05wM7dDRQSo6' ) { ?>
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
    <?php } ?>
    <?php if($web['anvui_id'] == 'TC0A31qrgPVJBW3a') { ?>
    <div class="booking_form">
        <div class="tab_home text-center"><a class="tab_item active" href="#">Limousine</a><a class="tab_item" href="#">Vé máy bay</a><a class="tab_item" href="#">Tàu cao tốc</a></div>
        <div class="main-wrap pr">
            <!--end product-tab-wrap-->
            <div class="search-wrap pr clearfix">
                <div class="tab-content">
                    <div id="bus-search-box " class="limousine_form">
                        <form action="dat-ve" id="search-form ">
                            <div class="pr" id="Bus-search-panel-box-div">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="startPoint">Điểm đi</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-bus" aria-hidden="true"></i>
                                            <div class="dropdown dzhide">
                                                <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="textdiemdi">Chọn điểm đi</div>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" id="diemdi" aria-labelledby="dLabel">
                                                </ul>
                                            </div>
                                            <input type="hidden" class="form-control" name="startPoint" id="startPoint" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="endPoint">Điểm đến</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-bus" aria-hidden="true"></i>
                                            <div class="dropdown dzhide">
                                                <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="textdiemden">Chọn điểm đến</div>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" id="diemden" aria-labelledby="dLabel">
                                                </ul>
                                            </div>
                                            <input type="hidden" class="form-control" name="endPoint" id="endPoint" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 selectDateD fullst">
                                    <div class="form-group">
                                        <label for="depatureDate">Ngày đi</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-calendar"></i>
                                            <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <div class="search-btn">
                                            <input type="hidden" name="returnDate">
                                            <input type="hidden" id="startId" name="startId">
                                            <input type="hidden" id="endId" name="endId">
                                            <input type="hidden" id="isRoundTrip" name="isRoundTrip">
                                            <button type="submit" class="btn btn-orange" id="search-btn">Tìm kiếm xe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row" id="Bus-search-option-div" style="display: none;">
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
    </div>
    <style>
    .view {
        background-position: center center;
        background-repeat: no-repeat;
        height: 470px;
        text-align: center;
    }

    .full-bg-img {
        padding: 10% 0;
    }

    .dropdown.dzhide button {
        border: solid 1px #b7b7b7;
        background: #fff !important;
        color: #000 !important;
        border-radius: 0;
        width: 100%;
        box-sizing: border-box;
        height: 48px;
        padding: 7px 30px;
    }

    .limousine_form .form-group input,
    .limousine_form .form-group select {
        height: 48px;
    }

    .iconic-input .caret {
        position: absolute;
        right: 10px;
        font-size: 20px;
        top: 50%;
        margin-top: -5px;
        color: #555;
    }

    .iconic-input .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 10px dashed;
        border-top: 4px solid\9;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
    }

    ul#diemdi {
        width: 450px;
    }

    ul#diemdi li {
        line-height: 40px;
        padding-left: 10px
    }

    ul#diemden {
        width: 450px;
    }

    ul#diemden li a {
        line-height: 40px;
        padding-left: 10px;
        font-size: 16px;
        text-decoration: none;
    }

    ul#diemdi li a {
        line-height: 40px;
        padding-left: 10px;
        font-size: 16px;
        text-decoration: none;
    }

    .reason .reason-form:first-child {
        padding-left: 10px;
    }

    .reason .reason-form {
        padding: 0 20px;
    }

    .reason {
        width: 100%;
        margin: 20px 0 30px;
        display: table;
        float: left;
    }

    .reason .reason-form {
        width: 230px;
        display: table-cell;
        text-align: center;
        vertical-align: top;
    }

    .reason .reason-item-img {
        width: 100%;
        height: 78px;
        position: relative;
        margin-bottom: 20px;
    }

    .reason .title {
        font-weight: 600;
        font-size: 16px;
        margin: 0 0 10px;
        width: 100%;
    }

    .reason p {
        font-size: 14px;
        color: #444;
        text-align: center;
    }
    </style>
    <style type="text/css">
    div#myCarousel .item {
        margin-bottom: 0px;
    }

    .row.chonchieu .btn {
        line-height: inherit;
    }
    </style>
    <style type="text/css">
    .datve-home .col-md-12 {
        padding: 0px;
    }

    .search-wrap {
        margin-top: 245px;
    }

    .main-bg-vn {
        height: auto;
        overflow: inherit !important;
    }
    </style>
    <?php } elseif($web['anvui_id'] == 'TC0Ba1rTOa1WJOCp' || $web['anvui_id'] == 'TC0Cn1rx2Fp3dumx' || $web['anvui_id'] == 'TC04r1lru1vOk3c' || $web['anvui_id'] == 'TC0DB1s6aI4FE4mP' || $web['anvui_id'] == 'TC0821q4JlOdY2Tz' || $web['anvui_id'] == 'TC0Dy1sPqJsYVkgG') { ?>
    <div class="content-container tabs-container">
        <div class="booking-mask container">
            <div class="tabs js-tabs">
                <ul class="tabs__list">
                    <li class="tabs__item" data-length="4">
                        <a href="#tab-search-flight" class="tabs__link"><span>Đặt vé</span></a>
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
                                                <label for="search-mask-field-from">Điểm đi</label>
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
                                                <label for="search-mask-field-from">Điểm đến</label>
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
                                                <label for="search-mask-field-from">Ngày đi</label>
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
                                                <?php if($web['anvui_id'] == 'TC0Cn1rx2Fp3dumx') { ?>
                                                <button type="submit" class="button button--size-l button--full-width button--green" id="search-btn" >Tìm kiếm xe</button>
                                                <?php } else { ?>
                                                <button type="submit" class="button button--size-l button--full-width button--green" id="search-btn" >Tìm kiếm xe</button>
                                                <?php } ?>
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
    <?php } else { ?>
    <div class="search-wrap pr clearfix 123">
        <div class="tab-content">
            <div id="bus-search-box " class="wow fadeIn animated animated" data-wow-duration="100ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 100ms; animation-delay: 100ms; animation-name: fadeIn; display: block;">
                <div class="col-sm-12 title"><span>Đặt vé online</span></div>
                <form action="dat-ve" id="search-form ">
                    <div class="row pr" id="Bus-search-panel-box-div">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="startPoint">Điểm đi</label>
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
                                <label for="endPoint">Điểm đến</label>
                                <div class="iconic-input">
                                    <i class="fa fa-map-marker"></i>
                                    <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="depatureDate">Ngày đi</label>
                                <div class="iconic-input">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group">
                                <div class="search-btn">
                                    <input type="hidden" name="returnDate">
                                    <input type="hidden" id="startId" name="startId">
                                    <input type="hidden" id="endId" name="endId">
                                    <input type="hidden" id="isRoundTrip" name="isRoundTrip">
                                    <button type="submit" class="btn btn-orange" id="search-btn">Tìm kiếm xe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="form-tab-booking">
    </div>
    <?php } ?>
    <!--search-wrap-->
</div>
<!--end main-bg-->
</div>
<div class="outer-wrap sx-hide text-center marketing-msg bg-dark-grey text-white">
    <div class="outer-small-pad clearfix">
        <div class="col-sm-4"><i class="fa fa-check-circle"></i> Bằng giá tại quầy <span>*</span></div>
        <div class="col-sm-4"><i class="fa fa-check-circle"></i> Không phí quản trị <span>**</span></div>
        <div class="col-sm-4"><i class="fa fa-check-circle"></i> Ưu đãi hấp dẫn <span>***</span></div>
    </div>
</div>
<style type="text/css">
.main-wrap.pr {
    position: absolute;
    z-index: 1;
    top: 20px;
    left: 50%;
    margin-left: -550px;
}
</style>