<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?> <?php if(is_array($data)) { foreach($data as $k => $v) { ?>
      <?php if(!empty($v['image_slide'])) { ?>
      <?php $i =0 ?>
          <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?> 

<?php if($i ==0) { ?>
 <div data-slide-bg="<?=$web['static_upload']?><?=$v2['src_link']?>" class="swiper-slide swiper-slide-active" style="background-image: url(<?=$web['static_upload']?><?=$v2['src_link']?>); background-size: cover; width: 1265px; transform: translate3d(-1265px, 0px, 0px); transition-duration: 0ms; opacity: 1;" data-swiper-slide-index="<?=$i?>">
                            <div class="swiper-slide-caption-wrap">
                                <div class="swiper-slide-caption">
                                    <div class="shell">
                                        <div class="range range-xs-center range-lg-left section-sm-50 section-md-0">
                                            <div class="cell-xs-10 cell-lg-7 cell-xl-6">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


<?php } else { ?>
          <div data-slide-bg="<?=$web['static_upload']?><?=$v2['src_link']?>" class="swiper-slide swiper-slide-prev" style="background-image: url(<?=$web['static_upload']?><?=$v2['src_link']?>); background-size: cover; width: 1265px; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms; opacity: 1;" data-swiper-slide-index="<?=$i?>">
                            <div class="swiper-slide-caption-wrap">
                                <div class="swiper-slide-caption">
                                    <div class="shell">
                                        <div class="range range-xs-center range-lg-left">
                                            <div class="cell-xs-10 cell-lg-9 cell-xl-7">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php } ?>
<?php $i++ ?>
                         <?php } } ?>
      <?php } ?>
      <?php } } ?>
                       

 