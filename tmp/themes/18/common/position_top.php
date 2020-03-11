<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/18//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header>
    <div id="stuck_container" class="stuck_container">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top ">

                <div class="navbar-header">
                    <h1 class="navbar-brand">
                        <a href="<?=$web['home_url']?>" target="_self">
                            <?php if($web['logo'] != null) { ?>
                                <?php if($web['logo']['is_swf']) { ?>
                                <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                                    <param value="transparent" name="wmode">
                                    <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                                    <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                                </object>
                                <?php } else { ?>
                                <img id="logo-main" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                                <?php } ?>
                                <?php } else { ?>
                                <img id="logo-main" src="<?=$web['logo']['img']?>" class="img-responsive logo" alt="Logo" />
                                <?php } ?>
                        </a>
                    </h1>
                </div>
                <?php include $_B['temp']->load('common/menu_top') ?>
                

            </nav>
            <hr class="hr1">
        </div>
    </div>
<div id="stuck_container" class="stuck_container isStuck" style="top: -98px; visibility: hidden; position: fixed; width: 100%; margin-top: 0px;">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top ">

                <div class="navbar-header">
                    <h1 class="navbar-brand">
                        <a href="<?=$web['home_url']?>" target="_self">
                            <?php if($web['logo'] != null) { ?>
                                <?php if($web['logo']['is_swf']) { ?>
                                <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                                    <param value="transparent" name="wmode">
                                    <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                                    <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                                </object>
                                <?php } else { ?>
                                <img id="logo-main" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                                <?php } ?>
                                <?php } else { ?>
                                <img id="logo-main" src="<?=$web['logo']['img']?>" class="img-responsive logo" alt="Logo" />
                                <?php } ?>
                        </a>
                    </h1>
                </div>

                <ul class="navbar-nav sf-menu navbar-right sf-js-enabled sf-arrows" data-type="navbar">
                    <li class="active">
                        <a href="./">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="index-1.html" class="sf-with-ul">About Us</a>
                        <ul class="dropdown-menu" style="display: none;">
                            <li>
                                <a href="#">Lorem ipsum dolor</a>
                            </li>
                            <li>
                                <a href="#">Ait amet conse</a>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Ctetur adipisicing</a>
                                <ul class="dropdown-menu" style="display: none;">
                                    <li>
                                        <a href="#">Latest</a>
                                    </li>
                                    <li>
                                        <a href="#">Archive</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Sed do eiusmod</a>
                            </li>
                            <li>
                                <a href="#">Tempor incididunt</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index-2.html">Services</a>
                    </li>
                    <li>
                        <a href="index-3.html">Our Fleet</a>
                    </li>

                    <li>
                        <a href="index-4.html">Contacts</a>
                    </li>
                </ul>

            </nav>
            <hr class="hr1">
        </div>
    </div>
</header>