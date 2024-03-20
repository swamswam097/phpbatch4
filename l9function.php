<?php
//User Defined Function

//function name(){ 
// code to be executed;
// }

//---------------

//Parameter Function (or) Arguments Functions
//(i) Single
//(ii) Multi

//function name($arg1){ 
// code to be executed;
// }

//function name($arg1,sag2){ 
// code to be executed;
// }

//------------------
//Default Paramter Function (or) Defult Argument Function

// function name($name="aung aung".$age="20"){ 
// 	code to be executed;
// }

function myfun(){ 
	echo "my name is mr.tin";
}

myfun();
myfun();

function myfun(){ 
	$num1 = 10;
	$num2 = 20;
	$cal = $num1+$num2;
	echo $cal;
}

myfun(); //30

//----------

function singlefun($job){ 
	echo "My job is $job";
}

singlefun("cleaner");
singlefun("engineer");

//------------------

function multifun($name,$age){ 
	echo "My name is $name and I am {$age} years old";
}

multifun("Kyaw Kyaw",20);
multifun("nandar",29);

//----------------

function defaultfun($name="hla hal"){ 
	echo "My name is ${name}";
}

defaultfun(); //My name is hla hla
defaultfun("aye aye") // My name is Aye aye

function defaultfun1($num1=10,$num2=20,$num3=30){ 
	$cal = $num1+$num2+$num3;
	echo $cal;
}

defaultfun1(); //60
defaultfun1 (50,10); //90
defaultfun1 (70,5,15); //90

//------------------------------

//Return

function myreturn($num1){ 
	$cal = $num1+10;
	return $cal;
}

echo myreturn(50); //60

function returnfun($num1){ 
	$cal = $num1+10;
	return $cal;
}

echo returnfun(100); //110

function returnfun2($num1,$num2,$num3){ 
	$cal = $num1+$num2+$num3;
	return $cal;
}

echo returnfun(10,20,30); //60

function returnfun3($num1=10,$num2=20,$num3=30){ 
	$cal = $num1+$num2+$num3;
	return $cal;
}

echo returnfun3(50); //100
echo returnfun3(); //60

//=> Dynamic Function Call

$dyn1 = myreturn(100);
echo $dyn1; //110

$dyn2 = returnfun3();
echo $dyn2; //60

$dyn3 = "returnfun1"; //Dynamic Function call
echo $dyn3; //returnfun1
echo $dyn3(100);//110

$myfun = "returnfun3";
echo $myfun; //60


// function_exists is use for check the function that exists
if(function_exists($myfun)){ 
	echo "Yes, your value is already in some kinf of function"
}else{ 
	echo "Sorry, No"
}
//-----------------------------

?>
?>