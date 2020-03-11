<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//common/bnc_position_adv_adv_1.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(is_array($web['adv']['adv_1'])) { foreach($web['adv']['adv_1'] as $k => $v) { ?>
<div class="adv1">
<?php if($v['type']=='image') { ?>
<a class="adv-left" href="<?=$v['link_GA']?>" title="<?=$v['title']?>">
<img <?php  echo loadImage($v['img'],'none','100','200',true); ?>width='100%' alt="<?=$v['title']?>"/>
</a>
<?php } elseif($v['type']=='flash') { ?>
<a href="<?=$v['link_GA']?>" title="<?=$v['title']?>">
<object width="<?=$v['width']?>" height="<?=$v['height']?>" data="<?=$v['flash']?>"></object>
</a>
<?php } elseif($v['type']=='text') { ?>
<a href="<?=$v['link_GA']?>" title="<?=$v['title']?>">
<p><?=$v['short']?></p>
<div><?=$v['content']?></div>
</a>
<?php } else { ?>
<?=$v['code_adv']?>
<?php } ?>
</div>
<?php } } ?>