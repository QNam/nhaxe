<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/12//common/menu_top_responsive.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><nav class="navbar navbar-expand-lg">
    <button class="btn btn-nav" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-list"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <?php $i = 0 ?>
        <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>

            <?php if($i < 9) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=$v['link']?>" title="<?=$v['namemenu']?>"><?=$v['namemenu']?></a>
            </li>
            <?php } ?>

        <?php $i++ ?>
        <?php } } ?>
        </ul>
    </div>
</nav>