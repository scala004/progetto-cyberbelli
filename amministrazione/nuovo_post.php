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
		<title>Inserimento post</title>
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
					<p>Inserimento nuovo post</p>
				</div>
				<div class="form">
			
					<br>
					<form action="../amministrazione/inserisci_post.php" id="inserimento_post" method="POST" enctype="multipart/form-data">

						<div id="ddArea">
							Seleziona file
							<a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
							</a>
						</div>
						<div id="showThumb"></div>
						<input type="file" name="file" class="d-none" id="file" multiple />
						<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

						<br> <br>
						
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
									include("../condivise/config.php"); 
									/* creiamo la query ... */

									$query = "SELECT id_scuola, nome_scuola, citta FROM scuola"; 
									$statement = $connection->prepare($query);

									/* ... ed eseguiamola */

									$statement->execute();
									$result = $statement->fetchAll();

									/* Stampa i risultati della query*/
									 
									foreach ($result as $riga){
										echo "<option value='".$riga["id_scuola"]."'>".$riga["nome_scuola"]." (".$riga["citta"].") - ".$riga["id_scuola"]."</option>";
									} 				 
								?>
							 </select>
							 <small id="small-scuola"></small>
						</div>

						<div class="form-singolo">
							<label>Link video YouTube</label>
							<input id="youtube" name="youtube" placeholder="www.youtube.com" >
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
		
		<script>
			$(document).ready(function() {
				$("#ddArea").on("dragover", function() {
				  $(this).addClass("drag_over");
				  return false;
				});

				$("#ddArea").on("dragleave", function() {
				  $(this).removeClass("drag_over");
				  return false;
				});

				$("#ddArea").on("click", function(e) {
				  file_explorer();
				});

				$("#ddArea").on("drop", function(e) {
				  e.preventDefault();
				  $(this).removeClass("drag_over");
				  var formData = new FormData();
				  var files = e.originalEvent.dataTransfer.files;
				  for (var i = 0; i < files.length; i++) {
					formData.append("file[]", files[i]);
				  }
				  uploadFormData(formData);
				});

				function file_explorer() {
				  document.getElementById("selectfile").click();
				  document.getElementById("selectfile").onchange = function() {
					files = document.getElementById("selectfile").files;
					var formData = new FormData();

					for (var i = 0; i < files.length; i++) {
					  formData.append("file[]", files[i]);
					}
					uploadFormData(formData);
				  };
				}

				function uploadFormData(form_data) {
				  $(".loading")
					.removeClass("d-none")
					.addClass("d-block");
				  $.ajax({
					url: "../amministrazione/inserisci_post.php",
					method: "POST",
					data: form_data,
					contentType: false,
					cache: false,
					processData: false,
					success: function(data) {
					  $(".loading")
						.removeClass("d-block")
						.addClass("d-none");
					  $("#showThumb").append(data);
					}
				  });
				}
			  });
		</script>
	</body>
</html>