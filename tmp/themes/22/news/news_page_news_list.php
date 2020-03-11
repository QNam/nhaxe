<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22//news/news_page_news_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><ul class="news-container">
<?php if(isset($data['content']['news'])) { ?>

<?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
<li class="item">
<a href="<?=$v['href']?>">
  <div class="img-container">
      <img <?php  echo loadImage($v['img'],'none','570','290',true); ?>>
    </div>
    <h3><?=$v['title']?></h3>
</a>
    <p><?php echo cutString($v['short'],0,200); ?></p>               
</li>

<?php } } ?>
    <?php include $_B['temp']->load('news/news_pagination') ?>
<?php } else { ?>
<?php echo lang('no_record_exists');?>
<?php } ?>
</ul>