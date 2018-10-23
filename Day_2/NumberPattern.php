<?php
class NumberPattern 
{
    function NumberPattern4($rows) {
        if($rows < 0) {
            return -1;
        }
        else if($rows == 0) {
            return -2;
        }
        else {
            $pattern = "";
            for($i = 1; $i <= $rows; $i++ ) {
                $j = $i;
                $m = 1;
                for($k = 1; $k <= $i; $k++) {
                    $pattern.=$j * $m;
                    $pattern.=" ";
                    $m++;
                    
                }
                $pattern.="\n";
            }
            return $pattern;
        }
    }
}
$obj = new NumberPattern();
echo $obj->NumberPattern4(5);
?>