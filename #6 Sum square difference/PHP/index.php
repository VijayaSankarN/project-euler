<?php

$_fp = fopen("php://stdin", "r");
$testCaseCount = fgets($_fp);

for($i=0;$i<$testCaseCount;$i++) {
	$num = fgets($_fp);
	$naturalNos = range(1,$num);
	$naturalNosSquared = array_map("square",$naturalNos);
	$sumOfSquares = array_sum($naturalNosSquared);
	$sumOfNaturalNos = array_sum($naturalNos);
	$output = square($sumOfNaturalNos) - $sumOfSquares;
	$output .= PHP_EOL;
	fwrite(STDOUT,$output);
}

function square($value) {
	return pow($value,2);
}