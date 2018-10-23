<?php
class BoxPattern 
{
    function createBoxPattern($rows, $columns) {
        $pattern = "";
        if($rows < 0 || $columns < 0) {
            return -1;
        }
        else if($rows == 0 || $columns == 0) {
            return -2;
        }
        else {
            for($i = 1; $i <= $rows; $i++) {
                for($j = 1; $j <= $columns; $j++) {
                    if($i == 1 || $i == $rows || $j == 1 || $j == $columns) {
                        $pattern.="* ";
                    }
                    else {
                        $pattern.="  ";
                    }
                    
                }
                $pattern.="\n";
            }
            return $pattern;
        }
    }
}
$obj = new BoxPattern();
echo $obj->createBoxPattern(4, 5);
?>