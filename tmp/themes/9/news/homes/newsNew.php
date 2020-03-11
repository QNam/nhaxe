<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/9/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><section class="well-7">
  <div class="container">
    <h3 class="text-secondary">Tin Tức</h3>
    <hr class="sm sm-default">
  </div>
  <div class="container-fluid bg-primary well-6 blog">
    <div class="row">
      <?php $i=0 ?>
      <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
      <?php if($i < 4) { ?>
      <!-- Item -->
      <div class="col-md-6">
        <article class="row row-no-gutter blog-post">
          <div class="col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-6 bg-image <?php if($i > 1) { ?>pull-sm-right pull-lg-left<?php } ?>" style="background-image: url(<?=$web['static_upload']?>/<?=$v['img']?>)" data-equal-group="1"></div>
          <div class="col-sm-12 col-md-6 text-md-left" data-equal-group="1">
            <div class="blog-post__cnt">
              <h5><?=$v['title']?></h5>
              <hr class="sm sm--inset-2 sm-default">
              <p>
                <?php echo cutString($v['short'],0,100); ?>
              </p>
              <a class="btn-link" href="<?=$v['link']?>" style="color: #fff">Chi tiết</a>
            </div>
          </div>
        </article>
      </div>
      <!-- //Item -->
      <?php } ?>
      <?php $i++ ?>
      <?php } } ?>
    </div>
  </div>
</section>