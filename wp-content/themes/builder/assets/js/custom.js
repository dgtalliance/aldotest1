(function ($) {
	// Home slide
	var $homeSlide = $(".slide");
	if ($homeSlide.length) {
		$homeSlide.greatSlider({
			type: "fade",
			autoplay: false,
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

if (document.querySelector(".more")) {
	document.querySelector(".more").addEventListener("click", function () {
		const button = this;
		const details = document.querySelector(".details");

		if (button.classList.contains("active")) {
			button.classList.remove("active");
			button.textContent = "Learn More";
			details.style.height = `${details.scrollHeight}px`;
			setTimeout(() => {
				details.style.height = "0";
			}, 10);
		} else {
			button.classList.add("active");
			button.textContent = "View Less";
			details.style.height = "0";
			details.classList.add("expanding");
			setTimeout(() => {
				details.style.height = `${details.scrollHeight}px`;
				details.classList.remove("expanding");
			}, 10);
		}
	});
}
