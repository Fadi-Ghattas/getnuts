var amountScrolled = 200;
$(window).on('scroll', function (e) {
	if ($(window).scrollTop() > amountScrolled) {
		$('.backToTop').addClass('show');
	} else {
		$('.backToTop').removeClass('show');
	}
	$('.backToTop').on('click', function () {
		$('body,html').stop(true, false).animate({
			scrollTop: 0
			// Don't want to use jQueryUI, remove this easing
		}, 1000);
		// return false;
	});
});

//Firefox
$(window).bind('DOMMouseScroll', function (e) {
	if ($(window).scrollTop() > amountScrolled) {
		$('.backToTop').addClass('show');
	} else {
		$('.backToTop').removeClass('show');
	}
	$('.backToTop').on('click', function () {
		$('body,html').stop(true, false).animate({
			scrollTop: 0
			// Don't want to use jQueryUI, remove this easing
		}, 1000);
		// return false;
	});
});

//IE, Opera, Safari
$(window).bind('mousewheel', function (e) {
	if ($(window).scrollTop() > amountScrolled) {
		$('.backToTop').addClass('show');
	} else {
		$('.backToTop').removeClass('show');
	}
	$('.backToTop').on('click', function () {
		$('body,html').stop(true, false).animate({
			scrollTop: 0
			// Don't want to use jQueryUI, remove this easing
		}, 1000);
		// return false;
	});
});

jQuery(function ($) {

	loadWishlist();
	function loadWishlist() {
		if (!isEmpty(Cookies.get('wishlist'))) {
			var wishlist = $.parseJSON(Cookies.get('wishlist'));
			var $wishlistHtml = $("ul.wishlist");
			$wishlistHtml.empty();
			if (wishlist.length >= 1) {
				$('.wishlist-container .heart').addClass('liked');
			}
			wishlist.forEach(function (product) {
				$("a[data-product-slug='" + product.slug + "']").addClass('liked');
				$wishlistHtml.append('<li data-product-slug="' + product.slug + '"> ' +
					'<div class="row wishlist-item">' +
					'<img class="col-lg-6" src="' + product.image + '" alt=""/> ' +
					'<p class="col-lg-6 vertically-center text-center title text-1">' + product.name + '</p></div></li>');
			});

			$('.wishlist-container .number-of-products').html(wishlist.length);
		}
	}

	function isEmpty(value) {
		return (typeof value === "undefined" || value === null || value === '' || value === "" || value.length === 0) || (Object.keys(value).length === 0 && value.constructor === Object);
	}

	function slickCarousel(slider, options) {
		return $('body').find("[data-slider-name='" + slider + "']").slick(options);
	}

	function destroyCarousel($carousel) {
		$carousel.slick('unslick');
		$carousel.empty();
	}

	function productsSliderTemplate(products) {

		var productsTemplate = '<div class="col-lg-3 product zoom-effect _category"> ' +
			'<div class="thumbnail"> ' +
			'<img src="_image" alt=""class="img-fluid fadeIn"/> ' +
			'<div class="heart-container"> ' +
			'<a data-product-name="_title" data-product-image="_image" data-product-slug="_slug" class="add-wishlist heart" href="#" title="Add to my wishlist"></a> ' +
			'</div> ' +
			'</div> ' +
			'<div class="content"> ' +
			'<h3 class="text-center title">_title</h3> ' +
			'<p class="benefits text-1"> ' +
			'<span class="">Benefits:</span>_benefits ' +
			'</p> ' +
			'</div> ' +
			'</div>';

		var productsHtml = '';
		products.forEach(function (obj) {
			var mapObj = {
				_title: obj._title,
				_category: obj._category,
				_image: obj._image,
				_benefits: obj._benefits,
				_slug: obj._slug
			};
			productsHtml += replaceAll(productsTemplate, mapObj);
		});

		return productsHtml;
	}

	function replaceAll(str, mapObj) {
		var re = new RegExp(Object.keys(mapObj).join("|"), "gi");

		return str.replace(re, function (matched) {
			return mapObj[matched.toLowerCase()];
		});
	}

	function filter(dataArray, filed, valuesArray) {
		dataArray = dataArray.filter(function (val) {
			if (typeof val[filed] === "undefined")
				return;
			if (valuesArray.includes(val[filed])) {
				return val;
			}
		});
		return dataArray;
	}

	if ($('body.gift-box').length) {
		$(".fancybox").fancybox({
			openEffect: 'elastic',
			closeEffect: 'elastic',
			nextClick: true,
			helpers: {
				overlay: {
					locked: false
				},
				title: {
					type: 'inside'
				}
			}
		});
	}

	var $homeCarousel;
	var $homeCarouselOptions = {
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		cssEase: 'linear',
		arrows: true,
		dots: false,
		prevArrow: $('.full-slider-wrapper .prev'),
		nextArrow: $('.full-slider-wrapper .next'),
		responsive: [
			{
				breakpoint: 991,
				settings: {
					arrows: false,
					prevArrow: false,
					nextArrow: false
				}
			},
		]
	};
	$homeCarousel = slickCarousel('full-slider', $homeCarouselOptions);

	var $productsCarousel;
	var $productsCarouselOptions = {
		infinite: false,
		// slidesToShow: 6,
		// slidesToScroll: 6,
		// autoplay: true,
		// fade: true,
		// cssEase: 'linear',
		arrows: false,
		dots: true,
		//mobileFirst: true,
		rows: 2,
		slidesPerRow: 4,
		// prevArrow: $('.full-slider-wrapper .prev'),
		// nextArrow: $('.full-slider-wrapper .next'),
		// variableWidth: true,
		// draggable: true,
		// centerMode: true,
		// swipeToSlide: true
		//adaptiveHeight: true,
		//	onInit: function(){
		//console.log(2);
		// This runs after the slickgrid is first initialized.
		//this.$list.css('height',this.$slider.parents('.inner').outerHeight(true))
		//}

		responsive: [

			{
				breakpoint: 992,
				settings: {
					arrows: false,
					rows: 3,
					slidesPerRow: 3,
				}
			},
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					rows: 4,
					slidesPerRow: 2,
				}
			},
			{
				breakpoint: 574,
				settings: {
					arrows: false,
					rows: 4,
					slidesPerRow: 2,
				}
			},
			{
				breakpoint: 505,
				settings: {
					arrows: false,
					rows: 8,
					slidesPerRow: 1,
				}
			},
		]
	};
	var productSlider = 'products-slider';
	$('body').find("[data-slider-name='" + productSlider + "']").on('init reInit', function (event, slick, direction) {
		loadWishlist();
	});
	$productsCarousel = slickCarousel(productSlider, $productsCarouselOptions);

	$('section.products .filters .filter a').on('click', function (event) {
		event.preventDefault();
		if ($('body.products').length) {
			window.location.hash = $(this).attr('data-type');
		}
		filterProducts($(this).attr('data-type'));
	});

	if ($('body.products').length) {

		var hashCategory = window.location.hash.substring(1);
		if (hashCategory.length) {
			filterProducts(hashCategory);
		}
	}

	function filterProducts(category)
	{
		$('section.products .filters .filter a').removeClass('active');
		$('.filters .filter a[data-type="' + category + '"]').addClass('active');
		destroyCarousel($productsCarousel);
		var filteredProducts = filter(products, '_category', [category]);
		$productsCarousel.append(productsSliderTemplate(filteredProducts));
		$productsCarousel = slickCarousel($productsCarousel.attr('data-slider-name'), $productsCarouselOptions);
	}

	var mixesSlider = 'mixes-slider'
	var $mixesCarousel;
	var $mixesCarouselOptions = {
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		cssEase: 'linear',
		arrows: true,
		dots: false,
		slide: 'div.mix',
		track: 'div.mix',
		prevArrow: $('.mixes-slider-wrapper .prev'),
		nextArrow: $('.mixes-slider-wrapper .next'),
		pauseOnHover: true,
		//mobileFirst: true,
		// rows: 2,
		// slidesPerRow: 4,
		// variableWidth: true,
		// draggable: true,
		// centerMode: true,
		// swipeToSlide: true
		//adaptiveHeight: true,
		//	onInit: function(){
		//console.log(2);
		// This runs after the slickgrid is first initialized.
		//this.$list.css('height',this.$slider.parents('.inner').outerHeight(true))
		//}
		responsive: [
			{
				breakpoint: 991,
				settings: {
					arrows: false,
					prevArrow: false,
					nextArrow: false
				}
			},
		]
	};

	$mixesCarousel = slickCarousel(mixesSlider, $mixesCarouselOptions);

	if ($('.our-mixes').length) {
		var hashMix = window.location.hash.substring(1);
		if (hashMix.length) {
			$mixesCarousel.slick('slickGoTo', $('.slick-slide[data-slug="' + hashMix + '"]').attr('data-slick-index'));
		}
	}

});