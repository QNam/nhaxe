<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/11/news/homes/newsHot.php
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
<section class="section-80 section-lg-top-90 section-lg-bottom-120">
  <div class="shell text-sm-left">
    
    <div class="sectionTitle">
          <h2><span class="lightBg"><?php echo lang('news_hot');?></span></h2>
      </div>
    <div class="range text-left range-xs-center offset-top-50">

      <?php $i=0 ?>
        <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
            
            <div class="cell-xs-8 cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0"><a class="thumbnail-classic" href="<?=$v['link']?>" target="_self">
                  <figure><img width="370" height="250" <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt="">
                    <figcaption class="thumbnail-classic-caption text-center"><span class="icon icon-xxs fa-arrow-right"></span>
                      <h6 class="thumbnail-classic-title offset-top-0 text-uppercase text-light"><?php echo cutString($v['title'],0,25); ?></h6>
                    </figcaption>
                  </figure></a>
            </div>
        <?php $i++ ?>
        <?php } } ?>
      
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
