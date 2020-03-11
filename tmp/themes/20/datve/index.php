<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/20//datve/index.php
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
    #roundtrip{
        display: none;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .main-bg-vn.container-fluid.pr{
        display: none;
    }
    .trip-active {
    background: #83d6f5 !important;
    border: 1px solid #c00;
}
</style>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/styledv2.css?v=5.1">

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
                    <div class="list-trip">
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
                        <div class="">
                            <div id="list-roundway">
                            </div>
                        </div>
                    </div>

                </div>
                </div>
                
                
            </div>
            <div id="next-step" class="scrollDown" style="display: block !important;">
                    <button type="button" class="btn" id="select-seat">Tiếp tục</button>
                    <button type="button" class="btn" id="back">Chọn lại</button>
                </div>
            <div id="ttthanhtoan" style="display: none;">
                <div id="select-seat-oneway">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="select-seat">
                                    <h3 class="trip-info">Chọn ghế chuyến đi</h3>
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
                                    <div id="seatMapOneWay" class="row"></div>
                                </div>
                                <div class="select-seat" id="chooseRound" style="display: none">
                                    <h3 class="trip-info">Chọn ghế chuyến về</h3>
                                    
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
                            <div class="col-md-6">
                                <div class="select-seat">
                                    <h3 class="trip-info">Thông tin hành khách</h3>
                                    <p style="padding-left: 15px; padding-bottom: 20px;">Quý khách vui lòng nhập thông tin chính xác </p>
                                    
                                    <div class="row form-customer">
                                        <div class="col-md-12"><label for="fullname" style="display: none;">Họ và tên (<span class="required">*</span>)</label><input type="text" placeholder="Họ và tên" class="form-control" name="fullname" id="fullname" autofocus required></div>
                                        <div class="col-md-12"><label for="phoneNumber" style="display: none;">Số điện thoại (<span class="required">*</span>)</label><input type="text" placeholder="Số điện thoại" class="form-control" name="phoneNumber" id="phoneNumber" required></div>
                                        <div class="col-md-12"><label for="phoneNumber" style="display: none;">Email</label><input type="email" placeholder="Email" class="form-control" name="email" id="email"></div>
                                        <div class="col-md-12"><label for="phoneNumber" style="display: none;">Ghi chú</label><textarea placeholder="Các yêu cầu đặc biệt không thể được đảm bảo nhưng nhà xe sẽ cố gắng hết sức để đáp ứng yêu cầu của bạn" name="note" class="form-control" id="note" rows="3"></textarea></div>
                                        <div class="col-md-12"><input autocomplete="off" class="col-md-5 form-control" id="promotionCode" style="width: auto;" type="text" placeholder="Mã khuyến mại"><button type="button" class="btn btn-info col-md-5" id="checkPromotion" onclick="checkPromotion()">Kiểm tra</button></div>
                                    </div>
                                    <label class="" for="transshipment">
                                        <input type="checkbox" id="checkDk" value="1">
                                        Tôi đồng ý với điều khoản, dịch vụ về <a href="https://interbuslines.com/chinh-sach-hoan-huy-cua-interbus-lines-1-2-17377.html" target="_blank">chính sách hoãn, hủy của Interbuslines</a>
                                    </label>
                                    <div id="toend" class="tab-pane fade">
                                        <div class="">
                                            <label for="transshipmentOffPointOneway">Trung chuyển trả chuyến về</label>
                                            <select name="transshipmentOffPointOneway" class="form-control transshipment" disabled id="transshipmentOffPointOneway">
                                                <option data-address="" data-lat="" data-long="" data-price="0" value="">Chọn điểm trả</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 payment-info">
                        <div class="col-md-12 customer-info">
                            <h4 class="trip-info ticket-detail">Chi tiết giá vé</h4>
                            <div class="total-title">
                                <h4>Lượt đi</h4>
                                <div class="total-inside row">
                                    <div class="col-md-12">Vị trí chọn: <span class="price" id="ghedi"></div>
                                    <div class="col-md-12">Giá người lớn: <span class="price" id="adultMoneyOneway">0 VND</span> <br></div>
                                    <div class="col-md-12">Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br></div>
                                </div>
                                <div class="subtotal">Tổng tiền lượt đi<strong id="totalMoneyOneway">0 VND</strong></div>
                                <div class="col-md-12" style="padding:0px;">Phí trung chuyển: <span class="price" id="transshipmentPriceOneway">0 VND</span> <br></div>
                            </div>
                            <div class="total-title" id="total-round" style="display:none;">
                                <h4>Lượt về</h4>
                                <div class="total-inside row">
                                    <div class="col-md-12">Ghế đã chọn: <span class="seatlist" id="gheve" style="float: right;
    width: initial;"></span> <br></div>
                                    <div class="col-md-12">Giá người lớn: <span class="price" id="adultMoneyReturn">0 VND</span> <br></div>
                                    <div class="col-md-12">Giá trẻ em: <span class="price" id="babyMoneyReturn">0 VND</span> <br></div>
                                </div>
                                <div class="subtotal">Tổng tiền lượt về<br><strong id="totalMoneyReturn">0 VND</strong></div>
                            </div>
                            <div id="promotion" style="display: none">
                                <h4>Khuyến mãi</h4>
                                <div class="promotion-div row">
                                    <div class="col-md-12">Giảm giá: <span class="price" id="promotionPrice" style="color:#000;"></span></div>
                                </div>
                            </div>
                            <div class="subtotal">Tổng tiền <strong id="totalMoney">0 VND</strong></div>
                        </div>
                        
                        <div class="col-md-12 payment">
                            <div class="col-md-12 payment-dialog">
                                <h3 class="trip-info">Thanh toán</h3>
                                <div class="payment-form">
                                    <div class="radio">
                                        <div>
                                            <label class="radio">Online qua cổng MEGAPAY (ATM Card/Visa/Master/JCB..) <img src="/themes/14/statics/logomgp.jpg" style="width: 80px;"> <input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="8"><span class="checkround"></span></label>
                                        </div>
                                        <label class="radio">Thanh toán bằng thẻ nội địa<input type="radio" class="paymenttype" name="paymenttype" value="1"><span class="checkround"></span></label>
                                        <label class="radio">Thanh toán QR CODE<input type="radio" class="paymenttype" name="paymenttype" value="7"><span class="checkround"></span></label>
                                        <label class="radio">Thanh toán bằng thẻ quốc tế <input type="radio" class="paymenttype" name="paymenttype" value="2"><span class="checkround"></span></label>
                                        <label class="radio" id="radiochuyenkhoan" style="display: none">Chuyển khoản <input type="radio" class="paymenttype" name="paymenttype" value="6"><span class="checkround"></span></label>
                                    </div>
                                    <center><button type="button" id="hoanthanhbtn" class="btn" onclick="hoanthanhbtndatve(this)">Xác nhận đặt vé </button><button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">Thông tin chuyển khoản</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
    </div>
</div>

<!--Modal-->
<!-- <div class="modal fade" id="chuyenkhoan" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
</div> -->


<div class="modal fade" id="chuyenkhoan" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="center-top-header">
                    <div class="col-md-3">
                        <img src="http://thinhphatlimousine.vn/themes/14/statics/imgs/bus-check.svg">
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
                            <p>Khi chuyển khoản anh chi vui lòng ghi nội dung số điện thoại người đặt vé giúp e. Sau khi bên em nhận được thông tin sẽ gọi lại cho anh chị để xác nhận . </p>
                            
                        </div>

                    </div>
                </div>
                <?php } ?>
                <?php if($web['anvui_id'] == 'TC0Bi1rWXg3hO6JR') { ?>
                <div class="row">
                    
                        <div class="col-md-6">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">QUÁCH THU NGA</div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">887686868</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">ACB</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds">Phú Lâm</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">QUÁCH THU NGA</div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">060155744416</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">SACOMBANK</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds">Minh Phụng</div>
                            </div>
                        </div>
                        

                    
                    <div class="col-md-12">
                        
                        <div class="ll">
                            <h3>LƯU Ý</h3>
                            <p>NỘI DUNG CHUYỂN KHOẢN: <br/><span class="ndcktd" style="color: #c00; font-weight: bold; font-size: 20px;width: 100%;float: left;text-align: center;padding: 10px 0px;"><i id="phone"></i> thanh toan ma ve <i id="ticketId"></i></span></p>
                            <p><span style="font-weight: bold; color: #000;">(*) Lưu ý:</span> Khi chuyển khoản, quý khách vui lòng nhập chính xác nội dung số điện thoại, mã vé của người đặt. Sau khi nhà xe nhận được thông tin, tổng đài viên sẽ liên hệ lại với quý khách để xác nhận. Chân thành cảm ơn sự tin tưởng và ủng hộ của quý khách.</p>
                            
                        </div>

                    </div>
                </div>
                <?php } ?>
                <?php if($web['anvui_id'] == 'TC1OHntfnujP') { ?>
                <div class="row">
                    
                        <div class="col-md-6">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">Nguyễn Thanh Tùng</div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">0611006857777</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">Vietcombank</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds"> Ba Đình</div>
                            </div>
                        </div>
                    
                    <div class="col-md-12">
                        
                        <div class="ll">
                            <h3>LƯU Ý</h3>
                            <p>NỘI DUNG CHUYỂN KHOẢN: <br/><span class="ndcktd" style="color: #c00; font-weight: bold; font-size: 20px;width: 100%;float: left;text-align: center;padding: 10px 0px;"><i id="phone"></i> thanh toan ma ve <i id="ticketId"></i></span></p>
                            <p><span style="font-weight: bold; color: #000;">(*) Lưu ý:</span> Khi chuyển khoản, quý khách vui lòng nhập chính xác nội dung số điện thoại, mã vé của người đặt. Sau khi nhà xe nhận được thông tin, tổng đài viên sẽ liên hệ lại với quý khách để xác nhận. Chân thành cảm ơn sự tin tưởng và ủng hộ của quý khách.</p>

                            <p>Quý khách vui lòng chuyển khoản vào số tài khoản sau thời gian 20 phút tính từ thời điểm này để hoàn tất thủ tục đặt vé xin cảm ơn.</p>
                            
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
                                <button type="button" class="cont-btn btn-vxr-continue-no-seat" data-toggle="modal" data-target="#chuyenkhoan" >
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
    var timeBookHolder = <?=$data['content']['timeBookHolder']?>;
    <?php } else { ?>
    var timeBookHolder = '';
    <?php } ?>
    
</script>




<?php if($web['anvui_id'] == 'TC0BO1rObet9WJXn' || $web['anvui_id'] === 'TC0A31qrgPVJBW3a' || $web['anvui_id'] == 'TC0Ah1r7aBgqH7jX') { ?>
    <script src="/themes/14/statics/js/anvui2.js?v=1.<?php echo time() ?>123"></script>
<?php } elseif($web['anvui_id'] == 'TC1OHntfnujP') { ?>
    <script src="https://interbuslines.com//themes/20/statics/js/anvui2.js?v=1.<?php echo time() ?>123"></script>
<?php } else { ?>
    <script src="/14/statics/js/anvui1.js?v=1.<?php echo time() ?>123"></script>
<?php } ?>



<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    var routeId = getParameterByName('routeIdd');
    $("#select-seat").click(function(){
        $("#ttthanhtoan").show();
        $("#select-trip").hide();
    })
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
    .positionfix {
        position: fixed;
        width: 100%;
        bottom: 0px;
        background: #fff;
        z-index: 999999;
        box-shadow: 0 1px 3px #c3c3c3;
    }
    .btn-vxr-lg {
        box-sizing: content-box;
        display: inline-block;
        position: relative;
        padding: 10px;
        color: #684d18;
        font-weight: bold;
        font-size: 14px;
        background-repeat: no-repeat;
        background-image: -webkit-radial-gradient(circle at 0 50%,rgba(255,255,224,0) .4em,#ffffe0 .5em),-webkit-radial-gradient(circle at 100% 50%,rgba(255,255,224,0) .4em,#ffffe0 .5em);
        background-image: -webkit-radial-gradient(0 50% circle,rgba(255,255,224,0) .4em,#ffffe0 .5em),-webkit-radial-gradient(100% 50% circle,rgba(255,255,224,0) .4em,#ffffe0 .5em);
        background-image: radial-gradient(circle at 0 50%,rgba(255,255,224,0) .4em,#f9af00 .5em),radial-gradient(circle at 100% 50%,rgba(255,255,224,0) .4em,#f9af00 .5em);
        background-position: top left,top right;
        background-color: transparent !important;
        border: none;
        box-shadow: none;
        border-radius: 3px !important;
        border-radius: 3px;
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
        margin-top:0px;
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
    div#bankd > div {
        padding: 5px;
    }
    .item-bankd img {
    max-height: 40px;
}
#bankcode .modal-body{
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
.checkbox+.checkbox, .radio+.radio{
    margin-top: 10px !important;
}
.total-title .price{
    float: right;
}

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
    .ticket-ac-btn {
    color: #fff;
    background: #c00;
}

.center-top-header p{
    font-size: 18px;
}
.center-top-header {
    width: 60%;
    margin: auto;
}
.dctt{
    font-weight:bold;
    font-size: 24px !important;
    margin: 9px 0px;
    margin-bottom: 10px;
}
.box-tt-ck {
    border-radius: 8px;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.1);
  border: solid 1px #d8dbe2;
  background-color: #ffffff;
  padding:10px
}
.ttck-skh{
    padding:10px
}
.ttck-skh .row{
    margin:0px
}
.ttck-skh .col-md-6{
    padding:5px
}
.ttck-skh .name-tdsd{
    float:left;
    width:45%
}
.ttck-skh p{
    font-size:16px;
}
.content-dds{
    font-weight:bold;
}
.ttck-skh .col-md-12{
    padding-left:5px;
    padding-right:5px;
}
.df-p{
    font-size: 18px;
  font-weight: 600;
  font-style: normal;
  font-stretch: normal;
  line-height: normal;
  letter-spacing: 0.06px;
  color: #464d5d;
  margin-bottom:5px
}
.tt-ck{
    color:#e62020    
}
.ttck {
    border-radius: 8px;
    background-color: #ecedf1;
    padding:15px;
    margin-bottom:15px
}
.ll{
    border-radius: 8px;
    background-color: #ecedf1;
    padding:15px;
    margin-top: 20px;
}
.ll p {
    font-size: 15px;
}
.ll h3{
    font-weight:bold;
    margin-bottom:5px !important; 
}
.jconfirm {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9 !important;
    font-family: inherit;
    overflow: hidden;
}
span.ndck-n {
    font-size: 18px;
    color: #c00;
    font-weight: bold;
}
button#close_ck {
    background: #c00;
    color: #fff;
    font-weight: bold;
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

.ticket-ac-btn {
    color: #fff;
    background: #c00 !important;
}
</style>
