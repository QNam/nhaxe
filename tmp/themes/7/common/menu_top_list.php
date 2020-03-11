<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/7//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if($v['icon'] == '') { ?>
<li class="has-sub ">
    <a href="<?=$v['link']?>">
      <span><?=$v['namemenu']?></span>
    </a>
    <?php if(isset($v['sub']) AND count($v['sub']) > 0 ) { ?>
    <ul class="dropdown-menu-item">
        <?php if(is_array($v['sub'])) { foreach($v['sub'] as $k => $v2) { ?>
        <li>
            <a href="<?=$v2['link']?>" title=""><?=$v2['namemenu']?></a>
        </li>
        <?php } } ?>
    </ul>
    <?php } ?>
</li>
<?php } else { ?>
<li class="homeicon active">
    <a href="http://xetuannga.com/index.html">
      <span><img <?php  echo loadImage($v['icon'],'none','331','184',true); ?>alt="logo" class=" hvr-bob"></span>
    </a>
</li>
<?php } ?>