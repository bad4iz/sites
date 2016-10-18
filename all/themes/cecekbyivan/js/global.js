$(function () {

	var EA = {

		animSpeed: 333,
		isMenuMinified: false,
		isMobile: $('body').width() < 640,
		isTouchscreen: 'ontouchend' in document,

		toggleHomeVideo: function (e) {
			var isVisible = $('.video-box').is(':visible');

			return $('.video-box')
				.html(isVisible ? '' : '<iframe class="video" src="//player.vimeo.com/video/131515168?title=0&amp;byline=0&amp;portrait=0&amp;color=19b6f1&amp;autoplay=1" width="940" height="528" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
				.toggle();
		}
	},

	e = {
		'.play':								['click', EA.toggleHomeVideo],
		'.video-box':							['click', EA.toggleHomeVideo]
	},
	m = {};
});