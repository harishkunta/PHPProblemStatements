<?php
class StringWeaver {
    function getWeavedString($str1,$str2) {
        if(is_null($str1)||is_null($str2)) {
            return -1;
        }
        else if(strlen($str1)>strlen($str2)) {
            $result=$str2.$str1.$str2;
            return $result;
        }
        else if(strlen($str1)<strlen($str2)) {
            $result=$str1.$str2.$str1;
            return $result;
        }
        else {
            $result="";
            for($i = 0; $i< strlen($str1);$i++) {
                $result=$result.$str1[$i].$str2[$i];
            }
            return $result;
        }
    }
}
$obj=new StringWeaver();
echo $obj->getWeavedString("hello","hello");
?>