<?php
	$a = $_GET['a'];
	$n = $_GET['n'];
	$d = $_GET['d'];
	
    echo ("Here's your arithmetic progression:<br>");
    require 'task3_mathClass.php';
	MathSequences::calcProgression($a, $n, $d);
        
?>
