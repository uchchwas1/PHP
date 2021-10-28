<?php
//To create a constant, use the define() function

define("variable", "This is value");
echo '<br>'.variable; //a constant with a case-sensitive name

define("VARI", "this is not case sensitive", true);
echo '<br>'.vari; //constant with a case-insensitive name

define('car',[
    'BMW',
    'Audi',
]);
echo '<br>'.car[0];
function test(){
    echo '<br>'.car[1]; //Constants are automatically global and can be used across the entire script
}
test();
?>