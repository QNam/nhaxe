<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/28/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="av-info-news " style="display: none;">
    <div class="container">
        <div class="wrap_news row">
            <div class="div_title">
                <h2>Tin tức & sự kiện</h2></div>
            <div id="slider_new2" class="w_effect_up">
                <div class="item">
                    <?php $i=0 ?>
                    <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
                    <?php if($i < 4) { ?>
                    

                    <div class="w-item col-md-3">
                        <div class="i-image" >
                            <a  href="<?=$v['link']?>">
                              <img <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt="<?=$v['title']?>" />
                              
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

