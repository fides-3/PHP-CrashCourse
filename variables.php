<?php
// variable-a container to store data

$name='Zura';
$age=32;
$isFather=true;
$money=19.99;
$salary=null;

echo $name ."<br>";

echo "Hello " . $name. "<br>";

echo "Hello {$name} !<br>";


echo $isFather ."<br>";

// TYPE OF VARIABLE
echo gettype($salary) ."<br>";
echo gettype($isFather)."<br>";
echo gettype($money). "<br>";

// Printing a variable

print_r($name);
echo "<br>";
 var_dump($name);
 echo "<br>";


//  checking a avriable
var_dump(is_double($money));
