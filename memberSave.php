<?php
//DB CONNECTING
$host = 'localhost';
$user = 'localshare';
$pw = 'angelhack1'; //DB Password
$dbName='localshare';
$mysqli = new mysqli($host, $user, $pw, $dbName);


$id=&_POST['id']; //GET ID FROM HTML -> ID
$password=md5($_POST['pwd']); //GET PWD FROM HTML -> PASSWORD
$name=&_POST['name']; //GET NAME FROM HTML -> NAME
$number=&_POST['number']; //GET NUMBER FORM HTML -> NUMBER
$email=&_POST['email']; //GET EMAIL FROM HTML -> EMAIL

//SQL
$sql = "insert into account_info (id, pwd, name, number, email)";
$sql = $sql. "values('$id', '$password', '$name', '$number', '$email');";

if($mysqli->query($sql)){
	echo 'success inserting';
}
else{
	echo 'failde to insert sql';
}
?>