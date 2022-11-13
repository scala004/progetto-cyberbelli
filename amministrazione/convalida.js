function validazioneDati(){
	
var cod_mecc="";
var nome="";
var tel="";
var cap="";
var provincia="";
var citta="";
var email="";
var indirizzo="";
var sito="";
var verifica=true;

cod_mecc = document.getElementById("id_scuola").value;
nome = document.getElementById("nome_scuola").value;
tel = document.getElementById("telefono").value;
cap = document.getElementById("cap").value;
provincia = document.getElementById("provincia").value;
citta = document.getElementById("citta").value;
email = document.getElementById("email").value;
indirizzo = document.getElementById("via").value;
sito = document.getElementById("sito").value;

if (cod_mecc == "" || cod_mecc == "undefined") {
	  document.getElementById("id_scuola").style.borderColor = "red";
	  document.getElementById("small-id_scuola").innerHTML = "Il codice meccanografico è obbligatorio";
	  document.getElementById("small-id_scuola").style.color="red";
	  verifica=false;
}else if(cod_mecc.length<10){
	document.getElementById("small-id_scuola").innerHTML = "Il codice meccanografico è troppo corto";
	document.getElementById("small-id_scuola").style.color="red";
	document.getElementById("id_scuola").style.borderColor = "red";
	verifica=false;
}
else{
	document.getElementById("small-id_scuola").innerHTML = "";
	document.getElementById("id_scuola").style.borderColor = "green";
}
if(nome == "" || nome == "undefined"){
	document.getElementById("small-nome_scuola").innerHTML = "Il nome della scuola è obbligatorio";
	document.getElementById("small-nome_scuola").style.color="red";
	document.getElementById("nome_scuola").style.borderColor = "red";
	verifica=false;
}
else if(nome.length<5){
	document.getElementById("small-nome_scuola").innerHTML = "Il nome della scuola è troppo corto";
	document.getElementById("small-nome_scuola").style.color="red";
	document.getElementById("nome_scuola").style.borderColor = "red";
	verifica=false;
}
else {
	document.getElementById("small-nome_scuola").innerHTML = "";
	document.getElementById("nome_scuola").style.borderColor = "green";
}
if(tel == "" || tel == "undefined"){
	document.getElementById("small-telefono").innerHTML = "Il telefono è obbligatorio";
	document.getElementById("small-telefono").style.color="red";
	document.getElementById("telefono").style.borderColor = "red";
	verifica=false;
}
else if(tel.length<9){
	document.getElementById("small-telefono").innerHTML = "Il numero di telefono è troppo corto";
	document.getElementById("small-telefono").style.color="red";
	document.getElementById("telefono").style.borderColor = "red";
	verifica=false;
}
else if(tel.lenght>10){
	document.getElementById("small-telefono").innerHTML = "Il numero di telefono è troppo lungo";
	document.getElementById("small-telefono").style.color="red";
	document.getElementById("telefono").style.borderColor = "red";
	verifica=false;
}
else if(isNaN(tel)){
	document.getElementById("small-telefono").innerHTML = "Il numero di telefono è in un formato non corretto";
	document.getElementById("small-telefono").style.color="red";
	document.getElementById("telefono").style.borderColor = "red";
	verifica=false;
}
else{
	document.getElementById("small-telefono").innerHTML = "";
	document.getElementById("telefono").style.borderColor = "green";
}
if(cap == "" || cap == "undefined"){
	document.getElementById("small-CAP").innerHTML = "Il CAP è obbligatorio";
	document.getElementById("small-CAP").style.color="red";
	document.getElementById("cap").style.borderColor = "red";
	verifica=false;
}
else if(cap.lenght<5 || cap.lenght>5){
	document.getElementById("small-CAP").innerHTML = "Il CAP è inesistente";
	document.getElementById("small-CAP").style.color="red";
	document.getElementById("cap").style.borderColor = "red";
	verifica=false;
}
else if(isNaN(cap)){
	document.getElementById("small-CAP").innerHTML = "Il CAP non può contenere lettere";
	document.getElementById("small-CAP").style.color="red";
	document.getElementById("cap").style.borderColor = "red";
	verifica=false;
}
else{
	document.getElementById("small-CAP").innerHTML = "";
	document.getElementById("cap").style.borderColor = "green";
}
if(provincia == "" || provincia == "undefined"){
	document.getElementById("small-provincia").innerHTML = "La provincia è obbligatoria";
	document.getElementById("small-provincia").style.color="red";
	document.getElementById("provincia").style.borderColor = "red";
	verifica=false;
}
else if(provincia.lenght<2){
	document.getElementById("small-provincia").innerHTML = "La provincia indicata non esiste";
	document.getElementById("small-provincia").style.color="red";
	document.getElementById("provincia").style.borderColor = "red";
	verifica=false;
}
else{
	document.getElementById("small-provincia").innerHTML = "";
	document.getElementById("provincia").style.borderColor = "green";
}
if(citta == "" || citta == "undefined"){
	document.getElementById("small-citta").innerHTML = "La città è obbligatorio";
	document.getElementById("small-citta").style.color="red";
	document.getElementById("citta").style.borderColor = "red";
	verifica=false;
}
else{
	document.getElementById("small-citta").innerHTML = "";
	document.getElementById("citta").style.borderColor = "green";
}
if(email == "" || email == "undefined"){
	document.getElementById("small-email").innerHTML = "L'indirizzo email è obbligatorio";
	document.getElementById("small-email").style.color="red";
	document.getElementById("email").style.borderColor = "red";
	verifica=false;
}
else if(!ValidateEmail(email)){
	document.getElementById("small-email").innerHTML = "L'indirizzo email è in un formato non corretto";
	document.getElementById("small-email").style.color="red";
	document.getElementById("email").style.borderColor = "red";
	verifica=false;
}
else{
	document.getElementById("small-email").innerHTML = "";
	document.getElementById("email").style.borderColor = "green";
}
if(indirizzo == "" || indirizzo == "undefined"){
	document.getElementById("small-via").innerHTML = "L'indirizzo è obbligatorio";
	document.getElementById("small-via").style.color="red";
	document.getElementById("via").style.borderColor = "red";
	verifica=false;
}
else{
	document.getElementById("small-via").innerHTML = "";
	document.getElementById("via").style.borderColor = "green";
}
if(sito == "" || sito == "undefined"){
	document.getElementById("small-sito").innerHTML = "Il sito  è obbligatorio";
	document.getElementById("small-sito").style.color="red";
	document.getElementById("sito").style.borderColor = "red";
	verifica=false;
}
else{
	document.getElementById("small-sito").innerHTML = "";
	document.getElementById("sito").style.borderColor = "green";
}
if(verifica==true){
	document.getElementById("inserimento_scuola").submit();
}
}


function resetDati(){
	document.getElementById("id_scuola").style.borderColor = "#f0f0f0";
	document.getElementById("small-id_scuola").innerHTML = "";

	document.getElementById("nome_scuola").style.borderColor = "#f0f0f0";
	document.getElementById("small-nome_scuola").innerHTML = "";

	document.getElementById("telefono").style.borderColor = "#f0f0f0";
	document.getElementById("small-telefono").innerHTML = "";

	document.getElementById("cap").style.borderColor = "#f0f0f0";
	document.getElementById("small-CAP").innerHTML = "";

	document.getElementById("provincia").style.borderColor = "#f0f0f0";
	document.getElementById("small-provincia").innerHTML = "";

	document.getElementById("citta").style.borderColor = "#f0f0f0";
	document.getElementById("small-citta").innerHTML = "";

	document.getElementById("email").style.borderColor = "#f0f0f0";
	document.getElementById("small-email").innerHTML = "";

	document.getElementById("via").style.borderColor = "#f0f0f0";
	document.getElementById("small-via").innerHTML = "";

	document.getElementById("sito").style.borderColor = "#f0f0f0";
	document.getElementById("small-sito").innerHTML = "";	
}


function ValidateEmail(mail) {
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
    return (true);
}else{
	return (false);
}
}