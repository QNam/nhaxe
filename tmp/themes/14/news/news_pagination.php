<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/14//news/news_pagination.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($data['content']['pagination']) ) { ?>
<div class="row">
<div class="col-md-6" style="display:none">
    <p> <?php echo lang('displaying');?>
        <strong><?=$data['content']['pagination']['info']['start']?>  </strong> <?php echo lang('page_to');?>
        <strong><?=$data['content']['pagination']['info']['end']?>    </strong> <?php echo lang('page_on');?>
        <strong><?=$data['content']['pagination']['info']['total']?>  </strong> <?php echo lang('records');?>
        <strong><?=$data['content']['pagination']['info']['page']?>   </strong> <?php echo lang('page_on');?>
        <strong><?=$data['content']['pagination']['info']['pages']?>  </strong> <?php echo lang('page');?>
    </p>
</div>
<div class="f-pagging text-right col-md-12">
    <ul class="pagination ">
        <?php if(!isset($data['content']['pagination']['first'])) { ?>
            <li class="disabled"><a ><i class="fa fa-caret-left"></i> </a></li>
        <?php } else { ?>
            <li> <a href="<?=$data['content']['pagination']['first']['href']?>"><i class="fa fa-caret-left"></i> </a></li>
        <?php } ?>

         

        <?php if(is_array($data['content']['pagination']['numbers'])) { foreach($data['content']['pagination']['numbers'] as $k => $v) { ?>
            <?php if ($v['num'] == 0) continue; ?>
            <?php if($k=='active' ) { ?>
                <li class="active"><a ><?=$v['num']?></a></li>
            <?php } else { ?>
                <li ><a href="<?=$v['href']?>"><?=$v['num']?></a></li>
            <?php } ?>                                           
        <?php } } ?>
         
        <?php if(!isset($data['content']['pagination']['last'])) { ?>
            <li class="disabled"> <a> <i class="fa fa-caret-right"></i> </a></li>
        <?php } else { ?>
            <li><a href="<?=$data['content']['pagination']['next']['href']?>"> <i class="fa fa-caret-right"></i> </a></li>
        <?php } ?>
    </ul>
    <div class="clearfix"></div>
</div>
</div>
<?php } ?>