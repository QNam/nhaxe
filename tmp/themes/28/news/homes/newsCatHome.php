<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/28/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if($data['content']['home_traveldt']) { ?>

<div class="background-container" style="background-color: #FFFFFF; display: none;">
  <div class="row-container margin-no">
    <div class="row">
        <div class="content-container">
          <div class="resort-offer-slider">
            <h2><a href="">CHUỖI DỊCH VỤ</a></h2>

            <div class="resort-offer-slider__slider-container">
             
              <div class="resort-offer-slider__box-container flickity-enabled" tabindex="0">
                <div class="flickity-viewport" ><div class="flickity-slider">
                    

                        <?php $i=0 ?>
                        <?php if(is_array($data['content']['home_traveldt'])) { foreach($data['content']['home_traveldt'] as $key => $value) { ?>
                               
                            <?php if($i < 3) { ?>
                                <div class="resort-offer-slider__boxes is-selected" aria-selected="true" >
                                    <div class="resort-offer-slider__shadow"></div>
                                      <a class="link-arrow" href="<?=$value['link']?>">
                                        <div class="resort-offer-slider__image bg5cbd23262fcf5" >
                                            <img <?php  echo loadImage($value['img'],'none','100','100',true); ?>>
                                          <div class="resort-offer-slider__link-container  no-padding-left">
                                            <div class="booking-box__name"><?=$value['title']?></div>
                                            <div class="booking-box__price">
                                                <div class="price" data-loading="false" data-layout="text">
                                                    <div class="price__from">Giá chỉ từ </div>
                                                    <div class="price__base"><?=$value['original_price']?> VND</div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </a>
                                </div>
                            <?php } ?> 
                        <?php $i++ ?>
                        <?php } } ?>
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

<?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $k => $v) { ?>
<div class="background-container" style="background-color: #FFFFFF; display: none;">
  <div class="row-container margin-no">
    <div class="row">
        <div class="content-container">
          <div class="resort-offer-slider">
            <h2><a href="<?=$v['link']?>"><?=$v['title']?></a></h2>

            <div class="resort-offer-slider__slider-container">
             
              <div class="resort-offer-slider__box-container flickity-enabled" tabindex="0">
                <div class="flickity-viewport" ><div class="flickity-slider">
                    <?php $i = 0 ?>
                    <?php if(is_array($data['content']['home_cat'][$k]['content_news'])) { foreach($data['content']['home_cat'][$k]['content_news'] as $key => $val) { ?>
                    <?php if($i < 3) { ?>
                    <div class="resort-offer-slider__boxes is-selected" aria-selected="true" >
                        <div class="resort-offer-slider__shadow"></div>
                          <a class="link-arrow" href="<?=$v['link']?>">
                            <div class="resort-offer-slider__image bg5cbd23262fcf5" >
                                <img <?php  echo loadImage($val['img'],'none','100','100',true); ?>>
                              <div class="resort-offer-slider__link-container  no-padding-left">
                                <div class="booking-box__destination">
                                  <h4> <?=$val['title']?></h4>
                                  <span class="link-arrow">Xem chi tiết</span>
                                </div>
                              </div>
                            </div>
                          </a>
                    </div>
                    <?php } ?>
                    <?php $i++ ?>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
            </div>
          </div>
         
        </div>
    </div>
  </div>
</div>
<?php } } ?>


<style type="text/css">
    .booking-box__name {
    color: #fff;
    font-size: 20px;
    margin-bottom: 15px;
    text-align: right;
}
</style>