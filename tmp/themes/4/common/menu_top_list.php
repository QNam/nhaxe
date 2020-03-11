<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/4//common/menu_top_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style>
    .dropdown-menu-item {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 185px;
        padding: 5px 10px;
        margin: 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #c62828;
    }
</style>
<li class="mainmenu-level-item">
    <a href="<?=$v['link']?>" title="<?=$v['namemenu']?>"><?=$v['namemenu']?></a>
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