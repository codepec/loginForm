<?php



$dbhost = "sql11.freesqldatabase.com",
$dbuser = "sql11445883",
$dbpass = "bYQEI4DVwu",
$dbname = "sql11445883",

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
