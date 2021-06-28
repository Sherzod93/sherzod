<?php
function myCalculator($num1,$oper,$num2){
    $sum;
    switch($oper){
        case "add":
            $sum = $num1+$num2;
            break;
       case "min":
            $sum = $num1 - $num2;
            break;
        case "mult":
            $sum = $num1 * $num2;
            break;
       case "div":
            $sum = $num1 / $num2;
            break;
        default:
        $sum = "There was an error!";
        break;
    }
    return $sum;
}
$num1 = $_GET["num01"];
$oper = $_GET["oper"];
$num2 = $_GET["num02"];

echo "Value:" .myCalculator($num1,$oper,$num2);
?>