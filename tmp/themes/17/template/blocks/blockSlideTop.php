<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/17/template/blocks/blockSlideTop.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(is_array($data)) { foreach($data as $k => $v) { ?> 
<div class="section section7 " >
  <div class="block bock-fkb  box-block7">
     <div class="box-slider7">
        <div class="idetails">
           <div class="scrollbar">
              <div class="track">
                 <div class="thumb">
                    <div class="end"></div>
                 </div>
              </div>
           </div>
           <div class="viewport">
              <div class="overview">
                 <div class="box-galery">
                    <ul class="grid effect-1" id="grid">
                        <?php if(is_array($v['image_slide'])) { foreach($v['image_slide'] as $k2 => $v2) { ?>
                           
                            <li>
                              <a title="" href="javascript:void(0)">
                              <img <?php  echo loadImage($v2['src_link'],'none','1170','500',true); ?>class="gallery-item" onclick="showPopupGallery(81)">
                              </a>
                           </li>
                        <?php } } ?>
                       
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<?php } } ?>