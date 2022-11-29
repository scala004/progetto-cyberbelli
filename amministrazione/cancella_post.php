<?php  
include("../condivise/config.php"); 
$scuola = $_POST['scuola'];
$data = $_POST['post'];
$percorso="../home/post/";

$query = "SELECT id_materiale FROM materiale where id_scuola= :id_scuola' and data= :data";
$statement = $connection->prepare($query);
$statement->bindParam(':id_scuola', $scuola);
$statement->bindParam(':data', $data);
$statement->execute();

$result = $statement->fetchAll();
$dir=$percorso.$result["id_materiale"];

/*
//ELIMINA LE CARTELLE (ANCHE QUELLE PIENE)
foreach(scandir($dir) as $file) {
    if ('.' === $file || '..' === $file) continue;
    if (is_dir($dir.'/'.$file)) rmdir_recursive($dir.'/'.$file);
    else unlink($dir.'/'.$file);
  }
  rmdir($dir);
*/

$query = "delete from materiale where id_scuola= :id_scuola and data= :data";
$statement = $connection->prepare($query);
$statement->bindParam(':id_scuola', $scuola);
$statement->bindParam(':data', $data);
$statement->execute();

//header("location: ../amministrazione/elimina_post.php");

?>