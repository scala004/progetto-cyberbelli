<?php  
include("../condivise/config.php"); 
$id=$_POST['scuola'];
$desc=$_POST['descrizione'];
$youtube=$_POST['youtube'];


if (empty($youtube)){
	$query = "insert into materialee(id_scuola,descrizione_materiale,tipo,percorso) values ('$id','$desc','TIPO','PERCORSO')";
}else{
	$query = "insert into materialee values('','$id','$desc','TIPO','PERCORSO','$youtube','')";
}

$result = mysqli_query($connect,$query) or die (mysqli_error($connect));


//DA FINIRE E SISTEMARE
$imageData = '';
if (isset($_FILES['file']['name'][0])) {
  foreach ($_FILES['file']['name'] as $keys => $values) {
    $fileName = uniqid() . '_' . $_FILES['file']['name'][$keys];
    if (move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'uploads/' . $fileName)) {
      $imageData .= '<img src="uploads/' . $fileName . '" class="thumbnail" />';
    }
  }
}
echo $imageData;

// chiudo la connessione a MySQL
mysqli_close($connect);
  
?>