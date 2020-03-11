<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/19/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="wrapper">
    <div class="row" style="margin: 0px;">
        <div class="form-title">
            <h2 class="padding40">ĐIỂM ĐẾN VIỆT NAM PHỔ BIẾN</h2><span>&nbsp;</span>
        </div>
        <div class="hot-place hot-place_domestic">
            <?php $i=0 ?>
            <?php if(is_array($data['content']['home_travel'])) { foreach($data['content']['home_travel'] as $key => $value) { ?>
                <?php if($i == 1 || $i == 2) { ?>
                    <div class="hot-place-panel half half-xs no-right-xs">
                        <a><img <?php  echo loadImage($value['img'],'crop','181','181',true); ?>alt="<?=$value['title']?>"></a>
                        <div class="place-overlay">
                            <div class="place-content">
                                <div class="middle">
                                    <div class="place-name">
                                        <h3><a href="<?=$value['link']?>"><?php echo cutString($value['title'],0,20); ?></a></h3><span>&nbsp;</span>
                                    </div>
                                    <p class="place-info place-info-head place-special hidden-sm hidden-xs"><i class="fa fa-search"></i> <?=$value['description1']?></p>
                                    <p class="place-info place-special hidden-sm hidden-xs"><i class="fa fa-search"></i> <?=$value['description2']?></p>
                                    <p class="place-info place-special hidden-sm hidden-xs"><i class="fa fa-search"></i> <?=$value['description3']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <?php } else { ?>
                    <div class="hot-place-panel"><a><img <?php  echo loadImage($value['img'],'crop','373','181',true); ?>alt="<?=$value['title']?>"></a>
                        <div class="place-overlay">
                            <div class="place-content">
                                <div class="middle">
                                    <div class="place-name">
                                        <h3><a href="<?=$value['link']?>"><?php echo cutString($value['title'],0,20); ?></a></h3><span>&nbsp;</span>
                                    </div>
                                    <p class="place-info place-info-head place-special hidden-sm hidden-xs"><i class="fa fa-search"></i> <?=$value['description1']?></p>
                                    <p class="place-info place-special hidden-sm hidden-xs"><i class="fa fa-search"></i> <?=$value['description2']?></p>
                                    <p class="place-info place-special hidden-sm hidden-xs"><i class="fa fa-search"></i> <?=$value['description3']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php $i++ ?>
            <?php } } ?>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $key => $value) { ?>
<?php $content_news = $value['content_news'] ?>
<div class="outer-wrap wrapper" id="promo"> 

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
                            <a href="<?=$v['link']?>">
                                <img <?php  echo loadImage($v['img'],'none','570','290',true); ?>>
                            </a>
                            <h4><?=$v['title']?></h4>
                            
                        </div>
                        <?php } ?>
                        <?php $i++ ?>
                        <?php } } ?>
                    </div>
            </div>

        </div>
    </div>
</div>
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

