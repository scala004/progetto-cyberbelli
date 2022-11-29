<?php  
include("../condivise/config.php"); 
$COD = $_POST['id_scuola'];
$Email = $_POST['email'];

$query = "SELECT logo_scuola FROM scuola where id_scuola= :id_scuola and email= :email";

$statement = $connection->prepare($query);
$statement->bindParam(':id_scuola', $COD);
$statement->bindParam(':email', $Email);
$statement->execute();

$result = $statement->fetchAll();

unlink($result["logo_scuola"]);
$query = "delete from scuola where id_scuola= :id_scuola and email= :email";
$statement = $connection->prepare($query);
$statement->bindParam(':id_scuola', $COD);
$statement->bindParam(':email', $Email);
$statement->execute();


//header("location: ../amministrazione/elimina_scuola.html");
  
?>