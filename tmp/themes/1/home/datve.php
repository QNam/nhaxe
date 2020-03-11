<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//home/datve.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="backgroundnew">
  <div class="container">
    <div class="f-center-module">
      <div class="f-center-title"> <i></i><span>Đặt vé trực tuyến</span> </div>
      <div class="f-center-body"> 
<?php if(is_array($data['content']['listSchedule'])) { foreach($data['content']['listSchedule'] as $k => $v) { ?>
           		<?=$v['startTime']?>
<?php } } ?>
 
      </div>
    </div>
  </div>
</div>

 