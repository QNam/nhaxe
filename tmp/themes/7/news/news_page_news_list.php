<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/7//news/news_page_news_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="row">
<?php if(isset($data['content']['news'])) { ?>

<?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
<div class="col-md-6 item-post">
    <div class="thumbnail">
        <a href="<?=$v['href']?>">
            <img <?php  echo loadImage($v['img'],'crop','570','290',true); ?>class="img-responsive" style="width:100%" alt="Image">
        </a>
    </div>
    <div class="caption">
        
            <h3><a href="<?=$v['href']?>"><?=$v['title']?> </a></h3>
       

        <p><?php echo cutString($v['short'],0,200); ?></p>
    </div>
</div>
<?php } } ?>
    <?php include $_B['temp']->load('news/news_pagination') ?>
<?php } else { ?>
<?php echo lang('no_record_exists');?>
<?php } ?>
</div>