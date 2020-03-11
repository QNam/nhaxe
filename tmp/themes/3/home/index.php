<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/3//home/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container bg-3 text-center">
<div class="title">
<h2 class="sale-bar-title">Đặt vé trực tuyến</h2><br>
</div>
<div class="row">
<?php if(is_array($data['content']['chuyen'])) { foreach($data['content']['chuyen'] as $k => $v) { ?>
<div class="col-sm-4 margin-item">
<div class="item">
<a href="<?=$v['link']?>" title="<?=$v['routeName']?>">
<?php if($v['listImages']['0'] != "0" && isset($v['listImages']['0'])) { ?>

<img src="<?=$v['listImages']['0']?>" class="img-responsive" alt="<?=$v['routeName']?>" alt="<?=$v['routeName']?>" style="opacity: .5; height: 220px; width: 100%;" />

<?php } else { ?>

<img src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/images/bottom%20-%20sin.jpg" class="img-responsive" alt="<?=$v['routeName']?>" style="opacity: .5; height: 220px; width: 100%;" />

<?php } ?>

<div class="card-profile">
<h3><?=$v['routeName']?></h3>
<p class="card-content">Giá từ <?=$v['price']?></p>
<a href="<?=$v['link']?>" title="<?=$v['routeName']?>" class="btn btn-oder">Đặt vé</a>
</div>
</a>
</div>
</div>
<?php } } ?>
</div>
</div>
<!--NEWS-->
<?php $_B['temp']->printhome(); ?>
<script>
    $(document).ready(function () {
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };

        var companyId = '<?=$data['content']['anvuiId']?>';
        var urlAndroid = '';
        var urlIOs = '';
        if(companyId == 'TC03013FPyeySDW')
        {
            urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.saonghe';
            urlIOs = 'https://itunes.apple.com/vn/app/sao-ngh%E1%BB%87-mua-v%C3%A9-xe-online/id1356662997?l=vi&mt=8';
        }

        if(isMobile.any() == 'Android' && urlAndroid != '')
        {
            window.location.href = urlAndroid;
        }

        if((isMobile.any() == 'iPhone' || isMobile.any() == 'iPad' || isMobile.any() == 'iPod') && urlIOs != '')
        {
            window.location.href = urlIOs;
        }
    });
</script>