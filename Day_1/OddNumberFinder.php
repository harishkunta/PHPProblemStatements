<?php
    class OddNumberFinder
    {
        function checkOddNumber($num) {
            if($num%2 == 0) {
                return "false";
            } else {
                return "true";
            }
        }
    }
    $odd = new OddNumberFinder();
    echo $odd->checkOddNumber(22);
?>