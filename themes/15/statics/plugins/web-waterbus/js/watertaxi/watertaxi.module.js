$(document).ready(function() {
    var startPoint = $('#bookingWaterTaxi #startPointTaxi');
    var endPoint = $('#bookingWaterTaxi #endPointTaxi');

    var numberTicket = 1;
    var promotionPrice = 0;

    var prices;
    var totalMoney = 0;

    var depatureDate = $('#bookingWaterTaxi #depatureDateTaxi');

    var vehicleType = $('#bookingWaterTaxi #vehicleType');

    depatureDate.datepicker({
        dateFormat: 'dd/mm/yy',
        minDate: 0
    }).datepicker("setDate", new Date());

    /*Lay du lieu diem*/
    $.ajax({
        type: 'POST',
        url: 'https://nha-tau-an-vui.appspot.com/point/getList',
        dataType: "json",
        data: JSON.stringify({ packageName: "vn.anvui.saigonwaterbus", companyId: "TC03j1IanqGKIUS", style: 3}),
        success: function (data) {
            listDistrict = data.results.result[6].listDistrict;

            /*Start point*/
            $.each(listDistrict, function (k, v) {
                $('#bookingWaterTaxi #startPoint').append("<option data-lat='" + v.latitude + "' data-long='" + v.longitude + "' value='" + v.districtId + "'>" + v.districtName + "</option>");
            });

            $.each(listDistrict.reverse(), function (k, v) {
                $('#bookingWaterTaxi #endPoint').append("<option data-lat='" + v.latitude + "' data-long='" + v.longitude + "' value='" + v.districtId + "'>" + v.districtName + "</option>");
            });
        }
    });

    



    $('#bookingWaterTaxi #numberTicket').val(numberTicket + " vé");

    $('#bookingWaterTaxi #upTicket').click(function () {
        if(numberTicket < 19) {
            numberTicket++;
        }
        $('#bookingWaterTaxi #numberTicket').val(numberTicket + " vé");
    });

    $('#bookingWaterTaxi #downTicket').click(function () {
        if(numberTicket > 1) {
            numberTicket--;
        }
        $('#bookingWaterTaxi #numberTicket').val(numberTicket + " vé");
    });

    /*Ẩn các điểm đã chọn của điểm đầu điểm cuối để không trùng nhau*/
    startPoint.change(function(){
        var id = $(this).val();
        $("#bookingWaterTaxi #endPoint option").show();
        $("#bookingWaterTaxi #endPoint option[value="+id+"]").hide();

        var index = $("#bookingWaterTaxi #startPoint").prop('selectedIndex');

        $("#bookingWaterTaxi #endPoint").prop('selectedIndex', index);

        lat = $(this).find(':selected').data('lat');
        long = $(this).find(':selected').data('long');

        pointName = $(this).find(':selected').text();

        initStartMarker(lat, long, pointName);

        var endPointSelected = $("#bookingWaterTaxi #endPoint").find(":selected");

        pointNameEnd = endPointSelected.text();
        latEnd = endPointSelected.data('lat');
        longEnd = endPointSelected.data('long');

        initEndMarker(latEnd, longEnd, pointNameEnd);
    });
    
    $('#seachWaterTaxi').click(function () {
        $.alert({
            title: 'Thông báo',
            type: 'green',
            typeAnimated: true,
            content: 'Bạn đang sử dụng dịch vụ Saigon Watertaxi. Phí mở cửa là 270.000 VNĐ/lượt cho nhóm tối đa 6 người. ' +
            'Từ người tiếp theo, giá vé là 60.000 VNĐ/người/lượt',
            buttons: {
                ok: {
                    text: 'Đồng ý'
                }
            },
            onClose: function () {
                datvetaxi(startPoint, endPoint, vehicleType, depatureDate);
            }
        });
        return false;
    });

    /*Back trở lại chọn điểm đi điểm đến*/
    $('.list-schedule .backScreen').click(function () {
        $('#bookingWaterTaxi .list-schedule').hide(300);
        $('#bookingWaterTaxi .booing-form').show(300);
        return false;
    });

    
    function datvetaxi(startPoint, endPoint, vehicleType, date) {
        var dateAr = date.val().split('/');
        var newDate = dateAr[0] + '-' + dateAr[1] + '-' + dateAr[2];


        var startPointName = splitPointName(startPoint.find(':selected').text());
        var endPointName = splitPointName(endPoint.find(':selected').text());

        var startPointTaxi = startPoint.attr("data-point");
        var endPointTaxi = endPoint.attr("data-point");


        var pointString = startPointTaxi + "-" + endPointTaxi;





        $('.route-name').text(startPointName + "-" + endPointName);

        $('#bookingWaterTaxi .booing-form').hide(300);

        $('.schedule-list').html('<div class="loading"></div>');

        $.ajax({
            type: 'POST',
            url: 'https://www.anvui.vn/taxi',
            dataType: "json",
            data:  {
                companyId:"TC03j1IanqGKIUS", 
                pointString:pointString
            },
            success: function (data) {
                if(data.results.route == "null"){
                    $.alert({
                        title: 'Thông báo',
                        type: 'green',
                        typeAnimated: true,
                        content: 'Không tìm được chuyến',
                        buttons: {
                            ok: {
                                text: 'Quay lại'
                            }
                        },
                        onClose: function () {
                            $('#bookingWaterTaxi .booing-form').show(300);
                        }
                    });
                } else {
                    console.log(numberTicket);

                    var peopleBlocks = data.results.route.peopleBlocks;
                    $.each(peopleBlocks, function (k, v) {
                        if (numberTicket >= v.from && numberTicket <= v.to){
                            $('.total-money-d').val(v.price.format() + "vnd");

                            console.log(v.price.format() + "vnd");

                            $("#bookingWaterTaxi #TicketPrice").val(v.price);
                        }
                        
                    });
                    $("#bookingWaterTaxi #routeId").val(data.results.route.routeId);

                    var ticketHtml = buildTicketTaxi(numberTicket, ticketPrice, tripId, scheduleId, getInPoint, getOffPoint, getInTime, getOffTime, startDate, totalEmptyTicket, totalSeat, openPrice, maxGuestForOpenPrice);

                    $('#bookingWaterTaxi .ticket-info-list').html(ticketHtml);

                    getTotalMoney();
                    $('#bookingWaterTaxi .ticket-info').show(300);
                    $('#bookingWaterTaxi .list-schedule').hide(300);  
                }
                
            }
        });
    }

    // function buildSchedulList(scheduleData) {
    //     var scheduleList = '';

    //     $.each(scheduleData, function (k, v) {
    //         scheduleList += '<div class="col-12 margin-schedule">';
    //         scheduleList += '<div class="row schedule-item" ' +
    //             'data-ticketprice="' + v.ticketPrice + '" ' +
    //             'data-openprice="' + v.openPrice + '" ' +
    //             'data-getinpoint="' + v.getInPointId + '" ' +
    //             'data-getoffpoint="' + v.getOffPointId + '" ' +
    //             'data-getintime="' + v.getInTime + '" ' +
    //             'data-getofftime="' + v.getOffTime + '" ' +
    //             'data-startdate="' + v.startDate + '" ' +
    //             'data-scheduleid="' + v.scheduleId + '" ' +
    //             'data-tripid="' + v.tripId + '" ' +
    //             'data-tripstatus="' + v.tripStatus + '" ' +
    //             'data-numberticket="' + v.totalEmptySeat + '" ' +
    //             'data-maxguestopen="' + v.maxGuestForOpenPrice + '" ' +
    //             'data-totalseat="' + v.totalSeat + '" ' +
    //             'data-starttime="' + v.startTimeUnix + '">';
    //         scheduleList += '<div class="col-8">';
    //         scheduleList += '<div class="schedule-date">' + getFormattedDate(v.startDate, 'dM') + '</div>';
    //         if(v.startTimeUnix < Date.now() || v.tripStatus === 2) {
    //             scheduleList += '<div class="schedule-status">Đã khởi hành</div>';
    //         } else {
    //             scheduleList += '<div class="totalEmptySeat">Còn trống ' + v.totalEmptySeat + ' vé</div>';
    //         }
    //         scheduleList += '</div>';
    //         scheduleList += '<div class="col-4">';
    //         scheduleList += '<div class="schedule-time pull-right">' + getFormattedDate(v.startTimeUnix, 'time') + '</div>';
    //         scheduleList += '</div>';
    //         scheduleList += '</div>';
    //         scheduleList += '</div>';
    //     });
    //     $('.schedule-list').html(scheduleList);
    // }

    /*Lấy tên bến tàu*/
    function splitPointName(pointName) {
        var res = pointName.split(" ");
        var newName = '';
        for (i = 3; i < res.length; i++) {
            newName += res[i] + " ";
        }
        return newName;
    }

    /*Chọn chuyến đi*/
    $('body').on('click', '#bookingWaterTaxi .schedule-item', function () {
        var getInPoint = $(this).data('getinpoint');
        var getOffPoint = $(this).data('getoffpoint');
        var getInTime = $(this).data('getintime');
        var getOffTime = $(this).data('getofftime');
        var startTime = $(this).data('starttime');
        var tripStatus = $(this).data('tripstatus');
        var scheduleId = $(this).data('scheduleid');
        var ticketPrice = $(this).data('ticketprice');
        var openPrice = $(this).data('openprice');
        var tripId = $(this).data('tripid');
        var totalEmptyTicket = $(this).data('numberticket');
        var totalSeat = $(this).data('totalseat');
        var startDate = $(this).data('startdate');
        var maxGuestForOpenPrice = $(this).data('maxguestopen');

        if(startTime < Date.now() || tripStatus === 2) {
            $.alert({
                title: 'Thông báo!',
                type: 'orange',
                typeAnimated: true,
                content: 'Vé đã bán hết, vui lòng chọn chuyến khác hoặc chọn một ngày khởi hành khác',
            });
        }
        else if(numberTicket > totalEmptyTicket) {
            $.alert({
                title: 'Thông báo!',
                type: 'orange',
                typeAnimated: true,
                content: 'Số vé bán đặt nhiều hơn số vé hiện có',
            });
        } else {
            $('#bookingWaterTaxi .schedule-item').removeClass('selected-schedule');
            $(this).addClass('selected-schedule');

            var ticketHtml = buildTicketTaxi(numberTicket, ticketPrice, tripId, scheduleId, getInPoint, getOffPoint, getInTime, getOffTime, startDate, totalEmptyTicket, totalSeat, openPrice, maxGuestForOpenPrice);

            $('#bookingWaterTaxi .ticket-info-list').html(ticketHtml);
        }

        $('.phoneNumber').on('keypress keyup blur', function () {
            $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

    });
    
    function buildTicketTaxi(numberTicket, ticketPrice, tripId, scheduleId, getInPoint, getOffPoint, getInTime, getOffTime, startDate, totalEmptyTicket, totalSeat, openPrice, maxGuestForOpenPrice) {
        var ticketHtml = '';
        /*Thong tin khach tren tung ve*/
        ticketHtml = '<div id="ticketOnewayInfo">';
        if(totalEmptyTicket !==  totalSeat) {
            for (var i = 0; i < numberTicket; i++) {
                ticketHtml += '<div class="col-12 margin-ticket">';
                ticketHtml += '<div class="row ticket-info-item">';
                ticketHtml += '<div class="col-12 row no-padding-left no-margin-left-right margin-top10 margin-bottom10">';
                ticketHtml += '<label class="col-4">Họ tên:</label>';
                ticketHtml += '<div class="col-8 no-padding-right">';
                ticketHtml += '<input type="text" class="form-control fullname">';
                ticketHtml += '</div>';
                ticketHtml += '</div>';
                ticketHtml += '<div class="col-12 row no-padding-left no-margin-left-right margin-top10 margin-bottom10">';
                ticketHtml += '<label class="col-4">Số điện thoại:</label>';
                ticketHtml += '<div class="col-8 no-padding-right">';
                ticketHtml += '<input type="text" class="form-control phoneNumber">';
                ticketHtml += '</div>';
                ticketHtml += '</div>';
                ticketHtml += '<div class="col-12 col-centered margin-top10 margin-bottom10">';
                ticketHtml += '<input type="text" value="' + ticketPrice.format() + ' VNĐ" readonly class="form-control text-center ticketPrice">';
                ticketHtml += '</div>';
                ticketHtml += '<input type="hidden" class="price" value="' + ticketPrice + '">';
                ticketHtml += '</div>';
                ticketHtml += '</div>';
            }
        } else {
            /*Có vé trong nhóm mở cửa*/
            var numberTicketGroup = maxGuestForOpenPrice;
            if(numberTicket <= maxGuestForOpenPrice){
                numberTicketGroup = numberTicket;
            }

            var ticketPriceGroup = openPrice/numberTicketGroup;

            for (var i = 0; i < numberTicket; i++) {
                ticketHtml += '<div class="col-12 margin-ticket">';
                ticketHtml += '<div class="row ticket-info-item">';
                ticketHtml += '<div class="col-12 row no-padding-left no-margin-left-right margin-top10 margin-bottom10">';
                ticketHtml += '<label class="col-4">Họ tên:</label>';
                ticketHtml += '<div class="col-8 no-padding-right">';
                ticketHtml += '<input type="text" class="form-control fullname">';
                ticketHtml += '</div>';
                ticketHtml += '</div>';
                ticketHtml += '<div class="col-12 row no-padding-left no-margin-left-right margin-top10 margin-bottom10">';
                ticketHtml += '<label class="col-4">Số điện thoại:</label>';
                ticketHtml += '<div class="col-8 no-padding-right">';
                ticketHtml += '<input type="text" class="form-control phoneNumber">';
                ticketHtml += '</div>';
                ticketHtml += '</div>';

                if(i < numberTicketGroup) {
                    ticketHtml += '<div class="col-12 col-centered margin-top10 margin-bottom10">';
                    ticketHtml += '<input type="text" value="VÉ TRONG NHÓM VÉ MỞ CỬA" readonly class="form-control text-center ticketPrice">';
                    ticketHtml += '</div>';
                    ticketHtml += '<input type="hidden" class="price" value="' + ticketPriceGroup + '">';
                } else {
                    ticketHtml += '<div class="col-12 col-centered margin-top10 margin-bottom10">';
                    ticketHtml += '<input type="text" value="' + ticketPrice.format() + ' VNĐ" readonly class="form-control text-center ticketPrice">';
                    ticketHtml += '</div>';
                    ticketHtml += '<input type="hidden" class="price" value="' + ticketPrice + '">';
                }

                ticketHtml += '</div>';
                ticketHtml += '</div>';
            }

        }

        /*Thong tin chung*/
        ticketHtml += '<div class="col-12 margin-ticket">';
        ticketHtml += '<div class="row customer-info">';
        ticketHtml += '<div class="col-12 row no-margin-left-right margin-top10">';
        ticketHtml += '<label>Số lượng vé</label>';
        ticketHtml += '<input type="text" value="' + numberTicket + '" class="col-12 form-control text-center" readonly>';
        ticketHtml += '</div>';
        ticketHtml += '<div class="col-12 row no-margin-left-right margin-top10">';
        ticketHtml += '<label>Ghi chú</label>';
        ticketHtml += '<input type="text" class="col-12 form-control" placeholder="Ghi chú" id="note">';
        ticketHtml += '</div>';
        ticketHtml += '<div class="col-12 row no-margin-left-right margin-top10 margin-bottom10">';
        ticketHtml += '<label>Email nhận thông tin vé</label>';
        ticketHtml += '<input type="email" placeholder="Email nhận thông tin vé" class="col-12 form-control" id="email">';
        ticketHtml += '</div>';
        /*ticketHtml += '<div class="col-12 row no-margin-left-right margin-top10 margin-bottom10">';
            ticketHtml += '<label>Mã khuyến mại</label>';
            ticketHtml += '<input type="text" placeholder="Mã khuyến mại" class="col-12 form-control" id="promotion">';
        ticketHtml += '</div>';*/
        ticketHtml += '<input type="hidden" value="' + tripId + '" id="tripId">';
        ticketHtml += '<input type="hidden" value="' + scheduleId + '" id="scheduleId">';
        ticketHtml += '<input type="hidden" value="' + getInPoint + '" id="getInPointId">';
        ticketHtml += '<input type="hidden" value="' + getOffPoint + '" id="getOffPointId">';
        ticketHtml += '<input type="hidden" value="' + getInTime + '" id="getInTimePlan">';
        ticketHtml += '<input type="hidden" value="' + getOffTime + '" id="getOffTimePlan">';
        ticketHtml += '<input type="hidden" value="' + startDate + '" id="startDate">';
        ticketHtml += '</div>';
        ticketHtml += '</div>';

        ticketHtml += '</div>';

        return ticketHtml;
    }

    /*Tiếp tục thanh toán*/
    $('#bookingWaterTaxi .btnNext').click(function () {
        var selected = $('.schedule-list .selected-schedule').length;

        if(!selected) {
            $.alert({
                title: 'Thông báo!',
                type: 'orange',
                typeAnimated: true,
                content: 'Chưa chọn chuyến đi',
            });

            return false;
        }

        getTotalMoney();

        $('#bookingWaterTaxi .list-schedule').hide(300);
        $('#bookingWaterTaxi .ticket-info').show(300);
    });

    /*Tính tổng tiền*/
    function getTotalMoney() {
        prices = $("#bookingWaterTaxi .ticket-info-list .price").map(function() {
            return $(this).val();
        }).get();

        totalMoneyTicket = 0;
        $.each(prices, function (k, v) {
            totalMoneyTicket += parseInt(v);
        });

        totalMoney = totalMoneyTicket - promotionPrice;

        $('#bookingWaterTaxi .total-money').val(totalMoney.format() + ' VNĐ');
    }

    /*Back lại chọn chuyến*/
    $('.ticket-info .backScreen').click(function () {
        $('#bookingWaterTaxi .ticket-info').hide(300);
        $('#bookingWaterTaxi .booing-form').show(300);
        return false;
    });

    /*Thanh toán*/
    $('#bookingWaterTaxi .payment').click(function () {
        var listFullName = $("#bookingWaterTaxi #ticketOnewayInfo .fullname").map(function() {
            return $(this).val();
        }).get();

        var listPhone = $("#bookingWaterTaxi #ticketOnewayInfo .phoneNumber").map(function() {
            return $(this).val();
        }).get();

        /*Thong tin khach chuyen di*/
        var scheduleId = $("#bookingWaterTaxi  #scheduleId").val();
        var tripId = $("#bookingWaterTaxi  #tripId").val();
        var getInPointId = $("#bookingWaterTaxi #getInPointId").val();
        var getOffPointId = $("#bookingWaterTaxi  #getOffPointId").val();
        var getInTimePlan = $("#bookingWaterTaxi  #getInTimePlan").val();
        var getOffTimePlan = $("#bookingWaterTaxi  #getOffTimePlan").val();
        var note = $("#bookingWaterTaxi  #note").val();
        var startDate = $("#bookingWaterTaxi  #startDate").val();

        if(listFullName[0] === '') {
            $.alert({
                title: 'Thông báo!',
                type: 'orange',
                typeAnimated: true,
                content: 'Chưa nhập họ tên chuyến đi',
            });
            return false;
        }

        if(listPhone[0] === '') {
            $.alert({
                title: 'Thông báo!',
                type: 'orange',
                typeAnimated: true,
                content: 'Chưa nhập số điện thoại chuyến đi',
            });
            return false;
        }

        var listOptionData = '[';
        var listOption = {};
        for ( var i = 0 ; i < numberTicket ; i++ ){
            listOption['paymentTicketPrice'] = 0;
            if(i === (numberTicket -1)){
                listOptionData += JSON.stringify(listOption);
            } else {
                listOptionData += JSON.stringify(listOption) + ',';
            }
        }
        listOptionData += ']';
        dataListOption = {
            
            // "startDate": startDate,
            // "scheduleId": scheduleId,
            // "paymentTicketPrice": totalMoney,
            // "packageName": "web",
            // "tripId": tripId,
            // "timeZone": "7",
            // "originalTicketPrice": totalMoney,
            // "numberOfAdults": numberTicket,
            // "getOffPointId": getOffPointId,
            // "routeId": routeId,
            // "phoneNumber": listPhone[0],
            // "numberOfChildren": "0",
            // "note": note,
            // "email": "",
            // "getOffTimePlan": getOffTimePlan,
            // "listOption": JSON.parse(listOptionData),
            // "getInTimePlan": getInTimePlan,
            // "fullName": listFullName[0],
            // "paidMoney":"0",
            // "companyId": "TC03j1IanqGKIUS",
            // "getInPointId": getInPointId,
            // "agencyPrice": totalMoney,
            // "platform": 3


            "companyId": "TC03j1IanqGKIUS",
             "note": "",
            "paymentTicketPrice": $("#bookingWaterTaxi #TicketPrice").val(), 
            "numberOfAdults": numberTicket, 
            "platform": 3, 
            "phoneNumber": $("#bookingWaterTaxi .phoneNumber").val(), 
            "email": "", 
            "date": 1534315860838.635, 
            "getOffPointId": startPoint.val(), 
            "routeId": $("#bookingWaterTaxi #routeId").val(), 
            "fullName": $("#bookingWaterTaxi .fullname").val(), 
            "seatMapId": "SM04h1UvPKqsDPU", 
            "packageName": "vn.anvui.saigonwaterbus", 
            "timeZone": 7, 
            "listOption": JSON.parse(listOptionData), 
            "getInPointId": endPoint.val(), 
            "numberOfChildren": 0, 
            "agencyPrice": $("#bookingWaterTaxi #TicketPrice").val()



              //   "companyId": "TC03j1IanqGKIUS",
              // "note": "",
              // "paymentTicketPrice": 2520000, 
              // "numberOfAdults": 1, "platform": 3, 
              // "phoneNumber": "0944318452", 
              // "email": "", 
              // "date": , 
              // "getOffPointId": "P05R202hm3Ie7M", 
              // "routeId": "R05R1hkF5SCmQC", 
              // "fullName": "ANVUI TEST", 
              // "seatMapId": "SM04h1UvPKqsDPU", 
              // "packageName": "vn.anvui.saigonwaterbus", 
              // "timeZone": 7, 
              // "listOption": JSON.parse(listOptionData), 
              // "getInPointId": "P05R202hm3Ie7M", 
              // "numberOfChildren": 0,
              // "agencyPrice": 2520000
        };

        console.log(dataListOption);
        payment(dataListOption);
    });

    function payment(dataPayment) {
        $.ajax({
            type: "POST",
            url: "https://www.anvui.vn/createnoseatidtaxi",
            data: dataPayment,
            success: function (result) {

                if(result.code === 200) {
                    $.dialog({
                        title: 'Thông báo!',
                        content: 'Hệ thống đang chuyển sang cổng thanh toán, vui lòng đợi trong giây lát...',
                        onClose: function (e) {
                            e.preventDefault();
                        }
                    });
                    setTimeout(function () {
                        epayPayment(result.results.ticketId, dataPayment.phoneNumber);
                    }, 6000);

                } else {
                    $.alert({
                        title: 'Thông báo!',
                        type: 'red',
                        typeAnimated: true,
                        content: 'Đã có lỗi xảy ra, vui lòng thử lại',
                    });
                }
            }
        });
    }

    function epayPayment(ticketId, phoneNumber) {
        $.ajax({
            type: 'POST',
            url: 'https://dobody-anvui.appspot.com/ePay/',
            dataType: 'json',
            data: JSON.stringify({
                ticketId: ticketId,
                paymentType: 1,
                packageName: 'web',
                phoneNumber: phoneNumber,
            }),
            success: function (data) {
                url = data.results.redirect;
                window.location.href = url;
            }
        });
    }

});