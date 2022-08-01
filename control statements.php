<?php
//"If statement"{there should only be one condition which should always be true.}
$num1=20;
$num12=35;
echo "<br>";
if ($num12<120){
    echo "$num12 is less than 120.";
}
echo "<br>";
if ($num12>$num1){
    echo "$num12 is greater than $num1.";
}
echo "<br>";
// "If-else statement"{If one condition is true ,then run the code;but if the condition is false the do[else]}
if ($num12>120){
    echo "$num12 is greater than 120";
}else{
    echo "$num12 is less than 120.";
}
echo "<br>";
//If-else-if else statement
if ( $num12 <= 40 && $num12 > 0){
    echo "You passed";
}elseif ($num12 <=80 && $num12 >=60){
    echo "You have failed...";
}elseif ($num12 >=10 && $num12 ===35){
    echo "You have been credited.";
}elseif ($num12>=0 && $num12!=60){
    echo "Distinction";
}else{
    echo "Please repeat the class...";
}
echo "<br>";
//EXAMPLE
$mi="17,500";
$mi1="10,000";
$mi2="20,000";
$mi3="30,000";
if ($mi<10000){
    echo "Please select a lower amount to borrow.";
}elseif ($mi<$mi2 && $mi>$mi1){
    echo "You can borrow a maximum of 20,000.";
}elseif ($mi >=$mi3){
    echo " You are not eligible for this offer.";
}elseif ($mi>=$mi1 && $mi <=$mi3){
    echo "We have a special offer just for you...";
}else{
    echo "Sorry...You cannot access any of our services...! ";
}
echo "<br>";