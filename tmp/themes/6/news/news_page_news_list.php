<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//news/news_page_news_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($data['content']['news'])) { ?>

<ul class="f-news row"> 
          <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?> 
          <li class="col-md-6 col-sm-6 col-xs-6 full-xs">
            <div class="f-news-item" style="padding: 0px;">
              <div class="f-news-item-img"> <a href="<?=$v['href']?>" title=""> <img <?php  echo loadImage($v['img'],'crop','570','290',true); ?>class="img-responsive" alt="<?=$v['title']?>" /> </a>

              </div>
              <div class="f-news-item-title">
              
                <h3> <a title="Title" href="<?=$v['href']?>"><?=$v['title']?></a> </h3>
              </div>
            </div>

            <div class="f-new-item-sum"><?php echo cutString($v['short'],0,200); ?></div>
          </li>  
          <?php } } ?>
           
        </ul>


 
<div class="clearfix"></div>
<?php include $_B['temp']->load('news/news_pagination') ?>
<?php } else { ?>
<ul class="f-news-page">
  <li class="f-news-page-item row">
    <?php echo lang('no_record_exists');?>
  </li>
</ul>
<?php } ?>