<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/14//home/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style type="text/css">
    .ticket-ac-btn {
    border-radius: 10px !important;
    height: 38px;
    line-height: 26px !important;
}
</style>
<div class="av-product container" style="display: block;">
    <div class="wrapper">
        <div class="div_title" style="text-align: center;">
            <?php if($web['anvui_id'] == "TC03h1IzK1jParS") { ?>
            <h2><span class="hot" style="padding-right:0px;">Dịch Vụ Xe</span></h2>
        
        <?php } elseif($web['anvui_id'] == "TC0761phLM2cBJrc") { ?>
            <h2><span class="hot" style="padding-right:0px;">Đặt vé nhanh</span></h2>
        <?php } elseif($web['anvui_id'] == "TC0Cm1rweVdinjJi") { ?>
            <h2><span class="hot" style="padding-right:0px;">Đội xe</span></h2>
        <?php } else { ?>
            <h2><span class="hot" style="padding-right:0px;">Đội xe</span></h2>
        <?php } ?>
        </div>
    </div>
    
    <div id="slider_pro" class="">
        <div aria-live="polite" class="slick-list draggable">
            <div class="slick-track">
                
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    var companyId = $("base").attr("id");
    console.log(companyId);
    $.ajax({
        url: 'https://ticket-new-dot-dobody-anvui.appspot.com/route/getList',
        type: 'POST',
        data: JSON.stringify({
            companyId: $("base").attr("id")
        }),
        success: function(data) {

            console.log(data);

            if(companyId == 'TC0Cm1rweVdinjJi'){
                $.each(data.results.result, function (index, val) {

                    if(val.routeId == 'R0DB1s6Tt7KMXT6'){
                        var html = '<div class="item ">';
                        html +='<div class="w-item effect_up" style="animation-duration: 0.9s;">';
                        html +='<div class="i-image">';
                        html +='<a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">';
                        html +='<img src="https://xechatluongcaosontung.vn/themes//14/statics/images/sontung/sontung1.jpg" class="img-responsive" alt="'+val.routeName+'" alt="'+val.routeName+'"  />';
                        html +='</a>';
                        html +='</div>';
                        html +='<div class="i-desc">';
                        html +='<div class="w-desc" style="    text-align: center;">';
                        html +='<div class="i-title">';
                        html +='<h3><a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">'+val.routeName+'</a></h3>';
                        html +='</div>';
                        html +='<div class="i-content">';
                        html +='<p class="card-content" style="color: #c00;">Giá vé: '+val.displayPrice+'</p>';
                        html +='</div>';
                        html +='</div></div></div></div>';  
                    } else if( val.routeId == 'R0DA1s6Bu8rN9mg'){
                        var html = '<div class="item ">';
                        html +='<div class="w-item effect_up" style="animation-duration: 0.9s;">';
                        html +='<div class="i-image">';
                        html +='<a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">';
                        html +='<img src="https://xechatluongcaosontung.vn/themes//14/statics/images/sontung/quynhon-danang.jpg" class="img-responsive" alt="'+val.routeName+'" alt="'+val.routeName+'"  />';
                        html +='</a>';
                        html +='</div>';
                        html +='<div class="i-desc">';
                        html +='<div class="w-desc" style="    text-align: center;">';
                        html +='<div class="i-title">';
                        html +='<h3><a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">'+val.routeName+'</a></h3>';
                        html +='</div>';
                        html +='<div class="i-content">';
                        html +='<p class="card-content" style="color: #c00;">Giá vé: '+val.displayPrice+'</p>';
                        html +='</div>';
                        html +='</div></div></div></div>';
                    } else if(val.routeId == 'R0DA1s6CIGePcqN'){
                        var html = '<div class="item ">';
                        html +='<div class="w-item effect_up" style="animation-duration: 0.9s;">';
                        html +='<div class="i-image">';
                        html +='<a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">';
                        html +='<img src="https://xechatluongcaosontung.vn/themes//14/statics/images/sontung/sontung1.jpg" class="img-responsive" alt="'+val.routeName+'" alt="'+val.routeName+'"  />';
                        html +='</a>';
                        html +='</div>';
                        html +='<div class="i-desc">';
                        html +='<div class="w-desc" style="    text-align: center;">';
                        html +='<div class="i-title">';
                        html +='<h3><a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">'+val.routeName+'</a></h3>';
                        html +='</div>';
                        html +='<div class="i-content">';
                        html +='<p class="card-content" style="color: #c00;">Giá vé: '+val.displayPrice+'</p>';
                        html +='</div>';
                        html +='</div></div></div></div>';
                    } else{
                        var html = '<div class="item ">';
                        html +='<div class="w-item effect_up" style="animation-duration: 0.9s;">';
                        html +='<div class="i-image">';
                        html +='<a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">';
                        html +='<img src="https://xechatluongcaosontung.vn/themes//14/statics/images/sontung/sontung2.jpg" class="img-responsive" alt="'+val.routeName+'" alt="'+val.routeName+'"  />';
                        html +='</a>';
                        html +='</div>';
                        html +='<div class="i-desc">';
                        html +='<div class="w-desc" style="    text-align: center;">';
                        html +='<div class="i-title">';
                        html +='<h3><a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">'+val.routeName+'</a></h3>';
                        html +='</div>';
                        html +='<div class="i-content">';
                        html +='<p class="card-content" style="color: #c00;">Giá vé: '+val.displayPrice+'</p>';
                        html +='</div>';
                        html +='</div></div></div></div>';
                    }
                
                    
                
                

                $('.slick-track').append(html);

            })
            }else{
                $.each(data.results.result, function (index, val) {

                if(typeof val.listImages[0] != 'undefined'){
                    var html = '<div class="item ">';
                    html +='<div class="w-item effect_up" style="animation-duration: 0.9s;">';
                    html +='<div class="i-image">';
                    html +='<a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">';
                    html +='<img src="'+val.listImages[0]+'" class="img-responsive" alt="'+val.routeName+'" alt="'+val.routeName+'"  />';
                    html +='</a>';
                    html +='</div>';
                    html +='<div class="i-desc">';
                    html +='<div class="w-desc" style="    text-align: center;">';
                    html +='<div class="i-title">';
                    html +='<h3><a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">'+val.routeName+'</a></h3>';
                    html +='</div>';
                    html +='<div class="i-content">';
                    html +='<p class="card-content" style="color: #c00;">Giá vé: '+val.displayPrice+'</p>';
                    html +='</div>';
                    html +='</div></div></div></div>';
                }else{
                    var html = '<div class="item ">';
                    html +='<div class="w-item effect_up" style="animation-duration: 0.9s;">';
                    html +='<div class="i-image">';
                    html +='<a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">';
                    html +='<img src="/themes/14/statics/images/bottom%20-%20sin.jpg" class="img-responsive" alt="'+val.routeName+'" alt="'+val.routeName+'"  />';
                    html +='</a>';
                    html +='</div>';
                    html +='<div class="i-desc">';
                    html +='<div class="w-desc" style="    text-align: center;">';
                    html +='<div class="i-title">';
                    html +='<h3><a href="/dat-ve?routeId='+val.routeId+'" tabindex="0">'+val.routeName+'</a></h3>';
                    html +='</div>';
                    html +='<div class="i-content">';
                    html +='<p class="card-content" style="color: #c00;">Giá vé: '+val.displayPrice+'</p>';
                    html +='</div>';
                    html +='</div></div></div></div>';
                }

                

                $('.slick-track').append(html);

            })
            }
            

            $(".slick-track").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]

            });
        },

      }); 


    

    

});
</script>
<style type="text/css">
.w-item {
    padding: 0px 15px;
}
</style>
<div class="clearfix"></div>
<div class="av-book-method">
    <div class="wrapper">
        <div class="div_title"><h2>3 cách đặt vé xe đơn giản</h2>
        </div>
        <div class="gird_method w_effect_up show">
            <div class="item active">
                <div class="w-item effect_up" style="animation-duration: 1.8s;">
                    <div class="i-icon"><i class="fa fa-globe"></i></div>
                    <div class="i-desc">
                        <div class="i-title">Đặt trực tiếp trên Web/App</div>
                        <div class="i-content">
                            <div class="text1">
                                <div class="email"><?=$web['info']['mail']?></div>
                            </div>
                            <div class="text2">Không cần đến đại lý. Nhanh nhất, tiện nhất và tiết kiệm nhất...</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="w-item effect_up" style="animation-duration: 0.9s;">
                    <div class="i-icon"><i class="fa fa-phone"></i></div>
                    <div class="i-desc">
                        <div class="i-title">Điện thoại đặt vé</div>
                        <div class="i-content">
                            <div class="ul_hotline" style="text-align: center;">
                                <ul>
                                    <li><a href="tel:<?=$web['info']['phone']?>"><?=$web['info']['phone']?></a></li>
                                    <?php if($web['anvui_id'] == 'TC0Cm1rweVdinjJi') { ?>
                                    <li><a href="tel:<?=$web['info']['phone']?>">1900.55.55.23</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="w-item effect_up" style="animation-duration: 1.5s;">
                    <div class="i-icon"><i class="fa fa-map-marker"></i></div>
                    <div class="i-desc">
                        <div class="i-title">Đến trực tiếp văn phòng</div>
                        <div class="i-content">
                            <div class="ul_map">
                                <ul>
                                    <li><span>Đến mua vé xe trực tiếp từ các bến xe hoặc điểm bán vé</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php if($data['content']['anvuiId'] == TC03m1MSnhqwtfE) { ?>
    <div class="time_work w_effect_up show"><span class="effect_up" style="animation-duration: 0.9s;">Giờ làm việc : từ 6h - 24h - Tất cả các ngày trong tuần</span></div>
    <?php } elseif($data['content']['anvuiId'] == TC03h1IzK1jParS) { ?>
    <div class="time_work w_effect_up show"><span class="effect_up" style="animation-duration: 0.9s;">Giờ làm việc :  Thứ 2 - Chủ Nhật : 24/7</span></div>

    <?php } elseif($web['anvui_id'] == 'TC0Cm1rweVdinjJi' || $web['anvui_id'] == 'TC09m1ql0HQCiixG' ) { ?>
    <div class="time_work w_effect_up show"><span class="effect_up" style="animation-duration: 0.9s;">Giờ làm việc : 24/7 Tất cả các ngày trong tuần</span></div>

    <?php } elseif($web['anvui_id'] == 'TC0B31rGICznLw9n') { ?>
    <div class="time_work w_effect_up show"><span class="effect_up" style="animation-duration: 0.9s;">UY TÍN - AN TOÀN - TẬN TÂM</span></div>
    <?php } else { ?>
    <div class="time_work w_effect_up show"><span class="effect_up" style="animation-duration: 0.9s;">Giờ làm việc : từ 6h - 24h - Tất cả các ngày trong tuần</span></div>
    <?php } ?>
    <style type="text/css">
        .av-book-method .time_work span:after{
            color: #c00;
        }
    </style>
</div>
<?php $_B['temp']->printhome(); ?>
<!--Modal chon tinh thanh-->
<div class="modal fade" id="choosePoint" tabindex="-1" role="dialog" aria-labelledby="chooseLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chooseLabel">Chọn tỉnh thành</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <style>
                .selectDistrict {
                    margin-top: 20px;
                }
            </style>
            <div class="modal-body row">
                <div class="col-md-12">
                    <select class="form-control select2" name="provideId" id="provideId">
                        <option value="">Chọn tỉnh thành</option>
                    </select>
                </div>
                <div class="col-md-12 selectDistrict" style="display: none">
                    <select class="form-control select2" name="districtId" id="districtId">
                        <option value="">Chọn quận huyện</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="typePoint">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

    <style>
    h3
    {
        font-size: 18px;
    }
    </style>

<?php if($web['anvui_id'] == 'TC0Ai1r7za9DJh1i' || $web['anvui_id'] == 'TC0B31rGICznLw9n' || $web['anvui_id'] == 'TC0BC1rJs03JKnvA' || $web['anvui_id'] == 'TC09F1qY4kzUWYJu' || $web['anvui_id'] == 'TC0761phLM2cBJrc' || $web['anvui_id'] == 'TC0BW1rRipZ8hlaZ' || $web['anvui_id'] == 'TC0CC1riPKQBfqot' || $web['anvui_id'] == 'TC0CJ1rlCZVe5Vrl' || $web['anvui_id'] == 'TC0CK1rlUyn1qquy' || $web['anvui_id'] == 'TC0Cm1rweVdinjJi') { ?>
<script>
    var isRound;
    var depatureDate;
    var startPoint;
    var startName;
    var endPoint;
    var endName;
    var companyId = $("base").attr("id");
    $(document).ready(function() {
        

        $('.select2').select2({
            dropdownParent: $('#choosePoint'),
            width: '100%',
            height: '40px'
        });


        $('#search-btn').on('click', function() {

            
            var url = '/dat-ve';

            depatureDate = $('#depatureDate').val();


            startPoint = $('#startPoint').val();
            endPoint = $('#endPoint').val();

            startName = $('#startPoint option:selected').text();
            endName = $('#endPoint option:selected').text();

            if (startPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điểm đi',
                });
                return false;
            }

            if (endPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điếm đến',
                });
                return false;
            }

            if (depatureDate === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn ngày đi',
                    onClose: function () {
                        $('#depatureDate').datepicker('show');
                    }
                });

                return false;
            }


            if (depatureDate) {
                url += '?depatureDate=' + depatureDate;
            }
           

            if(startName){
                url += '&startPoint=' + startName;
            }

            if(endName){
                url += '&endPoint=' + endName;
            }

            if (startPoint) {
                url += '&startId=' + startPoint;
            }


            if (endPoint) {
                url += '&endId=' + endPoint;
            }

            location = url;
        });

        //Lay danh sach tinh thanh

            $.ajax({
                type: 'POST',
                url: 'https://ticket-new-dot-dobody-anvui.appspot.com/point/getList',
                dataType: "json",
                data: JSON.stringify({ companyId: '<?=$data['content']['anvuiId']?>', count: 1000, pointType : 1 }),
                success: function(data) {
                    
                    var checklistCity = [];
                  

                    var listCityNew = [];
                    provinceData = data.results.result;
                    $.each(provinceData, function(index, val) {

                        console.log(checklistCity.indexOf(val.province));
                        if(checklistCity.indexOf(val.province) == -1){
                                checklistCity.push(val.province);

                                listCityNew.push({'text': val.province, 'children': []})
                        }

                    });

                    $.each(listCityNew, function(index, val) {
                      console.log();
                      $.each(provinceData, function(key, item) {

                          if(val.text === item.province){
                            listCityNew[index]['children'].push({'id' : item.id, 'text' : item.name})
                          }

                      });
                    })


                    console.log(listCityNew);
                    $("#startPoint").select2({

                        data: listCityNew
                    });
                    $("#endPoint").select2({

                        data: listCityNew
                    })
                }
            });

        

        

        $("#provideId").change(function() {
            var proviceId = $(this).val();

            $('#districtId').html('<option value="">Chọn điểm</option>');

            if (proviceId !== '') {
                district = provinceData.filter(function(val) {
                    return val.id === proviceId;
                });

                if ($('#typePoint').val() == 1) {
                    $('#startId').val(proviceId);
                    $('#startPoint').val(district[0].provinceName);
                } else {
                    $('#endId').val(proviceId);
                    $('#endPoint').val(district[0].provinceName);
                }

                $.each(district[0].listDistrict, function(index, val) {
                    $('#districtId').append("<option value='" + val.districtId + "'>" + val.districtName + "</option>");
                });
                $('.selectDistrict').show();
            } else {
                $('.selectDistrict').hide();

                if ($('#typePoint').val() == 1) {
                    $('#startId').val('');
                    $('#startPoint').val('');
                } else {
                    $('#endId').val('');
                    $('#endPoint').val('');
                }
            }
        });

        $("#districtId").change(function() {
            var districtId = $(this).val();
            if (districtId !== '') {
                var districtDetail = district[0].listDistrict.filter(function(val) {
                    return val.districtId === districtId;
                });
                if ($('#typePoint').val() == 1) {
                    $('#startId').val(districtId);
                    $('#startPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                } else {
                    $('#endId').val(districtId);
                    $('#endPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                }

                $('#choosePoint').modal('hide');
            } else {
                if ($('#typePoint').val() == 1) {
                    $('#startId').val(district[0].id);
                    $('#startPoint').val(district[0].provinceName);
                } else {
                    $('#endId').val(district[0].id);
                    $('#endPoint').val(district[0].provinceName);
                }

            }

        });

        $('#depatureDate').val($.format.date(new Date(), "dd/MM/yyyy"));



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
        if (companyId == 'TC03h1IzK1jParS') {
            urlAndroid = 'https://play.google.com/store/apps/details?id=vn.anvui.phucxuyen';
            urlIOs = 'https://itunes.apple.com/app/id1364355888';
        }

        if (isMobile.any() != null) {
            if (isMobile.any()[0] == 'Android' && urlAndroid != '') {
                window.location.href = urlAndroid;
            }

            if ((isMobile.any()[0] == 'iPhone' || isMobile.any()[0] == 'iPad' || isMobile.any()[0] == 'iPod') && urlIOs != '') {
                window.location.href = urlIOs;
            }
        }

        $('#depatureDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
            onSelect: function(dateStr) {
                changeDate(dateStr);
            }
        });

        $('#returnDate').datepicker({
            dateFormat: 'dd/mm/yy',
            defaultDate: "+0d",
            minDate: 0,
        });

        //Tìm chuyến
        $('#search-btn').click(function() {
            depatureDate = $('#depatureDate').val();
            returnDate = $('#returnDate').val();
            startPoint = $('#startPoint').val();
            endPoint = $('#endPoint').val();

            $('.start').html(routeName.split("-")[0]);
            $('.end').html(routeName.split("-")[1]);
            $('.startDate').html($('#depatureDate').val());
            $('.startDateReturn').html($('#returnDate').val());

            if (startPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điểm đi',
                });
                return false;
            }

            if (endPoint === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn điếm đến',
                });
                return false;
            }

            if (depatureDate === "") {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn ngày đi',
                    onClose: function() {
                        $('#depatureDate').datepicker('show');
                    }
                });

                return false;
            }

            //có khứ hồi
            if (isRound == 1) {

                if (returnDate === "") {
                    $.alert({
                        title: 'Cảnh báo!',
                        type: 'red',
                        typeAnimated: true,
                        content: 'Chưa chọn ngày về',
                        onClose: function() {
                            $('#returnDate').datepicker('show');
                        }
                    });
                    return false;
                }

                $('.endDate').html($('#returnDate').val());

                $('#trip-round').show();
                $('#total-round').show();

            }

            $('#trip-oneway').show();
            $('#next-step').show();
            $('#booking-form').hide();

        });

        //chọn khứ hồi
        $('#roundtrip').click(function() {
            isRound = 1;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').prop('disabled', false);
            changeDate($('#depatureDate').val());
        });

        //chọn một chiều
        $('#oneway').click(function() {
            isRound = 0;
            $('.selectday').removeClass('selected');
            $(this).addClass('selected');
            $('#returnDate').val('');
            $('#returnDate').prop('disabled', true);
        });
    });

    function changeDate(dateStr) {
        if (dateStr === '') {
            return;
        }
        var date_Str = '';
        for (var i = 0; i < 10; i++) {

            if (i == 1 || i == 0) {
                date_Str += dateStr.charAt(i + 3);
            } else if (i == 3 || i == 4) {
                date_Str += dateStr.charAt(i - 3);
            } else date_Str += dateStr.charAt(i);
        }
        if (isRound == 1) {
            $('#returnDate').datepicker("option", {
                minDate: new Date(date_Str)
            });
            $('#returnDate').val(dateStr);
        }
    }

    function getAds() {
        var companyId = $("base").attr("id");
        var dnow = new Date();
        var d = dnow.getTime();
        var ddata = [];
        $.ajax({
            type: 'POST',
            url: 'https://dobody-anvui.appspot.com/popup/get-list',
            dataType: "json",
            async: false,
            data: JSON.stringify({ companyId: companyId, date: d }),
            success: function(data) {
                if (data.code === 200) {
                    ddata = data.results.popUps;
                }
            }
        });
        return ddata;
    }
    </script>
<?php } ?>