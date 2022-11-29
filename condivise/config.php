<?php
$host = "172.16.12.53";
$username = "5ibg28";
$password = "utenti";
$dbname = "cyberbelli";
$dsn = "mysql:host=$host;dbname=$dbname";


try{
	$connection = new PDO($dsn, $username, $password);
}
catch(PDOException $error){
	echo $error -> getMessage();
}

?>