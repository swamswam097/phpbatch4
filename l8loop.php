<?php 
//=> PHP Looping

//for
//for each
//while
//do...while

$colorsones = ["red","green","blue","white","black","gray","pink"]; //index array
echo count($colorsones);
var_dump($colorsones);

$colorsoneskeys = array_keys($colorsones); // Get the keys of the array
// echo $colorsones; //error
var_dump($colorsoneskeys);

// for loop
for($i = 0; $i < count($colorsones); $i++){ 
    echo $i; // 0 to 6

    //echo "This is indexed array or manual array by forloop = index key is 1". $i ."and value is = ". $colorsones[$i] . "<br/>";

    echo "This is indexed array or manual array by forloop = index key is " . $colorsoneskeys[$i] . " and value is = " . $colorsones[$i] . "<br/>";
}

foreach($colorsones as $colorsone){ 
    echo "This is indexed array or manual array by foreach = " .$colorsones;
}

foreach($colorsones as $key=>$colorsone){ 
    //echo $key
    echo "This is indexed array or manual array by foreach = index key is ".$key . "and value is ". $colorsone;
}

$x = 0;
while($x < count($colorsones)){ 
    // echo $colorsones[$x];
    // $x++;

    // echo "This is indexed array or manual array by foreach = index key is ".$key . "and value is ". $colorsone;
    echo "This is indexed array or manual array by foreach = index key is ".$colorsoneskeys[$x] . "and value is ". $colorsones[$x];
    $x++;
}

$y=0;

do{ 
     // echo "This is indexed array or manual array by foreach = index key is ".$key . "and value is ". $colorsone;
    echo "This is indexed array or manual array by foreach = index key is ".$colorsoneskeys[$y] . "and value is ". $colorsones[$y];
    $y++;
}while($y < count($colorsones));
?>