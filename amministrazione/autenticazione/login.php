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
		
		$result = MYSQLI_QUERY($connect,$query);
		
		while($riga = MySQLI_fetch_array($result)){
			
			if ($username!=$riga["USER"] || password_verify($password, $riga["PASSWORD"]==false)) {
				echo 'Credenziali utente errate '; //CAPIRE COSA FAR VISUALIZZARE AL TIZIO
                header('Location: ../autenticazione/autenticazione.html');
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