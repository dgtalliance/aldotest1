(function ($) {
	// Home slide
	var $homeSlide = $(".slide");
	if ($homeSlide.length) {
		$homeSlide.greatSlider({
			type: "fade",
			autoplay: true,
			navSpeed: 1000,
			lazyLoad: true,
			nav: false,
			bullets: true,
			items: 1,
			autoDestroy: true,
			layout: {
				bulletDefaultStyles: false,
				wrapperBulletsClass: "slide-bullets",
				resizeClass: "ms-resize",
				arrowPrevContent: "<span>Prev</span>",
				arrowNextContent: "<span>Next</span>",
			},

			onInited: function () {
				var $a = 0;
				var $similar = $(".clidxboost-gs-wrapper-bullets");
				var $bulletBtn = $similar.find(".gs-bullet");
				if ($bulletBtn.length) {
					$bulletBtn.each(function (index) {
						var label = "Bullet " + (index + 1);
						$a += 1;
						$(this).text($a);
						$(this).attr("aria-label", label);
					});
				}

				var $slideArrows = $(".slide-arrows button");
				$slideArrows.each(function (index) {
					var label = index === 0 ? "Previous" : "Next";
					$(this).attr("aria-label", label);
				});
			},
		});
	}
})(jQuery);
