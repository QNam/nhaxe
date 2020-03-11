<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/8/news/homes/newsHot.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style>
    .padding-news {
        padding-left: 0;
        padding-right: 0px;
        width: 63%;
    }

    .padding-news-item {
        /*padding-left: 0;*/
        padding-right: 0;
        width: 37%;
    }

    .padding-item {
        padding-right: 10px;
        padding-left: 10px;
    }


</style>
<div class="row" style="display: none;">
    <div class="col-md-8" style="margin-bottom: 30px;padding-right: 0;">
        <div class="">
            <h3><img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/images/news.png" style="width: 40px; height: 40px; margin-right: 10px;" alt="">
                <span class="title"><?php echo lang('news_hot');?></span></h3>
        </div>
        <div class="hot-news">
            <div class="col-md-8 padding-news">
                <div class="image-news">
                    <a href="<?=$data['content']['news']['0']['link']?>">
                        <img <?php  echo loadImage($data['content']['news'][0]['img'],'resize','570','290',true); ?>class="img-responsive" style="    height: 340px;
    padding-right: 10px;
    padding-top: 5px;" alt="<?=$data['content']['news']['0']['title']?>">
                    </a>
                </div>
                <div class="content">
                    <h3>
                        <a href="<?=$data['content']['news']['0']['link']?>"><?=$data['content']['news']['0']['title']?></a>
                    </h3>
                    <div class="description">
                        <?php echo cutString($data['content']['news'][0]['short'],0,200); ?>
                    </div>
                </div>
            </div>
            <style>
                .news-img {
                    height: 80px;
                }

                .item-news {
                    margin: 5px 0 5px 0;
                    height: 90px;
                }
            </style>
            <div class="col-md-4 padding-news-item">
                <?php $i=0 ?>
                <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
                    <?php if($i > 0 && $i <= 5) { ?>
                    <div class="row item-news">
                        <a href="<?=$v['link']?>">
                            <div class="col-md-6 padding-item">
                                <img <?php  echo loadImage($v['img'],'crop','570','290',true); ?>class="img-responsive news-img" alt="<?=$v['title']?>">
                            </div>
                            <div class="col-md-6 padding-item">
                                <p style="font-size: 12px;margin-top: 0;"><?=$v['title']?></p>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                <?php $i++ ?>
                <?php } } ?>
            </div>
        </div>
    </div>
    <div class="col-md-4" style="margin-bottom: 30px;">
        <div class="">
            <h3><img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/images/booking.png" style="width: 45px; height: 45px; margin-right: 10px;" alt="">
                <span class="title"><?php echo lang('booking');?> dfsdfds</span></h3>
        </div>
        <div class="route-list">
            <form action="dat-ve" id="search-form">
                <div class="row chonchieu">
                    <button type="button" class="btn btn-oder selectday selected" id="oneway">Một chiều</button>
                    <button type="button" class="btn btn-oder selectday" id="roundtrip">Khứ hồi</button>
                </div>
                <div class="row" style="margin-bottom: -15px;">
                    <div class="clearfix">
                        <div class="col-md-12">
                            <label for="startPoint" class="label-cus">Điểm đi</label>
                            <input type="text" class="form-control" name="startPoint" id="startPoint" readonly>
                        </div>
                        <div class="col-md-12">
                            <label for="endPoint" class="label-cus">Điểm đến</label>
                            <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                        </div>
                    </div>

                    <div class="clearfix">
                        <div class="col-md-12">
                            <label for="depatureDate" class="label-cus">Ngày đi</label>
                            <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                        </div>
                        <div class="col-md-12">
                            <label for="depatureDate" class="label-cus">Ngày về</label>
                            <input type="text" class="form-control datepicker" name="returnDate" id="returnDate" readonly>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" id="startId" name="startId">
                            <input type="hidden" id="endId" name="endId">
                            <button type="submit" class="btn" id="search-btn">TÌM CHUYẾN XE</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>