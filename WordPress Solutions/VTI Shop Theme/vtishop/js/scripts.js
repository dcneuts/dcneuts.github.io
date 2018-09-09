$('div.prod-related-large').attr('id', 'related-products');

onMobResize = function () {
	var width = $(window).width();
	if (width >= 767 && width <= 991) {
		$('div#single-prod-main div.wpb_column').removeClass('vc_col-sm-6').addClass('vc_col-sm-9');
	} else {
		$('div#single-prod-main div.wpb_column').removeClass('vc_col-sm-9').addClass('vc_col-sm-6');
	}

	if (width >= 767 && width <= 991) {
		$('div#single-prod-sidebar').removeClass('vc_col-sm-9');
	} else {
		$('div#single-prod-sidebar').addClass('vc_col-sm-9');
	}

	if (width >= 480 && width <= 766) {
		$('div.prod-related-large').addClass('col-sm-10 col-sm-offset-1');
	} else {
		$('div.prod-related-large').removeClass('col-sm-10 col-sm-offset-1');
	}

	if (width >= 0 && width <= 766) {
		$('div.prod-related-large').hide();
	} else {
		$('div.prod-related-large').show();
	}

	if (width >= 480 && width <= 766) {
		$('section.related.products ul.products.columns-3 li.product').css({"clear": "initial"});
	} else {
	}

};

$(document).ready(onMobResize);
$(window).resize(onMobResize);