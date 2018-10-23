<?php
class  PatternWords
{
    function getWordsContainsPattern($arr,$pattern) {
        $result=[];
        for($i = 0; $i < count($arr); $i++) {
            if(strpos(strtoupper($arr[$i]), strtoupper($pattern)) > 0) {
                array_push($result, strtoupper($arr[$i]));
            }
        }
        return $result;
    }
}
$obj = new PatternWords();
$arr = ($obj->getWordsContainsPattern(array("South Africa", "Afghanistan", "Sri LaNka", "New Zealand", "West Indies",
    "England", "India", "Australia", "Pakistan", "Bangladesh"),"an"));
for($i=0;$i<count($arr);$i++)
    echo $arr[$i]."\n";
?>