<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//layout.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php echo $_B['temp']->checkGzip();?> html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
    @Templete by fb.com/mrr.rio
-->
<head><link rel="canonical" href="<?=$data['head']['link']?>">

    <!-- Include header meta -->
    <?php include $_B['temp']->load('common/header_meta') ?>
    <!-- End cac header meta-->

    <!-- Include cac file css -->
    <?php include $_B['temp']->load('common/global_css') ?>
    <!-- End cac file css-->
<?php if($web['idw'] == 88) { ?>
<style type="text/css">
.bg_main {
    width: 100%;
    height: 55px;
    background: #ffdd2b;
}
.f-menutop .f-menutop-ul>li>a.firstlink {
    height: auto;
    line-height: inherit;
    padding: 0px;
    color: #231F20;
}
.hearder_main .logo img {
    width: 230px;
}
.hearder_search {
    width: 100%;
    height: 56px;
    background-color: #ffffff;
}
#search-box {
    position: relative;
    z-index: 10;
    cursor: pointer;
    width: 30%;
    float: right;
    top: 5px;
}
.f-menutop>.f-menutop-ul {
    float: right;
    width: 100%;
    padding-left: 260px;
    margin-top: 10px;
}
.hearder_main .logo {
    width: 255px;
    height: 90px;
    position: absolute;
    z-index: 1;
    top: -56px;
    left: 0;
    padding-left: 10px;
    background: #fff;
    -webkit-border-bottom-left-radius: 10px;
    -moz-border-bottom-left-radius: 10px;
    -ms-border-bottom-left-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-border-bottom-right-radius: 10px;
    -moz-border-bottom-right-radius: 10px;
    -ms-border-bottom-right-radius: 10px;
    border-bottom-right-radius: 10px;
    -webkit-box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.75);
    -moz-box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.75);
    box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.75);
    text-align: center;
}
</style>
<?php } ?>
</head>

<body class="<?php if($mod=='home') { ?>home<?php } else { ?>nohomebg<?php } ?>">
     <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=1494068174211203&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Include popup so sanh -->
    <?php include $_B['temp']->load('common/popup_compare_ball') ?>
    <!-- End include popup so sanh-->

    <!-- Quan ly toan bo layout web -->
    <?php include_once $_B['temp']->load('layout/layout_'.$web['layout']);  ?>
    <!-- End quan ly toan bo layout web -->

    <!-- Include cac file script -->
    <?php include $_B['temp']->load('common/global_script') ?>
    <!-- End include cac file script-->
</body>

</html>
