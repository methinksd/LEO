<?php
function  emobilis(){
    $num1=34;
    $num2=61;
    echo "The product of $num1 and $num2 is :".$num1*$num2;


}
emobilis(); //call the function.
echo "<br>";
function studentname($fname,$lname, $age){
    echo "My name is $fname $lname and I am $age years old.";

}
studentname("Leo","Ng'ang'a", 18);
echo "<br>";
studentname("Elvis","Murungi", 19);
echo "<br>";
studentname("Christian","Nuru", 20);
echo "<br>";

$input = $_REQUEST["input"];
$phpData = json_decode($input);
$height = $phpData->ht;
$weight = $phpData->wt;
$heightInMs = $height/100;
$bmi = $weight/($heightInMs*$heightInMs);
$message = "";
if($bmi < 18.5)
{
    $message = "You are underweight.";
}
else if($bmi >=18.5 && $bmi <= 24.9)
{
    $message = "Congrats!!! You have normal weight.";
}
else if($bmi >24.9 && $bmi <=29.9)
{
    $message = "You are overweight.";
}
else
{
    $message = "Be careful!!! You are obese.";
}
$output = array(
    "bmi"=>$bmi,
    "message"=>$message
);
echo json_encode($output);
?>