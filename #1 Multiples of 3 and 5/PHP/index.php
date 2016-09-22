<?php

$_fp = fopen("php://stdin", "r");
$testCaseCount = fgets($_fp);

for($i=0;$i<$testCaseCount;$i++) {
	$n = fgets($_fp);
	$three = sumDiv(3,$n);
	$five = sumDiv(5,$n);
	$fift = sumDiv(15,$n);
	$output = $three + $five - $fift;
	$output .= PHP_EOL;
	fwrite(STDOUT, $output);
}

function sumDiv($no, $max) {
	$div = floor(($max-1)/$no);
	return $no * $div * ($div+1) / 2;
}