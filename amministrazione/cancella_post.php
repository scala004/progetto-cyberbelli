<?php  
include("../condivise/config.php"); 
$scuola = $_POST['scuola'];
$data = $_POST['post'];
$percorso="../home/post/";

//header("location: ../amministrazione/elimina_post.php");

$query = "SELECT percorso FROM materiale where id_scuola= :id_scuola' and data= :data";
$statement = $connection->prepare($query);
$statement->bindParam(':id_scuola', $scuola);
$statement->bindParam(':data', $data);
$statement->execute();

$result = $statement->fetchAll();
unlink($result["percorso"]);

$query = "delete from materiale where id_scuola= :id_scuola and data= :data";
$statement = $connection->prepare($query);
$statement->bindParam(':id_scuola', $scuola);
$statement->bindParam(':data', $data);
$statement->execute();

?>