(function($){


		var owl_fade = $(".top-fade_slides");
			owl_fade.owlCarousel({
				lazyLoad: true,
				center: false,
				items: 1,
				nav: false,
				margin: 0,
				padding: 0,
				autoplay: 3000,
				touchDrag: false,
				pullDrag: false,
				mouseDrag: false,
				loop: true,
				dots: false,
				animateOut: 'fadeOut',
				smartSpeed: 500,
				autoplayHoverPause: false
			});

		var owl_event = $("#jEvent-slider");
			owl_event.owlCarousel({
				center: false,
				margin: 0,
				padding: 0,
				nav: true,
				dots: true,
				autoplay: 3000,
				touchDrag: true,
				pullDrag: true,
				mouseDrag: true,
				loop: true,
				smartSpeed: 500,
				autoplayHoverPause: false,
				responsive : {
					0 : {
						dotsEach:4,
						items: 1
					},
					561 : {
						dotsEach:4,
						items: 2
					},
					1000 : {
						dotsEach:4,
						items: 3
					},
					1280 : {
						items: 4,
						nav: true,
						dots: true
					}
				},
				navText: [
					'<i class="material-icons dp48">keyboard_arrow_left</i>',
					'<i class="material-icons dp48">keyboard_arrow_right</i>'
				],
				navContainer: '.jEvent-navs',
				dotsContainer: '.jEvent-navs .custom-dots'
			})

		var owl_event_2 = $("#jEvent-slider-2");
		owl_event_2.owlCarousel({
				center: false,
				margin: 0,
				padding: 0,
				nav: true,
				dots: true,
				autoplay: 3000,
				touchDrag: true,
				pullDrag: true,
				mouseDrag: true,
				loop: true,
				smartSpeed: 500,
				autoplayHoverPause: false,
				responsive : {
					0 : {
						dotsEach:4,
						items: 1
					},
					561 : {
						dotsEach:4,
						items: 2
					},
					1000 : {
						dotsEach:4,
						items: 3
					},
					1280 : {
						dotsEach:4,
						items: 6,
						nav: true,
						dots: true
					}
				},
				navText: [
					'<i class="material-icons dp48">keyboard_arrow_left</i>',
					'<i class="material-icons dp48">keyboard_arrow_right</i>'
				],
				navContainer: '.jEvent-navs',
				dotsContainer: '.jEvent-navs .custom-dots'
			})

		var owl_ts = $('#top_slider-sm'),
			owlOptions = {
				center: false,
				nav: false,
				margin: 0,
				padding: 0,
				autoplay: 6000,
				touchDrag: true,
				pullDrag: true,
				mouseDrag: true,
				loop: true,
				autoplayHoverPause: false,
				smartSpeed: 500,
				responsive : {
					0 : {
						items: 1
					},
					460 : {
						items: 2
					}
				}
			};

		if ($(window).width() < 801) {
			var owlActive = owl_ts.owlCarousel(owlOptions);
		}else{
			owl_ts.addClass('off');
		}

		$(window).resize(function() {
			if ( $(window).width() < 801 ) {
				if ( owl_ts.hasClass('off') ) {
					var owlActive = owl_ts.owlCarousel(owlOptions);
					owl_ts.removeClass('off');
				}
			} else {
				if ( !owl_ts.hasClass('off') ) {
					owl_ts.addClass('off').trigger('destroy.owl.carousel');
					owl_ts.find('.owl-stage-outer').children(':eq(0)').unwrap();
				}
			}
		});

		

		var main_slide = $("#main-slider");
			main_slide.owlCarousel({
				center: false,
				items: 1,
				loop: true,
				nav:true,
				dots:true,
				margin: 0,
				padding: 0,
				autoplay: true,
				touchDrag: true,
				pullDrag: false,
				mouseDrag: true,
				smartSpeed: 300,
				// animateOut: 'fadeOut',
				autoplayHoverPause: false,
				navText: [
					'<i class="material-icons dp48">keyboard_arrow_left</i>',
					'<i class="material-icons dp48">keyboard_arrow_right</i>'
				],
				navContainer: '.custom-nav',
				dotsContainer: '.custom-nav .custom-dots'
			});



			var main_slide2 = $("#main-slider2");
			main_slide2.owlCarousel({
				// items: 3,
				center: false,
				loop: true,
				nav: false,
				dots:false,
				margin: 0,
				autoplay: false,
				touchDrag: true,
				pullDrag: false,
				mouseDrag: true,
				smartSpeed: 500,
				autoplayHoverPause: false,
				responsiveClass:true,
				responsive:{
					0 : {
						items: 2
					},
					320 : {
						items: 2
					},
					500 : {
						items: 3
					},
					1000 : {
						items: 3
					}
				}
			});

	
			$(".test_nxt").on('click',function(){
				main_slide.trigger("next.owl.carousel")
			});
			$(".test_prv").on('click',function(){
				main_slide.trigger("prev.owl.carousel")
			});

			var middle_slide = $("#middle-slider");
			middle_slide.owlCarousel({
				center: false,
				items: 4,
				loop: true,
				nav:true,
				dots:true,
				margin: 0,
				padding: 0,
				autoplay: true,
				touchDrag: true,
				pullDrag: false,
				mouseDrag: true,
				smartSpeed: 500,
				// animateOut: 'fadeOut',
				autoplayHoverPause: false,
				navText: [
					'<i class="material-icons dp48">keyboard_arrow_left</i>',
					'<i class="material-icons dp48">keyboard_arrow_right</i>'
				],
				navContainer: '.custom-nav2',
				dotsContainer: '.custom-nav2 .custom-dots2',
				responsive:{
					0:{
						items:1,
						center: true,
						dotsEach: 4
					},
					600:{
						items:2,
						center: true,
						dotsEach: 4
					},
					1000:{
						items:3,
						dotsEach: 4
					},
					1280:{
						items:4,
						dotsEach: 4
					}
				}
			});

			var bottom_slide = $("#bottom-slider");
			bottom_slide.owlCarousel({
				center: false,
				items: 2,
				loop: true,
				nav:true,
				dots:true,
				margin: 0,
				padding: 0,
				autoplay: false,
				touchDrag: true,
				pullDrag: false,
				mouseDrag: true,
				smartSpeed: 300,
				// animateOut: 'fadeOut',
				autoplayHoverPause: false,
				navText: [
					'<i class="material-icons dp48">keyboard_arrow_left</i>',
					'<i class="material-icons dp48">keyboard_arrow_right</i>'
				],
				navContainer: '.custom-nav3',
				dotsContainer: '.custom-nav3 .custom-dots3',
				responsive:{
					0:{
						items:1,
						autoplay: true
					},
					600:{
						dotsEach: 2,
						items:2,
						autoplay: false
					},
					1000:{
						dotsEach: 2,
						items:2
					},
					1280:{
						dotsEach: 2,
						items:2
					},
				}
			});
			
			
	
		let ffade = $(".ffade")

			ffade.slick({
				draggable: false,
				dots: false,
				arrows: false,
				fade: true,
				infinite: true,
				speed: 1750,
				autoplay: true,
				autoplaySpeed: 3000,
				cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
				touchThreshold: 100
			})

		let child_nav_items = $(".child-nav-item_contents"),
			child_nav_items_card = child_nav_items.find(".card-nav")

			child_nav_items_card.find("li").each(function(){
				$(this).find("a").addClass("linked-nav")
			})
	

	let top_nav = $(".gtopNav"),
		child_item = $('.child-nav-item'),
		child_nav = $('.child-nav'),
		target_id = "",
		gtopNav_sp = $('.gtopNav-all_sp'),
		ftr_toggle = $('.ftr-menu_toggle')

	top_nav.find('li').each(function(){
		let target_el = "",
			coun = 1

		$(this).on('click',function(e){
			e.preventDefault()

			
			top_nav.find('li').find(".gmenu_link").find(".fa").removeClass("is-up")

			target_el = $(this).find(".gmenu_link").data("target")

			$("#toggle-profile").find(".is-open").css({
				opacity: 1
			})

			$(".gmenu_link").find(".close").css({
				display: "none"
			})

			$("#toggle-profile").css({
				backgroundColor: 'transparent',
				color: '#414042',
				transition: 'linear .2s'
			})

			$(".gmenu_link").css({
				"background-color" : "transparent",
				color: "#414042"
			})

			if($("#"+target_el).css('opacity') == 1){

				top_nav.find('li').find(".gmenu_link").find(".fa").removeClass("is-up")

				$(".child-nav").removeClass("is_viewed")
				$("#"+target_el).removeClass("is-fadeIn")
				$('body').removeClass('is_viewed_bg')
				$(this).find(".gmenu_link").css({
					"background-color" : "transparent",
					color: "#414042"
				});
				$(this).find(".logo a").css({
					color: "#414042"
				})

				
				$("#toggle-profile").find(".is-open").css({
					opacity: 1
				})
	
				$(".gmenu_link").find(".close").css({
					display: "none"
				})
	
				$("#toggle-profile").css({
					backgroundColor: 'transparent',
					color: '#414042',
					transition: 'linear .2s'
				})

				$(this).find("#toggle-nav").removeClass("is-close")

			}else{
				$("#toggle-nav").removeClass("is-close")

				$(".child-nav").addClass("is_viewed")
				$("#"+target_el).addClass("is-fadeIn")
				$(this).find(".gmenu_link").find(".fa").addClass("is-up")
				$('body').addClass('is_viewed_bg')
				$(this).find(".gmenu_link").css({
					"background-color" : "#E04141",
					color: "white",
					"border-radius": "50px"
				});
				$(this).find(".logo a").css({
					color: "#fff"
				})

				child_item.not($("#"+target_el)).removeClass("is-fadeIn")
	
				$(this).find("#toggle-profile").find(".is-open").css({
					opacity: 0
				})
				$(this).find("#toggle-profile").find(".close").css({
					display: "block"
				})

				$(this).find("#toggle-profile").css({
					backgroundColor: '#E04141',
					color: 'white',
					transition: 'linear .2s'
				})
	
				
				
				$(this).find("#toggle-nav").addClass("is-close")
				
				$("#"+$(this).find("#toggle-nav").data("target")).addClass("is-fadeIn")

			}
			
			return false
		})
	})
	

	gtopNav_sp.find(".gtopNav-all").on("click",function(e){
		e.preventDefault()
		if($(window).innerWidth() < 561) {
			if(!$(this).parents(".parent_gnav").find(".n_list").is(":hidden")) {
				$(this).find(".gtopNav-all_plus").html("add")
			}else{
				$(this).find(".gtopNav-all_plus").html("remove")
			}
			$(this).parents(".parent_gnav").find(".n_list").slideToggle()
		}else{
			return false
		}
	})

	$(window).on("load scroll",function() {
		let div = $(this);
		var innerWidth = $(window).width() + 17;
		if(div.scrollTop() > 30) {
			// $('.ob_banner_section').css({
			// 	marginTop: 0
			// })
			$('.head-wrp').css({
				position: "fixed"
				
			})
			if( innerWidth < 768 ){
				$('.head-wrp').css({
					'background-color': 'rgba(255, 255, 255, 1)',
					'height': "60px"
				})
			
				$('.home .head-wrp, .page-id-47 .head-wrp,.page-id-54 .head-wrp,.page-id-53 .head-wrp').css({
					position: "fixed",
					background: 'rgba(255, 255, 255, 0)'
				})
				$('.home .head-wrp .head-cntr, .page-id-47 .head-wrp .head-cntr,.page-id-54 .head-wrp .head-cntr,.page-id-53 .head-wrp .head-cntr').css({
					background: 'rgba(255, 255, 255, 0)'
				})
			}
		}else{
			// $('.ob_banner_section').css({
			// 	marginTop: $(".head-wrp").innerHeight()+"px"
			// })
			if ($(window).innerWidth() < 768){
				$('.head-wrp').css({
					position: "relative"
				})
			
				
				$('  .home .head-wrp, .page-id-47 .head-wrp,.page-id-54 .head-wrp,.page-id-53 .head-wrp').css({
					position: "fixed",
					background: 'rgba(255, 255, 255, 0)'
				})
				$('.home .head-wrp .head-cntr, .page-id-47 .head-wrp .head-cntr,.page-id-54 .head-wrp .head-cntr,.page-id-53 .head-wrp .head-cntr').css({
					background: 'rgba(255, 255, 255, 0)'
				})
			}else{
				$('.head-wrp').css({
					position: "fixed"
				})

			}


		}
	})

	$(".news_dropdown").on("click", ".init", function() {
		$(this).closest("ul").children('li:not(.init)').slideToggle();
		$(".init").addClass('test');
	});
	
	var allOptions = $(".news_dropdown").children('li:not(.init)');
	$(".news_dropdown").on("click", "li:not(.init)", function() {
		allOptions.removeClass('selected');
		$(this).addClass('selected');
		$("ul").children('.init').html($(this).html());
		allOptions.toggle();
	});

	
	
	// back TO TOP
	var $toTop = $('#to-top');

	$toTop.click(function(e){
		e.preventDefault()

		var speed = 500;
		$("html, body").animate({scrollTop:0}, speed)

		return false
	})

	ftr_toggle.on("click", function (e) {
		e.preventDefault()

		if (!$(this).next().is(":hidden")) {
			$(this).removeClass("is_view")
		} else {
			$(this).addClass("is_view")
		}

		$(this).next().slideToggle()
		ftr_toggle.not($(this)).removeClass("is_view")
		ftr_toggle.not($(this)).next().slideUp()

		return false
	})
	
	$('.ftr').css({
		paddingBottom: $('.ftr-fbtn').innerHeight() + 30 +'px'
	})

	$(".ynet-toggle").on("click",function(e){
		e.preventDefault()
		if(!$(this).parents(".ynet-con").find(".ftr-lg_menu").is(":hidden")) {
			$(this).find("i").html("add")
		}else{
			$(this).find("i").html("remove")
		}
		$(this).parents(".ynet-con").find(".ftr-lg_menu").slideToggle()
		return false
	})

	$.ajaxSetup ({
		// Disable caching of AJAX responses */
		cache: false
	});

	// news select
	$("#news_cat_sel").on("change",function(){
		let cat_value = $(this).children("option:selected").val()
		window.location.href = cat_value
	})

	$("#sitemap-links").find("li").each(function(){
		$(this).find("a").addClass("xl-link")
	})

	$(".breadcrumbs").find("span a span:eq(0)").html('<i class="material-icons dp48">home</i>');

	if ($(window).innerWidth() < 768) {

		$(".breadcrumbs .container>span").each(function () {
			if ($(this).index() > 1) {
				$(this).css({
					marginLeft: 48 + 'px'
				})
			}
		})
	} else {

		$(".breadcrumbs .container>span").each(function () {
			if ($(this).index() > 1) {
				$(this).css({
					marginLeft: 0
				})
			}
		})
	}

	$(".cjhs-card.has_img-bg .cjhs-card_body").css({
		minHeight: $(".mh").innerHeight()+'px'
	})

	let shisetsu_gal = $('#shisetsu_gal'),
		shisetsu_gal_ln = shisetsu_gal.find(".gal_item").length

	var max_count = 8

	function view_more_img(max_count) {
		if($(window).innerWidth() < 769) {

			if(shisetsu_gal_ln < max_count) {
				$("#show_more_img").css({
					display: 'none'
				})
			}else{
				$("#show_more_img").css({
					display: 'block'
				})
			}

			for( let sh = 1; sh <= shisetsu_gal_ln; sh++ ) {
				if(sh >= max_count) {
					shisetsu_gal.find(".gal_item").eq(sh).css({
						display: 'none',
						opacity: 0,
						transition: "linear .2s"
					})
				}else{
					shisetsu_gal.find(".gal_item").eq(sh).css({
						display: 'block',
						opacity: 1,
						transition: "linear .2s"
					})
				}
			}
		}else{
			shisetsu_gal.find(".gal_item").css({
				display: 'block'
			})
			$("#show_more_img").css({
				display: 'none'
			})
		}
	}

	view_more_img(max_count)
	
	let show_more_btn = $("#show_more_img"),
		add_counter = 8
		
		show_more_btn.on("click",function(e){
			e.preventDefault()
			max_count += add_counter

			view_more_img(max_count)

			return false
		})

}) (jQuery);

$(window).on("resize",function(){
	let shisetsu_gal = $('#shisetsu_gal'),
		shisetsu_gal_ln = shisetsu_gal.find(".gal_item").length,
		max_count = 8

		if($(window).innerWidth() < 769) {
			if(shisetsu_gal_ln < max_count) {
				$("#show_more_img").css({
					display: 'none'
				})
			}else{
				$("#show_more_img").css({
					display: 'block'
				})
			}
			for( let sh = 1; sh <= shisetsu_gal_ln; sh++ ) {
				if(sh >= max_count) {
					shisetsu_gal.find(".gal_item").eq(sh).css({
						display: 'none'
					})
				}else{
					shisetsu_gal.find(".gal_item").eq(sh).css({
						display: 'block'
					})
				}
			}
		}else{
			shisetsu_gal.find(".gal_item").css({
				display: 'block'
			})
			$("#show_more_img").css({
				display: 'none'
			})
		}


})

window.onload = function() {
    if (navigator.userAgent.indexOf("Firefox") > 0) {
            var position = $(window).scrollTop(); 
            $(window).on("scroll",function(event) {
            
                    var scroll = $(window).scrollTop();
                    if($(".child-nav").css("opacity") != 1) {
                            if(scroll >= position) {
                                    $('.head-wrp').addClass('hide_top')
                            
                            } else {
                                    $('.head-wrp').removeClass('hide_top')
                            }
                            position = scroll;
                    }
            })
    }else if(navigator.userAgent.indexOf("MSIE ") > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)){
            $(window).bind('mousewheel', function(event) {
                    if($(".child-nav").css('opacity') == 1){
                    }else{
                            if (event.originalEvent.wheelDelta >= 0) {
                                    $('.head-wrp').removeClass('hide_top')
                            }
                            else {
                                    $('.head-wrp').addClass('hide_top')
                            }
                    }
            })
    }else{
            var startPos = 0,winScrollTop = 0;
            $(window).on('scroll',function(){
                    winScrollTop = $(this).scrollTop();
                    if($(window).innerWidth() > 768) {
                        if($(".child-nav").css("opacity") != 1) {
                            if (winScrollTop >= startPos) {
                                    if(winScrollTop >= 200){
                                            $('.head-wrp').addClass('hide_top')
                                    }
                            } else {
                                    $('.head-wrp').removeClass('hide_top')
                            }
                            startPos = winScrollTop;
                        }
                    }
            });
    }
}

// window.onload = function() {
	
// 	//  alert(navigator.userAgent);
// 	if (navigator.userAgent.indexOf("Firefox") > 0) {
// 		var position = $(window).scrollTop(); 

// 		$(window).on("scroll",function(event) {
		
// 			var scroll = $(window).scrollTop();
// 			if(scroll >= position) {
// 				$('.head-wrp').addClass('hide_top')
			   
// 			} else {
// 				$('.head-wrp').removeClass('hide_top')
// 			}
// 			position = scroll;
// 		})
// 	}else{
// 		$(window).bind('mousewheel', function(event) {
// 			if($(".child-nav").css('opacity') == 1){

// 			}else{

// 				if (event.originalEvent.wheelDelta >= 0) {
// 					$('.head-wrp').removeClass('hide_top')
// 				}
// 				else {
// 					$('.head-wrp').addClass('hide_top')
// 				}
// 			}
// 		})
// 		// $(window).on("scroll load", function(){
// 		// 	if($(this).scrollTop() == 0) {
// 		// 		$('.head-wrp').removeClass('hide_top')d
// 		// 	}
// 		// })
// 	}
// }



$(window).on("resize",function(){
	if($(this).innerWidth()>560) {
		$('.gtopNav-all_sp').find(".gtopNav-all").next().slideDown()
		$('.n_list').slideDown()
	}
});

$(window).on("load resize", function(){	

	$(".dept-sec .card-nav li").each(function(){
		$(this).find(".eq-h").css({
			height: $(this).innerHeight() + "px"
		})
	})

	if($(this).innerWidth() > 800) {
		$(".top_slides .col_right .slide-sm_items li.item").each(function(){
			$(this).css({
				height: $(".top_slides .col_left").innerHeight() / 2 + "px"
			})
		})
	}
})
