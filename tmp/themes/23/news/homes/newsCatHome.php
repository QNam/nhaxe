<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/23/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="av-info-news "">
    <div class="i-news">
        <div class="wrap_news">
            <div class="div_title">
                <h2><?=$data['content']['home_cat']['0']['title']?></h2></div>
            <div id="slider_new2" class="w_effect_up">
                <div class="item row">
                    <?php $i=0 ?>
                    <?php if(is_array($data['content']['home_cat']['0']['content_news'])) { foreach($data['content']['home_cat']['0']['content_news'] as $k => $v) { ?>
                    <?php if($i < 4) { ?>
                    

                    <div class="w-item col-md-6">
                        <div class="i-image" >
                            <a  href="<?=$v['link']?>">
                              <img <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt="<?=$v['title']?>" />
                              <span class="date"><meta itemprop="datePublished" content="<?=$v['create_time']?>" /><span><?=$v['create_day']?></span><?=$v['create_md']?></span>
                            </a>
                        </div>
                        <div class="i-desc">
                            <div class="w-desc">
                                <div class="i-title">
                                    <h3 itemprop="headline"><a href="<?=$v['link']?>"><?=$v['title']?></a></h3></div>
                                <div class="i-content" itemprop="description"><?php echo cutString($v['short'],0,75); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php $i++ ?>
                    <?php } } ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="av-info" style="height: 484px;">
        <div class="div_title">
            <h2><?=$data['content']['home_cat']['1']['title']?></h2></div>
            <div class="list_info">
           		<div id="slider_new2" class="w_effect_up">
                <div class="item row">
                    <?php $i=0 ?>
                    <?php if(is_array($data['content']['home_cat']['1']['content_news'])) { foreach($data['content']['home_cat']['1']['content_news'] as $k => $v) { ?>
                    <?php if($i < 4) { ?>
                    

                    <div class="w-item col-md-6">
                        <div class="i-image" >
                            <a  href="<?=$v['link']?>">
                              <img <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt="<?=$v['title']?>" />
                              <span class="date"><meta itemprop="datePublished" content="2018-02-21" /><span>21</span>02/2018</span>
                            </a>
                        </div>
                        <div class="i-desc">
                            <div class="w-desc">
                                <div class="i-title">
                                    <h3 itemprop="headline"><a href="<?=$v['link']?>"><?=$v['title']?></a></h3></div>
                                <div class="i-content" itemprop="description"><?php echo cutString($v['short'],0,75); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php $i++ ?>
                    <?php } } ?>
                    
                </div>
            </div>
            </div>
    </div>
    <div class="clear"></div>
</div>

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

