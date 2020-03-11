<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/14//common/global_css.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/bootstrap.min.css?v=1.4">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/js/jquery-ui-1.9.2.custom/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/jquery.datepicker.lunar.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/jquery-confirm-v3.3.0/dist/jquery-confirm.min.css">
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/owl-carousel/owl.carousel.css">
 
<!-- Default Theme -->
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/owl-carousel/owl.theme.css">
 
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<?php if($web['anvui_id'] == 'TC0Cm1rweVdinjJi' || $web['anvui_id'] == 'TC09m1ql0HQCiixG') { ?>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/main1.css?v=5.4">
<?php } else { ?>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/main.css?v=5.2">
<?php } ?>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/style4.css?v=8.8">
<?php if($web['anvui_id'] == 'TC0Cm1rweVdinjJi' || $web['anvui_id'] == 'TC09m1ql0HQCiixG') { ?>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/style5.css?v=8.4">
<?php } ?>

<?php if($web['anvui_id'] == 'TC0Ai1r7za9DJh1i' ) { ?>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/main2.css?v=8.2">
<?php } ?>

<?php if($web['anvui_id'] == 'TC0B31rGICznLw9n' || $web['anvui_id'] == 'TC0BC1rJs03JKnvA' || $web['anvui_id'] == 'TC09F1qY4kzUWYJu' || $web['anvui_id'] == 'TC0761phLM2cBJrc' || $web['anvui_id'] == 'TC0BW1rRipZ8hlaZ' || $web['anvui_id'] == 'TC0CC1riPKQBfqot' || $web['anvui_id'] == 'TC0CJ1rlCZVe5Vrl' || $web['anvui_id'] ==  'TC0CK1rlUyn1qquy' || $web['anvui_id'] == 'TC0AU1r2R982ex93' || $web['anvui_id'] == 'TC0Cm1rweVdinjJi') { ?>
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/main3.css?v=8.9">

<style type="text/css">
.av-product{
display: none;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 39px;
}
#search-btn{
margin-left: 5px;
}
</style>


<?php } ?>


<?php if($web['anvui_id'] == 'TC08T1qEunQgs8rW') { ?>
<style type="text/css">
.payment-form .radio{
display: none;
}
</style>
<script type="text/javascript">
$('.payment-form .radio').empty();
</script>
<?php } ?>

<style type="text/css">
.breadcrumb{
display: none;
}
html {-webkit-tap-highlight-color:<?=$web['background']['color']?>;} a,.more,.services.boxed .details h4 a:hover,.services.iconic h3,.content a,.description a:hover,.description a:focus,.microlocations p a:hover,.microlocations p a:focus,.hentry .entry-content h2 a:hover,.hentry .entry-content h2 a:focus,.footer .contact-data a:hover,.footer .contact-data a:focus,.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today,.faqs .expanded,.faqs .expanded:after ,.black .ico,.icon,.testimonials h6:before,blockquote:before {color:<?=$web['background']['color']?>;} .color,.pager a.current,.pager a:hover,.pager a:focus,table.hover tr:hover td,.tabs li.active a,.social li:hover,.data th,.tabs li a:hover,.tabs li a:focus,.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current,.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current,.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover,.slicknav_menu .slicknav_icon-bar {background-color:<?=$web['background']['color']?> !important;} .xdsoft_datetimepicker .xdsoft_calendar td:hover,.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div:hover,button, input[type="button"], input[type="reset"], input[type="submit"],#wp-calendar #today,.woocommerce .woocommerce-breadcrumb,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {background:<?=$web['background']['color']?> !important;} .btn:hover,.btn:focus, button, input[type="button"], input[type="reset"], input[type="submit"] {background:<?=$web['background']['color']?> !important;color:#fff !important;} .more:after,.single a:after,.main .static-content .entry-content a:after {border-bottom:2px dotted <?=$web['background']['color']?>;} .tabs li.active a:after {border-color:<?=$web['background']['color']?> transparent transparent transparent;}

footer,.thongke{
background: <?=$web['background']['color']?> !important;
}
.home-box h2 {
color: <?=$web['background']['color']?> !important;
}
.br-header nav ul li a{
color: <?=$web['background']['color']?> !important;
}
.route-list {
    border: 3px solid <?=$web['background']['color']?> !important;
}
.gird_method .item .i-desc{
background: <?=$web['background']['color']?> !important;
}
.btn-oder {
background-color: #ffffff;
color: #c1112c;
font-size: 2rem;
padding: .5rem 1.875rem .5rem 1.875rem;
font-weight: 700;
border-radius: 6.25rem;
border: solid 2px <?=$web['background']['color']?> ;
}
.av-headMain{
background: <?=$web['background']['color']?>;
}
#steps ul .active, .offer-tag{
background: <?=$web['background']['color']?> !important;
}
 button.btn, a.btn{
background: <?=$web['background']['color']?> !important;
}
div.btn{
    background: #5b341e !important;
}
#steps ul .active:before{
background: <?=$web['background']['color']?> !important;
}
.offer-tag:before{
border-left: 10px solid <?=$web['background']['color']?> !important;
}
#steps ul .active:after {
    border-left: 25px solid <?=$web['background']['color']?> !important;
}
h3.heading {
    margin: 0 0 2px;
    /* padding: 10px 0; */
    
    
    font-size: 16px;

    height: 48px;
    line-height: 45px;
    color: <?=$web['background']['color']?>;
    border-bottom: 3px solid <?=$web['background']['color']?> !important;
    background: <?=$web['background']['color']?> !important;
}
#top-nav{
    background: <?=$web['background']['color']?>;
    
}
.trip, #booking-form h3, .label-cus{
color: <?=$web['background']['color']?> !important;
}
.ticket-ac-btn {
    border-radius: 10px !important;
    height: 38px;
    line-height: 26px;
}
.news-content img {
    height: auto !important;
    width: 100% !important;
}
</style>

<?php if($web['anvui_id'] == 'TC03h1IzK1jParS') { ?>
<style type="text/css">
.av-info-news .i-news{
background: #aa0708;
}
.av-info-news .i-news .div_title h2{
color: #fff;
}
.av-info-news .i-news .wrap_news{
max-width: inherit;
}
</style>
<?php } ?>
<?php if($web['anvui_id'] == 'TC0Cm1rweVdinjJi') { ?>
<style type="text/css">
.av-headMain, .av-headMain .wrapper {
    background: #0f9158 !important;
}
footer {
    background-color: #0f204b;
}
.av-headerTop .info_header{
width: calc(100% - 250px);
}
.av-headerTop .av-logo img{
max-width: 250px;
}
.av-book-method{
display: none;
}
.owl-controls.clickable{
display: none !important;
}
.i-news{
padding-top: 0px !important;
}
.av-product .div_title h2 {
    font-size: 30px;
    line-height: 40px;
    font-family: Roboto, sans-serif;
    font-weight: bold;
    color: #002f5b !important;
}
.av-info-news .i-news .div_title h2{
font-size: 30px;
    line-height: 40px;
    font-family: Roboto, sans-serif;
    font-weight: bold;
    color: #002f5b !important;
}
.wp-news-cat-t .div_title h2{
color: #002f5b !important;
}
</style>
<?php } ?>

