<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/7//datve/index.php
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
                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_ck">Đóng</button>
            </div>
        </div>
    </div>
</div>

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


<script src="/themes/14/statics/js/anvui2.js?v=1.<?php echo time() ?>123"></script>

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
</style>