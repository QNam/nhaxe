<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//datve/datve.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="backgroundnew">
    <div class="container" style="min-height: 500px">
        <div class="f-center-module">
            <div class="f-center-title"><i></i><span>Đặt vé tuyến <?=$data['content']['route']['routeName']?></span></div>
            <style type="text/css">
                .listchuyen {
                    width: 99%;
                }

                .showchuyen {
                    background: #ccc;
                    border-radius: 5px;
                    border: 1px solid #fff;
                    padding: 10px;
                    margin-bottom: 10px;
                    text-align: center;
                    cursor: pointer;
                    box-shadow: 1px 2px 3px #797979;
                }

                .showchuyen h5 {
                    text-align: center;
                    font-weight: bold;
                    font-size: 13px;
                    margin-bottom: 5px;
                    text-shadow: 1px 1px 1px #fff;
                }

                .showchuyen span {
                }

                .showchuyen:hover {
                    box-shadow: 1px 2px 3px #f57380;
                    background: #ffbcc2;
                }

                .box-search {
                    background: #262626;
                    padding: 20px;
                    width: 100%;

                    margin-bottom: 20px;
                }

                .glyphicon:empty {
                    width: auto;
                }

                .glyphicon-chevron-right:after {
                    background: url(http://demo.nhaxe.vn/themes/1/statics/imgs/arrowright.png) no-repeat center;
                    width: 15px;
                    height: 20px;
                    background-size: 8px;
                    background-color: #8a8a8a;
                    position: relative;
                    left: 0;
                }

                .glyphicon-chevron-left:after {
                    background: url(http://demo.nhaxe.vn/themes/1/statics/imgs/arrowright.png) no-repeat center;
                    width: 15px;
                    height: 20px;
                    background-size: 8px;
                    background-color: #8a8a8a;
                    position: relative;
                    left: 0;
                }

                .selected > .showchuyen {
                    background: #ffcacf;
                }

                .btn-danger {
                    font-size: 20px;
                    padding: 8px 30px;
                    color: #ffffff;
                    background-color: #d9534f;
                    border-color: #d43f3a;
                }

                .baybe {
                    background-color: #0b51a0;
                    /*border-radius: 5px;*/
                    border: 1px solid #fff;
                    padding: 10px;
                    /*margin-bottom: 10px;*/
                    text-align: center;
                    cursor: pointer;
                    box-shadow: 1px 2px 3px #797979;
                }

                .adults {
                    background-color: #ff9600;
                }
            </style>
            <div class="box-search row">
                <form class="form-horizontal" id="formsearch">
                    <input type="hidden" name="routeId" value="<?=$data['content']['routeId']?>">

                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <select class="form-control" name="startPointId" id="startPointId" style="margin-top: 7px;">
                            <option value="0">Điểm đi</option>
                            <?php if(is_array($data['content']['listPoint'])) { foreach($data['content']['listPoint'] as $k => $v) { ?>
                            <option value="<?=$v['pointId']?>" <?php if($data['content']['startPointId']== $v[
                            'pointId']) { ?>selected<?php } ?>><?=$v['pointName']?></option>
                            <?php } } ?>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <select class="form-control" name="endPointId" id="endPointId" style="margin-top: 7px;">
                            <option value="0">Điểm đến</option>
                            <?php if(is_array($data['content']['listPoint'])) { foreach($data['content']['listPoint'] as $k => $v) { ?>
                            <option value="<?=$v['pointId']?>" <?php if($data['content']['endPointId']== $v[
                            'pointId']) { ?>selected<?php } ?>><?=$v['pointName']?></option>
                            <?php } } ?>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="form-group" style="margin-top: 7px;">
                            <input type="text" name="date" value="<?=$data['content']['date']?>" class="form-control" id="datetimepicker"
                                   placeholder="Chọn ngày">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <button type="submit" class="btn btn-danger">Tìm chuyến</button>
                    </div>
                </form>
            </div>
            <script type="text/javascript">
                $('#startPointId').change(function () {
                    $('#formsearch').submit();
                });
                $('#endPointId').change(function () {
                    $('#formsearch').submit();
                });

            </script>
            <style type="text/css">

                .showchuyen {
                    padding-left: 40px;
                }

                .showchuyen img {
                    width: 60px;
                    position: absolute;
                    left: 30px;
                    top: 16px;
                }

                .tipppp {
                    font-size: 15px !important;
                    color: #d9534f;
                }

                .giave {
                    font-size: 14px !important;
                }
            </style>
            <div class="f-center-body listchuyen">
                <?php if(count($data['content']['listSchedule']) > 0) { ?>
                <div class="listchuyen row">
                    <?php if(is_array($data['content']['listSchedule'])) { foreach($data['content']['listSchedule'] as $k => $v) { ?>
                    <div class="col-md-3 col-sm-3 col-xs-6 chuyendi"
                         data-route="<?=$v['routeId']?>"
                         data-id="<?=$v['tripId']?>"
                         data-scheduleId="<?=$v['scheduleId']?>"
                         data-getInPointId="<?=$v['getInPointId']?>"
                         data-getOffPointId="<?=$v['getOffPointId']?>"
                         data-getInTime="<?=$v['getInTime']?>"
                         data-ticketPrice="<?=$v['ticketPrice']?>"
                         data-companyStatus="<?=$v['companyStatus']?>"
                         data-startDate="<?=$v['startDate']?>"
                    >


                        <div class="showchuyen">
                            <img src="http://anvui.vn/themes/icon/iConAnVuiVang.png"/>

                            <h5><?=$data['content']['route']['routeName']?></h5>
                            <h5 class="tipppp"><?=$v['startTime']?></h5>
                            <h5 class="giave"> <?=$v['ticketPrice1']?> VNĐ</h5>
                        </div>

                    </div>

                    <?php } } ?>
                </div>
                <?php } else { ?>
                <center><h2>Hãy chọn Điểm đi, Điểm đến và thời gian!</h2></center>
                <?php } ?>

            </div>
            <script type="text/javascript">
                Number.prototype.format = function (n, x) {
                    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                    return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
                };

                var ghedachon = [];
                var tripId = '';
                var getInPointId = '';
                var getOffPointId = '';
                var scheduleId = '';
                var getInTime = '';
                var ticketPrice = 0;
                var can_chon_ghe = true;
                var seatMap;
                var id1;
                var remove_baybe;
                var totalprice = 0, seatLength = 0;
                var ghechuyendi = '';
                var tongtienve = 0;

                <?php if($data['content']['khuhoi']['khuhoi'] == 1) { ?>
                ghechuyendi = "<?=$data['content']['khuhoi']['ghedachon']?>";
                tongtienve = <?=$data['content']['khuhoi']['tongtien']?>;
                <?php } ?>

                function chonghe(id) {

                    // if(!can_chon_ghe){
                    //   return false;
                    // }

                    seat = search(id, seatMap);
                    remove_baybe = 0;
                    id1 = id.replace(',', '_');
                    var key = ghedachon.indexOf(id);
                    if (key > -1) {
                        if ($('#chonghe_' + id1).hasClass('adults')) {
                            $('#chonghe_' + id1).removeClass('adults');
                            $('#chonghe_' + id1).removeClass('chonghechon');
                            $('#chonghe_' + id1).addClass('baybe');
                            $('#chonghe_' + id1).removeClass('chonghe');
                            $('#numberBayby').val(parseInt($('#numberBayby').val()) + 1);
                            remove_baybe = 1;
                        } else {
                            if ($('#chonghe_' + id1).hasClass('baybe'))
                                $('#chonghe_' + id1).removeClass('baybe');
                            $('#chonghe_' + id1).removeClass('chonghechon');
                            $('#chonghe_' + id1).addClass('chonghe');
                            $('#numberBayby').val(parseInt($('#numberBayby').val()) - 1);
                            ghedachon.splice(key, 1);
                            remove_baybe = 1;
                        }


                    }
                    else {
                        if(ghechuyendi != '' && (ghedachon.length >= (ghechuyendi.split(',').length - 1)))
                        {
                            alert('Chỉ được chọn dưới ' + (ghechuyendi.split(',').length - 1).toString() + ' ghế!');
                            return false;
                        }
                        if (ghedachon.length > 10) {
                            alert('Chỉ được chọn dưới 10 ghế!');
                            return false;
                        }

                        $('#chonghe_' + id1).addClass('chonghechon');
                        $('#chonghe_' + id1).addClass('adults');
                        ghedachon.push(id);
                    }

                    <?php if($data['content']['companyId'] == 'TC1OHmbCcxRS') { ?>
                    if(before12H >= Date.now()){
                        xacnhan(seat);
                    }
                    <?php } else { ?>
                    xacnhan(seat);
                    <?php } ?>
                }

                function search(nameKey, myArray) {
                    for (var i = 0; i < myArray.length; i++) {
                        if (myArray[i].seatId === nameKey) {
                            return myArray[i];
                        }
                    }
                }


                function checknumbaby(value) {


                    if (value > ghedachon.length) {
                        $('#numberBayby').val(ghedachon.length);
                        alert('Số trẻ em phải nhỏ hơn số ghế!');
                        return true;
                    }

                    <?php if($data['content']['route']['childrenTicketRatio'] != 0) { ?>
                    var numberMan = $('#numberMan').val();
                    numberMan = ghedachon.length - value;
                        $('#numberMan').val(numberMan);
                    <?php } ?>

                        return true;
                    }

                    function xacnhan(seat) {
                        // can_chon_ghe = false;
//  console.log(ghedachon);

                        if (ghedachon.length == 0) {
                            alert('Hãy chọn ghế!');
                            // return false;
                        }

                        if (ghedachon.length > 10) {
                            alert('Chỉ được chọn dưới 10 ghế!');
                            return false;
                        }
                        var ghedachontext = '';

                        $.each(ghedachon, function (key, val) {
                            ghedachontext += val + ',';
                        });
//    console.log(ghedachon.length);
                        $('#ghedachonspan').html(ghedachontext);
                        $('#ghedachoninput').val(ghedachontext);

                        // $('#chonghe').hide();
                        $('.xacnhanbtn').hide();
                        $('#thongtin').show();

                        var numbb = (document.getElementsByClassName('baybe')).length;
                        console.log(numbb);
                        //var numbb = $('#numberBayby').val();
                        var numman = ghedachon.length - numbb;

                        // if (numman < 0) {
                        //     numman = 0;
                        //     $('#numberBayby').val(ghedachon.length);
                        // }
                        price = parseInt(ticketPrice);
                        var raito = parseInt($('#raito').data('raito')) ? parseInt($('#raito').data('raito')) : 0;
                        if (remove_baybe == 1) {
                            var subprice = price - price * (raito / 100);
                            price *= (raito / 100);
                        }
                        price += parseInt(seat.extraPrice);
                        if (ghedachon.length >= seatLength) {
                            if (remove_baybe == 1) totalprice -= subprice;
                            else totalprice += price;
                        }
                        else {
                            if (totalprice < price) totalprice = 0;
                            else
                                totalprice -= price;

                        }
                        seatLength = ghedachon.length;
                        console.log(price);

                        $('#numberMan').val(numman);
//  var totalprice = ghedachon.length*ticketPrice;
                        $('#priceneedpay').text((parseInt(totalprice)).format());
                        $('#tongtien').val(totalprice);

                    }

                    function hoanthanh() {
                        var mave;
                        if (ghedachon.length == 0) {
                            alert('Hãy chọn ghế!');
                            return false;
                        }
                        if (ghedachon.length > 10) {
                            alert('Chỉ được chọn dưới 10 ghế!');
                            return false;
                        }

                        var pttt = $('input[name=paymenttype]:checked').val();

                        var fullName = $('#fullName').val();
                        var phoneNumber = $('#phoneNumber').val();
                        var email = $('#txtEmail').val();
                        if (fullName == '') {
                            alert('Hãy nhập tên!');
                            $('#fullName').focus();
                            return false;
                        }
                        if (phoneNumber == '') {
                            alert('Hãy nhập số điện thoại!');
                            $('#phoneNumber').focus();
                            return false;
                        }
                        if (tripId == '') {
                            alert('Thiếu dữ liệu!');
                            return false;
                        }
                        if (getInPointId == '') {
                            alert('Thiếu dữ liệu!');
                            return false;
                        }
                        if (getOffPointId == '') {
                            alert('Thiếu dữ liệu!');
                            return false;
                        }
                        if (scheduleId == '') {
                            alert('Thiếu dữ liệu!');
                            return false;
                        }
                        if (getInTime == '') {
                            alert('Thiếu dữ liệu!');
                            return false;
                        }
                        if (ticketPrice == 0) {
                            alert('Thiếu dữ liệu!');
                            return false;
                        }

                        var numberBayby = $('#numberBayby').val();
                        var numghe = parseInt($('#numberMan').val());
//  var price = ticketPrice * numghe;

                        $('#hoanthanhbtn').hide();
                        $('#loadingbtn').show();

                        <?php if($data['content']['khuhoi']['khuhoi'] != 1) { ?>
                        $.ajax({
                            type: 'POST',
                            url: 'http://demo.nhaxe.vn/dat-ve?sub=order',
                            data: {
                                'listSeatId': JSON.stringify(ghedachon),
                                'fullName': fullName,
                                'phoneNumber': phoneNumber,
                                'email': email,
                                'getInPointId': getInPointId,
                                'startDate': startDate,
                                'getOffPointId': getOffPointId,
                                'scheduleId': scheduleId,
                                'getInTimePlan': getInTime,

                                'originalTicketPrice': totalprice,
                                'paymentTicketPrice': totalprice,
                                'paymentType': pttt,
                                'paidMoney': 0,

                                'tripId': tripId,
                                'numberOfAdults': numghe,
                                'numberOfChildren': numberBayby,
                            },
                            success: function (data) {
                                console.log(data);
                                if (data.code != 200) {
                                    alert('Đã có lỗi xảy ra, hãy đặt lại!');
                                    $('#hoanthanhbtn').show();
                                    $('#loadingbtn').hide();
                                }
                                else {
                                    if (pttt == 1) {

                                        var url = 'https://dobody-anvui.appspot.com/payment/dopay?vpc_OrderInfo=' + data.results.ticketId + '&vpc_Amount=' + totalprice * 100 + '&phoneNumber=' + phoneNumber + "&packageName=web";

                                        <?php if($data['content']['companyId'] == 'TC1OHmbCcxRS') { ?>
                                        url = 'https://dobody-anvui.appspot.com/pumpkin/dopay?vpc_OrderInfo=' + data.results.ticketId + '&vpc_Amount=' + totalprice * 100 + '&phoneNumber=' + phoneNumber + "&packageName=web";
                                        <?php } ?>

                                            window.location.href = url;
                                        }
                                    else
                                        {
                                            $('#datthanhcong').show();
                                            $('#hoanthanhbtn').hide();
                                            $('#loadingbtn').hide();
                                            $('#gohomebtn').show();
                                        }
                                    }
                                }
                            });

                        <?php } else { ?>
                        var paymentCode = generatePaymentCode();
                        var ghe = ghechuyendi.split(',');
                        ghe.splice(-1,1);
                        /*Chuyen di*/
                        $.ajax({
                            type: 'POST',
                            url: 'http://demo.nhaxe.vn/dat-ve?sub=order',
                            data: {
                                'listSeatId': JSON.stringify(ghe),
                                'fullName': fullName,
                                'phoneNumber': phoneNumber,
                                'email': email,
                                'getInPointId': "<?=$data['content']['khuhoi']['getInPointId']?>",
                                'startDate': <?=$data['content']['khuhoi']['startDate']?>,
                                'getOffPointId': "<?=$data['content']['khuhoi']['getOffPointId']?>",
                                'scheduleId': "<?=$data['content']['khuhoi']['scheduleId']?>",
                                'getInTimePlan': <?=$data['content']['khuhoi']['getInTime']?>,

                                'originalTicketPrice': tongtienve,
                                'paymentTicketPrice': tongtienve ,
                                'paymentType': pttt,
                                'paidMoney': 0,

                                'tripId': "<?=$data['content']['khuhoi']['tripId']?>",
                                'numberOfAdults': <?=$data['content']['khuhoi']['numberMan']?>,
                                'numberOfChildren': <?=$data['content']['khuhoi']['numberBayby']?>,
                                'paymentCode': paymentCode
                            },
                            success: function (data) {
                                if (data.code != 200) {
                                    alert('Đã có lỗi xảy ra, hãy đặt lại!');
                                    $('#hoanthanhbtn').show();
                                    $('#loadingbtn').hide();
                                }
                                mave = data.results.ticketId;
                            }
                            });

                        /*Chuyen ve*/
                        $.ajax({
                            type: 'POST',
                            url: 'http://demo.nhaxe.vn/dat-ve?sub=order',
                            data: {
                                'listSeatId': JSON.stringify(ghedachon),
                                'fullName': fullName,
                                'phoneNumber': phoneNumber,
                                'email': email,
                                'getInPointId': getInPointId,
                                'startDate': startDate,
                                'getOffPointId': getOffPointId,
                                'scheduleId': scheduleId,
                                'getInTimePlan': getInTime,

                                'originalTicketPrice': totalprice - tongtienve,
                                'paymentTicketPrice': totalprice - tongtienve,
                                'paymentType': pttt,
                                'paidMoney': 0,

                                'tripId': tripId,
                                'numberOfAdults': numghe,
                                'numberOfChildren': numberBayby,
                                'paymentCode': paymentCode
                            },
                            success: function (data) {
                                if (data.code != 200) {
                                    alert('Đã có lỗi xảy ra, hãy đặt lại!');
                                    $('#hoanthanhbtn').show();
                                    $('#loadingbtn').hide();
                                }
                                mave = mave + "-" + data.results.ticketId;

                                }
                            });

                        if (pttt == 1) {
                            setTimeout(function () {
                                var url = 'https://dobody-anvui.appspot.com/payment/dopay?vpc_OrderInfo=' + mave + '&vpc_Amount=' + totalprice * 100 + '&phoneNumber=' + phoneNumber + "&packageName=web&paymentCode=" + paymentCode;

                                <?php if($data['content']['companyId'] == 'TC1OHmbCcxRS') { ?>
                                url = 'https://dobody-anvui.appspot.com/pumpkin/dopay?vpc_OrderInfo=' + mave + '&vpc_Amount=' + totalprice * 100 + '&phoneNumber=' + phoneNumber + "&packageName=web&paymentCode=" + paymentCode;
                                <?php } ?>

                                    window.location.href = url;
                                }, 3000);
                        }
                        else
                        {
                            $('#datthanhcong').show();
                            $('#hoanthanhbtn').hide();
                            $('#loadingbtn').hide();
                            $('#gohomebtn').show();
                        }

                        <?php } ?>


                    }

                    function generatePaymentCode() {
                        return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15) + Date.now();
                    }

                    function gohome() {
                        window.location.href = 'http://<?=$web['home']?>';
                    }
            </script>
            <div class="f-center-body" id="goidien" style="display:none">
                <br/>
                <br/>
                <center>

                    <h4>Nhà xe chưa cam kết với An Vui, hãy gọi điện đặt chỗ!</h4>
                    <br/>
                    <a href="callto:19007034">
                        <button type="button" class="btn btn-danger">Gọi 19007034 để đặt chỗ</button>
                    </a>


                </center>
            </div>


            <style type="text/css">
                #chonghe {
                    width: 560px;
                    padding: 10px;
                    float: left;
                    margin-left: 50px;
                }

                #thongtin{
                    width: 440px;
                    float: left;
                    position: relative;
                    padding-top: 88px;
                    margin-left: 50px;
                }

                #datve {
                    width: 440px;
                    float: left;
                    position: relative;
                    padding-top: 88px;
                    margin-left: 50px;
                }

                .chonghe {
                    border-radius: 0;
                }

                .chuthich {
                    padding: 20px;
                    padding-top: 5px !important;
                    border-bottom: 1px solid #ccc;
                    padding-bottom: 5px !important;
                    margin-bottom: 15px;
                }

                .f-center-module .f-center-title {
                    margin: 0;
                    padding: 0px;
                    padding-top: 10px;
                    background: #F5F4F4;
                    font-size: 21px;
                    height: auto;
                }

                .no-spinners {
                    -moz-appearance: textfield;
                }

                .no-spinners::-webkit-outer-spin-button,
                .no-spinners::-webkit-inner-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }

            </style>
            <div class="f-center-body" id="chonghe" style="display:none">
                <div class="f-center-title"><i></i><span>Chọn ghế</span></div>

                <div class="chuthich row">

                    <?php if($data['content']['route']['childrenTicketRatio'] != 0) { ?>
                    <i style="color:red;" id="raito" data-raito="<?=$data['content']['route']['childrenTicketRatio']?>">* Trẻ em vẫn được
                        tính chỗ và giá vé bằng <?=$data['content']['route']['childrenTicketRatio']?>% vé người lớn. </i>
                    <?php } ?>
                    <br/>
                    <span class="chuthich_dachon">Ghế đã đặt</span>
                    <span class="chuthich_chuachon">Ghế chưa đặt</span>
                    <span class="chuthich_banchon">Ghế bạn vừa chọn</span>
                    </br></br>
                    <span class="chuthich_baybe">Ghế trẻ em(click lần 2)</span>
                </div>
                <div class="box-chonghe row">
                    <center>Loading...</center>
                </div>
                <!-- <center> <button type="button" onclick="xacnhan()" class="btn btn-danger xacnhanbtn">Xác nhận</button></center> -->
            </div>


            <div class="f-center-body" id="thongtin" style="display:none">
                <form action="/dat-ve" method="post">
                    <div class="panel panel-default packagesFilter" style="width: 100%; float:left">
                        <div class="panel-heading">
                            <h3 class="panel-title">Thông tin khách hàng</h3>
                        </div>
                        <div class="panel-body transaction" style="padding: 10px;">

                            <div class="box-thongtin row">
                                <?php if($data['content']['khuhoi']['khuhoi'] == 1) { ?>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Ghế chuyến đi:</label>
                                    <div class="col-sm-9">
                                        <?=$data['content']['khuhoi']['ghedachon']?>
                                    </div>
                                </div>
                                <?php } ?>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Ghế đã chọn:</label>
                                    <div class="col-sm-9" id="ghedachonspan">
                                    </div>
                                    <input type="hidden" name="ghedachon" id="ghedachoninput">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Tên của bạn</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fullName" id="fullName" class="form-control" placeholder="Tên của bạn">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="phoneNumber" id="phoneNumber" class="form-control no-spinners"
                                               placeholder="Số điện thoại">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" id="txtEmail" class="form-control no-spinners"
                                               placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Số người lớn</label>
                                    <div class="col-sm-2">
                                        <input type="text" style="width: 93px;" id="numberMan" name="numberMan" class="form-control" value=""
                                               readonly>
                                    </div>

                                    <label for="inputEmail3" class="col-sm-1 control-label"></label>
                                    <label for="inputEmail3" class="col-sm-3 control-label">Số trẻ em</label>
                                    <div class="col-sm-2">
                                        <input type="text" style="width: 93px;" name="numberBayby" id="numberBayby"
                                               class="form-control" value="0" min="0" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input class="form-check-input" type="checkbox" id="khuhoi">
                                        <label class="form-check-label" for="khuhoi" style="font-size: 20px;">
                                            Khứ hồi
                                        </label>
                                        <?php if($data['content']['khuhoi']['khuhoi'] == 1) { ?>
                                        <a href="/dat-ve?sub=huykhuhoi" style="float: right;">Hủy khứ hồi</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                <div class="panel panel-default packagesFilter" id="thanhtoan" style="width: 100%; float:left;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hình thức giao dịch</h3>
                    </div>
                    <div class="panel-body transaction" style="padding: 10px;">
                        <div class="radio">
                            Số tiền cần thanh toán: <span id="priceneedpay"></span> VNĐ
                            <input type="hidden" name="tongtien" id="tongtien">
                            <input type="hidden" name="khuhoi" value="1">
                            <input type="hidden" name="routeId" id="routeId">
                            <input type="hidden" name="getInPointId" id="getInPointId">
                            <input type="hidden" name="startDate" id="startDate">
                            <input type="hidden" name="getOffPointId" id="getOffPointId">
                            <input type="hidden" name="scheduleId" id="scheduleId">
                            <input type="hidden" name="getInTime" id="getInTime">
                            <input type="hidden" name="tripId" id="tripId">
                            <input type="hidden" name="routeName" id="routeName" value="<?=$data['content']['route']['routeName']?>">
                            <br/>
                            <?php if($data['content']['route']['childrenTicketRatio'] != 0) { ?>
                            <i style="color:red;">* Trẻ em vẫn được tính chỗ và giá vé bằng
                                <?=$data['content']['route']['childrenTicketRatio']?>% vé người lớn. </i>
                            <?php } ?>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="kieuthanhtoan" name="paymenttype" value="1"> Thanh toán đảm bảo trực tuyến - Thẻ
                                nội địa
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <img class="img-responsive"
                                     src="<?=$web['static_temp']?><?=$web['temp']?>/statics/imgs/ATMnoidia_logongang.png"
                                     style="width:100%">
                            </div>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="kieuthanhtoan" name="paymenttype" value="5" checked> Thanh toán tại quầy
                            </label>
                        </div>
                        <?php if($data['content']['companyId'] == 'TC1OHmbCcxRS') { ?>
                        <div class="radio">
                            <label>
                                <input type="radio" class="kieuthanhtoan" name="paymenttype" value="6"> Chuyển khoản
                            </label>
                        </div>
                        <div class="row" id="chuyenkhoan" style="display: none">
                            <div class="col-sm-12 col-xs-12">
                                <div style="padding: 10px 0; height: 145px; overflow-x: auto;">
                                    <p>Thông tin chuyển khoản:</p>

                                    <p>Ngân hàng BIDV</p>
                                    <p>Chủ tài khoản: VŨ THANH HOÀI</p>
                                    <p>Số tài khoản: 1601 0000 064 640</p>
                                    <p>Chi nhánh: Ngân hàng BIDV Sở Giao dịch 3</p>
                                    <p>Ngân hàng TECHCOMBANK</p>
                                    <p>Chủ tài khoản: VŨ THANH HOÀI</p>
                                    <p>Số tài khoản: 111 20032107 106</p>
                                    <p>Chi nhánh: Ngân hàng TECHCOMBANK Hà Nội</p>
                                    <p>Ngân hàng VIETCOMBANK</p>
                                    <p>Chủ tài khoản: VŨ THANH HOÀI</p>
                                    <p>Số tài khoản: 001 10037 90795</p>
                                    <p>Chi nhánh: Ngân hàng VIETCOMBANK Sở Giao dịch</p>
                                    <p>Ngân hàng VIETCOMBANK</p>
                                    <p>Chủ tài khoản: VŨ THANH HOÀI</p>
                                    <p>Số tài khoản: 150 2205 120668</p>
                                    <p>Chi nhánh: Ngân hàng AGRIBANK CN Hoàn Kiếm HN</p>
                                    <p>Nội dung: <i>SDT</i> thanh toan ma ve <i>MÃ VÉ</i></p>
                                    <p>Ví dụ: 0987654321 thanh toan ma ve 181903-123456</p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>

                <div class="clearfix"></div>
                <div class="panel panel-default packagesFilter" id="datthanhcong" style="width: 95%; display:none">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hoàn tất đặt vé</h3>
                    </div>
                    <div class="panel-body transaction" style="padding: 10px; text-align:center">

                        <h4>Bạn đã hoàn tất đặt vé, chúng tôi sẽ liên hệ với bạn để hoàn thành quá trình đặt vé. Chân
                            thành cảm ơn!</h4>

                        <!--<h4>Bạn đã hoàn tất đặt vé</h4>

                        <p>Mã thanh toán của bạn là: <span id="codetran"></span>, hãy đến cơ sở gần nhất của An Vui để hoàn thành giao dịch. </p>
                        <p>Xem các cơ sở gần nhất của Payoo tại bản đồ phía dưới</p>
                      -->

                    </div>
                </div>
                <div class="clearfix"></div>

                <center>
                    <button type="button" id="hoanthanhbtn" onclick="hoanthanh()" class="btn btn-danger">Xác nhận đặt
                        vé
                    </button>
                </center>
                <button type="button" id="gohomebtn" style="display: none;" onclick="gohome()" class="btn btn-primary">
                    Về trang chủ
                </button>

                <center>
                <button type="submit" id="chonkhuhoi" style="display: none" class="btn btn-primary">Chọn chiều về
                </button>
                </center>

                <span id="loadingbtn" style="display: none;    text-align: center;
    font-size: 20px; width: 100%; float: left">Đang đặt vé ...</span>
                </form>
            </div>


            <div class="f-center-body" id="datve" style="display:none">

                <div class="panel panel-default packagesFilter" style="width: 100%; float:left">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đặt vé</h3>
                    </div>
                    <div class="panel-body transaction" style="padding: 10px;">

                        <div class="box-thongtin row">
                            <br/>
                            <br/>
                            <center>

                                <h4>Vui lòng đặt chỗ trước giờ xe chạy 12 tiếng!</h4>
                                <br/>
                                <a href="callto:<?=$data['content']['listSchedule']['0']['companyPhoneNumber']?>">
                                    <button type="button" class="btn btn-danger">Gọi <?=$data['content']['listSchedule']['0']['companyPhoneNumber']?> để đặt chỗ</button>
                                </a>


                            </center>
                        </div>


                    </div>
                </div>

            </div>


        </div>
        <style type="text/css">
            .ifram_payoo {
                width: 98%;
                height: 510px;
                display: none;
                clear: both;
                padding-top: 10px;
            }

            .ifram_payoo iframe {
                border: none;
                width: 100%;
                height: 500px;
            }

            .ghe_7 {
                width: 14.28% !important;
                height: 46px;
                overflow: hidden;
                padding: 1px !important;
            }

            .ghe_6 {
                width: 16.66% !important;
                height: 46px;
                overflow: hidden;
                padding: 1px !important;
            }

            .ghe_5 {
                width: 20% !important;
                height: 46px;
                overflow: hidden;
                padding: 1px !important;
            }

            .ghe_4 {
                width: 25% !important;
                height: 46px;
                overflow: hidden;
                padding: 1px !important;
            }

            .ghe_3 {
                width: 33.33% !important;
                height: 46px;
                overflow: hidden;
                padding: 1px !important;
            }

            .ghe_2 {
                width: 50% !important;
                height: 46px;
                overflow: hidden;
                padding: 1px !important;
            }

            .ghe_1 {
                width: 100% !important;
                height: 46px;
                overflow: hidden;
                padding: 1px !important;
            }
        </style>
        <div class="ifram_payoo">
            <iframe src="https://payoo.vn/map/public/?verify=true"></iframe>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>

<link href="<?=$web['static_temp']?><?=$web['temp']?>/statics/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"
      rel="stylesheet" type="text/css">
<script src="<?=$web['static_temp']?><?=$web['temp']?>/statics/libs/bootstrap-datetimepicker/js/moment.js"
        type="text/javascript"></script>
<script src="<?=$web['static_temp']?><?=$web['temp']?>/statics/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"
        type="text/javascript"></script>
<script type="text/javascript">
    var before12H = 0;
    $('#khuhoi').change(function () {
        if ($('#khuhoi').is(":checked")) {
            $('#hoanthanhbtn').hide();
            $('#thanhtoan').hide();
            $('#chonkhuhoi').show();
        } else {
            $('#hoanthanhbtn').show();
            $('#thanhtoan').show();
            $('#chonkhuhoi').hide();
        }
    });
    <?php if($data['content']['khuhoi']['khuhoi'] == 1) { ?>
    $('#khuhoi').attr('disabled', true);
    $('#khuhoi').prop('checked', true);
    $('#fullName').val("<?=$data['content']['khuhoi']['fullName']?>");
    $('#phoneNumber').val("<?=$data['content']['khuhoi']['phoneNumber']?>");
    $('#txtEmail').val("<?=$data['content']['khuhoi']['email']?>");
    totalprice = <?=$data['content']['khuhoi']['tongtien']?>;
    $('#priceneedpay').text((parseInt(totalprice)).format());
    <?php } ?>

    $('.chuyendi').click(function () {
        ghedachon = [];

        routeId = $(this).attr('data-route');
        tripId = $(this).attr('data-id');
        scheduleId = $(this).attr('data-scheduleId');
        getOffPointId = $(this).attr('data-getOffPointId');
        getInPointId = $(this).attr('data-getInPointId');
        getInTime = $(this).attr('data-getInTime');
        ticketPrice = $(this).attr('data-ticketPrice');
        companyStatus = $(this).attr('data-companyStatus');
        startDate = $(this).attr('data-startDate');

        $('#getOffPointId').val(getOffPointId);
        $('#getInTime').val(getInTime);
        $('#getInPointId').val(getInPointId);
        $('#scheduleId').val(scheduleId);
        $('#tripId').val(tripId);
        $('#startDate').val(startDate);

        if (companyStatus == 1) {
            $('#goidien').show();
            return false;
        }

        $('#routeId').val(routeId);

        $('.chuyendi').removeClass('selected');
        $(this).addClass('selected');
        $('.box-chonghe').html('<center>Loading...</center>');

        $('#chonghe').show();

        before12H = parseFloat(getInTime) - (12 *60*60*1000);
        // $('#thongtin').hide();
        <?php if($data['content']['companyId'] == 'TC1OHmbCcxRS') { ?>
        if(before12H < Date.now())
        {
            $('#datve').show();
            $('#thongtin').hide();
        } else {
            $('#thongtin').show();
            $('#datve').hide();
        }
        <?php } else { ?>
            $('#thongtin').show();
        <?php } ?>
        var fflo = true;

        $.getJSON("http://demo.nhaxe.vn/dat-ve?tripId=" + tripId + '&scheduleId=' + scheduleId, function (data) {
            var html = '';
            //theo numberOfFloors
            for (var floor = 1; floor < data.seatMap.numberOfFloors + 1; floor++) {

                html += '<div class="col-md-6 tachtang"><div class="col-md-12 col-sm-12 col-xs-12 tang2">Tầng ' + floor + '</div>';

                //theo hang
                for (var row = 1; row < data.seatMap.numberOfRows + 1; row++) {
                    for (var column = 1; column < data.seatMap.numberOfColumns + 1; column++) {
                        coghe = false;
                        iddd = '';
                        seatMap = data.seatMap.seatList;// lay du lieu seatMap

                        $.each(data.seatMap.seatList, function (index, val) {
                            var id = val['seatId'];
                            var id1 = id.replace(',', '_');
                            iddd = floor + ' ' + row + ' ' + column;
                            if (

                                val['floor'] != floor
                                || val['row'] != row
                                || val['column'] != column
                            ) {
                                // coghe = false;
                            }
                            else {
                                coghe = true;
                                if (val['seatType'] == 2) {
                                    html += '<div data-over="' + val['overTime'] + '" data-id="' + iddd + '" class="col-md-2 ghe_' + data.seatMap.numberOfColumns + '"><div class="chonghe chonghekodcchon" >Tài</div></div>';
                                }

                                else if (val['seatType'] == 1) {
                                    html += '<div data-over="' + val['overTime'] + '" data-id="' + iddd + '" class="col-md-2 ghe_' + data.seatMap.numberOfColumns + '"><div class="chonghe chonghekodcchon" >Door</div></div>';
                                }

                                else if (val['seatType'] == 5) {
                                    html += '<div data-over="' + val['overTime'] + '" data-id="' + iddd + '" class="col-md-2 ghe_' + data.seatMap.numberOfColumns + '"><div class="chonghe chonghekodcchon" >WC</div></div>';
                                }

                                else if (val['seatType'] == 6) {
                                    html += '<div data-over="' + val['overTime'] + '" data-id="' + iddd + '" class="col-md-2 ghe_' + data.seatMap.numberOfColumns + '"><div class="chonghe chonghekodcchon" >Phụ</div></div>';
                                }

                                else if ((val['seatStatus'] == 2 && val['overTime'] < Date.now() && val['overTime'] != 0) || val['seatStatus'] == 1) {
                                    html += '<div data-over="' + val['overTime'] + '" data-id="' + iddd + '" class="col-md-1 ghe_' + data.seatMap.numberOfColumns + ' gheloai_' + val['seatType'] + '"><div class="chonghe" id="chonghe_' + id1 + '" onclick="chonghe(\'' + id + '\')">' + id + '</div></div>';
                                }
                                else {
                                    html += '<div data-over="' + val['overTime'] + '" data-id="' + iddd + '"  class="col-md-2 ghe_' + data.seatMap.numberOfColumns + ' gheloai_' + val['seatType'] + '"><div class="chonghe chonghekodcchon" >' + id + '</div></div>';
                                }

                            }


                        });


                        if (!coghe) {
                            html += '<div id="' + iddd + '"  class="col-md-2 ghe_' + data.seatMap.numberOfColumns + ' kocoghe"> </div>';
                        }

                    }
                    ;
                }
                ;
                html += '</div>';

            }
            ;


            //   $.each( data.seatMap.seatList, function(index,val ) {
            //     var id = val['seatId'];
            //     var id1 = id.replace(',','_');


            //     if(fflo && val['floor'] == 2){
            //       fflo = false;
            //        html += '<div class="col-md-12 col-sm-12 col-xs-12 tang2">Tầng 2</div>';
            //     }

            //     if( val['seatStatus'] == 1 ){


            //       html += '<div class="col-md-2 col-sm-2 col-xs-2"><div class="chonghe" id="chonghe_' + id1 + '" onclick="chonghe(\'' + id + '\')">' + id + '</div></div>';
            //     }
            //     else{
            //          html += '<div class="col-md-2 col-sm-2 col-xs-2"><div class="chonghe chonghekodcchon" >' + id + '</div></div>';
            //     }
            // });


            $('.box-chonghe').html(html);
        });
    });


    $('#numberBayby').on('keyup', function () {
        if (this.value > ghedachon.length) {
            $('#numberBayby').val(ghedachon.length);
        }
    });
    $('.kieuthanhtoan').change(function () {
        if($('.kieuthanhtoan:checked').val() == '6') {
            $('#chuyenkhoan').show();
        } else {
            $('#chuyenkhoan').hide();
        }
    });

    $('#chonkhuhoi').click(function () {
        if(ghedachon.length < 1)
        {
            alert('Hãy chọn ghế');
            return false;
        }
        return true;
    });

    $(function () {
        $('#datetimepicker').datetimepicker({
            format: 'DD-MM-YYYY'
        });
    });
</script>
<style type="text/css">
    .tachtang {
        border-right: 1px solid #ccc;
    }

    .tang2 {
        float: left;
        background: #ccc;

        color: #313131;
        font-weight: bold;
        text-align: center;
        padding: 5px;
        margin: 20px;
        margin-left: 0;
    }

    .form-group {
        margin-bottom: 10px;
        width: 100%;
        float: left;
    }

    .box-chonghe, .box-thongtin {
        width: 99%;
    }

    .chonghe {
        background: #ccc;
        /*border-radius: 5px;*/
        border: 1px solid #fff;
        padding: 10px;
        /*margin-bottom: 10px;*/
        text-align: center;
        cursor: pointer;
        box-shadow: 1px 2px 3px #797979;
    }

    .chonghechon {
        background: #ffcacf;
    }

    .chonghekodcchon {
        background: #a28285;
    }

    .box-thongtin hr {
        display: block !important;
    }

    .chuthich {
        padding: 20px;
        padding-top: 5px;
    }

    .chuthich span {
        height: 20px;
        display: inline-block;
        border-left: 20px solid #ccc;
        padding-left: 5px;
        margin-right: 10px;
    }

    .f-center-module .f-center-title {
        margin-bottom: 5px;
        border-bottom: none;
    }

    .chuthich .chuthich_dachon {
        border-color: #a28285;
    }

    .chuthich .chuthich_banchon {
        border-color: #ffcacf;
    }

    #priceneedpay {
        color: red;
        font-weight: bold;
    }
</style>
 