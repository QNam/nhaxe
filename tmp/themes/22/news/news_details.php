<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22//news/news_details.php
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
<section class="post-page">
<div class="my-container">
    <div class="title-block">
        <h1><?=$data['content']['newsDetail']['title']?></h1>
        <p class="date"><?php echo lang('date_posted');?> : <?=$data['content']['newsDetail']['create_time']?></p>
    </div>
    
    <article class="post-content">
    <?=$data['content']['newsDetail']['details']?>
    
    </article>
    
</div>
</section>

<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $(".news-title").offset().top
        },1000);
    });
</script>
