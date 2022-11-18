<?php  
include("../amministrazione/config.php"); 
$id= $_POST['id_scuola'];
$nome= $_POST['nome_scuola'];
$email= $_POST['email'];
$tel= $_POST['telefono'];
$desc= $_POST['descrizione_scuola'];
$sito= $_POST['sito'];
$indirizzo= $_POST['via'];
$cap= $_POST['cap'];
$citta= $_POST['citta'];
$provincia= $_POST['provincia'];
$regione = $_POST['regione'];

//CAPIRE COME GESTIRE IL LOGO (INDIRIZZO DELLA CARTELLA CONTENENTE IL FILE)

if (empty($desc)){
	$query = "insert into scuola(id_scuola,nome_scuola,telefono,email,logo_scuola,sito,indirizzo,cap,citta,provincia,regione) values ('$id','$nome','$tel','$email','logo','$sito','$indirizzo','$cap','$citta','$provincia','$regione')";
}else{
	$query = "insert into scuola values('$id','$nome','$tel','$email','logo','$desc','$sito','$indirizzo','$cap','$citta','$provincia','$regione')";   
}

$result = mysqli_query($connect,$query) or die (mysqli_error($connect));


// chiudo la connessione a MySQL
mysqli_close($connect);
  
?>