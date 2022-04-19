<!doctype html>
<html>
<body>
<?php
$str="This is php program";
$wc=0;  //wordcount
$len=strlen($str);
for ($i=0;$i<$len;$i++)
{
	if($str[$i]==' ')
	{
		$wc++;
	}
}
	$wc=$wc+1;
	echo "Words in string :"$wc;

?>
</body>
</html>