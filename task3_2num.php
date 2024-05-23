<?php
	$n0 = $_GET['startNumber'];
	$n1 = $_GET['endNumber'];
	
	echo ("Here's your 3x+1 sequence for $n0:<br>");
  require 'task3_mathClass.php';

	echo ("First number is not displayed in the histogram! It is calculated solely for sequence!<br><br>");

	for($i=$n0;$i<=$n1;$i++){
		$arr = MathSequences::calc3xp1_1n_no_output($i);
		Statistics::drawHistogram("Statistics for $i (max: $arr[0], iterations: $arr[1]):", $arr[2]);
	}
?>
