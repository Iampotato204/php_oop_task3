<?php
    $n0 = $_GET['number'];
    
    echo ("Here's your 3x+1 sequence for ".$n0.":<br>");
    require 'task3_mathClass.php';
    $arr = MathSequences::calc3xp1_1n($n0);
    
    echo ("<br> Max number: $arr[0]");
    echo ("<br> Iterations count: $arr[1] (printing starting value is not an iteration)")  
?>
