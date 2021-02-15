<?php
$a=25;
$b=30;
$c=18;

function largest($a,$b,$c){
if($a>$b && $a>$c)
	{
		echo $a;
	}
	else{
		if($b>$a && $b>$c)
		{
			echo $b;
		}
		else 
			echo $c;
	}
}
largest($a,$b,$c);
?>


