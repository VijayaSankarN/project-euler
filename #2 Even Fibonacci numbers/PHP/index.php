<?php

$_fp = fopen("php://stdin", "r");
$testCaseCount = fgets($_fp);

for($i=0;$i<$testCaseCount;$i++) {
	$num = fgets($_fp);

	$a = 1;
	$b = 2;
	$tmp = $sum = 0;

	while($b <= $num) {
		if(!($b%2)) {
			$sum+=$b;
		}

		$temp = $b;
		$b += $a;
		$a = $temp;
	}
	fwrite(STDOUT,$sum.PHP_EOL);
}