<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22//news/news.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style type="text/css">
  .home-video{
    display: none;
  }
</style>
<section class=" news news-page">
  <div class="my-container">
      <div class="title-block">
          <h2>Tin tức - Cộng đồng</h2>
        </div>
        
        
          <?php include $_B['temp']->load('news/news_page_news_list') ?>
          
            
    <div style="clear:both"></div>

        
    </div>
</section>