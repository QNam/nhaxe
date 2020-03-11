var depatureDate;
var startPoint;
var startName;
var endPoint;
var endName;
var addPri = {};
var ghenguoilondi = [];
var ghetreemdi = [];
var companyId;
var isRound = 0;

var promotionMoney = 0;
var promotionPercent = 0;
var isPromotion = false;

var timeBookHolder = ''


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

var getListCompany = getListCompany();
var monthNames = [
  "January", "February", "March", "April", "May", "June", "July",
  "August", "September", "October", "November", "December"
];
var dayOfWeekNames = [
  "Sunday", "Monday", "Tuesday",
  "Wednesday", "Thursday", "Friday", "Saturday"
];


$('#depatureDate').val($.format.date(new Date() ,"dd/MM/yyyy"));
$('#depatureDate').datepicker({
    dateFormat: 'dd/mm/yy'
});


var dn = new Date();
var nn = dn.getTime();

console.log(nn);

code = getParameterByName('code');
// var decodedString = atob(code);
// console.log(decodedString);
$('.loading').show();

var data = [{
        "text": "Tỉnh",
        "children": []
    },
    {
        "text": "Quận - Huyện",
        "children": []
    }
];


console.log(data);

//Định dạng tiền
Number.prototype.format = function (e, t) {
    var n = "\\d(?=(\\d{" + (t || 3) + "})+" + (e > 0 ? "\\." : "$") + ")";
    return this.toFixed(Math.max(0, ~~e)).replace(new RegExp(n, "g"), "$&,")
};

var dateNow = formatDate(new Date(), "d/M/yyyy");



$.ajax({
    type: 'POST',
    url: 'https://dobody-anvui.appspot.com/point/get_province_district',
    dataType: "json",
    success: function(res) {

        provinceDistrict = res.results.result;
        $.each(provinceDistrict, function(index, val) {
            if(val.id == 'P24' || val.id == 'P06' || val.id == 'P27' || val.id == 'P01' || val.id == 'P79' || val.id == 'P91' || val.id == 'P20' || val.id == 'P37' || val.id == 'P22' || val.id == 'P08' || val.id == 'P68' || val.id == 'P14' || val.id == 'P77' || val.id == 'P75' || val.id == 'P56' || val.id == 'P60' )
            {
                data[0]['children'].push({ "id": val.id, "text": val.provinceName });
                $.each(val.listDistrict, function(key, item) {
                    data[1]['children'].push({ "id": item.districtId, "text": val.provinceName + ' - ' + item.districtName });
                })
            }

        });


        $("#startPoint").select2({

            data: data
        });
        $("#endPoint").select2({

            data: data
        })

        console.log(data);
    }
});

$.ajax({
    type: "GET",
    url: "https://www.anvui.vn/nhaxeApi",
    success: function(result) {

        console.log(result);
        var html = '';
        $.each(result, function (key, item) {
            html += '<div class="col-md-4">',
            html += '<div class="to-ho-hotel-con">',
            html += '<div class="to-ho-hotel-con-1">',
            html += '<div class="hot-page2-hli-3"> <img src="https://rn53themes.net/themes/demo/travelz/images/hci1.png" alt=""> </div>',
            html += '<img src="https://cdn.anvui.vn/'+item.avatar+'" alt=""> </div>',
            html += '<div class="to-ho-hotel-con-23">',
            html += '<div class="to-ho-hotel-con-2"> <a href="'+item.linkWeb+'"><h4>'+item.w_name+'</h4></a> </div>',
            html += '<div class="to-ho-hotel-con-3">',
            html += '<ul>',
            html += '<li><div class="dir-rat-star ho-hot-rat-star"> Đánh giá: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </div></li>',
            html += '<li><span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri"></span> </li>',
            html += '</ul>',
            html += '</div>',
            html += '</div>',
            html += '</div>',
            html += '</div>'
        });
        $(".to-ho-hotel").append(html);
    }
});
function getListCompany() {
    // strUrl is whatever URL you need to call
    var getListCompany = [];

    $.ajax({
    type: "GET",
    url: "https://www.anvui.vn/getListCompany",
    success: function(result) {

            console.log(result);
            var html = '';
            $.each(result, function (key, item) {

                getListCompany.push({ "companyId": item.companyId, "domain": item.domain });

            });
        }
    });
    return getListCompany;
}

$('#search-btn').on('click', function() {
    var url = 'https://vetet.vn/tim-chuyen.html';

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
    if (code) {
        url += '?code=' + code;
    }

    if(startName){
        url += '&startName=' + startName;
    }

    if(endName){
        url += '&endName=' + endName;
    }

    if (startPoint) {
        url += '&startPoint=' + startPoint;
    }


    if (endPoint) {
        url += '&endPoint=' + endPoint;
    }

    location = url;
});
function getSchedule(startPoint, endPoint, date,companyId) {
    console.log(date);
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
        },
        success: function(result) {
            var html = '';


            scheduleOneway = result;
            console.log(1);
            $('.loading').hide();

            

            var typcars = [];
            var typcarsid = [];

            var i = 0;

            $.each(result, function (key, item) {
                $.each(getListCompany, function (id, val) {
                    if(item.getInTime >= nn && i < 4){
                        if(item.companyId === val.companyId & item.companyId !== 'TC01gWSmr8A9Qx'){

                            var typeclass = 'alltypecars '+item.seatMap.vehicleTypeId;

                            var additionPrice = item.additionPrice||{};
                            

                            if(item.additionPrice){
                                console.log("doanhdz");

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

                            html += '<div class="FNbK_ '+typeclass+' scheduleId-'+item.scheduleId+'">',
                            html += '<div class="_2JOu5">',
                            html += '<div class="_1ok2M">',
                            html += '<div class="GNGYr _6xm0X">',
                            html += '<div class="_2aVy6">',
                            html += '<div class="_1T2o4"><i class="_2tl12 _1m54i _1L-Qv" style="font-size: 50px; color: rgb(74, 74, 74);"></i>',
                            html += '<div class="_1zvBA _2JNAS">bus</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_1rURO"><h3 class="_3Kf1G">Chuyến: <span class="_1Z0gg">: <span ignore="">'+item.routeName+'</span></span></h3>',
                            html += '<div class="Jc7r1"><div class="_1mNX0"><div class="kGEYb"><div class="yotpo bottomLine yotpo-small" data-appkey="jzXKC8ANWoZBhvFbSiFfke6IaZCGm8U1C23xBtJz" data-product-id="hanoitohalongluxury" data-name="Hanoi to Halong" data-yotpo-element-id="710"> <span class="yotpo-display-wrapper" style="visibility: hidden;">  <div class="standalone-bottomline"> <div class="yotpo-bottomline pull-left  star-clickable">  <span class="yotpo-stars"> <span class="yotpo-icon yotpo-icon-star rating-star pull-left"></span><span class="yotpo-icon yotpo-icon-star rating-star pull-left"></span><span class="yotpo-icon yotpo-icon-star rating-star pull-left"></span><span class="yotpo-icon yotpo-icon-star rating-star pull-left"></span><span class="yotpo-icon yotpo-icon-empty-star rating-star pull-left"></span> </span>  <a class="text-m">5 Reviews</a>   <div class="yotpo-clr"></div> </div> <div class="yotpo-clr"></div> </div>   <div class="yotpo-clr"></div> </span></div></div></div><div><span class="_2L8IL"><div class="_3DBMx"><i class="_3y9qs _1m54i _1z8_m" style="font-size: 20px; color: rgb(25, 106, 218);"></i><span ignore=""></span>'+item.seatMap.vehicleTypeName+'</div></span></div></div>',
                            html += '<div class="_2a6cS">',
                            html += '<div class="f2eqc"></div>',
                            html += '<div class="_2Wy__">',
                            html += '<div class="hGeTA _2nPax _2nPax">',
                            html += '<ul class="_2dRo7">',
                            html += '<li class="_3EY26"><i class="_3qCLN sHK3s _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">Air Conditioning</span></li>',
                            html += '<li class="_3EY26"><i class="yHzQm _34Y_2 _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">Reclining Seats</span></li>',
                            html += '<li class="_3EY26"><i class="_3ne46 _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">Wifi</span></li>',
                            html += '<li class="_3EY26"><i class="_3ceFZ _1g4zn _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">English Speaking Staff</span></li>',                              
                            html += '<li class="_3EY26"><i class="_2MtAg HBUzp _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">Charger Sockets</span></li>',
                            html += '<li class="_3EY26"><i class="_31ExI _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">TV</span></li>',
                            html += '</ul>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_1f1Qn">15 people booked</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="IRI8x"></div>',
                            html += '<div class="_13Bsw">',
                            html += '<div class="_2eZDg">',
                            html += '<div class="_2LpPE">',
                            html += '<div class="_2XIuq">',
                            html += '<div class="_3-lNO"><div class="_1XzR2">Nhà xe</div><div><div class="_12wKw" ignore=""><span class="_3V4Xu"><i class="fa fa-building" aria-hidden="true"></i></span>'+item.companyName+'</div></div></div>',
                            html += '<div class="_3-lNO">',
                            html += '<div class="_1XzR2">Điểm đi</div>',
                            html += '<div><div class="_12wKw" ignore=""><span class="_3V4Xu"><i class="_2G0Ij _1m54i undefined" style="font-size: 20px; color: rgb(25, 106, 218);"></i></span>'+item.getInPointName+'</div></div>',
                            html += '</div>',
                            html += '<svg class="mdi-icon _2kTnL" width="13" height="13" fill="#196ADA" viewBox="0 0 24 24"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path></svg>',
                            html += '<div class="_1yU0A">',
                            html += '<div class="_1XzR2">Điểm đến</div>',
                            html += '<div>',
                            html += '<div class="_12wKw"><span class="_3V4Xu"><i class="_2G0Ij _1m54i undefined" style="font-size: 20px; color: rgb(25, 106, 218);"></i></span>'+item.getOffPointName+'</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_36KYq">',
                            html += '<div class="xGT3g">',
                            html += '<div class="g8_01" ignore=""><span class="_23a11"><i class="_2qYL5 _1m54i undefined" style="font-size: 16px;"></i></span>'+item.startTime+'</div>',
                            html += '<div class="g8_01"><span class="_23a11"><i class="_2qYL5 _1m54i undefined" style="font-size: 16px;"></i></span>',
                            html += '<div><span class="_2L8IL"><span>'+getFormattedDate(item.getOffTime)+'</span></span></div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_25EwM">',
                            html += '<div class="_3GAhJ">',
                            html += '<div class="_1_NoD">Giá vé</div>',
                            html += '<div class="_1RCtb"><span class="FRLjC" ignore="">'+ item.ticketPrice1 +' VNĐ</span><span class="_3OiTD">/<svg class="mdi-icon " width="15" height="15" fill="#9c9c9c" viewBox="0 0 24 24"><path d="M12,4C14.21,4 16,5.79 16,8C16,10.21 14.21,12 12,12C9.79,12 8,10.21 8,8C8,5.79 9.79,4 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"></path></svg></span></div>',
                            html += '<div class="_2wMiI">Click ngay</div>',
                            html += '</div>',
                            html += '<div>',
                            // html += '<div class=""><a class="ladda-button _376--" data-style="slide-left" href="http://'+val.domain+'/dat-ve?depatureDate='+date+'&returnDate=&startId='+startPoint+'&routeIdd='+item.routeId+'&endId='+endPoint+'"><span class="ladda-label"><span class="_1z6H8">Đặt vé</span><span class="_1jVIG">Đặt vé</span></span><span class="ladda-spinner"></span></a></div>',
                            html += '<div class=""><button class="ladda-button _376--" data-style="slide-left" onclick="selectTripOneWay(this)" ' +
                            'data-ratio="' + item.childrenTicketRatio + '" ' +
                            'data-getinpoint="' + item.getInPointId + '"' +
                            'data-getoffpoint="' + item.getOffPointId + '"' +
                            'data-startdate="' + item.startDate + '" ' +
                            'data-intime="' + item.getInTime + '" ' +
                            'data-companyid="' +item.companyId+'"'+
                            'data-starttime="' + item.startTime + '" ' +
                            'data-offtime="' + item.getOffTime + '" ' +
                            'data-trip="' + item.tripId + '" ' +
                            'data-schedule="' + item.scheduleId + '" ' +
                            'data-tripstatus="' + item.tripStatus + '" ' +
                            'data-route="' + item.routeId + '" ' +
                            'data-inpointname ="' +item.getInPointName+ '" '+
                            'data-offpointname ="' +item.getOffPointName+ '" '+
                            'data-price="' + item.ticketPrice + '"> <span class="ladda-label"> <span style="display:none" class="additonPriceInfo">'+JSON.stringify(additionPrice)+'</span>    <span class="_1z6H8">Đặt chỗ</span><span class="_1jVIG">Đặt chỗ</span></span><span class="ladda-spinner"></span></button></div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_1j6tr"><div class="_3dMap">Khuyến mại</div></div>',
                            html += '</div>'

                            i++;
                            console.log(i);
                
                        }
                    }

                })
                
            });
            $("#listSchedule").append(html);
        }
    });
}


function getSchedule2(startPoint, endPoint, date, isBack) {
    console.log(date);
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
            page: 0,
            count: 1000,
        },
        success: function(result) {
            var html = '';

            scheduleOneway = result;

            $('.loading').hide();

            if(result.toString() === '') {
               $.alert({
                    title: 'Thông báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Không có chuyến nào!'
                });
                return false;
            }

            var typcars = [];
            var typcarsid = [];

            $.each(result, function (key, item) {
                $.each(getListCompany, function (id, val) {
                    if(item.companyId === val.companyId & item.companyId !== 'TC01gWSmr8A9Qx'){

                        if( item.getInTime >= nn){
                            var typeclass = 'alltypecars '+item.seatMap.vehicleTypeId;

                            var additionPrice = item.additionPrice||{};
                            

                            if(item.additionPrice){
                                console.log("doanhdz");

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

                            html += '<div class="FNbK_ '+typeclass+' scheduleId-'+item.scheduleId+'">',
                            html += '<div class="_2JOu5">',
                            html += '<div class="_1ok2M">',
                            html += '<div class="GNGYr _6xm0X">',
                            html += '<div class="_2aVy6">',
                            html += '<div class="_1T2o4"><i class="_2tl12 _1m54i _1L-Qv" style="font-size: 50px; color: rgb(74, 74, 74);"></i>',
                            html += '<div class="_1zvBA _2JNAS">bus</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_1rURO"><h3 class="_3Kf1G">Chuyến: <span class="_1Z0gg">: <span ignore="">'+item.routeName+'</span></span></h3>',
                            html += '<div class="Jc7r1"><div class="_1mNX0"><div class="kGEYb"><div class="yotpo bottomLine yotpo-small" data-appkey="jzXKC8ANWoZBhvFbSiFfke6IaZCGm8U1C23xBtJz" data-product-id="hanoitohalongluxury" data-name="Hanoi to Halong" data-yotpo-element-id="710"> <span class="yotpo-display-wrapper" style="visibility: hidden;">  <div class="standalone-bottomline"> <div class="yotpo-bottomline pull-left  star-clickable">  <span class="yotpo-stars"> <span class="yotpo-icon yotpo-icon-star rating-star pull-left"></span><span class="yotpo-icon yotpo-icon-star rating-star pull-left"></span><span class="yotpo-icon yotpo-icon-star rating-star pull-left"></span><span class="yotpo-icon yotpo-icon-star rating-star pull-left"></span><span class="yotpo-icon yotpo-icon-empty-star rating-star pull-left"></span> </span>  <a class="text-m">5 Reviews</a>   <div class="yotpo-clr"></div> </div> <div class="yotpo-clr"></div> </div>   <div class="yotpo-clr"></div> </span></div></div></div><div><span class="_2L8IL"><div class="_3DBMx"><i class="_3y9qs _1m54i _1z8_m" style="font-size: 20px; color: rgb(25, 106, 218);"></i><span ignore=""></span>'+item.seatMap.vehicleTypeName+'</div></span></div></div>',
                            html += '<div class="_2a6cS">',
                            html += '<div class="f2eqc"></div>',
                            html += '<div class="_2Wy__">',
                            html += '<div class="hGeTA _2nPax _2nPax">',
                            html += '<ul class="_2dRo7">',
                            html += '<li class="_3EY26"><i class="_3qCLN sHK3s _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">Air Conditioning</span></li>',
                            html += '<li class="_3EY26"><i class="yHzQm _34Y_2 _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">Reclining Seats</span></li>',
                            html += '<li class="_3EY26"><i class="_3ne46 _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">Wifi</span></li>',
                            html += '<li class="_3EY26"><i class="_3ceFZ _1g4zn _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">English Speaking Staff</span></li>',                              
                            html += '<li class="_3EY26"><i class="_2MtAg HBUzp _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">Charger Sockets</span></li>',
                            html += '<li class="_3EY26"><i class="_31ExI _1m54i undefined" style="font-size: 27px; color: rgb(113, 112, 112);"></i><span class="_2f-2q">TV</span></li>',
                            html += '</ul>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_1f1Qn">15 people booked</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="IRI8x"></div>',
                            html += '<div class="_13Bsw">',
                            html += '<div class="_2eZDg">',
                            html += '<div class="_2LpPE">',
                            html += '<div class="_2XIuq">',
                            html += '<div class="_3-lNO"><div class="_1XzR2">Nhà xe</div><div><div class="_12wKw" ignore=""><span class="_3V4Xu"><i class="fa fa-building" aria-hidden="true"></i></span>'+item.companyName+'</div></div></div>',
                            html += '<div class="_3-lNO">',
                            html += '<div class="_1XzR2">Điểm đi</div>',
                            html += '<div><div class="_12wKw" ignore=""><span class="_3V4Xu"><i class="_2G0Ij _1m54i undefined" style="font-size: 20px; color: rgb(25, 106, 218);"></i></span>'+item.getInPointName+'</div></div>',
                            html += '</div>',
                            html += '<svg class="mdi-icon _2kTnL" width="13" height="13" fill="#196ADA" viewBox="0 0 24 24"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path></svg>',
                            html += '<div class="_1yU0A">',
                            html += '<div class="_1XzR2">Điểm đến</div>',
                            html += '<div>',
                            html += '<div class="_12wKw"><span class="_3V4Xu"><i class="_2G0Ij _1m54i undefined" style="font-size: 20px; color: rgb(25, 106, 218);"></i></span>'+item.getOffPointName+'</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_36KYq">',
                            html += '<div class="xGT3g">',
                            html += '<div class="g8_01" ignore=""><span class="_23a11"><i class="_2qYL5 _1m54i undefined" style="font-size: 16px;"></i></span>'+item.startTime+'</div>',
                            html += '<div class="g8_01"><span class="_23a11"><i class="_2qYL5 _1m54i undefined" style="font-size: 16px;"></i></span>',
                            html += '<div><span class="_2L8IL"><span>'+getFormattedDate(item.getOffTime)+'</span></span></div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_25EwM">',
                            html += '<div class="_3GAhJ">',
                            html += '<div class="_1_NoD">Giá vé</div>',
                            html += '<div class="_1RCtb"><span class="FRLjC" ignore="">'+ item.ticketPrice1 +' VNĐ</span><span class="_3OiTD">/<svg class="mdi-icon " width="15" height="15" fill="#9c9c9c" viewBox="0 0 24 24"><path d="M12,4C14.21,4 16,5.79 16,8C16,10.21 14.21,12 12,12C9.79,12 8,10.21 8,8C8,5.79 9.79,4 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"></path></svg></span></div>',
                            html += '<div class="_2wMiI">Click ngay</div>',
                            html += '</div>',
                            html += '<div>',
                            // html += '<div class=""><a class="ladda-button _376--" data-style="slide-left" href="http://'+val.domain+'/dat-ve?depatureDate='+date+'&returnDate=&startId='+startPoint+'&routeIdd='+item.routeId+'&endId='+endPoint+'"><span class="ladda-label"><span class="_1z6H8">Đặt vé</span><span class="_1jVIG">Đặt vé</span></span><span class="ladda-spinner"></span></a></div>',
                            html += '<div class=""><button class="ladda-button _376--" data-style="slide-left" onclick="selectTripOneWay(this)" ' +
                            'data-ratio="' + item.childrenTicketRatio + '" ' +
                            'data-getinpoint="' + item.getInPointId + '"' +
                            'data-getoffpoint="' + item.getOffPointId + '"' +
                            'data-startdate="' + item.startDate + '" ' +
                            'data-intime="' + item.getInTime + '" ' +
                            'data-companyid="' +item.companyId+'"'+
                            'data-starttime="' + item.startTime + '" ' +
                            'data-offtime="' + item.getOffTime + '" ' +
                            'data-trip="' + item.tripId + '" ' +
                            'data-schedule="' + item.scheduleId + '" ' +
                            'data-tripstatus="' + item.tripStatus + '" ' +
                            'data-route="' + item.routeId + '" ' +
                            'data-inpointname ="' +item.getInPointName+ '" '+
                            'data-offpointname ="' +item.getOffPointName+ '" '+
                            'data-price="' + item.ticketPrice + '"> <span class="ladda-label"> <span style="display:none" class="additonPriceInfo">'+JSON.stringify(additionPrice)+'</span>    <span class="_1z6H8">Đặt chỗ</span><span class="_1jVIG">Đặt chỗ</span></span><span class="ladda-spinner"></span></button></div>',
                            html += '</div>',
                            html += '</div>',
                            html += '<div class="_1j6tr"><div class="_3dMap">Khuyến mại</div></div>',
                            html += '</div>'
                        }
                    }

                })
                
            });
            $("#listSchedule2").append(html);
        }
    });
}

//Hàm chọn trip và lấy thông tin trip chieu di
function selectTripOneWay(trip) {

    seatListOneway = null;
    totalSeat = 0;


    adultMoney = 0;
    babyMoney = 0;
    
    addPri = JSON.parse($(trip).find('.additonPriceInfo').text());
    var appendDatve = '<div class="row">';
        appendDatve += '<div id="select-seat-oneway" >';
        appendDatve +='<div class="col-md-8" style="padding:0px;">';
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
        appendDatve +='<div class="row form-customer">';
        appendDatve +='<div class="col-md-12"><label for="fullname" style="display: none;">Họ và tên (<span class="required">*</span>)</label><input type="text" placeholder="Họ và tên" class="form-control" name="fullname" id="fullname" autofocus required></div>';
        appendDatve +='<div class="col-md-12"><label for="phoneNumber" style="display: none;">Số điện thoại (<span class="required">*</span>)</label><input type="text" placeholder="Số điện thoại" class="form-control" name="phoneNumber" id="phoneNumber" required></div>';
        appendDatve +='<div class="col-md-12"><label for="phoneNumber" style="display: none;">Email</label><input type="email" placeholder="Email" class="form-control" name="email" id="email"></div>';
        appendDatve +='<div class="col-md-12"><label for="phoneNumber" style="display: none;">Ghi chú</label><textarea placeholder="Các yêu cầu đặc biệt không thể được đảm bảo nhưng nhà xe sẽ cố gắng hết sức để đáp ứng yêu cầu của bạn" name="note" class="form-control" id="note" rows="3"></textarea></div>';
        appendDatve +='<div class="col-md-12"><input autocomplete="off" class="col-md-5 form-control" id="promotionCode" style="width: auto;" type="text" placeholder="Mã khuyến mại"><button type="button" class="btn btn-info col-md-3" id="checkPromotion">Kiểm tra</button></div>';
        appendDatve +='</div>';

        appendDatve +='<div class="detail-customer-info">';
        appendDatve +='<label class="container-checkbox" for="transshipment">Đón tận nơi - Trả tận nơi';
        appendDatve +='<input type="checkbox" id="transshipment">';
        appendDatve +='<span class="checkmark"></span>';
        appendDatve +='</label>';
        appendDatve +='<div class="content-boxd" style="display:none;">';
        appendDatve +='<ul class="nav nav-tabs">';
        appendDatve +='<li class="active"><a data-toggle="tab" href="#fromstart" aria-expanded="true">Điểm đi</a></li>';
        appendDatve +='<li class=""><a data-toggle="tab" href="#toend" aria-expanded="false">Điểm đến</a></li>';
        appendDatve +='</ul>';
        appendDatve +='<div class="tab-content">';
        appendDatve +='<div id="fromstart" class="tab-pane fade active in">';
        appendDatve +='<div class="transshipmentOneway">';
        appendDatve +='<div class="">';
        appendDatve +='<label for="transshipmentInPointOneway">Chọn điểm đón</label>';
        appendDatve +='<select name="transshipmentInPointOneway" class="form-control transshipment" disabled  id="transshipmentInPointOneway">';
        appendDatve +='<option data-address="" data-lat="" data-long="" data-price="0" value="">Chọn điểm đón</option>';
        appendDatve +='</select>';
        appendDatve +='</div>';
        appendDatve +='</div>';
        appendDatve +='</div>';
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
        appendDatve +='<div id="ghedi">';
        appendDatve +='</div>';
        appendDatve +='<div class="col-md-12">Giá người lớn: <span class="price" id="adultMoneyOneway">0 VND</span> <br></div>';
        appendDatve +='<div class="col-md-12">Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br></div>';
        appendDatve +='</div>';
        appendDatve +='<div class="subtotal">Tổng tiền lượt đi: <strong id="totalMoneyOneway">0 VND</strong></div>';
        appendDatve +='<div class="col-md-12">Phí trung chuyển: <span class="price" id="transshipmentPriceOneway">0 VND</span> <br></div>';
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
        appendDatve +='<div class="promotion-div row"><div class="col-md-12">Giảm giá: <span class="price" id="promotionPrice"></span></div></div>';
        appendDatve +='</div>';
        appendDatve +='<div >';
        appendDatve +='<h4>TỔNG TIỀN</h4>';
        appendDatve +='<div class="promotion-div row"><div class="col-md-12"><span class="price" id="totalMoney"></span></div></div>';
        appendDatve +='</div>';
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
        appendDatve +='<label class="radio">Thanh toán bằng thẻ nội địa<input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="1"><span class="checkround"></span></label>';           
        appendDatve +='<!--<label class="radio">Thanh toán bằng thẻ quốc tế--><!--<input type="radio" class="paymenttype" name="paymenttype" value="2">--><!--<span class="checkround"></span>--><!--</label>-->';           
        appendDatve +='<label class="radio">Thanh toán tại quầy<input type="radio" class="paymenttype" name="paymenttype" value="5"><span class="checkround"></span><p>Nếu không thanh toán sau '+ timeBookHolder +'p sẽ bị hủy vé </p></label>';           
        appendDatve +='<label class="radio" id="radiochuyenkhoan" style="display: none">Chuyển khoản <input type="radio" class="paymenttype" name="paymenttype" value="6"><span class="checkround"></span></label>';           
        appendDatve +='</div>';           
        appendDatve +='<center><button type="button" id="hoanthanhbtn" class="btn" onclick="hoanthanhbtndatve(this)" >Xác nhận đặt vé </button><button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">Thông tin chuyển khoản</button></center>';           
        appendDatve +='</div>';           
        appendDatve +='</div>';           
        appendDatve +='</div>';           
        appendDatve +='</div>'; 
        appendDatve +='</div>';   
        appendDatve +='</div>';   
    
    $('.FNbK_').removeClass('trip-active');
    $(".FNbK_ #select-seat-oneway").remove();
    $(this).parent(".alltypecars").addClass('trip-active');

    tripIdOneway = $(trip).data('trip');
    scheduleIdOneway = $(trip).data('schedule');
    intimeOneway = $(trip).data('intime');
    offtimeOneway = $(trip).data('offtime');
    inPointOneway = $(trip).data('getinpoint');
    offPointOneway = $(trip).data('getoffpoint');
    ticketPriceOneway = $(trip).data('price');
    companyId = $(trip).data('companyid');

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
    companyId = $(trip).data('companyid');
    $('.intime').html(getFormattedDate(intimeOneway, 'time'));

    var Now = new Date();
    var timeNow =  $.format.date(Now.getTime(), 'HH:mm, dd/MM/yyyy');


    console.log(startTime);
    console.log(timeNow);

    

    

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
        $(".scheduleId-"+scheduleID).append(appendDatve);
        
        
        //chọn trip
        $.getJSON("https://interbuslines.com/dat-ve?tripId=" + tripIdOneway + '&scheduleId=' + scheduleIdOneway, function (data) {

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
                            var id1 = removeUnicode(id);

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
            $('#seatMapOneWay').html(html);

        });
        

        scheduleSelect = $.grep(scheduleOneway, function (v, k) {
        return v.scheduleId === scheduleIdOneway;
        });

        console.log(scheduleSelect);

        if(scheduleSelect != '' ){
            transshipmentInPointOneway = scheduleSelect[0].transshipmentInPoint;
            transshipmentOffPointOneway = scheduleSelect[0].transshipmentOffPoint;
        }
        


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

function chonghe(seat) {
    console.log(seat);
    id1 = removeUnicode(seat);
    var id = seat.replace(',', '_');;

    console.log(id1);
    var isBaby = false;
    seatVal = $.grep(seatInfoOneway,function(val, key){
        return val.seatId == seat;
    })[0];

    //Neu ghe trong thi chuyen sang ghe da chon
    if($('#chonghe_' + id1).hasClass('ghetrong')){
        $('#chonghe_' + id1).removeClass('ghetrong');
        $('#chonghe_' + id1).addClass('ghedachon');
        ghenguoilondi.push(id);
    } else

    //Neu la ghe da chon thi chuyen sang ghe tre em
    if($('#chonghe_' + id1).hasClass('ghedachon')) {
        $('#chonghe_' + id1).removeClass('ghedachon');
        $('#chonghe_' + id1).addClass('ghetreem');
        removeSeatInList(seat, ghenguoilondi);
        ghetreemdi.push(id);
        isBaby = true;
    } else
    //Neu la ghe tre em thi xoa ghe, thanh ghe trong
    if($('#chonghe_' + id1).hasClass('ghetreem')) {
        $('#chonghe_' + id1).removeClass('ghetreem');
        $('#chonghe_' + id1).addClass('ghetrong');
        removeSeatInList(seat, ghetreemdi);
    }

    console.log(seatVal);

    xacnhan(seatVal, isBaby, false);
}

function xacnhan(seat, isBaby, isBack) {

    //Đoạn làm chiều đi
    if(!isBack) {
        var seatListOneway = ghenguoilondi.concat(ghetreemdi);

        $('#ghedi').html(seatListOneway.toString());


        console.log(ticketPriceOneway);

        if(isBaby) {
            if(ghetreemdi.length > checkBabyOnewayLength) {
                
                adultMoney -= ticketPriceOneway + seat.extraPrice;
                babyMoney += ticketPriceOneway * ticketRatioOneway + seat.extraPrice;

            } else {

                

                babyMoney -= ticketPriceOneway * ticketRatioOneway + seat.extraPrice;
                adultMoney += ticketPriceOneway + seat.extraPrice;
            }

        } else {
            if(ghenguoilondi.length > checkAdultOnewayLength) {
                
                adultMoney += ticketPriceOneway + seat.extraPrice;
            } else {
                if(checkBabyOnewayLength > 0) {
                    
                    babyMoney -= ticketPriceOneway * ticketRatioOneway + seat.extraPrice;
                } else {
                    adultMoney -= ticketPriceOneway + seat.extraPrice;
                }

            }
            

        }


        if(seatListOneway.length < 1) {
            trashipmentPriceOneway += trashipmentPriceInPointOneway;
            trashipmentPriceOneway += trashipmentPriceOffPointOneway;
        } else {
            trashipmentPriceOneway = 0;
            trashipmentPriceOneway += (trashipmentPriceInPointOneway * seatListOneway.length);
            trashipmentPriceOneway += (trashipmentPriceOffPointOneway * seatListOneway.length);
        }
       

        checkBabyOnewayLength = ghetreemdi.length;
        checkAdultOnewayLength = ghenguoilondi.length;

        totalMoneyOneway = babyMoney + adultMoney;

        

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
    }

    //Tổng tiền 1 chiều
    totalMoney = totalMoneyOneway;

    console.log(totalMoney);
    if(promotionMoney > 0) {
        $('#totalMoney').text((totalMoney - promotionMoney).format()+' VND');
    } else if(promotionPercent > 0) {
        $('#totalMoney').text((totalMoney - totalMoney*promotionPercent).format()+' VND');
    } else {
        $('#totalMoney').text(totalMoney.format()+' VND');
    }
}


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
                        'companyId': companyId,
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
                        'pickUpAddress': $('#transshipmentInPointOneway').find(':selected').data('address'),
                        "needPickUpHome":"true",
                        'dropOffAddress': $('#transshipmentOffPointOneway').find(':selected').data('address'),
                        "getOffTimePlan":offtimeOneway,


                        'inTransshipmentPrice': (trashipmentPriceInPointOneway * seatOneway.length),
                        'offTransshipmentPrice': (trashipmentPriceOffPointOneway * seatOneway.length),

                        'inTransshipmentPointId':$('#transshipmentInPointOneway').val(),
                        'offTransshipmentPointId':$('#transshipmentOffPointOneway').val(),
                                  
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
                    url: 'https://www.anvui.vn/dat-ve?sub=ordervetet',
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

                                $.alert({
                                    title: 'Thông báo!',
                                    content: 'Hệ thống sẽ chuyển bạn đến trang thanh toán',
                                    
                                });

                                setTimeout(function () {
                                    $.ajax({
                                        type: 'POST',
                                        url: 'https://dobody-anvui.appspot.com/ePay/',
                                        dataType: 'json',
                                        data: JSON.stringify({
                                            ticketId: data.results.ticketId,
                                            paymentType: 1,
                                            packageName: 'web',
                                            phoneNumber: phoneNumber,
                                            companyId: companyId
                                        }),
                                        success: function (data) {
                                            url = data.results.redirect;
                                            window.location.href = url;
                                        }
                                    });
                                }, 3000);





                                
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
                                        $('#ticketId').html(data.results.ticketId);
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
        // } else {
        //     $.alert({
        //         title: 'Cảnh báo!',
        //         type: 'red',
        //         typeAnimated: true,
        //         content: 'Bạn chưa xác thực captcha',
        //     });
        // }
}

$('body').on('change','#transshipment',function () {
    if($(this).is(':checked')) {
        transshipment = 1;
        $('.transshipment').prop('disabled', false);

        console.log(totalMoneyReturn);

        $('#transshipmentPriceOneway').text(trashipmentPriceOneway.format()+' VND');
        $('#transshipmentPriceReturn').text(trashipmentPriceReturn.format()+' VND');
        totalMoneyOneway += trashipmentPriceOneway;
        totalMoneyReturn += trashipmentPriceReturn;
        $(".content-boxd").show();
    } else {
        transshipment = 0;
        console.log(totalMoneyReturn);
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


        console.log(trashipmentPriceOneway);

        totalMoneyOneway -= trashipmentPriceOneway;

        if(seatOneway.length < 1) {
            trashipmentPriceOneway -= trashipmentPriceInPointOneway;
        } else {
            trashipmentPriceOneway -= (trashipmentPriceInPointOneway * seatOneway.length);
        }
        trashipmentPriceInPointOneway = $(this).find(':selected').data('price');

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

$('body').on('click','#checkPromotion',function () {
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

    

    // if(typeof decodedString !== "undefined" || decodedString != '9999ANVUI'){
    //     $.alert({
    //         title: 'Cảnh báo!',
    //         type: 'red',
    //         typeAnimated: true,
    //         content: 'MÃ KHUYẾN MẠI KHÔNG HỢP LỆ',
    //     });
    //     return false;
    // }

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
                    if(ghenguoilondi.length + ghetreemdi.length > 0){
                        $('#promotionPrice').text(promotionMoney*(ghenguoilondi.length + ghetreemdi.length).format()+' VND');
                    } else{
                        $('#promotionPrice').text(promotionMoney.format()+' VND');
                    }
                    
                } else if(promotionPercent > 0) {
                    $('#promotionPrice').text(promotionPercent*100+' %');
                }


                $('#checkPromotion').text('X');
                $('#checkPromotion').removeClass('btn-info');
                $('#checkPromotion').addClass('btn-danger');
                console.log(promotionMoney);
                console.log(totalMoney);
                if(totalMoney > 0) {
                    if(promotionMoney > 0) {
                        $('#totalMoney').text((totalMoney - promotionMoney*(ghenguoilondi.length + ghetreemdi.length)).format()+' VND');
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
                    content: 'Mã khuyến mại không tồn tại hoặc Mã đã được sử dụng đủ giới hạn quy định của nhà xe',
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

function removeSeatInList(item, array) {
    var index = array.indexOf(item);
    if (index > -1) {
        array.splice(index, 1);
    }
}

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


function removeUnicode(str) {
    str= str.toLowerCase();
    str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
    str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
    str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
    str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
    str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
    str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
    str= str.replace(/đ/g,"d");
    str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
    str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
    str= str.replace(/^\-+|\-+$/g,"");
    return str;
}


function formatDate(date, patternStr){
    if (!patternStr) {
        patternStr = 'M/d/yyyy';
    }

    console.log(date);
    var day = date.getDate(),
        month = date.getMonth(),
        year = date.getFullYear(),
        hour = date.getHours(),
        minute = date.getMinutes(),
        second = date.getSeconds(),
        miliseconds = date.getMilliseconds(),
        h = hour % 12,
        hh = twoDigitPad(h),
        HH = twoDigitPad(hour),
        mm = twoDigitPad(minute),
        ss = twoDigitPad(second),
        aaa = hour < 12 ? 'AM' : 'PM',
        EEEE = dayOfWeekNames[date.getDay()],
        EEE = EEEE.substr(0, 3),
        dd = twoDigitPad(day),
        M = month + 1,
        MM = twoDigitPad(M),
        MMMM = monthNames[month],
        MMM = MMMM.substr(0, 3),
        yyyy = year + "",
        yy = yyyy.substr(2, 2)
    ;
    return patternStr
      .replace('hh', hh).replace('h', h)
      .replace('HH', HH).replace('H', hour)
      .replace('mm', mm).replace('m', minute)
      .replace('ss', ss).replace('s', second)
      .replace('S', miliseconds)
      .replace('dd', dd).replace('d', day)
      .replace('MMMM', MMMM).replace('MMM', MMM).replace('MM', MM).replace('M', M)
      .replace('EEEE', EEEE).replace('EEE', EEE)
      .replace('yyyy', yyyy)
      .replace('yy', yy)
      .replace('aaa', aaa)
    ;
}
function twoDigitPad(num) {
    return num < 10 ? "0" + num : num;
}



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


function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}