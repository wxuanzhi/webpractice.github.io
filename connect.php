<?php

 	$username = $_POST['username'];
 	$password = $_POST['password'];

$db = 'mysql';//資料庫類型
$dbhost = 'localhost';//資料庫主機名
$dbname = 'test';//資料庫
$dbuser = 'root';//資料庫用戶名
$dbpass = '';//對應的密碼
$conn = new mysqli("$dbhost" , "$dbuser" , "$dbpass" , "$dbname");
$result = $conn -> query("select * from test where username = '$username' and password = '$password'");

if(!$result){
	echo "ERROR";

}

?>
