<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/26//news_page_news_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($data['content']['news'])) { ?>
<ul class="f-news-page">
  <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
  <li class="f-news-page-item row">
    <div class="f-news-page-item-img col-md-3"> 
      <a href="<?=$v['href']?>" class="thumbnail" title=""> 
        <img src="<?=$v['thumb']?>"  alt=""/> 
      </a> 
    </div>
    <div class="f-news-page-item-text col-md-9">
      <h2><a href="<?=$v['href']?>" title=""><?=$v['title']?></a></h2>
      <div class="f-news-page-item-summary"><?=$v['short']?></div>
      <div class="f-read-more pull-right">
        <a href="<?=$v['href']?>"><span class="label label-info"><?php echo lang('read_more');?>...</span></a>
      </div>
    </div>
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