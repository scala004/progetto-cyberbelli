<?php  
include("../condivise/config.php");
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


	$fileExistsFlag = 0;
	$fileName = $_FILES['Filename']['name'];
	/* 
	*	Checking whether the file already exists in the destination folder 
	*/
	$query = "SELECT logo_scuola FROM scuola WHERE logo_scuola='$fileName'";
	$result = $connect->query($query) or die("Error : ".mysqli_error($connect));
	while($row = mysqli_fetch_array($result)) {
		if($row['filename'] == $fileName) {
			$fileExistsFlag = 1;
		}		
	}
	/*
	* 	If file is not present in the destination folder
	*/
	if($fileExistsFlag == 0) {
		$target = "../scuole/img/";		
		$fileTarget = $target.$fileName;	
		$tempFileName = $_FILES["Filename"]["tmp_name"];
		$result = move_uploaded_file($tempFileName,$fileTarget);
		/*
		*	If file was successfully uploaded in the destination folder
		*/
		if($result) { 
			echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";	
			if (empty($desc)){
				$query = "insert into scuola(id_scuola,nome_scuola,telefono,email,logo_scuola,sito,indirizzo,cap,citta,provincia,regione) values ('$id','$nome','$tel','$email','$fileTarget','$sito','$indirizzo','$cap','$citta','$provincia','$regione')";
			}else{
				$query = "insert into scuola values('$id','$nome','$tel','$email','$fileTarget','$desc','$sito','$indirizzo','$cap','$citta','$provincia','$regione')";   
			}
			$result = mysqli_query($connect,$query) or die (mysqli_error($connect));		
		}
		else {			
			echo "Sorry !!! There was an error in uploading your file";			
		}
	}
	/*
	* 	If file is already present in the destination folder
	*/
	else {
		echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
	}



// chiudo la connessione a MySQL
mysqli_close($connect);
  
?>