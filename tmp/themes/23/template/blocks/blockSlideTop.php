<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/23/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php $t = 0 ?>
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
        <div class="main-wrap pr">
            <div class="search-wrap pr clearfix">
                <div class="tab-content">
                    <div id="bus-search-box " class="wow fadeIn animated animated" data-wow-duration="100ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 100ms; animation-delay: 100ms; animation-name: fadeIn; display: block;">
                        <div class="col-sm-12 title"><span>Tìm chuyến đi</span></div>
                        <form action="dat-ve" id="search-form ">
                            <div class="row pr" id="Bus-search-panel-box-div">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="startPoint" >Điểm đi</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-map-marker"></i>
                                            <input type="text" class="form-control" name="startPoint" id="startPoint" readonly>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="Bus swap">
                                    <div class="form-group">
                                        <a><i class="fa icon-switch"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="endPoint" >Điểm đến</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-map-marker"></i>
                                            <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 selectDateD">
                                    <div class="form-group">
                                        <label for="depatureDate" >Ngày đi</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-calendar"></i>
                                            <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-3 selectDateD">
                                    <div class="form-group">
                                        <label for="depatureDate" class="label-cus">Ngày về</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-calendar"></i>
                                            <input type="text" class="form-control datepicker" name="returnDate" id="returnDate" disabled readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group">
                                        <div class="search-btn">
                                            <input type="hidden" name="returnDate">
                                            <input type="hidden" id="startId" name="startId">
                                            <input type="hidden" id="endId" name="endId">
                                            <input type="hidden" id="isRoundTrip" name="isRoundTrip">
                                            <button type="submit" class="btn btn-orange" id="search-btn">Tìm kiếm xe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div> 
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