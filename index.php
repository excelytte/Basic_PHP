<!-- four methods to import a file
*require
*include
*require_once
*include_once -->


<?php
require_once('app/Email.php');

$email = new App\Email();

$email->notify("Na wa for PHP");