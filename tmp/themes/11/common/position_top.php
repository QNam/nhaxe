<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/11//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header>
  <nav class="navbar navbar-default navbar-main navbar-fixed-top lightHeader" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              
              <a href="<?=$web['home_url']?>" class="navbar-brand">
                  <img width="165" height="76" src="images/logo-light-165x76.png" alt="">
                  <?php if($web['logo'] != null) { ?>
                      <?php if($web['logo']['is_swf']) { ?>
                      <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                          <param value="transparent" name="wmode">
                          <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                          <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                      </object>
                      <?php } else { ?>
                      <img src="<?=$web['static_upload']?><?=$web['logo']['img']?>" >
                      <?php } ?>
                  <?php } else { ?>
                      <img src="<?=$web['logo']['img']?>" class="img-responsive logo"  alt="Logo"/>
                  <?php } ?>
              </a>
          </div>
          

          <?php include $_B['temp']->load('common/menu_top') ?>

      </div>
  </nav>
</header>
