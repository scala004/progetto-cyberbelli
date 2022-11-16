<?php
   /* connessione al database */

$hostname = "mysql.giorgi.edu";   //172.16.12.53 server linux
$username = "5bi";
$password = "cyberbelli";
$userstable = "cyberbelli";
$dbName = "cyberbelli";

/* connettiamoci  a MYSQL */

$connect=MySQLI_connect($hostname, $username, $password) OR DIE("Unable to connect to MYSQL");

/* selezioniamo il database*/

mysqlI_select_db($connect,$dbName) or die( "Unable to select database"); 




$query = "SELECT id_scuola,nome_scuola FROM scuola"; 

/* ... ed eseguiamola */

$result = MYSQLI_QUERY($connect,$query);

?>