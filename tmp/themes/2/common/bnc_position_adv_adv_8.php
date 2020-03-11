<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2//common/bnc_position_adv_adv_8.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(is_array($web['adv']['adv_8'])) { foreach($web['adv']['adv_8'] as $k => $v) { ?><?php if($v['type']=='image') { ?><div id="rich-media"><div id="rich-media-item"><div class="click"><span id="hide" title="Ẩn đi"><i class="fa fa-minus"></i></span><span id="show" title="Hiện Lên"><i class="fa fa-plus"></i></span><span id="close" title="Tắt đi"><i class="fa fa-remove"></i></span></div><a href="<?=$v['link_GA']?>" title="<?=$v['title']?>"><img <?php echo loadImage($v['img'],'none','100','200',true); ?>alt="<?=$v['title']?>"/></a></div></div><?php } elseif($v['type']=='flash') { ?><!--<?php } else { ?><?=$v['code_adv']?><?php } ?><?php } } ?>