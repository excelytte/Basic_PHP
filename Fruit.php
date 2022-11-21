<?php


class Fruit
{
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
}

$apple = new Fruit();

$apple->set_name("Apple"); 
$apple->set_color("Green");

echo 'The name is:' .$apple->get_name(); 
echo "<br>";
echo 'The color is:' .$apple->get_color();

echo "<br>";
echo "<br>";

$pineapple = new Fruit();

$pineapple ->set_name("Pineapple");
$pineapple ->set_color("Yellow");


echo 'The name is:' .$pineapple->get_name(); 
echo "<br>";
echo 'The color is:' .$pineapple->get_color();