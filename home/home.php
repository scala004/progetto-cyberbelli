<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Home</title>
		<link rel="stylesheet" href="../condivise/stylesheet.css"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
			.mySlides {display:none}
			.w3-left, .w3-right, .w3-badge {cursor:pointer}
			.w3-badge {height:13px;width:13px;padding:0}
		</style>
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
/* creiamo la query ... */

//$query = "SELECT * FROM materialee";
$query="SELECT * FROM materialee INNER JOIN scuola ON materialee.id_scuola = scuola.id_scuola";

/* ... ed eseguiamola */

$result = MYSQLI_QUERY($connect,$query);


/* Stampa i risultati della query*/
 
while ($riga = MySQLI_fetch_array($result)){
		
		echo " 
		<div class='container_post'>
			<div class='head'>
				<div class='avatar'>
					<img src='".$riga["logo_scuola"]."' alt='logo'>
				</div>
				<div class='username_scuola'><p><a href='https://".$riga["sito"]."'target='_blank'>".$riga["nome_scuola"]."</a></p></div>
			</div>";
			
		$cont=0;
		//tipo1
		if($riga["tipo"]=="TIPO"){
			$cont++;			
			echo "
				<div class='media'>
					<div class='w3-content w3-display-container' style='max-width:800px'>
						<img class='".$riga["id_scuola"]."' src='".$riga["logo_scuola"]."' style='width:100%'>";
		}
			
			//INSERIRE TANTI IF QUANTI SONO IL NUMERO DI FILE DA INSERIRE:
			//if($riga["tipoN"]=="TIPO")
			
			
		if($riga["tipo"]=="TIPO" /* || $riga["tipo2"]=="TIPO"...*/){ 
		echo"
			<div class='w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle' style='width:100%'>
				<div class='w3-left w3-hover-text-khaki' onclick='plusDivs(-1)'>&#10094;</div>
				<div class='w3-right w3-hover-text-khaki' onclick='plusDivs(1)'>&#10095;</div>";
						
		$i=1;
		while($cont>0){
			echo"<span class='w3-badge demo w3-border w3-transparent w3-hover-white' onclick='currentDiv(".$i.")'></span>";
			$cont--;
			$i++;
		}
					
		echo"
					</div>
				</div>
			</div> ";
			
		}
		
		echo"
			<div class='content_post'>
				<p>".$riga["descrizione_materiale"]."</p> <br>
				<p>Allegati:</p>";?>
				<script>tipo_file(<?php$riga['tipo']?>,<?php$riga['percorso']?>);</script>
				<script>tipo_file(<?php$riga['tipo2']?>,<?php$riga['percorso2']?>);</script>
				<script>tipo_file(<?php$riga['tipo3']?>,<?php$riga['percorso3']?>);</script>
				<script>tipo_file(<?php$riga['tipo4']?>,<?php$riga['percorso4']?>);</script>
<?php			
				
				
				
				if($riga["youtube"]!=null){
					echo"
						<div>
							<img src='../condivise/icone/youtube.png' style='float:left;width:20px;height:20px;'>
							<p><a href='".$riga["youtube"]."'target='_blank'>Guarda video su youtube</a><p>
						</div>";
				}

				
				echo"
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
//SISTEMARE FUNZIONE ALTRIMENTI RIPETERLA NORMALMENTE 4 VOLTE
function tipo_file(t, p){
	if(t!=null){
		<?phpecho"<div>";?>;
		if(t==".pdf"){
			<?phpecho "<img src='../condivise/icone/pdf.png' style='float:left;width:20px;height:20px;'>";?>;
		}else if(t==".mp4" || t==".mkv"){
				if(t==".mp4"){
					<?phpecho "<img src='../condivise/icone/mp4.png' style='float:left;width:20px;height:20px;'>";?>;
				}else{
					<?php"<img src='../condivise/icone/mkv.png' style='float:left;width:20px;height:20px;'>";?>;
				}
		}else{
			<?phpecho "<img src='../condivise/icone/foto.png' style='float:left;width:20px;height:20px;'>";?>;				
		}
		<?phpecho" <p><a href='".p."'>".basename(p)."</a><br></p></div>";?>;
	}
	
}
</script>
	
	
	</body>
</html>