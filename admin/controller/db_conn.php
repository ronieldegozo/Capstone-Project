<?php


define('EMAIL', '');
define('PASSWORD', '');

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "capstone";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}