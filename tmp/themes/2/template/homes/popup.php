<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2/template/homes/popup.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="popup_qc">
  <div class="popup_close">X</div>
  <?php if(is_array($data['content']['slides'])) { foreach($data['content']['slides'] as $k => $v) { ?> 
  <?php if(!empty($v['image_slide'])) { ?>
  <?php $image_slide = $v['image_slide'] ?>
  <?php if(is_array($image_slide)) { foreach($image_slide as $key => $val) { ?> 
  <a href="<?=$val['link']?>">
    <img src="<?=$val['thumb']?>" class="img-responsive" alt="<?=$v['title']?>" />
  </a>
  <?php } } ?>
  <?php } ?>
  <?php } } ?> 
</div>
<script type="text/javascript">
$(".popup_close").click(function (e) {
 $(".popup_qc").remove();
});
</script>