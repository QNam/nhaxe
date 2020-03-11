<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/14/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if($web['anvui_id'] == "TC03h1IzK1jParS") { ?>
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
    
</style>
<div class="slide visible-lg visible-md">
    <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="" volume="0" width="100%">
        <source src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/phucxuyen.mp4" type="video/webm">
    </video>
</div>

<?php } else { ?>
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
</style>
<div class="div-top-main">
    <?php if($web['anvui_id'] == 'TC0Cm1rweVdinjJi') { ?>
        <div class="hotline-st-d">
            <a href="tel:1900 55 55 23"> <i class="fa fa-volume-control-phone" aria-hidden="true"></i> 1900 55 55 23</a>
            <a href="tel:1900 55 55 23"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 1900 96 96 71</a>
        </div>


        <div class="chuyen-st-d">
            <a href="https://xechatluongcaosontung.vn/dat-ve?routeId=R0DB1s6UOpGDcXh"> Quy Nhơn <i class="fa fa-arrows-h" aria-hidden="true"></i> Đà Nẵng</a>
            <a href="https://xechatluongcaosontung.vn/dat-ve?routeId=R0DA1s6Bk8LFiei"> Quy Nhơn <i class="fa fa-arrows-h" aria-hidden="true"></i> Nha Trang</a>
            <a href="https://xechatluongcaosontung.vn/dat-ve?routeId=R0Dl1sKmrxZqZZ3"> Quy Nhơn <i class="fa fa-arrows-h" aria-hidden="true"></i> Đắk Lắk</a>
        </div>


        <style type="text/css">
            .hotline-st-d {
                position: absolute;
                z-index: 9999;
                width: 180px !important;
            }
            .hotline-st-d a{
              float:left;
              width:100%;
              border:3px solid #2a3491;
              background:#fff;
              border-radius:5px;
              font-size:18px;
              padding:5px;
              margin-top: 10px;

            }
            .chuyen-st-d {
                position: absolute;
                z-index: 999999;
                width: 230px;
                right: 0px;
            }
            .chuyen-st-d a{
                float:left;
              width:100%;
              border:3px solid #2a3491;
              background:#fff;
              border-radius:5px;
              font-size:18px;
              padding:5px;
              margin-top: 10px;
            }
        </style>
    <?php } ?>
    <?php $t = 0 ?>
    <?php if(is_array($data)) { foreach($data as $k => $v) { ?> 

    <?php if($t == 0) { ?>
    <div class="bannernews <?php if($web['anvui_id'] == 'TC0BC1rJs03JKnvA' || $web['anvui_id'] == 'TC09F1qY4kzUWYJu') { ?>container<!--<?php } ?>" style="padding: 0px;">
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


<?php if($web['anvui_id'] == 'TC0B31rGICznLw9n' || $web['anvui_id'] == 'TC0Cm1rweVdinjJi' || $web['anvui_id'] == 'TC0BC1rJs03JKnvA' || $web['anvui_id'] == 'TC09F1qY4kzUWYJu' || $web['anvui_id'] == 'TC0761phLM2cBJrc' || $web['anvui_id'] == 'TC0BW1rRipZ8hlaZ' || $web['anvui_id'] == 'TC0CC1riPKQBfqot' || $web['anvui_id'] == 'TC0CJ1rlCZVe5Vrl' || $web['anvui_id'] == 'TC0CK1rlUyn1qquy' || $web['anvui_id'] == 'TC0CK1rlUyn1qquy') { ?>
<style type="text/css">
    .page-template-tpl-homepage .booking-mask{
        position: relative !important;
        top:inherit;
    }
    .div-top-main{
        position: relative;
    }
    .content-container.tabs-container {
        position: absolute;
        bottom: 55px;
        width: 100%;
        z-index: 1;
        margin: auto;
        max-width: inherit;
    }
    .page-template-tpl-homepage .booking-mask {
        position: absolute;
        
        width: 100%;
        z-index: 1;
        max-width: 1140px;
        margin: auto;
    }
    .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    -o-transition: background-color .3s, border-color .3s;
    -webkit-transition: background-color .3s, border-color .3s;
    background-color: rgba(255, 255, 255, 0.9);
    border: 1px solid #acd9f5;
    border-radius: 4px;
    color: #00305b;
    font-weight: 600;
    padding: 10px 14px;
    transition: background-color .3s, border-color .3s;
    width: 100%;
    padding: 0px;
    height: 39px;
}

</style>
<div class="content-container tabs-container">
    <div class="booking-mask">
        <div class="tabs js-tabs">
            <ul class="tabs__list">
                <li class="tabs__item" data-length="4">
                    <a href="#tab-search-flight" class="tabs__link"><span><svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>Đặt vé</span></a>
                </li>
                
            </ul>
            <div class="tabs__contents">
                <div class="tabs__content tabs__content--active" id="tab-panel-0" role="tabpanel" aria-hidden="false" aria-labelledby="tab-link-0">
                        <div data-react-class="SearchMask" data-react-props="{&quot;target&quot;: &quot;homepage&quot;, &quot;displayFlightSearch&quot;: 0}">
                           <div class="search-mask" data-extended="false" data-flight-mode="round" data-target="homepage">
                              
                              <div class="form search-mask__form">
                                 <div class="form__row">
                                    <div >
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
<?php } ?>


<?php if($web['anvui_id'] == 'TC09m1ql0HQCiixG') { ?>
<style type="text/css">
    div#myCarousel .item {
        margin-bottom: 0px;
    }
    .row.chonchieu .btn {
        line-height: inherit;
    }
</style>
<div class="main-wrap pr">
      
      <!--end product-tab-wrap-->
        <div class="search-wrap pr clearfix">
            <div class="tab-content">
                <div id="bus-search-box " class="wow fadeIn animated animated" data-wow-duration="100ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 100ms; animation-delay: 100ms; animation-name: fadeIn; display: block;">
                    <div class="col-sm-12 title"><span>Tìm chuyến đi</span></div>
                    <form action="dat-ve" id="search-form ">
                        <div class="row chonchieu">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <button type="button" class="btn btn-oder selectday selected" id="oneway">Một chiều</button>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <button type="button" class="btn btn-oder selectday" id="roundtrip">Khứ hồi</button>
                            </div>
                        </div>
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
                            <div class="col-lg-2 col-md-3 col-sm-3 selectDateD fullst">
                                <div class="form-group">
                                    <label for="depatureDate" >Ngày đi</label>
                                    <div class="iconic-input">
                                        <i class="fa fa-calendar"></i>
                                        <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 selectDateD hidest">
                                <div class="form-group">
                                    <label for="depatureDate" class="label-cus">Ngày về</label>
                                    <div class="iconic-input">
                                        <i class="fa fa-calendar"></i>
                                        <input type="text" class="form-control datepicker" name="returnDate" id="returnDate" disabled readonly>
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
<?php } ?>
</div>
<style type="text/css">
    .datve-home .col-md-12{
        padding: 0px;
    }
</style>
<?php } ?>

<?php if($web['anvui_id'] == 'TC0Ai1r7za9DJh1i' ) { ?>
<style type="text/css">
    .widget_body{
        z-index: 99;
        position: fixed;
        width: 360px;
        bottom: 0;
        right: 20px;
        background: #FFF;
        box-shadow: 0 5px 30px rgba(0,0,0,.16);
        -webkit-appearance: none;
        min-height: 250px!important;
        max-height: 580px!important;
        height: calc(100% - 20px - 20px - 100px);
        bottom: calc(60px + 20px + 20px);
    }
    .widget_body h3.heading {
        border-radius: 7px 7px 0px 0px;
        background-color: #c69939;
        color: #fff;
        text-align: center;
    }
    .button-chat {
        width: 100%;
        height: 100%;
        background: #1F8CEB;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0 5px 30px rgba(0,0,0,.26);
        text-align: center;
    }
    .color-theme-default {
        background-color: #c69939;
    }
    .button-chat {
        border-radius: 0;
        -webkit-mask-image: url(https://filev4.subiz.com/bubble_02.svg);
    }
    .visible {
        display: block;
        visibility: visible;
    }
    .widget-button {
        z-index: 2147483000;
        position: fixed;
        bottom: 35px;
        right: 25px;
        width: 60px;
        height: 60px;
    }
    #startPoint{
        width: 100%;
    }
    #endPoint{
        width: 100%;
    }
    @media screen and (max-width: 767px) {
        .widget_body{
            display: none;
            width: 90%;
        }
    }
</style>
<div class="widget-button visible"><div class="button-chat color-theme-default resetcustom"><i class="close-widget-icon"></i></div></div>
<div class="widget_body">
    <div class="">
        <h3 style="margin-top: 44px; padding-bottom: 0px; display: none;"><img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/images/booking.png" style="width: 45px; height: 45px; margin-right: 10px;" alt="">
            <span class="title"><?php echo lang('booking');?></span></h3>
    </div>

    <h3 class="heading"><i class="fa fa-bus"></i> <span>Mua vé trực tuyến</span></h3>
    <div class="clearfix"></div>
    <div class="tabs__contents">
        <div class="tabs__content tabs__content--active" id="tab-panel-0" role="tabpanel" aria-hidden="false" aria-labelledby="tab-link-0">
                <div data-react-class="SearchMask" data-react-props="{&quot;target&quot;: &quot;homepage&quot;, &quot;displayFlightSearch&quot;: 0}">
                    <div class="search-mask" data-extended="false" data-flight-mode="round" data-target="homepage">
                      
                        <div class="form search-mask__form">
                            <div class="form__row">
                                <div >
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
<script type="text/javascript">
    $(".button-chat").click(function(){
        $(".widget_body").slideToggle();
    })
</script>
<?php } ?>