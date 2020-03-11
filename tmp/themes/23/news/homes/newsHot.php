<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/23/news/homes/newsHot.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div id="event-schedule" class="section clearfix">
    <div class="container">
             <div class="c-8-12">
                    <div class="section-title-wrap">
                        <h3 class="section-title">Liên hệ với chúng tôi</h3>
                    </div>
                    <div class="event-reservation-form">
                        <form method="post" action="" id="mtscontact_form" class="contact-form">
                            <input type="text" name="mtscontact_captcha" value="" style="display: none;">
                            <input type="hidden" name="mtscontact_nonce" value="139b6bd0a0">
                            <input type="hidden" name="action" value="mtscontact">
                            <div class="contact-form-inputs-col contact-form-inputs-col-1">
                                <input type="text" name="mtscontact_name" value="" id="mtscontact_name" placeholder="Họ và Tên" class="placeholder"><input type="text" name="mtscontact_email" value="" id="mtscontact_email" placeholder="Email" class="placeholder"><input type="text" name="mtscontact_phone" value="" id="mtscontact_phone" placeholder="Điện thoại" class="placeholder"><input type="text" name="mtscontact_number" value="" id="mtscontact_number" placeholder="Số vé" class="placeholder"><input type="text" name="mtscontact_date" value="" id="mtscontact_date" class="mts-datepicker hasDatepicker placeholder" placeholder="Ngày đi">
                            </div>
                            <div class="contact-form-inputs-col contact-form-inputs-col-2">
                                <textarea name="mtscontact_message" id="mtscontact_message" placeholder="Điểm đón - Điểm trả - Thời gian đón" class="placeholder"></textarea>
                                <input type="submit" value="Liên hệ" id="mtscontact_submit" class="button">
                            </div>
                        </form>
                        <div id="mtscontact_success" style="display: none;">Chúc mựng bạn đã đặt vé thành công!<br> Huy Võ sẽ liên hệ với bạn để xác nhận và đón bạn đúng giờ..</div>
                    </div>
            </div>
            <aside class="sidebar event-reservation-sidebar c-4-12">
                <div id="single_category_posts_widget-2" class="widget widget_single_category_posts_widget">
                    <h3 class="widget-title">TIN HOT</h3>
                    <ul class="category-posts">
                        <?php $i = 0 ?>
                        <?php if(is_array($data['content']['news'])) { foreach($data['content']['news'] as $k => $v) { ?>
                        <?php if($i < 4) { ?>
                        <li>
                            <a href="<?=$v['link']?>">
                                <img width="54" height="54" <?php  echo loadImage($v['img'],'none','570','290',true); ?>class="attachment-widgetthumb size-widgetthumb wp-post-image" alt="<?=$v['title']?>" title="<?=$v['title']?>" > <?=$v['title']?>
                            </a>
                            <div class="meta">
                            </div>
                            <!--end .entry-meta-->
                        </li>
                        <?php } ?>
                        <?php $i++ ?>
                        <?php } } ?>
                    </ul>
                </div>
            </aside>
    </div>
</div>
