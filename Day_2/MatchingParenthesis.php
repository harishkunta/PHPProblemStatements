<?php
class MathchingParanthesis {
function isMatchingParanthesis($str) {
    if(is_null($str)) {
        return "true";
    }
    else if($str=="") {
        return "false";
    }
    else {
        $count=0;
        for($i=0;$i<strlen($str);$i++) {
            if($str[$i]=='(') 
                $count++;
            if($str[$i]==')')
                $count--;
        }
       
        if($count==0)
            return "true";
        else 
            return "false";
    }
}
}
$obj = new MathchingParanthesis();
echo $obj->isMatchingParanthesis(")(a + b) * c))");
?>