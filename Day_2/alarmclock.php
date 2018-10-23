<?php
class  AlarmClock
{
    function ringAlarm($day, $vacation) {
        if(($day < 0 || $day > 6) || (($vacation != TRUE) && ($vacation != FALSE))){
            return "Invalid Inputs";
        } else if(($day > 0 && $day < 6) && ($vacation == TRUE)){
            return "10:00";       
        } else if(($day > 0 && $day < 6) && ($vacation == FALSE)){
            return "07:00";
        } else if(($day > -1 && $day < 7) && ($vacation == TRUE)){
            return "OFF";
        } else if(($day > -1 && $day < 7) && ($vacation == FALSE)){
            return  "10:00";
        }
    }
}
$obj = new AlarmClock();
echo $obj->ringAlarm(2,TRUE);
?>
