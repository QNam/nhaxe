<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//info/info_page_info_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($data['content']['info'])) { ?>
<ul class="f-news-page">
    <?php if(is_array($data['content']['info'])) { foreach($data['content']['info'] as $k => $v) { ?>
        <li class="f-news-page-item row">
            <div class="f-news-page-item-img col-md-2 col-sm-3 col-xs-12"> 
                <a href="<?=$v['href']?>" class="thumbnail" title=""> 
                <img <?php  echo loadImage($v['thumb'],'none','null','null',true); ?>class="img-responsive"  alt="<?=$v['title']?>"/> </a> 
            </div>
            <div class="f-news-page-item-text col-md-10 col-sm-9 col-xs-12">
                <h2 style="display:block;margin-bottom:10px;"><a href="<?=$v['href']?>" title=""><?=$v['title']?></a></h2>
                <div class="f-news-page-item-summary"><?=$v['short']?></div>
                <div class="f-read-more pull-right">
                    <a href="<?=$v['href']?>"><span class="label label-info"><?php echo lang('read_more');?>...</span></a>
                </div>
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