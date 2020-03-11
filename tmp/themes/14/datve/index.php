<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/14//datve/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style>
    body {
        /*background: url("https://sonycenter.sony.com.vn/Data/Sites/1/media/vinh-ha-long_schk/halong-2.jpg");*/
        /*background: url("<?=$web['static_temp']?><?=$web['temp']?>/statics/images/halong-2.jpg");
        background-size: auto 100%;*/
    }

    .loader {
        top: 50%;
        left: 50%;
        border: 16px solid #f3f3f3;
        border-top: 16px solid #3498db;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        position: absolute;
    }
    .activeDxb{
        display: none;
    }
    #loading {
        padding-top: 150px;
        top: 0;
        position: fixed;
        width: 100%;
        height: 100%;
        z-index: 999;
        background-color: rgba(0, 0, 0, 0.5);
        text-align: center;
    }
    div#next-step {
        display: none !important;
    }
    #roundtrip{
        display: none;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
</style>

<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/styledv2.css?v=5.0">
<div class="route-list datve-home wp-datve-dz" style="margin-top: 0px">
    <div class="container">
        <form action="dat-ve" id="search-form" style="display: none;">
            
            <div class="row" style="margin-bottom: -15px;">
                <div class="clearfix">
                    <div class="row chonchieu" style="display: none;">
                        <button type="button" class="btn btn-oder selectday selected" id="oneway">Một chiều</button>
                        <!-- <button type="button" class="btn btn-oder selectday" id="roundtrip">Khứ hồi</button> -->
                    </div>
                    <div class="col-md-3 ">
                        <label for="startPoint" class="label-cus">Điểm đi</label>
                        <div class="iconic-input">
                            <i class="fa fa-map-marker"></i>
                            <input type="text" class="form-control" name="startPoint" id="startPoint" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <label for="endPoint" class="label-cus">Điểm đến</label>
                        <div class="iconic-input">
                            <i class="fa fa-map-marker"></i>
                            <input type="text" class="form-control" name="endPoint" id="endPoint" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <label for="depatureDate" class="label-cus">Ngày đi</label>
                        <input type="text" class="form-control datepicker" name="depatureDate" id="depatureDate" readonly>
                    </div>
                    <div class="col-md-6" style="display: none;">
                        <label for="depatureDate" class="label-cus">Ngày về</label>
                        <input type="text" class="form-control datepicker" name="returnDate" id="returnDate" readonly>
                    </div>
                    <div class="col-md-3 ">
                        <input type="hidden" id="startId" name="startId">
                        <input type="hidden" id="routeIdd" name="routeIdd" >
                        <input type="hidden" id="endId" name="endId">
                        <button type="submit" class="btn" id="search-btn" style="    margin-top: 24px;">TÌM KIẾM</button>
                    </div>
                </div>

                    <style type="text/css">
                        .ui-autocomplete-group {
                            line-height: 30px;
                            background-color: #aaa;
                        }
                        .ui-menu-item {
                            padding-left: 10px;
                        }
                    </style>

                
                <div class="col-xs-12 hide">
                    <label for="vehicleType" class="label-cus">Loại xe</label>
                    <select name="vehicleType" id="vehicleType" class="form-control">
                    </select>
                </div>

                <div class="clearfix">
                    
                </div>

            </div>

        </form>
    </div>
</div>
<style type="text/css">
    .col-2{
        width: 20%;
        float: left;
    }
    .wp-datve-dz{
        background: #ffc432;
    }
    .wp-datve-dz {
        background: #ffc432;
        border: none !important;
    }
    #search-form {
        /* background: #fff; */
        padding: 20px 0px;
        position: relative;
    }
</style>
<div id="loading" style="display: none;">
    <div class="loader"></div>
</div>
<div class="container">
    <div class="row">
            <div id="select-trip">
                <div id="trip-oneway" style="display: none">
                <div class="col-md-12">
                    <div id="steps">
                        <ul class="list-step clearfix">
                            <li class="active">Chọn chuyến <span></span> </li>
                            <li>Chi tiết vé<span></span></li>
                            <li>Thanh toán <span></span></li>
                        </ul>
                    </div>
                    <h3 class="chooseticket">1. Lựa chọn chuyến đi</h3>
                    <h4 class="trip">
                        <strong class="start"></strong>
                        <span class="scb-to"> Tới: </span>
                        <strong class="end"></strong>
                         
                    </h4>
                    <div class="oneway-info">
                        <span class="fdate-highlight">
                            Ngày đi: <strong class="startDate"></strong>
                        </span>
                    </div>
                    <div class="table-responsive list-trip">
                        <div id="list-oneway">
                        </div>
                    </div>

                    <div id="trip-round" style="display: none">

                        <h3 class="chooseticket">2. Lựa chọn chuyến về</h3>
                        <h4 class="trip">
                            <strong class="end"></strong>
                            <span class="scb-to"> Tới: </span>
                            <strong class="start"></strong>

                           
                        </h4>
                        <div class="oneway-info">
                            <span class="fdate-highlight">
                                Ngày đi: <strong class="endDate"></strong>
                            </span>
                        </div>
                        <div class="table-responsive list-trip">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Chuyến xe</th>
                                    <th>Loại xe</th>
                                    <th>Khởi hành</th>
                                    <th>Đến</th>
                                    <th>Ghế trống</th>
                                    <th>Giá vé</th>
                                </tr>
                                </thead>
                                <tbody id="list-roundway">

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                </div>
                
                <div id="next-step" class="scrollDown" style="display: none">
                    <button type="button" class="btn" id="select-seat">Tiếp tục</button>
                    <button type="button" class="btn" id="back">Chọn lại</button>
                </div>
            </div>
            
    </div>
</div>

<!--Modal-->
<div class="modal fade" id="chuyenkhoan" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="center-top-header">
                    <div class="col-md-3">
                        <img src="./themes/14/statics/imgs/bus-check.svg">
                    </div>
                    <div class="col-md-9">
                        <p class="dctt">Đặt chỗ thành công</p>
                        <p>Cảm ơn quý khách <span class="name_customer">Doanh Le</span></p>
                    </div>
                </div>
                
                <div></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ttck-skh ">
                <p class="df-p">Thành Tiền: <span class="tt-ck">380,000 đ</span></p>
                <p class="df-p">Quý khách  vui lòng chuyển khoản vào một trong những tài khoản sau:</p>
                <?php if($web['anvui_id'] == 'TC0761phLM2cBJrc') { ?>
                <div class="row">
                    
                        <div class="col-md-6">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">HÀ VĂN THỊNH</div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">19026383263026</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">TECHCOMBANK</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds">Đồng Nai - Tỉnh Đồng Nai</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">HÀ VĂN THỊNH</div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">0121002424604</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">VIETCOMBANK</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds">Đồng Nai - Tỉnh Đồng Nai</div>
                            </div>
                        </div>
                    

                    
                    <div class="col-md-8 col-md-offset-2">
                        
                        <div class="ll">
                            <h3>LƯU Ý</h3>
                            <p>Nội dung chuyển khoản: <i id="phone"></i> thanh toan ma ve <i id="ticketId"></i></p>
                            <p>Khi chuyển khoản anh chi vui lòng ghi nội dung số điện thoại người đặt vé giúp e. Sau khi bên em nhận được thông tin sẽ gọi lại cho anh chị để xác nhận . </p>
                            <p>Nếu huỷ vé anh/ chị vui lòng hủy trước giờ khởi hành 24 tiếng và mất 10% phí. Hủy sau 24h vé sẽ không được hoàn lại tiền và Đối với các ngày lễ tết không hoàn, không đổi, không trả vé. Xin trân trọng cảm ơn.</p>
                        </div>

                    </div>
                </div>
                <?php } ?>
                <?php if($web['anvui_id'] == 'TC0AU1r2R982ex93') { ?>
                <div class="row">
                    
                        <div class="col-md-8 col-md-offset-2">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">NGUYỄN THỊ THÚY LINH</div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">100004799075</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">VIETINBANK</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds">KON TUM</div>
                            </div>
                        </div>
                        

                    
                    <div class="col-md-8 col-md-offset-2">
                        
                        <div class="ll">
                            <h3>LƯU Ý</h3>
                            <p>Nội dung chuyển khoản: <i id="phone"></i> thanh toan ma ve <i id="ticketId"></i></p>
                            <p><span style="font-weight: bold; color: #000;">(*) Lưu ý:</span> Khi chuyển khoản,quý khách vui lòng ghi nội dung số điện thoại, mã vé của người đặt. Sau khi nhà xe nhận được thông tin, tổng đài viên sẽ liên hệ lại với quý khách để xác nhận. Chân thành cảm ơn sự tin tưởng và ủng hộ của quý khách </p>
                            
                        </div>

                    </div>
                </div>
                <?php } ?>

                <?php if($web['anvui_id'] == 'TC0Cm1rweVdinjJi') { ?>
                <div class="row">
                    
                        <div class="col-md-8 col-md-offset-2">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">TRẦN SƠN TÙNG</div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">0051000034357</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">Vietcombank</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds">Quy Nhơn</div>
                            </div>
                        </div>
                        

                    
                    <div class="col-md-8 col-md-offset-2">
                        
                        <div class="ll">
                            <h3>LƯU Ý</h3>
                            <p>Nội dung chuyển khoản: <i id="phone"></i> thanh toan ma ve <i id="ticketId"></i></p>
                            <p><span style="font-weight: bold; color: #000;">(*) Lưu ý:</span> Khi chuyển khoản,quý khách vui lòng ghi nội dung số điện thoại, mã vé của người đặt. Sau khi nhà xe nhận được thông tin, tổng đài viên sẽ liên hệ lại với quý khách để xác nhận. Chân thành cảm ơn sự tin tưởng và ủng hộ của quý khách </p>
                            
                        </div>

                    </div>
                </div>
                <?php } ?>
                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_ck">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal-->

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
                        <option value="">Chọn điểm</option>
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

<script type="text/javascript">
    <?php if($data['content']['timeBookHolder']) { ?>
    var timeBookHolder = <?=$data['content']['timeBookHolder']?>;
    <?php } else { ?>
    var timeBookHolder = '';
    <?php } ?>
    
</script>

<?php if($web['anvui_id'] == 'TC0Cm1rweVdinjJi' || $web['anvui_id'] == 'TC09m1ql0HQCiixG' || $web['anvui_id'] == 'TC0AU1r2R982ex93' || $web['anvui_id'] == 'TC0Ai1r7za9DJh1i' || $web['anvui_id'] == 'TC0B31rGICznLw9n' || $web['anvui_id'] == 'TC0BC1rJs03JKnvA' || $web['anvui_id'] == 'TC09F1qY4kzUWYJu' || $web['anvui_id'] == 'TC0761phLM2cBJrc' || $web['anvui_id'] == 'TC0BW1rRipZ8hlaZ' || $web['anvui_id'] == 'TCO_Rjnhu0WS0' || $web['anvui_id'] == 'TC05wM7dDRQSo6' || $web['anvui_id'] == 'TC0CC1riPKQBfqot' || $web['anvui_id'] == 'TC0Bp1rZFPJNRYty' || $web['anvui_id'] == 'TC0CJ1rlCZVe5Vrl' || $web['anvui_id'] == 'TC0CK1rlUyn1qquy' || $web['anvui_id'] == 'TC05wM7dDRQSo6') { ?>
<script src="/themes/14/statics/js/anvui2.js?v=1.<?php echo time() ?>123"></script>
<?php } else { ?>
<script src="/themes//14/statics/js/anvui.js?v=1.<?php echo time() ?>123"></script>
<?php } ?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    var routeId = getParameterByName('routeIdd');


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
        var companyId = $("base").attr("id");
        console.log(companyId);
        //Lay danh sach tinh thanh
       
        $.ajax({
            type: 'POST',
            url: 'https://ticket-new-dot-dobody-anvui.appspot.com/point/getList',
            dataType: "json",
            data: JSON.stringify({ companyId: companyId, count: 1000, pointType : 1 }),
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


                $("#startPoint").select2({

                    data: listCityNew
                });
                $("#endPoint").select2({

                    data: listCityNew
                });

                if( routeId !== ''){
                    $.ajax({
                        type: 'POST',
                        url: 'https://ticket-new-dot-dobody-anvui.appspot.com/route/view',
                        dataType: "json",
                        data: JSON.stringify({ id: routeId}),
                        success: function(data) {
                           console.log(data);

                           var dataRoute = data.results.route.listPoint;
                           var countD = dataRoute.length - 1;
                           console.log(countD);
                           console.log(dataRoute[0].id);
                           // $("#startPoint").select2("val", dataRoute[0].id);
                           // $("#endPoint").select2("val",dataRoute[countD].id);
                           $("#select2-startPoint-container").text(dataRoute[0].name);
                           $("#select2-endPoint-container").text(dataRoute[countD].name)

                           $("#startPoint").val(dataRoute[0].id);
                           $("#endPoint").val(dataRoute[countD].id);
                        }
                    });
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

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
</script>
<style type="text/css">
    .select-seat{
        width: 100%;
    }
    .click-back a {
        background: #c00;
        padding: 5px 15px;
        color: #fff;
        float: right;
        margin: 15px 0px;
        border-radius: 5px;
    }
    .iconic-input i {
        
        color: #555;
        font-size: 18px;
        margin: 10px 0 0 10px;
        position: absolute;
    }
    
    .iconic-input input {
        padding-left: 25px;
    }
    .jconfirm {
        
        z-index: 1;
    }
    .ll p {
        font-size: 15px;
    }
    .ndcktd:before{
    content:'"';
    color:#000;
    padding-right:5px;

}
.ndcktd:after{
    content:'"';
    color:#000;
    padding-left:7px
    

}
</style>


