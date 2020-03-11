<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/1//home/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><!--temp block/block_center_category_custom--> 
<div class="clearfix"></div>
<!--temp block/block_center_category_custom_slide-->
<div class="clearfix"></div>
 
  <div class="container">
<div class="backgroundnew" style="border-bottom: 25px solid #fff;"> 
    <div class="f-center-module">
      <div class="f-center-title" style="margin-left: 15px;"> <i></i><span>Đặt vé trực tuyến</span></div>
      <div class="f-center-body">
      	<div class="f-news row" style="margin: 0px;">
        	<?php $i=0 ?>
<?php if(is_array($data['content']['chuyen'])) { foreach($data['content']['chuyen'] as $k => $v) { ?>
<div class="col-md-4 col-sm-4 col-xs-6 full-xs">
            <div class="f-news-item">
              <div class="f-news-item-img"> <a href="<?=$v['link']?>" title="<?=$v['routeName']?>">
  <?php if($v['listImages']['0'] != "0") { ?>

  <img src="<?=$v['listImages']['0']?>" class="img-responsive" alt="<?=$v['routeName']?>" style="opacity: .5; height: 220px; width: 100%;" /> </a>

  <?php } else { ?>

  <img src="http://demo.nhaxe.vn/themes/1/datve/TuyenXeMau.jpg" class="img-responsive" alt="<?=$v['routeName']?>" style="opacity: .5; height: 220px; width: 100%;" /> </a>

  <?php } ?>

              </div>
              <div class="f-news-item-title">
              
                <h3> <a title="<?=$v['routeName']?>" href="<?=$v['link']?>"><?=$v['routeName']?></a> </h3>
                  <h4> <a title="<?=$v['routeName']?>" href="<?=$v['link']?>"><?=$v['price']?></a> </h4>
              </div>
            </div> 
          </div>
       		<?php $i++ ?>
<?php } } ?>
</div> 
      </div>
    </div> 
</div>



<style type="text/css">
#home-box .f-news {
    margin-right: 15px !important;
}
.main1 .backgroundnew {
    position: relative;
    padding: 0px 0 30px;
    background: #ededed;
    margin-bottom: 0px;
    margin-top: 25px;
}
</style>
<div class="f-ctn-center" id="home-box" style="border-bottom: 25px solid #fff;">  
<?php $_B['temp']->printhome(); ?> 
</div>

</div>
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

        if(companyId == 'TC03m1MSnhqwtfE')
        {
            urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.thienthanh';
            urlIOs = 'https://itunes.apple.com/app/id1361989631';
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