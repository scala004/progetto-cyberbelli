<?php  
include("../condivise/config.php"); 
$id=$_POST['scuola'];
$desc=$_POST['descrizione'];
$youtube=$_POST['youtube'];


define("UPLOAD_DIR", "../condivise/materiale");

if(isset($_POST['action']) and $_POST['action'] == 'upload')
{
    if(isset($_FILES['user_file']))
    {
        $file = $_FILES['user_file'];
        if($file['error'] == UPLOAD_ERR_OK and is_uploaded_file($file['tmp_name']))
        {
			$ext = explode(".", $file['tmp_name');
			$tipo= $ext[count($ext)-1];  
            move_uploaded_file($file['tmp_name'], UPLOAD_DIR.$file['name']);
			$percorso='../condivise/materiale/'.$file;
        }
    }
}

if (empty($youtube)){
	$query = "insert into materiale(id_scuola,descrizione_materiale,tipo,percorso) values ('$id','$desc','$tipo','$percorso')";
}else{
	$query = "insert into materiale values('','$id','$desc','$tipo','$percorso','$youtube','')";
}

$statement = $connection->prepare($query);	
$statement->execute();

  
?>