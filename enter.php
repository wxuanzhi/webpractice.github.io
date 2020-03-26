<?php

 	$username = $_POST['username'];
 	$password = $_POST['password'];//獲取表單資料

include ('connect.php');
$sql = "insert into test (username , password) values ('$username' , '$password')";
$result = $conn -> query($sql);//執行sql
if(!$result){
	die('ERROR:' . mysql_error());//如果sql執行失敗輸出錯誤
}else{
	echo "註冊成功";
}
?>
