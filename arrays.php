<?php
//indexed arrays
$fruits=array("Banana","Mangoes","oranges","Apples","Watermelons"); //index array {start from zero}
$fruits[2]="Avocado";
echo "I like eating ".$fruits[2];//write the index of the item in the box brackets.
echo "<br>";
echo "I like eating ".$fruits[3]," but I don't like eating ".$fruits[0];
echo "<br>";
 $names=array("Leo","Chris","Steve");
 $numbers=array(18,20,14,58,23,45);
 sort($names);
 echo "<br>";
 var_dump($numbers);
 echo "<br>";
 $cars=array("Bentley","Aston Martin","Lamborghini","Ferrari","Toyota","Prius","Lexus");
 echo "I will buy an ".$cars[1]." when I have enough cash.";
 echo "<br>";
 unset($numbers[3]);
$numbers=array_values($numbers);
echo '';
var_dump($numbers);

