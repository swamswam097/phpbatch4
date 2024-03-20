<?php


$fullname = "U Kyaw Kyaw";
$job = 'Developer';

echo $fullname;
print $job;

echo "$fullname";
echo '$job';

echo "My name is $fullname";//My name is U Kyaw Kyaw
echo "My name is ${fullname}";//My name is U Kyaw Kyaw
echo "My name is {$fullname}";//My name is U Kyaw Kyaw
echo 'My name is $fullname';//My name is $fullname
echo 'My name is ${fullname}';//My name is ${fullname}
echo 'My name is {$fullname}';//My name is {$fullname}

echo My name is ${fullname};// error
echo My name is {$fullname};// error


echo "He\'s my father,he is a $job"; //He is my father, he is a Developer
echo "He\'s my father,he is a \$job"; //He's my father, he is a $job
echo 'He\'s my father,he is a $job'; //He's my father, he is $job
echo "He\'s my father,he is a \${job}"; //He's my father, he is ${job}
echo "He\'s my father,he is a \{$job}"; //He's my father, he is a \{Developer}
echo "He\'s my father,he is a {\$job}"; //He's my father, he is a {$job}

$gender = echo "female"; //error
$nation = print "Myanmar"; //Myanmar

// Concat (.)
$firstname = "Aung Aung";
$lastname = "Kyaw Kyaw";

echo $firstname;
echo $lastname;

echo $firstname.$lastname; //AungKyaw Kyaw
echo $firstname.' '$lastname; //Aung Kyaw Kyaw

//Comments
# Single line Comment

/* Mutile line comment
comment 1
comment 2
comment 3*/

?>