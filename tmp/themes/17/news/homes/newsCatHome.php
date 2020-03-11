<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/17/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $k => $v) { ?>

<div class="section section1<?=$k?> ">
    <div class="block bock-fkb box-block12">
        <div class="block-box-title">
            <h3 class="rs title-block3"><a href="/phong-ac6.html"><?=$v['title']?></a></h3>
            <p class="rs title-des"><?=$v['description']?><a href="" class="btn-more">Xem tiếp</a>
            </p>
        </div>
        <div class="box-slider">
            <div class="z-slider2 owl-carousel">
                <?php if(is_array($v['content_news'])) { foreach($v['content_news'] as $key => $val) { ?>
                <div class="z-slider2-elm-border">
                    <div class="z-slider2-elm" style="background-image: url(http://cdn.anvui.vn/<?=$val['img']?>);">
                        <div class="z-slider2-elm-bottom">
                            <!--div class="title3">Đây là text bé</div-->
                            <div class="title6"><?=$val['title']?>

                                <div class="detaild" style="display: none;">
                                    <?=$val['details']?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php } } ?>
                <script type="text/javascript">
                    $('.title6').click(function(){
                        $('#myModalTour').modal('hide');
                        $('#myModalND').modal('show');
                        $('#loading_popup').fadeIn();
                        var detail = $(this).find('.detaild').html();
                        $("#article_content").html(detail);
                    })
                </script>
            </div>
        </div>
    </div>
</div>
<?php } } ?>

<div class="section section10">
    <div class="block bock-fkb  box-block10 ">
        <div class="block-box-title">
            <h3 class="rs title-block">Chuyến đi</h3>
            <a  href=""  class="btn-tour">Đặt tour</a>
            <div id="owlStatus">
                <a class="k-count"><span class="currentItem "><span class="result"></span></span>/<span class="owlItems"><span class="result"></span></span></a>
            </div>
        </div>
        <div class="box-slider10">
            <div class="t-slider  owl-carousel">
                <?php if(is_array($data['home_travel'])) { foreach($data['home_travel'] as $key => $value) { ?>
                <div class="t-sliderI cf">
                    <div class="t-sliderL" style="background: url(http://cdn.anvui.vn/<?=$value['img']?>) 50% 50% no-repeat" onclick="showPopupDetail(64)"></div>
                    <div class="t-sliderR">
                        <h2 class="rs"><a
                        href="javascript: showPopupDetail(64)"><?=$value['title']?></a>
                     </h2>
                        <div class="idscrollbar">
                            <div class="scrollbar">
                                <div class="track">
                                    <div class="thumb">
                                        <div class="end"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewport">
                                <div class="overview">
                                    <p class="rs txt-time">Thời gian : 01/05/2017 - 31/12/2017</p>
                                    <p class="rs txt-time">Giá tour: <span
                                 class="txt-red"><?=$value['original_price']?></span></p>
                                 <?php if($value['sale_price'] != 0) { ?>
                                    <p class="rs txt-time">Giá khuyến mại: <span
                                 class="txt-red"><?=$value['sale_price']?></span></p>
                                 <?php } ?>
                                    <p class="rs txt-time">Mã tour: <span
                                 class="txt-red">M-HTN </span></p>
                                    <div class="txt-cont">
                                        <?=$value['details']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } ?>
            </div>
        </div>
    </div>
</div>