<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/16/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>

<div class="q-tab home jarallax" >
    <video id="video_background" preload="auto" autoplay="true" loop="loop" muted volume="0">
        <source src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/img/video/intro.mp4" type="video/webm"/>
    </video>
    <div class="contentslide">
        <div class="container">
            <h3>HÀNH TRÌNH KẾT NỐI THỜI GIAN</h3>
            <a href="">Tìm hiểu thêm <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
    </div>

    <div class="container-fluid mt-5 option" id="selectOption" style="display: none;">
        <div class="wb-dv" style="width: 60%; margin: auto;">
            
            <div class="owl-carousel container">
                <div class="icon-bus">
                    <a href="#" id="active-waterbus">
                        <p>Tàu Buýt</p>
                        <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/img/waterbus/waterbus.png" class="img-thumbnail rounded-circle" alt="">
                        <p>Saigon Waterbus</p>
                    </a>
                </div>
                <div class="icon-bus">
                    <a href="#" id="active-rivertaxi">
                        <p>Khám phá</p>
                        <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/img/waterbus/rivertaxi.png" class="img-thumbnail rounded-circle" alt="">
                        <p>Explore SaigonRiver</p>
                    </a>
                </div>
                <div class="icon-bus">
                    <a href="#" id="active-watertaxi">
                        <p>Tàu taxi</p>
                        <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/img/waterbus/watertaxi.png" class="img-thumbnail rounded-circle" alt="">
                        <p>Saigon Watertaxi</p>
                    </a>
                </div>

                <div class="icon-bus">
                    <a href="#" id="active-trolley">
                        <p>Xe điện</p>
                        <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/img/waterbus/saigon_trolley.png" class="img-thumbnail rounded-circle" alt="">
                        <p>Saigon Trolley</p>
                    </a>
                </div>
            </div>
        </div>
        

    </div>
</div>
<?php if($mod=='home') { ?>
<div class="slide-2">
    <div class="">
        <h2>Bạn thích đi đâu hôm nay</h2>
        <section class="centerSlide slider">
            <?php $t = 0 ?>
            <?php if(is_array($data)) { foreach($data as $k => $v) { ?> 
                <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                    <div class="itemTouris">
                        <figure><img <?php  echo loadImage($v2['src_link'],'none','100','100',true); ?>></figure> 
                        <div class="jeg_postblock_content">
                            
                            <div class="jeg_post_category"> <a href="" class="category-theme-wordpress"></a></div> 
                            <div class="jeg_post_info"> 
                                <h3 class="jeg_post_title"> <a href="">Khám phá trải nghiệm</a> </h3> 
                                <div class="jeg_post_meta"></div> 
                            </div> 
                        </div>
                    </div>
                <?php } } ?>
              <?php $t++ ?>
            <?php } } ?>
        </section>  
    </div>
</div>
<?php } ?>