<?php
$host = 'https://giorgi-vms.dyndns.org/phpmyadmvms/';
$user = '5bi';
$pass = 'cyberbelli';
$db = 'appuntamenti';
$con = @mysql_connect($host,$user,$pass) or die (mysql_error());
$sel = @mysql_select_db($db) or die (mysql_error());
?>
