<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/11//common/menu_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
  <ul class="nav navbar-nav navbar-right">


      	<?php $i = 0 ?>
    <?php if(is_array($menu['top'])) { foreach($menu['top'] as $k => $v) { ?>
        <?php if($i < 9) { ?>
            <?php include $_B['temp']->load('common/menu_top_list') ?>
        <?php } ?>
        <?php $i++ ?>
    <?php } } ?> 
      
  </ul>
</div>