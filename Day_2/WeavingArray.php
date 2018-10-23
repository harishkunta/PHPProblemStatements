<?php
class WeavingArray{
    function weavingArrayElements($arr1,$arr2){
        $l=0;
        $arr = array();
        if(count($arr1)>count($arr2)){
           $l= count($arr2); 
        }else {
            $l= count($arr1);
        }
        for ($i=0,$j=0;$i<$l;$i++,$j=$j+2){
            $arr[$j]=$arr1[$i];
            $arr[$j+1]=$arr2[$i];
        }
        return $arr;
    }
}
$obj=new WeavingArray();
$arr1= array(10,25);
$arr2= array(100,120,200);
$arr= $obj->weavingArrayElements($arr1, $arr2);
for ($i=0;$i<count($arr);$i++)
{
echo $arr[$i]." , ";
}
?>