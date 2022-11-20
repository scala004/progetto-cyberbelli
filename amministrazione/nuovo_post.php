<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Inserimento post</title>
		<link rel="stylesheet" href="stylesheet.css">
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
				<li><a href="../amministrazione/amministrazione.html">AreaRiservata</a></li>
			</ul>
			<label for="nav-toggle" class="icon-burger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</label>
		</nav>

		<div id="divisore">

			<div class="content">
				<div class="titolo">
					Inserimento nuovo post
				</div>
				<div class="form">
					
					<br>
					<form action="../amministrazione/inserisci_post.php" id="inserimento_post">

						<div class="card">
							<label>Inserisci immagini, file e/o video</label>
							<div class="drag-area">
								<span class="visible">
									Drag & drop image here or
									<span class="select" role="button">Browse</span>
								</span>
								<span class="on-drop">Drop images here</span>
								<input id="file" name="file" type="file" class="file" multiple />
							</div>
					
							<!-- IMAGE PREVIEW CONTAINER -->
							<div class="container"></div>
						</div>

						<br> <br>
						<div class="form-singolo">
							<label>Titolo<font color="red">*</font></label>
							<input name="titolo" id="titolo" placeholder="Inserisci" >
							<small id="small-titolo"></small>
						</div>
						
						<div class="form-singolo">
							<label>Descrizione<font color="red">*</font></label>
							<textarea name="descrizione" id="descrizione" rows="10" cols="50" placeholder="Inserisci una descrizione del post"></textarea>
							<small id="small-descrizione"></small>
						</div>
						
						<div class="form-singolo">		
							<label>Scuola<font color="red">*</font></label> 						
							<select name="scuola" id="scuola">
								<option value="">Seleziona</option>	
								<?php 
									include("../amministrazione/config.php"); 
									/* creiamo la query ... */

									$query = "SELECT id_scuola, nome_scuola, citta FROM scuola"; 

									/* ... ed eseguiamola */

									$result = MYSQLI_QUERY($connect,$query);

									/* Stampa i risultati della query*/
									 
									while ($riga = MySQLI_fetch_array($result)){
										echo "<option value='".$riga["id_scuola"]."'>".$riga["nome_scuola"]." (".$riga["citta"].") - ".$riga["id_scuola"]."</option>";
									   } 				 
								?>
							 </select>
							 <small id="small-scuola"></small>
						</div>

						<div class="form-singolo">
							<label>Link video YouTube</label>
							<input id="youtube" placeholder="www.youtube.com" >
							<small id="small-youtube"></small>
						</div>

						<p>
							<div class="bottone" id="invia" style="float:left;">
								<input name="inserisci_post" type="button" value="Pubblica post" onclick="validazionePost()">
							</div>
							<div class="bottone" id="resetta" style="float:left; margin-left:1%">
								<input name="reset_campi" type="reset" onclick="resetPost()">
							</div>
						</p>						
						<br><br>						
					</form>				
				</div>
				<br>
				<h4><font color="red">*</font>campi obbligatori</h4>
			</div>
		</div>
		<script src="test.js"></script>
	</body>
</html>