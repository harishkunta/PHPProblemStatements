<?php
class  BooleanValue
{
    function countBoolean($b1, $b2, $b3){
        $count=0;
        if($b1==TRUE)
            $count++;
        if($b2==TRUE)
            $count++;
        if($b3==TRUE)
             $count++;
        if($count>=2)
            return "true";
        else 
            return "false";
    }
}
$obj = new BooleanValue();
echo $obj->countBoolean(TRUE, FALSE, TRUE);
?>