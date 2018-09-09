$(function () {

// Hover for dropdown menus
	function liveWindowSize() {
		let screenWidth = $(window).width();
		return screenWidth;
	}

	$(document).ready(liveWindowSize);
	$(window).resize(liveWindowSize);
	liveWindowSize();

	$(window).ready(function () {
		if ($(liveWindowSize).width() > 797) {
			$('#our-approach, ' +
				'#pathways, ' +
				'#books, ' +
				'#about')
				.attr("data-hover", "dropdown").dropdownHover();
		} else {
			$('#our-approach, #pathways, #books, #about').removeAttr("data-hover");
			return false;
		}
	});

	$(window).resize(function () {
		if ($(liveWindowSize).width() < 797) {
			$('#our-approach, ' +
				'#pathways, ' +
				'#books, ' +
				'#about')
				.removeAttr("data-hover").off("dropdownHover");
		}
	});
	/* Another solution would be to just add data-hover attr to HTML doc and then use script if under screen size to remove it. */

// Scroll to Anchor
// Select all links with hashes
$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
			var windowHeight = 150;
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {

        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - windowHeight
        }, 1000, function() {

          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.blur();
          };
        });
      }
    }
  });

// Lightbox Functionality
	$(document).on('click', '[data-toggle="lightbox"]', function (event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});

	// Disable buttons not allowed yet
	$('#visbriefing-btn,#visualmachine-btn,#visualscheduling-btn').addClass('btn-disabled').attr('disabled', 'disabled').prop('disabled', true).click(function (event) {
		event.preventDefault();
	});

//	Prevent users from accessing context menu via right-click
	$('body').on('contextmenu', 'img', function(e){
		return false;
	});

//	Tracking consent helper for Matomo
	$('div.eupopup-buttons').on('click', '.eupopup-button_1', function (event) {
		event.preventDefault();
		_paq.push(['rememberConsentGiven'])
	});

});
