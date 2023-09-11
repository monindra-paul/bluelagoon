jQuery(document).ready(function($){
	"use strict";

	/*
	=======================================================================
	Pretty Photo Script Script
	=======================================================================
	*/
    if($("a[data-rel^='prettyPhoto']").length){
      $("a[data-rel^='prettyPhoto']").prettyPhoto();
    }
 
	/*
	==============================================================
	CountDown Script Start
	==============================================================
	*/
	if($('.countdown').length){
		$('.countdown').downCount({ date: '08/08/2018 12:00:00', offset: +1 });
	}
	  
	/*
	==============================================================
	Slick Script Start
	==============================================================
	*/  
	if($('.spa-banner-slider').length){
	$('.spa-banner-slider').slick({
		slidesToShow: 1,
		speed: 800,
		autoplaySpeed:2000,
		autoplay:true,
		dots: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					slidesToShow: 1
				}
			},
			{
				breakpoint: 481,
				settings: {
					arrows: false,
					slidesToShow: 1
				}
			}
		]
	});
	}

	/*
	==============================================================
	Slick Script Start
	==============================================================
	*/  
	if($('.spa-testimonial-slider').length){
		$('.spa-testimonial-slider').slick({
			slidesToShow: 1,
			speed: 800,
			autoplaySpeed:2000,
			autoplay:true,
			dots: true,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						slidesToShow: 1
					}
				},
				{
					breakpoint: 481,
					settings: {
						arrows: false,
						slidesToShow: 1
					}
				}
			]
		});
	}

	/*
	==============================================================
	Slick Script Start
	==============================================================
	*/  
	if($('.spa-client-slider').length){
		$('.spa-client-slider').slick({
			slidesToShow:6,
			autoplay: true,
			autoplaySpeed: 0,
			speed: 8000,
			cssEase:'linear',
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 481,
					settings: {
						slidesToShow: 2
					}
				}
			]
		});
	}

	/*
	==============================================================
	CounterUp
	==============================================================
	*/  
	if($('.counter').length){
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	}
	
	/*
	==============================================================
	Slick Slider
	==============================================================
	*/ 
	if($('.widget-slid').length){
		$('.widget-slid').slick({
			slidesToShow:9,
			autoplay: true,
			autoplaySpeed: 0,
			speed: 8000,
			cssEase:'linear',
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				},
				{
					breakpoint: 481,
					settings: {
						slidesToShow: 3
					}
				}
			]
		});
	}
	  
	/*
	==============================================================
	Progress Bar Script Start
	============================================================== */  
	$('.progressbar').each(function(){
		var t = $(this),
			dataperc = t.attr('data-perc'),
			barperc = Math.round(dataperc*5.56);
		t.find('.bar').animate({width:barperc}, dataperc*25);
		t.find('.label').append('<div class="perc"></div>');
		
		function perc() {
			var length = t.find('.bar').css('width'),
				perc = Math.round(parseInt(length)/5.56),
			labelpos = (parseInt(length)-2);
			t.find('.perc').text(perc+'%');
		}
		perc();
		setInterval(perc, 0); 
	});
	
	/*
	==============================================================
	DCalendarPicker Script Start
	============================================================== */  
	if($('#demo').length){
		$('#demo').dcalendarpicker();
	}
	
	/*
	==============================================================
	DCalendarPicker Script Start
	============================================================== */  
	if($('#demo2').length){
		$('#demo2').dcalendarpicker();
	}
	
	/*
	==============================================================
	DCalendarPicker Script Start
	============================================================== */  
	if($('#demo3').length){
		$('#demo3').dcalendarpicker();
	}
	
	/*
	==============================================================
	DCalendarPicker Script Start
	============================================================== */  
	if($('#demo1').length){
		$('#demo1').dcalendarpicker();
	}
	
	/*
	==============================================================
	DCalendarPicker Script Start
	============================================================== */  
	if($('.filtr-container').length){
		$('.filtr-container').filterizr();
	}
		
    /*
	==============================================================
	NiceSelect Script Start
	============================================================== */  
	$(document).ready(function() {
		$('select:not(.ignore)').niceSelect();
	}); 
	
	/* ---------------------------------------------------------------------- */
	/*	DL Responsive Menu
	/* ---------------------------------------------------------------------- */
	if(typeof($.fn.dlmenu) == 'function'){
		$('#kode-responsive-navigation').each(function(){
			$(this).find('.dl-submenu').each(function(){
				if( $(this).siblings('a').attr('href') && $(this).siblings('a').attr('href') != '#' ){
					var parent_nav = $('<li class="menu-item kode-parent-menu"></li>');
					parent_nav.append($(this).siblings('a').clone());
					
					$(this).prepend(parent_nav);
				}
			});
			$(this).dlmenu();
		});
	}
	
	/* =======================================================================
	Range Slider Script Script
	======================================================================= */
	if($('.slider-range').length){
		$( ".slider-range" ).slider({
		  range: true,
		  min: 0,
		  max: 500,
		  values: [ 50, 450 ],
		  slide: function( event, ui ) {
			$( ".amount" ).val( "$" + parseInt(ui.values[ 0 ]) + " - $" + parseInt(ui.values[ 1 ]) );
		  }
		});
		$( ".amount" ).val( "$" + $( ".slider-range" ).slider( "values", 0 ) +
		  " - $" + $( ".slider-range" ).slider( "values", 1 ) );
	}
	
	/* =======================================================================
	Tabs Script Script
	======================================================================= */
	if($('ul.tabs').length){
		$('ul.tabs').each(function(){

            var $active, $content, $links = $(this).find('a');

            $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
            $active.addClass('active');
            $content = $($active.attr('href'));

            $links.not($active).each(function () {
                $($(this).attr('href')).hide();
            });

            $(this).on('click', 'a', function(e){

                $active.removeClass('active');
                $content.fadeOut("slow");

                $active = $(this);
                $content = $($(this).attr('href'));

                $active.addClass('active');
                $content.fadeIn("slow");

                e.preventDefault();
            });
        });
	}
	
	/* =======================================================================
	Top Navigation
	======================================================================= */
	if($('.spa_top_navigation').length){
		$(window).scroll(function() {
			if ($(this).scrollTop() > 40){ 
				animate: true,		  
				$('.spa_top_navigation').addClass("sticky");
			}else{
				$('.spa_top_navigation').removeClass("sticky");
			}
		});
	}
	
	/* Plate */
	if($('#plate-default').length){
		$('#plate-default').plate();
	}
	
	/* Cart */
	if($('#cart').length){
		$("#cart").on("click", function() {
			$(".shopping-cart").fadeToggle( "fast");
		});
	}
	
	/* Filter */
	if($('.filter a').length){
		$('.filter a').on('click',function(e) {
			e.preventDefault();
			var a = $(this).attr('href');
			a = a.substr(1);
			$('.gallery a').each(function() {
				if (!$(this).hasClass(a) && a != 'all')
					$(this).addClass('hide');
				else
					$(this).removeClass('hide');
			});
		});
	}	

	/* Gallery */
	if($('.gallery a').length){
		$('.gallery a').on('click',function(e) {

		  e.preventDefault();

		  var $i = $(this);

		  $('.gallery a').not($i).toggleClass('pophide');

		  $i.toggleClass('pop');

		});
	}
	
	/* =======================================================================
	Google Maps
	======================================================================= */
	if($('#map-canvas').length){
		google.maps.event.addDomListener(window, 'load', initialize);
	}

});

function initialize() {
	var MY_MAPTYPE_ID = 'custom_style';
	var map;
	var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
	var featureOpts = [
		{
		  stylers: [
			{ hue: '#ababab' },			
			{ visibility: 'simplified' },
			{ gamma: 0.9 },
			{ saturation: -500 },
			{ lightness: 10 },
			{ weight: 0.7 }
		  ]
		},
		{
		featureType: "road",
		  elementType: "geometry",
		  stylers: [
			{ lightness: 30 },
			{ visibility: "simplified" }
		  ]
		},
		{
		  elementType: 'labels',
		  stylers: [		  
			{ visibility: 'on' }
		  ]
		},
		{
		  featureType: 'water',
		  stylers: [
			{ color: '#ababab' }
		  ]
		}
	];	

	var mapOptions = {
		zoom: 13,
		center: brooklyn,
		mapTypeControlOptions: {
		  mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
		},
		mapTypeId: MY_MAPTYPE_ID
	};

	map = new google.maps.Map(document.getElementById('map-canvas'),
		  mapOptions);

	var styledMapOptions = {
		name: 'Custom Style'
	};

	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
}