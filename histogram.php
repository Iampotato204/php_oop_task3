<?php
class histogram {
    public static function draw($arr){
        $max=$arr[0];
        for($i=0; $i<sizeof($arr); $i++){
            $max=max($max, $arr[$i]);
        }
        $width = sizeof($arr);
        $heigth = max(15, min(40, $width/3));

        for($k=0; $k<$heigth; $k++){
            $percentage_step = (($heigth-$k) / $heigth) * 100;
            for($i=0; $i<$width; $i++){
                $percentage_el = ($arr[$i] / $max) * 100;
                if($percentage_el>=$percentage_step){
                    echo("*");
                }
                else{
                    echo("_");
                }
            }   
            echo("<br>");         
        }        
    }	
}
?>
