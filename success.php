<?php
$username=$_POST['username'];
$password=$_POST['password'];
include('connect.php');
$row = $result -> fetch_array(MYSQLI_ASSOC);//哪種類型的數值

if(!$row){
    echo "錯誤";
}else{
    echo "帳號:".$row['username'].";"."密碼:".$row['password'];
    echo  '<br>';
}
if($row['username'] === $username && $row['password'] === $password){
    echo "歡迎你".$row['username'];
}else{
    echo"登入失敗";
}
?>
