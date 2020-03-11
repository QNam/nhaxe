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

var promotionMoney = 0;
var promotionPercent = 0;
var isPromotion = false;

//Biến check ghế trẻ em đi tăng giảm
var checkBabyOnewayLength = 0;
//Biến check ghế người lớn đi tăng giảm
var checkAdultOnewayLength = 0;

var checkBabyReturnLength = 0;
var checkAdultReturnLength = 0;


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


    



    //Lấy dữ liệu từ url, dư liệu lấy start và end đặc biệt
    startPoint = getParameterByName('startId');
    endPoint = getParameterByName('endId');
    depatureDate = getParameterByName('depatureDate');
    // returnDate = getParameterByName('returnDate');
    returnDate = '';
    startText = getParameterByName('startPoint');
    endText = getParameterByName('endPoint');

    if(startPoint != null && endPoint != null && depatureDate != null) {
        isRound = 0;
        // $('#booking-form').hide();
        $('#loading').show();
        $('.start').html(startText);
        $('.end').html(endText);
        $('.startDate').html(depatureDate);
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

    //Lay danh sach tinh thanh
    $.ajax({
        type: 'POST',
        url: 'https://dobody-anvui.appspot.com/point/get_province_and_point',
        dataType: "json",
        data: JSON.stringify({companyId: companyId}),
        success: function (data) {
            provinceData = data.results.result;
            $.each(provinceData, function (index, val) {
                $('#provideId').append("<option value='" + val.id + "'>" + val.provinceName + "</option>");
            });
        }
    });
    
    $("#provideId").change(function() {
        var proviceId = $(this).val();

        $('#districtId').html('<option value="">Chọn điểm</option>');

        if(proviceId !== '') {
            district = provinceData.filter(function(val) {
                return val.id === proviceId;
            });

            if($('#typePoint').val() == 1) {
                startPoint = proviceId;
                $('#startPoint').val(district[0].unitName + " " + district[0].provinceName);
            } else {
                endPoint = proviceId;
                $('#endPoint').val(district[0].unitName + " " + district[0].provinceName);
            }

            $.each(district[0].listDistrict, function (index, val) {
                $('#districtId').append("<option value='" + val.districtId + "'>" + val.districtName + "</option>");
            });
            $('.selectDistrict').show();
        } else {
            $('.selectDistrict').hide();

            if($('#typePoint').val() == 1) {
                startPoint = '';
                $('#startPoint').val('');
            } else {
                endPoint = '';
                $('#endPoint').val('');
            }
        }
    });

    $("#districtId").change(function() {
        var districtId = $(this).val();
        if(districtId !== '') {
            var districtDetail = district[0].listDistrict.filter(function(val) {
                return val.districtId === districtId;
            });
            if($('#typePoint').val() == 1) {
                startPoint = districtId;
                $('#startPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
            } else {
                endPoint = districtId;
                $('#endPoint').val(districtDetail[0].districtName + ", " + district[0].provinceName);
            }

            $('#choosePoint').modal('hide');
        } else {
            if($('#typePoint').val() == 1) {
                startPoint = district[0].id;
                $('#startPoint').val(district[0].unitName + " " + district[0].provinceName);
            } else {
                endPoint = district[0].id;
                $('#endPoint').val(district[0].unitName + " " + district[0].provinceName);
            }

        }

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
    $('#checkPromotion').click(function () {console.log(routeId);
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
                url: 'https://dobody-anvui.appspot.com/web_promotion/check',
                beforeSend: function(request) {
                    request.setRequestHeader("DOBODY6969", 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ2IjowLCJkIjp7InVpZCI6IkFETTExMDk3Nzg4NTI0MTQ2MjIiLCJmdWxsTmFtZSI6IkFkbWluIHdlYiIsImF2YXRhciI6Imh0dHBzOi8vc3RvcmFnZS5nb29nbGVhcGlzLmNvbS9kb2JvZHktZ29ub3cuYXBwc3BvdC5jb20vZGVmYXVsdC9pbWdwc2hfZnVsbHNpemUucG5nIn0sImlhdCI6MTQ5MjQ5MjA3NX0.PLipjLQLBZ-vfIWOFw1QAcGLPAXxAjpy4pRTPUozBpw');
                },
                data: {
                    timeZone: 7,
                    promotionCode: promotionCode,
                    companyId: companyId,
                    getInTimePlan: intimeOneway,
                    routeId: routeId,
                    pricePerSeat: ticketPriceOneway
                },
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
            isPromotion = false;
        }

    });
    
   
});

function generatePaymentCode() {
    return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15) + Date.now();
}
// xác nhận đặt vé
function hoanthanhbtndatve(){
        var mave;
        var paymentType = $('.paymenttype:checked').val();
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

        if(totalSeat > 5) {
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
                var dataSend ={
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
                        'promotionCode': $('#promotionCode').val(),
                        'note' : note,
                        "mealPrice":0,
                        "alongTheWayAddress":"",
                        "platform":2,
                        'timeBookHolder': timeBookHolder,
                        "priceInsurrance":0,
                        "dropAlongTheWayAddress":"",
                        "pickUpAddress":"",
                        "needPickUpHome":"true",
                        "dropAlongTheWayAddress":"",
                        'pickUpAddress': $('#pickUpAddress').val(),
                        "needPickUpHome":"true",
                        'dropOffAddress': $('#dropOffAddress').val(),
                        "getOffTimePlan":offtimeOneway,


                        'inTransshipmentPrice': (trashipmentPriceInPointOneway * seatOneway.length),
                        'offTransshipmentPrice': (trashipmentPriceOffPointOneway * seatOneway.length),
                                  
                        'latitudeUp': $('#transshipmentInPointOneway').find(':selected').data('lat'),
                        'longitudeUp': $('#transshipmentInPointOneway').find(':selected').data('long'),
                        
                        'latitudeDown': $('#transshipmentOffPointOneway').find(':selected').data('lat'),
                        'longitudeDown': $('#transshipmentOffPointOneway').find(':selected').data('long'),
                        "getOffTimePlan":offtimeOneway

                    }

                console.log(dataSend);

                dataSend = removeItemNull(dataSend);

                $.ajax({
                    type: 'POST',
                    url: 'http://demo.nhaxe.vn/dat-ve?sub=order',
                    data: dataSend,
                    success: function (data) {
                        
                        if(data.code != 200) {
                            $.alert({
                                title: 'Thông báo!',
                                type: 'red',
                                typeAnimated: true,
                                content: 'Đã có lỗi xảy ra, vui lòng đặt lại!',
                            });
                        } else {
                            //thanh toan truc tuyen
                            if(paymentType == 1) {
                                $.ajax({
                                    type: 'POST',
                                    url: 'https://dobody-anvui.appspot.com/ePay/',
                                    dataType: 'json',
                                    data: JSON.stringify({
                                        ticketId: data.results.ticket.ticketId,
                                        paymentType: 1,
                                        packageName: 'web',
                                        phoneNumber: phoneNumber,
                                    }),
                                    success: function (data) {
                                        url = data.results.redirect;
                                        window.location.href = url;
                                    }
                                });
                                // var url = 'https://dobody-anvui.appspot.com/payment/dopay?vpc_OrderInfo=' + data.results.ticket.ticketId + '&vpc_Amount=' + totalMoneyAfter * 100 + '&phoneNumber=' + phoneNumber + "&packageName=web";
                                // $.dialog({
                                //     title: 'Thông báo!',
                                //     content: 'Hệ thống đang chuyển sang cổng thanh toán, vui lòng đợi trong giây lát',
                                //     onClose: function (e) {
                                //         e.preventDefault();
                                //     }
                                // });
                                // setTimeout(function () {
                                //     window.location.href = url;
                                // }, 3000);
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
                            } else {
                                $.alert({
                                    title: 'Thông báo!',
                                    content: 'Bạn đã đặt vé thành công! Vui lòng đến quầy thanh toán và nhận vé',
                                    onClose: function () {
                                        window.location.href = '/';
                                    }
                                });
                            }
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

                $.ajax({
                    type: 'POST',
                    url: 'http://demo.nhaxe.vn/dat-ve?sub=order',
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
                        'pickUpAddress': $('#transshipmentInPointOneway').find(':selected').data('address'),
                        "needPickUpHome":"true",
                        'dropOffAddress': $('#transshipmentOffPointOneway').find(':selected').data('address'),
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
                                url: 'http://demo.nhaxe.vn/dat-ve?sub=order',
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

   
    
    $('#list-oneway>li').removeClass('trip-active');
    $("#list-oneway>li #select-seat-oneway").remove();
    $(this).parent(".alltypecars").addClass('trip-active');

    tripIdOneway = $(trip).data('trip');
    scheduleIdOneway = $(trip).data('schedule');
    intimeOneway = $(trip).data('intime');
    offtimeOneway = $(trip).data('offtime');
    inPointOneway = $(trip).data('getinpoint');
    offPointOneway = $(trip).data('getoffpoint');
    ticketPriceOneway = $(trip).data('price');

    if(typeof addPri.amount !== "undefined"){
        if(addPri.type===2){
            ticketPriceOneway = ticketPriceOneway + addPri.mode * addPri.amount * ticketPriceOneway;
        }else{
            ticketPriceOneway = ticketPriceOneway + addPri.mode * addPri.amount;
        }
    }

    ticketRatioOneway = $(trip).data('ratio');
    startDateOneway = $(trip).data('startdate');
    tripStatus = $(trip).data('tripstatus');
    routeId = $(trip).data('route');
    scheduleID = $(trip).data('schedule');
    getInPointName = $(trip).data('inpointname');
    getOffPointName = $(trip).data('offpointname');
    startTime = $(trip).data('starttime');

    $('.intime').html(getFormattedDate(intimeOneway, 'time'));

    var Now = new Date();
    var timeNow =  $.format.date(Now.getTime(), 'HH:mm, dd/MM/yyyy');


   $("#list-oneway li").removeClass("active");

    $(".scheduleId-"+scheduleID).addClass("active");

    $('.rv-tran-from').text(getInPointName);
    $('.rv-tran-to').text(getOffPointName);
    if(tripStatus == 2 || startTime < timeNow && startDateOneway <= Now) {
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
        
        
        //chọn trip
        $.getJSON("http://demo.nhaxe.vn/dat-ve?tripId=" + tripIdOneway + '&scheduleId=' + scheduleIdOneway, function (data) {

            var html = '';
            //Theo số tầng
            for (var floor = 1; floor < data.seatMap.numberOfFloors + 1; floor++) {
                if(floor == 1){
                    html += '<div class="col-md-12 col-sm-12 col-xs-12 tachtang">';
                } else {
                    html += '<div class="col-md-12 col-sm-12 col-xs-12">';
                }

                html += '<div class="col-md-12 col-sm-12 col-xs-12 text-center"><strong>Tầng ' + floor + '</strong></div>';

                //Theo hàng
                for (var row = 1; row < data.seatMap.numberOfRows + 1; row++) {
                    //Theo cột
                    for (var column = 1; column < data.seatMap.numberOfColumns + 1; column++) {
                        coghe = false;
                        iddd = '';
                        seatInfoOneway = data.seatMap.seatList;// lay du lieu seatMap
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
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + data.seatMap.numberOfColumns + '"><div class="chonghe driver"></div></div>';
                                } else if(val['seatType'] == 1 || val['seatType'] == 5 || val['seatType'] == 6) { // Lần lượt là cửa cửa, Wc, phụ
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + data.seatMap.numberOfColumns + '"><div class="chonghe"></div></div>';
                                } else if((ticketStatus == 2 && (val['overTime'] > Date.now() || val['overTime'] == 0)) || ticketStatus == 7 || ticketStatus == 3 || ticketStatus == 4 || ticketStatus == 5) {
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + data.seatMap.numberOfColumns + '"><div class="chonghe ghedaban"></div></div>';
                                } else {
                                    html += '<div class="col-md-2 col-sm-2 col-xs-2 ghe-' + data.seatMap.numberOfColumns + '">' +
                                        '<div class="chonghe ghetrong" id="chonghe_' + id1 + '" onclick="chonghe(\'' + id + '\')" data-over="' + val['overTime'] + '">' +
                                        + id +'</div></div>';
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
            $('#seatMapOneWay').html(html);

        });
        

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
    var isBaby = false;
    seatVal = $.grep(seatInfoOneway,function(val, key){
        return val.seatId == seat;
    })[0];

    //Neu ghe trong thi chuyen sang ghe da chon
    if($('#chonghe_' + id).hasClass('ghetrong')){
        $('#chonghe_' + id).removeClass('ghetrong');
        $('#chonghe_' + id).addClass('ghedachon');
        ghenguoilondi.push(id);
    } else

    //Neu la ghe da chon thi chuyen sang ghe tre em
    if($('#chonghe_' + id).hasClass('ghedachon')) {
        $('#chonghe_' + id).removeClass('ghedachon');
        $('#chonghe_' + id).addClass('ghetrong');
        removeSeatInList(seat, ghenguoilondi);
        
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

        if(typeof addPri.amount !== "undefined"){
            if(addPri.type===2){
                var ticketExtraPrice = seat.extraPrice + (addPri.mode * addPri.amount * seat.extraPrice);
            }else{
                var ticketExtraPrice = seat.extraPrice + addPri.mode * addPri.amount;
            }
        } else{
            var ticketExtraPrice = seat.extraPrice;
        }

        console.log(ticketExtraPrice);
        console.log(addPri.mode);

        if(isBaby) {
            if(ghetreemdi.length > checkBabyOnewayLength) {


                
                adultMoney -= ticketPriceOneway + ticketExtraPrice;
                babyMoney += ticketPriceOneway * ticketRatioOneway + ticketExtraPrice;

            } else {

                

                babyMoney -= ticketPriceOneway * ticketRatioOneway + ticketExtraPrice;
                adultMoney += ticketPriceOneway + ticketExtraPrice;
            }

        } else {
            if(ghenguoilondi.length > checkAdultOnewayLength) {
                
                adultMoney += ticketPriceOneway + ticketExtraPrice;
            } else {
                if(checkBabyOnewayLength > 0) {
                    
                    babyMoney -= ticketPriceOneway * ticketRatioOneway + ticketExtraPrice;
                } else {
                    adultMoney -= ticketPriceOneway + ticketExtraPrice;
                }
            }
        }

       

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
    var newDate = dateAr[0] + '-' + dateAr[1] + '-' + dateAr[2];
        $('#list-oneway').html('');
        $('#list-roundway').html('');
    $.ajax({
        type: "POST",
        url: "https://www.anvui.vn/listSchedule2",
        data: {
            startPoint: startPoint,
            endPoint: endPoint,
            date: newDate,
            companyId: companyId,
            page: 0,
            count: 1000,
            platform:2,
        },
        success: function (result) {
            $('#loading').hide();

            if(result.toString() !== '') {
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
            scheduleOneway = result;
            var typcars = [];
            var typcarsid = [];

            $.each(result, function (key, item) {

                var Now = new Date();
                var timeNow =  $.format.date(Now.getTime(), 'HH:mm, dd/MM/yyyy');
                if(item.tripStatus == 2 || item.startTime < timeNow && item.startDate <= Now) {
                   

                    var daxuatben = "activeDxb";


                }else{
                    var daxuatben = '';
                }




               
                var typeclass = 'alltypecars '+item.seatMap.vehicleTypeId;
                if(isBack) {
                    var additionPrice = item.additionPrice||{};
                    var schedule = '<li class=" col-md-2 '+typeclass+' scheduleId-'+item.scheduleId+' '+ daxuatben + ' "  > <div class="container"> ';
                } else {
                    var additionPrice = item.additionPrice||{};
                    var schedule = '<li class=" col-md-2 '+typeclass+' scheduleId-'+item.scheduleId +' '+ daxuatben + ' " >';
                }
                

                if(item.additionPrice){

                    if(typeof item.additionPrice.amount !== "undefined"){
                        if(item.additionPrice.type===2){
                            ticketPrice2 = item.ticketPrice + item.additionPrice.mode * item.additionPrice.amount * item.ticketPrice;
                        }else{
                            ticketPrice2 = item.ticketPrice + item.additionPrice.mode * item.additionPrice.amount;
                        }

                        
                    }
                    console.log(ticketPrice2);

                }else{
                    ticketPrice2 = item.ticketPrice;
                    console.log(ticketPrice2);
                }


                




                schedule += '<div class="ticket-ac-btn btn-vxr-lg btn pull-right w100 hasSeat closed " onclick="selectTripOneWay(this)" ' +
                        'data-ratio="' + item.childrenTicketRatio + '" ' +
                        'data-getinpoint="' + item.getInPointId + '"' +
                        'data-getoffpoint="' + item.getOffPointId + '"' +
                        'data-startdate="' + item.startDate + '" ' +
                        'data-intime="' + item.getInTime + '" ' +
                        
                        'data-starttime="' + item.startTime + '" ' +
                        'data-offtime="' + item.getOffTime + '" ' +
                        'data-trip="' + item.tripId + '" ' +
                        'data-schedule="' + item.scheduleId + '" ' +
                        'data-tripstatus="' + item.tripStatus + '" ' +
                        'data-route="' + item.routeId + '" ' +
                        'data-inpointname ="' +item.getInPointName+ '" '+
                        'data-offpointname ="' +item.getOffPointName+ '" '+
                        'data-price="' + item.ticketPrice + '"> <p style="display:none" class="additonPriceInfo">'+JSON.stringify(additionPrice)+'</p></p>'+getFormattedDate(item.getInTime, 'time')+' - '+getFormattedDate(item.getOffTime, 'time')+' <div class="gt"> Ghế trống: '+item.totalEmptySeat+'</div> </div></li>';
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
            $('#selecttypecars').html(selecthtml);
            

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