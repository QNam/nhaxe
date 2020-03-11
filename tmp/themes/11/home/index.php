<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/11//home/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="clearfix"></div>
<div class="services iconic white">
  <div class="wrap">
    <div class="container">
      <div class="row">
          <div class="sectionTitle">
              <h2><span class="lightBg">Đặt vé trực tuyến</span></h2>
          </div>
          <div class="slide-show-dc">
            <?php if(is_array($data['content']['chuyen'])) { foreach($data['content']['chuyen'] as $k => $v) { ?>
              <div class="item-dv">
                <div class="thumbnail deals">
                    <?php if($v['listImages']['0'] != "0" && isset($v['listImages']['0'])) { ?>

                    <img src="<?=$v['listImages']['0']?>" class="img-responsive" alt="<?=$v['routeName']?>" alt="<?=$v['routeName']?>" style=" width: 100%;" />

                    <?php } else { ?>

                    <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/bottom%20-%20sin.jpg" class="img-responsive" alt="<?=$v['routeName']?>" style=" width: 100%;" />

                    <?php } ?>
                    <a href="<?=$v['link']?>" class="pageLink"></a>
                    <div class="caption">
                        <h4><a href="<?=$v['link']?>" class="captionTitle"><?=$v['routeName']?></a></h4>
                        <p >Giá từ <?=$v['price']?></p>
                        <div class="detailsInfo">
                            <ul class="list-inline detailsBtn">
                                <li>
                                    <a href="<?=$v['link']?>" title="<?=$v['routeName']?>" class="btn buttonCustomPrimary">Đặt vé</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
            <?php } } ?>
          </div>
      </div>
    </div>
    
  </div>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
    $(document).ready(function() {
 
      var owl = $(".slide-show-dc");
     
      owl.owlCarousel({
          items : 2, //10 items above 1000px browser width
          itemsDesktop : [1000,2], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      });
     
      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
      $(".play").click(function(){
        owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
      })
      $(".stop").click(function(){
        owl.trigger('owl.stop');
      })
     
    });
</script>
<style type="text/css">
  .thumbnail.deals {
    margin: 10px;
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
}
</style>

<div class="clearfix"></div>

<section class="promotionWrapper expressWrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="promotionTable">
                    <div class="promotionTableInner">
                        <div class="promotionInfo">
                            <h2>Nói không với bắt khách dọc đường</h2>
                            <ul class="list-inline rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <p>Lộ trình nhanh chóng</p>
                            <a href="/dat-ve" class="btn buttonCustomPrimary">Đặt vé</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $_B['temp']->printhome(); ?>
