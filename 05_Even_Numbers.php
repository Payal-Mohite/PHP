<!doctype html>
<html>
<body>
<?php

echo"This is for loop <br>" ;
for($no=2;$no<=30;$no+=2)
{
	echo "$no<br>";
}

$no=0;
echo "This is do-while loop <br>";
do{
	$no+=2;
	echo "$no<br>";
}while($no<30);
	
echo "This is while loop <br>";
$no=0;
while($no<30)
{
	$no+=2;
	echo("$no<br>");
}

?>
</body>
</html>