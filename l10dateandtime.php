<?php

//1 Jan 1970 UTCa

date_default_timezone_set("Asia/Yangon");

$getdate = getdate();
// echo $getdate;
var_dump($getdate);
echo "<pre>".print_r($getdate,true)."</pre>";

echo "This is seconds = ".$getdate["seconds"];
echo "This is minutes = ".$getdate["minutes"];
echo "This is hours = ".$getdate["hours"];


echo "This is wday = ".$getdate["wday"]; //0=sunday 1=monday
echo "This is weekday = ".$getdate["weekday"]; //Tuesday
echo "This is yday = ".$getdate["yday"]; //64 day of the years

echo "This is month = ".$getdate["month"]; //March
echo "This is mon = ".$getdate["mon"]; //3 //day of month
echo "This is mday = ".$getdate["mday"]; //5 number of the days

echo "This is year = ".$getdate["year"]; //2024

echo "This is 0 = ".$getdate["0"]; //1709654321

$time = time();
echo "This is 0 = ".$time; //1709654321

//Date/Time format
// data (format,timestampe);

$date = date("a",$time);
echo "This is format a = ".$data; //am pm

$date = date("A",$time);
echo "This is format A =".$data; //AM PM

$date = date("d",$time);
echo "This is format d =".$data; //05 //day leading zero

$date = date("D",$time);
echo "This is format D =".$data; //Tue Sun Mon

$date = date("F",$time);
echo "This is format F =".$data; //March

$date = date("g",$time);
echo "This is format g =".$data; //10 //hours (no leading zero) 12hr

$date = date("G",$time);
echo "This is format G =".$data; //22 //houes (no leading zero ) 24hr

$date = date("h",$time);
echo "This is format h =".$data; //10 //hours (no leading zero) 12hr

$date = date("H",$time);
echo "This is format H =".$data; //22 //houes (no leading zero ) 24hr

$date = date("i",$time);
echo "This is format i =".$data; //02 //minute

$date = date("j",$time);
echo "This is format j =".$data; //5 //day of month no leading zero

$date = date("l",$time);
echo "This is format l =".$data; //Tuesday

$date = date("L",$time);
echo "This is format L =".$data; //1  //Leap Year (1 = true , 0 = false)

$date = date("m",$time);
echo "This is format m =".$data; //03 //day of month leading zero

$date = date("M",$time);
echo "This is format M =".$data; //Mar //(Jan/Feb)

$date = date("n",$time);
echo "This is format n =".$data; //3 //day of month (no leading 0)

$date = date("r",$time);
echo "This is format r =".$data; //Tue, 05 Mar 2024 23:10:53 +0630

$date = date("s",$time);
echo "This is format s =".$data; // 57 seconds

$date = date("U",$time);
echo "This is format U =".$data; //1709657004

$date = date("y",$time);
echo "This is format y =".$data; //24 year shortcode

$date = date("Y",$time);
echo "This is format Y =".$data; //2024

$date = date("z",$time);
echo "This is format z =".$data; //64 day of year
?>

<!-- date_default_timezone_get("Asia/Yangon"); => date_default_timezone_get("Asia/Yangon"); -->