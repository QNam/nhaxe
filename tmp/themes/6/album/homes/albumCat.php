<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1/album/homes/albumCat.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?> 
<?php if(!empty($data['content']['home_cat'])) { ?>
  <?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $key => $value) { ?>
    <?php if(!empty($value['content_album'])) { ?>
    <div class="f-center-module tab-hot">
      <div class="f-center-title "> 
        <span class="first"><?=$value['title']?></span>    
        <?php if(!empty($value['sub'])) { ?>
        <ul class="f-pr-tab-home-cate nav-tabs">
                <?php $i = 1 ?> 
                <?php if(is_array($value['sub'])) { foreach($value['sub'] as $k => $v) { ?>
                  <li>                    
                    <a href="#f-pr-cate01-tab0<?=$i?>" data-toggle="tab" id="<?=$v['id']?>" data-id="<?=$web['home_url']?>" class="videotab"><?=$v['title']?></a>
                  </li>
                <?php $i++ ?>
                <?php } } ?> 
        </ul>
        <?php } ?>
      </div>
      <div class="f-center-body">
        <div class="clearfix"></div>
        <div class="tab-content">
          <?php $content_album = $value['content_album'] ?>
          <?php include $_B['temp']->load_block('homes/albumItem','album') ?>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <?php } ?>
  <?php } } ?>
<?php } ?>

<script src="<?=$web['static_temp_mod']?>/resource/js/jsajax.js" type="text/javascript"></script>

<script>
$(document).ready(function() {
   jsajax.init();
});
</script>
<style type="text/css">
.loadding
{
  height: 150px;
  width: 100%;
  position: relative;
}
.loadding img
{
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}
</style>