<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//layout/layout_left_body.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php include $_B['temp']->load('common/position_top') ?>    
<div class=" container mainchild"  >
  <div class="f-container">
  <div class="row row-offcanvas row-offcanvas-left">
    
    <div class="f-ctn-center col-md-12 col-xs-12 col-sm-12 main1">
      
        <?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
        <div class="clear"></div>
    </div><!--end f-ctn-center-->
  </div><!--end row offcanvas-->
</div>
</div>
<?php include $_B['temp']->load('common/position_bottom') ?>