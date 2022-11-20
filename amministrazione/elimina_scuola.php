<?php  
include("../condivise/config.php"); 
$COD= $_POST['id_scuola'];
$Email= $_POST['email']; 

$query = "delete from scuola where id_scuola='$COD' and email='$Email'";
$result = mysqli_query($connect,$query) or die (mysqli_error($connect));


mysqli_close($connect);
  
?>