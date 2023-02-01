<?php
// require('class/api/Login.php');
// require('class/src/Login.php');
require('autoload.php');

$login = new api\Login();
$login->login();
echo "<br>";
$login = new src\Login();
$login->login();
