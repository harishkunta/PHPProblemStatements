<?php
class AverageWordLength {
    function getAverageWordLength($str) {
        if(is_null($str))
            return -1;
        else if($str=="")
            return 0;
        else {
            $arr = str_word_count($str,1);
            $sum=0;
            for($i=0 ;$i<count($arr);$i++) {
                $strlen = strlen($arr[$i]);
                $sum+=$strlen;
            }
            return floor($sum/count($arr));
        }
    }
}
$obj =new  AverageWordLength();
echo $obj->getAverageWordLength("Hi everyone");
?>