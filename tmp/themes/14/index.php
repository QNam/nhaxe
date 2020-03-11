<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/14//index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-b-160 p-t-50">
            <div class="login100-form validate-form" id="formCheck">
                <span class="login100-form-title p-b-43">
                    Kiểm tra thông tin vé

                </span>
                <div class="wrap-input100 rs1 validate-input" data-validate="Username is required">
                    <input class="input100" id="ticketCode" type="text" name="ticketCode" placeholder="Mã vé">
                </div>
                <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
                    <input class="input100" id="mobile" type="text" name="phonenumber" placeholder="Số điện thoại">
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Kiểm tra
                    </button>
                </div>
            </div>
            <div class="login100-form validate-form" id="TicketInfomation" style="display: none;">
                <div class="content-d">
                    <div class="center-top-header">
                        <p class="dctt">Thông tin vé <span class="ticket-info-code">M9ZQD35</span></p>
                    </div>
                    <div class="conter-main-info">
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Họ và tên</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="fullname">Họ và tên</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Số điện thoại</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="sdt">Họ và tên</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Email</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="email">Họ và tên</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Hãng xe</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="brand">Họ và tên</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Tuyến đường</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="tdname">Họ và tên</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Biển số xe</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="numberPlate">Họ và tên</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Điểm đón</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="pointUp">Họ và tên</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Điểm trả</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="PointDown">Họ và tên</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Giờ khởi hành</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="gioKh">Họ và tên</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="left-pc">Giá ghế</p>
                            </div>
                            <div class="col-md-7">
                                <p class="right-pc" id="price">Họ và tên</p>
                            </div>
                        </div>

                        <div class="row" style="text-align: center;">
                            <button type="button" class="btn btn-danger" id="click-cancel">Hủy Vé</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if($web['anvui_id'] == 'TC0Ah1r7bCvzRlpF') { ?>
<script type="text/javascript">
    var hotline = '1900 1918';
</script>
<?php } ?>

<script type="text/javascript">
$(document).ready(function() {
    
    Date.prototype.customFormat = function(formatString) {
        var YYYY, YY, MMMM, MMM, MM, M, DDDD, DDD, DD, D, hhhh, hhh, hh, h, mm, m, ss, s, ampm, AMPM, dMod, th;
        var dateObject = this;
        YY = ((YYYY = dateObject.getFullYear()) + "").slice(-2);
        MM = (M = dateObject.getMonth() + 1) < 10 ? ('0' + M) : M;
        MMM = (MMMM = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"][M - 1]).substring(0, 3);
        DD = (D = dateObject.getDate()) < 10 ? ('0' + D) : D;
        DDD = (DDDD = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"][dateObject.getDay()]).substring(0, 3);
        th = (D >= 10 && D <= 20) ? 'th' : ((dMod = D % 10) == 1) ? 'st' : (dMod == 2) ? 'nd' : (dMod == 3) ? 'rd' : 'th';
        formatString = formatString.replace("#YYYY#", YYYY).replace("#YY#", YY).replace("#MMMM#", MMMM).replace("#MMM#", MMM).replace("#MM#", MM).replace("#M#", M).replace("#DDDD#", DDDD).replace("#DDD#", DDD).replace("#DD#", DD).replace("#D#", D).replace("#th#", th);

        h = (hhh = dateObject.getHours());
        if (h == 0) h = 24;
        if (h > 12) h -= 12;
        hh = h < 10 ? ('0' + h) : h;
        hhhh = hhh < 10 ? ('0' + hhh) : hhh;
        AMPM = (ampm = hhh < 12 ? 'am' : 'pm').toUpperCase();
        mm = (m = dateObject.getMinutes()) < 10 ? ('0' + m) : m;
        ss = (s = dateObject.getSeconds()) < 10 ? ('0' + s) : s;
        return formatString.replace("#hhhh#", hhhh).replace("#hhh#", hhh).replace("#hh#", hh).replace("#h#", h).replace("#mm#", mm).replace("#m#", m).replace("#ss#", ss).replace("#s#", s).replace("#ampm#", ampm).replace("#AMPM#", AMPM);
    }

    function number(num) {
    if(num!==undefined&&num!==''){
        num=num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        }
        return num;
    }


    $('body').on('click', '.login100-form-btn', function() {

        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('#mobile').val();
        var ticketCode = $('#ticketCode').val();
        var companyId = $("base").attr("id");
        if (ticketCode !== '') {
            if (mobile !== '') {
                if (vnf_regex.test(mobile) == false) {
                    alert('Số điện thoại của bạn không đúng định dạng!');
                } else {
                    $.ajax({
                        type: 'POST',
                        url: 'https://ticket-new-dot-dobody-anvui.appspot.com/ticket/check',
                        dataType: "json",
                        async: true,
                        data: JSON.stringify({ companyId: companyId, phoneNumber: mobile, ticketCode: ticketCode }),
                        success: function(data) {

                            console.log();

                            if (data.results.data.length > 0) {

                                $("#TicketInfomation").show();
                                $("#formCheck").hide();


                                $('.ticket-info-code').text(data.results.data[0].ticketCode);
                                $('#fullname').text(data.results.data[0].fullName);
                                $('#sdt').text(data.results.data[0].phoneNumber);
                                $('#sdt').text(data.results.data[0].phoneNumber);
                                $('#email').text(data.results.data[0].email);
                                $('#brand').text(data.results.data[0].company.name);
                                $('#tdname').text(data.results.data[0].routeInfo.name);
                                $('#pointUp').text(data.results.data[0].pointUp.name);
                                $('#PointDown').text(data.results.data[0].pointDown.name);
                                $('#numberPlate').text(data.results.data[0].vehicle.numberPlate);
                                $('#price').text(number(data.results.data[0].agencyPrice));
                                $('#gioKh').text(new Date(data.results.data[0].getInTimePlan - 25200000).customFormat("#hhh#:#mm# - #DD#/#MM#/#YYYY# "));
                            } else {
                                alert('Vé bạn check không tồn tại, vui lòng thử lại');
                            }



                        },
                        error: function() {
                            alert('Vé bạn check không tồn tại, vui lòng thử lại');
                        }
                    });
                }
            } else {
                alert('Bạn chưa điền số điện thoại!');
            }
        } else {
            alert('Bạn chưa điền mã vé!');
        }

    });

    $("#click-cancel").click(function(){
        alert('Bạn vui lòng liên hệ hotline: '+hotline+' để được hủy vé!');
    })

    var now = new Date;
    console.log(now.customFormat("#hh#:#mm #DD#/#MM#/#YYYY# "));




});
</script>
<style type="text/css">
.dctt {
    font-size: 24px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: 0.12px;
    text-align: center;
    color: #232731;
}

.ticket-info-code {
    color: #e62020
}

.right-pc {
    font-size: 14px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: 2.33;
    letter-spacing: 0.09px;
    color: #232731;
}

.br-header,
.page-footer,
#banner_main,
#main_menu,
.header-wrap,
.show-top {
    display: none !important;
}

p {
    font-size: 14px;
    line-height: 2.33 !important;
    color: #000 !important;
    margin: 0px;
}


/*//////////////////////////////////////////////////////////////////
[ FONT ]*/




/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body,
html {
    height: 100%;
}

/*---------------------------------------------*/
a {
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
}

a:focus {
    outline: none !important;
}

a:hover {
    text-decoration: none;
    color: #fff;
}

/*---------------------------------------------*/
h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0px;
}

p {

    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
}

ul,
li {
    margin: 0px;
    list-style-type: none;
}


/*---------------------------------------------*/
input {
    outline: none;
    border: none;
}

textarea {
    outline: none;
    border: none;
}

textarea:focus,
input:focus {
    border-color: transparent !important;
}

input:focus::-webkit-input-placeholder {
    color: transparent;
}

input:focus:-moz-placeholder {
    color: transparent;
}

input:focus::-moz-placeholder {
    color: transparent;
}

input:focus:-ms-input-placeholder {
    color: transparent;
}

textarea:focus::-webkit-input-placeholder {
    color: transparent;
}

textarea:focus:-moz-placeholder {
    color: transparent;
}

textarea:focus::-moz-placeholder {
    color: transparent;
}

textarea:focus:-ms-input-placeholder {
    color: transparent;
}

input::-webkit-input-placeholder {
    color: #999999;
}

input:-moz-placeholder {
    color: #999999;
}

input::-moz-placeholder {
    color: #999999;
}

input:-ms-input-placeholder {
    color: #999999;
}

textarea::-webkit-input-placeholder {
    color: #999999;
}

textarea:-moz-placeholder {
    color: #999999;
}

textarea::-moz-placeholder {
    color: #999999;
}

textarea:-ms-input-placeholder {
    color: #999999;
}


label {
    display: block;
    margin: 0;
}

/*---------------------------------------------*/
button {
    outline: none !important;
    border: none;
    background: transparent;
}

button:hover {
    cursor: pointer;
}

iframe {
    border: none !important;
}

/*//////////////////////////////////////////////////////////////////
[ utility ]*/

/*==================================================================
[ Text ]*/
.txt1 {
    font-size: 13px;
    line-height: 1.4;
    color: #cccccc;
}



/*//////////////////////////////////////////////////////////////////
[ login ]*/
.limiter {
    width: 100%;
    margin: 0 auto;
}

.container-login100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;

    background: #2575fc;
    background: -webkit-linear-gradient(left, #6a11cb, #2575fc);
    background: -o-linear-gradient(left, #6a11cb, #2575fc);
    background: -moz-linear-gradient(left, #6a11cb, #2575fc);
    background: linear-gradient(left, #6a11cb, #2575fc);

}

.wrap-login100 {
    width: 360px;
}


/*==================================================================
[ Form ]*/

.login100-form {
    width: 100%;
    background-color: transparent;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
}

.login100-form-title {
    width: 100%;
    display: block;
    font-size: 26px;
    color: #fefefe;
    line-height: 1.2;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 20px;
}



/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-end;
    width: 50%;
    height: 75px;
    position: relative;
    border: 1px solid #e0e0e0;
    border-bottom: none;
    background-color: #fff;
}

.wrap-input100.rs1 {
    border-top-left-radius: 12px;
    border-right: none;
}

.wrap-input100.rs2 {
    border-top-right-radius: 12px;
}

.label-input100 {
    font-size: 15px;
    color: #555555;
    line-height: 1.2;

    display: block;
    position: absolute;
    pointer-events: none;
    width: 100%;
    padding-left: 30px;
    left: 0;
    top: 28px;

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.input100 {
    font-size: 15px;
    color: #555555;
    line-height: 1.2;

    display: block;
    width: 100%;
    background: transparent;
    padding: 0 30px;
}

input.input100 {
    height: 100%;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}


.input100:focus {
    height: 55px;
}

.input100:focus+.label-input100 {
    top: 10px;
    font-size: 13px;
    color: #111111;
}

.has-val {
    height: 55px !important;
}

.has-val+.label-input100 {
    top: 10px;
    font-size: 13px;
    color: #111111;
}



/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.login100-form-btn {
    font-size: 15px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;

    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 70px;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    overflow: hidden;
    background: #111111;

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    position: relative;
    z-index: 1;
}

.login100-form-btn::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    opacity: 0;

    background: #2575fc;
    background: -webkit-linear-gradient(right, #6a11cb, #2575fc);
    background: -o-linear-gradient(right, #6a11cb, #2575fc);
    background: -moz-linear-gradient(right, #6a11cb, #2575fc);
    background: linear-gradient(right, #6a11cb, #2575fc);

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.login100-form-btn:hover {
    background-color: transparent;
}

.login100-form-btn:hover:before {
    opacity: 1;
}



/*------------------------------------------------------------------
[ Responsive ]*/


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
    position: relative;
}

.alert-validate::before {
    content: attr(data-validate);
    position: absolute;
    z-index: 100;
    max-width: 70%;
    background-color: #fff;
    border: 1px solid #c80000;
    border-radius: 2px;
    padding: 4px 25px 4px 10px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 12px;
    pointer-events: none;

    color: #c80000;
    font-size: 13px;
    line-height: 1.4;
    text-align: left;

    visibility: hidden;
    opacity: 0;

    -webkit-transition: opacity 0.4s;
    -o-transition: opacity 0.4s;
    -moz-transition: opacity 0.4s;
    transition: opacity 0.4s;
}

.alert-validate::after {
    content: "\f12a";
    font-family: FontAwesome;
    display: block;
    position: absolute;
    z-index: 110;
    color: #c80000;
    font-size: 16px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 18px;
}

.alert-validate:hover:before {
    visibility: visible;
    opacity: 1;
}

.content-d {
    border-radius: 12px;
    background: #fff;
    width: 100%;
    padding: 15px;
}

@media (max-width: 992px) {
    .alert-validate::before {
        visibility: visible;
        opacity: 1;
    }
}



/*//////////////////////////////////////////////////////////////////
[ Responsive ]*/
@media (max-width: 576px) {
    .wrap-input100 {
        width: 100%;
    }

    .wrap-input100.rs1 {
        border-top-right-radius: 12px;
        border-right: 1px solid #e0e0e0;
    }

    .wrap-input100.rs2 {
        border-top-right-radius: 0px;
    }
}
</style>