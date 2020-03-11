<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/19//datve/index.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?php if($web['anvui_id'] == 'TC0A31qrgPVJBW3a') { ?>
<style>
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
    div.btn {
    background: #239a40 !important;
    width: 100%;
    }
    .activeDxb div.btn{
        background: #f17d7d !important
    }
    #list-oneway li.active div.btn {
        background: #f4ac00 !important;
    }
    #steps ul .active:after {
        background: #fff;
        border-left: 25px solid #2e9e6c !important;
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
                        <div class="row">
                            <div id="list-oneway" class="col-md-12" style="padding: 0px; float: left; width: 100%">

                            </div>
                            <div class="col-md-12" style="padding: 10px 0px; float: left; width: 100%">
                                <div id="select-seat-oneway">
                                    <div class="col-md-8">
                                    <div class="row">
                                    <div class="col-md-6">
                                    <div class="select-seat">
                                    <h3 class="trip-info">Chọn ghế chuyến đi</h3>
                                    <ul class="chuthich"><li><div class="ghetrong"></div> Ghế trống</li><li><div class="ghedachon"></div> Ghế đã chọn</li><li><div class="ghedaban"></div> Ghế đã bán</li></ul>
                                    <div id="seatMapOneWay" class="row"></div>
                                    </div>
                                    <div class="select-seat" id="chooseRound" style="display: none">
                                    <h3 class="trip-info">Chọn ghế chuyến về</h3>
                                    <p style="padding-left: 15px; padding-bottom: 20px; font-style: italic">* Trẻ em vẫn được tính chỗ và giá vé bằng 100% vé người lớn. </p>
                                    <ul class="chuthich"><li><div class="ghetrong"></div> Ghế trống</li><li><div class="ghedachon"></div> Ghế đã chọn</li><li><div class="ghedaban"></div> Ghế đã bán</li><li><div class="ghetreem"></div> Ghế trẻ em</li></ul>
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
                                    <div class="col-md-12" style="display: none;"><label for="phoneNumber" style="display: none;">Email</label><input type="email" placeholder="Email" class="form-control" name="email" id="email"></div>
                                    <div class="col-md-12"><label for="phoneNumber" style="display: none;">Ghi chú</label><textarea placeholder="Các yêu cầu đặc biệt không thể được đảm bảo nhưng nhà xe sẽ cố gắng hết sức để đáp ứng yêu cầu của bạn" name="note" class="form-control" id="note" rows="3"></textarea></div>
                                    <div class="col-md-12"><input autocomplete="off" class="col-md-5 form-control" id="promotionCode" style="width: auto;" type="text" placeholder="Mã khuyến mại"><button type="button" class="btn btn-info col-md-3" id="checkPromotion">Kiểm tra</button></div>
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
                                    <input class="form-control" name="pickUpAddress" placeholder="Nhập điểm đón" id="pickUpAddress"/>
                                    </div>
                                    </div>
                                    </div>
                                    <div id="toend" class="tab-pane active in">
                                    <div class="">
                                    <label for="transshipmentOffPointOneway">Nhập điểm trả </label>
                                    <input class="form-control" name="dropOffAddress" placeholder="Nhập điểm trả" id="dropOffAddress"/>
                                    </div>
                                    </div>
                                    </div>
                                                                    


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
                                    <div class="col-md-12">Giá ghế: <span class="price" id="adultMoneyOneway">0 VND</span> <br></div>
                                    <div class="col-md-12" style="display:none;">Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br></div>
                                    </div>
                                    <div class="subtotal">Tổng tiền lượt đi<strong id="totalMoneyOneway">0 VND</strong></div>
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
                                    <div class="promotion-div row"><div class="col-md-12">Giảm giá: <span class="price" id="promotionPrice"></span></div></div>
                                    </div>
                                    <div class="subtotal">Tổng tiền<strong id="totalMoney" style="float: right;">0 VND</strong></div>
                                    </div>

                                    <div class="select-seat" id="select-seat-round" style="display: none">           
                                    <h3 class="trip-info">Thông tin chuyến về</h3>           
                                    <ul><li><strong>Chuyến về</strong></li><li>Ngày đi: <strong class="startDateReturn"></strong></li><li>Tuyến đường: <strong class="routeNameReturn"></strong></li><li>Giờ xuất phát: <strong class="intimeReturn"></strong></li></ul>           
                                    </div>           
                                    <div class="col-md-12 payment">           
                                    <div class="col-md-12 payment-dialog">           
                                    <h3 class="trip-info">Thanh toán</h3>           
                                    <div class="payment-form">           
                                    <div class="radio">           
                                    <label class="radio">Thanh toán bằng thẻ nội địa<input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="1"><span class="checkround"></span></label>           
                                    <p style="color:#c00; font-style: italic;">Nếu hủy vé trước 6 tiếng sẽ hoàn 100% tiền vé ( chuyến sớm trước 6h phải báo hủy trước 12 tiếng)</p> 
                                    <label class="radio" id="radiochuyenkhoan" style="display: none">Chuyển khoản <input type="radio" class="paymenttype" name="paymenttype" value="6"><span class="checkround"></span></label>           
                                    </div>           
                                    <center><button type="button" id="hoanthanhbtn" class="btn" onclick="hoanthanhbtndatve(this)" >Xác nhận đặt vé </button><button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">Thông tin chuyển khoản</button></center>           
                                    </div>           
                                    </div>           
                                    </div>           
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

                    <div class="click-back">
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
                            <p><span style="font-weight: bold; color: #000;">(*) Lưu ý:</span> Khi chuyển khoản,quý khach vui lòng ghi nận nội dung số điện thoại, mã vé của người đặt. Sau khi nhà xe nhận được thông tin, tổng đài viên sẽ liên hệ lại với quý khách để xác nhận. Chân thành cảm ơn sự tin tưởng và ủng hộ của quý khách </p>
                            
                        </div>

                    </div>
                </div>
                <?php } ?>

                <?php if($web['anvui_id'] == 'TC0DB1s6aI4FE4mP') { ?>
                <div class="row">
                    
                        <div class="col-md-8 col-md-offset-2">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">LÊ THANH BÌNH </div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">0011004185371</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">VIETCOMBANK</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds">Sở Giao Dịch Hà Nội</div>
                            </div>
                        </div>
                        

                    
                    <div class="col-md-8 col-md-offset-2">
                        
                        <div class="ll">
                            <h3>LƯU Ý</h3>
                            <p>Nội dung chuyển khoản: <i id="phone"></i> thanh toan ma ve <i id="ticketId"></i></p>
                            <p><span style="font-weight: bold; color: #000;">(*) Lưu ý:</span> Khi chuyển khoản,quý khach vui lòng ghi nận nội dung số điện thoại, mã vé của người đặt. Sau khi nhà xe nhận được thông tin, tổng đài viên sẽ liên hệ lại với quý khách để xác nhận. Chân thành cảm ơn sự tin tưởng và ủng hộ của quý khách </p>
                            
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
<script src="<?=$web['static_temp']?>/24/statics/js/anvui.js?v=1.<?php echo time() ?>123"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    var routeId = getParameterByName('routeIdd');

    // if(routeId != ''){
    //     $.ajax({
    //         type: "POST",
    //         url: "https://anvui.vn/pointNX",
    //         data: {
    //             routeId: routeId
    //         },
    //         success: function (result) {

    //             // routeBackId = result.routeBack;

    //             //lấy thông tin điểm đầu
                
    //             $('#startPoint').val(result.a1[0].pointName).change();
    //             $("#startId").val(result.a1[0].pointId)

                
    //             $('#endPoint').val(result.a2[0].pointName).change();
    //             $("#endId").val(result.a2[0].pointId)



    //         }
    //     });
    // }

    $(".click-back").append('<a href="/dat-ve?routeId='+routeId+'"><i class="fa fa-chevron-left" aria-hidden="true"></i> Quay lại</a>')
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
        z-index: 9999;
        position: absolute;
    }
    .iconic-input input {
        padding-left: 25px;
    }
    .ticket-ac-btn {
    color: #fff;
    background: #c00;
    }
    .ghe-3 > .ghedachon, .ghe-3 > .ghetrong, .ghe-3 > .ghedaban, .ghe-3 > .ghetreem, .ghe-3 > .driver {
    background-size: 40px;
    height: 50px;
    text-align: center;
    line-height: 50px;
}
</style>

<?php } else { ?>
<style>
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

                    <div class="click-back">
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
                <?php if($web['anvui_id'] == 'TC0DB1s6aI4FE4mP') { ?>
                <div class="row">
                    
                        <div class="col-md-6">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">LÊ THANH BÌNH</div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">0011004185371</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">VIETCOMBANK</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds">Sở Giao Dịch Hà Nội</div>
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
                <?php if($web['anvui_id'] == 'TC0Cn1rx2Fp3dumx') { ?>
                <div class="row">
                    
                        <div class="col-md-6">
                            <div class="box-tt-ck">
                                <div class="name-tdsd">Người thụ hưởng:</div> <div class="content-dds">TRẦN LÊ NGUYÊN KHÁNH</div>
                                <div class="name-tdsd">Số tài khoản:</div> <div class="content-dds">0441000815288</div>
                                <div class="name-tdsd">Ngân hàng:</div> <div class="content-dds">Vietcombank</div>
                                <div class="name-tdsd">Chi nhánh:</div> <div class="content-dds">Tân Bình - TP HCM</div>
                            </div>
                        </div>
                        

                    
                    <div class="col-md-12">
                        
                        <div class="ll">
                            <p>NỘI DUNG CHUYỂN KHOẢN: <br/><span class="ndcktd" style="color: #c00; font-weight: bold; font-size: 20px;width: 100%;float: left;text-align: center;padding: 10px 0px;"><i id="phone"></i> thanh toan ma ve <i id="ticketId"></i></span></p>
                            <p><span style="font-weight: bold; color: #000;">(*) Lưu ý:</span> Khi chuyển khoản, quý khách vui lòng nhập chính xác nội dung số điện thoại, mã vé của người đặt. Sau khi nhà xe nhận được thông tin, tổng đài viên sẽ liên hệ lại với quý khách để xác nhận. Chân thành cảm ơn sự tin tưởng và ủng hộ của quý khách.</p>
                            
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
<?php if($web['anvui_id'] == 'TC0761phLM2cBJrc') { ?>

<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/js/anvui1.js?v=1.<?php echo time() ?>123"></script>
<?php } elseif($web['anvui_id'] == 'TC0Ba1rTOa1WJOCp' || $web['anvui_id'] == 'TC0Cn1rx2Fp3dumx' || $web['anvui_id'] == 'TC04r1lru1vOk3c' || $web['anvui_id'] == 'TC0DB1s6aI4FE4mP' || $web['anvui_id'] == 'TC0821q4JlOdY2Tz' || $web['anvui_id'] == 'TC0Dy1sPqJsYVkgG') { ?>
<script src="<?=$web['static_temp']?>/14/statics/js/anvui2.js?v=1.<?php echo time() ?>123"></script>
<?php } else { ?>
<script src="<?=$web['static_temp']?>/14/statics/js/anvui.js?v=1.<?php echo time() ?>123"></script>
<?php } ?>

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

    $(".click-back").append('<a href="/dat-ve?routeId='+routeId+'"><i class="fa fa-chevron-left" aria-hidden="true"></i> Quay lại</a>')
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
</style>

<?php } ?>

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
    .ticket-ac-btn {
    color: #fff;
    background: #c00;
}

.center-top-header p{
    font-size: 18px;
}
.center-top-header {
    width: 90%;
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
</style>