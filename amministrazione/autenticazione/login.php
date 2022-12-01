<?php
session_start();
include("../../condivise/config.php"); 

if (isset($_SESSION['session_id'])) {
    header('Location: ../autenticazione/autenticazione.html');
    exit;
}

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        echo 'Inserisci username e password';
    } else {
        $query = "
            SELECT *
            FROM login
        ";
		
		$statement = $connection->prepare($query);

		$statement->execute();

		$result = $statement->fetchAll();
		
		foreach ($result as $riga){
			if (($username!=$riga["USER"]) || ($password!=$riga["PASSWORD"])) {
				header('Location: autenticazione.html');
				echo 'Credenziali utente errate ';
			} else{
				session_regenerate_id();
				$_SESSION['session_id'] = session_id();
				$_SESSION['session_user'] = $riga['USER'];
			    header("Location: ../../amministrazione/area_riservata.php");
				exit;
			}
		}		
    }
}
?>