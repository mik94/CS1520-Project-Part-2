<?php
	$self = $_SERVER['PHP_SELF'];
	ob_start();
	include 'header.php';
	$buffer = ob_get_contents();
	ob_end_clean();
	$buffer = str_replace("%TITLE%", "Penguins", $buffer);
	echo $buffer;
	echo generateNav($self) . "</div></div>";
?>
<div class="content">
	<h2 style="line-height: 1.1em; font: normal normal normal 46px/1.4em 'jockey one',sans-serif;">
		<span style="color:#C5B358;">Penguins</span>
	</h2>
</div>
<div id="penguins" class="video">
<?php
include 'videos.php';
echo "</div>";
include 'footer.php';
?>