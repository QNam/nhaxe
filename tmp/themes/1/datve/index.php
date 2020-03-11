<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//datve/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="backgroundnew">
  <div class="container" style="min-height: 500px">
    <div class="f-center-module">
<?php if($data['content']['khuhoi']['khuhoi'] == 1) { ?>
<div class="f-center-title"> <i></i><span>Chọn tuyến về cho chuyến <?=$data['content']['khuhoi']['routeName']?></span> </div>
<?php } else { ?>
<div class="f-center-title"> <i></i><span>Đặt vé trực tuyến</span> </div>
<?php } ?>
      <div class="f-center-body">
      	<ul class="f-news row">
        	<?php $i=0 ?>
<?php if(is_array($data['content']['chuyen'])) { foreach($data['content']['chuyen'] as $k => $v) { ?>
<li class="col-md-4 col-sm-4 col-xs-6 full-xs">
            <div class="f-news-item">
              <div class="f-news-item-img"> <a href="<?=$v['link']?>" title="<?=$v['routeName']?>">
  <?php if($v['listImages']['0'] != "0") { ?>
  <img src="<?=$v['listImages']['0']?>" class="img-responsive" alt="<?=$v['routeName']?>" style="opacity: .5; height: 220px; width: 100%;" />
  <?php } else { ?>
  <img src="http://demo.nhaxe.vn/themes/1/datve/TuyenXeMau.jpg" class="img-responsive" alt="<?=$v['routeName']?>" style="opacity: .5; height: 220px; width: 100%;" />
  <?php } ?>

  </a>

              </div>
              <div class="f-news-item-title">
              
                <h3> <a title="<?=$v['routeName']?>" href="<?=$v['link']?>"><?=$v['routeName']?></a> </h3>
                <h4> <a title="<?=$v['routeName']?>" href="<?=$v['link']?>"><?=$v['price']?></a> </h4>
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