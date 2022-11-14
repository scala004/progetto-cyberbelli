<!--Questo file contiene i div, le classi e gli id necessari alla formattazione della pagina home.html-->


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="stylesheet.css">

</head>
<body>
<nav>
	<input id="nav-toggle" type="checkbox">
	<div class="logo">CYBER<strong>BELLI</strong></div>
	<ul class="links">
		<li><a href="">Home</a></li>
		<li><a href="">Calendario</a></li>
		<li><a href="">Scuole</a></li>
		<li><a href="">About</a></li>
		<li><a href="">Amministrazione</a></li>
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>

<div id="divisore">
<p></p><!--Non inserire niente dentro a questo div-->
</div>
<!------------------------------------------------------post con img-------------------------------------------------->
<div class="container_post">
	<div class="head">
		<div class="avatar">
			<img src="">
		</div>
		<div class="username_scuola"><p>Nomescuola - Citta'</p></div>
	</div>
	<div class="media">
		<img src="" alt="">
	</div>
	<div class="content_post">
		<div class="descrizione">
			<p></p>
		</div>
		<div class="dataPost"><p>gg/mm/AAAA</p></div>
	</div>
</div>

<!------------------------------------------------------post con video-------------------------------------------------->
<div class="container_post">
	<div class="head">
		<div class="avatar">
			<img src="" alt="">
		</div>
		<div class="username_scuola"><p>Nomescuola - Citta'</p></div>
	</div>
	<div class="media">
		<video controls>
			<source src="" type="">
		</video>
	</div>
	<div class="content_post">
		<div class="descrizione">
			<p></p>
		</div>
		<div class="dataPost"><p>gg/mm/AAAA</p></div>
	</div>
</div>
</body>
</html>