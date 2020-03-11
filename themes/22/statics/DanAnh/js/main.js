$(document).ready(function() {
	menu();
	
	fixpostImg();
	fixpostFont();
	fixpostIframe();
	fixmapHeight();
	$currentvid = 'sqr';
	if($('.home-video').length) homevideoScale();

	$(window).resize(function() {
		fixpostImg();
        if($('.home-video').length) homevideoScale();
    });
	
	$(".owl-carousel").owlCarousel({
		loop:true,
		margin:10,
		responsiveClass:true,
		nav:false,
		dots:true,
		
		responsive:{
			0:{
				items:1,
				nav:false
			},
			800:{
				items:2,
				nav:false
			},
			1365:{
				items:3,
				loop:true,
			}
		}
    });


});


function menu()
{
	$menuburger = $('.menu-burger');
	$menu = $('.nav-menu');
	$insidemenu = $('ul.menu-content');

	$menuburger.click(function(){
		if (!$menuburger.hasClass('menu-close'))
		{
			$menuburger.addClass('menu-close');
			$menu.slideToggle(400);
			
		}
		else
		{
			$menuburger.removeClass('menu-close');
			$menu.slideToggle(400);
		}
	}); 
	
	$(document).click(function(event) { 
		if(!$(event.target).closest('#top-menu').length) {
			if ($menuburger.hasClass('menu-close'))
			{
				$menuburger.removeClass('menu-close');
				$menu.slideToggle(400);
			}
		}        
	});
	
	var scrollTop = 0;
	if ($( window ).width()>800)
	{
		$(window).scroll(function(){
			scrollTop = $(window).scrollTop();
			
			if (scrollTop >= 100) {
			  $('.top-menu').addClass('top-menu-small');
			} else if (scrollTop < 100) {
			  $('.top-menu').removeClass('top-menu-small');
			} 
		
		
		});
	}
}

function homevideoScale()
{
	
	$videocontainer = $('.home-video');
	$videocontainerwidth = $videocontainer.width();
	$video = $('.video');
	$videoheight = $video.height();
	
	$videocontainerheight = $videocontainerwidth*9/16;
	$videocontainerheight2 = $videocontainerwidth*9/21;
	
	if ($( window ).width() >= 1365)
	{
		
		$video.css('margin-top', ($videocontainerheight2 - $videocontainerheight)/2+'px');
		$videocontainerheight = $videocontainerwidth*9/21;
		$videocontainer.css('height', $videocontainerheight+'px');
		
	}
	if ($( window ).width() <= 460)
	{
		$videocontainerheight = $videocontainerwidth;
		if ($currentvid!='sqr')
		{
			$currentsource = $('#video source').attr('src');
			$newsource = $currentsource.replace('home-video.mp4', 'home-video-square.mp4');
			$('#video source').attr('src', $newsource);
			$("#video")[0].load();
			$currentvid = 'sqr';
		}

	}
	else 
	{
		if ($currentvid=='sqr')
		{
			$currentsource = $('#video source').attr('src');
			$newsource = $currentsource.replace('home-video-square.mp4','home-video.mp4');
			$('#video source').attr('src', $newsource);			
			$("#video")[0].load();
			$currentvid='ret';
		}
		else 
		$currentvid='ret';
	}
	$videocontainer.css('height', $videocontainerheight+'px');
	
}

function fixmapHeight()
{
	if ($('.contact-page').length)
	{
		$('.location-info .map iframe').css('height','100%');
	}
}

function fixpostFont()
{
	if ($('.post-content').length)
	{
		$('.post-content').html($('.post-content').html().split("font-family").join("youcantusefont"));	
	}
}

function fixpostImg()
{
	if ($('.post-content').length && $( window ).width()<1024)
	{
		$img = $('.post-content img');
		if (!$img.length) return;
		//if ($img.css('width') > 0)
		if ($img.attr('style').search('width')>0 || $img.attr('style').search('height')>0) 
		{
			$img.css('width', '100%');
			$img.css('height', 'auto');
		}
	}
}


function fixpostIframe()
{
	if ($('.post-content').length)
	{
		$iframe = $('.post-content iframe');
		if (!$iframe.length) $iframe = $('.post-content div iframe');
		if (!$iframe.length) return;

		$iframeW = $('.post-content').width();
		
		$iframe.css('width', $iframeW + "px");
		$iframe.css('height', $iframeW*9/16 + "px");
		
	}
}

