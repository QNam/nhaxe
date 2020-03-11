<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/20//album/detail.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<div class="container bg-3">
    <div class="news-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
                <li class="breadcrumb-item"><a href="<?=$v['href']?>"><?=$v['text']?></a> <i class="fa fa-caret-right"></i></li>
                <?php } } ?>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="news-title">
                <h3><?=$data['content']['title']?></h3>
                
            </div>
            <div class="news-content row">
                <?php if(isset($data['content']['albumImages'])) { ?>
                    <div class="galleria ">
                        <?php if(is_array($data['content']['albumImages'])) { foreach($data['content']['albumImages'] as $k => $v) { ?>
                        <div class="col-md-4" >
                          <div class="item-album" style="padding-bottom: 15px; height: 250px;">
                           
                            <a class="fancybox" rel="gallery<?=$k?>" href='<?php  echo loadImage($v['src_link'],'none','100','78'); ?>'title="<?=$v['title']?>">
                                <img <?php  echo loadImage($v['src_link'],'none','100','78',true); ?>alt=""  style="max-height: 100%; width: 100%"/>
                            </a>
                          </div>
                        </div>
                        <?php } } ?>
                    </div>
                    <?php } ?>
                    <div class="col-md-12">
                      <?=$data['content']['title']?>
                    </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

</div>
</div>
</div>
<style type="text/css">
    .main-wrap{
        padding-top: 20px;
    }
</style>
<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $(".news-title").offset().top
        },1000);
    });

    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect  : 'none',
            closeEffect : 'none'
        });
    });
</script>
