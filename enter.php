<?php

 	$username = $_POST['username'];
 	$password = $_POST['password'];

include ('connect.php');
$sql = "insert into test (username , password) values ('$username' , '$password')";
$result = $conn -> query($sql);
if(!$result){
	die('ERROR:' . mysql_error());
}else{
	echo "註冊成功";
}
?>