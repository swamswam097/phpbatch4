<?php
//=> Array 
//(i) Indexed Array (Manual Array)
//(ii) Associative Array
//(iii) Multidimensional Array

//(i) Indexed Array (Manual Array) (indexex number)
//old
$names = array("aung aung","maung maung","kyaw kyaw","tun tun");
// echo $names; //error
// print $names; //error

echo count($names); //5
var_dump($names);
print_r($names,false);

//new
$color = ["red","green","blue","black","white","pink"];
// echo $color; //error

echo count($color); //5
print_r($color,false); //false is just defult
echo "<pre>".print_r($color,true)."</pre>"; //true = to know HTML Code

$color[6] = "gray"; //add 6 place
$color[7] = "stone"; //add 7 place
$color[8] = "skyblue"; //add 8 place
$color[0] = "violet"; //add 0 overwrite/override


echo "<pre>".print_r($color,true)."</pre>";
echo count($color); //9

echo "My favourite color is " .$color[8];


//--------------------------------------------------------------------

//(ii) Associative Array (key name)
//old

$news = array("pone"=>"this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
echo count($news); //3
var_dump($news);

//new
$medias = [ 
	"pone"=>"this is post one", 
	"ptwo"=>"this is post two", 
	"pthree"=>"this is post three"
];
echo count($medias); //3
var_dump($medias);

$medias["pfour"] = "this is post four"; //add new place
$medias["pthree"] = "this is new post three"; //overwrite/override place pthree

echo count($medias); //3
var_dump($medias);

echo "This post is ".$medias["pthree"]; //add the $medias with "..."

//-----------------------------------------------------------------------

//(iii) Multidimensional Array (Arrays contains one or more arrays)
//old

$paints = array( 
	array("red","green","blue"),
	array("pen","pencil","ruler"),
	array("paper","plastic")
);

echo count($paints); //3
var_dump($paints);

$maincolors = [ 
	["red","green","blue"],
	["pen","pencil","ruler"],
	["paper","plastic"]
];

echo count($maincolors); //3
var_dump($maincolors);

echo $maincolors [0][0]; //red
echo $maincolors [1][2]; //ruler
echo $maincolors [2][1]; //plastic

$persons = array( 
	array("name"=>"aung aung","age"=>20),
	array("name"=>"su su","age"=>18),
	array("name"=>"nu nu","age"=>23)

);

$vippersons = [ 
	["name"=>"aung aung","age"=>20],
	["name"=>"su su","age"=>18],
	["name"=>"nu nu","age"=>23]
];

echo count($vippersons); //3
var_dump($vippersons);

echo $vippersons[0]["name"]; //aung aung
echo $vippersons[0]["age"]; //20

echo $vippersons[2]["name"]; //nu nu
echo $vippersons[1]["age"]; //18

//--------------------------------------------------

?>