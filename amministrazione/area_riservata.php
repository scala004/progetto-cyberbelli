<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Area Riservata</title>
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
		<?php
			session_start();

			if (isset($_SESSION['session_id'])) {
			} else {
				header('Location: ../amministrazione/amministrazione.html');
			}
		?>
		<div id="divisore">
			<div class="content">
				<div class="titolo">
					Benvenuto nell'area riservate di CYBERBELLI
				</div>
				<br><br>

				<div style="margin:auto;width:300px;height:200px;">
                    <li><a href="../amministrazione/elimina_scuola.php">Elimina una scuola</a></li> 
                    <ul>
                        <li><a href="../amministrazione/nuova_scuola.php">Inserisci una nuova scuola</a></li>
                        <li><a href="../amministrazione/nuovo_post.php">Inserisci un nuovo post</a></li>
                        <li><a href="../amministrazione/elimina_post.php">Elimina un post</a></li>
                    </ul>
                    <a href="../amministrazione/autenticazione/logout.php"><button>Logout</button></a>
				</div>

		   </div>
		</div>

	</body>
</html>