<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/3//common/bnc_position_adv_adv_7.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?>
<?php if(is_array($web['adv']['adv_7'])) { foreach($web['adv']['adv_7'] as $k => $v) { ?>




<style type="text/css">
  .blockquangcao {
        margin-bottom: 30px;
    padding: 63px 0 42px;
    background: black url("<?=$web['static_upload']?>/<?=$v['img']?>") 43% 0px no-repeat;
    width: 100%;
    height: 100%;
    background-size: 100%;

  }

</style>
<?php } } ?>

