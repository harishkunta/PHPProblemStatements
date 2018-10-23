<?php
class ArrayConsecutiveElements{
    function containsConsecutiveElements($arr,$t){
        $sum=0;
        if (count($arr)==0){
            return -1;
        }
        for($j=0;$j<count($arr);$j++){
            for($i=$j;$i<count($arr);$i++){
                if($arr[$i] < 0){
                    return -2;
                }
                else if ($arr[$i] == 0){
                    return -3;
                }else{
                    $sum += $arr[$i];
                    if($sum==$t){
                        return 1;
                    }else if($sum>$t){
                        $sum=0;
                        break;
                    }else{
                        
                    }
                }
            }
        }
    }
}
$obj = new ArrayConsecutiveElements();
$arr = array(10,20,30);
$t=30;
echo $obj->containsConsecutiveElements($arr, $t);
?>