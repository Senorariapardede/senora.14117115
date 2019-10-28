<?php
	function swipe(&$a,&$b)
	{
	    $temp = $a;
	    $a = $b;
	    $b = $temp;
	}
	$a1=10;
	$b1=40;
	echo "Sebelum ditukar";
	echo "$a1 $b1<br>";
	
	swipe ($a1, $b1);
	echo "$a1  $b1<br>";
?>