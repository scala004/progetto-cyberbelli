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
		<title>Inserimento scuola</title>
		<link rel="stylesheet" href="../condivise/stylesheet.css">
		<script src="../amministrazione/convalida.js" type="text/javascript"></script>
	</head>
	<body>
		<nav>
			<input id="nav-toggle" type="checkbox">
			<div class="logo">CYBER<strong>BELLI</strong></div>
			<ul class="links">
				<li><a href="../home/home.php">Home</a></li>
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
					<p>Registrazione nuova scuola</p>
				</div>
				<div class="form">
				
					<br>
					<form action="../amministrazione/inserisci_scuola.php" id="inserimento_scuola" method="POST" enctype="multipart/form-data">
						
						<div class="form-singolo">
							
							<div style="float:left; width:70%;">
								<label>Codice Meccanografico<font color="red">*</font></label>
								<input name="id_scuola" id="id_scuola" placeholder="Inserisci" maxlength="10">
								<small id="small-id_scuola"></small>
							</div>	
								
							<div style="float:left; width:25%; margin-left:5%; border:0px">
								<label>Logo scuola</label>
								<input name="Filename" id="Filename" type="file"><br>
							</div>

							<div style="clear:both;"></div>
						</div>
							
						<div class="form-singolo">
							<label>Nome istituto scolastico<font color="red">*</font></label>
							<input name="nome_scuola" id="nome_scuola" placeholder="Inserisci" >
							<small id="small-nome_scuola"></small>
						</div>
							
						<div class="form-singolo">
							<label>Telefono<font color="red">*</font></label>
							<input type="tel" name="telefono" id="telefono" placeholder="+390123456789" maxlength="10">
							<small id="small-telefono"></small>					
						</div>
							
						<div class="form-singolo">
							<label>Email<font color="red">*</font></label>
							<input type="email" name="email" id="email" autocomplete="off" placeholder="example@istruzione.it" >
							<small id="small-email"></small>
						</div>
						
						<div class="form-singolo">
							<label>Descrizione scuola</label>
							<textarea name="descrizione_scuola" id="descrizione_scuola" rows="6" cols="50" placeholder="Inserisci una breve descrizione della scuola"></textarea>
						</div>
							
						<div class="form-singolo">
							<label>Sito web scuola<font color="red">*</font></label>
							<input type="url" name="sito" id="sito" >
							<small id="small-sito"></small>
						</div>
							
						<div class="form-singolo">
							<label>Indirizzo scuola<font color="red">*</font></label>
							<input name="via" id="via" placeholder="Via, Numero civico" >
							<small id="small-via"></small>
						</div>
							
						<div class="form-singolo">
							<div style="float:left; width:15%;">
								<label>CAP<font color="red">*</font></label>
								<input name="cap" id="cap" maxlength="5">
								<small id="small-CAP"></small>
							</div>	
								
							<div style="float:left; width:81%; margin-left:4%">
								<label>Città<font color="red">*</font></label>
								<input name="citta" id="citta" >
								<small id="small-citta"></small>
							</div>
							<div style="clear:both;"></div> 
						</div>
							
						<div class="form-singolo">
							<div style="float:left; width:78%;">
								<label>Provincia<font color="red">*</font></label>
								<input name="provincia" id="provincia" >
								<small id="small-provincia"></small>
							</div>
								
							<div class="regione" style="float:left; width: 20%; margin-left: 2%">
								<label>Regione<font color="red">*</font></label>
								<select name="regione" id="regione" required> 
									<option value="">Seleziona</option>
									<option value="Abruzzo">Abruzzo</option>
									<option value="Basilicata">Basilicata</option>
									<option value="Calabria">Calabria</option>
									<option value="Campania">Campania</option>
									<option value="Emilia-Romagna">Emilia-Romagna</option>
									<option value="Friuli-Venezia Giulia">Friuli-Venezia Giulia</option>
									<option value="Lazio">Lazio</option>
									<option value="Liguria">Liguria</option>
									<option value="Lombardia">Lombardia</option>
									<option value="Marche">Marche</option>
									<option value="Molise">Molise</option>
									<option value="Piemonte">Piemonte</option>
									<option value="Puglia">Puglia</option>
									<option value="Sardegna">Sardegna</option>
									<option value="Sicilia">Sicilia</option>
									<option value="Toscana">Toscana</option>
									<option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
									<option value="Umbria">Umbria</option>
									<option value="Valle d'Aosta">Valle d'Aosta</option>
									<option value="Veneto">Veneto</option>
								</select>
								<small id="small-regione"></small>
							</div>
							<div style="clear:both;"></div> 
						</div>
							
						<p>
							<div class="bottone" id="invia" style="float:left;">
								<input name="inserisci_scuola" type="button" value="Inserisci scuola" onclick="validazioneScuola()">
							</div>
							<div class="bottone" id="resetta" style="float:left; margin-left:1%">
								<input name="reset_campi" type="reset" onclick="resetScuola()">
							</div>
						</p>
							
						<br><br>
					</form>
				</div>
				<br>
				<h4><font color="red">*</font>campi obbligatori</h4><br>
			</div>
		</div>
	</body>
</html>