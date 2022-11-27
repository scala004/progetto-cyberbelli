<?php  
include("../condivise/config.php"); 
$scuola = $_POST['scuola'];
$data = $_POST['post'];
$percorso="../home/post/";

$query = "SELECT id_materiale FROM materiale where id_scuola='$scuola' and data='$data'";
$result = mysqli_query($connect,$query) or die (mysqli_error($connect));
$riga = MySQLI_fetch_array($result);
$dir=$percorso.$riga["id_materiale"];

//ELIMINA LA CARTELLA (ANCHE QUELLE PIENE)
foreach(scandir($dir) as $file) {
    if ('.' === $file || '..' === $file) continue;
    if (is_dir($dir.'/'.$file)) rmdir_recursive($dir.'/'.$file);
    else unlink($dir.'/'.$file);
  }
  rmdir($dir);
  

$query = "delete from materiale where id_scuola='$scuola' and data='$data'";
$result = mysqli_query($connect,$query) or die (mysqli_error($connect));

mysqli_close($connect);

//header("location: ../amministrazione/elimina_post.php");

  
?>