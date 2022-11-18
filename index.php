<?php
function familyName(string $fname, string $lname='Essential'){
  echo "$fname $lname";
}


function sum(int $num1, int $num2){
  return $num1 + $num2;
}

$genderString = "I am a";
function female($str){
  $str .= "female";
}

function male(&$str){
  $str .= " male";
}
female($genderString);
male($genderString);
echo $genderString . "<br>";
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Family</h1>
  <ul>
    <li><?php familyName("Akinee"); ?></li>
    <li><?php familyName("Okoro"); ?></li>
    <li><?php familyName("Matthew"); ?></li>
    <li><?php familyName("Cuppy","Martins"); ?></li>

  </ul>
  <p>The sum of 3 and 19 is :<?php echo sum(3, 19); ?></p>
  

</body>
</html>