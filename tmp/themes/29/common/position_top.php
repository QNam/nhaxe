<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/29//common/position_top.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 logo_all">
                <div class="banner">
                    <a class="link-logo" href="/" title="logo" target="_self">
                        <?php if($web['logo'] != null) { ?>
                        <?php if($web['logo']['is_swf']) { ?>
                        <object width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>">
                            <param value="transparent" name="wmode">
                            <param value="<?=$web['static_upload']?><?=$web['logo']['img']?>" name="movie">
                            <embed width="<?=$web['logo']['width']?>" height="<?=$web['logo']['height']?>" wmode="transparent" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                        </object>
                        <?php } else { ?>
                        <img id="logo-main" class="logo" src="<?=$web['static_upload']?><?=$web['logo']['img']?>">
                        <?php } ?>
                        <?php } else { ?>
                        <img id="logo-main" src="<?=$web['logo']['img']?>" class="img-responsive logo" alt="Logo" />
                        <?php } ?>
                    </a>
                </div>
            </div>
            <div class="col-md-9 menu_all">
                <div class="menu_pc">
                    <?php if($web['anvui_id'] == 'TC0Cu1rzpoTq3vbZ') { ?>
                    <div class="box-marque" style="margin-top: 26px;">
                        <!-- GTranslate: https://gtranslate.io/ -->
<a href="#" onclick="doGTranslate('vi|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="English" /></a><a href="#" onclick="doGTranslate('vi|vi');return false;" title="Vietnamese" class="gflag nturl" style="background-position:-200px -400px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="Vietnamese" /></a>

<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:24px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/24.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/24a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'vi',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>




                    </div>
                    <?php } ?>
                    <div class="nav-main">
                        <ul id="nav-main-menu" class="nav-menu">
                            <?php include $_B['temp']->load('common/menu_top') ?>
                        </ul>
                    </div>
                    

                    <?php if($web['anvui_id'] == 'TC0Cu1rzpoTq3vbZ') { ?>
                    <style type="text/css">
                        .box-marque {
                            /* display: none; */
                            display: inline-block;
                            float: right;
                            width: initial;
                            display: block !important;
                            background: none;
                        }
                    </style>
                    <?php } ?>
                </div>
                <div class="menu_mobile"><i class="fa fa-bars" aria-hidden="true"> Menu</i></div>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript">
$('.menu_mobile').click(function(){
    $('.menu_pc').slideToggle();
})
</script>
<?php if($mod != 'home') { ?>
    <?php if(isset($web['background']['color'])) { ?>
        <style type="text/css">
        .header {
            position: relative;

            background: {
                <?=$web['background']['color']?>
            }

            ;
            background-position: center top;
        }
        </style>
    <?php } else { ?>
        <style type="text/css">
        .header {
            position: relative;
            background-position: center top;
        }
        </style>
    <?php } ?>
<?php } ?>