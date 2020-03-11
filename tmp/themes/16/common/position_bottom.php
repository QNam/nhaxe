<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/16//common/position_bottom.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style type="text/css">
footer{
margin-top:0px !important;
}
</style>

        <?=$web['footer']?>

    <!--/.Footer Links-->


</footer>

<!--Box dat ve waterbus-->
<div id="bookingWaterBus" class="booking bookingWaterBusShow" style="display: none">
    <div class="row justify-content-center list-schedule">
        <div class="col-lg-6 col-md-6 col-12 water-bus-form">
            <div class="heading_top">
                <div class="row-fluid">
                    <a href="#" class="backScreen"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <div class=""><h3 style="text-align: center;">Đặt vé Tàu Buýt</h3></div>
                </div>
            </div>
            <h6 class="route-name text-center"></h6>
            <div class="row title-round no-margin-left-right" style="display: none">
                <div class="col-6 text-center">
                    Lượt đi
                </div>
                <div class="col-6 text-center">
                    Lượt về
                </div>
            </div>
            <div class="row no-margin-left-right">
                <div class="col-12 schedule-list">

                    <div class="loading"></div>
                </div>
                <div class="col-6 schedule-list-return" style="display: none">

                    <div class="loading"></div>
                </div>
            </div>
            <div class="row justify-content-center no-margin-left-right positon-btn-next">
                <button type="button" class="btn btn-default col-lg-6 col-md-6 col-sm-12 col-xs-12 btnNext">Tiếp tục</button>
            </div>
        </div>
    </div>
    <div class="row justify-content-center ticket-info" style="display: none">
        <div class="col-lg-6 col-md-6 col-12 water-bus-form">
            <div class="heading_top">
                <div class="row-fluid">
                    <a href="#" class="backScreen"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <div class=""><h3 style="text-align: center;">Đặt vé Tàu Buýt</h3></div>
                </div>
            </div>
            <h6 class="ticket-info-title text-center">Thông tin hành khách</h6>
            <div class="row no-margin-left-right">
                <div class="col-12 ticket-info-list">

                </div>
                <div class="col-12 total-ticket-info">
                    <div class="col-12 row no-margin-left-right margin-top10 margin-bottom10">
                        <div class="col-6">
                            <label>Thành tiền</label>
                            <input type="text" class="col-12 text-center form-control total-money" readonly>
                        </div>
                        <div class="col-6">
                            <label></label>
                            <button class="btn btn-default col-12 payment">Mua vé</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Box dat ve waterbus-->

<!--Box dat ve Saigonriver-->
<div id="booingSaigonRiver" class="booking" style="display:none;">
    <div class="row justify-content-center booing-form">
        <div class="col-lg-4 col-md-6 col-10 saigon-river-form">
            <div class="heading_top">
                <a href="#" class="backScreen"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
            <form action="#">
                <input type="hidden" value="VT04lBAQshIzA6" id="vehicleType">
                <div class="col-12">
                    <input type="text" class="form-control form-input datepicker" readonly id="depatureDateRiver">
                    <i class="fa fa-calendar datepicker-icon" aria-hidden="true"></i>
                </div>
                <div class="col-12 row no-margin-left-right margin-top10">
                    <button type="button" class="btn btn-default col-lg-2 col-md-3 col-sm-3 col-xs-2" id="downTicket">-</button>
                    <input type="text" class="form-control form-input col-lg-8 col-md-6 col-sm-6 col-xs-4" readonly id="numberTicket">
                    <button type="button" class="btn col-lg-2 col-md-3 col-sm-3 col-xs-4" id="upTicket">+</button>
                </div>
                <div class="col-12 margin-top40">
                    <button type="button" class="btn btn-default col-lg-12 col-md-12 col-sm-12 col-xs-12 btnForm" id="seachSaigonRiver">Đồng ý</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center list-schedule" style="display: none">
        <div class="col-lg-6 col-md-6 col-12 saigon-river-list">
            <div class="heading_top">
                <a href="#" class="backScreen"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
            <h6 class="route-name text-center">Lịch trình</h6>
            <div class="row no-margin-left-right">
                <div class="col-12 schedule-list">

                    <div class="loading"></div>
                </div>
            </div>
            <div class="row justify-content-center no-margin-left-right positon-btn-next">
                <button type="button" class="btn btn-default col-lg-6 col-md-6 col-sm-12 col-xs-12 btnNext">Tiếp tục</button>
            </div>
        </div>
    </div>
    <div class="row justify-content-center ticket-info" style="display: none">
        <div class="col-lg-6 col-md-6 col-12 saigon-river-list">
            <div class="heading_top">
                <a href="#" class="backScreen"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
            <h6 class="ticket-info-title text-center">Đặt vé</h6>
            <div class="row no-margin-left-right">
                <div class="col-12 ticket-info-list">

                </div>
                <div class="col-12 total-ticket-info">
                    <div class="col-12 row no-margin-left-right margin-top10 margin-bottom10">
                        <div class="col-6">
                            <label>Thành tiền</label>
                            <input type="text" class="col-12 text-center form-control total-money" readonly>
                        </div>
                        <div class="col-6">
                            <label></label>
                            <button class="btn btn-default col-12 payment">Mua vé</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End dat ve Saigonriver-->

<!--Box dat ve watertaxi-->
<div id="bookingWaterTaxi" class="booking" style="display: none">
    <div class="row justify-content-center booing-form">
        <div class="col-lg-6 col-md-6 col-12 water-taxi-form">
            <div id="content">
                <div class="heading_top">
                    <div class="row-fluid">
                        <a href="#" class="backScreen"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <div class=""><h3 style="text-align: center;">Đặt vé tàu taxi</h3></div>
                    </div>
                </div>
                <div class="innerLR">
                        <div class="col-md-12">
                            <div class="q-box">
                                <div class="form-dvtaxi">
                                    <label for="">DANH SÁCH ĐIỂM DỪNG <i class="fa fa-plus-circle add-stop-point-item" title="Thêm điểm dừng"></i></label>
                                    <div class="list-stop-point">
                                    </div>
                                    <button class="btn btn-primary w100 findInfo">TÌM CHUYẾN XE</button>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center list-schedule" style="display: none">
        <div class="col-lg-6 col-md-6 col-12 water-bus-form">
            <div id="content">
                <div class="heading_top">
                    <div class="row-fluid">
                        <a href="#" class="backScreen"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <div class=""><h3 style="text-align: center;">Đặt vé tàu taxi</h3></div>
                    </div>
                </div>
                <div class="innerLR">
                        <div class="col-md-12">
                            <div class="q-box">
                                
                                <div class="ticketInfo" style="display:block;">
                                    <label for="">SỐ LƯỢNG NGƯỜI ĐI</label>
                                    <div class="numberGuest">
                                        <div class="input-append w100">
                                            <button class="btn minusGuest" type="button"  style="width: 20%">-</button>
                                            <input type="number" id="numberOfGuest" value="1" style="width: 60%;text-align: center">
                                            <button class="btn plusGuest" type="button"  style="width: 20%">+</button>
                                        </div>
                                    </div>
                                    <div class="text-center">giá vé : <span style="color:#aa0000;font-weight: bold;font-size: 15px">500.000 VND</span></div>
                                    <hr>
                                    <label for="">THÔNG TIN CƠ BẢN</label>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center ticket-info" style="display: none">
        <div class="col-lg-6 col-md-6 col-12 water-bus-form">
            <div class="heading_top">
                <a href="#" class="backScreen"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
            <h6 class="ticket-info-title text-center">Đặt vé</h6>
            <div class="row no-margin-left-right">
                <div class="col-12 ticket-info-list">

                </div>
                <div class="col-12 total-ticket-info">
                    <div class="col-12 row no-margin-left-right margin-top10 margin-bottom10">
                        <div class="col-6">
                            <label>Thành tiền</label>
                            <input type="text" class="col-12 text-center form-control total-money" readonly>
                        </div>
                        <div class="col-6">
                            <label></label>
                            <button class="btn btn-default col-12 payment">Mua vé</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</div>
<!--End Box dat ve watertaxi-->

<!-- Bootstrap core JavaScript -->
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/vendor/jquery/jquery.min.js"></script>

<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/vendor/jquery/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://nhatau.vn/public/javascript/clockpicker/dist/bootstrap-clockpicker.min.css">
<script type="text/javascript" src="http://nhatau.vn/public/javascript/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/slick/slick.js"></script>
<script type="text/javascript">
    $(".centerSlide").slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
</script>
<script>



var listPoint; 
$.ajax({
    type: 'POST',
    url: 'https://dobody-anvui.appspot.com/point/get_province_and_point',
    dataType: "json",
    data: JSON.stringify({ packageName: "vn.anvui.saigonwaterbus", companyId: "TC03j1IanqGKIUS", style: 3}),
    success: function (data) {
        listPoint = data.results.result;
        console.log(listPoint);
        route = {};
            $('.list-stop-point').append(getItemPoint());//thêm 2 điểmlúc đàu;
            $('.list-stop-point').append(getItemPoint());

            $('body').on('change','.city',function () {
                var pid = $(this).val();
                var city = $.grep(listPoint,function (e,i) {
                    return e.id === pid;
                })[0]||[];
                listDistrict = [];
                if(city!==[]){
                    listDistrict = city.listDistrict;
                }
                $(this).parent().find('.district').html(getOptionPoint(listDistrict));
            });
            $('body').on('change','.district',function () {
                $('.ticketInfo').html('');
            });

            $('body').on('click','.plusGuest',function () {
                var numberOfGuest = parseInt($('#numberOfGuest').val());
                numberOfGuest = numberOfGuest+1;
                $('#numberOfGuest').val(numberOfGuest);
                showMoney(numberOfGuest);
            })
            $('body').on('click','.minusGuest',function () {
                var numberOfGuest = parseInt($('#numberOfGuest').val());
                if(numberOfGuest > 1){
                    numberOfGuest = numberOfGuest-1;
                }
                $('#numberOfGuest').val(numberOfGuest);
                showMoney(numberOfGuest);
            });
            $('body').on('change','#numberOfGuest',function () {
                showMoney($('#numberOfGuest').val());
            })
            $('body').on('click','.add-stop-point-item',function () {
                $('.list-stop-point').append(getItemPoint());
            })
            $('body').on('click','.del-point',function () {
                if($('.list-stop-point-item').length>2){
                    $('.ticketInfo').html('');
                    $(this).parents('.list-stop-point-item').remove();
                }
            });
            $('body').on('click','.findInfo',function () {

                if($('.district').length<2){
                    $.alert({
                        title: 'Thông báo!',
                        type: 'orange',
                        typeAnimated: true,
                        content: 'Bạn phải chọn ít nhất 2 điểm dừng',
                    });
                    return false;
                }
                route = '';
                $.each($('.district'),function (k,v) {
                    route+=$(v).val();
                    if(k!==$('.district').length-1){
                        route+='-';
                    }
                });
                
                $('#bookingWaterTaxi .booing-form').hide();
                $('#bookingWaterTaxi .list-schedule').show();

                $('.ticketInfo').html('Đang tìm tuyến ... ');
                $.ajax({
                    url : 'https://www.anvui.vn/taxi',
                    type: 'post',
                    data : {
                        companyId : 'TC03j1IanqGKIUS',
                        pointString : route,
                    },
                    dataType:'json',
                    success : function (res) {
                        console.log(res);
                        if(res.results.route!=='null'){
                            route = res.results.route;
                            $('.ticketInfo').html(generateSellTicket());
                            setFormSell();
                        }else {
                            $('.ticketInfo').html('Không có chuyến nào');
                            route = {};
                        }
                    },
                    functionIfError : function (err) {
                        route = {};
                        $('.ticketInfo').html('Có lỗi xảy ra, vui lòng thử lại sau ');
                    }
                })
            });
            $('body').on('click','[action-sell-ticket]',function () {
                if($('#fullName').val()===""){
                    $.alert({
                        title: 'Thông báo!',
                        type: 'orange',
                        typeAnimated: true,
                        content: 'Vui lòng điền đầy đủ thông tin',
                    });
                    $('#fullName').focus();
                    return false;
                }
                if($('#phoneNumber').val()===""){
                    $.alert({
                        title: 'Thông báo!',
                        type: 'orange',
                        typeAnimated: true,
                        content: 'Vui lòng điền đầy đủ thông tin',
                    });
                    $('#phoneNumber').focus();
                    return false;
                }
                if($('#email').val()===""){
                    $.alert({
                        title: 'Thông báo!',
                        type: 'orange',
                        typeAnimated: true,
                        content: 'Vui lòng điền đầy đủ thông tin',
                    });
                    $('#email').focus();
                    return false;
                }
                var option = $(this).attr('action-sell-ticket');
                var fullName = $('#fullName').val();
                var phoneNumber = $('#phoneNumber').val();
                var email = $('#email').val();
                var note = $('#note').val();
                var numberOfGuest = $('#numberOfGuest').val();
                var agencyPrice = setMoney(numberOfGuest);
                var paymentTicketPrice = agencyPrice;
                var getInPointId = $('.district').first().val();
                var getOffPointId = $('.district').last().val();
                var date = new Date($('#datepicker').val()+ ' '+ $('#timepicker').val() + ':00').getTime();

                var dataRequest = {
                    companyId : 'TC03j1IanqGKIUS',
                    routeId : route.routeId,
                    seatMapId : 'SM04h1UvPKqsDPU',
                    fullName : fullName,
                    phoneNumber : phoneNumber,
                    email : email,
                    note :note,
                    getInPointId : getInPointId,
                    getOffPointId : getOffPointId,
                    agencyPrice : agencyPrice,
                    paymentTicketPrice :paymentTicketPrice,
                    date :date,
                    platform : '2',
                    listOption :[]
                }
                if(option ==="3"){
                    dataRequest.paidMoney = agencyPrice;
                    dataRequest.ticketStatus=3;
                }else{
                    dataRequest.paidMoney = 0;
                    dataRequest.ticketStatus=7;
                }
                for(var i = 0;i<numberOfGuest;i++){
                    dataRequest.listOption.push({isAdult :true,fullName : fullName,phoneNumber :phoneNumber});
                }
                var self = this;
                $(this).text('Đang gửi Yêu cầu');
                $.ajax({
                    url : 'https://www.anvui.vn//createnoseatidtaxi',
                    type: "post",
                    dataType:"json",
                    data : dataRequest,
                    success : function (res) {
                        
                        if(option ==="3"){
                            $(self).text('ĐẶT VÉ VÀ THANH TOÁN');
                            $.ajax({
                                url : 'https://dobody-anvui.appspot.com/ePay/',
                                type: "post",
                                dataType:"json",
                                data: JSON.stringify({ticketId: res.results.ticket.ticketId, packageName : "saigonvn", phoneNumber: res.results.ticket.phoneNumber, paymentType: 1  }),
                                success: function(data){

                                    $.dialog({
                                        title: 'Thông báo!',
                                        content: 'Hệ thống đang chuyển sang cổng thanh toán, vui lòng đợi trong giây lát',
                                        onClose: function (e) {
                                            e.preventDefault();
                                        }
                                    });

                                    var redirect = data.results.redirect;
                                    setTimeout(function () {
                                        window.location.href = redirect;
                                    }, 3000);
                                    
                                }
                            });
                        }else{
                            $.alert({
                                title: 'Thông báo!',
                                type: 'success',
                                typeAnimated: true,
                                content: "Đặt thành công, mã vé :"+ res.results.ticket.ticketCode +  "Khách hàng : "+res.results.ticket.fullName
                            });
                            $(self).text('ĐẶT VÉ');

                        }
                    },functionIfError :function (err) {
                        console.log(err);
                        $(self).text('Lỗi ! Gửi lại ');
                    }
                })
            });

        function getItemPoint() {
            html='';
            html+='<div class="list-stop-point-item">' +
                '<div class="input-append w100">' +
                '<select name="" class="city form-control form-input" class=""  id="">' +
                getOptionCity()+
                '</select>' +
                '<select name="" class="district form-control form-input"  id="">' +
                getOptionPoint(listPoint[0].listDistrict) +
                '</select>' +
                '<button class="btn del-point" type="button"  style="width: 10%"><i class="fa fa-trash"></i></button>' +
                '</div>\n' +
                '</div>';
            return html;
        }

        function getOptionCity() {
            html='';
            $.each(listPoint,function (i,e) {
                html+='<option data-list-point="'+JSON.stringify(e.listDistrict)+'" value="'+e.id+'">'+e.provinceName+'</option>'
            })
            return html;
        }
        function getOptionPoint(points) {
            // xóa thông tin cũ
            $('.ticketInfo').html('');
            html='';
            $.each(points,function (i,e) {
                html+='<option value="'+e.districtId+'">'+e.districtName+'</option>';
            })
            return html;
        }
        function generateSellTicket() {
            var now= new Date();
            var nowTime = now.getHours()+':'+now.getMinutes();
            html = '';
            
            html += '<label for="">THÔNG TIN KHÁCH HÀNG</label>';
            html += '<div>';
            html += '<label>Họ tên</label>';
            html += '<input type="text" class="w100 form-control form-input" id="fullName" placeholder="Họ tên khách hàng">';
            html += '<label>SDT</label>';
            html += '<input type="text" class="w100 form-control form-input" id="phoneNumber" placeholder="số điện thoại">';
            html += '<label>Email nhận thông tin vé</label>';
            html += '<input type="email" class="w100 form-control form-input" id="email" placeholder="abc@gmail.com">';
            html += '<label>Ghi chú</label>';
            html += '<input type="text" class="w100 form-control form-input" id="note" placeholder="Ghi chú">';
            html += '<div style="font-weight: bold;font-style: italic">'+route.note+'</div>';
            html += '<label>Thời gian đi</label>';
            html += '<div class="input-append w100">';
            html += '<div class="time-d">';
            html += '<input type="text" class="form-control form-input" style="width: 50%; float:left" id="datepicker" placeholder="dd/mm/yyyy">';
            html += '</div>';
            html += '<div class="time-h">';
            html += '<input type="text" class="form-control form-input" style="width: 50%; float:left" id="timepicker" placeholder="hh:mm" value="'+nowTime+'">';
            html += '</div>';
            html += '</div>';
            html += '<label for="">SỐ LƯỢNG NGƯỜI ĐI</label>';
            html += '<div class="numberGuest">';
            html += '<div class="input-append w100">';
            html += '<button class="btn minusGuest" type="button"  style="width: 20%; float:left">-</button>';
            html += '<input type="number" class="form-control form-input" id="numberOfGuest" value="1" style="width: 60%;text-align: center; float:left">';
            html += '<button class="btn plusGuest" type="button"  style="width: 20%; float:left">+</button>';
            html += '</div>';
            
            html += '</div>';
            html += '<div class="text-center" style="float: left;width: 100%;"><span class="title-v" style="    display: inline-block;">Giá vé :</span> <span class="totalMoney" style="color:#aa0000;font-weight: bold;font-size: 15px;display: inline-block;"></span></div>';
            html += '<div class="wd-boxx">';
            html += '<button type="button" class="btn btn-warning" action-sell-ticket="7">ĐẶT VÉ</button> ';
            html += '<button type="button" class="btn btn-success" action-sell-ticket="3">ĐẶT VÉ VÀ THANH TOÁN</button>';
            html += '</div>';
            
            html += '</div>';
            
            return html
        }
        function setMoney(numberGuest) {
            money = 0;
            $.each(route.peopleBlocks,function (i,e) {
                if(numberGuest >= e.from&&numberGuest<=e.to){
                    money = e.price;
                }
            });
            return money;
        }
        function showMoney(numberOfGuest) {
            $('.totalMoney').html(setMoney(numberOfGuest) + "vnđ");
        }
        function setFormSell() {
            showMoney($('#numberOfGuest').val());
            $('#datepicker').datepicker({dateFormat :'mm/dd/yy'}).datepicker("setDate", new Date());
            $('#timepicker').clockpicker({autoclose :true});
        }
    }
});







</script>

<script type="text/javascript">
    
    $("#startPointTaxi").click(function(){
        $('#typePoint').val(1);
        $('#choosePoint').modal("show")
    })
    $("#endPointTaxi").click(function(){
        $('#typePoint').val(2);
        $('#choosePoint').modal("show")
    })
    $.ajax({


        type: 'POST',
        url: 'https://dobody-anvui.appspot.com/point/get_province_and_point',
        dataType: "json",
        data: JSON.stringify({ packageName: "vn.anvui.saigonwaterbus", companyId: "TC03j1IanqGKIUS", style: 3}),
        success: function (data) {
            provinceData = data.results.result;
            $.each(provinceData, function (index, val) {
                $('#provideId').append("<option value='" + val.id + "'>" + val.provinceName + "</option>");
            });


            $("#provideId").change(function() {
                var proviceId = $(this).val();


                console.log(proviceId);

                $('#districtId').html('<option value="">Chọn điểm</option>');

                if(proviceId !== '') {
                    district = provinceData.filter(function(val) {
                        return val.id === proviceId;
                    });


                    console.log(district);


                    if($("#typePoint").val() == 1) {
                        startPoint = proviceId;
                        $("#startPointTaxi").val(district[0].unitName + " " + district[0].provinceName);
                        $("#startPointTaxi").attr("data-point", startPoint);

                    } else {
                        endPoint = proviceId;
                        $("#endPointTaxi").val(district[0].unitName + " " + district[0].provinceName);
                        $("#endPointTaxi").attr("data-point", endPoint);
                    }

                    $.each(district[0].listDistrict, function (index, val) {
                        $("#districtId").append("<option value='" + val.districtId + "'>" + val.districtName + "</option>");
                    });
                    $(".selectDistrict").show();
                } else {
                    $(".selectDistrict").hide();

                    if($("#typePoint").val() == 1) {
                        startPoint = '';
                        $("#startPointTaxi").val('');
                    } else {
                        endPoint = '';
                        $("#endPointTaxi").val('');
                    }
                }
            });

            $("#districtId").change(function() {
                var districtId = $(this).val();

                console.log(districtId);
                if(districtId !== '') {
                    var districtDetail = district[0].listDistrict.filter(function(val) {
                        return val.districtId === districtId;
                    });

                    console.log(districtDetail);
                    if($('#typePoint').val() == 1) {
                        startPoint = districtId;
                        $('#startPointTaxi').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                        $("#startPointTaxi").attr("data-point", startPoint);
                    } else {
                        endPoint = districtId;
                        $('#endPointTaxi').val(districtDetail[0].districtName + ", " + district[0].provinceName);
                        $("#endPointTaxi").attr("data-point", endPoint);
                    }

                    $('#choosePoint').modal('hide');
                } else {
                    if($('#typePoint').val() == 1) {
                        startPoint = district[0].id;
                        $('#startPointTaxi').val(district[0].unitName + " " + district[0].provinceName);
                    } else {
                        endPoint = district[0].id;
                        $('#endPointTaxi').val(district[0].unitName + " " + district[0].provinceName);
                    }

                }

            });
        }



    });


    

    // $("#districtId").change(function() {
    //     var districtId = $(this).val();
    //     if(districtId !== '') {
    //         var districtDetail = district[0].listDistrict.filter(function(val) {
    //             return val.districtId === districtId;
    //         });
    //         if($('#typePoint').val() == 1) {
    //             startPoint = districtId;
    //             $('#startPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
    //         } else {
    //             endPoint = districtId;
    //             $('#endPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
    //         }

    //         $('#choosePoint').modal('hide');
    //     } else {
    //         if($('#typePoint').val() == 1) {
    //             startPoint = district[0].id;
    //             $('#startPoint').val(district[0].unitName + " " + district[0].provinceName);
    //         } else {
    //             endPoint = district[0].id;
    //             $('#endPoint').val(district[0].unitName + " " + district[0].provinceName);
    //         }

    //     }

    // });
</script>

<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/jquery-confirm/dist/jquery-confirm.min.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/jquery-dateformat.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/creative.min.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/jquery-ui.min.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/jquery.ui.datepicker-vi.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/map.module.js"></script>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/core.js"></script>

<!--Module waterbus-->
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/waterbus/waterbus.module.js?v=2.5"></script>
<!--End waterbus-->

<!--Module saigonriver-->
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/saigonriver/saigonriver.module.js?v=1.2"></script>
<!--End saigonriver-->

<!--Module watertaxi-->
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/watertaxi/watertaxi.module.js?v=3.3"></script>
<!--End watertaxi-->

<!--Module watertaxi-->
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/js/trolley/trolley.module.js"></script>
<!--End watertaxi-->
<script type="text/javascript" src="http://anvui.vn/themes/1/js/jarallax.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZKcLL5G9t6MGhYHwl7JN50LEhvDysIZ8">
</script>

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

<style type="text/css">
    #header{
        height: 100%;
    }
</style>
<?php if($web['audio'] != null) { ?>
<audio controls autoplay<?php if($web['audio']['play_again'] == 1) { ?> loop<?php } ?> style="display:none">
<source src="<?=$web['static_upload']?><?=$web['audio']['audio']?>" type="audio/mpeg">
</audio>
<?php } ?>