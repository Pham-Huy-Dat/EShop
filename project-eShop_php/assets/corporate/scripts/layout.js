var Layout = function () {
	// IE mode
	var isIE8 = false;
	var responsive = true;

	var responsiveHandlers = [];

	// runs callback functions set by App.addResponsiveHandler().
	var runResponsiveHandlers = function () {
		// reinitialize other subscribed elements
		for (var i in responsiveHandlers) {
			var each = responsiveHandlers[i];
			each.call();
		}
	}

	// handle the layout reinitialization on window resize
	var handleResponsiveOnResize = function () {
		var resize;
		if (isIE8) {
			var currheight;
			$(window).resize(function () {
				if (currheight == document.documentElement.clientHeight) {
					return; //quite event since only body resized not window.
				}
				if (resize) {
					clearTimeout(resize);
				}
				resize = setTimeout(function () {
					runResponsiveHandlers();
				}, 50); // wait 50ms until window resize finishes.                
				currheight = document.documentElement.clientHeight; // store last body client height
			});
		} else {
			$(window).resize(function () {
				if (resize) {
					clearTimeout(resize);
				}
				resize = setTimeout(function () {
					runResponsiveHandlers();
				}, 50); // wait 50ms until window resize finishes.
			});
		}
	}

	var handleMobiToggler = function () {
		$(".mobi-toggler").on("click", function (event) {
			event.preventDefault();//the default action of the event will not be triggered

			$(".header").toggleClass("menuOpened");
			$(".header").find(".header-navigation").toggle(300);
		});
	}

}();