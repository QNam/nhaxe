<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/10/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><section class="bg-lightest section-skew">
  <div class="skew-block"></div>
  <div class="shell text-md-left">
    <h2>Tin Tức</h2>
    <hr class="divider divider-lg bg-primary hr-md-left-0">
    <div class="range text-md-left offset-top-50 range-xs-center">
      <?php $i=0 ?>
      <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
      <?php if($i < 3) { ?>
      <div class="cell-sm-8 cell-md-4">
        <article class="post-news"><a class="thumbnail-default" href="blog-post-page.html" target="_self">
                    <figure><img class="img-responsive" width="370" height="270" <?php  echo loadImage($v['img'],'none','570','290',true); ?>alt=""></figure><span class="icon icon-xxs fa-link"></span></a>
          <div class="offset-top-10">
            <h5 class="text-primary text-bold"><a class="post-news-title" href="<?=$v['link']?>"><?=$v['title']?></a></h5>
          </div>
          <div class="offset-top-15">
            <div class="post-meta"><span class="icon icon-xxs fa-calendar text-gray text-middle"></span>
              <time class="text-gray inset-left-5 text-middle" datetime="2018-01-01"><?=$v['create_time']?></time>
            </div>
          </div>
          <p><?php echo cutString($v['short'],0,100); ?></p>
        </article>
      </div>
      <?php } ?>
      <?php $i++ ?>
      <?php } } ?>
    </div>
  </div>
</section>