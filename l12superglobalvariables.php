<?php
//=> Super Global Variables
// 1. $GLOBALS
// 2. $_SERVER
// 3. $_REQUEST
// 4. $_POST
// . $_GET 
// . $_ENV
// . $_FILES
// . $_COOKIE
// . $_SESSION


$x = 100;
$y = 200;

// #error
// function sumresultone(){ 
// 	$total = $x + $y;
// 	return $total;
// }

// echo sumresultone();
// echo $total;

function sumresultone(){ 
	$GLOBALS['total'] = $GLOBALS['x']+$GLOBALS['y'];
	return $GLOBALS['total'];

}

echo sumresultone(); //300
echo $GLOBALS['total']; //300
echo $total; //300

// 2. $_SERVER
echo $_SERVER["PHP_SELF"]; //

echo $_SERVER["HTP_USER_AGENT"]; // 
echo $_SERVER["HTTP_HOST"]; //

echo $_SERVER["SERVER_NAME"]; //
echo $_SERVER["SERVER_SOFTWARE"]; //
echo $_SERVER["SERVER_PORT"]; //
echo $_SERVER["SERVER_PROTOCOL"]; //
echo $_SERVER["SERVER_SIGNATURE"]; //

echo $_SERVER["REQUEST_METHOD"]; //

echo $_SERVER["REMOTE_ADDR"]; //

echo $_SERVER["SCRIPT_FILENAME"]; //
echo $_SERVER["SCRIPT_NAME"]; //

echo $_SERVER["QUERY_STRING"]; //














?>