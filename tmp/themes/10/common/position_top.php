<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/10//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header class="page-head header-panel-absolute">
<!-- RD Navbar Transparent-->
<div class="rd-navbar-wrap" style="height: 146px;">
  <nav class="rd-navbar rd-navbar-default rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-offset="95" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-lg-auto-height="true" data-auto-height="false">
    <div class="rd-navbar-inner">
      <!-- RD Navbar Panel-->
      <div class="rd-navbar-panel">
        <!-- RD Navbar Toggle-->
        <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
        <div class="rd-navbar-panel-title">
          <h4>Home</h4>
        </div>
        <!-- RD Navbar Right Side Toggle-->
        <button class="rd-navbar-right-side-toggle veil-md toggle-original" data-rd-navbar-toggle=".right-side"><span></span></button>
        <div class="shell">
          <div class="range range-md-middle range-lg-top">
            <div class="cell-md-3 left-side">
              <div class="clearfix text-lg-left text-center">
                <!--Navbar Brand-->
                <div class="rd-navbar-brand">
                    <a href="<?=$web['home_url']?>">
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
              </div>
            </div>
            <div class="cell-md-9 text-md-right right-side toggle-original-elements">
              <ul class="offset-lg-top-15 list-unstyled">
                <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-envelope-o text-middle icon-primary"></span><a class="inset-left-10 text-middle" href="mailto:#"> <?=$web['info']['email']?></a></li>
                
                <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-phone text-middle icon-primary"></span><a class="inset-left-10 text-middle" href="tel:#"> <?=$web['info']['phone']?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="rd-navbar-menu-wrap">
        <div class="rd-navbar-nav-wrap toggle-original-elements">
          <div class="rd-navbar-mobile-scroll">
            <div class="rd-navbar-mobile-header-wrap">
              <!--Navbar Brand Mobile-->
                <div class="rd-navbar-mobile-brand">
                    <a href="<?=$web['home_url']?>">
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
            
            </div>
            <!-- RD Navbar Nav-->
            <?php include $_B['temp']->load('common/menu_top') ?>
          </div>
        </div>
        <!--RD Navbar Search-->
      </div>
    </div>
  </nav>
</div>
</header>
