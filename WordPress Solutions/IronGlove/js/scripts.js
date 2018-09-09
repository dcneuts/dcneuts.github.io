$(function () {

	//Scroll to Anchor
	$('a[href^="#"]').on('click', function (event) {
		event.preventDefault();
		const target  = this.hash;
		const $target = $(target);

		$('html, body').animate({
			scrollTop: $target.offset().top
		}, 1000, 'swing', function () {
			window.location.hash = target;
		});
	});

	//Modification of Post Grid Plugin output
	$("a.element.element_2.read_more:contains('Read more.')").html("Read more");

});
