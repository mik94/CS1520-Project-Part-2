<script src="https://www.youtube.com/iframe_api"></script>

<script>
var player;

function onYouTubeIframeAPIReady() {
	player = new YT.Player('penguins', {
		width: 600,
		height: 400,
		videoId: 'iDd6TwfZiiU',
		playerVars: {
		color: 'white',
			playlist: 'mKgT4wSzzXA,If4Uw_pkUBs,HoAYc_yp9Bs,3iOSqveb_J0,4_G3qU6OlW0'
		},
		events: {
			onReady: function init(){}
		}
	});

	player = new YT.Player('steelers', {
		width: 600,
		height: 400,
		videoId: '3i5We3eeGCA',
		playerVars: {
			color: 'white',
			playlist: 'fDVX0EuKN0o,BOK0fx4vJhM,8db8_UQyDKM,6sCYC1wyxJ0'
		},
		events: {
			onReady: function init(){}
		}
	});

	player = new YT.Player('pirates', {
		width: 600,
		height: 400,
		videoId: 'YNqBD2oMbTw',
		playerVars: {
			color: 'white',
			playlist: '4keTznzBT0U,WCWMhmo2Ppw,miFfVM-q7XE'
		},
		events: {
			onReady: function init(){}
		}
	});
}
</script>