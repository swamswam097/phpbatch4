<?php

//=> Variables Scope
//(1) Global Variable Scope
//(2) Local Variable Scope
//(3) Static Variable Scope

$num1 = 100; //Glbal Variable 

function funone(){ 
	echo "Groble variable print in function = $num1";
}

funone(); //Groble variable print in function = (no print / error)

echo "Groble variable print ouside = $num1"; //Groble variable print outside = 100

function funtwo(){ 
	$num2 = 200; //Local Variable
	echo "Local variable print in function = $num2";
}

funtwo(); //Local Variable print in function = 200

echo "Local variable print ouside = $num2"; //Local variable print ouside = (no print out $num2 , cuz function will generate an error)

$num3 = 300;
$num4 = 400;

function funthree(){ 
	// global $num3;
	// global $num4;

	global $num3,$num4;
	global $result;

	$result = $num3+$num4;
	echo "This is result, print by function = $result";
}

funthree();

echo "Local variable print outside = $result"; //Local variable print outside = 700

//=> Super Global Variable

$num5 = 500;
$num6 = 600;

function funfour(){ 
	$GLOBALS["sum"] = $GLOBALS['num5']+$GLOBALS['num6'];
	// echo "This is sum , print by funfour = $sum"; //Underfined variable: sum

}

funfour();

echo "Local Variable print outside = $sum"; //Local Variable print outside = 1100


//=>startic keyword
$num7 = 700;

function funfive(){ 
	global $num7;

	$num7++;
	echo $num7;
}

funfive(); //701
funfive(); //702
funfive(); //703
funfive(); //704

function funsix(){ 

	$num8 = 800;

	$num8++;
	echo $num8;
}

funsix(); //801
funsix(); //801
funsix(); //801
funsix(); //801


function funseven(){ 

	static $num9 = 900;

	$num9++;
	echo $num9;
}

funseven(); //901
funseven(); //902
funseven(); //903
funseven(); //904

//=>passing by reference (pr &)

$num10 = 100;

function funeight(){ 
	$num10 = 1000;
	echo $num10;
}

echo $num10; //100
funeight($num10); //1000
echo $num10; //100

$num11 = 110;

function funnine(&$num11){ 
	$num11 = 11000;
	echo $num11;
}

echo $num11; //110
funeight($num11); //11000
echo $num11; //11000
echo $num11; //11000

$name = "aung aung";
$fullname = "aung aung oo"

function funten(&$val){ 
	$val = "su su";
	echo $val;
}

echo $name; //aung aung
funten($fullname); //su su
echo $name; //su su
echo $name; //su su
echo $fullname; //aung aung oo


?>