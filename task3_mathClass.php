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
		$chart=histogram::draw($array);
	}
}
?>



