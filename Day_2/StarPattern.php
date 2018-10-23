<?php
class StarPattern 
{
    function createStarPattern($rows) {
        if($rows < 0) {
            return -1;
        }
        else if($rows == 0) {
            return -2;
        }
        else {
            $pattern = "";
            for($i = 1; $i<=$rows; $i++) {
                for($j = 1; $j <=$i; $j++ ) {
                    $pattern.="* ";
                }
                $pattern.="\n";
            }
            return $pattern;
        }
    }
}
$obj = new StarPattern();
echo $obj->createStarPAttern(5);
?>