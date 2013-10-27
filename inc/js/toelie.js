$(function() {
	$(document).foundation('orbit', {
		slide_number: false,
		bullets: false
	});

	$("#jplayer_sidebar").jPlayer({
		ready: function() {
			$(this).jPlayer("setMedia", {
				m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
				oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
			});
			$(this).jPlayer("setMedia", {
				m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
				oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
			});
		},
		swfPath: "/js",
		supplied: "m4a, oga"
	});


	//  Find any element starting with a # in the URL
	//  And listen to any click events it fires
	$('a[href^="#"]').click(function() {
		//  Find the target element
		var target = $($(this).attr('href'));

		//  And get its position
		var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

		//  jQuery will return false if there's no element
		//  and your code will throw errors if it tries to do .offset().left;
		if(pos) {
			//  Scroll the page
			$('html, body').animate({
				scrollTop: pos.top,
				scrollLeft: pos.left
			}, 1000);
		}

		//  Don't let them visit the url, we'll scroll you there
		return false;
	});

	var GoSquared = {acct: 'GSN-396664-U'};

});

