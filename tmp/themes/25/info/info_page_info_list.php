<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/25//info/info_page_info_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($data['content']['info'])) { ?>
<div class="info-list">
    <?php if(is_array($data['content']['info'])) { foreach($data['content']['info'] as $k => $v) { ?>
    <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-12" style="margin-bottom: 20px;">
            <a href="<?=$v['href']?>" class="thumbnail">
                <img <?php  echo loadImage($v['thumb'],'none','null','null',true); ?>class="img-responsive" style="width:100%"
                     alt="<?=$v['title']?>">
            </a>
        </div>
        <div class="col-md-10 col-sm-9 col-xs-12">
            <h3 style="margin-top: 0px;"><a href="<?=$v['href']?>" style="color: #ff5115;"><?=$v['title']?></a></h3>
            <div class="caption">
                <?=$v['short']?>
            </div>
            <div class="pull-right">
                <a href="<?=$v['href']?>">
                    <span class="label label-info"><?php echo lang('read_more');?>...</span>
                </a>
            </div>
        </div>
    </div>
    <?php } } ?>
</div>
<?php } else { ?>
<?php echo lang('no_record_exists');?>
<?php } ?>