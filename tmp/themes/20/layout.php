<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/20//layout.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php echo $_B['temp']->checkGzip();?> html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
    @Templete by doanhdz
-->
<head><link rel="canonical" href="<?=$data['head']['link']?>">
    
    


    <!-- Include header meta -->
    <?php include $_B['temp']->load('common/header_meta') ?>
    <!-- End cac header meta-->
    
    <?php if($mod == 'insurrancelove') { ?>
        <!-- Include cac file css -->
        <?php include $_B['temp']->load('common/global_css1') ?>
        <!-- End cac file css-->
        <!-- Include cac file script -->
        <?php include $_B['temp']->load('common/global_script1') ?>
        <!-- End include cac file script-->
    <?php } else { ?>
        <!-- Include cac file css -->
        <?php include $_B['temp']->load('common/global_css') ?>
        <!-- End cac file css-->
        <!-- Include cac file script -->
        <?php include $_B['temp']->load('common/global_script') ?>
        <!-- End include cac file script-->
    <?php } ?>

    
</head>

<body>



<?php if($web['anvui_id'] == 'TC1OHntfnujP') { ?>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->

<?php } ?>
    <!-- End include popup so sanh-->

    <!-- Quan ly toan bo layout web -->
    <?php include_once $_B['temp']->load('layout/layout_'.$web['layout']);  ?>
    <!-- End quan ly toan bo layout web -->
    <?php if($mod != 'insurrancelove') { ?>
    <script>
        $('.bus-list').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        });

        $('.travel-list').owlCarousel({
            loop: false,
            margin: -70,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>
    <?php } ?>
</body>

</html>
