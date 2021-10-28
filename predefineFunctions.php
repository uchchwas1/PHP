<?php
$x = 'uchchwas Das';
$y = 15;
$z = 'c';
$arr = array('hello', 'i', 'am');

var_dump($x); //return datatype and value
var_dump($y); //return datatype and value
var_dump($z); //return datatype and value
var_dump($arr); //return datatype and value
var_dump(is_int($y)); //Check if the type of a variable is integer

echo '<br>'.strlen($x); //return length of a variable;
echo '<br>'.strrev($x); //return reverse order;
echo '<br>'.strpos('hello world', 'world'); //return the positon of first matching word or return false if not found
echo '<br>'.str_replace('hello','uchchwas', 'hello world'); //function replaces some characters with some other characters in a string.

//php math
echo('<br>'.pi());

$a = array(1,2,200,100,50,80,5,0);
$min = min($a);
$max = max($a);

echo '<br>'.$min;
echo '<br>'.$max;
echo '<br>'.abs(-2000);
echo '<br>'.sqrt(2000);
echo '<br>'.round(0.49);
echo '<br>'.round(0.50);
echo '<br>'.rand(10,100); //The rand() function generates a random number
echo '<br>'.count($a);
echo '<br> Sorting in assending order';
sort($a);
foreach($a as $key)
   echo '<br>'.$key;

echo '<br> Sorting in assending order';
asort($a);
foreach($a as $key)
   echo '<br>'.$key;
   
echo '<br> Sorting in descending order';
rsort($a);
foreach($a as $key)
    echo '<br>'.$key;

//sorts an associative array in ascending order, according to the key
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
foreach($age as $key => $values){
    echo '<br>Key: '.$key.', Values: '.$values;
}
?>