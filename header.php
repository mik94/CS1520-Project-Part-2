<?php
function generateNav($self){
		$items = array(
		'home' => array('text'=>'HOME', 'url'=>'index.php'), 
		'penguins' => array('text'=>'PENGUINS', 'url'=>'penguins.php'),
		'steelers' => array('text'=>'STEELERS', 'url'=>'steelers.php'),
		'pirates' => array('text'=>'PIRATES', 'url'=>'pirates.php'),
		'about' => array('text'=>'ABOUT', 'url'=>'about.php')
		);
	$current = "not";
	$html = "<ul>";
	foreach($items as $item){
		if ("/" . $item['url'] === $self){
			$current = "current";
		}
		$html .= "<li><a href='{$item['url']}' class=$current>{$item['text']}</a></li>";
		$current = "not";
	}
	$html .= "<a href='http://www.youtube.com/hnipittsburgh' target='_blank'><img src='img/youtube.png' height='25px' width='25px' style='margin: 7px 0px 7px 20px'/></a>";
	$html .= "<a href='http://www.twitter.com/hnipittsburgh' target='_blank'><img src='img/twitter.png' height='25px' width='25px' style='margin: 7px'/></a>";
	$html .= "</ul>";
	return $html;
}
?>
<html>
<head>
	<title>%TITLE%</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="header">
	<div class="title">
		<h1>
			<span style="color:#C5B358;">Hockey Night in Pittsburgh</span>
		</h1>
		<h6 style="line-height: 1.1em; font: normal normal normal 16px/1.4em play,sans-serif;">
			<span style="color:#F7B716;">#1 Source For Pittsburgh Sports Video</span>
		</h6>
	</div>
</div>
<div class='nav'>
	<div class='nav-wrapper'>