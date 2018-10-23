<?php
class ArrangeString {
    function operations($str1,$str2){
        echo strlen($str1)+strlen($str2)."\n";
        if(strcmp($str1, $str2)>0)
            echo "Yes\n";
        else 
            echo "No\n";
        $result="";
        $result.=strtoupper($str1[0]);
        for($i=1;$i<strlen($str1);$i++) {
            $result.=$str1[$i];
        }
        $result.=" ".strtoupper($str2[0]);
        for($i=1;$i<strlen($str2);$i++) {
            $result.=$str2[$i];
        }
        echo $result;
    }
}
$obj = new ArrangeString();
$obj->operations("hello","php");
?>