<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/31//datve/index.php
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

#roundtrip {
    display: none;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

.main-bg-vn.container-fluid.pr {
    display: none;
}

.none-click .giochay {
    background: #f44336;
}

.activeDxb .giochay {
    background: #686868;
}


</style>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/styledv2.css?v=5.1">
<style type="text/css">
.col-2 {
    width: 20%;
    float: left;
}

.wp-datve-dz {
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

.bannernews {
    display: none;
}
</style>
<div id="loading" style="display: none;">
    <div class="loader"></div>
</div>
<div class="wp-ttch">
    <div class="container">
        <div class="trip">
            <strong class="start"></strong>
            <span class="scb-to"> Tới: </span>
            <strong class="end"></strong>
        </div>
        <div class="oneway-info">
            <span class="fdate-highlight">
                Ngày đi: <strong class="startDate"></strong>
            </span>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id="select-trip">
            <div id="trip-oneway" style="display: none">
                <div class="col-md-12">
                    <div class="list-trip">
                        <div id="list-oneway">
                        </div>
                        <div class="col-md-12" style="padding: 10px 0px; float: left; width: 100%">
                            <div id="select-seat-oneway" style="display: none;">
                                <div class="col-md-8 col-md-offset-2" id="tt-chonghe">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tt-chuyenchon">
                                                <div class="trip">
                                                    <h3>
                                                        <strong class="start"></strong>
                                                        <span class="scb-to"> Tới: </span>
                                                        <strong class="end"></strong>
                                                    </h3>
                                                    <span class="fdate-highlight">
                                                        Ngày đi: <strong class="startDate"></strong> --- <strong class="giochayd"></strong> 
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="select-seat">
                                                <ul class="chuthich">
                                                    <li>
                                                        <div class="ghetrong"></div> Ghế trống
                                                    </li>
                                                    <li>
                                                        <div class="ghedachon"></div> Ghế đã chọn
                                                    </li>
                                                    <li>
                                                        <div class="ghedaban"></div> Ghế đã bán
                                                    </li>
                                                </ul>
                                                <div id="seatMapOneWay" class="row"></div>
                                            </div>
                                            <div class="box-tt">
                                                <div class="soghe">Số ghế: <span id="sgd"></span></div>
                                                <div class="subtotal">Tổng tiền lượt đi<strong id="totalMoneyOneway">0 VND</strong></div>

                                            </div>
                                            <div class="wp-btdv">
                                                <div id="datvebutton">Đặt Chỗ</div>
                                            </div>

                                            <div class="select-seat" id="chooseRound" style="display: none">
                                                <h3 class="trip-info">Chọn ghế chuyến về</h3>
                                                <p style="padding-left: 15px; padding-bottom: 20px; font-style: italic">* Trẻ em vẫn được tính chỗ và giá vé bằng 100% vé người lớn. </p>
                                                <ul class="chuthich">
                                                    <li>
                                                        <div class="ghetrong"></div> Ghế trống
                                                    </li>
                                                    <li>
                                                        <div class="ghedachon"></div> Ghế đã chọn
                                                    </li>
                                                    <li>
                                                        <div class="ghedaban"></div> Ghế đã bán
                                                    </li>
                                                    <li>
                                                        <div class="ghetreem"></div> Ghế trẻ em
                                                    </li>
                                                </ul>
                                                <div id="seatMapRound" class="row"></div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-2" id="tt-kh" style="padding: 0px; display: none;">
                                    <div class="col-md-6">
                                            <div class="select-seat">
                                                <h3 class="trip-info">Thông tin hành khách</h3>
                                                <p style="padding-left: 15px; padding-bottom: 20px;">Quý khách vui lòng nhập thông tin chính xác </p>
                                                <div class="row form-customer">
                                                    <div class="col-md-12"><label for="fullname" style="display: none;">Họ và tên (<span class="required">*</span>)</label><input type="text" placeholder="Họ và tên" class="form-control" name="fullname" id="fullname" autofocus required></div>
                                                    <div class="col-md-12"><label for="phoneNumber" style="display: none;">Số điện thoại (<span class="required">*</span>)</label><input type="text" placeholder="Số điện thoại" class="form-control" name="phoneNumber" id="phoneNumber" required></div>
                                                    <div class="col-md-12" style="display: none;"><label for="phoneNumber" style="display: none;">Email</label><input type="email" placeholder="Email" class="form-control" name="email" id="email"></div>
                                                    <div class="col-md-12"><label for="phoneNumber" style="display: none;">Ghi chú</label><textarea placeholder="Các yêu cầu đặc biệt không thể được đảm bảo nhưng nhà xe sẽ cố gắng hết sức để đáp ứng yêu cầu của bạn" name="note" class="form-control" id="note" rows="3"></textarea></div>
                                                    <div class="col-md-12"><input autocomplete="off" class="col-md-5 form-control" style="width: 75%" id="promotionCode" style="width: auto;" type="text" placeholder="Mã khuyến mại"><button type="button" class="btn btn-info col-md-3" id="checkPromotion">Kiểm tra</button></div>
                                                </div>
                                                <div class="detail-customer-info">
                                                    <label class="container-checkbox" for="transshipment" style="display:none">Đón tận nơi - Trả tận nơi';
                                                        <input type="checkbox" id="transshipment">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="content-boxd">
                                                        <div class="tab-content">
                                                            <div id="fromstart" class="tab-pane fade active in">
                                                                <div class="transshipmentOneway">
                                                                    <div class="">
                                                                        <label for="transshipmentInPointOneway">Nhập điểm đón </label>
                                                                        <input class="form-control" name="pickUpAddress" placeholder="Nhập điểm đón" id="pickUpAddress" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="toend" class="tab-pane active in">
                                                                <div class="">
                                                                    <label for="transshipmentOffPointOneway">Nhập điểm trả </label>
                                                                    <input class="form-control" name="dropOffAddress" placeholder="Nhập điểm trả" id="dropOffAddress" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-6 payment-info">
                                    <div class="col-md-12 customer-info">
                                        <h4 class="trip-info ticket-detail">Chi tiết giá vé</h4>
                                        <div class="total-title">
                                            <h4>Lượt đi</h4>
                                            <div class="total-inside row">
                                                <div class="col-md-12" style="display: none;">Giá ghế: <span class="price" id="adultMoneyOneway">0 VND</span> <br></div>
                                                <div class="col-md-12" style="display:none;">Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br></div>
                                            </div>
                                            
                                            <div class="col-md-12" style="display:none;">Phí trung chuyển: <span class="price" id="transshipmentPriceOneway">0 VND</span> <br></div>
                                        </div>
                                        <div class="total-title" id="total-round" style="display:none;">
                                            <h4>Lượt về</h4>
                                            <div class="total-inside row">
                                                <div class="col-md-12">Ghế đã chọn: <span class="seatlist" id="gheve"></span> <br></div>
                                                <div class="col-md-12">Giá người lớn: <span class="price" id="adultMoneyReturn">0 VND</span> <br></div>
                                                <div class="col-md-12">Giá trẻ em: <span class="price" id="babyMoneyReturn">0 VND</span> <br></div>
                                            </div>
                                            <div class="subtotal">Tổng tiền lượt về<br><strong id="totalMoneyReturn">0 VND</strong></div>
                                        </div>
                                        <div id="promotion" style="display: none">
                                            <h4>Khuyến mãi</h4>
                                            <div class="promotion-div row">
                                                <div class="col-md-12">Giảm giá: <span class="price" id="promotionPrice"></span></div>
                                            </div>
                                        </div>
                                        <div class="subtotal" style="width: 100%">Tổng tiền<strong id="totalMoney" style="float: right;">0 VND</strong></div>
                                    </div>
                                    <div class="select-seat" id="select-seat-round" style="display: none">
                                        <h3 class="trip-info">Thông tin chuyến về</h3>
                                        <ul>
                                            <li><strong>Chuyến về</strong></li>
                                            <li>Ngày đi: <strong class="startDateReturn"></strong></li>
                                            <li>Tuyến đường: <strong class="routeNameReturn"></strong></li>
                                            <li>Giờ xuất phát: <strong class="intimeReturn"></strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 payment">
                                        <div class="col-md-12 payment-dialog">
                                            <h3 class="trip-info">Thanh toán</h3>
                                            <div class="payment-form">
                                                <div class="radio">
                                                    <!-- <label class="radio">Thanh toán bằng thẻ nội địa<input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="1"><span class="checkround"></span></label> -->
                                                    

                                                    <label class="radio">Thanh toán qua OnePay<input type="radio"  class="paymenttype" name="paymenttype" value="2"><span class="checkround"></span></label>


                                                    <!-- <label class="radio" id="radiochuyenkhoan" style="display: none">Chuyển khoản <input type="radio" class="paymenttype" name="paymenttype" value="6"><span class="checkround"></span></label> -->
                                                </div>
                                                <center><button type="button" id="hoanthanhbtn" class="btn" onclick="hoanthanhbtndatve(this)">Xác nhận đặt vé </button><button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">Thông tin chuyển khoản</button></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-btdv">
                                    <div id="backdatve" style="display: inline-block;padding: 10px 60px;background: #239b40;font-weight: bold;color: #fff;margin-top: 15px;">Chọn lại</div>
                                </div>
                                </div>
                            </div>
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
                        <div class="">
                            <div id="list-roundway">
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <div id="next-step" class="scrollDown" style="display: none">
                <button type="button" class="btn" id="select-seat">Tiếp tục</button>
            </div>
        </div>
    </div>
</div>
<!--Modal-->
<div class="modal fade" id="chuyenkhoan" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Thanh toán</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="payment-form">
                    <div class="radio">
                        <label class="radio">Thanh toán bằng thẻ nội địa
                            <input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="1">
                            <span class="checkround"></span>
                        </label>
                        <label class="radio">Thanh toán tại quầy
                            <input type="radio" class="paymenttype" name="paymenttype" value="5">
                            <span class="checkround"></span>
                        </label>
                        <label class="radio">Thanh toán QR CODE
                            <input type="radio" class="paymenttype" name="paymenttype" value="7">
                            <span class="checkround"></span>
                        </label>
                    </div>
                    <center>
                        <button type="button" id="hoanthanhbtn" onclick="hoanthanhbtndatve(this)" class="btn">Xác nhận đặt
                            vé
                        </button>
                    </center>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="bankcode" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Chọn ngân hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="bankd">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="hoanthanhQrCode" data-dismiss="modal">Tiếp theo</button>
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
<?php if($data['content']['ss']) { ?>
<div class="positionfix">
    <div class="container">
        <div class="payment-info">
            <div class="detail-review" style="min-height: 70px;">
                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-4  detail-total">
                    <div class="col-md-12 col-xs-12" style="min-height: 25px;padding: 0;">
                        <span style="float:left">
                            Ghế đi:
                        </span>
                        <b style="float:right"><span class="seat-template-seat-code" id="ghedi"></span></b>
                    </div>
                    <div class="col-md-12 col-xs-12" style="padding:0px;">
                        <span style="float:left">Tổng tiền lượt đi:</span>
                        <div style="float:right">
                            <span class="seat-template-old-total-fare" style="font-size: 14px; text-decoration: line-through; margin-right: 10px;"></span>
                            <h4 class="seat-template-total-fare amount" id="totalMoneyOneway" style="font-size:20px;color:red;"></h4><small style="vertical-align: top; text-decoration: underline;color:red !important;" class="unit-price-small"></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 detail-review-route">
                    <div class="col-md-12 col-xs-12" style="min-height: 25px;padding: 0;">
                        <span style="float:left">
                            Ghế về:
                        </span>
                        <b style="float:right"><span class="seat-template-seat-code" id="gheve"></span></b>
                    </div>
                    <div class="col-md-12 col-xs-12" style="padding:0px;">
                        <span style="float:left">Tổng tiền lượt về:</span>
                        <div style="float:right">
                            <span class="seat-template-old-total-fare" style="font-size: 14px; text-decoration: line-through; margin-right: 10px;"></span>
                            <h4 class="seat-template-total-fare amount" id="totalMoneyReturn" style="font-size:20px;color:red;"></h4><small style="vertical-align: top; text-decoration: underline;color:red !important;" class="unit-price-small"></small>
                        </div>
                    </div>
                </div>
                <div class="column-butom col-md-4 col-lg-4 col-xs-12">
                    <div class="col-md-12 col-xs-12" style="padding:0px;">
                        <span style="float:left">Tổng tiền:</span>
                        <div style="float:right">
                            <span class="seat-template-old-total-fare" style="font-size: 14px; text-decoration: line-through; margin-right: 10px;"></span>
                            <h4 class="seat-template-total-fare amount" id="totalMoney" style="font-size:20px;color:red;"></h4><small style="vertical-align: top; text-decoration: underline;color:red !important;" class="unit-price-small"></small>
                        </div>
                    </div>
                    <div class="form-group mb0">
                        <div class="hidden-lg hidden-md hidden-sm fix-review-price-mobi">
                            <div class="btn-vxr-back">
                                Quay lại
                            </div>
                            <button type="button" class="cont-btn btn-vxr-continue-no-seat" data-toggle="modal" data-target="#chuyenkhoan">
                                Tiếp tục <i class="glyphicon glyphicon-chevron-right f14"></i>
                            </button>
                        </div>
                        <div class="col-md-12 col-sm-12 cont-container text-center hidden-xs">
                            <button type="button" class="cont-btn btn btn-vxr-lg btn-vxr-lg-action" data-toggle="modal" data-target="#chuyenkhoan">
                                Tiếp tục <i class="glyphicon glyphicon-chevron-right f14"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 customer-info" style="display: none;">
                <div class="total-title col-md-4">
                    <h4>Lượt đi</h4>
                    <div class="total-inside row">
                        <div class="col-md-12">
                            Ghế đã chọn: <span class="seatlist" id="ghedi"></span> <br>
                        </div>
                        <div class="col-md-12">
                            Giá người lớn: <span class="price" id="adultMoneyOneway">0 VND</span> <br>
                        </div>
                        <div class="col-md-12">
                            Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br>
                        </div>
                    </div>
                    <div class="subtotal">
                        Tổng tiền lượt đi<br>
                        <strong id="totalMoneyOneway">0 VND</strong>
                    </div>
                </div>
                <div class="total-title" id="total-round" style="display:none;">
                    <h4>Lượt về</h4>
                    <div class="total-inside row">
                        <div class="col-md-12">
                            Ghế đã chọn: <span class="seatlist" id="gheve"></span> <br>
                        </div>
                        <div class="col-md-12">
                            Giá người lớn: <span class="price" id="adultMoneyReturn">0 VND</span> <br>
                        </div>
                        <div class="col-md-12">
                            Giá trẻ em: <span class="price" id="babyMoneyReturn">0 VND</span> <br>
                        </div>
                    </div>
                    <div class="subtotal">
                        Tổng tiền lượt về<br>
                        <strong id="totalMoneyReturn">0 VND</strong>
                    </div>
                </div>
                <div id="promotion" style="display: none">
                    <h4>Khuyến mãi</h4>
                    <div class="promotion-div row">
                        <div class="col-md-12">
                            Giảm giá: <span class="price" id="promotionPrice"></span>
                        </div>
                    </div>
                </div>
                <div id="total">
                    Tổng tiền<br>
                    <strong id="totalMoney">0 VND</strong>
                </div>
            </div>
            <div class="col-md-12 payment" style="display: none;">
                <div class="col-md-12 payment-dialog">
                    <h3>Thanh toán</h3>
                    <div class="payment-form">
                        <div class="radio">
                            <label class="radio">Thanh toán bằng thẻ nội địa
                                <input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="1">
                                <span class="checkround"></span>
                            </label>
                            <!--<label class="radio">Thanh toán bằng thẻ quốc tế-->
                            <!--<input type="radio" class="paymenttype" name="paymenttype" value="2">-->
                            <!--<span class="checkround"></span>-->
                            <!--</label>-->
                            <label class="radio">Thanh toán tại quầy
                                <input type="radio" class="paymenttype" name="paymenttype" value="5">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio" id="radiochuyenkhoan" style="display: none">Chuyển khoản
                                <input type="radio" class="paymenttype" name="paymenttype" value="6">
                                <span class="checkround"></span>
                            </label>
                            <div class="g-recaptcha" data-sitekey="6LdcaVoUAAAAAN8EtqCJCddHLyPxugIJlc2e58fd"></div>
                        </div>
                        <center>
                            <button type="button" id="hoanthanhbtn" class="btn">Xác nhận đặt
                                vé
                            </button>
                            <button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">
                                Thông tin chuyển khoản
                            </button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<script type="text/javascript">
<?php if($data['content']['timeBookHolder']) { ?>
var timeBookHolder = { <?=$data['content']['timeBookHolder']?> };
<?php } else { ?>
var timeBookHolder = '';
<?php } ?>
</script>
<script src="/themes/14/statics/js/anvui_trungthanh.js?v=1.<?php echo time() ?>123"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    var routeId = getParameterByName('routeIdd');

    if(routeId != ''){
        $.ajax({
            type: "POST",
            url: "https://www.anvui.vn/pointNX",
            data: {
                routeId: routeId
            },
            success: function (result) {

                // routeBackId = result.routeBack;

                //lấy thông tin điểm đầu
                
                $('#startPoint').val(result.a1[0].pointName).change();
                $("#startId").val(result.a1[0].pointId)

                
                $('#endPoint').val(result.a2[0].pointName).change();
                $("#endId").val(result.a2[0].pointId)



            }
        });
    }

    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $("#booking-form").offset().top
        },1000);

        $('.select2').select2({
            dropdownParent: $('#choosePoint'),
            width: '100%',
            height: '40px'
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
.select-seat {
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

.positionfix {
    position: fixed;
    width: 100%;
    bottom: 0px;
    background: #fff;
    z-index: 999999;
    box-shadow: 0 1px 3px #c3c3c3;
}

.btn-vxr-lg {
    display: inline-block;
    position: relative;
    padding: 0px;
    color: #684d18;
    font-weight: bold;
    font-size: 14px;
    /* background-repeat: no-repeat; */
    background-image: -webkit-radial-gradient(circle at 0 50%, rgba(255, 255, 224, 0) .4em, #ffffe0 .5em), -webkit-radial-gradient(circle at 100% 50%, rgba(255, 255, 224, 0) .4em, #ffffe0 .5em);
    background-image: -webkit-radial-gradient(0 50% circle, rgba(255, 255, 224, 0) .4em, #ffffe0 .5em), -webkit-radial-gradient(100% 50% circle, rgba(255, 255, 224, 0) .4em, #ffffe0 .5em);
    /* background-image: radial-gradient(circle at 0 50%,rgba(255,255,224,0) .4em,#f9af00 .5em),radial-gradient(circle at 100% 50%,rgba(255,255,224,0) .4em,#f9af00 .5em); */
    background-position: top left, top right;
    background-color: transparent !important;
    border: none;
    box-shadow: none;
    border-radius: 3px !important;
    border-radius: 3px;
    border: 1px solid;
}

.giochay {
    background: #249b40;
    padding: 10px;
    color: #fff;
}

.detail-review {
    height: auto;
    float: left;
    width: 100%;
    background: #f7f7f7;
}

.detail-total {
    padding-top: 10px;
}

#main h4 {
    font-size: 22px;
    margin-top: 0;
    font-weight: bold;
    color: #1867aa;
    line-height: 25px;
}

.seat-template-total-fare {
    display: inline-block !important;
    margin-top: 0px;
}

.detail-review-route {
    border: 1px solid #eee !important;
    padding: 10px;
    height: 100%;
}

.column-butom {
    border: 1px solid #eee !important;
    padding-top: 10px;
}

.item-bankd p.name {
    display: none;
}

.item-bankd {
    height: 55px;
    text-align: center;
    border: 1px solid #ddd;
}

div#bankd>div {
    padding: 5px;
}

.item-bankd img {
    max-height: 40px;
}

#bankcode .modal-body {
    float: left;
}

.pull-left.comp-name-container h6 {
    margin-top: 0px;
    font-size: 13px;
    font-weight: bold;
    line-height: 20px;
}

.col-md-12.payment-dialog {
    padding: 0px;
}

.checkbox+.checkbox,
.radio+.radio {
    margin-top: 10px !important;
}

.total-title .price {
    float: right;
}
</style>