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
		<title>Cancellazione scuola</title>
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
				<li><a href="../amministrazione/area_riservata.php">AreaRiservata</a></li>
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
					Elimina scuola
				</div>
				<div class="form">
					
					<br>
					<form action="../amministrazione/cancella_scuola.php" id="eliminazione_scuola" method="POST">
					
						<div class="form-singolo">
						
							<div style="float:left; width:100%;">
								<label>Codice Meccanografico<font color="red">*</font></label>
								<input name="id_scuola" id="id_scuola" placeholder="Inserisci" maxlength="10">
								<small id="small-id_scuola"></small>
								<br>
							</div>	
						</div>
							
							<div class="form-singolo">
							<label>Conferma email<font color="red">*</font></label>
							<input type="email" name="email" id="email" placeholder="example@istruzione.it" autocomplete="off">
							<small id="small-email"></small>
							</div>
							
							<div class="bottone" id="invia" style="float:left;">
								<input name="inserisci_scuola" type="button" value="Elimina scuola" onclick="ElimScuola()">
							</div>
							<div class="bottone" id="resetta" style="float:left; margin-left:1%">
								<input name="reset_campi" type="reset" onclick="resetElimScuola()">
							</div>
					</form>
				</div>
            </div>
        </div>
	</body>
</html>