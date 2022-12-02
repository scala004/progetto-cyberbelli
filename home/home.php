<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Home</title>
		<link rel="stylesheet" href="../condivise/stylesheet.css"/>
	</head>
	<body>
		<nav>
		  <input id="nav-toggle" type="checkbox" />
		  <div class="logo">CYBER<strong>BELLI</strong></div>
		  <ul class="links">
			<li><a href="home.php">Home</a></li>
			<li><a href="#calendario">Calendario</a></li>
			<li><a href="../scuole/scuole.php">Scuole Aderenti</a></li>
			<li><a href="../about/about.html">About</a></li>
			<li><a href="../amministrazione/area_riservata.php">AreaRiservata</a></li>
		  </ul>
		  <label for="nav-toggle" class="icon-burger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		  </label>
		</nav>
    <div id="divisore">
		<p></p>
    </div>
	
<?php
include("../condivise/config.php"); 

function UserAgentRegCheck($regText){ 
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	return preg_match('@('.$regText.')@', $useragent);
}

function isMobile(){
	return UserAgentRegCheck('iPad|iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS');

}

$query="SELECT * FROM materiale INNER JOIN scuola ON materiale.id_scuola = scuola.id_scuola";

$statement = $connection->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
 
foreach ($result as $riga){
		
		echo " 
		<div class='container_post'>
			<div class='head'>
				<div class='avatar'>
					<img src='".$riga["logo_scuola"]."' alt='Logo Scuola'>
				</div>
				<div class='username_scuola'><p><a href='".$riga["sito"]."'target='_blank'>".$riga["nome_scuola"]."</a></p></div>
			</div>
			<div class='media'>";
			

		if($riga["tipo"]=="jpg" || $riga["tipo"]=="png" || $riga["tipo"]=="jpeg"){			
			echo "<img src='".$riga["percorso"]."'>";
		}else if($riga["tipo"]=="mp4" || $riga["tipo"]=="mkv" || $riga["tipo"]=="avi") {
			if($riga["tipo"]=="mp4"){
				echo"
				<video controls>
					<source src='".$riga["percorso"]."' type='video/mp4'>
				</video>";
			}else if($riga["tipo"]=="mkv"){
				echo"
				<video controls>
					<source src='".$riga["percorso"]."' type='video/mkv'>
				</video>";
			}else if($riga["tipo"]=="avi"){
				echo"
				<video controls>
					<source src='".$riga["percorso"]."' type='video/avi'>
				</video>";	
			}			
		}else if($riga["tipo"]=="pdf" && !isMobile()){
			echo" 
			<embed src='".$riga["percorso"]."' width='100%' height='800px'/>";
		}
		
		echo"
			</div>
			<div class='content_post'>
				<p>".$riga["descrizione_materiale"]."</p> <br>";			
					
				if($riga["youtube"]!=null){
					echo"
						<div>
							<img src='../condivise/icone/youtube.png' style='float:left;width:20px;height:20px;'>
							<p><a href='".$riga["youtube"]."'target='_blank'>Guarda video su youtube</a><p>
						</div>";
				}
				
				if($riga["tipo"]=="pdf"){
					echo"
						<div>
							<img src='../condivise/icone/pdf.png' style='float:left;width:20px;height:20px;'>
							<p><a href='".$riga["percorso"]."'>".basename($riga["percorso"])."</a><p>
						</div>";
				}
				
				echo"
				<div class='dataPost'><p>".$riga["data"]."</p></div>
			</div>
		</div> ";
		
}
	
?>
	</body>
</html>