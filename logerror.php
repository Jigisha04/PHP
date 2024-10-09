<?php
function calcDivision($dividend, $divisor){
    if($divisor == 0){
        trigger_error("calcDivision(): The divisor cannot be zero", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

function customError($errno, $errstr, $errfile, $errline)
{
    $message = date("Y-m-d H:i:s - ");  // Changed from data() to date()
    $message .= "Error: [" . $errno . "] $errstr in $errfile on line $errline\n";
    error_log($message, 3, "logs/app_errors.log");
    die("There was a problem, please try again");
}

set_error_handler("customError");

echo calcDivision(10, 0);
echo "This will never be printed";
?>
