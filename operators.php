<?php
//arithmetic operators
$num1=34;
echo "<br>";
$num2=77;
echo "<br>";
$num3=-23;
echo "<br>";
echo $num1 + $num2;//This is an additional operator.
echo "<br>";
echo $num1 - $num2;//This is a subtraction operator.
echo "<br>";
echo $num1 * $num2;//This is a multiplication operator.
echo "<br>";
echo $num1 / $num2;//This is a division operator.
echo "<br>";
echo $num1 % $num2;//This is a modulus operator.
echo "<br>";
//comparison operator
var_dump($num1==$num2);//equals to/same as
echo "<br>";
var_dump($num1>$num2);//greater than
echo "<br>";
var_dump($num1<$num2);//less than
echo "<br>";
var_dump($num1>=$num2);//greater than or equal to
echo "<br>";
var_dump($num1!=$num2);//not equal to
echo "<br>";
var_dump($num1===$num2);//identical
echo "<br>";
//logical operator
var_dump($num1==$num2 or $num2 > $num3);//at least one condition should be true.
echo "<br>";
var_dump($num3>=$num1 or $num1 < $num2);//or operator
var_dump($num3>=$num1 || $num1 < $num2);
echo "<br>";
var_dump($num3>=$num1 and $num1 < $num2);//and operator
var_dump($num3>=$num1 && $num1 < $num2);
echo "<br>";
//concatenation{combining two variables using a period/full stop}
$name1="Leo";
echo "<br>";
$name2="Chege";
echo "<br>";
echo $name1.$name2;

