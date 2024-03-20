<?php
//=> Arithment Operators
// +-*/%

$num1 = 100;
$num2 = 200;
$num3 = 300;
$city = "Mawalamyine";
$car = false;
$myarrs = ["Maung Maung",'Kyaw Kyaw'];
$colors = array("red",'green'."blue");

echo $num1;
echo $num2;
echo $num1+$num2;
echo $num1-$nm2;
echo $num2-$num1;
echo $num1*$num1;
echo $num2/$num2;
echo $num2%$num1;

//echo $myarrs; //error , Array To string conversion
//echo $myarrs; //error , Array to string conversion
//var_dump is to see value same as typeof in js
var_dump($num1);//int(100)
var_dump($num3);//int(300)
var_dump($city);//string(11) "Mawalamyine"
var_dump($car);//bool(false)
var_dump($myarrs); //array(2) {[0]=>string(11) "Maung Maung"[1]=>string(9) "Kyaw Kyaw"}

$num4 = true; //true = 1
$num5 = "10";
$num6 ='20';
var_dump($num5,$nm6); //string
echo $num5+$num6; //30
echo $num6-$num5; //10
echo $num4+$num5; //11
var_dump($num5+$num6); // int(30)

//Overwrite or Override

$num5 = 50;
$num6 = '60';
var_dump($num5,$num6);

echo $num5+$num6;//110
?>