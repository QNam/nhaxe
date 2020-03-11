<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/18/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style>
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
<style type="text/css">
    .datve-home .col-md-12{
        padding: 0px;
    }
</style>
<section class="well well1 brdr-top center767">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="https://livedemo00.template-help.com/wt_55979/images/page-1_img1.png" alt="">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <p class="lead txt-sec offset-1">
                    Từ những ngày đầu mới thành lập, năng lực hoạt động của Công ty còn hạn chế về ngành nghề, về phương tiện vận chuyển và đội ngũ cán bộ công nhân viên. Đến tháng 5 năm 2008 với lực lượng lao động trong toàn Công ty khoảng 300 người
                </p>
                <a href="/info.html" class="btn btn-primary">Xem thêm<span class="icon icon-md fa-long-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>
<!--Slide-->


<?php $t = 0 ?>
<?php if(is_array($data)) { foreach($data as $k => $v) { ?> 

<?php if($t == 1) { ?>

<section class="well well2 parallax center767" data-url="images/parallax1.jpg" data-mobile="true" data-speed="0.2"><div class="parallax_image" style="background-image: url(https://livedemo00.template-help.com/wt_55979/images/parallax1.jpg); background-color: inherit; height: 1155.6px; transform: translate3d(0px, -2.01029px, 0px);"></div>
<div class="parallax_cnt">
    <div class="container">
        <hr class="hr2">
        <h3>
            Giới Thiệu Dịch Vụ
        </h3>
        <div class="row col-6_mod left767">
            <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="media">
                    <div class="media-left text-center">
                        <img <?php  echo loadImage($v2['src_link'],'none','1170','500',true); ?>>
                    </div>
                    <div class="media-body">
                        <h6>
                                    <a href="#">
                                        <?=$v2['title']?>
                                    </a>
                                </h6>
                        <p>
                            <?=$v2['description']?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } } ?>
            
        </div>
    </div>
</div>
</section>
  <?php } ?>
  <?php $t++ ?>
<?php } } ?>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/camera/camera.css?v=6.6">
<script type="text/javascript" src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/camera/camera.js"></script>

<script type="text/javascript">
    $("#camera").camera({
        autoAdvance: true,
        height: '38.52%',
        minHeight: '400px',
        pagination: true,
        thumbnails: false,
        playPause: false,
        hover: false,
        loader: 'none',
        navigation: false,
        navigationHover: true,
        mobileNavHover: false,
        fx: 'simpleFade'
    })
</script>