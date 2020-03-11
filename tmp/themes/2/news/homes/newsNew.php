<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/2/news/homes/newsNew.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?> <section class="section-90 section-md-111 bg-zircon">
                    <div class="shell">
                        <h2 class="text-bold"><?php echo lang('news_new');?></h2>
                        <hr class="divider bg-chathams-blue">


          <div class="range range-xs-center offset-top-60">

                        <?php $i=0 ?>
          <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
          <?php if($i < 6) { ?> 

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
                                                    <div class="h4 text-bold text-white"><a href="<?=$v['link']?>"><?=$v['title']?></a></div>
                                                </div>
                                                 
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div> 
                        


           
          <?php } ?>
          <?php $i++ ?>
          <?php } } ?>

</div>

                         
                    </div>
                </section>


               