<?php  
include("../condivise/config.php"); 
$id=$_POST['scuola'];
$desc=$_POST['descrizione'];
$youtube=$_POST['youtube'];


if (empty($youtube)){
	$query = "insert into materiale(id_scuola,descrizione_materiale,TIPO,PERCORSO) values ('$id','$desc','TIPO','PERCORSO')";
}else{
	$query = "insert into materiale values('','$id','$desc','TIPO','PERCORSO','$youtube','')";  
}

$result = mysqli_query($connect,$query) or die (mysqli_error($connect));

// chiudo la connessione a MySQL
mysqli_close($connect);

//header("location: ../amministrazione/nuovo_post.php");
  
?>