<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/10//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><li class="<?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>rd-navbar--has-dropdown rd-navbar-submenu<?php } ?>"><a href="<?=$v['link']?>"><?=$v['namemenu']?></a><span class="rd-navbar-submenu-toggle"></span>
<?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>
<ul class="rd-navbar-dropdown">
<?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v2) { ?>
  		<li><a href="<?=$v2['namemenu']?>"><?=$v2['namemenu']?></a>
  	<?php } } ?>
  
</ul>
<?php } ?>
</li>