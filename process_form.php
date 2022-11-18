<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h1> Registration Successful </h1>";
    echo "<div>Your details are: </div>";
    echo "<div>Name: ".$_POST['name'] ."</div>";
    echo "<div>email: ".$_POST['email'] ."</div>";
    echo "<div>Password: ".$_POST['password'] ."</div>";
}else {
    echo "<h1>We only accept post methods </h1>";
}


?>