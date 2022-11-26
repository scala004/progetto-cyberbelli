<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina di prova</title>
    <link rel="stylesheet" href="../condivise/stylesheet.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <nav>
      <input id="nav-toggle" type="checkbox" />
      <div class="logo">CYBER<strong>BELLI</strong></div>
      <ul class="links">
        <li><a href="home.html">Home</a></li>
        <li><a href="#calendario">Calendario</a></li>
        <li><a href="../scuole/scuole.php">Scuole Aderenti</a></li>
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

$query = "SELECT * FROM materialee";

/* ... ed eseguiamola */

$result = MYSQLI_QUERY($connect,$query);

/* Stampa i risultati della query*/
 
 while ($riga = MySQLI_fetch_array($result)){
	 $query = 'SELECT * WHERE id_scuola=$riga["id_scuola"]';
	 $result2 = MYSQLI_QUERY($connect,$query);
	 $riga2 = MySQLI_fetch_array($result2); 
	 echo "
	 
	<div class='container_post'>
		<div class='head'>
			<div class='avatar'>
				<img src='".$riga2["nome_scuola"]."' alt='logo'>
			</div>
			<div class='username_scuola'><p>".$riga["id_scuola"]."</p></div>
		</div>
		<div class='media'>
			<div class='w3-content w3-display-container' style='max-width:800px'>
				<img class='mySlides' src='img_nature_wide.jpg' style='width:100%'>
				<img class='mySlides' src='img_snow_wide.jpg' style='width:100%'>
				<img class='mySlides' src='img_mountains_wide.jpg' style='width:100%'>
				<div class='w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle' style='width:100%'>
					<div class='w3-left w3-hover-text-khaki' onclick='plusDivs(-1)'>&#10094;</div>
					<div class='w3-right w3-hover-text-khaki' onclick='plusDivs(1)'>&#10095;</div>
					<span class='w3-badge demo w3-border w3-transparent w3-hover-white' onclick='currentDiv(1)'></span>
					<span class='w3-badge demo w3-border w3-transparent w3-hover-white' onclick='currentDiv(2)'></span>
					<span class='w3-badge demo w3-border w3-transparent w3-hover-white' onclick='currentDiv(3)'></span>
					<span class='w3-badge demo w3-border w3-transparent w3-hover-white' onclick='currentDiv(4)'></span>
				</div>
			</div>
		</div>
		<div class='content_post'>
			<p>".$riga["descrizione_materiale"]."</p>
			<div class='dataPost'><p>".$riga["data"]."</p></div>
		</div>
    </div> ";
	
	}
	
?>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
	
	
  </body>
</html>












<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
<body>



</body>
</html> 
