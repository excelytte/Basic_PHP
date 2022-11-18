<?php

// if statement

$date = date('H');
function greet($time){
    echo "Good $time my guy";
}

if($date < "12") {
    greet("morning");
} elseif ($date < "16") {
    greet("Afternoon");
}
elseif($date < "20") {
    greet("Evening");
} else {
    greet("night");
}

// echo greet();
echo "\n";
function showColor($color) {
    echo "Your favorite color is $color";
}

$randomIndex = rand(0, 4);
$arr = ['Red', 'Green', 'Black', 'Blue', 'Pink'];
switch ($arr[$randomIndex]) {
    case "Red":
        showColor("Red");
        break;
    case "Green":
        showColor("Green");
        break;
    case "Black":
        showColor("Black");
        break;
    case "Blue":
        showColor("Blue");
        break;
    case "Pink":
        showColor("Pink");
        break;
    default:
        echo "you are confused";
}
echo "\n";
foreach ($arr as $item) {
    echo $item. "\n";
}
echo "===============\n";

foreach ($arr as $key => $value){
    echo "\nthe color is: $value\n";
    echo "\nthe key is: $key \n";
    
    
}