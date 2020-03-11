<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22//info/info_details.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><section class="post-page">
<div class="my-container">
    	<div class="title-block">
        	<h1 ><?=$data['content']['infoDetail']['title']?></h1>
        </div>
            <article class="post-content">
            <?=$data['content']['infoDetail']['details']?>
            </article>
            
    </div>
</section>

