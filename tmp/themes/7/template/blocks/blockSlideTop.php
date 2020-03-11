<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/7/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="main-bg-vn container-fluid pr">
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
        <!--end main-bg-->
    </div>
    <div class="box-formdv">
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
                                                   <!-- <label for="search-mask-field-from">Điểm đi</label> -->
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
                                                   <!-- <label for="search-mask-field-from">Điểm đến</label> -->
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
                                                   <!-- <label for="search-mask-field-from">Ngày đi</label> -->
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
    


<style type="text/css">
    .box-formdv {
        background: #d6b054;
    }
</style>