<?php
class SpinningString
{
    function rotate($string, $no){
        if(is_null($string)){
            return "null";
        }else if($no < 1){
            return $string;
        }else if(strlen($string) < $no){
            return $string;
        } 
        else{
            $result="";
            for($i=(strlen($string)-$no);$i<strlen($string);$i++) {
                $result.=$string[$i];
            }
            for($i=0; $i<strlen($string)-$no; $i++) {
                $result.=$string[$i];
            }
            return $result;
        }
    }
}
$obj = new SpinningString();
echo $obj->rotate("talent",2);
?>