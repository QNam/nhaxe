<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/12/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="content home-box1" style="margin-bottom:20px;margin-top:10px;">
<div class="container">
    <div class="row">
        <?php $t = 0 ?>
        <?php if(is_array($data)) { foreach($data as $k => $v) { ?> 

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 bannernews">
                <?php if(!empty($v['image_slide'])) { ?>
                <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?> 
                <a target="_blank" href="<?=$v2['link']?>">
                    <img <?php  echo loadImage($v2['src_link'],'none','1170','500',true); ?>style="width: 100%" class="img-responsive" alt="<?=$v2['title']?>">
                </a>
                <?php } } ?>
                <?php } ?>
            </div>
          <?php $t++ ?>
        <?php } } ?>
        <div class="col-md-4">
                <div class="">
                    <h3 style="margin-top: 44px; padding-bottom: 0px; display: none;"><img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/images/booking.png" style="width: 45px; height: 45px; margin-right: 10px;" alt="">
                        <span class="title"><?php echo lang('booking');?></span></h3>
                </div>
                <div class="route-list datve-home" style="margin-top: 0px">
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

                            <div class="col-xs-12 hide">
                                <label for="vehicleType" class="label-cus">Loại xe</label>
                                <select name="vehicleType" id="vehicleType" class="form-control">
                                </select>
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
</div>
</div>
<style type="text/css">
    .datve-home .col-md-12{
        padding: 0px;
    }
</style>