<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2//news/news_page_news_list.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?> <section class="section-90 section-md-111 bg-zircon" style="    padding-top: 0px;
    padding-bottom: 0px;">
                    <div class="shell"> 


          <div class="range range-xs-center offset-top-60">

                        <?php $i=0 ?>
         <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?> 
          

                            <div class="cell-xs-10 cell-sm-6 offset-top-30">
                                <!-- Post Boxed-->
                                <div class="reveal-block">
                                    <div class="post post-boxed">
                                        <!-- Post media-->
                                        <header class="post-media"><img width="570" height="310" <?php  echo loadImage($v['img'],'crop','570','290',true); ?>alt="" class="img-responsive"></header>
                                        <!-- Post content-->
                                        <section class="post-content text-left">
                                             
                                            <div class="post-body">
                                                <!-- Post Title-->
                                                <div class="post-title">
                                                    <div class="h4 text-bold text-white"><a href="<?=$v['href']?>"><?=$v['title']?></a></div>
                                                </div>
                                                 
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div> 
                        

 
          <?php $i++ ?>
          <?php } } ?>

</div>

                    

                    <div class="clearfix"></div>
                    <hr>
<?php include $_B['temp']->load('news/news_pagination') ?>
    
                    </div>
                </section>


               

       
 


 
