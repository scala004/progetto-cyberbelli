<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina di prova</title>
    <link rel="stylesheet" href="../condivise/stylesheet.css" />
  </head>
  <body>
    <nav>
      <input id="nav-toggle" type="checkbox" />
      <div class="logo">CYBER<strong>BELLI</strong></div>
      <ul class="links">
        <li><a href="../home/home.html">Home</a></li>
        <li><a href="#calendario">Calendario</a></li>
        <li><a href="scuole.php">Scuole Aderenti</a></li>
        <li><a href="../about/about.html">About</a></li>
        <li><a href="#amministrazione">AreaRiservata</a></li>
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
/* creiamo la query ... */

$query = "SELECT * FROM scuola"; 

/* ... ed eseguiamola */

$result = MYSQLI_QUERY($connect,$query);

/* Stampa i risultati della query*/
 
 while ($riga = MySQLI_fetch_array($result)){
	

	echo "
	<div class='container_scuola'>
		<div class='head'>
			<div class='avatar'>
				<a href='https://".$riga["sito"]."' target='_blank'>
					<img src='../scuole/img/a.jpg' alt='Logo Scuola'>
				</a>
			</div>
			<div class='username_scuola'>
				<p>".$riga["nome_scuola"]."</p>
				<p>".$riga["indirizzo"]."</p>
				<p>".$riga["cap"]." ".$riga["citta"].", ".$riga["provincia"]."</p>
				<p>".$riga["regione"]."</p>
			</div>
		</div>
		<div class='content_scuola'>
			<div class='descrizione'>
				<p>".$riga["descrizione_scuola"]."</p>
			</div>
			<div class='link_scuola'>
				<a href='https://".$riga["sito"]."target='_blank'><b><p>Vai al sito ufficiale</p></b></a>
			</div>
		</div>
	</div>";

   } 
 
 ?>
 
   </body>
</html>