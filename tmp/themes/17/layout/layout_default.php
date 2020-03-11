<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/17//layout/layout_default.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="f-container">
    <?php include $_B['temp']->load('common/position_top') ?>
    <?php if($web['anvui_id'] == 'TC8YA0Sr5xld') { ?>
    <div class="box-main">
        <div id="fullpage">
            <div class="section section1 active" id="section0">
                <div class="block bock-fkb box-block1">
                    <div class="block-header">
                        <div class="title-name spr"></div>
                    </div>
                    <div class="block-content">
                        <div class="box-homeT" style="background: url('') 50% 50% no-repeat">
                            <div class="text-l">Sống thật chất <br> Ở Thật vui</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section2 hehe">
                <div class="block bock-fkb  box-block2">
                    <div class="box-slider">
                        <div id="owl-crs" class="owl-carousel owl-theme">
                            <div class="box-item cf">
                                <div class="box-itemL" style="background-image: url('http://cdn.anvui.vn/uploadv2/web/24/2485/news/2018/11/06/08/45/1541493914_6a37db890506e558bc17.jpg')"></div>
                                <div class="box-itemR">
                                    <div class="box-c">
                                        <div class="">
                                            <h3 style="margin-top: 44px; padding-bottom: 0px; display: none;"><img src="<?=$web['static_temp']?><?=$web['temp']?>/statics/images/booking.png" style="width: 45px; height: 45px; margin-right: 10px;" alt="">
                                                <span class="title"><?php echo lang('booking');?></span></h3>
                                        </div>

                                        <h3 class="heading"><i class="fa fa-bus"></i> <span>Mua vé trực tuyến</span></h3>
                                        <div class="clearfix"></div>
                                        <div class="route-list datve-home" style="margin-top: 0px">
                                            <form action="dat-ve" id="search-form">
                                                <div class="row chonchieu">
                                                    
                                                </div>
                                                <div class="row" style="margin-bottom: -15px;">
                                                    <div class="clearfix">
                                                        <div class="col-md-6">
                                                            <label for="startPoint" class="label-cus">Điểm đi</label>
                                                            <input type="text" class="form-control" name="startPoint" id="startPoint" readonly>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="endPoint" class="label-cus">Điểm đến</label>
                                                            <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 hide">
                                                        <label for="vehicleType" class="label-cus">Loại xe</label>
                                                        <select name="vehicleType" id="vehicleType" class="form-control">
                                                        </select>
                                                    </div>

                                                    <div class="clearfix">
                                                        <div class="col-md-6">
                                                            <label for="depatureDate" class="label-cus">Ngày đi</label>
                                                            <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="depatureDate" class="label-cus">Ngày về</label>
                                                            <input type="text" class="form-control datepicker" name="returnDate" id="returnDate" >
                                                        </div>

                                                        
                                                        <div class="col-md-12">
                                                            <input type="hidden" id="startId" name="startId">
                                                            <input type="hidden" id="endId" name="endId">
                                                            <input type="hidden" id="isRoundTrip" name="isRoundTrip">
                                                            
                                                            <button type="submit" class="btn" id="search-btn">TÌM CHUYẾN XE</button>
                                                        </div>
                                                        <script type="text/javascript">
                                                            $("#returnDate").attr('disabled', true); 
                                                        </script>
                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
            
<?php $_B['temp']->printpos("5"); ?>           

<div class="section section8 " >
  <div class="block bock-fkb  box-block8">
     <div class="box-slider8 cf">
        <div class="block-box-title">
           <h3 class="rs title-block8">Theo dõi chúng tôi qua</h3>
        </div>
        <a href="" class="btn-social" style="background: url('http://ducdoanh.nhaxe.vn/themes/17/statics/plugins/tamlong/images/i1.jpg')" target="_blank"></a>
        <a href="" class="btn-social" style="background: url('http://ducdoanh.nhaxe.vn/themes/17/statics/plugins/tamlong/images/i2.jpg')" target="_blank"></a>
        <a href="" class="btn-social" style="background: url('http://ducdoanh.nhaxe.vn/themes/17/statics/plugins/tamlong/images/i3.jpg')" target="_blank"></a>
     </div>
  </div>
</div>
            
          <div class="section section11">
              <div class="block bock-fkb  box-block11 ">
              	<?php include $_B['temp']->load('contact/contact') ?>
                  
              </div>
          </div>
      </div>
    </div>
  <?php } else { ?>
  <div class="box-main">
        <div id="fullpage">
            <div class="section section1 active" id="section0">
                <div class="block bock-fkb box-block1">
                    <div class="block-header">
                        <div class="title-name spr"></div>
                    </div>
                    <div class="block-content">
                        <div class="box-homeT" style="background: url('') 50% 50% no-repeat">
                            <div class="text-l">Sống thật chất <br> Ở Thật vui</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section2 hehe">
                <div class="block bock-fkb  box-block2">
                    <div class="box-slider">
                        <div id="owl-crs" class="owl-carousel owl-theme">
                            <div class="box-item cf">
                                <div class="box-itemL" style="background-image: url('http://sapacapsule.com/media/article/2016/12//420_394/logo.jpg')"></div>
                                <div class="box-itemR">
                                    <div class="box-c">
                                        <h3 class="rs item-titles">Thư Ngỏ</h3>
                                        <p class="rs item-des">
                                            <p style="text-align: justify;">
                                                <strong>Kh&aacute;ch sạn Sapa Capsule h&acirc;n hạnh ch&agrave;o đ&oacute;n Qu&yacute; kh&aacute;ch!</strong>
                                            </p>
                                            <p style="text-align: justify;">
                                                Sapa Capsule nằm tr&ecirc;n đường Sở Than, ngay trung t&acirc;m thị trấn Sapa - một v&ugrave;ng đất y&ecirc;n b&igrave;nh, giản dị nhưng ẩn chứa bao điều kỳ diệu của cảnh sắc thi&ecirc;n nhi&ecirc;n. Sa Pa c&oacute; nhiều cảnh đẹp h&ugrave;ng vĩ như th&aacute;c Bạc, cầu M&acirc;y, rừng Tr&uacute;c, động Tả Ph&igrave;n&hellip; với những c&acirc;u chuyện d&acirc;n gian th&uacute; vị. To&agrave;n thị trấn ch&igrave;m trong sương trắng huyền ảo, vẽ l&ecirc;n một bức tranh sơn thủy hữu t&igrave;nh.
                                            </p>
                                            <p style="text-align: justify;">
                                                Tọa lạc ở vị tr&iacute; cao, Sapa Capsule - m&ocirc; h&igrave;nh &ldquo;k&eacute;n vườn&rdquo; độc đ&aacute;o, được thiết kế đan xen c&ugrave;ng hoa cỏ thi&ecirc;n nhi&ecirc;n với 48 ph&ograve;ng capsule tiện nghi v&agrave; ấm &aacute;p. Ch&uacute;ng t&ocirc;i cung cấp những dịch vụ giải tr&iacute;, mua sắm, đặt v&eacute;, đặt&nbsp;tour, cho&nbsp;thu&ecirc; xe m&aacute;y, xe đạp,&hellip; Mang đến cho du kh&aacute;ch những trải nghiệm tuyệt vời.
                                            </p>
                                            <p style="text-align: justify;">
                                                Đến với kh&aacute;ch sạn Sapa Capsule, Qu&yacute; kh&aacute;ch sẽ được tận hưởng một kỳ nghỉ thật &yacute; nghĩa v&agrave; đ&aacute;ng nhớ.
                                            </p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once $_B['temp']->load($mod.'/'.$data['load_temp']); ?>
            
            <?php $_B['temp']->printpos("5"); ?>           
            
            <div class="section section8 " >
              <div class="block bock-fkb  box-block8">
                 <div class="box-slider8 cf">
                    <div class="block-box-title">
                       <h3 class="rs title-block8">Theo dõi chúng tôi qua</h3>
                    </div>
                    <a href="" class="btn-social" style="background: url('http://ducdoanh.nhaxe.vn/themes/17/statics/plugins/tamlong/images/i1.jpg')" target="_blank"></a>
                    <a href="" class="btn-social" style="background: url('http://ducdoanh.nhaxe.vn/themes/17/statics/plugins/tamlong/images/i2.jpg')" target="_blank"></a>
                    <a href="" class="btn-social" style="background: url('http://ducdoanh.nhaxe.vn/themes/17/statics/plugins/tamlong/images/i3.jpg')" target="_blank"></a>
                 </div>
              </div>
            </div>
            
          <div class="section section11">
              <div class="block bock-fkb  box-block11 ">
                <?php include $_B['temp']->load('contact/contact') ?>
                  
              </div>
          </div>
      </div>
    </div>
  <?php } ?>
</div>
<!--Slide-->
<div class="modal" role="dialog" id="coming" tabindex="-1" aria-labelledby="myModalLabel">
    <a href="javascript:void(0)" data-dismiss="modal" aria-label="Close" class="btn-close spr"></a>
    <div class="comming">
        Coming Soon
    </div>
</div>
<div class="modal" role="dialog" id="myModalND" tabindex="-1" aria-labelledby="myModalLabel">
    <div class="box-pop box-sh" id="article_content">
    </div>
</div>
<div class="modal" role="dialog" id="myModalTour" tabindex="-1" aria-labelledby="myModalLabel">
    <div class="box-pop" id="list_content">
    </div>
</div>
<div class="modal" role="dialog" id="myModalPic" tabindex="-1" aria-labelledby="myModalLabel">
    <div class="box-pop box-popPic">
        <a href="javascript:void(0)" data-dismiss="modal" aria-label="Close" class="btn-close spr"></a>
        <div class="bg-load" id="loading_popup_gl"></div>
        <div class="box-acc">
            <a href="javascript:void(0)" class="ajax-next gallery-button-next hide"></a>
            <a href="javascript:void(0)" class="ajax-pre gallery-button-prev hide"></a>
        </div>
        <div class="box-content cf">
            <div class="box-picL">
                <div id="f-video" class="hide"></div>
                <div id="f-image">
                    <a href="#" target="_blank" id="current_link"><img src="#" width="658" id="current_img"></a>
                    <span class="text-mark" id="current_title">Trải nghiệm 1 mùa vàng trên cao nguyên</span>
                </div>
            </div>
            <div class="box-picR">
                <div class="adetails">
                    <div class="scrollbar">
                        <div class="track">
                            <div class="thumb">
                                <div class="end"></div>
                            </div>
                        </div>
                    </div>
                    <div class="viewport">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Slide-->
<!--Load content-->

<!--End Load content-->
<?php include $_B['temp']->load('common/position_bottom') ?>
</div>