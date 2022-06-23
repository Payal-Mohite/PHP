<!doctype html>
<html>
<body>
<?php
	//abs() fun
	echo(abs(-7));
	echo(abs(7));
	echo(abs(-7.2));
	
	//ceil() fun
	echo(ceil(3.3));
	echo(ceil(7.333));
	echo(ceil(-4.3));
	
	//floor fun
	echo(floor(3.3));
	echo(floor(7.333));
	echo(floor(-4.8));
	
	//sqrt fun
	echo(sqrt(16));
	
	// decbin fun
	echo(decbin(2));
	echo(decbin(10));
	echo(decbin(22));
	
	//dechex fun
	echo(dechex(10));
	
	//decoct fun
	echo(decoct(22));
	
	//bindec fun
	echo(bindec(1010));
	
	//base_convert fun
	$n1=10;
	echo(base_convert($n1,10,2));
	
	
	
	
?>
</body>
</html>