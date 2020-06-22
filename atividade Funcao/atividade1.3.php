<?php
function mult3(&$num1, &$num2, &$num3, &$num4, &$num5){
	$num1 *= 3;
	$num2 *= 3;
	$num3 *= 3;
	$num4 *= 3;
	$num5 *= 3;
}
$a = 1;
$b = 2;
$c = 3;
$d = 4;
$e = 5;

mult3($a, $b, $c, $d, $e);
print "A = {$a}, B = {$b}, C = {$c}, D = {$d} e E = {$e}";