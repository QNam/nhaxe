<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2/news/homes/newsTab.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container">
<div class="f-center-module">
  <div class="f-center-title"><span><?=$data['config']['title_new']?></span></div>      
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 border-r">
           <ul class=" f-news row">
              <?php $i=0 ?>
              <?php if(is_array($data['new'])) { foreach($data['new'] as $k => $v) { ?>
              <?php if($i < 3) { ?>  
              <li <?php if($i==0) { ?>class="bigfirst"<?php } else { ?>class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "<?php } ?> >
                <div class="f-news-item">
                   <div class="f-news-item-img">
                      <a class="v2-hometab-news-big-img" href="<?=$v['link']?>" title="<?=$v['title']?>"><?php if($i==0) { ?> <img <?php  echo loadImage($v['img'],'crop','448','280',true); ?>class="img-responsive" alt="<?=$v['title']?>" /><?php } else { ?> <img <?php  echo loadImage($v['img'],'crop','570','290',true); ?>class="img-responsive" alt="<?=$v['title']?>" /><?php } ?></a> 
                    </div><!--end f new item img-->
                  
                  
                  <div class="f-news-item-title">
                  
                     <h3><a title="Title" href="<?=$v['link']?>"><?=$v['title']?></a> </h3>
                   <?php if($i==0) { ?> <p><?php echo cutString($v['short'],0,200); ?></p> <?php } ?> 
                  </div>
                </div><!--end f-new item-->
              </li>
              <?php } ?>
              <?php $i++ ?>
              <?php } } ?> 
           </ul>        
        <div class="clearfix"></div>

      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="v2-hometab-news-small">
          <h2><p class="v2-hometab-news-smalltype"><?=$data['config']['title_hot']?></p></h2>
          <ul class="row">
            <?php $i=0 ?>
            <?php if(is_array($data['hot'])) { foreach($data['hot'] as $k => $v) { ?>
            <?php if($i < 4) { ?> 
            <li class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
              <div class="v2-hometab-news-small-item">
                <div class="v2-hometab-news-small-img"> <a href="<?=$v['link']?>" title=""> <img <?php  echo loadImage($v['img'],'crop','250','149',true); ?>class="img-responsive" alt="<?=$v['title']?>" /> </a> 
                  
                  <div class="wrapnewitem">
                      
                  </div><!--end wrapnewitem-->
                      
                </div>
                <div class="v2-hometab-news-small-title">
                  <a title="<?=$v['title']?>" href="<?=$v['link']?>"> <h3><?=$v['title']?></h3></a> 
                  <div class="v2-hometab-news-small-sum"><?php echo cutString($v['short'],0,140); ?></div>
                </div>
              </div>
            </li>
            <?php } ?>
            <?php $i++ ?>
            <?php } } ?> 
          </ul>

         </div>

      </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="v2-hometab-news-vip">
   <h2><p class="v2-hometab-news-smalltype"><?=$data['config']['title_vip']?></p></h2>
   <ul class=" row">
    <?php $i=0 ?>
    <?php if(is_array($data['vip'])) { foreach($data['vip'] as $k => $v) { ?>
              <?php if($i < 4) { ?>
       <li class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <div class="v2-hometab-news-small-item">
              <div class="v2-hometab-news-small-img"> <a href="<?=$v['link']?>" title=""> <img <?php  echo loadImage($v['img'],'crop','250','149',true); ?>class="img-responsive" alt="<?=$v['title']?>" /> </a> 
              
              <div class="wrapnewitem">
                    
                    </div><!--end wrapnewitem-->
                    
              </div>
              <div class="v2-hometab-news-small-title" style="padding:5px">
                <a title="Title" href="<?=$v['link']?>"> <h3><?=$v['title']?></h3></a> 
                <div class="v2-hometab-news-small-sum"><?php echo cutString($v['short'],0,140); ?></div>
              </div>
            </div>
          </li>
          <?php } ?>
       <?php $i++ ?>
      <?php } } ?>  
       
    </ul>
    <div class="clearfix"></div>

</div>

</div><!--end container-->
<div class="clearfix"></div>
