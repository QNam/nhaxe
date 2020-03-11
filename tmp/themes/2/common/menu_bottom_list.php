<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2//common/menu_bottom_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><li class="col-lg-3 col-md-4 col-sm-4 col-xs-4"><a href="<?=$v['link']?>" ><?=$v['namemenu']?></a><?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?><ul><?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v) { ?><?php include $_B['temp']->load('common/menu_bottom_list') ?><?php } } ?></ul><?php } ?></li>