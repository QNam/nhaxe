<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/8//home/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="services iconic white">
  <div class="wrap">
    <div class="row">
    <?php if(is_array($data['content']['chuyen'])) { foreach($data['content']['chuyen'] as $k => $v) { ?>
      <div class="one-third">
          <span class="circle">
            <?php if($v['listImages']['0'] != "0" && isset($v['listImages']['0'])) { ?>

            <img src="<?=$v['listImages']['0']?>" class="img-responsive" alt="<?=$v['routeName']?>" alt="<?=$v['routeName']?>" style="opacity: .5; height: 220px; width: 100%;" />

            <?php } else { ?>

            <img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/bottom%20-%20sin.jpg" class="img-responsive" alt="<?=$v['routeName']?>" style="opacity: .5; height: 220px; width: 100%;" />

            <?php } ?>
          </span>
          <h3><?=$v['routeName']?></h3>
          <p class="card-content">Giá từ <?=$v['price']?></p>
                        <a href="<?=$v['link']?>" title="<?=$v['routeName']?>" class="btn btn-oder">Đặt vé</a>
      </div>
    <?php } } ?>
    </div>
  </div>
</div>
<li class="widget widget-sidebar transfers_call_to_action_widget">    <!-- Call to action -->
  <div class="black cta">
    <div class="wrap">
      <p class="fadeInLeft">
        Đi An Về Vui</p>
      <a href="" class="btn huge color right fadeInRight">Đặt Vé</a>
    </div>
  </div>
  <!-- //Call to action -->
</li>
<?php $_B['temp']->printhome(); ?>
