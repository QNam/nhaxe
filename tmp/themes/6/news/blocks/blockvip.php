<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//news/blocks/blockvip.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?> <div class="f-block hiddenblock ">
  <div class="f-block-title stlyeblocktitle"> <i></i><span><?=$block['title']?></span> </div>
  <div class="f-block-body" >
    <ul class="f-news-bl owl-carousel hidenut owl-demo-5" id="owl-demo-5">
       <?php $i = 0 ?>
      <?php if(is_array($data)) { foreach($data as $k => $v) { ?>
      <?php if($i < 2) { ?>
      <li>
        <div class="f-news-bl-item boxstylevip">
          <div class="f-news-bl-item-img stylevip "> <a href="<?=$v['link']?>" title="<?=$v['title']?>"> <img <?php  echo loadImage($v['img'],'crop','250','191',true); ?>class="img-responsive" alt="<?=$v['title']?> "/> </a> </div>
          <div class="f-news-bl-item-title ">
            <h3> <a title="<?=$v['title']?>" href="<?=$v['link']?>"><?=$v['title']?></a> </h3>
            <p><?=$v['short']?></p>
            <a href="<?=$v['href']?>"><span class="label label-info"><?php echo lang('read_more');?> →</span></a>
          </div>
        </div>
      </li>
       <?php $i++ ?>
      <?php } ?>
      <?php } } ?> 
    </ul>
  </div>
</div>

 <script>
          $(document).ready(function() {

            var owl = $("#owl-demo-5");

            owl.owlCarousel({

            items : 1, //10 items above 1000px browser width
            itemsDesktop : [1000,1], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
            itemsTablet: [768,1], //2 items between 600 and 0;
            itemsMobile : [480,1], // itemsMobile disabled - inherit from itemsTablet option
autoPlay:true,
            
            });

            // Custom Navigation Events
            // $(".next-<?=$value['id']?>").click(function(){
            //   owl.trigger('owl.next');
            // })
            // $(".prev-<?=$value['id']?>").click(function(){
            //   owl.trigger('owl.prev');
            // })


          });
        </script>