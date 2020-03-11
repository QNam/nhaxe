<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/9//album/_pagination.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if(isset($data['content']['pagination']) ) { ?>

<div class="v2pagging">
<div class="col-md-6">
    <p> <?php echo lang('displaying');?>
        <strong><?=$data['content']['pagination']['info']['start']?>  </strong> <?php echo lang('page_to');?>
        <strong><?=$data['content']['pagination']['info']['end']?>    </strong> <?php echo lang('page_on');?>
        <strong><?=$data['content']['pagination']['info']['total']?>  </strong> <?php echo lang('records');?>
        <strong><?=$data['content']['pagination']['info']['page']?>   </strong> <?php echo lang('page_on');?>
        <strong><?=$data['content']['pagination']['info']['pages']?>  </strong> <?php echo lang('page');?>
    </p>
</div>
<div class="f-pagging text-right col-md-6">
    <ul class="pagination ">
        <?php if(!isset($data['content']['pagination']['first'])) { ?>
            <li class="disabled"><a >|<< </a></li>
        <?php } else { ?>
            <li> <a href="<?=$data['content']['pagination']['first']['href']?>">|<< </a></li>
        <?php } ?>

        <?php if(!isset($data['content']['pagination']['previous'])) { ?>
            <li class="disabled"> <a><?php echo lang('before');?></a> </li>
        <?php } else { ?>
            <li><a href="<?=$data['content']['pagination']['previous']['href']?>"> <?php echo lang('before');?> </a></li>
        <?php } ?>

        <?php if(is_array($data['content']['pagination']['numbers'])) { foreach($data['content']['pagination']['numbers'] as $k => $v) { ?>
            <?php if($k=='active' ) { ?>
                <li class="active"><a ><?=$v['num']?></a></li>
            <?php } else { ?>
                <li ><a href="<?=$v['href']?>"><?=$v['num']?></a></li>
            <?php } ?>                                           
        <?php } } ?>
        <?php if(!isset($data['content']['pagination']['next'])) { ?>
            <li class="disabled"> <a ><?php echo lang('after');?></a></li>
        <?php } else { ?>
            <li><a href="<?=$data['content']['pagination']['next']['href']?>"> <?php echo lang('after');?> </a> </li>
        <?php } ?>
        <?php if(!isset($data['content']['pagination']['last'])) { ?>
            <li class="disabled"> <a> >>| </a></li>
        <?php } else { ?>
            <li><a href="<?=$data['content']['pagination']['next']['href']?>"> >>| </a></li>
        <?php } ?>
    </ul>
    <div class="clearfix"></div>
</div>
</div>
<?php } ?>