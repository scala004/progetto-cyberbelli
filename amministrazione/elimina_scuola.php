<?php  
include("../condivise/config.php"); 
$COD = $_POST['id_scuola'];
$Email = $_POST['email'];

$query = "SELECT logo_scuola FROM scuola where id_scuola='$COD' and email='$Email'";
$result = mysqli_query($connect,$query) or die (mysqli_error($connect));
$riga = MySQLI_fetch_array($result);
unlink($riga["logo_scuola"]);
$query = "delete from scuola where id_scuola='$COD' and email='$Email'";
$result = mysqli_query($connect,$query) or die (mysqli_error($connect));

mysqli_close($connect);

//header("location: ../amministrazione/elimina_scuola.html");
  
?>