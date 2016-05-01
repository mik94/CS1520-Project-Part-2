<?php
	$self = $_SERVER['PHP_SELF'];
	ob_start();
	include 'header.php';
	$buffer = ob_get_contents();
	ob_end_clean();
	$buffer = str_replace("%TITLE%", "Hockey Night In Pittsburgh", $buffer);
	echo $buffer;
	echo generateNav($self) . "</div></div>";
?>
<div class="popular">
	<h2 style="line-height: 0em; font: normal normal normal 46px/1em 'jockey one',sans-serif;">
		<span style="color:#C5B358;">POPULAR<br/>UPLOADS</span>
	</h2>
	<hr /><br>
	<div class="imgs">
		<a href = "https://www.youtube.com/watch?v=mKgT4wSzzXA" target="_blank"><img src = "img/hqdefault.jpg" width='123' height='71' /></a>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=fDVX0EuKN0o" target="_blank"><img src = "img/mqdefault2.webp" width='123' height='71' /></a>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=YNqBD2oMbTw" target="_blank"><img src = "img/mqdefault3.webp" width='123' height='71' /></a>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=3iOSqveb_J0" target="_blank"><img src = "img/mqdefault4.webp" width='123' height='71' /></a>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=4_G3qU6OlW0" target="_blank"><img src = "img/mqdefault5.webp" width='123' height='71' /></a>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=miFfVM-q7XE" target="_blank"><img src = "img/mqdefault6.webp" width='123' height='71' /></a>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=6sCYC1wyxJ0" target="_blank"><img src = "img/mqdefault7.jpg" width='123' height='71' /></a>
		<br><br>
	</div>
	<div class="text">
		<a href = "https://www.youtube.com/watch?v=mKgT4wSzzXA" class="normal" target="_blank">Pittsburgh Penguins 2016 Playoff Pump Up</a>
		<br>
		<span style="color:#C5B358;">April 12, 2016</span>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=fDVX0EuKN0o" class="normal" target="_blank">Pittsburgh Steelers 2016 Playoff Pump Up</a>
		<br>
		<span style="color:#C5B358;">January 7, 2016</span>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=YNqBD2oMbTw" class="normal" target="_blank">Pittsburgh Pirates 2015 2nd Half Pump Up</a>
		<br>
		<span style="color:#C5B358;">July 14, 2015</span>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=3iOSqveb_J0" class="normal" target="_blank">Marc-Andre Fleury 2014-2015 Highlights</a>
		<br>
		<span style="color:#C5B358;">June 8, 2015</span>
		<br><br><br>
		<a href = "https://www.youtube.com/watch?v=4_G3qU6OlW0" class="normal" target="_blank">Pittsburgh Penguins 2015 Playoff Pump Up</a>
		<br>
		<span style="color:#C5B358;">April 11, 2015</span>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=miFfVM-q7XE" class="normal" target="_blank">Pittsburgh Pirates 2015 Pump Up</a>
		<br><br>
		<span style="color:#C5B358;">March 15, 2015</span>
		<br><br>
		<a href = "https://www.youtube.com/watch?v=6sCYC1wyxJ0" class="normal" target="_blank">Pittsburgh Steelers 2014-2015 Hype</a>
		<br><br>
		<span style="color:#C5B358;">September 5, 2014</span>
		<br><br>
	</div>
</div>
<div class="latest">
	<h2 style="line-height: 1.1em; font: normal normal normal 40px/1.4em 'jockey one',sans-serif;">
		<span style="color:#C5B358;">Our Latest Video</span>
		<iframe width="600" height="324" src="https://www.youtube.com/embed/iDd6TwfZiiU" frameborder="0">
		</iframe>
	</h2>
</div>
<div class="twitter">
	<h2 style="line-height: 1.1em; font: normal normal normal 40px/1.4em 'jockey one',sans-serif;">
		<span style="color:#C5B358;">Twitter Stream</span>
	</h2>
	<a class="twitter-timeline" href="https://twitter.com/HNIPittsburgh" data-widget-id="726261728959447040" data-chrome="noheader noborders nofooter"></a>
<script>
!function(d,s,id){
	var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
	if(!d.getElementById(id)){
		js=d.createElement(s);
		js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js,fjs);
	}
}(document,"script","twitter-wjs");
</script>
<br><br>
</div>
<?php
	include 'footer.php';
?>