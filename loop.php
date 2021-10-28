<?php
$x = 5;

echo '<br>While Loop';
while($x > 0){
 echo '<br>'.$x;
 $x--;
}

echo '<br>Do while loop';
$x = 5;
do{
    echo '<br>'.$x;
    $x--;
}while($x > 0);

echo '<br>For loop';
for($x = 0; $x <5 ; $x++){
    echo "<br>".$x;
}

echo '<br>Foreach loop';
$x = array('red', 'green', 'blue');
foreach($x as $values){
    echo '<br>'.$values; //the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
}

echo '<br>Foreach loop using both key and values';
$x = array('BMW' => 'X-series', 'Audi' => 'premium'); //associative array
foreach($x as $key => $values){
    echo '<br>'.$key.' = '.$values;
}

echo '<br>Multi-Dimensional Array';
$arr = array(
          array('car', 22, 5),
          array('bus', 11, 23),
          array('CNG', 33, 33)
);
for($i =0; $i < 3; $i++){
    for($j = 0; $j <3 ; $j++){
        echo '<br>'.$arr[$i][$j];
    }
}

//break and continue in loop
echo '<br>For break';
for($x = 0; $x <5 ; $x++){
    if($x == 3)
       break;
    echo "<br>".$x;
}

echo '<br>For continue';
for($x = 0; $x <5 ; $x++){
    if($x == 3)
       continue;
    echo "<br>".$x;
}


?>