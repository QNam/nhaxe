<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container">
  <div class="row">
    <h2 class="title-bottom"><?php echo lang('news_new');?></h2>
    <div class="f-center-body">
      <ul class="list-news clearfix">
        <?php $i=0 ?>
        <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
        <?php if($i < 8) { ?>
        <li class="item-news-home">
          <div class="img clearfix">
            <a title="<?=$v['title']?>" href="<?=$v['link']?>">
              <a href="<?=$v['link']?>" title=""> <img <?php  echo loadImage($v['img'],'none','570','290',true); ?>class="img-responsive" alt="<?=$v['title']?>" /> </a>
            </a>
          </div>
          <div class="title">
            <a title="Title" href="<?=$v['link']?>"><?=$v['title']?></a>
          </div>
          <div class="news-recap clearfix"><?php echo cutString($v['short'],0,100); ?></div>
        </li>
        <?php } ?>
        <?php $i++ ?>
        <?php } } ?>
      </ul>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
