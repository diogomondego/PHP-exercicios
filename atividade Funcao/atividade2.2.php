<?php
$x = 10;
$y = 5;
function sla($x, $y){
	$z = 0;
		$a = 0;
	if($x == $y){
		$x = 6;
		$y = 9;
	}
	elseif($x < $y){
		
		for($x = $x; $x <= $y; $x++){
			if($x % 2 != 0){
				$z += $x;
			}
		}
		return $z."<br/>";
	}
	else{
		for($y = $y; $y <= $x; $y++){
			if($y % 3 == 0){
				$a++;
				$z += $y;
				$z /= $a;
			}
		}
		return $z;
	}
}
print sla($x, $y);
