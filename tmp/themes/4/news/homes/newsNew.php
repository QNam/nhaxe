<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/4/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="row" style="margin-left: 0;margin-right: 0;">
    <div class="title">
        <h3><?php echo lang('news_new');?></h3>
    </div>

  <div class="box-news clearfix">
    <div class="carousel slide" id="carouselInformation">
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <ul class="thumbnails clearfix">
              <?php $i=0 ?>
              <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
              <?php if($i < 4) { ?>
              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="<?=$v['link']?>">
                      <img alt="<?=$v['title']?>"
                           <?php  echo loadImage($v['img'],'resize','570','290',true); ?>style="height: 170px;" class="img-responsive">
                    </a>
                  </div>

                  <div class="caption">
                    <a href="<?=$v['link']?>">
                      <h4><?=$v['title']?></h4>
                    </a>

                    <p><?php echo cutString($v['short'],0,100); ?></p>
                  </div>
                </div>
              </li>
              <?php } ?>
              <?php $i++ ?>
              <?php } } ?>
            </ul>
          </div>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>
<style>
  .thumbnail {
    padding: 0;
  }
</style>