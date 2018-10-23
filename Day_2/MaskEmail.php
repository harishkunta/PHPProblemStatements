<?php
class MaskEmail {
    function maskMailID($str) {
        for($i=2;$str[$i]!="@";$i++) {
            $str[$i]="X";
        }
        return $str;
    }
}
$obj = new MaskEmail();
echo $obj->maskMailID("testmail@gmail.com");
?>