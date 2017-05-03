<?php
	header("content-type:text/html;charset=utf-8");
	$name="aaa";
	echo "<br/>$name";
	echo '<br/>$name';
	echo  '<br/>{$name}';
	echo "<br/>{$name}";
	echo "<hr />";

	define("PAI", 3.14);
	echo PAI * 3;
	echo "<hr />";

	$x;$y;
	$x=7;
	$y=2*$x+8;
	echo "$y<br />";
	echo $x;
	echo "<hr/>";

	$x;$y;
	$x=3;
	$y=24;
	$z=$x;
	$x=$y;
	$y=$z;

	echo $x."-------".$y;

	echo "<hr/>";

	$x = 9;
	$y = 13;

	if($x>$y){
		echo $x;
	}else {
		echo $y;
	}

?>