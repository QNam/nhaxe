<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/22//info/info.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><style type="text/css">
  .home-video{
    display: none;
  }
</style>
<section class="info-page">
    <div class="my-container">
        <div class="title-block white-title-block">
            <h1 class="oversize-h">Đan Anh Limousine</h1>
        </div>
        
        <div class="white-bg-block">
        	<article class="info-introduction">
            <h1 style="text-align:center">&rdquo;Khẳng định từ chất lượng&ldquo;</h1>
            
            <h1>&nbsp;</h1>
            
            <p><b>Công ty TNHH Du Lịch và Vận Tải Đan Anh</b> là đơn vị cung cấp dịch vụ vận chuyển hành khách và hợp đồng xe du lịch đã đi vào hoạt động từ ngày 01/01/2019. Với đội ngũ lái xe nhiều kinh kiệm luôn trung thực, có đạo đức nghề nghiệp và được tuyển chọn 1 cách khắt khe nhất cùng với đội xe <b>Huyndai Solati Limousine SkyBus XLL đời mới</b>; Nội thất xe sang trọng, tiện nghi bảo đảm sự thoải mái cho hành khách trong suốt chuyến đi.</p>
            <p>Bằng khát vọng phát triển doanh nghiệp của mình ngày càng bền vững với chiến lược đầu tư dài hạn. Chúng tôi sẽ nỗ lực để trở thành nhà xe uy tín và tiếp tục vươn xa hơn nữa trong tương lai, đồng thời xây dựng thành công chuỗi sản phẩm dịch vụ chất lương cao trong lĩnh vực du lịch vận tải.</p>
            <p>Bên cạnh đó, công ty chúng tôi chuyên cung cấp dịch vụ tour du lịch, đặt phòng khách sạn, bán vé máy bay, đưa đón tham quan các điểm du lịch trong cả nước.</p>
            <p>Chúng tôi xin cam kết cung cấp những sản phẩm đúng tiêu chuẩn, đúng chất lượng, và đảm bảo dịch vụ tốt nhất, hướng đến lợi ích tối đa của khách hàng.</p>
            </article>
           
            <div class="news-container">
                <div class="owl-carousel owl-theme">
                    <?php include $_B['temp']->load('info/info_page_info_list') ?>
                </div>    
                     
            </div> 
               

        </div>
        
    </div>
</section>

<script src="<?=$web['static_temp']?><?=$web['temp']?>/statics/DanAnh/js/owl.carousel.min.js"></script>
