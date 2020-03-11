<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22//info/info_page_info_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($data['content']['info'])) { ?>
    <?php if(is_array($data['content']['info'])) { foreach($data['content']['info'] as $k => $v) { ?>
    <div class="item">                    
        <a href="<?=$v['href']?>"> 
            <div class="img-container">
                <img <?php  echo loadImage($v['thumb'],'none','null','null',true); ?>/>
            </div>
            <h3><?=$v['title']?></h3>
        </a>
                      
    </div>
    
    <?php } } ?>
<?php } else { ?>
<?php echo lang('no_record_exists');?>
<?php } ?>