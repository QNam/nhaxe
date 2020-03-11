<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/20/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="outer-wrap wrapper" id="promo" style="margin-bottom: 45px;"> 

    <div class="row">
        <div class="col-md-12">
            <h3 class="title">TIN TỨC & SỰ KIỆN</h3>  
        </div>
        <div class="carousel carousel-showmanymoveone slide" id="homeCarousel-hot">
            
            <div class="carousel-inner">
                    <div class="item active">
                        <?php $i = 0 ?>
                        <?php if(is_array($data['content']['home_news_hot'])) { foreach($data['content']['home_news_hot'] as $key => $v) { ?>
                        <?php if($i < 3) { ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="item-image">
                                <a href="<?=$v['link']?>">
                                    <img <?php  echo loadImage($v['img'],'resize','316','209',true); ?>>
                                </a>
                            </div>
                            <h4><?=$v['title']?></h4>
                            <p><?php echo cutString($v['short'],0,100); ?></p>
                        </div>
                        <?php } ?>
                        <?php $i++ ?>
                        <?php } } ?>
                    </div>
            </div>

           <!--  <a class="left carousel-control" href="#homeCarousel-<?=$value['id']?>" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right carousel-control" href="#homeCarousel-<?=$value['id']?>" data-slide="next"><i class="fa fa-angle-right"></i></a> -->
        </div>
    </div>
</div>



<div class="clearfix"></div>
<section class="sppb-section testimonialqs" style="background-repeat:no-repeat;background-size:cover;background-attachment:fixed;background-position:50% 50%;"><div class="sppb-container"><div class="sppb-section-title sppb-text-center"><h2 class="sppb-title-heading" style="">TESTIMONIAL</h2></div><div class="sppb-row"><div class="sppb-col-sm-12"><div class="sppb-addon-container sppb-wow fadeInUp sppb-animated" style="visibility: visible; animation-duration: 800ms; animation-delay: 400ms; animation-name: fadeInUp;" data-sppb-wow-duration="800ms" data-sppb-wow-delay="400ms"><div class="sppb-carousel sppb-testimonial-pro sppb-slide  sppb-text-center" data-sppb-ride="sppb-carousel" id="sppb-carousel1"><div class="sppb-carousel-inner"><div class="sppb-item active"><div class="testimonial"><div class="sppb-testimonial-message">Xe phục vụ rất chuyên nghiệp, chạy đúng giờ, nhân viên trên xe thân thiện và rất nhiệt tình, chúng tôi rất hài lòng</div><div class="sppb-testimonial-client"><strong class="pro-client-name">Chu Ngọc Mạnh</strong></div></div></div></div><ol class="sppb-carousel-indicators"><li data-sppb-target="#sppb-carousel1" class="active" data-sppb-slide-to="0"></li></ol></div></div></div></div></div></section>

<?php $y = 0 ?>
<?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $key => $value) { ?>
<?php $content_news = $value['content_news'] ?>
<?php if($y > 0) { ?>
<div class="outer-wrap wrapper" id="promo" style="margin-bottom: 45px;"> 

    <div class="row">
        <div class="col-md-12">
            <h3 class="title"><?=$value['title']?></h3>  
        </div>
        <div class="carousel carousel-showmanymoveone slide" id="homeCarousel-<?=$value['id']?>">
            
            <div class="carousel-inner">
                    <div class="item active">
                        <?php $i = 0 ?>
                        <?php if(is_array($content_news)) { foreach($content_news as $k => $v) { ?>
                        <?php if($i < 3) { ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="item-image">
                                <a href="<?=$v['link']?>">
                                    <img <?php  echo loadImage($v['img'],'resize','316','209',true); ?>>
                                </a>
                            </div>
                            <h4><?=$v['title']?></h4>
                            <p><?php echo cutString($v['short'],0,100); ?></p>
                            
                        </div>
                        <?php } ?>
                        <?php $i++ ?>
                        <?php } } ?>
                    </div>
            </div>

           <!--  <a class="left carousel-control" href="#homeCarousel-<?=$value['id']?>" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right carousel-control" href="#homeCarousel-<?=$value['id']?>" data-slide="next"><i class="fa fa-angle-right"></i></a> -->
        </div>
    </div>
</div>

<?php } ?>
<?php $y++ ?>
<?php } } ?>


<script type="text/javascript">
$(document).ready(function() {

    $("#slide-box").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

});
</script>

