<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/3/news/homes/newsTravel.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<!-- <?php if(!empty($data['content']['news'])) { ?> -->
<div class="row">
    <div class="col-md-12" style="margin-bottom: 30px;">
        <div class="title">
            <h3><?php echo lang('news_travel');?></h3>
        </div>
        <div class="owl-carousel owl-theme travel-list">
            <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
                <div class="col-md-9 item-travel">
                    <a href="<?=$v['link']?>">
                        <div class="image">
                            <img src="<?=$v['thumb']?>" class="img-thumbnail" style="height: 170px;" alt="<?=$v['title']?>">
                            <div class="promotion">
                                <?=$v['label_name']?>
                            </div>
                        </div>
                        <div class="travel-detail">
                            <h5><?=$v['title']?></h5>
                            <div class="row">
                                <?php if(empty($v['sale_price']) && !empty($v['original_price'])) { ?>
                                <div class="col-md-12">
                                    <p class="current-price"><?=$v['original_price']?> VND</p>
                                </div>
                                <?php } elseif(!empty($v['sale_price']) && !empty($v['original_price'])) { ?>
                                <div class="col-md-6">
                                    <p class="old-price"><?=$v['original_price']?> VND</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="current-price"><?=$v['sale_price']?> VND</p>
                                </div>
                                <?php } else { ?>
                                <div class="col-md-12">
                                    <p style="    text-align: center;
                                        font-weight: bold;
                                        font-size: x-large;
                                        color: red;">Liên hệ</p>
                                </div>
                                <?php } ?>
                            </div>
                            <ul class="plant">
                                <?php if(!empty($v['description1'])) { ?>
                                <li><i class="fa fa-clock-o"></i> <span><?=$v['description1']?></span></li>
                                <?php } ?>
                                <?php if(!empty($v['description2'])) { ?>
                                <li><i class="fa fa-calendar"></i> <span><?=$v['description2']?></span></li>
                                <?php } ?>
                                <?php if(!empty($v['description3'])) { ?>
                                <li><i class="fa fa-plane "></i> <span><?=$v['description3']?></span></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </a>
                </div>
            <?php } } ?>
        </div>
    </div>
</div>
<?php } ?>