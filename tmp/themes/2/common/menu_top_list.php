<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><li <?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>class="rd-navbar--has-dropdown rd-navbar-submenu"<?php } ?>>
                                                <a href="<?=$v['link']?>"><?=$v['namemenu']?></a>
                                                <?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>
                                                <ul class="rd-navbar-dropdown">
                                                     <?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v2) { ?>
                <?php include $_B['temp']->load('common/menu_top_list_list') ?>
                <?php } } ?>

                                                   
                                                </ul>
                                                <span class="rd-navbar-submenu-toggle"></span>
                                                <?php } ?>
                                            </li>

 