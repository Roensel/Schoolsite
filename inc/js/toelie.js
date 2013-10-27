$(function() {
	$(document).foundation('orbit', {
		slide_number: false,
		bullets: false
	});

	var myPlaylist = new jPlayerPlaylist({
		jPlayer: "#jplayer_sidebar",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			title: "Jitterbug swing",
			artist: "Ernest",
			mp3: "http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
			oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
		}
	], {
		playlistOptions: {
			enableRemoveControls: true
		},
		swfPath: "/js",
		supplied: "ogv, m4v, oga, mp3",
		smoothPlayBar: true,
		keyEnabled: true,
	});
});

		// ready: function() {
		// 	$(this).jPlayer("setMedia", {
		// 		m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
		// 		oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
		// 	});
		// 	$(this).jPlayer("setMedia", {
		// 		m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
		// 		oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
		// 	});
		// },
