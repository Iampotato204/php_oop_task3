<?php

class MathSequences {

	public $hi;
    public function __construct($start, $end) {
		$this->$hi;
    }
	
	public static function calc3xp1 ($n) {
		if ($n % 2) {
			return $n * 3 + 1;
		} else {
			return $n / 2;
		}
	}

	public static function calc3xp1_1n_no_output ($n) {
		$c = 0;
		$max = $n;
		$temp = $n;
		$sequence = array();
		do{
			$temp = MathSequences:: calc3xp1($temp);
			if($temp>$max){
				$max=$temp;
			}
			$c++;
			array_push($sequence, $temp);
		}
		while ($temp>1);
		return array($max, $c, $sequence);
	}
		
	public static function calc3xp1_1n ($n) {
		echo ($n.", ");
		$c = 0;
		$max = $n;
		$temp = $n;
		$sequence = array();
		do{
			$temp = MathSequences::calc3xp1($temp);
			echo ($temp.", ");
			if($temp>$max){
				$max=$temp;
			}
			$c++;
			array_push($sequence, $temp);
		}
		while ($temp>1);
		return array($max, $c, $sequence);
	}
}
include 'histogram.php';
class Statistics extends MathSequences{
	public static function drawHistogram($title, $array){
		echo("$title<br>");
		//$Salaries=array(13,13,15,9,17,5,11,25,15,17,13,7,13,11,19,11,19,9,17,13,15,30,17,7,15,19,17,9,19,13,13,9,17,11,17,17,15,11,19,15,17,25,19,7,11,17,11,30,13,11,30,17,17,15,15,7,17,9,5,9,17,19,15,22,22,22,19,15,17,5,5,25,15);
		//$chart=histogram::draw($Salaries);
		$chart=histogram::draw($array);
		}
}
?>



