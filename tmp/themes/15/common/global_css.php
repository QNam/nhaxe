<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/15//common/global_css.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><!-- Bootstrap core CSS -->
<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
      rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
      rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/jquery-confirm/dist/jquery-confirm.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/css/pretty-checkbox.min.css" rel="stylesheet">
<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/css/creative.min.css?v=1" rel="stylesheet">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/css/pretty-checkbox.min.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/css/jquery-ui.min.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/owlcarousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/owlcarousel/dist/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/css/main.css?v=1.9">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/slick/slick.css?v=1.6">
<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/css/styles.css?v=6.8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css?ver=2.2.0">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed" rel="stylesheet">

<link rel="stylesheet" href="/themes/14/statics/css/style4.css?v=8.6">
<link rel="stylesheet" href="/themes/14/statics/css/main.css?v=8.6">

<style>
    header.masthead {
        background-image: url("<?=$web['static_temp']?>/<?=$web['temp']?>/statics/plugins/web-waterbus/img/waterbus/SWB-HP2018.jpg");
    }
    #video_background {
        position: absolute;
        bottom: 0px;
        right: 0px;
        min-height: 100%;
        width: 100%;
        height: auto;
        z-index: -1000;
        overflow: hidden;
    }
    .menu-ltt a{
        background: #fff;
    }
    .breadcrumb{
    	display: none;
    }
</style>



<style type="text/css">
body{
background: #fff;
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
.btn-oder {
    background-color: #ffffff;
    color: #c1112c;
    font-size: 2rem;
    padding: .5rem 1.875rem .5rem 1.875rem;
    font-weight: 700;
    border-radius: 6.25rem;
    border: solid 2px <?=$web['background']['color']?> !important;
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
footer.page-footer.font-small.unique-color-dark.pt-0 {
    padding-top: 15px !important;
}
footer.page-footer.font-small.unique-color-dark.pt-0 img{
max-width: 100%;
}
.fixed-top {
    position: inherit !important;
    margin: 0px;
}
#video_background{
position: relative !important;
}
.slick-arrow{
display: none !important;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    height: 38px;
    border: 0px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #003f6b;
    line-height: 40px;
    font-family: 'Fira Sans Extra Condensed', sans-serif;
}

.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto{
    float: left !important;
}
.hidden-lg.hidden-sm.hidden-md{
    display: none;
}
.ticket-ac-btn {
    background: #ffd600;
}
.text-right.pr0.col-md-3.col-sm-3.col-xs-2.col-lg-2 {
    float: right !important;
}
.payment-form{
background: none !important;
}
</style>