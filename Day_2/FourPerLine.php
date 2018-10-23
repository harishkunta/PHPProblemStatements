<?php
class FourPerLine
{
    function getFourPerLine($number) {
        $values=null;
        if($number < 0 ) {
            return -1;
        }
        else if($number == 0 ) {
            return -2;
        }
        else if($number > 99) {
            return -3;
        }
        else {
            for($i = 1; $i <= $number; $i++ ) {
                
              
                $values .= $i." ";
               
                if($i % 4 ==  0) {
                    $values.="\n";
               }
              
            }
            return $values;
        }
    }
}
$obj = new FourPerLine();
echo $obj->getFourPerLine(12);
?>