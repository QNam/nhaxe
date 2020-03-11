<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/5/news/homes/newsCatHome.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<div class="container">
<?php if(!empty($data['content']['home_cat'])) { ?>
<?php if(is_array($data['content']['home_cat'])) { foreach($data['content']['home_cat'] as $key => $value) { ?>
<?php if(!empty($value['content_news'])) { ?>
<div class="f-center-module catetintuc">
<div class="f-center-title f-center-title-cate-new">				
<ul class="f-pr-tab-home-cate  stylenavtabs">
<li>
<h2>		            		
            		<a href="#f-news-cat-home<?=$key?>0" data-toggle="tab"  data-id="<?=$value['id']?>"  class="parent_tab"><?=$value['title']?>
            		</a>
            		</h2>
            	</li>
            	<?php if(!empty($value['sub'])) { ?>
            <?php $i = 1 ?> 
            <?php if(is_array($value['sub'])) { foreach($value['sub'] as $k => $v) { ?>
            	<li>		            		
            		<h2><a href="#f-news-cat-home<?=$key?><?=$v['id']?>" data-toggle="tab" data-id="<?=$v['id']?>" data-id-parent="<?=$key?>"  data-url="<?=$web['home_url']?>"  class="newstab"><?=$v['title']?></a></h2>
            	</li>
            <?php $i++ ?>
            <?php } } ?>
            	<?php } ?>
</ul>
</div>
<div class="f-center-body">
<div class="clearfix"></div>
<div class="tab-content">
<?php $content_news = $value['content_news'] ?>
<div id="f-news-cat-home<?=$key?>0" class="tab-pane active"> 
<?php include $_B['temp']->load_block('homes/newsItem','news') ?>
</div>
<?php if(!empty($value['sub'])) { ?>
            <?php $i = 1 ?> 
            <?php if(is_array($value['sub'])) { foreach($value['sub'] as $k => $v) { ?>
            	<div id="f-news-cat-home<?=$key?><?=$v['id']?>" class="tab-pane"> 
Loading...
</div> 
            <?php $i++ ?>
            <?php } } ?> 
            	<?php } ?>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php } ?>
<?php } } ?>
<?php } ?>
</div><!--end container-->


