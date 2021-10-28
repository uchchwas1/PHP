<?php

$x = 'uchchwas'; //Global var
$a = 15;
$b = 10;

function userInfo(){
    echo 'User name: Uchchwas Das <br> Id: 16200';
}

function localVar(){
    $x = 16200;
    echo '<br>your id is:'.$x;
}

function useGlobalVarInLocally(){
    global $a, $b; //in PHP global var are store in a GLOBALS array


    return $a+$b;
}

function useGlobalVarInLocallyWithKey(){
    $GLOBALS['a'] =  $GLOBALS['a'] + $GLOBALS['b'];
}

function staticKeyword(){
    static $x = 100;
    $x++;
    echo '<br>x value is: '.$x;
}

//withoutStrict mode
function withoutStrict(int $a, int $b){
    return $a+$b;
}

//with Strict mode
declare(strict_types = 1);
function withStrict(int $a, int $b){
    return $a+$b;
}


userInfo(); //Call user define function
localVar();

echo '<br>The ans is:'.useGlobalVarInLocally(); //return sum of global var

useGlobalVarInLocallyWithKey();
echo '<br>The ans is:'.$a; //return sum of global var using key

staticKeyword(); //print x value for static var
staticKeyword(); //print x value for static var
staticKeyword(); //print x value for static var

echo '<br>without Strict output: '.withoutStrict(5,'6'); //withoutStrict mode
?>
