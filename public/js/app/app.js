jQuery(function ($) {

	function isEmpty(value) {
		return (typeof value === "undefined" || value === null || value === '' || value === "" || value.length === 0) || (Object.keys(value).length === 0 && value.constructor === Object);
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

	function removeObjectFromArray(dataArray, filed, value) {
		dataArray = dataArray.filter(function (val) {
			if (typeof val[filed] === "undefined")
				return;
			if (val[filed] != value) {
				return val;
			}
		});
		return dataArray;
	}

	function checkIfObjectInArray(daraArray, key, value) {
		if (daraArray.filter(function (obj) {
				return obj[key] == value;
			}).length > 0) {
			return true;
		}
		return false
	}

	function replaceAll(str, mapObj) {
		var re = new RegExp(Object.keys(mapObj).join("|"), "gi");

		return str.replace(re, function (matched) {
			return mapObj[matched.toLowerCase()];
		});
	}

	function blogPostsTemplate(posts) {
		var postTemplate = '<div class="card mb-4"> ' +
			'<a href="_url" class="zoom-effect"> ' +
			'<div class="thumbnail"> ' +
			'<img class="card-img-top" src="_image" alt=""> ' +
			'</div> ' +
			'</a> ' +
			'<div class="card-body"> ' +
			'<a href="_url"> ' +
			'<h2 class="card-title brown">_title</h2> ' +
			'</a> ' +
			'<p class="card-text">_excerpt</p> ' +
			'<a href="_url" class="text-center read-more">Read More</a> ' +
			'</div> ' +
			'<div class="card-footer text-muted">' +
			'Posted on _created_at by <a href="_link">_link</a>' +
			'</div> ' +
			'</div>';

		var postsHtml = '';
		posts.forEach(function (obj) {
			var mapObj = {
				_title: obj._title,
				_excerpt: obj._excerpt,
				_image: obj._image,
				_url: obj._url,
				_created_at: obj._created_at,
				_link: obj._link
			};
			postsHtml += replaceAll(postTemplate, mapObj);
		});

		return postsHtml;
	}

	function addToWishList(product, click) {

		if (isEmpty(Cookies.get('wishlist'))) {
			var wishlist = [];
			wishlist.push(product);
			Cookies.set('wishlist', JSON.stringify(wishlist), {expires: 7, path: '/'});
			addRemoveFromToWishListAnim(click);
			addItemHtmlToWishList(product, wishlist);
			console.log('list created');
			console.log(Cookies.get('wishlist'));
		} else {
			var wishlist = $.parseJSON(Cookies.get('wishlist'));
			console.log(wishlist);
			if (checkIfObjectInArray(wishlist, 'slug', product.slug)) {
				wishlist = removeObjectFromArray(wishlist, 'slug', product.slug);
				removeItemHtmlToWishList(product, wishlist);
				console.log('removed');
				console.log(wishlist);
			} else {
				wishlist.push(product);
				addItemHtmlToWishList(product, wishlist);
				console.log('added to list');
				console.log(wishlist);
			}
			addRemoveFromToWishListAnim(click);
			Cookies.set('wishlist', JSON.stringify(wishlist));
			console.log(Cookies.get('wishlist'));
		}
	}

	function addRemoveFromToWishListAnim(click) {
		if (click.hasClass('liked')) {
			click.removeClass('liked');
			return
		} else {
			click.addClass('liking');
			click.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function (e) {
				click.addClass('liked').removeClass('liking');
			});
		}
	}

	function addItemHtmlToWishList(product, wishlist) {
		var $wishlistHtml = $("ul.wishlist");
		$wishlistHtml.append('<li data-product-slug="' + product.slug + '"> ' +
			'<div class="row wishlist-item">' +
			'<img class="col-lg-6" src="' + product.image + '" alt=""/> ' +
			'<p class="col-lg-6 text-center vertically-center title text-1">' + product.name + '</p></div></li>');
		$('.wishlist-container .number-of-products').html(wishlist.length);
		if (wishlist.length >= 1) {
			$('.wishlist-container .heart').addClass('liked');
		}
	}

	function removeItemHtmlToWishList(product, wishlist) {
		var $wishlistHtml = $("ul.wishlist");
		$wishlistHtml.find("li[data-product-slug='" + product.slug + "']").remove();
		$('.wishlist-container .number-of-products').html(wishlist.length);
		if (wishlist.length < 1) {
			$('.wishlist-container .heart').removeClass('liked');
		}
	}

	if ($('body.blog').length)
	{
		$('.pagination .page-item a').on('click', function (event) {

			event.preventDefault();
			var $currentpage = $(this);
			console.log($('.categories-widget .category.active').attr('href'));
			$.ajaxSetup({
				headers: {
					'X-XSRF-Token': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				method: "POST",
				url: home_url + '/blog/get/posts',
				type: 'POST',
				data: ({
					_token: $('meta[name="csrf-token"]').attr('content'),
					category: (parseInt($('.categories-widget .category.active').length) >= 1 ? $('.categories-widget .category.active').attr('href') : ''),
					tag: (parseInt($('.tags-widget .tag.active').length) >= 1 ? $('.tags-widget .tag.active').attr('href') : ''),
					postPrePage: $('ul.pagination').attr('data-post-pre-page'),
					page: $currentpage.attr('href')
				}),
				cache: false,

				beforeSend: function () {

				},

				success: function (response) {
					var postsHtnnl = blogPostsTemplate(response.posts);
					$('.pagination .page-item a').removeClass('active');
					$currentpage.addClass('active');
					$('body.blog section.blog .posts').empty().append(postsHtnnl);
				},

				error: function (jqXHR, textStatus, errorThrown) {
					console.log(jqXHR);
					console.log(textStatus);
					console.log(errorThrown);
				}
			});

		});

		$('.categories-widget .category').on('click', function (event) {

			event.preventDefault();

			var currentCategory = $(this);

			$.ajaxSetup({
				headers: {
					'X-XSRF-Token': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				method: "POST",
				url: home_url + '/blog/get/posts',
				type: 'POST',
				data: ({
					_token: $('meta[name="csrf-token"]').attr('content'),
					category: currentCategory.attr('href'),
					tag: (parseInt($('.tags-widget .tag.active').length) >= 1 ? $('.tags-widget .tag.active').attr('href') : ''),
					postPrePage: $('ul.pagination').attr('data-post-pre-page'),
					page: (parseInt($('.pagination .page-item a.active').length) >= 1 ? $('.pagination .page-item a.active').attr('href') : 1)
				}),
				cache: false,

				beforeSend: function () {

				},

				success: function (response) {
					var postsHtnnl = blogPostsTemplate(response.posts);
					$('.categories-widget .category').removeClass('active');
					currentCategory.addClass('active');
					$('body.blog section.blog .posts').empty().append(postsHtnnl);
				},

				error: function (jqXHR, textStatus, errorThrown) {
					console.log(jqXHR);
					console.log(textStatus);
					console.log(errorThrown);
				}
			});
		});

		$('.tags-widget .tag').on('click', function (event) {

			event.preventDefault();

			var currentTag = $(this);

			$.ajaxSetup({
				headers: {
					'X-XSRF-Token': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				method: "POST",
				url: home_url + '/blog/get/posts',
				type: 'POST',
				data: ({
					_token: $('meta[name="csrf-token"]').attr('content'),
					category: (parseInt($('.categories-widget .category.active').length) >= 1 ? $('.categories-widget .category.active').attr('href') : ''),
					tag: currentTag.attr('href'),
					postPrePage: $('ul.pagination').attr('data-post-pre-page'),
					page: (parseInt($('.pagination .page-item a.active').length) >= 1 ? $('.pagination .page-item a.active').attr('href') : 1)
				}),
				cache: false,

				beforeSend: function () {

				},

				success: function (response) {
					var postsHtnnl = blogPostsTemplate(response.posts);
					$('.tags-widget .tag').removeClass('active');
					currentTag.addClass('active');
					$('body.blog section.blog .posts').empty().append(postsHtnnl);
				},

				error: function (jqXHR, textStatus, errorThrown) {
					console.log(jqXHR);
					console.log(textStatus);
					console.log(errorThrown);
				}
			});
		});

	}

	$('.products-slider').on('click', '.add-wishlist', function (event) {
		event.preventDefault();
		var product = {};
		product.slug = $(this).attr('data-product-slug');
		product.image = $(this).attr('data-product-image');
		product.name = $(this).attr('data-product-name');
		addToWishList(product, $(this));
	});

});