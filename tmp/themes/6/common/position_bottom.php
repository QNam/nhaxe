<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//common/position_bottom.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="hidden-xs">
  <?php  include $_B['temp']->printposAd("adv_8"); ?>
</div>
<script> 
jQuery(function ($) { 
    $('#show').hide();
    $('#close').click(function (e) {
      $('#rich-media').hide('slow');
      return false;
    });
    $('#hide').click(function (e) {
      $('#show').show('slow');
      $('#hide').hide('slow');
      $('#rich-media-item').height(0);
      return false;
    });
    $('#show').click(function (e) {
      $('#hide').show('slow'); 
      $('#show').hide('slow');
      $('#rich-media-item').height(205);
      return false;
   });
});
</script>
<div class="container">
<!--temp block/block_bottom_category_custom-->
</div>
<!--FOTER-->
<div class="f-footer">
  <div class="f-footer-content ">
      <div class="main-footer container">
        <div class="row">
          <div class="content-footer">
            <div class="col-md-12 col-sm-12 col-xs-12 row">   
              <div class="box-info-footer">
                
                <div class="content-info-footer col-md-12">
                  <?=$web['footer']?>
                </div>
                
              </div>
            </div>
            <div class="dk col-md-3 col-sm-4 col-xs-12">
            </div>
          </div>
        </div><!--end row-->
      </div><!--end main-footer-->

      <div class="main-footer-info">   
        <div class="container">       
          
        </div> 
      </div><!--end main-fotter info-->
   
      <div class="clearfix"></div>
      <div class="container no-padding">
        <div class="copyright col-md-12 col-sm-12 col-xs-12">
        
          <div class="v2-gotop stylegotop">
<a class="lentop">
<i class="fa fa-arrow-circle-o-up "></i>
</a>
</div>
        
        </div>
      </div>
  </div><!--end footer content-->

  <div class="clearfix"></div>

  
</div><!--end footer-->
<?php if($web['audio'] != null) { ?>  
<audio controls autoplay<?php if($web['audio']['play_again'] == 1) { ?> loop<?php } ?> style="display:none">
    <source src="<?=$web['static_upload']?><?=$web['audio']['audio']?>" type="audio/mpeg">  
</audio> 
<?php } ?> 
<script type="text/javascript" src="<?=$web['static_temp_mod_product']?>/resource/js/product.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('body').data('home_url', '<?=$web['home_url']?>');
        //$('body').data('page_url', '<?=$data['content']['B']['curUrl']['fullLink']?>');
        $('body').data('extension', '<?=$web['dotExtension']?>');
        Product.init();
        WebCommon.init();
       // alert("-Golbal aler- "+$('body').data('home_url'));

       $('.lentop').click(function(){
        $('html, body').animate({ scrollTop: 0 }, 'fast');
       });
    });

</script> 