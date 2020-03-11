<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/24/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<div class="container">
    <div class="news_box">
       <div class="row">

          <div class="outer-wrap wrapper" id="promo" style="margin-bottom: 45px;"> 

              <div class="row">
                  <div class="col-md-12">
                      <h3 class="title">Tin Tức</h3>  
                  </div>
                  <div class="carousel carousel-showmanymoveone slide" id="homeCarousel-hot">
                      
                      <div class="carousel-inner">
                              <div class="item active">
                                  <?php $i=0 ?>
                                  <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
                                  <?php if($i < 9) { ?>
                                  <div class="col-xs-12 col-sm-6 col-md-4 item-new-homes">
                                      <div class="item-image">
                                          <a href="<?=$v['link']?>">
                                              <img <?php  echo loadImage($v['img'],'none','316','209',true); ?>>
                                          </a>
                                      </div>
                                      <h4><a href="<?=$v['link']?>"><?=$v['title']?></a></h4>
                                      <p><?php echo cutString($v['short'],0,100); ?></p>
                                  </div>
                                  <?php } ?>
                                  <?php $i++ ?>
                                  <?php } } ?>
                              </div>
                      </div>
                  </div>
              </div>
          </div>

        <style type="text/css">
          .col-xs-12.col-sm-6.col-md-4.item-new-homes {
    height: 373px;
}
        </style>
<script type="text/javascript">
    $(document).ready(function() {

    $(".slider_news").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 4]

    });

});
</script>

<section class="sppb-section testimonialqs" style="background-repeat:no-repeat;background-size:cover;background-attachment:fixed;background-position:50% 50%;">
    <div class="sppb-container">
        <div class="sppb-section-title sppb-text-center">
        </div>
        <div class="sppb-row">
            <div class="sppb-col-sm-12">
                <div class="sppb-addon-container sppb-wow fadeInUp sppb-animated" >
                    <ul class="slider_customer">
                       <li>
                          <div class="item_comment">
                             <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/80-80-marguerite-729510-960-720-1552413516.jpg" alt="marguerite-729510-960-720-1552413516.jpg" />
                             <p class="name">Nguyễn Trung Thành</p>
                             <p>Tuy chưa đi nhưng nhìn xe chất quá. Nếu có dịp nhất định mình sẽ chọn Trung Thành Limousine.</p>
                          </div>
                       </li>
                       <li>
                          <div class="item_comment">
                             <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/80-80-marguerite-729510-960-720-1552413516.jpg" alt="marguerite-729510-960-720-1552413516.jpg" />
                             <p class="name">Nguyễn Ngọc Thư</p>
                             <p>Hay, có cả ghế matxa thì tốt rồi, 3 tiếng trên xe dù nằm cũng thấy mỏi người, có matxa thì khác gì nằm ở nhà thư giãn.</p>
                          </div>
                       </li>
                       <li>
                          <div class="item_comment">
                             <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/80-80-marguerite-729510-960-720-1552413516.jpg" alt="marguerite-729510-960-720-1552413516.jpg" />
                             <p class="name">Quốc Triệu</p>
                             <p>Dòng xe này mình đi rồi, đỡ sóc hơn hẳn dòng Limousine thông thường. Vân Đồn có xe này tốt quá!</p>
                          </div>
                       </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
       </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

    $(".slider_customer").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1]

    });

});
</script>
<style type="text/css">
  .slider_customer .item_comment{
    text-align: center;
    color: #fff;
  }
  .slider_customer .item_comment p {
    text-align: center;
    max-width: 90%;
    margin: auto;
}
.sppb-section{
  padding: 20px 0px;
}
</style>