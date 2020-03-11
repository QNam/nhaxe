<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/16//common/global_css.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><!-- Bootstrap core CSS -->


<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">

<!-- Stylesheets -->

<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/comming/common-css/bootstrap.css" rel="stylesheet">


<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/comming/common-css/ionicons.css" rel="stylesheet">


<link rel="stylesheet" href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/comming/common-css/jquery.classycountdown.css" />

<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/01-comming-soon/css/styles.css" rel="stylesheet">

<link href="<?=$web['static_temp']?>/<?=$web['temp']?>/statics/01-comming-soon/css/responsive.css" rel="stylesheet">

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
</style>