<?php

class ValidateEmail
{
    function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }
        
        return (substr($haystack, -$length) === $needle);
    }
    
    function isValidMailID($email) {
        if(!(ord($email[0]) >= 97 and ord($email[0]) <= 122 )) {
            return -1;
        } else if(substr_count($email,"@") < 1){
            return -2;
        } else if(substr_count($email,"@") > 1){
            return -3;
        } else if(!(($this->endsWith($email,".com") || $this->endsWith($email,".co.in")))) {
            return -4;
        } else {
            $flag=0;
            for($i = 0; $i < strlen($email); $i++) {
                $ch = $email[$i];
                if((ord($ch) >= 97 && ord($ch) <=122)||ord($ch)==64){
                    $flag++;
                }else if($ch == "_" ){
                    $flag++;
                } else if($ch == "."){
                    $flag++;
                }
            }
            
            if($flag!=strlen($email))
                return -5;
            return "Valid";
        }
    }
    
}
$email = "testinG@gmail.com";
$obj = new ValidateEmail();
echo $obj -> isValidMailID($email);

?>