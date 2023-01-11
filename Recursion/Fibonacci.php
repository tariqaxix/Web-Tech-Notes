<?php
function Fibonacci($num){
	if ($num == 0)
		return 0;	
	else if ($num == 1)
		return 1;	
	else
		return (Fibonacci($num-1) +
				Fibonacci($num-2));
}
$num = 10;
for ($count = 0; $count < $num; $count++){
	echo Fibonacci($count),' ';
}
?>
