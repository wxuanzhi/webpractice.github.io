<?php

 	$username = $_POST['username'];
 	$password = $_POST['password'];

$db = 'mysql';
$dbhost = 'localhost';
$dbname = 'test';
$dbuser = 'root';
$dbpass = '';
$conn = new mysqli("$dbhost" , "$dbuser" , "$dbpass" , "$dbname");
$result = $conn -> query("select * from test where username = '$username' and password = '$password'");

if(!$result){
	echo "ERROR";

}

?>