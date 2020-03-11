$(document).ready(function(){
    $(window).resize();
});

$(window).resize(function () {
    var widthWindow = $(this).width();
    if (widthWindow > 2300) {
        window.state = 'WQXGA';
    } else if (widthWindow > 1720) {
        window.state = 'FullHD';
    }  else if (widthWindow > 1220) {
        window.state = 'WXGA';
    }  else if (widthWindow >= 900) {
        window.state = 'XGA';
    }   else if (widthWindow > 600) {
        window.state = 'VGA';
    }   else if (widthWindow < 600) {
        window.state = 'QVGA';
    }
    fullpageInit();
    slider();
    zSlider();
    zSlider2();
    gSlider();
    rSlider();
    nslider();
    tslider();
    scr();
    rsh();
    smodal();
    amodal();
    addC();
    videofr();
    masosny();
});
function videofr() {

    $('#myModalPic').on('hidden.bs.modal', function() {
        $('.box-picL #f-video iframe').remove();
    });
    $('#myModalPic').on('shown.bs.modal', function () {
        $('.box-picL #f-video').append('')
    });
}
function masosny() {
    $('.grid.effect-1').masonry({});
    $('.gird-sml').masonry({});
    // $(".idetails").tinyscrollbar({thumbSize: 50})
    var $scrollbar6 = $('.idetails');
    $scrollbar6.tinyscrollbar({ thumbSize: 50 });
    var scrollbar6 = $scrollbar6.data("plugin_tinyscrollbar");
    scrollbar6.update();
}
function addC() {
    $(document)
        .on( 'hidden.bs.modal', '.modal', function() {
            $.fn.fullpage.setAllowScrolling(true);
        })
        .on( 'show.bs.modal', '.modal', function() {
            $.fn.fullpage.setAllowScrolling(false);
            var viewportHeight = $(window).height();
            var modalDialogHeight = $(this).find('.box-content').outerHeight(true);
            // console.log ('viewportHeight = ' + viewportHeight);
            // console.log ('modalDialogHeight = ' + modalDialogHeight);
            if ( modalDialogHeight > viewportHeight ) {
                $(this).find('.ajax-next').addClass('active');
            }
            else{
                $(this).find('.ajax-next').removeClass('active');
            }
        });

}

function smodal() {
    $('.pdetails').tinyscrollbar({ thumbSize: 50 });
}
function amodal() {
    $('.adetails').tinyscrollbar({ thumbSize: 50 });
}
function rsh() {
    var height = jQuery(window).height();
    jQuery('.box-pop .pdetails .viewport ').css({
        'height': height - 100
    });
    jQuery('.box-slider7 .idetails .viewport ').css({
        'height': height - 200
    });
}
function scr() {
    $(".idscrollbar").tinyscrollbar({thumbSize: 50})
}

function zSlider2 () {
    switch (window.state) {
        case 'WQXGA':
        case 'FullHD':
        case 'WXGA':

            $(".z-slider2").trigger('destroy.owl.carousel');
            $('.z-slider2').owlCarousel({
                margin: 0,
                loop: true,
                mouseDrag: true,
                items: 3,
                navigation: true,
                navigationText: ['<div class="s-icon spr spre"></div>','<div class="s-icon spr snext"></div>'],
                dots: false,
                responsive: false
            });
            break;
        case 'VGA':
        case 'QVGA':
        case 'XGA':
            $(".z-slider2").trigger('destroy.owl.carousel');
            $('.z-slider2').owlCarousel({
                margin: 0,
                loop: true,
                items : 2,
                navigation: true,
                navigationText: ['<div class="s-icon spr spre"></div>','<div class="s-icon spr snext"></div>'],
                responsive: true,
                dots: false,
                itemsDesktop : [1199,2]
            });
            break;
    }
}

function fullpageInit () {
    switch (window.state) {
        case 'WQXGA':
        case 'FullHD':
        case 'WXGA':
        case 'XGA':
            if (!this.init) {
                this.init = true;
                var numberOfSections = 0,
                    scrollArrow = $('.js-scroll-down-arrow'),
                    scrollArrowMovesDown = true;
                scrollArrow.bind('click',{},function(){
                    if( scrollArrowMovesDown )
                        $.fn.fullpage.moveSectionDown();
                    else
                        $.fn.fullpage.moveTo(1,1);
                });
                $('#fullpage').fullpage({
                    navigation: true,
                    slidesNavigation: true,
                    controlArrows: false,
                    verticalCentered: true,
                    anchors: ['home', 'about', 'room', 'have', 'promotions', 'gallery', 'follow', 'tour', 'contact'],

                    afterRender: function(anchorLink, index)
                    {
                        var btnHtml = '<div  class="spr btn-datphong" onclick="bookRoom()"></div>\
				        <div class="spr btn-dattour" ></div>\
				        <div class="spr btn-shop" data-toggle="modal" data-target="#coming"></div>\
				        </div>';
                        $("#fp-nav").prepend(btnHtml);

                        (function(){
                            var items = $('#fp-nav, .box-logo, .box-review');
                            if(items.length)
                            {
                                numberOfSections = items.length;
                                var objs = [];
                                for(var i=0;i<items.length;i++)
                                    objs.push( $(items[i]) );

                                function onResize(ww,wh){
                                    var ww = $(window).width(),
                                        wh = $(window).height(),
                                        maxWidth = 0,
                                        maxHeight = 0,
                                        wx = 1,
                                        hx = 1;

                                    for(var i=0;i<objs.length;i++)
                                    {
                                        objs[i].css({ 'transform' : 'scale(1)' });
                                    }

                                    if(ww < 900) return;

                                    for(var i=0;i<objs.length;i++)
                                    {
                                        objs[i].css({ 'transform' : 'scale(1)' });
                                        maxWidth = Math.max(objs[i].width(),maxWidth);
                                        maxHeight = Math.max(objs[i].height(),maxHeight);
                                    }

                                    var pad = Math.round(160 * ( ww / 1400 ) );
                                    // maxBlockWidth  = ww - 100,
                                    maxBlockHeight = wh - pad;
                                    //
                                    // console.log(wh);
                                    // console.log(pad);
                                    // if( maxWidth > maxBlockWidth )
                                    // {
                                    //   wx = 1;//maxBlockWidth / maxWidth;
                                    // }

                                    if( maxHeight > maxBlockHeight )
                                    {
                                        hx = maxBlockHeight / maxHeight;
                                    }
                                    // console.log(maxBlockHeight);
                                    // console.log(maxHeight);
                                    var scale = Math.min(wx,hx,1);

                                    for(var i=0;i<objs.length;i++)
                                    {
                                        objs[i].css({ 'transform' : 'scale(' + scale + ')', });
                                    }

                                }
                                window.fullpageResize = onResize;
                                $(window).resize(onResize);
                                onResize();
                            }
                        })();
                    },
                    afterLoad: function(anchorLink, index){
                        var loadedSection = $(this);
                        //using anchorLink
                        if(anchorLink == 'gallery'){
                            masosny();

                        }
                    }
                });
            }
            break;
        case 'VGA':
        case 'QVGA':
            if(this.init)
            {
                $('#fullpage').fullpage.destroy('all');
                this.init = false;
            }
            break;
    }
}
function slider () {
    var slider = $("#owl-crs");
    switch (window.state) {
        case 'WQXGA':
        case 'FullHD':
        case 'WXGA':
        case 'XGA':
            slider.trigger('destroy.owl.carousel');
            slider.owlCarousel({
                items: 1,
                navigation: true,
                navigationText: ['<div class="s-icon spr spre"></div>','<div class="s-icon spr snext"></div>'],
                loop: true,
                responsive: false
            });
            break;
        case 'VGA':
        case 'QVGA':
            slider.trigger('destroy.owl.carousel');
            slider.owlCarousel({
                dots: true,
                items: 1,
                navigation: false,
                loop: true
            });
            break;
    }
}
function tslider () {
    var slider = $(".t-slider"),
        status = $("#owlStatus");
    switch (window.state) {
        case 'WQXGA':
        case 'FullHD':
        case 'WXGA':
        case 'XGA':
            slider.trigger('destroy.owl.carousel');
            slider.owlCarousel({
                items: 1,
                navigation: true,
                navigationText: ['<div class="s-icon spr spre"></div>','<div class="s-icon spr snext"></div>'],
                loop: true,
                afterAction : afterAction,
                responsive: false
            });
        function updateResult(pos,value){
            status.find(pos).find(".result").text(value);
        }
        function afterAction() {
            updateResult(".owlItems", this.owl.owlItems.length);
            updateResult(".currentItem", this.owl.currentItem + 1);
        }
            break;
        case 'VGA':
        case 'QVGA':
            slider.trigger('destroy.owl.carousel');
            slider.owlCarousel({
                dots: true,
                items: 1,
                navigation: false,
                loop: true,
                afterAction : afterAction
            });
        function updateResult(pos,value){
            status.find(pos).find(".result").text(value);
        }
        function afterAction() {
            updateResult(".owlItems", this.owl.owlItems.length);
            updateResult(".currentItem", this.owl.currentItem + 1);
        }
            break;
    }
}
function nslider () {
    var slider = $(".owl-event");
    switch (window.state) {
        case 'WQXGA':
        case 'FullHD':
        case 'WXGA':
        case 'XGA':
            slider.trigger('destroy.owl.carousel');
            slider.owlCarousel({
                items: 1,
                navigation: true,
                navigationText: ['<div class="s-icon spr spre"></div>','<div class="s-icon spr snext"></div>'],
                loop: true,
                responsive: false
            });
            break;
        case 'VGA':
        case 'QVGA':
            slider.trigger('destroy.owl.carousel');
            slider.owlCarousel({
                dots: true,
                items: 1,
                navigation: false,
                loop: true
            });
            break;
    }
}
function zSlider () {
    switch (window.state) {
        case 'WQXGA':
        case 'FullHD':
        case 'WXGA':
        case 'XGA':
            $(".z-slider").trigger('destroy.owl.carousel');
            $('.z-slider').owlCarousel({
                margin: 0,
                loop: true,
                mouseDrag: true,
                autoWidth: false,
                items: 3,
                navigation: true,
                navigationText: ['<div class="s-icon spr spre"></div>','<div class="s-icon spr snext"></div>'],
                dots: false,
                responsive: false
            });
            break;
        case 'VGA':
        case 'QVGA':
            $(".z-slider").trigger('destroy.owl.carousel');
            $('.z-slider').owlCarousel({
                margin: 0,
                loop: true,
                autoWidth: true,
                items: 4,
                navigation: false,
                dots: false
            });
            break;
    }
}
function gSlider () {
    switch (window.state) {
        case 'WQXGA':
        case 'FullHD':
        case 'WXGA':
        case 'XGA':
            $(".g-slider").trigger('destroy.owl.carousel');
            $('.g-slider').owlCarousel({
                margin: 0,
                loop: true,
                mouseDrag: true,
                autoWidth: false,
                items: 3,
                navigation: true,
                navigationText: ['<div class="s-icon spr spre"></div>','<div class="s-icon spr snext"></div>'],
                dots: false,
                responsive: false
            });
            break;
        case 'VGA':
        case 'QVGA':
            $(".g-slider").trigger('destroy.owl.carousel');
            $('.g-slider').owlCarousel({
                margin: 0,
                loop: true,
                autoWidth: true,
                items: 4,
                navigation: false,
                dots: false
            });
            break;
    }
}
function rSlider () {
    switch (window.state) {
        case 'WQXGA':
        case 'FullHD':
        case 'WXGA':
        case 'XGA':
            $(".r-slider").trigger('destroy.owl.carousel');
            $('.r-slider').owlCarousel({
                margin: 0,
                loop: true,
                mouseDrag: true,
                autoWidth: false,
                items: 2,
                navigation: true,
                navigationText: ['<div class="s-icon spr spre"></div>','<div class="s-icon spr snext"></div>'],
                dots: false,
                responsive: false
            });
            break;
        case 'VGA':
        case 'QVGA':
            $(".r-slider").trigger('destroy.owl.carousel');
            $('.r-slider').owlCarousel({
                margin: 0,
                loop: true,
                autoWidth: true,
                items: 2,
                navigation: false,
                dots: false
            });
            break;
    }
}
var currentParam = window.location.href.split('#')[1];
if( currentParam == 'menu') {
    $(".menu").fadeToggle();
    $("#social").toggleClass("social-black");
    $("#fp-nav").toggleClass("fp-nav-black");
    $(".logo").toggleClass("logo-black");
    $("#social-btn").toggleClass("social-btn-black");
    $("#header").toggleClass("header-hide");
    $(".body").toggleClass("overflow");
}

$("#menu-btn").on("click", function () {
    $(".menu").fadeToggle();
    $("#social").toggleClass("social-black");
    $("#fp-nav").toggleClass("fp-nav-black");
    $(".logo").toggleClass("logo-black");
    $("#social-btn").toggleClass("social-btn-black");
    $("#header").toggleClass("header-hide");
    $(".body").toggleClass("overflow");
    $.fn.fullpage.setAllowScrolling(false);
});

$(".menu-close").on("click", function () {
    $(".menu").fadeToggle();
    $("#social").toggleClass("social-black");
    $("#fp-nav").toggleClass("fp-nav-black");
    $(".logo").toggleClass("logo-black");
    $("#social-btn").toggleClass("social-btn-black");
    $("#header").toggleClass("header-hide");
    $(".body").toggleClass("overflow");
    $.fn.fullpage.setAllowScrolling(true);
});
$(document).click(function(event) {
    if ($(event.target).closest("#social, #social-btn, #lang-btn").length) return;
    $("#social").hide();
    $("#social-btn").fadeIn();
    $("#lang-btn").fadeIn();
    event.stopPropagation();
});
$(".toggleBtn").on("click", function () {
    var toggleClass = $(this).attr("data-toggle");
    $(toggleClass).stop().fadeToggle();
    $("#lang-btn").hide();
});

$(document).click(function(i){
    var o = $('#lang-btn');
    o.is(i.target) || 0 !== o.has(i.target).length || closeFixedBox()
});
openFixedBox();
function closeFixedBox() {
    $("#lang-btn").removeClass("active");
}
function openFixedBox() {
    $("#lang-btn .lang-btn3").on('click', function(event) {
        $(this).closest('#lang-btn').addClass('active').siblings().removeClass('active');
        event.stopPropagation();
    });
}
(function(){
    var items = $('.menu-block');
    function onResize()
    {
        var ww = $(window).width(),
            wh = $(window).height();
        for(var i=0;i<items.length;i++)
        {
            items[i].style.width = null;
            items[i].style.height = null;
        }
        if( ww < 900 )
            return;
        var width = ( ww - 150 ) / 3,
            height = ( wh - 150 ) / 2,
            size = Math.min(width,height);
        for(var i=0;i<items.length;i++)
        {
            $(items[i]).css({ width : size, height : size });
        }
    }
    $(window).resize(onResize);
    onResize();
})();
function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}
$(document).on('click', '.btn-dattour', function(){
    $.fn.fullpage.moveTo(8, 0);
});
$(document).on('click', '.btn-tour', function(){
    $.fn.fullpage.moveTo(9, 0);
});


