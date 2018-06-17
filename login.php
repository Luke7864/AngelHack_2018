<?php

session_start();
//Connecting MySQL
$host='localhost';
$user='localshare';
$pw= 'angelhack1'; //DB Password
$dbname= 'localshare';
$sqli= new mysqli($host, $user, $pw, $dbname);

$id=POST['id']; //From html get id -> id
$password=POST['pwd']; //From html get pwd -> password

//SQL
$sql= "SELECT * FROM account_info WHERE id = '{$id}' AND pwd='{$password}'"; //Send
$res = $sqli->query($sql);

//IF TRUE -> LOGIN OK
if($res->num_rows ==1){
	$memberInfo = $res->fetch_array(MYSQLI_ASSOC);
	//Make Session
	$_SESSION['$id'];

	//Check After Making Session
	if(isset($_SESSION['$id'])){
		//Move to Home
		header("Location:./index.php");
	}
}
//IF FALSE -> SHOW ERROR MSG
else{
	echo "<script>alert('Wrong ID or Password'); </script>";
}
?>