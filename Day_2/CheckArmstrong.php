<?php
class CheckArmstrong
{
    function checkingArmstrong($number) {
        $numlength = strlen((string)$number);
        if($number < 0) {
            return -1;
        }
        else if($numlength < 4) {
            return -2;
        }
        else {
            $temp = $number;
            $sum  = 0;
            
            
            while( $temp != 0 )
            {
                $rem 		= $temp % 10; 
                $sum 		= $sum + pow( $rem,4); 
                $temp 		= $temp / 10; 
            }
            
           
            if( $number == $sum )
            {
                return  "ArmStrong Number";
            }else
            {
                return "Not ArmStrong Number";
            }
        }
         
    }
}
$obj = new CheckArmstrong();
echo $obj->checkingArmstrong(1634);
?>