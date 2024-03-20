<?php

//==> Comparison Operators

// ==
// ===
// != not equal 
// <> not equal 
// !==
// >
// <
// >=
// <=
// ? (Ternary Op)

$num1 = 10;
$num2 = 20;

echo $num1 == $num2 ? "your codition is true" : "your condition is false"; //true
echo ($num1 == $num2) ? "your codition is true" : "your condition is false"; //true
echo ($num1 === $num2) ? "your codition is true" : "your condition is false"; //false

echo ($num1 != $num2) ? "your codition is true" : "your condition is false"; //false
echo ($num1 <> $num2) ? "your codition is true" : "your condition is false"; //false

echo ($num1 !=== $num2) ? "your codition is true" : "your condition is false"; //true


echo ($num1 > $num2) ? "your codition is true" : "your condition is false";
echo ($num1 < $num2) ? "your codition is true" : "your condition is false";
echo ($num1 >= $num2) ? "your codition is true" : "your condition is false";
echo ($num1 >= $num2) ? "your codition is true" : "your condition is false";




?>