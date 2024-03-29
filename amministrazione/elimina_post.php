<?php
	session_start();
	if (isset($_SESSION['session_id'])) {
	} else {
		header('Location: ../amministrazione/autenticazione/autenticazione.html');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cancellazione post</title>
		<link rel="stylesheet" href="../condivise/stylesheet.css">
		<script src="../amministrazione/convalida.js" type="text/javascript"></script>
	</head>
	<body>
		<nav>
			<input id="nav-toggle" type="checkbox">
			<div class="logo">CYBER<strong>BELLI</strong></div>
			<ul class="links">
				<li><a href="../home/home.html">Home</a></li>
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
		<div class="container_about">
			<div class="content_about">
				<div class="titolo_about">
					<p>Elimina post</p>
				</div>
				<div class="form">
					
					<br>
					<form action="../amministrazione/cancella_post.php" id="eliminazione_post" method="POST">
					
						<div class="form-singolo">		
							<label>Scuola<font color="red">*</font></label> 						
							<select name="scuola" id="scuola">
								<option value="">Seleziona</option>	
								<?php 
									include("../condivise/config.php"); 
									/* creiamo la query ... */

									$query = "SELECT id_scuola, nome_scuola, citta FROM scuola"; 

									$statement = $connection->prepare($query);
									/* ... ed eseguiamola */

									$statement->execute();

									/* Stampa i risultati della query*/

									$result = $statement->fetchAll();
									 
									foreach ($result as $riga){
										echo "<option value='".$riga["id_scuola"]."'>".$riga["nome_scuola"]." (".$riga["citta"].") - ".$riga["id_scuola"]."</option>";
									} 				 
								?>
							 </select>
							 <small id="small-scuola"></small>
						</div>
						
						<div class="form-singolo">		
							<label>Post da eliminare<font color="red">*</font></label> 						
							<select name="post" id="post">
								<option value="">Seleziona</option>	
								<?php 
									/* creiamo la query ... */

									$query = "SELECT data FROM materiale"; 

									$statement = $connection->prepare($query);
									/* ... ed eseguiamola */

									$statement->execute();

									/* Stampa i risultati della query*/

									$result = $statement->fetchAll();
									foreach ($result as $riga){
										echo "<option value='".$riga["data"]."'>".$riga["data"]."</option>";
									} 				 
								?>
							</select>
							<small id="small-post"></small>
						</div>
						
							<p>
								<div class="bottone" id="invia" style="float:left;">
									<input name="elimina_post" type="button" value="Elimina post" onclick="ElimPost()">
								</div>
								<div class="bottone" id="resetta" style="float:left; margin-left:1%">
									<input name="reset_campi" type="reset" onclick="resetElimPost()">
								</div>
							</p>
					</form>
				</div><br>
            </div>
        </div>
	</body>
</html>