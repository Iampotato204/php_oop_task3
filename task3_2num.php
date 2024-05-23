<?php
	$n0 = $_GET['startNumber'];
	$n1 = $_GET['endNumber'];
	
    echo ("Here's your 3x+1 sequence for ".$n0.":<br>");
    require 'task3_mathClass.php';
    

	$resArray=array();

	echo ("First number is not displayed in the histogram! It is calculated solely for sequence!<br><br>");

	$format = "%d,%d,%d<br>";
	for($i=$n0;$i<=$n1;$i++){
		$arr = MathSequences::calc3xp1_1n_no_output($i);
		//$arr = MathSequences::calc3xp1_1n($i);
		//echo sprintf($format, $i, $arr[0], $arr[1]);
		array_push($resArray,$i);
		array_push($resArray,$arr[0]);
		array_push($resArray,$arr[1]);
		//echo ("<br>Number: | Maximum: | Iterations:<br>");
		Statistics::drawHistogram("Statistics for $i (max: $arr[0], iterations: $arr[1]):", $arr[2]);
	}
?>
