<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2//common/bnc_position_adv_adv_9.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<?php if(is_array($web['adv']['adv_9'])) { foreach($web['adv']['adv_9'] as $k => $v) { ?>

<?php if($v['type']=='image') { ?>
<a href="<?=$v['link_GA']?>" title="<?=$v['title']?>">
<img <?php  echo  loadImage($v['img'],'crop',$v['width'],$v['height'],true); ?>alt="<?=$v['title']?>"/>
</a>
<?php } elseif($v['type']=='flash') { ?>
<a href="<?=$v['link_GA']?>" title="<?=$v['title']?>">
<object width="<?=$v['width']?>" height="<?=$v['height']?>" data="<?=$v['flash']?>"></object>
</a>
<?php } elseif($v['type']=='text') { ?>
<a href="<?=$v['link_GA']?>" title="<?=$v['title']?>">
<p class="content"><?=$v['short']?></p>
<div><?=$v['content']?></div>
</a>
<?php } else { ?>
<?=$v['code_adv']?>
<?php } ?>

<?php } } ?>
