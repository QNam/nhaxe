<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/12/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<div class="content home-box" style="margin-bottom: 50px;">
  <div class="container">
    <div class="" style="padding-top:20px;">
      <h2 style="margin-top: 0px;"><?php echo lang('news_new');?></h2>
      <div class="slide-box">
          <ul class="" id="slide-box">
            <?php $i=0 ?>
            <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
              <li>
                <div class="slide-item">
                    <img class="img-responsive" <?php  echo loadImage($v['img'],'none','570','290',true); ?>>
                    
                    <div class="slide-item-readmore">
                        <?=$v['title']?>
                        <a href="<?=$v['link']?>">Chi tiết</a>
                    </div>
                    <div class="slide-item-info">
                      <?php echo cutString($v['short'],0,200); ?>
                    </div>
                </div>
              </li>
            <?php $i++ ?>
            <?php } } ?>
          </ul> 

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
 
  $("#slide-box").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
</script>