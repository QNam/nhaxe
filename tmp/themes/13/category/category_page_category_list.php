<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/13//category/category_page_category_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($data['content']['category'])) { ?>
<ul class="f-news-page">
  <?php if(is_array($data['content']['category'])) { foreach($data['content']['category'] as $k => $v) { ?>
  <li class="f-news-page-item row">

        <div class="f-news-page-item-text col-md-9">
          <h2><a href="<?=$v['href']?>" title=""><?=$v['title']?></a></h2>
          <div class="f-news-page-item-summary"><?=$v['short']?></div>
          <div class="f-read-more pull-right"><a href="<?=$v['href']?>"><span class="label label-category">đọc tiếp...</span></a></div>
        </div>
      </li>
      <?php } } ?>
    </ul>
    <?php } else { ?>
    <ul class="f-news-page">
      <li class="f-news-page-item row">
        <?php echo lang('no_record_exists');?>
      </li>
    </ul>
<?php } ?>