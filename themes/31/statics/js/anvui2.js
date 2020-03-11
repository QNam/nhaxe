//Các biến global
var depatureDate;
var returnDate;
var routeId;
var routeBackId;
var tripIdOneway; //Trip chuyen di
var tripIdReturn; //Trip chuyen di
var scheduleIdOneway; //Schedule chuyen di
var scheduleIdReturn; //Schedule chuyen ve
var startPoint;
var endPoint;
var isRound;
var seatInfoOneway;
var seatInfoReturn;
var ticketPriceOneway = 0;
var agencyPrice = 0;
var ticketPriceReturn = 0;
var ticketRatioOneway = 0;
var ticketRatioReturn = 0;
var ghenguoilondi = [];
var ghenguoilonve = [];
var ghetreemdi = [];
var ghetreemve = [];
var babyMoney = 0;
var adultMoney = 0;
var babyMoneyReturn = 0;
var adultMoneyReturn = 0;
var totalMoneyOneway = 0;
var totalMoneyReturn = 0;
var totalMoney = 0;
var intimeOneway = 0;
var intimeReturn = 0;
var companyId;
var startDate;
var startDateOneway;
var startDateReturn;
var seatListOneway;
var inPointOneway;
var inPointReturn;
var offPointOneway;
var offPointReturn;
var pointUpId;
var pointDownId;
var promotionMoney = 0;
var promotionPercent = 0;
var isPromotion = false;
var searchPointOption;
var pointUp;
var pointDown;
//Biến check ghế trẻ em đi tăng giảm
var checkBabyOnewayLength = 0;
//Biến check ghế người lớn đi tăng giảm
var checkAdultOnewayLength = 0;
var noteTrungchuyen = '';
var checkBabyReturnLength = 0;
var checkAdultReturnLength = 0;
var htmlThanhtoanmgp = '';
var htmlThanhtoanmgpv = '';
var extraPrice = 0;
/*Giá trung chuyển*/
var trashipmentPriceOneway = 0;
var trashipmentPriceReturn = 0;
var trashipmentPriceInPointOneway = 0;
var trashipmentPriceOffPointOneway = 0;
var trashipmentPriceInPointReturn = 0;
var trashipmentPriceOffPointReturn = 0;

var transshipment = 0;
var addPri = {};

var provinceData;
var district;
$(document).ready(function () {



    $('#next-step').removeClass('scrollDown');
    $('#depatureDate').val($.format.date(new Date() ,"dd/MM/yyyy"));

    companyId = $("base").attr("id");

    if(companyId == 'TC1OHmbCcxRS') {
        $('#radiochuyenkhoan').show();
    }



    if(companyId === 'TC0B31rGICznLw9n'){
        noteTrungchuyen = 'Trung chuyển sẽ đón trước nhiều nhất là 30 phút tùy điểm bạn chọn';
    }

    
    //Lấy dữ liệu từ url, dư liệu lấy start và end đặc biệt
    console.log(getParameterByName('startId').length);

    if(getParameterByName('startId').length > 3){
        startPoint = getParameterByName('startId');
        searchPointOption
    }else{
        startPoint = getParameterByName('startPoint');
    }

    if(getParameterByName('endId').length > 3){
        endPoint = getParameterByName('endId');
    }else{
        endPoint = getParameterByName('endPoint');
    }
    
    depatureDate = getParameterByName('depatureDate');
    // returnDate = getParameterByName('returnDate');
    returnDate = '';
    startText = getParameterByName('startPoint');
    endText = getParameterByName('endPoint');



    console.log(startPoint);
    console.log(endPoint);
    console.log(depatureDate);

    var res = depatureDate.split("/");
    var dateConver = res[1]+'/'+res[0]+'/'+res[2];
    console.log(dateConver);

    if(startPoint != null && endPoint != null && depatureDate != null) {
        isRound = 0;
        // $('#booking-form').hide();
        $('#loading').show();
        $('.start').html(startText);
        $('.end').html(endText);
        $('.startDate').html(depatureDate);

            
        startDate = new Date(dateConver).getTime();

        console.log(startDate);

        $('.routeName').html(startText + " - " + endText);
        $('.routeNameReturn').html(endText + " - " + startText);
        getSchedule(startPoint, endPoint, depatureDate, false);
        $('#trip-oneway').show();
        if(returnDate != '') {
            isRound = 1;
            getSchedule(endPoint, startPoint, returnDate, true);
            $('.startDateReturn').html(returnDate);
            $('#trip-round').show();
            $('.select-seat-round').show();
        }

        // $('#next-step').show();
        $('#back').hide();
    }

    $('#startPoint').click(function () {
        $('#typePoint').val(1);
        $('#choosePoint').modal('show');
    });

    $('#endPoint').click(function () {
        $('#typePoint').val(2);
        $('#choosePoint').modal('show');
    });

   
    //Chỉ cho phép nhập số
    $('#phoneNumber').on('keypress keyup blur', function () {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

    $('#depatureDate').datepicker({
        dateFormat: 'dd/mm/yy',
        defaultDate: "+0d",
        minDate: 0,
        onSelect: function (dateStr) {
            // getSchedule(startPoint, endPoint, dateStr, routeId, false);
            changeDate(dateStr);
        }
    });

    $('#returnDate').datepicker({
        dateFormat: 'dd/mm/yy',
        defaultDate: "+0d",
        minDate: 0,
        onSelect: function (dateStr) {
            // getSchedule(endPoint, startPoint, dateStr, true);
        }
    });

    //thiết lập mặc định
    $('#isRoundTrip').val(0);
    $('#returnDate').prop('disabled', true);

    //chọn khứ hồi
    $('#roundtrip').click(function () {
        $('#isRoundTrip').val(1);
        $('.selectday').removeClass('selected');
        $(this).addClass('selected');
        $('#returnDate').prop('disabled', false);
        changeDate($('#depatureDate').val());
    });

    //chọn một chiều
    $('#oneway').click(function () {
        $('#isRoundTrip').val(0);
        $('.selectday').removeClass('selected');
        $(this).addClass('selected');
        $('#returnDate').val('');
        $('#returnDate').prop('disabled', true);
    });

    // Giữ nút thanh toán đi theo chuột
    $(window).scroll(function () {
        searchScroll();
        paymentScroll();
    });

    //Tìm chuyến
    $('#search-btn').click(function () {
            depatureDate = $('#depatureDate').val();
            returnDate = "";
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
                    onClose: function () {
                        $('#depatureDate').datepicker('show');
                    }
                });

                return false;
            }

            //có khứ hồi
            if(isRound == 1) {

                if (returnDate === "") {
                    $.alert({
                        title: 'Cảnh báo!',
                        type: 'red',
                        typeAnimated: true,
                        content: 'Chưa chọn ngày về',
                        onClose: function () {
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

    //Quay lại chọn tuyến
    $('#back').click(function () {
        $('#trip-oneway').hide();
        $('#next-step').hide();
        $('#booking-form').show();
        $('#trip-round').hide();
        $('#total-round').hide();
    });

    //Chuyển sang chọn ghế
    $('#select-seat').click(function () {

        // if(isRound)
        // var isRound = $('#isRoundTrip').val();

        if(seatInfoOneway == undefined) {
            $.alert({
                title: 'Cảnh báo!',
                type: 'red',
                typeAnimated: true,
                content: 'Chưa chọn chuyến đi',
            });
            return false;
        }

        if(isRound == 1) {

            if(seatInfoReturn == undefined) {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Chưa chọn chuyến về',
                });
                return false;
            }

            $('#select-seat-round').show();
            $('#chooseRound').show();
        } else {
            $('#select-seat-round').hide();
            $('#chooseRound').hide();
        }

        $('#trip-oneway').hide();
        $('#next-step').hide();
        $('#trip-round').hide();

        $('#select-seat-oneway').show();
        $('#back-step2').show();
    });
    
    //Kiểm tra khuyến mại
    
       
   
});

function generatePaymentCode() {
    return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15) + Date.now();
}
// xác nhận đặt vé
function hoanthanhbtndatve(){
        var mave;
        var paymentType = $('.paymenttype:checked').val();
        var checkDk = $('#checkDk:checked').val();
        var fullName = $('#fullname').val();
        var phoneNumber = $('#phoneNumber').val();
        var email = $('#email').val();
        var note = $('#note').val();

        var seatOneway = ghenguoilondi.concat(ghetreemdi);

        //CHuyen di



        var totalSeat = ghenguoilondi.length + ghetreemdi.length;
        if(totalSeat < 1) {
            $.alert({
                title: 'Thông báo!',
                type: 'orange',
                typeAnimated: true,
                content: 'Hãy chọn ít nhất 1 ghế đi',
            });
            return false;
        }
        if(checkDk != 1){
            $.alert({
                title: 'Thông báo!',
                type: 'orange',
                typeAnimated: true,
                content: 'Bạn chưa đồng ý với điều khoản của chúng tôi',
            });
            return false;
        }

        if(totalSeat > 5 && companyId !== 'TC0Ah1r7bCvzRlpF') {
            $.alert({
                title: 'Thông báo!',
                type: 'orange',
                typeAnimated: true,
                content: 'bạn chọn quá số ghế cho phép',
            });
            return false;
        }

        if(ghetreemdi.length > 0 && ghenguoilondi.length <1) {
            $.alert({
                title: 'Thông báo!',
                type: 'orange',
                typeAnimated: true,
                content: 'Phải có ít nhất 1 người lớn đi cùng trẻ em',
            });
            return false;
        }

        if($('#fullname').val() == '') {
            $.alert({
                title: 'Cảnh báo!',
                type: 'red',
                typeAnimated: true,
                content: 'Bạn chưa nhập tên',
                onClose: function () {
                    $('#fullname').focus();
                }
            });

            return false;
        }



        if($('#phoneNumber').val() == '') {
            $.alert({
                title: 'Cảnh báo!',
                type: 'red',
                typeAnimated: true,
                content: 'Bạn chưa nhập số điện thoại',
                onClose: function () {
                    $('#phoneNumber').focus();
                }
            });
            $('#phoneNumber').focus();
            return false;
        }

        // var response = grecaptcha.getResponse();

        // if(response.length > 0) {
            //THanh toan ve 1 chieu
            if(isRound == 0){

                if(promotionMoney > 0) {
                    totalMoneyAfter = totalMoney - promotionMoney;
                } else if(promotionPercent > 0) {
                    totalMoneyAfter = totalMoney - totalMoney*promotionPercent;
                } else {
                    totalMoneyAfter = totalMoney;
                }

                var informationsBySeats = new Array();

                if(companyId === 'TC0Ah1r7bCvzRlpF' || companyId === 'TC0BD1rKFD9ZDxmu'){
                    var pickUpAddress = $('#transshipmentInPointOnewayd').val();
                var dropOffAddress = $('#transshipmentOffPointOnewayd').val();
                }else{
                    var pickUpAddress = $('#transshipmentInPointOneway').find(':selected').data('address');
                    var dropOffAddress = $('#transshipmentOffPointOneway').find(':selected').data('address');
                }


                pointUp.address = pickUpAddress;
                pointDown.address = dropOffAddress;
                pointDown.Type = 1;
                pointUp.Type = 1;

                $.each(seatOneway , function(index, val) { 
                    informationsBySeats.push({'seatId': val, 'fullName': fullName, 'phoneNumber': phoneNumber, 'isAdult': true, 'mealPrice': 0, 'insurancePrice': 0, "extraPrice": extraPrice,"agencyPrice": ticketPriceOneway + extraPrice,"isTransshipment": false,
                                            "pointUp": pointUp, "pointDown": pointDown, "promotionCode": $('#promotionCode').val(), "pickUpAddress" : pickUpAddress,  "dropOffAddress" : dropOffAddress
                                        })
                });


                console.log(informationsBySeats);

                var dataSend ={
                        // 'listSeatId': JSON.stringify(seatOneway),
                        // "sendSMS":"true",
                        // 'fullName': fullName,
                        // 'phoneNumber': phoneNumber,
                        // 'email': email,
                        // 'getInPointId': inPointOneway,
                        // 'startDate': startDateOneway,
                        // 'getOffPointId': offPointOneway,
                        // 'scheduleId': scheduleIdOneway,
                        // 'getInTimePlan': intimeOneway,
                        // 'originalTicketPrice': totalMoney,
                        // 'paymentTicketPrice': totalMoneyAfter,
                        // 'agencyPrice': totalMoneyAfter,
                        // 'paymentType': paymentType,
                        // 'paidMoney': 0,
                        // 'tripId': tripIdOneway,
                        // 'numberOfAdults': ghenguoilondi.length,
                        // 'numberOfChildren': ghetreemdi.length,
                        // 'promotionId': $('#promotionCode').val(),
                        // 'note' : note,
                        // "mealPrice":0,
                        // "alongTheWayAddress":"",
                        // "platform":2,
                        // 'timeBookHolder': timeBookHolder,
                        // "priceInsurrance":0,
                        // "dropAlongTheWayAddress":"",
                        // "pickUpAddress":"",
                        // "needPickUpHome":"true",
                        // "dropAlongTheWayAddress":"",
                        // 'pickUpAddress': $('#transshipmentInPointOneway').find(':selected').data('address'),
                        // "needPickUpHome":"true",
                        // 'dropOffAddress': $('#transshipmentOffPointOneway').find(':selected').data('address'),
                        // "getOffTimePlan":offtimeOneway,


                        // 'inTransshipmentPrice': (trashipmentPriceInPointOneway * seatOneway.length),
                        // 'offTransshipmentPrice': (trashipmentPriceOffPointOneway * seatOneway.length),
                                  
                        // 'latitudeUp': $('#transshipmentInPointOneway').find(':selected').data('lat'),
                        // 'longitudeUp': $('#transshipmentInPointOneway').find(':selected').data('long'),
                        
                        // 'latitudeDown': $('#transshipmentOffPointOneway').find(':selected').data('lat'),
                        // 'longitudeDown': $('#transshipmentOffPointOneway').find(':selected').data('long'),
                        // "getOffTimePlan":offtimeOneway

                        "tripId" : tripIdOneway,
                        "informationsBySeats": informationsBySeats,
                        "packageName": "vn.dobody.anvuicustomer",
                        "timeZone": 7,
                        "platform": 2

                    }

                console.log(dataSend);

                dataSend = removeItemNull(dataSend);

                $.ajax({
                    type: 'POST',
                    url: '/dat-ve?sub=orderNew',
                    data: dataSend,
                    success: function (data) {


                        var ticketIdNew = '';

                        $.each(data.results.listTicket, function (index, item) {
                            if(index == 0){
                                ticketIdNew += item.ticketId
                            }else{
                                ticketIdNew += '-' + item.ticketId
                            }
                            
                        })


                        
                        
                        if(data.code != 202) {
                            $.alert({
                                title: 'Thông báo!',
                                type: 'red',
                                typeAnimated: true,
                                content: 'Đã có lỗi xảy ra, vui lòng đặt lại!',
                            });
                        } else {

                            

                            setTimeout(function() {
                                if(paymentType == 1 ) {
                                

                                var a = "https://ticket-new-dot-dobody-anvui.appspot.com/interbuslines/dopay?vpc_OrderInfo=" + ticketIdNew + "&vpc_Amount=" + (100 * totalMoneyAfter + ((totalMoneyAfter * 0.01)*100 + 1000*100)) + "&phoneNumber=" + phoneNumber + "&packageName=web";
                                window.location.href = a
                                
                                } else if(paymentType == 6) {
                                    $.alert({
                                        title: 'Thông báo!',
                                        type: 'green',
                                        typeAnimated: true,
                                        content: 'Đã đặt vé thành công!',
                                        onClose: function (e) {
                                            $('#phone').html(phoneNumber);
                                            $('#ticketId').html(data.results.ticket.ticketId);
                                            $('#chuyenkhoan').modal('show');
                                            $('#hoanthanhbtn').hide();
                                            $('#btnchuyenkhoan').show();
                                        }
                                    });
                                } else if(paymentType == 2){
                                    var a = "https://ticket-new-dot-dobody-anvui.appspot.com/inter-payment/dopay?vpc_OrderInfo=" + ticketIdNew + "&vpc_Amount=" + (100 * totalMoneyAfter + ((totalMoneyAfter * 0.01)*100 + 1000*100)) + "&phoneNumber=" + phoneNumber + "&packageName=web";
                                    window.location.href = a

                                }else if(paymentType == 8){
                                    url = "http://mgp.anvui.vn/?ticketId="+ticketIdNew+'&paymentType='+0;
                                    window.location.href = url;
                                } else if(paymentType == 7){
                                    $("#bankcode").modal({
                                        backdrop: 'static',
                                        keyboard: true, 
                                        show: true
                                    });
                                    $.ajax({
                                      url: 'https://ticket-new-dot-dobody-anvui.appspot.com/banks',
                                      type: 'GET',
                                      headers : {'DOBODY6969' : 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ2IjowLCJkIjp7InVpZCI6IkFETTExMDk3Nzg4NTI0MTQ2MjIiLCJmdWxsTmFtZSI6IkFkbWluIHdlYiIsImF2YXRhciI6Imh0dHBzOi8vc3RvcmFnZS5nb29nbGVhcGlzLmNvbS9kb2JvZHktZ29ub3cuYXBwc3BvdC5jb20vZGVmYXVsdC9pbWdwc2hfZnVsbHNpemUucG5nIn0sImlhdCI6MTQ5MjQ5MjA3NX0.PLipjLQLBZ-vfIWOFw1QAcGLPAXxAjpy4pRTPUozBpw'},
                                      contentType: 'application/json',
                                      success: function(result) {
                                        var html = '';
                                        console.log(result.results.data);
                                          $.each(result.results.data, function (key, item) {
                                            html += '<div class="col-md-3"><div class="item-bankd"><div class="imgd"><img src="'+item.logo+'"/></div> <input type="radio" class="bankCode" name="bankCode" value="'+item.bankCode+'"> <p class="name">'+item.name+'</p> </div></div>';
                                          })
                                        $("#bankd").append(html);

                                        $("#hoanthanhQrCode").click(function(){
                                            var bankCode =  $('.bankCode:checked').val();
                                            var url = 'https://ticket-new-dot-dobody-anvui.appspot.com/vnp/pay?vnp_OrderInfo='+ticketIdNew+'&packageName=web&bankcode='+bankCode+'&companyId='+companyId;
                                            window.location.href = url;
                                        })
                                      },
                                      error: function () {
                                          
                                      }
                                    });
                                }

                            else {
                                if(companyId === 'TC08T1qEunQgs8rW' ){
                                    $.alert({
                                        title: 'Thông báo!',
                                        content: 'Bạn đã đặt vé thành công! Vui lòng đến quầy thanh toán và nhận vé. Quý khách vui lòng thanh toán trước 12h theo giờ xe chạy',
                                        onClose: function () {
                                            window.location.href = '/';
                                        }
                                    });
                                }else{
                                    $.alert({
                                        title: 'Thông báo!',
                                        content: 'Bạn đã đặt vé thành công! Vui lòng đến quầy thanh toán và nhận vé',
                                        onClose: function () {
                                            window.location.href = '/';
                                        }
                                    });
                                }
                                
                            }

                            }, 3000);
                            
                        }
                        

                        
                    }
                });
            }
            else //Thanh toan ve khu hoi
            {
                var seatReturn = ghenguoilonve.concat(ghetreemve);
                var totalSeatReturn = ghenguoilonve.length + ghetreemve.length;
                if(totalSeatReturn < 1) {
                    $.alert({
                        title: 'Thông báo!',
                        type: 'orange',
                        typeAnimated: true,
                        content: 'Hãy chọn ít nhất 1 ghế về',
                    });
                    return false;
                }

                if(ghetreemve.length > 0 && ghenguoilonve.length <1) {
                    $.alert({
                        title: 'Thông báo!',
                        type: 'orange',
                        typeAnimated: true,
                        content: 'Phải có ít nhất 1 người lớn đi cùng trẻ em',
                    });
                    return false;
                }

                if(promotionMoney > 0) {
                    totalMoneyOneAfter = totalMoneyOneway - promotionMoney;
                    totalMoneyReturnAfter = totalMoneyReturn - promotionMoney;
                } else if(promotionPercent > 0) {
                    totalMoneyOneAfter = totalMoneyOneway - totalMoneyOneway*promotionPercent;
                    totalMoneyReturnAfter = totalMoneyReturn - totalMoneyReturn*promotionPercent;
                } else {
                    totalMoneyOneAfter = totalMoneyOneway;
                    totalMoneyReturnAfter = totalMoneyReturn;
                }
                var paymentCode = generatePaymentCode();
                if(companyId === 'TC0Ah1r7bCvzRlpF' || companyId === 'TC0BD1rKFD9ZDxmu'){
                    var pickUpAddress = $('#transshipmentInPointOnewayd').val();
                var dropOffAddress = $('#transshipmentOffPointOnewayd').val();
                }else{
                    var pickUpAddress = $('#transshipmentInPointOneway').find(':selected').data('address');
                    var dropOffAddress = $('#transshipmentOffPointOneway').find(':selected').data('address');
                }
                
                $.ajax({
                    type: 'POST',
                    url: '/dat-ve?sub=order',
                    data: {
                        
                        'listSeatId': JSON.stringify(seatOneway),
                        "sendSMS":"true",
                        'fullName': fullName,
                        'phoneNumber': phoneNumber,
                        'email': email,
                        'getInPointId': inPointOneway,
                        'startDate': startDateOneway,
                        'getOffPointId': offPointOneway,
                        'scheduleId': scheduleIdOneway,
                        'getInTimePlan': intimeOneway,
                        'originalTicketPrice': totalMoney,
                        'paymentTicketPrice': totalMoneyAfter,
                        'agencyPrice': totalMoneyAfter,
                        'paymentType': paymentType,
                        'paidMoney': 0,
                        'tripId': tripIdOneway,
                        'numberOfAdults': ghenguoilondi.length,
                        'numberOfChildren': ghetreemdi.length,
                        'promotionId': $('#promotionCode').val(),
                        'note' : note,
                        "mealPrice":0,
                        "alongTheWayAddress":"",
                        "platform":2,
                        'timeBookHolder': timeBookHolder,
                        "priceInsurrance":0,
                        "dropAlongTheWayAddress":"",
                        'pickUpAddress': pickUpAddress,
                        "needPickUpHome":"true",
                        'dropOffAddress': dropOffAddress,
                        "getOffTimePlan":offtimeOneway,


                        'inTransshipmentPrice': (trashipmentPriceInPointOneway * seatOneway.length),
                        'offTransshipmentPrice': (trashipmentPriceOffPointOneway * seatOneway.length),

                        
                                    
                        'latitudeUp': $('#transshipmentInPointOneway').find(':selected').data('lat'),
                        'longitudeUp': $('#transshipmentInPointOneway').find(':selected').data('long'),
                        
                        'latitudeDown': $('#transshipmentOffPointOneway').find(':selected').data('lat'),
                        'longitudeDown': $('#transshipmentOffPointOneway').find(':selected').data('long')
                    },
                    success: function (data) {
                        if(data.code != 200) {
                            $.alert({
                                title: 'Thông báo!',
                                type: 'red',
                                typeAnimated: true,
                                content: 'Đã có lỗi xảy ra, vui lòng đặt lại!',
                            });
                        } else {
                            mave = data.results.ticketId;

                            $.ajax({
                                type: 'POST',
                                url: '/dat-ve?sub=order',
                                data: {
                                    'listSeatId': JSON.stringify(seatOneway),
                                    "sendSMS":"true",
                                    'fullName': fullName,
                                    'phoneNumber': phoneNumber,
                                    'email': email,
                                    'getInPointId': inPointOneway,
                                    'startDate': startDateOneway,
                                    'getOffPointId': offPointOneway,
                                    'scheduleId': scheduleIdOneway,
                                    'getInTimePlan': intimeOneway,
                                    'originalTicketPrice': totalMoney,
                                    'paymentTicketPrice': totalMoneyAfter,
                                    'agencyPrice': totalMoneyAfter,
                                    'paymentType': paymentType,
                                    'paidMoney': 0,
                                    'tripId': tripIdOneway,
                                    'numberOfAdults': ghenguoilondi.length,
                                    'numberOfChildren': ghetreemdi.length,
                                    'promotionId': $('#promotionCode').val(),
                                    'note' : note,
                                    "mealPrice":0,
                                    "alongTheWayAddress":"",
                                    "platform":2,
                                    'timeBookHolder': timeBookHolder,
                                    "priceInsurrance":0,
                                    "dropAlongTheWayAddress":"",
                                    "pickUpAddress":"",
                                    "needPickUpHome":"true",
                                    "dropOffAddress":"",
                                    "getOffTimePlan":offtimeOneway
                                },
                                success: function (data) {
                                    if(data.code != 200) {
                                        $.alert({
                                            title: 'Thông báo!',
                                            type: 'red',
                                            typeAnimated: true,
                                            content: 'Đã có lỗi xảy ra, vui lòng đặt lại!'
                                        });
                                    } else {
                                        mave = mave + "-" + data.results.ticket.ticketId;
                                        if(paymentType == 1) {
                                            $.ajax({
                                                type: 'POST',
                                                url: 'https://dobody-anvui.appspot.com/ePay/',
                                                dataType: 'json',
                                                data: JSON.stringify({
                                                    ticketId: mave,
                                                    paymentType: 1,
                                                    packageName: 'web',
                                                    phoneNumber: phoneNumber,
                                                }),
                                                success: function (data) {
                                                    url = data.results.redirect;
                                                    window.location.href = url;
                                                }
                                            });
                                        } else {
                                            $.alert({
                                                title: 'Thông báo!',
                                                content: 'Bạn đã đặt vé thành công! Vui lòng đến quầy thanh toán và nhận vé',
                                                onClose: function () {
                                                    window.location.href = '/dat-ve';
                                                }
                                            });
                                        }

                                    }
                                }
                            });

                        }
                    }
                });
            }
        // } else {
        //     $.alert({
        //         title: 'Cảnh báo!',
        //         type: 'red',
        //         typeAnimated: true,
        //         content: 'Bạn chưa xác thực captcha',
        //     });
        // }
}
//Fixed nut thanh toan
function searchScroll() {
    var heightScroll = $(document).height() - $(window).height() - 430;

    var scrollTop = jQuery(window).scrollTop();
    if (scrollTop >= heightScroll) {
        $('#next-step').removeClass('scrollDown');
    }
    else {
        $('#next-step').addClass('scrollDown');
    }
}

//Fix thanh toan di theo scroll
function paymentScroll() {
    // var heightScroll = $(document).height() - $(window).height() - 430;

    // var scrollTop = jQuery(window).scrollTop();
    // if(isRound == 0) {
    //     if(scrollTop > 170 && scrollTop <= 640) {
    //         $('.payment-info').removeAttr( 'style' );
    //         $('.payment-info').addClass('scrollInfo');
    //         $('.payment-info').css('top',  '10px');
    //     } else if(scrollTop > 640) {
    //         $('.payment-info').removeAttr( 'style' );
    //         $('.payment-info').css('bottom',  (scrollTop - 450) +'px');
    //     } else {
    //         $('.payment-info').removeClass('scrollInfo');
    //         $('.payment-info').removeAttr( 'style' );
    //     }
    // }
}


//Hàm chọn trip và lấy thông tin trip chieu di
function selectTripOneWay(trip) {

    seatListOneway = null;
    totalSeat = 0;

    adultMoney = 0;
    babyMoney = 0;
    
    addPri = JSON.parse($(trip).find('.additonPriceInfo').text());



    tripIdOneway = $(trip).data('trip');
    scheduleIdOneway = $(trip).data('schedule');
    intimeOneway = $(trip).data('intime');
    offtimeOneway = $(trip).data('offtime');
    inPointOneway = $(trip).data('getinpoint');
    offPointOneway = $(trip).data('getoffpoint');
    ticketPriceOneway = $(trip).data('price');
    ticketPriceOnewayD = $(trip).data('price');
    startTime = $(trip).data('startTime');
    var sumtimestartSelect = $(trip).data('sumtimestart');
    var sumtimenowSelect = $(trip).data('sumtimenow');
    var sumdatenowSelect = $(trip).data('sumdatenow');
    var startdateSelect = $(trip).data('startdate');
    
    var showTransshipment = 'show';

    

    if(companyId === 'TC0A31qrgPVJBW3a' || companyId === 'TC1OHntfnujP' ||  companyId === 'TC0Ah1r7bCvzRlpF' || companyId === 'TC0B31rGICznLw9n' || companyId === 'TC0BS1rQHdJWRYKG' || companyId === 'TC0BD1rKFD9ZDxmu' || companyId === 'TC05wM7dDRQSo6'){
       htmlThanhtoanmgp = '<label class="radio">Online qua cổng MEGAPAY (ATM Card/Visa/Master/JCB..) <img src="/themes/14/statics/logomgp.jpg" style="width: 80px;"> <input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="8"><span class="checkround"></span></label>'; 
    }else{
        htmlThanhtoanmgpv = '<label class="radio">Thanh toán qua MegaV<input type="radio"  class="paymenttype" name="paymenttype" value="1"><span class="checkround"></span></label>';
    }


    if(companyId === 'TC0Ah1r7bCvzRlpF'){
        
        var appendDatve = '<div id="select-seat-oneway">';
        appendDatve +='<div class="col-md-8">';
        appendDatve +='<div class="row">';
        appendDatve +='<div class="col-md-6">';
        appendDatve +='<div class="select-seat">';
        appendDatve +='<h3 class="trip-info">Chọn ghế chuyến đi</h3>';
        appendDatve +='<ul class="chuthich"><li><div class="ghetrong"></div> Ghế trống</li><li><div class="ghedachon"></div> Ghế đã chọn</li><li><div class="ghedaban"></div> Ghế đã bán</li><li><div class="ghetreem"></div> Ghế trẻ em</li></ul>';
        appendDatve +='<div id="seatMapOneWay" class="row"></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="select-seat" id="chooseRound" style="display: none">';
        appendDatve +='<h3 class="trip-info">Chọn ghế chuyến về</h3>';
        appendDatve +='<p style="padding-left: 15px; padding-bottom: 20px; font-style: italic">* Trẻ em vẫn được tính chỗ và giá vé bằng 100% vé người lớn. </p>';
        appendDatve +='<ul class="chuthich"><li><div class="ghetrong"></div> Ghế trống</li><li><div class="ghedachon"></div> Ghế đã chọn</li><li><div class="ghedaban"></div> Ghế đã bán</li><li><div class="ghetreem"></div> Ghế trẻ em</li></ul>';
        appendDatve +='<div id="seatMapRound" class="row"></div>';
        appendDatve +='</div>';
        appendDatve +='</div>';
        appendDatve +='<div class="col-md-6">';
        
        appendDatve +='<div class="select-seat">';
        appendDatve +='<h3 class="trip-info">Thông tin hành khách</h3>';
        appendDatve +='<p style="padding-left: 15px; padding-bottom: 20px;">Quý khách vui lòng nhập thông tin chính xác </p>';
        appendDatve +='<p style="padding-left: 15px; padding-bottom: 20px;">'+noteTrungchuyen+'</p>';
        appendDatve +='<div class="row form-customer">';
        appendDatve +='<div class="col-md-12"><label for="fullname" style="display: none;">Họ và tên (<span class="required">*</span>)</label><input type="text" placeholder="Họ và tên" class="form-control" name="fullname" id="fullname" autofocus required></div>';
        appendDatve +='<div class="col-md-12"><label for="phoneNumber" style="display: none;">Số điện thoại (<span class="required">*</span>)</label><input type="text" placeholder="Số điện thoại" class="form-control" name="phoneNumber" id="phoneNumber" required></div>';
        appendDatve +='<div class="col-md-12"><label for="phoneNumber" style="display: none;">Email</label><input type="email" placeholder="Email" class="form-control" name="email" id="email"></div>';
        appendDatve +='<div class="col-md-12"><label for="phoneNumber" style="display: none;">Ghi chú</label><textarea placeholder="Các yêu cầu đặc biệt không thể được đảm bảo nhưng nhà xe sẽ cố gắng hết sức để đáp ứng yêu cầu của bạn" name="note" class="form-control" id="note" rows="3"></textarea></div>';
        appendDatve +='<div class="col-md-12"><input autocomplete="off" class="col-md-5 form-control" id="promotionCode" style="width: auto;" type="text" placeholder="Mã khuyến mại"><button type="button" class="btn btn-info col-md-5" id="checkPromotion" onclick="checkPromotion()">Kiểm tra</button></div>';
        appendDatve +='</div>';

        appendDatve +='<label class="" for="transshipment">';
        appendDatve +='<input type="checkbox" id="checkDk" value="1">';
        appendDatve +='Tôi đồng ý với điều khoản, dịch vụ về <a href="https://interbuslines.com/chinh-sach-hoan-huy-cua-interbus-lines-1-2-17377.html" target="_blank" >chính sách hoãn, hủy của Interbuslines</a>';

        appendDatve +='</label>';
        
                                        
        
        
        appendDatve +='</div>';
        
        appendDatve +='</div>';

        
                

        appendDatve +='</div>';
        appendDatve +='</div>';
        appendDatve +='</div>';


        appendDatve +='</div>';
        appendDatve +='<div class="col-md-4 payment-info">';
        appendDatve +='<div class="col-md-12 customer-info">';
        appendDatve +='<h4 class="trip-info ticket-detail">Chi tiết giá vé</h4>';
        appendDatve +='<div class="total-title">';
        appendDatve +='<h4>Lượt đi</h4>';
        appendDatve +='<div class="total-inside row">';
        appendDatve +='<div class="col-md-12">Vị trí chọn: <span class="price" id="ghedi"></div>';
        appendDatve +='<div class="col-md-12">Giá người lớn: <span class="price" id="adultMoneyOneway">0 VND</span> <br></div>';
        appendDatve +='<div class="col-md-12">Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="subtotal">Tổng tiền lượt đi<strong id="totalMoneyOneway">0 VND</strong></div>';
        appendDatve +='<div class="col-md-12" style="padding:0px;">Phí trung chuyển: <span class="price" id="transshipmentPriceOneway">0 VND</span> <br></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="total-title" id="total-round" style="display:none;">';
        appendDatve +='<h4>Lượt về</h4>';
        appendDatve +='<div class="total-inside row">';
        appendDatve +='<div class="col-md-12">Ghế đã chọn: <span class="seatlist" id="gheve"></span> <br></div>';
        appendDatve +='<div class="col-md-12">Giá người lớn: <span class="price" id="adultMoneyReturn">0 VND</span> <br></div>';
        appendDatve +='<div class="col-md-12">Giá trẻ em: <span class="price" id="babyMoneyReturn">0 VND</span> <br></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="subtotal">Tổng tiền lượt về<br><strong id="totalMoneyReturn">0 VND</strong></div>';
        appendDatve +='</div>';
        appendDatve +='<div id="promotion" style="display: none">';
        appendDatve +='<h4>Khuyến mãi</h4>';
        appendDatve +='<div class="promotion-div row"><div class="col-md-12">Giảm giá: <span class="price" id="promotionPrice" style="color:#000;"></span></div></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="subtotal">Tổng tiền <strong id="totalMoney">0 VND</strong></div>';
        appendDatve +='</div>';
        // appendDatve +='<div class="select-seat">';
        // appendDatve +='<h3 class="trip-info">Thông tin chuyến đi</h3>';
        // appendDatve +='<ul><li><strong>Chuyến đi</strong></li><li>Ngày đi: <strong class="startDate">31/03/2018</strong></li><li>Tuyến đường: <strong class="routeName"></strong></li><li>Giờ xuất phát: <strong class="intime">21:45</strong></li></ul>';
        // appendDatve +='</div>';
        appendDatve +='<div class="select-seat" id="select-seat-round" style="display: none">';           
        appendDatve +='<h3 class="trip-info">Thông tin chuyến về</h3>';           
        appendDatve +='<ul><li><strong>Chuyến về</strong></li><li>Ngày đi: <strong class="startDateReturn"></strong></li><li>Tuyến đường: <strong class="routeNameReturn"></strong></li><li>Giờ xuất phát: <strong class="intimeReturn"></strong></li></ul>';           
        appendDatve +='</div>';           
        appendDatve +='<div class="col-md-12 payment">';           
        appendDatve +='<div class="col-md-12 payment-dialog">';           
        appendDatve +='<h3 class="trip-info">Thanh toán</h3>';           
        appendDatve +='<div class="payment-form">';           
        appendDatve +='<div class="radio">';  
        appendDatve +='<div>'+htmlThanhtoanmgp+'</div>';   
        appendDatve +='<label class="radio">Thanh toán bằng thẻ nội địa<input type="radio"  class="paymenttype" name="paymenttype" value="1"><span class="checkround"></span></label>';           
        appendDatve +='<label class="radio">Thanh toán QR CODE<input type="radio"  class="paymenttype" name="paymenttype" value="7"><span class="checkround"></span></label>';           
        

        appendDatve +='<label class="radio">Thanh toán bằng thẻ quốc tế <input type="radio" class="paymenttype" name="paymenttype" value="2"><span class="checkround"></span></label>';           
                
        appendDatve +='</div>';           
        appendDatve +='<center><button type="button" id="hoanthanhbtn" class="btn" onclick="hoanthanhbtndatve(this)" >Xác nhận đặt vé </button><button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">Thông tin chuyển khoản</button></center>';           
        appendDatve +='</div>';           
        appendDatve +='</div>';           
        appendDatve +='</div>';           
        appendDatve +='</div>'; 
        appendDatve +='</div>';   
    }else{
        var appendDatve = '<div id="select-seat-oneway">';
        appendDatve +='<div class="col-md-8">';
        appendDatve +='<div class="row">';
        appendDatve +='<div class="col-md-6">';
        appendDatve +='<div class="select-seat">';
        appendDatve +='<h3 class="trip-info">Chọn ghế chuyến đi</h3>';
        appendDatve +='<ul class="chuthich"><li><div class="ghetrong"></div> Ghế trống</li><li><div class="ghedachon"></div> Ghế đã chọn</li><li><div class="ghedaban"></div> Ghế đã bán</li><li><div class="ghetreem"></div> Ghế trẻ em</li></ul>';
        appendDatve +='<div id="seatMapOneWay" class="row"></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="select-seat" id="chooseRound" style="display: none">';
        appendDatve +='<h3 class="trip-info">Chọn ghế chuyến về</h3>';
        appendDatve +='<p style="padding-left: 15px; padding-bottom: 20px; font-style: italic">* Trẻ em vẫn được tính chỗ và giá vé bằng 100% vé người lớn. </p>';
        appendDatve +='<ul class="chuthich"><li><div class="ghetrong"></div> Ghế trống</li><li><div class="ghedachon"></div> Ghế đã chọn</li><li><div class="ghedaban"></div> Ghế đã bán</li><li><div class="ghetreem"></div> Ghế trẻ em</li></ul>';
        appendDatve +='<div id="seatMapRound" class="row"></div>';
        appendDatve +='</div>';
        appendDatve +='</div>';
        appendDatve +='<div class="col-md-6">';
        
        appendDatve +='<div class="select-seat">';
        appendDatve +='<h3 class="trip-info">Thông tin hành khách</h3>';
        appendDatve +='<p style="padding-left: 15px; padding-bottom: 20px;">Quý khách vui lòng nhập thông tin chính xác </p>';
        appendDatve +='<p style="padding-left: 15px; padding-bottom: 20px;">'+noteTrungchuyen+'</p>';
        appendDatve +='<div class="row form-customer">';
        appendDatve +='<div class="col-md-12"><label for="fullname" style="display: none;">Họ và tên (<span class="required">*</span>)</label><input type="text" placeholder="Họ và tên" class="form-control" name="fullname" id="fullname" autofocus required></div>';
        appendDatve +='<div class="col-md-12"><label for="phoneNumber" style="display: none;">Số điện thoại (<span class="required">*</span>)</label><input type="text" placeholder="Số điện thoại" class="form-control" name="phoneNumber" id="phoneNumber" required></div>';
        appendDatve +='<div class="col-md-12"><label for="phoneNumber" style="display: none;">Email</label><input type="email" placeholder="Email" class="form-control" name="email" id="email"></div>';
        appendDatve +='<div class="col-md-12"><label for="phoneNumber" style="display: none;">Ghi chú</label><textarea placeholder="Các yêu cầu đặc biệt không thể được đảm bảo nhưng nhà xe sẽ cố gắng hết sức để đáp ứng yêu cầu của bạn" name="note" class="form-control" id="note" rows="3"></textarea></div>';
        appendDatve +='<div class="col-md-12"><input autocomplete="off" class="col-md-5 form-control" id="promotionCode" style="width: auto;" type="text" placeholder="Mã khuyến mại"><button type="button" class="btn btn-info col-md-5" id="checkPromotion" onclick="checkPromotion()">Kiểm tra</button></div>';
        appendDatve +='</div>';

        appendDatve +='<label class="" for="transshipment">';
        appendDatve +='<input type="checkbox" id="checkDk" value="1">';
        appendDatve +='Tôi đồng ý với điều khoản, dịch vụ về <a href="https://interbuslines.com/chinh-sach-hoan-huy-cua-interbus-lines-1-2-17377.html" target="_blank" >chính sách hoãn, hủy của Interbuslines</a>';

        appendDatve +='</label>';
        appendDatve +='<div id="toend" class="tab-pane fade">';
        appendDatve +='<div class="">';
        appendDatve +='<label for="transshipmentOffPointOneway">Trung chuyển trả chuyến về</label>';
        appendDatve +='<select name="transshipmentOffPointOneway"  class="form-control transshipment" disabled id="transshipmentOffPointOneway">';
        appendDatve +='<option data-address="" data-lat="" data-long="" data-price="0" value="">Chọn điểm trả</option>';
        appendDatve +='</select>';
        appendDatve +='</div>';
        appendDatve +='</div>';
        appendDatve +='</div>';
                                        
        
        
        appendDatve +='</div>';
        
        appendDatve +='</div>';

        
                

        appendDatve +='</div>';
        appendDatve +='</div>';
        appendDatve +='</div>';


        appendDatve +='</div>';
        appendDatve +='<div class="col-md-4 payment-info">';
        appendDatve +='<div class="col-md-12 customer-info">';
        appendDatve +='<h4 class="trip-info ticket-detail">Chi tiết giá vé</h4>';
        appendDatve +='<div class="total-title">';
        appendDatve +='<h4>Lượt đi</h4>';
        appendDatve +='<div class="total-inside row">';
        appendDatve +='<div class="col-md-12">Vị trí chọn: <span class="price" id="ghedi"></div>';
        appendDatve +='<div class="col-md-12">Giá người lớn: <span class="price" id="adultMoneyOneway">0 VND</span> <br></div>';
        appendDatve +='<div class="col-md-12">Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="subtotal">Tổng tiền lượt đi<strong id="totalMoneyOneway">0 VND</strong></div>';
        appendDatve +='<div class="col-md-12" style="padding:0px;">Phí trung chuyển: <span class="price" id="transshipmentPriceOneway">0 VND</span> <br></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="total-title" id="total-round" style="display:none;">';
        appendDatve +='<h4>Lượt về</h4>';
        appendDatve +='<div class="total-inside row">';
        appendDatve +='<div class="col-md-12">Ghế đã chọn: <span class="seatlist" id="gheve"></span> <br></div>';
        appendDatve +='<div class="col-md-12">Giá người lớn: <span class="price" id="adultMoneyReturn">0 VND</span> <br></div>';
        appendDatve +='<div class="col-md-12">Giá trẻ em: <span class="price" id="babyMoneyReturn">0 VND</span> <br></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="subtotal">Tổng tiền lượt về<br><strong id="totalMoneyReturn">0 VND</strong></div>';
        appendDatve +='</div>';
        appendDatve +='<div id="promotion" style="display: none">';
        appendDatve +='<h4>Khuyến mãi</h4>';
        appendDatve +='<div class="promotion-div row"><div class="col-md-12">Giảm giá: <span class="price" id="promotionPrice" style="color:#000;"></span></div></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="subtotal">Tổng tiền <strong id="totalMoney">0 VND</strong></div>';
        appendDatve +='</div>';
        // appendDatve +='<div class="select-seat">';
        // appendDatve +='<h3 class="trip-info">Thông tin chuyến đi</h3>';
        // appendDatve +='<ul><li><strong>Chuyến đi</strong></li><li>Ngày đi: <strong class="startDate">31/03/2018</strong></li><li>Tuyến đường: <strong class="routeName"></strong></li><li>Giờ xuất phát: <strong class="intime">21:45</strong></li></ul>';
        // appendDatve +='</div>';
        appendDatve +='<div class="select-seat" id="select-seat-round" style="display: none">';           
        appendDatve +='<h3 class="trip-info">Thông tin chuyến về</h3>';           
        appendDatve +='<ul><li><strong>Chuyến về</strong></li><li>Ngày đi: <strong class="startDateReturn"></strong></li><li>Tuyến đường: <strong class="routeNameReturn"></strong></li><li>Giờ xuất phát: <strong class="intimeReturn"></strong></li></ul>';           
        appendDatve +='</div>';           
        appendDatve +='<div class="col-md-12 payment">';           
        appendDatve +='<div class="col-md-12 payment-dialog">';           
        appendDatve +='<h3 class="trip-info">Thanh toán</h3>';           
        appendDatve +='<div class="payment-form">';           
        appendDatve +='<div class="radio">';  
        appendDatve +='<div>'+htmlThanhtoanmgp+'</div>';  
         appendDatve +='<label class="radio">Thanh toán bằng thẻ nội địa<input type="radio"  class="paymenttype" name="paymenttype" value="1"><span class="checkround"></span></label>';           
        appendDatve +='<label class="radio">Thanh toán QR CODE<input type="radio"  class="paymenttype" name="paymenttype" value="7"><span class="checkround"></span></label>';           
        

        appendDatve +='<label class="radio">Thanh toán bằng thẻ quốc tế <input type="radio" class="paymenttype" name="paymenttype" value="2"><span class="checkround"></span></label>';           
              
        appendDatve +='<label class="radio" id="radiochuyenkhoan" style="display: none">Chuyển khoản <input type="radio" class="paymenttype" name="paymenttype" value="6"><span class="checkround"></span></label>';           
        appendDatve +='</div>';           
        appendDatve +='<center><button type="button" id="hoanthanhbtn" class="btn" onclick="hoanthanhbtndatve(this)" >Xác nhận đặt vé </button><button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">Thông tin chuyển khoản</button></center>';           
        appendDatve +='</div>';           
        appendDatve +='</div>';           
        appendDatve +='</div>';           
        appendDatve +='</div>'; 
        appendDatve +='</div>';   
    }
    


    
    
    $('#list-oneway>li').removeClass('trip-active');
    $("#list-oneway>li #select-seat-oneway").remove();
    $(this).parent(".alltypecars").addClass('trip-active');

    


    if(addPri.length > 0){

        $.each(addPri[addPri.length-1].listUserType, function (key, val) {
            if(val === 2){
                if(addPri[addPri.length-1].type===2){
                    ticketPriceOneway = ticketPriceOneway + addPri[addPri.length-1].mode * addPri[addPri.length-1].amount * ticketPriceOneway;
                }else{
                    ticketPriceOneway = ticketPriceOneway + addPri[addPri.length-1].mode * addPri[addPri.length-1].amount;
                }
            }
            




        })
        

        console.log(ticketPriceOneway);
    }

    ticketRatioOneway = $(trip).data('ratio');
    startDateOneway = $(trip).data('startdate');
    activedxb = $(trip).data('activedxb');
    tripStatus = $(trip).data('tripstatus');
    routeId = $(trip).data('route');
    scheduleID = $(trip).data('schedule');
    getInPointName = $(trip).data('inpointname');
    getOffPointName = $(trip).data('offpointname');
    startTime = $(trip).data('starttime');
    pointDownId = $(trip).data('pointdownid');
    pointUpId = $(trip).data('pointupid');

    $('.intime').html(getFormattedDate(intimeOneway, 'time'));

    var Now = new Date();
    var timeNow =  $.format.date(Now.getTime(), 'HH:mm, dd/MM/yyyy');



    var getForCustomer1 = getForCustomer(tripIdOneway, pointUpId, pointDownId);
    console.log(getForCustomer1);

    

    $('.rv-tran-from').text(getInPointName);
    $('.rv-tran-to').text(getOffPointName);


    
    if(activedxb === 'activeDxb' ) {
        $.alert({
            title: 'Cảnh báo!',
            type: 'red',
            typeAnimated: true,
            content: 'Chuyến đã xuất bến',
        });

        $('#select-seat').prop('disabled', true);

        return;
    }  else {
        $('#select-seat').prop('disabled', false);
        $(".scheduleId-"+tripIdOneway+pointUpId+pointDownId).append(appendDatve);
        
        addSeatMap = JSON.parse($(trip).find('.seatMap').text());
        pointUp = JSON.parse($(trip).find('.pointUp').text());
        pointDown = JSON.parse($(trip).find('.pointDown').text());





        console.log(addSeatMap);

            console.log(Date.now());

            var html = '';
            //Theo số tầng
            for (var floor = 1; floor < addSeatMap.numberOfFloors + 1; floor++) {
                
                if(floor == 1){
                    html += '<div class="col-md-12 col-sm-12 col-xs-12 tachtang">';
                } else {
                    html += '<div class="col-md-12 col-sm-12 col-xs-12">';
                }

                html += '<div class="col-md-12 col-sm-12 col-xs-12 text-center"><strong>Tầng ' + floor + '</strong></div>';

                //Theo hàng
                for (var row = 1; row < addSeatMap.numberOfRows + 1; row++) {
                    //Theo cột
                    for (var column = 1; column < addSeatMap.numberOfColumns + 1; column++) {



                        coghe = false;
                        iddd = '';
                        seatInfoOneway = addSeatMap.seatList;// lay du lieu seatMap
                        $.each(addSeatMap.seatList, function (index, val) {
                            var id = val['seatId'];
                            var id1 = ignoreSpaces(id.replace(',', '_' , ' '));

                            var ticketStatus = 1;

                            if(typeof val['listTicketId'] !=='undefined' && val['listTicketId'].length > 0) {
                                var lastTicketId =val['listTicketId'][val['listTicketCode'].length - 1];
                            }

                            if(typeof lastTicketId !== 'undefined' && typeof val['ticketInfo'] !== 'undefined') {
                                ticketStatus = val['ticketInfo'][lastTicketId]['ticketStatus'];
                            } else {
                                ticketStatus = val['seatStatus'];
                            }

                            /*console.log(val['seatId'],ticketStatus);
                            console.log(val['seatId'],val['overTime']);
                            console.log(val['seatId'],((ticketStatus == 2 && (val['overTime'] > Date.now() || val['overTime'] == 0)) || ticketStatus == 7));*/

                            iddd = floor + ' ' + row + ' ' + column;
                            if(val['floor'] != floor || val['row'] != row || val['column'] != column) {
                                // coghe = false;
                            } else {
                                coghe = true;
                                //Type = 2 là tài
                                if (val['seatType'] == 2) {
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + addSeatMap.numberOfColumns + '"><div class="chonghe driver"></div></div>';
                                } else if(val['seatType'] == 1 || val['seatType'] == 5 || val['seatType'] == 6) { // Lần lượt là cửa cửa, Wc, phụ
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + addSeatMap.numberOfColumns + '"><div class="chonghe '+id+' "></div></div>';
                                } else {
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + addSeatMap.numberOfColumns + '">' +
                                        '<div class="chonghe ghetrong '+id+'" id="chonghe_' + id1 + '" onclick="chonghe(\'' + id + '\')" data-over="' + val['overTime'] + '">' +
                                        '</div></div>';
                                }
                            }
                        });
                        if (!coghe) {
                            html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + addSeatMap.numberOfColumns + '"><div class="chonghe"></div></div>';
                        }
                    }
                }

                html += '</div>';
            }
            $('#seatMapOneWay').html(html);

            console.log(Date.now());


            var Now = new Date();    



            $.each(getForCustomer1, function (index, val) {
                if(val.ticketStatus == 2 && val.overTime > Date.now()){
                    $("#chonghe_"+val.id).addClass("ghedaban");
                    $("#chonghe_"+val.id).removeAttr( "onclick" );
                }else if(val.ticketStatus == 3 || val.ticketStatus == 7 || val.ticketStatus == 4 || val.ticketStatus == 5 ){
                    $("#chonghe_"+val.id).addClass("ghedaban");
                    $("#chonghe_"+val.id).removeAttr( "onclick" );
                }
                
                
            })
        

        scheduleSelect = $.grep(scheduleOneway, function (v, k) {
        return v.scheduleId === scheduleIdOneway;
        });

        transshipmentInPointOneway = scheduleSelect[0].transshipmentInPoint;
        transshipmentOffPointOneway = scheduleSelect[0].transshipmentOffPoint;


        tsmop = '';
        tsmip = '';
        $.each(transshipmentInPointOneway, function (k, v) {
            tsmip += '<option data-address="' + v.address + '" ' +
                'data-price="' + v.transshipmentPrice + '" ' +
                'data-lat="' + v.latitude + '" ' +
                'data-long="' + v.longitude + '" ' +
                'value="' + v.pointId + '">' + v.pointName + '</option>';
        });


        console.log(tsmip);
        $('#transshipmentInPointOneway').append(tsmip);

        $.each(transshipmentOffPointOneway, function (k, v) {
            tsmop += '<option data-address="' + v.address + '" ' +
                'data-price="' + v.transshipmentPrice + '" ' +
                'data-lat="' + v.latitude + '" ' +
                'data-long="' + v.longitude + '" ' +
                'value="' + v.pointId + '">' + v.pointName + '</option>';
        });
        $('#transshipmentOffPointOneway').append(tsmop);

        //event double click
        $(trip).dblclick(function () {
            $('#select-seat').click();
        });
    }
}


//Hàm chọn trip và lấy thông tin trip chieu ve
function selectTripRoundWay(trip) {
    $('#list-roundway>tr').removeClass('trip-active');
    $(this).parent("li").addClass('trip-active');

    tripIdReturn = $(trip).data('trip');
    scheduleIdReturn = $(trip).data('schedule');
    ticketPriceReturn = $(trip).data('price');
    ticketRatioReturn = $(trip).data('ratio');
    intimeReturn = $(trip).data('intime');
    inPointReturn = $(trip).data('getinpoint');
    offPointReturn = $(trip).data('getoffpoint');
    startDateReturn = $(trip).data('startdate');
    tripStatus = $(trip).data('tripstatus');
    routeId = $(trip).data('route');
    $('.intimeReturn').html(getFormattedDate(intimeReturn, 'time'));
    console.log(tripStatus);
    if(tripStatus == 2) {
        $.alert({
            title: 'Cảnh báo!',
            type: 'red',
            typeAnimated: true,
            content: 'Chuyến đã xuất bến',
        });

        $('#select-seat').prop('disabled', true);
        return;
    } else {
        $('#select-seat').prop('disabled', false);
        //chon trip
        $.getJSON("http://demo.nhaxe.vn/dat-ve?tripId=" + tripIdReturn + '&scheduleId=' + scheduleIdReturn, function (data) {

            var html = '';
            //Theo số tầng
            for (var floor = 1; floor < data.seatMap.numberOfFloors + 1; floor++) {
                if(floor == 1){
                    html += '<div class="col-md-6 col-sm-12 col-xs-12 tachtang">';
                } else {
                    html += '<div class="col-md-6 col-sm-12 col-xs-12">';
                }

                html += '<div class="col-md-12 col-sm-12 col-xs-12 text-center"><strong>Tầng ' + floor + '</strong></div>';

                //Theo hàng
                for (var row = 1; row < data.seatMap.numberOfRows + 1; row++) {
                    //Theo cột
                    for (var column = 1; column < data.seatMap.numberOfColumns + 1; column++) {
                        coghe = false;
                        iddd = '';

                        seatInfoReturn = data.seatMap.seatList;// lay du lieu seatMap
                        $.each(data.seatMap.seatList, function (index, val) {
                            var id = val['seatId'];
                            var id1 = id.replace(',', '_');

                            var ticketStatus = 1;

                            if(val['listTicketId'].length > 0) {
                                var lastTicketId =val['listTicketId'][val['listTicketCode'].length - 1];
                            }

                            if(typeof lastTicketId !== 'undefined' && typeof val['ticketInfo'] !== 'undefined') {
                                ticketStatus = val['ticketInfo'][lastTicketId]['ticketStatus'];
                            } else {
                                ticketStatus = val['seatStatus'];
                            }

                            iddd = floor + ' ' + row + ' ' + column;
                            if(val['floor'] != floor || val['row'] != row || val['column'] != column) {
                                // coghe = false;
                            } else {
                                coghe = true;
                                //Type = 2 là tài
                                if (val['seatType'] == 2) {
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + data.seatMap.numberOfColumns + '"><div class="chonghe driver"></div></div>';
                                } else if(val['seatType'] == 1 || val['seatType'] == 5 || val['seatType'] == 6) { // Lần lượt là cửa cửa, Wc, phụ
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + data.seatMap.numberOfColumns + '"><div class="chonghe"></div></div>';
                                } else if((ticketStatus == 2 && (val['overTime'] > Date.now() || val['overTime'] == 0)) || ticketStatus == 7 || ticketStatus == 3 || ticketStatus == 4 || ticketStatus == 5) {
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + data.seatMap.numberOfColumns + '"><div class="chonghe ghedaban"></div></div>';
                                } else {
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + data.seatMap.numberOfColumns + '">' +
                                        '<div class="chonghe ghetrong" id="chongheve_' + id1 + '" onclick="chongheve(\'' + id + '\')" data-over="' + val['overTime'] + '">' +
                                        '</div></div>';
                                }
                            }
                        });
                        if (!coghe) {
                            html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + data.seatMap.numberOfColumns + '"><div class="chonghe"></div></div>';
                        }
                    }
                }

                html += '</div>';
            }
            $('#seatMapRound').html(html);

        });

        //event double click
        $(trip).dblclick(function () {
            $('#select-seat').click();
        });
    }
}

function chonghe(seat) {
    id = seat.replace(',', '_');

    idNew = ignoreSpaces(id);
    var isBaby = false;
    seatVal = $.grep(seatInfoOneway,function(val, key){
        return val.seatId == seat;
    })[0];

    //Neu ghe trong thi chuyen sang ghe da chon
    if($('#chonghe_' + idNew).hasClass('ghetrong')){
        $('#chonghe_' + idNew).removeClass('ghetrong');
        $('#chonghe_' + idNew).addClass('ghedachon');
        ghenguoilondi.push(id);
    } else

    //Neu la ghe da chon thi chuyen sang ghe tre em
    if($('#chonghe_' + idNew).hasClass('ghedachon')) {
        $('#chonghe_' + idNew).removeClass('ghedachon');
        $('#chonghe_' + idNew).addClass('ghetreem');
        removeSeatInList(seat, ghenguoilondi);
        ghetreemdi.push(id);
        isBaby = true;
    } else
    //Neu la ghe tre em thi xoa ghe, thanh ghe trong
    if($('#chonghe_' + idNew).hasClass('ghetreem')) {
        $('#chonghe_' + idNew).removeClass('ghetreem');
        $('#chonghe_' + idNew).addClass('ghetrong');
        removeSeatInList(seat, ghetreemdi);
    }

    console.log(seatVal);

    xacnhan(seatVal, isBaby, false);
}

function chongheve(seat) {
    id = seat.replace(',', '_');
    var isBaby = false;
    seatVal = $.grep(seatInfoReturn,function(val, key){
        return val.seatId == seat;
    })[0];

    //Neu ghe trong thi chuyen sang ghe da chon
    if($('#chongheve_' + id).hasClass('ghetrong')){
        $('#chongheve_' + id).removeClass('ghetrong');
        $('#chongheve_' + id).addClass('ghedachon');
        ghenguoilonve.push(id);
    } else

    //Neu la ghe da chon thi chuyen sang ghe tre em
    if($('#chongheve_' + id).hasClass('ghedachon')) {
        $('#chongheve_' + id).removeClass('ghedachon');
        $('#chongheve_' + id).addClass('ghetreem');
        removeSeatInList(seat, ghenguoilonve);
        ghetreemve.push(id);
        isBaby = true;
    } else
    //Neu la ghe tre em thi xoa ghe, thanh ghe trong
    if($('#chongheve_' + id).hasClass('ghetreem')) {
        $('#chongheve_' + id).removeClass('ghetreem');
        $('#chongheve_' + id).addClass('ghetrong');
        removeSeatInList(seat, ghetreemve);
    }

    xacnhan(seatVal, isBaby, true);
}

function removeSeatInList(item, array) {
    var index = array.indexOf(item);
    if (index > -1) {
        array.splice(index, 1);
    }
}

//Lay thong tin ghe da dat
function xacnhan(seat, isBaby, isBack) {
    


    //Đoạn làm chiều đi
    if(!isBack) {
        var seatListOneway = ghenguoilondi.concat(ghetreemdi);

        $('#ghedi').html(seatListOneway.toString());

        


        extraPrice = seat.extraPrice
        if(isBaby) {
            if(ghetreemdi.length > checkBabyOnewayLength) {
                
                adultMoney -= ticketPriceOneway + seat.extraPrice;
                babyMoney += ticketPriceOneway * ticketRatioOneway + seat.extraPrice;
                // ticketPriceOneway += seat.extraPrice
                

            } else {

                

                babyMoney -= ticketPriceOneway * ticketRatioOneway + seat.extraPrice;
                adultMoney += ticketPriceOneway + seat.extraPrice;
                // ticketPriceOneway += seat.extraPrice
            }

        } else {
            if(ghenguoilondi.length > checkAdultOnewayLength) {
                
                adultMoney += ticketPriceOneway + seat.extraPrice;
                // ticketPriceOneway += seat.extraPrice
            } else {
                if(checkBabyOnewayLength > 0) {
                    
                    babyMoney -= ticketPriceOneway * ticketRatioOneway + seat.extraPrice;
                    // ticketPriceOneway += seat.extraPrice
                } else {
                    adultMoney -= ticketPriceOneway + seat.extraPrice;
                    // ticketPriceOneway += seat.extraPrice
                }
            }
        }

        console.log(ticketPriceOneway);
        console.log(extraPrice);
        console.log(ticketRatioOneway);


        checkBabyOnewayLength = ghetreemdi.length;
        checkAdultOnewayLength = ghenguoilondi.length;

        totalMoneyOneway = babyMoney + adultMoney;

        if(seatListOneway.length < 1) {
            trashipmentPriceOneway += trashipmentPriceInPointOneway;
            trashipmentPriceOneway += trashipmentPriceOffPointOneway;
        } else {
            trashipmentPriceOneway = 0;
            trashipmentPriceOneway += (trashipmentPriceInPointOneway * seatListOneway.length);
            trashipmentPriceOneway += (trashipmentPriceOffPointOneway * seatListOneway.length);
        }

        if(transshipment) {
            totalMoneyOneway += trashipmentPriceOneway;
        } else {
            if(totalMoneyOneway > 0) {
                totalMoneyOneway -= trashipmentPriceOneway;
            }
        }

        $('#babyMoneyOneWay').text(babyMoney.format()+' VND');
        $('#transshipmentPriceOneway').text(trashipmentPriceOneway.format()+' VND');
        $('#adultMoneyOneway').text(adultMoney.format()+' VND');
        $('#totalMoneyOneway').text(totalMoneyOneway.format()+' VND');
    } else {
        //Đoạn làm chiều về
        var seatListReturn = ghenguoilonve.concat(ghetreemve);
        $('#gheve').html(seatListReturn.toString());

        //Đoạn code ngáo, lúc tỉnh sẽ sửa, vẫn chạy ngon
        if(isBaby) {
            if(ghetreemve.length > checkBabyReturnLength) {
                adultMoneyReturn -= ticketPriceReturn + seat.extraPrice;
                babyMoneyReturn += ticketPriceReturn * ticketRatioReturn + seat.extraPrice;
            } else {
                babyMoneyReturn -= ticketPriceReturn * ticketRatioReturn + seat.extraPrice;
                adultMoneyReturn += ticketPriceReturn + seat.extraPrice;
            }

        } else {
            if(ghenguoilonve.length > checkAdultReturnLength) {
                adultMoneyReturn += ticketPriceReturn + seat.extraPrice;
            } else {
                if(checkBabyReturnLength > 0) {
                    babyMoneyReturn -= ticketPriceReturn * ticketRatioReturn + seat.extraPrice;
                } else {
                    adultMoneyReturn -= ticketPriceReturn + seat.extraPrice;
                }
            }
        }

        checkBabyReturnLength = ghetreemve.length;
        checkAdultReturnLength = ghenguoilonve.length;

        totalMoneyReturn = babyMoneyReturn + adultMoneyReturn;

        $('#babyMoneyReturn').text(babyMoneyReturn.format()+' VND');
        $('#adultMoneyReturn').text(adultMoneyReturn.format()+' VND');
        $('#totalMoneyReturn').text(totalMoneyReturn.format()+' VND');
    }

    //Tổng tiền 2 chiều
    totalMoney = totalMoneyOneway + totalMoneyReturn;
    if(promotionMoney > 0) {
        $('#totalMoney').text((totalMoney - promotionMoney).format()+' VND');
    } else if(promotionPercent > 0) {
        $('#totalMoney').text((totalMoney - totalMoney*promotionPercent).format()+' VND');
        totalMoneyOneway = totalMoneyOneway - totalMoneyOneway*promotionPercent;


    } else {
        $('#totalMoney').text(totalMoney.format()+' VND');
    }
}


//Đổi ngày về theo ngày đi
function changeDate(dateStr) {
    if(dateStr === '') {
        return;
    }
    var date_Str = '';
    for (var i = 0; i < 10; i++) {

        if (i == 1 || i == 0) {
            date_Str += dateStr.charAt(i + 3);
        } else if (i == 3 || i == 4) {
            date_Str += dateStr.charAt(i - 3);
        }
        else date_Str += dateStr.charAt(i);
    }
    isRound = $('#isRoundTrip').val();
    if(isRound == 1) {
        $('#returnDate').datepicker("option", {
            minDate: new Date(date_Str)
        });
        // getSchedule(endPoint, startPoint, dateStr, true);
        $('#returnDate').val(dateStr);
    }
}

//Lấy danh sách các giờ chạy
function getSchedule(startPoint, endPoint, date, isBack) {
    var dateAr = date.split('/');
    var newDate = dateAr[2]+dateAr[1]+dateAr[0] ;
        $('#list-oneway').html('');
        $('#list-roundway').html('');
    $.ajax({
        type: "POST",
        url: "https://www.anvui.vn/listSchedule3",
        data: {
           

        page: 0,
        count: 100,
        startPoint: startPoint,
        endPoint: endPoint,
        date: newDate,
        companyId: companyId,
        startTimeLimit: 0,
        endTimeLimit: 86400000,
        timeZone: 7,
        platform: 2


        },
        success: function (result) {
            $('#loading').hide();
            console.log(result['trips']);
            if(result['trips'].toString() !== '') {
                if(isRound == 1) {
                    $('#trip-round').show();
                    $('#total-round').show();
                }
                $('#trip-oneway').show();
                $('#next-step').show();
                // $('#booking-form').hide();
            } else {
                $.alert({
                    title: 'Thông báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Không có chuyến nào!'
                });
                return false;
            }
            scheduleOneway = result['trips'];
            var typcars = [];
            var typcarsid = [];

            $.each(result['trips'], function (key, item) {
                var Now = new Date();
                var timeNow =  $.format.date(Now.getTime(), 'HH:mm, dd/MM/yyyy');
                console.log(timeNow);
                var sumDateNow = customDate(Now.getTime() , '#YYYY##MM##DD#');
                var sumTimeStart = msToTimeString(item.startTime);
                var sumTimeNow = customDate(Now.getTime() , '#hhh##mm#');
                var ssTime = sumTimeStart - sumTimeNow;
                console.log(ssTime);
                
                console.log(item.date);
                console.log(sumDateNow);
                

                console.log(sumTimeNow);


                if(item.tripStatus !== 1 || item.date <= sumDateNow && ssTime < 0) {
                    var daxuatben = "activeDxb";
                }else{
                    var daxuatben = '';
                }
                console.log(item.additionPriceForUserType.length, 'logd');
                if(item.additionPriceForUserType.length > 1){
                    $.each(item.additionPriceForUserType[item.additionPriceForUserType.length-1].listUserType, function (key, val) {
                        if(val === 2){
                            if(item.additionPriceForUserType[item.additionPriceForUserType.length-1].type===2){
                                ticketPrice2 = item.price + item.additionPriceForUserType[item.additionPriceForUserType.length-1].mode * item.additionPriceForUserType[item.additionPriceForUserType.length-1].amount * item.price;
                            }else{
                                ticketPrice2 = item.price + item.additionPriceForUserType[item.additionPriceForUserType.length-1].mode * item.additionPriceForUserType[item.additionPriceForUserType.length-1].amount;
                            }
                        }
                    })
                }else{
                    ticketPrice2 = item.price;
                    console.log(ticketPrice2);
                }
               
                var typeclass = 'alltypecars '+item.seatMap.vehicleTypeId;
                if(isBack) {
                    var additionPrice = item.additionPriceForUserType||{};
                    var schedule = '<li class=" '+typeclass+' scheduleId-'+item.tripId+item.pointUp.id+item.pointDown.id+' '+ daxuatben + ' "  > <div class="container"> ';
                } else {
                    var additionPrice = item.additionPriceForUserType||{};
                    var schedule = '<li class=" '+typeclass+' scheduleId-'+item.tripId+item.pointUp.id+item.pointDown.id+' '+ daxuatben + ' " >';
                }

                schedule += ' <div class="hidden-xs"> <div class="offer-container hidden-sm hidden-xs"><div class="container-fluid payoo-offer-container"> <div class="row" style="display:none;"> <div class="col-sm-4 col-xs-3 pd-0 mb10" style="width:auto"> <div class="offer-tag"></div></div><div class="col-sm-10 col-xs-10 pd-0 ml20" style="margin-top:2px;"> <span></span> <span class="noti-detail" style="cursor:pointer;color:#1867bc"> '+ item.vehicleTypeName +' </span> </div></div><div class="pop-vxr w300 payoo-offer-tip" style="display: none;"> <div class="body-pop"> <div> <p style="line-height: 20px;white-space: pre-line;"></p></div></div></div></div></div><div class="col-2 col-md-3 col-sm-3 col-xs-2"> <div class="row"> <div class="pull-left comp-name-container"> <h6>'+item.pointUp.name+' - '+item.pointDown.name +'</h6> </div></div></div><div class="col-4 col-md-6 col-lg-5 col-sm-3 col-xs-4 detail-route"> <div class="col-12 ml10" style="text-align:center;"> <div class="text-left-from"> <h6>'+ msToTime(item.startTime) +'</h6> </div><div class="text-left" style="padding:0;"> - </div><div class="text-left-to"> <h6 class="startDate">'+depatureDate+'</h6> </div><div class="clearfix"></div><div class="pull-left hidden-sm" style="width:100%;"> <div class="col-5 col-md-5 col-sm-5"> <a></a> </div><div class="col-2 col-md-2 col-sm-2"></div><div class="col-5 col-md-5 col-sm-5 payoo-mt2"> <a></a> </div></div></div></div><div class="col-2 col-md-2 col-sm-3 col-xs-2" style="text-align:center"> <div style="margin-bottom:3px !important" ></div><div class="clearfix"></div><div class="service-call seats-text mt15" style=""> <span>' +item.totalEmptySeat+ '</span> Ghế trống </div> <div class="service-call seats-text mt15" style=""> <span> ' +item.seatMap.seatMapName+ '</span>  </div></div><div class="text-right pr0 col-md-3 col-sm-3 col-xs-2 col-lg-2"><h6 style="font-weight: bold;"> '+ ticketPrice2 +' <small style="vertical-align: top;" class="unit-price-small">đ</small> </h6> <p style="margin:0;"> <div class="ticket-ac-btn btn-vxr-lg btn pull-right w100 hasSeat closed " onclick="selectTripOneWay(this)" ' +
                        'data-ratio="' + 1 + '" ' +
                        'data-activeDxb= "'+daxuatben+'"'+
                        'data-getinpoint="' + item.getInPointId + '"' +
                        'data-getoffpoint="' + item.getOffPointId + '"' +
                        'data-startdate="' + item.date + '" ' +
                        'data-startTime="' + item.startTime + '" ' +
                        'data-intime="' + item.getInTime + '" ' +
                        'data-pointupid="' + item.pointUp.id + '" ' +
                        'data-pointdownid="' + item.pointDown.id + '" ' +
                        'data-starttime="' + item.startTime + '" ' +
                        'data-offtime="' + item.getOffTime + '" ' +
                        'data-trip="' + item.tripId + '" ' +
                        'data-schedule="' + item.planId + '" ' +
                        'data-tripstatus="' + item.tripStatus + '" ' +
                        'data-route="' + item.route.id + '" ' +
                        'data-inpointname ="' +item.getInPointName+ '" '+
                        'data-offpointname ="' +item.getOffPointName+ '" '+
                        'data-sumTimeStart ="' +sumTimeStart+ '" '+
                        'data-sumTimeNow ="' +sumTimeNow+ '" '+
                        'data-sumDateNow ="' +sumDateNow+ '" '+
                        'data-price="' + item.price + '"><p style="display:none" class="additonPriceInfo">'+JSON.stringify(additionPrice)+'</p><p style="display:none" class="seatMap">'+JSON.stringify(item.seatMap)+'</p><p style="display:none" class="pointUp">'+JSON.stringify(item.pointUp)+'</p><p style="display:none" class="pointDown">'+JSON.stringify(item.pointDown)+'</p></p>Chọn </div> </p></div><div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xs-12"> <i>*Thuộc chuyến '+ msToTime(item.startTime) + ' ' + item.pointUp.name+' đến '+item.pointDown.name+'</i> </div></div><div class="hidden-lg hidden-sm hidden-md"> <div class="col-xs-12"> <div class="row"> <div class="offer-container hidden-sm hidden-xs"> <div class="container-fluid payoo-offer-container"> <div class="row"> <div class="col-sm-4 col-xs-3 pd-0 mb10" style="width:auto"> <div class="offer-tag">Loại xe</div></div><div class="col-sm-10 col-xs-10 pd-0 ml20" style="margin-top:2px;"> <span>'+ item.vehicleTypeName +'</span> <span class="noti-detail" style="cursor:pointer;color:#1867bc"> </span> </div></div><div class="pop-vxr w300 payoo-offer-tip" style="display: none;"> <div class="body-pop"> <div> <p style="line-height: 20px;white-space: pre-line;"></p></div></div></div></div></div><div class="offer-container hidden-lg hidden-md"> <div class="container-fluid payoo-offer-container"> <div class="row"> <div class="col-sm-4 col-xs-3" style="width:auto"> <div class="offer-tag">Loại xe</div></div><div class="col-sm-7 col-xs-8 pd-0" style="margin-top:2px;"> <span class="noti-detail">'+ item.vehicleTypeName +'</span> </div></div><div class="pop-vxr w300 payoo-offer-tip" style="display: none;"> <div class="body-pop"> <div> <p style="line-height: 20px;white-space: pre-line;"></p></div></div></div></div></div></div><div class="row"> <div class="col-xs-7"> <div class="star-mobile"> <h6> '+ depatureDate +' - '+ msToTime(item.startTime) +' </h6> <i class="pl5 pr5 text-gray3 left-arrow">→</i> <h6>  </h6> </div></div><div class="col-xs-5 text-right"> <h6 style="font-weight: bold;"> '+ ticketPrice2 +' <small style="vertical-align: top;" class="unit-price-small">đ</small> </h6> </div></div><div class="row"> <div class="col-xs-6"> <h6 class="comp-name-title text-gray3">'+item.route.name+'</h6> </div><div class="col-xs-6 text-right"> <p> <span>' +item.totalEmptySeat+ '</span> Ghế trống </p></div></div><div class="row"> <div class="col-xs-6"> <div class="text-gray vehicle-type-p mb3 hidden-lg hidden-md"> '+item.pointUp.name+' → '+item.pointDown.name+' </div></div></div><div class="row"> <div class="col-xs-6"> <div class="text-gray vehicle-type-p mb3 hidden-lg hidden-md">'+ item.vehicleTypeName +'</div></div><div class="col-xs-6 text-right"> <p style="margin:0;"> <div class="ticket-ac-btn btn-vxr-lg btn pull-right w100 hasSeat closed " onclick="selectTripOneWay(this)" ' +
                        'data-ratio="' + 1 + '" ' +
                        'data-activeDxb= "'+daxuatben+'"'+
                        'data-getinpoint="' + item.getInPointId + '"' +
                        'data-getoffpoint="' + item.getOffPointId + '"' +
                        'data-startdate="' + item.date + '" ' +
                        'data-startTime="' + item.startTime + '" ' +
                        'data-intime="' + item.getInTime + '" ' +
                        'data-pointupid="' + item.pointUp.id + '" ' +
                        'data-pointdownid="' + item.pointDown.id + '" ' +
                        'data-offtime="' + item.getOffTime + '" ' +
                        'data-trip="' + item.tripId + '" ' +
                        'data-schedule="' + item.planId + '" ' +
                        'data-tripstatus="' + item.tripStatus + '" ' +
                        'data-route="' + item.route.id + '" ' +
                        'data-inpointname ="' +item.getInPointName+ '" '+
                        'data-offpointname ="' +item.getOffPointName+ '" '+
                        'data-sumTimeStart ="' +sumTimeStart+ '" '+
                        'data-sumTimeNow ="' +sumTimeNow+ '" '+
                        'data-sumDateNow ="' +sumDateNow+ '" '+
                        'data-price="' + item.price + '" > <p style="display:none" class="additonPriceInfo">'+JSON.stringify(additionPrice)+'</p> <p style="display:none" class="seatMap">'+JSON.stringify(item.seatMap)+'</p><p style="display:none" class="pointUp">'+JSON.stringify(item.pointUp)+'</p><p style="display:none" class="pointDown">'+JSON.stringify(item.pointDown)+'</p> Chọn </div> </p></div></div></div></div>';
                schedule += '</div></li>';
                if(isBack) {
                    $('#list-roundway').append(schedule);
                } else {
                    $('#list-oneway').append(schedule);
                }

                if(!typcarsid.includes(item.seatMap.vehicleTypeId)){
                    typcars.push(item.seatMap);
                    typcarsid.push(item.seatMap.vehicleTypeId);
                }
            });
            
            var selecthtml =  ' <span class="scb-to"> Loại xe: </span><select onchange="showtypecars(this.value)">';
            selecthtml += '<option value="alltypecars">Tất cả các loại xe</option>';
            $.each(typcars, function (key, item) {
                selecthtml += '<option value="'+item.vehicleTypeId+'">'+item.vehicleTypeName+'</option>';
            });
            selecthtml += '</select>';
            // $('#selecttypecars').html(selecthtml);
            

        }
    });
}
function showtypecars(ele){
    $('.alltypecars').hide();
    $('.'+ele).show();
}
//Định dạng tiền
Number.prototype.format = function (e, t) {
    var n = "\\d(?=(\\d{" + (t || 3) + "})+" + (e > 0 ? "\\." : "$") + ")";
    return this.toFixed(Math.max(0, ~~e)).replace(new RegExp(n, "g"), "$&,")
};

function getFormattedDate(unix_timestamp, methor) {
    var date = new Date(unix_timestamp);
    str = '';
    if (methor === 'time') {
        str = $.format.date(date.getTime(), 'HH:mm')
    } else if(methor === 'date') {
        str = $.format.date(date.getTime(), 'dd/MM/yyyy')
    } else {
        str = $.format.date(date.getTime(), 'HH:mm, dd/MM/yyyy')
    }

    return str;
}

//Lay param tren url
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function getAds() {
    var dnow = new Date();
    var d = dnow.getTime();
    var ddata = [];
    $.ajax({
        type: 'POST',
        url: 'https://dobody-anvui.appspot.com/popup/get-list',
        dataType: "json",
        async:true,
        data: JSON.stringify({companyId: companyId,date:d}),
        success: function (data) {
            ddata=data;
        }
    });
    return ddata;
}

function hashtype(str) {
    var hash = '';
    if (this.length == 0) return hash;
    for (i = 0; i < str.length; i++) {
        char = str.charCodeAt(i);
        hash += char;
        //hash = hash & hash; // Convert to 32bit integer
    }
    return hash;

};

function removeItemNull(data){
    var dataReturn = {};
    $.each(data,function(k,v){
        if(v!==''){
            dataReturn[k]=v;
        }
    });

    console.log(dataReturn);
    return dataReturn;
}

$('body').on('change','#transshipment',function () {
    if($(this).is(':checked')) {
        transshipment = 1;
        $('.transshipment').prop('disabled', false);

        $('#transshipmentPriceOneway').text(trashipmentPriceOneway.format()+' VND');
        $('#transshipmentPriceReturn').text(trashipmentPriceReturn.format()+' VND');
        totalMoneyOneway += trashipmentPriceOneway;
        totalMoneyReturn += trashipmentPriceReturn;
        $(".content-boxd").show();
    } else {
        transshipment = 0;
        if(totalMoneyOneway > 0) {
            totalMoneyOneway -= trashipmentPriceOneway;
        }
        if(totalMoneyReturn > 0) {
            totalMoneyReturn -= trashipmentPriceReturn;
        }
        /*Reset tat ca tien trung chuyen ve 0*/
        trashipmentPriceOneway = 0;
        trashipmentPriceInPointOneway = 0;
        trashipmentPriceOffPointOneway = 0;

        trashipmentPriceReturn = 0;
        trashipmentPriceInPointReturn = 0;
        trashipmentPriceOffPointReturn = 0;

        $(".transshipment").prop("selectedIndex", 0);

        $('.transshipment').prop('disabled', true);

        $('#transshipmentPriceOneway').text('0 VND');
        $('#transshipmentPriceReturn').text('0 VND');
        $(".content-boxd").hide();
    }



    totalMoney = totalMoneyOneway + totalMoneyReturn;

    $('#totalMoneyOneway').text(totalMoneyOneway.format()+' VND');
    $('#totalMoneyReturn').text(totalMoneyReturn.format()+' VND');
    $('#totalMoney').text(totalMoney.format()+' VND');
});

$('body').on('change','#transshipmentInPointOneway',function () {
    var seatOneway = ghenguoilondi.concat(ghetreemdi);

    totalMoneyOneway -= trashipmentPriceOneway;

    if(seatOneway.length < 1) {
        trashipmentPriceOneway -= trashipmentPriceInPointOneway;
    } else {
        trashipmentPriceOneway -= (trashipmentPriceInPointOneway * seatOneway.length);
    }


    if(seatOneway.length < 1) {
        trashipmentPriceOneway += trashipmentPriceInPointOneway;
    } else {
        trashipmentPriceOneway += (trashipmentPriceInPointOneway * seatOneway.length);
    }

    $('#transshipmentPriceOneway').text(trashipmentPriceOneway.format()+' VND');

    totalMoneyOneway += trashipmentPriceOneway;
    totalMoney = totalMoneyOneway + totalMoneyReturn;

    $('#totalMoneyOneway').text(totalMoneyOneway.format()+' VND');
    $('#totalMoney').text(totalMoney.format()+' VND');
});


$('body').on('change','#transshipmentOffPointOneway',function () {
    var seatOneway = ghenguoilondi.concat(ghetreemdi);
    totalMoneyOneway -= trashipmentPriceOneway;

    if(seatOneway.length < 1) {
        trashipmentPriceOneway -= trashipmentPriceOffPointOneway;
    } else {
        trashipmentPriceOneway -= (trashipmentPriceOffPointOneway * seatOneway.length);
    }

    trashipmentPriceOffPointOneway = $(this).find(':selected').data('price');

    if(seatOneway.length < 1) {
        trashipmentPriceOneway += trashipmentPriceOffPointOneway;
    } else {
        trashipmentPriceOneway += (trashipmentPriceOffPointOneway * seatOneway.length);
    }

    $('#transshipmentPriceOneway').text(trashipmentPriceOneway.format()+' VND');
    totalMoneyOneway += trashipmentPriceOneway;
    totalMoney = totalMoneyOneway + totalMoneyReturn;

    $('#totalMoneyOneway').text(totalMoneyOneway.format()+' VND');
    $('#totalMoney').text(totalMoney.format()+' VND');
});

function msToTime(duration) {
  var milliseconds = parseInt((duration % 1000) / 100),
    seconds = Math.floor((duration / 1000) % 60),
    minutes = Math.floor((duration / (1000 * 60)) % 60),
    hours = Math.floor((duration / (1000 * 60 * 60)) % 24);

  hours = (hours < 10) ? "0" + hours : hours;
  minutes = (minutes < 10) ? "0" + minutes : minutes;
  seconds = (seconds < 10) ? "0" + seconds : seconds;

  return hours + ":" + minutes;
}
function msToTimeString(duration) {
  var milliseconds = parseInt((duration % 1000) / 100),
    seconds = Math.floor((duration / 1000) % 60),
    minutes = Math.floor((duration / (1000 * 60)) % 60),
    hours = Math.floor((duration / (1000 * 60 * 60)) % 24);

  hours = (hours < 10) ?  + hours : hours;
  minutes = (minutes < 10) ? "0" + minutes : minutes;
  seconds = (seconds < 10) ?  "0" + seconds : seconds;

  return hours +''+ minutes;
}

function getForCustomer(tripId,pointUpId,pointDownId ){


  var dataLisst = [];
  $.ajax({
    url: 'https://www.anvui.vn/getForCustomer',
    type: 'POST',
    data: {
        tripId: tripIdOneway,
        pointUpId: pointUpId,
        pointDownId: pointDownId
    },
    success: function(data) {

        $('#loading').hide(); 

        
        $.each(data.results.tickets, function (key, val) {
            dataLisst.push({'id': val.seat.seatId, 'ticketStatus': val.ticketStatus, 'overTime': val.overTime})
           
        });
    },

    async:false
  }); 

  return dataLisst;
}

function checkPromotion() {

    console.log(routeId);
    if($('#promotionCode').val() == '') {
        $.alert({
            title: 'Cảnh báo!',
            type: 'red',
            typeAnimated: true,
            content: 'Bạn chưa nhập mã khuyến mại',
        });
        return false;
    }

    if(!isPromotion) {
        var promotionCode = $('#promotionCode').val();
        $(this).prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: 'https://ticket-dot-dobody-anvui.appspot.com/promotion/check',
            beforeSend: function(request) {
                request.setRequestHeader("DOBODY6969", 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ2IjowLCJkIjp7InVpZCI6IkFETTExMDk3Nzg4NTI0MTQ2MjIiLCJmdWxsTmFtZSI6IkFkbWluIHdlYiIsImF2YXRhciI6Imh0dHBzOi8vc3RvcmFnZS5nb29nbGVhcGlzLmNvbS9kb2JvZHktZ29ub3cuYXBwc3BvdC5jb20vZGVmYXVsdC9pbWdwc2hfZnVsbHNpemUucG5nIn0sImlhdCI6MTQ5MjQ5MjA3NX0.PLipjLQLBZ-vfIWOFw1QAcGLPAXxAjpy4pRTPUozBpw');
            },
            data: JSON.stringify({
                timeZone: 7,
                promotionCode: promotionCode,
                companyId: companyId,
                getInTimePlan: startDate+startTime,
                routeId: routeId,
                pricePerSeat: ticketPriceOneway
            }),
            success: function (data) {
                promotionPercent = data.results.result.percent;
                promotionMoney = data.results.result.price;
                $('#promotionCode').prop('readonly', true);
                $('#checkPromotion').prop('disabled', false);

                $('#promotion').show();
                if(promotionMoney > 0) {
                    $('#promotionPrice').text(promotionMoney.format()+' VND');
                } else if(promotionPercent > 0) {
                    $('#promotionPrice').text(promotionPercent*100+' %');
                }


                $('#checkPromotion').text('X');
                $('#checkPromotion').removeClass('btn-info');
                $('#checkPromotion').addClass('btn-danger');
                console.log(totalMoney);
                console.log(promotionPercent);
                if(totalMoney > 0) {
                    if(promotionMoney > 0) {
                        $('#totalMoney').text((totalMoney - promotionMoney).format()+' VND');

                    } else if (promotionPercent > 0) {
                        $('#totalMoney').text((totalMoney - totalMoney*promotionPercent).format()+' VND');
                        ticketPriceOneway = ticketPriceOneway - ticketPriceOneway*promotionPercent;
                    }
                }
                isPromotion = true;

            },
            error: function () {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Mã khuyến mại không tồn tại',
                });
                $('#checkPromotion').prop('disabled', false);
            }
        });
    } else {
        $('#checkPromotion').text('Kiểm tra');
        $('#checkPromotion').removeClass('btn-danger');
        $('#checkPromotion').addClass('btn-info');
        $('#promotionCode').val('');
        $('#promotion').hide();
        $('#promotionCode').prop('readonly', false);

        promotionPercent = 0;
        promotionMoney = 0;
        if(totalMoney > 0) {
            $('#totalMoney').text(totalMoney.format()+' VND');
        }
        ticketPriceOneway = ticketPriceOnewayD;
        console.log(ticketPriceOneway);
        isPromotion = false;
    }

};

function miliseconds(hrs,min,sec)
{
    return((hrs*60*60+min*60+sec)*1000);
}

function customDate (miliseconds,formatString,is){
        if(is){// nếu true thì miliseconds là múi giờ +0 , nếu múi giờ + 0 thì thay đổi miliseconds
            miliseconds -=- new Date(miliseconds).getTimezoneOffset()*60000;
        }
        var dateFm = new Date(miliseconds);
        var YYYY,YY,MMMM,MMM,MM,M,DDDD,DDD,DD,D,hhhh,hhh,hh,h,mm,m,ss,s,ampm,AMPM,dMod,th;
        YY = ((YYYY=dateFm.getFullYear())+"").slice(-2);
        MM = (M=dateFm.getMonth()+1)<10?('0'+M):M;
        MMM = (MMMM=["January","February","March","April","May","June","July","August","September","October","November","December"][M-1]).substring(0,3);
        DD = (D=dateFm.getDate())<10?('0'+D) :D;
        DDD = (DDDD=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][dateFm.getDay()]).substring(0,3);
        th=(D>=10&&D<=20)?'th':((dMod=D%10)==1)?'st':(dMod==2)?'nd':(dMod==3)?'rd':'th';
        formatString = formatString.replace("#YYYY#",YYYY).replace("#YY#",YY).replace("#MMMM#",MMMM).replace("#MMM#",MMM).replace("#MM#",MM).replace("#M#",M).replace("#DDDD#",DDDD).replace("#DDD#",DDD).replace("#DD#",DD).replace("#D#",D).replace("#th#",th);
        h=(hhh=dateFm.getHours());
        if (h==0) h=24;
        if (h>12) h-=12;
        hh = h<10?('0'+h):h;
        hhhh = hhh<10?('0'+hhh):hhh;
        AMPM=(ampm=hhh<12?'am':'pm').toUpperCase();
        mm=(m=dateFm.getMinutes())<10?('0'+m):m;
        ss=(s=dateFm.getSeconds())<10?('0'+s):s ;
        return formatString.replace("#hhhh#",hhhh).replace("#hhh#",hhh).replace("#hh#",hh).replace("#h#",h).replace("#mm#",mm).replace("#m#",m).replace("#ss#",ss).replace("#s#",s).replace("#ampm#",ampm).replace("#AMPM#",AMPM);
};
function ignoreSpaces(string) {
    var temp = "";
    string = '' + string;
    splitstring = string.split(" ");
    for(i = 0; i < splitstring.length; i++)
    temp += splitstring[i];
    return temp;
}
