<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/21//datve/index.php
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
                         <span id="selecttypecars">
                        </span>
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
                <h5 class="modal-title" id="modalLabel">Thông tin chuyển khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Nội dung: <i id="phone"></i> thanh toan ma ve <i id="ticketId"></i></h3>

                <p><strong>Ngân hàng BIDV</strong></p>
                <p>Chủ tài khoản: VŨ THANH HOÀI - Số tài khoản: 1601 0000 064 640</p>
                <p>Chi nhánh: Ngân hàng BIDV Sở Giao dịch 3</p>

                <p><strong>Ngân hàng TECHCOMBANK</strong></p>
                <p>Chủ tài khoản: VŨ THANH HOÀI - Số tài khoản: 111 20032107 106</p>
                <p>Chi nhánh: Ngân hàng TECHCOMBANK Hà Nội</p>

                <p><strong>Ngân hàng VIETCOMBANK</strong></p>
                <p>Chủ tài khoản: VŨ THANH HOÀI - Số tài khoản: 001 10037 90795</p>
                <p>Chi nhánh: Ngân hàng VIETCOMBANK Sở Giao dịch</p>

                <p><strong>Ngân hàng VIETCOMBANK - Số tài khoản: 150 2205 120668</strong></p>
                <p>Chủ tài khoản: VŨ THANH HOÀI</p>
                <p>Chi nhánh: Ngân hàng AGRIBANK CN Hoàn Kiếm HN</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
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

<?php if($web['anvui_id'] == 'TC0BS1rQHdJWRYKG' || $web['anvui_id'] == 'TC0BV1rRNKe8X7Yd' || $web['anvui_id'] == 'TC0B11rFXNEsI5BY' || $web['anvui_id'] == 'TC1OHoeA_ekC' || $web['anvui_id'] == 'TC08f1qJkyzgVDFT' || $web['anvui_id'] == 'TC1OHmbCcxRS') { ?>
<script src="/themes/14/statics/js/anvui2.js?v=1.<?php echo time() ?>123"></script>

<?php } else { ?>
<script src="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/js/anvui.js?v=1.<?php echo time() ?>123"></script>
<?php } ?>
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
        position: absolute;
    }
    .iconic-input input {
        padding-left: 25px;
    }
    .ticket-ac-btn {
    color: #fff;
    background: #c00;
}
</style>

